@extends('admin/layout/main')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('js')
    <script src="/layui/layui.all.js"></script>
    <script src="/admin/js/admin.js"></script>
@endsection

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        @include('admin/layout/error')

                        <div class="panel-heading">
                            管理员列表
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="row">
                                    <a style="margin-left:15px;" href="/admin/admin/add" class="btn btn-success">添加管理员</a>
                                </div>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>账号</th>
                                        <th>状态</th>
                                        <th>上次登陆时间</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lists as $list)
                                    <tr class="odd gradeX">
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->account}}</td>
                                        <td>{{$list->status==1?'正常':'冻结'}}</td>
                                        <td>{{$list->last_login_time}}</td>
                                        <td>
                                            <a href="javascript:changePwd.call(this,{{$list->id}});" class="btn btn-info btn-sm">修改密码</a>
                                            <a href="javascript:if(confirm('确定删除吗?')){window.location='/admin/admin/del?id={{$list->id}}'};" class="btn btn-danger btn-sm">删除</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            {{ $lists->links() }}

                        </div>
                    </div>
                </div>
            </div>


@endsection