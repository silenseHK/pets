@extends('admin/layout/main')

@section('js')
    <script src="/admin/js/cate.js"></script>
@endsection

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            修改分类
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <form id="myForm" role="form" action="/admin/cate/edit" method="post">

                                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                        <input type="hidden" name="id" value="{{$cate->id}}" />

                                        <div class="form-group">
                                            <label>分类名</label>
                                            <input name="name" class="form-control" placeholder="分类名" value="{{$cate->name}}">
                                        </div>

                                        <div class="form-group">
                                            <label>分类图标</label>
                                            <input type="file" onchange="uploadCateIcon.call(this)">
                                            <input name="icon" type="hidden" value="{{$cate->icon}}" />
                                            <img class="img-icon" src="{{$cate->icon?asset('storage/').'/'.$cate->icon:'/admin/images/empty.png'}}" style="width:70px;height:70px;border:1px solid #ddd;border-radius: 8px;" />
                                        </div>

                                        <div class="form-group">
                                            <label>状态</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="1" @if($cate->status==1) checked @endif>可用
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="2" @if($cate->status==2) checked @endif>不可用
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