<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $lists = Admin::orderBy('created_at','desc')->paginate(10);
        return view('admin/admin_index',compact('lists'));
    }

    public function add(){
        return view('admin/admin_add');
    }

    public function create(){
        //验证
        $this->validate(request(),[
            'account' => 'required|min:5|max:20|unique:admins,account',
            'password' => 'required|string|confirmed|min:6',
            'status' => 'required|integer'
        ]);

        //逻辑
        $data = [
            'account' => request('account',''),
            'password' => bcrypt(request('password')),
            'status' => request('status',1)
        ];
        $res = Admin::create($data);

        return redirect('admin/admin/index');
    }

    public function changePwd(){
        //验证
        $this->validate(request(),[
            'pwd' => 'required|string|min:6',
            'id' => 'required|integer'
        ]);

        //逻辑
        $res = Admin::where(['id'=>request('id',0)])->update(['password'=>bcrypt(request('pwd',''))]);

        //渲染
        returnJson(0,'密码修改成功');
    }

}
