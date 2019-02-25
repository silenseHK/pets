@extends('admin/layout/main')

@section('js')
    {{--<script src="/admin/js/cate.js"></script>--}}
@endsection

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            添加管理员
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <form id="myForm" role="form" action="/admin/admin/create" method="post">

                                        <input type="hidden" name="_token" value="{{csrf_token()}}" />

                                        <div class="form-group">
                                            <label>账号</label>
                                            <input name="account" class="form-control" placeholder="账号">
                                        </div>

                                        <div class="form-group">
                                            <label>密码</label>
                                            <input name="password" type="password" class="form-control" placeholder="密码">
                                        </div>

                                        <div class="form-group">
                                            <label>确认密码</label>
                                            <input name="password_confirmation" type="password" class="form-control" placeholder="密码">
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