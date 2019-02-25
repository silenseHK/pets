<?php

namespace App\Http\Controllers\Admin;

use App\Libraries\Tree;
use App\Model\Cate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateController extends Controller
{

    public function index(){
        $lists = Cate::orderBy('created_at','desc')->get()->toArray();
        $lists = Tree::makeTree($lists);
//        dd($lists);
        return view('admin/cate_index',compact('lists'));
    }

    public function add(){
        return view('admin/cate_add');
    }

    public function uploadImg(Request $request){
        $path = $request->file('file')->store('cate');
        returnJson(0,'success', [asset("storage/{$path}"),$path]);
    }

    public function create(){
        //验证
        $this->validate(request(),[
            'name' => 'required|max:10|unique:cates,name',
            'pid' => 'bail|required|integer',
            'status' => 'required|integer',
            'icon' => 'required|string'
        ]);

        //逻辑
        $res = Cate::create(request(['name','pid','status','icon']));

        return redirect('admin/cate/index');
    }

    public function update(Cate $cate){
        return view('admin/cate_update',compact('cate'));
    }

    public function edit(){
        //验证
        $this->validate(request(),[
            'name' => 'required|max:10',
            'status' => 'required:integer',
            'icon' => 'required|string',
            'id' => 'required|integer'
        ]);

        $data = [
            'name' => request('name'),
            'status' => request('status'),
            'icon' => request('icon')
        ];

        //逻辑
        $res = Cate::where(['id'=>request('id','0')])->update($data);

        return redirect('admin/cate/index');
    }

    public function del(){
        //验证
        $this->validate(request(),[
            'id' => 'required|integer'
        ]);

        //逻辑
        $id = request('id',0);
        #查看是否有下一级分类
        $check = Cate::where(['pid'=>$id])->count('id');
        if($check) return redirect('admin/cate/index')->withErrors('该分类下还有二级分类,请先处理二级分类');

        $res = Cate::where(['id'=>$id])->delete();

        return redirect('admin/cate/index');
    }

}
