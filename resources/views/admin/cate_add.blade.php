@extends('admin/layout/main')

@section('js')
    <script src="/admin/js/cate.js"></script>
@endsection

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            添加分类
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <form id="myForm" role="form" action="/admin/cate/create" method="post">

                                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                        <input type="hidden" name="pid" value="{{request('pid',0)}}" />

                                        <div class="form-group">
                                            <label>分类名</label>
                                            <input name="name" class="form-control" placeholder="分类名">
                                        </div>

                                        <div class="form-group">
                                            <label>分类图标</label>
                                            <input type="file" onchange="uploadCateIcon.call(this)">
                                            <input name="icon" type="hidden" value="" />
                                            <img class="img-icon" src="/admin/images/empty.png" style="width:70px;height:70px;border:1px solid #ddd;border-radius: 8px;" />
                                        </div>

                                        <div class="form-group">
                                            <label>状态</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="1" checked="">可用
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="2">不可用
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