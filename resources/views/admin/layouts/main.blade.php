<!doctype html>
<html>
<head>
    <title>简作后台管理系统</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ADMIN_IMG}}/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ADMIN_IMG}}/favicon.png">
    <!-- css -->
    <link rel="stylesheet" href="{{ADMIN_CSS}}/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ADMIN_CSS}}/style.css">
    <link rel="stylesheet" href="{{ADMIN_CSS}}/main.css">
    <!-- js -->
    <script src="{{ADMIN_JS}}/jquery-2.2.4.js"></script>
    <script src="{{ADMIN_CSS}}/Bootstrap/js/bootstrap.js"></script>
    <script src="{{ADMIN_JS}}/main.js"></script>
</head>
<body>
<!-- ==========容器======= -->
<div id="wrapper">
    <!-- ==========================top-navbar=========================  -->
@include('admin.layouts.navbar')
<!-- ==========================/top-navbar=========================  -->

    <!-- ==========================left-sidebar=======================  -->
@include('admin.layouts.sidebar')
<!-- ==========================/left-sidebar=======================  -->

    <!-- ========================= 中间内容区域 ========================= -->
    <div class="main">
        <div class="main-content">

            <div class="container-fluid">

                <h3 class="page-title page-header">@yield('title')</h3>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="fa fa-check-circle"></i>
                        {{session('success')}}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="fa fa-times-circle"></i>
                        {{session('error')}}
                    </div>
                @endif

                <script>
                    $('.alert').delay(3000).fadeOut(2000);
                </script>
                @section('content')

                @show
            </div>
        </div>
    </div>
    <!-- ========================= 中间内容区域 ========================= -->

    <!-- ========================== footer ============================ -->
@include('admin.layouts.footer')
<!-- ========================== footer ============================ -->
</div>
<!-- =====容器====== -->
</body>
</html>
