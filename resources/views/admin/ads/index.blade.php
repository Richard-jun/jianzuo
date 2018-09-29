@extends('admin.layouts.main')

@section('title', '广告列表')

@section('content')
    <table class="table table-bordered table-striped text-center">
        <tr>
            <td>ID</td>
            <td>链接</td>
            <td>图片</td>
            <td>状态</td>
            <td>操作</td>
        </tr>
        @foreach($ads as $k=>$u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->url}}</td>
                <td>
                    <img style="width: 200px;" src="{{$u->image}}" alt="">

                </td>
                <td>{{$u->is_lock_text}}</td>
                <td>
                    @if($u->is_lock)
                        <a href="/admin/ads/unlock/{{$u->id}}" class="btn btn-info">启用</a>
                    @else
                        <a href="/admin/ads/{{$u->id}}/edit" class="btn btn-info">修改</a>
                        <a href="/admin/ads/lock/{{$u->id}}" class="btn btn-warning">禁用</a>
                    @endif

                        <form action="/admin/ads/{{$u->id}}" method="post" style="display: inline">
                            {{csrf_field()}}
                            {{method_field("DELETE")}}
                            <button class="btn btn-danger" onclick="return confirm('你确定删除吗？')">删除</button>
                        </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/admin/ads/create" class="btn btn-info">添加</a>
    {{$ads->appends($request->input())->links()}}
    <style>
        .pagination {
            float: right;

        }
    </style>
@endsection

