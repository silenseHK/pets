@extends('admin/layout/main')

@section('js')
    <script src="/admin/js/article.js"></script>
    <script type="text/javascript" src="/wangEditor/wangEditor.min.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor
        var editor = new E('#editor')
        editor.customConfig.uploadImgShowBase64 = true
        editor.customConfig.uploadImgServer = '/admin/article/uploadContentImg'
        var $text1 = $('#text1')
        editor.customConfig.onchange = function (html) {
            // 监控变化，同步更新到 textarea
            $text1.val(html)
        }

        editor.create()
        editor.txt.html()
        $text1.val(editor.txt.html())
    </script>
@endsection

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            添加文章
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <form id="myForm" role="form" action="/admin/article/edit" method="post">

                                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                        <input type="hidden" name="id" value="{{$article->id}}" />

                                        <div class="form-group">
                                            <label>文章标题</label>
                                            <input name="title" class="form-control" placeholder="文章标题" value="{{$article->title}}">
                                        </div>

                                        <div class="form-group">
                                            <label>文章摘要</label>
                                            <textarea class="form-control" name="abstract" rows="3">{{$article->abstract}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>封面图</label>
                                            <input type="file" onchange="uploadCateIcon.call(this)">
                                            <input name="icon" type="hidden" value="{{$article->cover_img}}" />
                                            <img class="img-icon" src="{{$article->cover_img?asset($article->cover_img):'/admin/images/empty.png'}}" style="width:70px;height:70px;border:1px solid #ddd;border-radius: 8px;" />
                                        </div>
                                        <div class="form-group">
                                            <label>文章详情</label>

                                            <div class="form-group" id="editor">
                                                {!! stripslashes($article->content) !!}
                                            </div>
                                            <textarea hidden id="text1" name="content" style="width:100%; height:200px;">

                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>状态</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="1" @if($article->status==1) checked @endif>可用
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="2" @if($article->status==2) checked @endif>不可用
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <a href="javascript:$('#myForm').submit();" class="btn btn-primary btn-lg">提交</a>
                                        </div>
                                    </form>
                                    @include('admin.layout.error')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection