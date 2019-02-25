<?php

namespace App\Http\Middleware;

use App\Model\Admin;
use Closure;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $admins = $request->session()->get('admins');
        if(!$admins || !isset($admins['id']) || !isset($admins['token']))
            return redirect('/admin/login/index')->withErrors(['msg'=>'请先登录']);
        $check = Admin::where(['id'=>$admins['id'],'token'=>$admins['token']])->count('id');
        if(!$check){
            $request->session()->forget('admins');
            return redirect('/admin/login/index')->withErrors(['msg'=>'账号在另一设备上登录,请重新登录']);
        }

        return $next($request);
    }
}
