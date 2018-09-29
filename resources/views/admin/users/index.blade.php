@extends('admin.layouts.main')

@section('title', '用户列表')

@section('content')
    <table class="table table-bordered table-striped text-center">
        <tr>
            <td>ID</td>
            <td>用户名</td>
            <td>性别</td>
            <td>邮箱</td>
            <td>手机</td>
            <td>头像</td>
            <td>状态</td>
            <td>注册时间</td>
            <td>操作</td>
        </tr>
        @foreach($users as $k=>$u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->sex}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->phone}}</td>
                <td><img src="{{$u->profile ?:IMG.'/default.png'}}" width="50"></td>
                <td>{{$u->is_lock}}</td>
                <td>{{$u->created_at}}</td>
                <td>
                    <a href="" class="btn btn-danger">锁定</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection