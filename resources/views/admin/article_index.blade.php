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
                                    <a style="margin-left:15px;" href="/admin/article/add" class="btn btn-success">添加文章</a>
                                </div>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>标题</th>
                                        <th width="280">摘要</th>
                                        <th>封面图</th>
                                        <th>浏览次数</th>
                                        <th>评论次数</th>
                                        <th>创建时间</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lists as $list)
                                    <tr class="odd gradeX">
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->title}}</td>
                                        <td>{{mb_substr($list->abstract,0,50,'utf-8')}}</td>
                                        <td class="center"><img style="width:50px;max-height:50px;" src="{{asset($list->cover_img)}}" /></td>
                                        <td class="center">{{$list->scan_num}}</td>
                                        <td class="center">{{$list->comment_num}}</td>
                                        <td class="center">{{$list->created_at}}</td>
                                        <td class="center">{{$list->status==1?'上线':'显现'}}</td>
                                        <td>
                                            <a href="/admin/article/{{$list['id']}}/update" class="btn btn-info btn-sm">修改</a>
                                            <a href="javascript:if(confirm('确定删除吗?')){window.location='/admin/article/del?id={{$list['id']}}'};" class="btn btn-danger btn-sm">删除</a>
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