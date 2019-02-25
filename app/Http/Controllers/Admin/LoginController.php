<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index(){

        return view('admin/login');
    }

    public function login(){
        //验证
        $this->validate(request(),[
            'account' => 'required',
            'password' => 'required',
            'verify' => 'required|captcha'
        ]);

        $account = strip_tags(trim(request('account')));
        $pwd = bPwd(request('password'));

        //逻辑
        $admins = Admin::where(['account'=>$account,'password'=>$pwd])->select('id','account','status')->first()->toArray();
        if(!$admins)
            returnJson(1,'账号或密码错误1');

        if($admins['status'] != 1)
            returnJson(1,'账号状态异常2');

        //更新token和last_login_time

        $last_login_time = time();
        $token = bcrypt($last_login_time);
        $res = Admin::where(['account'=>$account,'password'=>$pwd])->update(['last_login_time'=>$last_login_time,'token'=>$token]);
        if(!$res)
            returnJson(1,'登录失败');

        //添加session
        $admins['token'] = $token;
        session()->put(['admins' => $admins]);
        session()->save();

        returnJson(0,'登陆成功','');

    }

    public function verify(){
        return captcha_src();
    }

}
