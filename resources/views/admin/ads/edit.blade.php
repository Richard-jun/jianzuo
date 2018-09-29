@extends('admin/layouts/main')

@section('title','修改')

@section('content')


    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-times-circle"></i>

            <div class="mws-form-message error">
                错误信息
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        </div>
    @endif

    <script>
        $('.alert').delay(3000).fadeOut();
    </script>

    <form action="/admin/ads/{{$ad->id}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">链接地址</label>
            <input type="text" name="url" class="form-control" id="exampleInputEmail1" value="{{$ad->url}}">
        </div>

        <div class="form-group">
            <label for="exampleInputFile">图片</label><br><br>
            <img style="width: 150px;" src="{{$ad->image}}" alt="">
            <br><br>
            <input type="file" name="image" id="exampleInputFile">
            <p class="help-block"></p>
        </div>
        <label class="radio-inline">
            <input type="radio" @if($ad->is_lock == 0) checked @endif name="is_lock" id="inlineRadio1" value="0"> 启用
        </label>
        <label class="radio-inline">
            <input type="radio" @if($ad->is_lock == 1) checked @endif name="is_lock" id="inlineRadio2" value="1"> 禁用
        </label>
        <br><br>
        {{csrf_field()}}
        {{method_field('PUT')}}
        <button type="submit" class="btn btn-info">提交</button>
    </form>
@endsection