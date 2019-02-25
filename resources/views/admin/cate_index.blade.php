@extends('admin/layout/main')

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        @include('admin/layout/error')

                        <div class="panel-heading">
                            分类列表
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="row">
                                    <a style="margin-left:15px;" href="/admin/cate/add" class="btn btn-success">添加一级分类</a>
                                </div>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>分类名</th>
                                        <th>等级</th>
                                        <th>状态</th>
                                        <th>图标</th>
                                        <th>创建时间</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lists as $list)
                                    <tr class="odd gradeX">
                                        <td>{{$list['id']}}</td>
                                        <td>{{$list['name']}}</td>
                                        <td>一级分类</td>
                                        <td class="center">{{$list['status']==1?'使用':'未使用'}}</td>
                                        <td class="center"><img style="width:50px;heihgt:50px;" src="{{asset('storage/'.$list['icon'])}}" /></td>
                                        <td class="center">{{$list['created_at']}}</td>
                                        <td>
                                            <a href="/admin/cate/{{$list['id']}}/update" class="btn btn-info btn-sm">修改</a>
                                            <a href="javascript:if(confirm('确定删除吗?')){window.location='/admin/cate/del?id={{$list['id']}}'};" class="btn btn-danger btn-sm">删除</a>
                                            <a href="/admin/cate/add?pid={{$list['id']}}" class="btn btn-success btn-sm">增加子分类</a>
                                        </td>
                                    </tr>
                                    @if(isset($list['children']))
                                        @foreach($list['children'] as $li)
                                            <tr class="odd gradeX">
                                                <td>{{$li['id']}}</td>
                                                <td>{{$li['name']}}</td>
                                                <td>二级分类</td>
                                                <td class="center">{{$li['status']==1?'使用':'未使用'}}</td>
                                                <td class="center"><img style="width:50px;heihgt:50px;" src="{{asset('storage/'.$li['icon'])}}" /></td>
                                                <td class="center">{{$li['created_at']}}</td>
                                                <td>
                                                    <a style="margin-left:40px;" href="/admin/cate/{{$li['id']}}/update" class="btn btn-info btn-sm">修改</a>
                                                    <a href="javascript:if(confirm('确定删除吗?')){window.location='/admin/cate/del?id={{$li['id']}}'};" class="btn btn-danger btn-sm">删除</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


@endsection