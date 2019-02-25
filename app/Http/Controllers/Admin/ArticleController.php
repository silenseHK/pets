<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    public function index(){
        $lists = Article::orderBy('created_at','desc')->paginate(10);
        return view('admin/article_index',compact('lists'));
    }

    public function add(){
        return view('admin/article_add');
    }

    public function create(){
        //验证
        $this->validate(request(),[
            'title' => 'required|max:50',
            'abstract' => 'required|min:10',
            'status' => 'required|integer'
        ]);

//        dd(request()->all());

        $data = [
            'title' => request('title',''),
            'content' => addslashes(request('content','')),
            'abstract' => request('abstract',''),
            'status' => request('status','1'),
            'cover_img' => request('icon','1'),
        ];

        //逻辑
        $res = Article::create($data);

        //渲染
        return redirect('admin/article/index');
    }

    public function update(Article $article){
        return view('admin/article_update',compact('article'));
    }

    public function edit(){
        //验证
        $this->validate(request(),[
            'id' => 'required|integer|min:1',
            'title' => 'required|max:50',
            'abstract' => 'required|min:10',
            'status' => 'required|integer'
        ]);

        $id = intval(request('id',0));

        $data = [
            'title' => request('title',''),
            'content' => addslashes(request('content','')),
            'abstract' => request('abstract',''),
            'status' => request('status','1'),
            'cover_img' => request('icon','1'),
        ];

        $res = Article::where(['id'=>$id])->update($data);

        return redirect('admin/article/index');
    }

    public function del(){
        //验证
        $this->validate(request(),[
            'id' => 'required|integer|min:1'
        ]);

        $res = Article::where(['id'=>request('id')])->delete();

        return redirect('admin/article/index');
    }

    public function uploadImg(Request $request){
        $path = $request->file(array_keys(request()->all())[1])->store('article');
        returnJson(0,'success', [asset("storage/{$path}"),"storage/{$path}"]);
    }

    public function uploadContentImg(Request $request){
        $path = $request->file(array_keys(request()->all())[0])->store('article_content');
        return json_encode(['errno'=>0,'data'=>[asset("storage/{$path}")]]);
    }

}
