@extends('admin/layouts/main')

@section('title','广告添加')

@section('content')

    @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible" role="alert">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-times-circle"></i>
        错误信息
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <script>
        $('.alert').delay(3000).fadeOut(2000);
    </script>
    {{--<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-times-circle"></i>
        Your account has been suspended
    </div>--}}

    <form action="/admin/ads" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">链接地址(必须使用http://www.xxx.com形式)</label>
            <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleInputFile">图片</label>
            <input type="file" name="image" id="exampleInputFile">
            <p class="help-block"></p>
        </div>
        <label class="radio-inline">
            <input type="radio" checked name="is_lock" id="inlineRadio1" value="0"> 启用
        </label>
        <label class="radio-inline">
            <input type="radio" name="is_lock" id="inlineRadio2" value="1"> 禁用
        </label>
        <br><br>
        {{csrf_field()}}
        <button type="submit" class="btn btn-info">提交</button>
    </form>

@endsection


