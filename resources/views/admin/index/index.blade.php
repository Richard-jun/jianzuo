@extends('admin.layouts.main')

@section('title', '系统信息')

@section('content')
    <table class="table table-bordered">
    <tr>
        <td>版本</td>
        <td>v-1.0</td>
    </tr>
    <tr>
        <td>服务器操作系统</td>
        <td>{{PHP_OS}}</td>
    </tr>
    <tr>
        <td>服务器域名/IP</td>
        <td>{{$_SERVER['SERVER_NAME']}} / {{$_SERVER['SERVER_ADDR']}}</td>
    </tr>
    <tr>
        <td>服务器环境</td>
        <td>{{$_SERVER['SERVER_SOFTWARE']}}</td>
    </tr>
    <tr>
        <td>服务器端口</td>
        <td>{{$_SERVER['SERVER_PORT']}}</td>
    </tr>
    <tr>
        <td>HTTP协议版本</td>
        <td>{{$_SERVER['SERVER_PROTOCOL']}}</td>
    </tr>
    <tr>
        <td>网站根目录</td>
        <td>{{$_SERVER['DOCUMENT_ROOT']}}</td>
    </tr>
    <tr>
        <td>网站管理员</td>
        <td>{{$_SERVER['SERVER_ADMIN']}}</td>
    </tr>
</table>
@endsection