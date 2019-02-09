<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/frontend/img/job.png">
    <title>Login : Software engineering</title>

    <link rel="stylesheet" type="text/css"
          href="{{url('/backend/assets/vendor_components/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('/backend/assets/vendor_components/Ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('/backend/assets/vendor_components/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('/backend/assets/vendor_components/linea-icons/linea.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('/backend/assets/vendor_components/glyphicons/glyphicon.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('/backend/assets/vendor_components/flag-icon/css/flag-icon.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('/backend/assets/vendor_components/material-design-iconic-font/css/materialdesignicons.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ url('/backend/assets/vendor_components/simple-line-icons-master/css/simple-line-icons.css')}}">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ url('/backend/assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">
    <link href="{{ url('/backends/css/login.css') }}" rel="stylesheet">
    <link href="{{ url('/backends/css/style-responsive.css') }}" rel="stylesheet">

    {{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>--}}
    <![endif]-->
</head>

{{--<body>--}}

{{--<!-- **********************************************************************************************************************************************************--}}
{{--MAIN CONTENT--}}
{{--*********************************************************************************************************************************************************** -->--}}

{{--<div id="login-page">--}}
{{--<div class="container">--}}
{{--<section class="logo">--}}
{{--<div class="row" align="center">--}}
{{--<div class="col-md-12">--}}
{{--<img class="login-logo" src="{{ url('/img/avatar.jpg') }}" height="60px">--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

{{--<form action="{{ route('loginForm') }}" class="form-login" method="post">--}}
{{--{{ csrf_field() }}--}}
{{--<h2 class="form-login-heading">Login now</h2>--}}
{{--@if(session()->has('error'))--}}
{{--<div class="alert alert-danger" role="alert" align="center">--}}
{{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--<span aria-hidden="true">&times;</span>--}}
{{--</button>--}}
{{--<strong>{{session()->get('error')}}</strong>--}}
{{--</div>--}}
{{--@endif--}}

{{--<div class="login-wrap">--}}
{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}"--}}
{{--placeholder="Email"  autofocus>--}}
{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--<input id="password" type="password" class="form-control" name="password" placeholder="Password"--}}
{{--5>--}}
{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}

{{--<label class="checkbox " style="margin-left:15px;">--}}
{{--<span class="pull-left">--}}
{{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}

{{--</span>--}}
{{--<span class="pull-right">--}}
{{--<a data-toggle="modal" href="login.html#myModal"> Forgot Your Password?</a>--}}

{{--</span>--}}

{{--</label>--}}
{{--<button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> LOGIN</button>--}}
{{--</div>--}}
{{--</form>--}}

{{--<!-- Modal -->--}}
{{--<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"--}}
{{--class="modal fade">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}
{{--<div class="modal-header">--}}
{{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
{{--<h4 class="modal-title">Forgot Password ?</h4>--}}
{{--</div>--}}
{{--<div class="modal-body">--}}
{{--<p>Enter your e-mail address below to reset your password.</p>--}}
{{--<input type="text" name="email" placeholder="Email" autocomplete="off"--}}
{{--class="form-control placeholder-no-fix">--}}

{{--</div>--}}
{{--<div class="modal-footer">--}}
{{--<button data-dismiss="modal" class="btn btn-danger" type="button">Cancel</button>--}}
{{--<button class="btn btn-success" type="button">Submit</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- modal -->--}}

{{--</div>--}}
{{--</div>--}}

{{--<!-- jQuery 3 -->--}}
{{--<script src="{{ url('/backend/assets/vendor_components/jquery/dist/jquery.js')}}"></script>--}}

{{--<!-- popper -->--}}
{{--<script src="{{ url('/backend/assets/vendor_components/popper/dist/popper.min.js')}}"></script>--}}

{{--<!-- Bootstrap 4.0-->--}}
{{--<script src="{{ url('/backend/assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>--}}


{{--</body>--}}

{{--<body class="hold-transition login-page">--}}
{{--<div class="container">--}}
    {{--<div class="login-box">--}}
        {{--<div class="login-logo">--}}
            {{--<a href="#"><b>Synoptidiary</b><br></a>--}}
            {{--<br>--}}
        {{--</div>--}}
        {{--<!-- /.login-logo -->--}}
        {{--<div class="login-box-body">--}}
            {{--<p class="login-box-msg">Sign in to start your session</p>--}}
            {{--<div>--}}

                {{--@if($errors->any())--}}
                    {{--<div class="alert alert-danger">--}}
                        {{--<ul>--}}
                            {{--@foreach($errors->all() as $error)--}}
                                {{--<li>{{ $error }}</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}

                    {{--</div>--}}
                {{--@endif--}}

                {{--@if(session('success'))--}}
                    {{--<div class="alert alert-danger">--}}
                        {{--{{session('success')}}--}}
                    {{--</div>--}}
                {{--@endif--}}


            {{--</div>--}}


            {{--<form action="{{route('login')}}" method="post">--}}
                {{--{{csrf_field()}}--}}
                {{--<div class="form-group has-feedback">--}}
                    {{--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
                    {{--<input type="text" name="username" id="username" class="form-control" placeholder="user name">--}}

                {{--</div>--}}
                {{--<div class="form-group has-feedback">--}}
                    {{--<span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
                    {{--<input type="password" name="password" id="password" class="form-control" placeholder="Password">--}}

                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-8">--}}
                        {{--<div class="checkbox icheck">--}}
                            {{--<div class="form-group">--}}
                                {{--<label>--}}
                                    {{--<input name="remember" type="checkbox" value="true"> Remember Me--}}
                                {{--</label>--}}
                                {{--<br>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                    {{--<!-- /.col -->--}}
                    {{--<div class="col-xs-4">--}}
                        {{--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>--}}
                    {{--</div>--}}
                    {{--<!-- /.col -->--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}

{{--</body>--}}

<body class="hold-transition bg-img" style="background-image: url({{URL('/backend/images/gallery/full/3.jpg')}})" data-overlay="4">

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

        <div class="col-lg-8 col-md-11 col-12">
            <div class="row align-items-center justify-content-md-center h-p100" data-overlay-light="9">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="p-40 text-center content-bottom">
                        <img src="{{asset('/frontend/images/jobportal-NJSTC.png')}}" class="b-2 p-10 border-dark" alt=""/>
                        <div class="text-center">
                            <!-- <p class="mt-20">Login With</p> -->
                            <p class="gap-items-2 mb-0">
                                <!-- <a class="btn btn-social-icon btn-outline btn-circle btn-facebook" href="#"><i
                                            class="fa fa-facebook"></i></a>
                                <a class="btn btn-social-icon btn-outline btn-circle btn-twitter" href="#"><i
                                            class="fa fa-twitter"></i></a>
                                <a class="btn btn-social-icon btn-outline btn-circle btn-google" href="#"><i
                                            class="fa fa-google-plus"></i></a>
                                <a class="btn btn-social-icon btn-outline btn-circle btn-instagram" href="#"><i
                                            class="fa fa-instagram"></i></a> -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="p-20 content-bottom">
                        <div class="content-top-agile">
                            <h2>Get started as ADMIN</h2>
                            <p class="text-fade">Sign in to start your session</p>
                        </div>
                        <div>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>

                                </div>
                            @endif

                            @if(session('success'))
                                <div class="alert alert-danger">
                                    {{session('success')}}
                                </div>
                            @endif


                        </div>

                        <form action="{{route('login')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger border-primary"><i
                                                    class="ti-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger border-primary"><i
                                                    class="ti-lock"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="checkbox">
                              
                                    </div>
                                </div>
                                <!-- /.col -->
                            <div class="col-6">
                            <div class="fog-pwd text-right">
          
                            </div>
                            </div>
                            <!-- /.col -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-danger btn-block margin-top-10">SIGN IN
                                    </button>
                                </div>
                                
                               
                                <!-- /.col -->
                            </div>
                        </form>

                        {{--<div class="text-center">--}}
                        {{--<p class="mb-0 mt-10">Don't have an account? <a href="register.html" class="text-info ml-5">Sign--}}
                        {{--Up</a></p>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
</body>



<!-- jQuery 3 -->
<script src="{{ url('/backend/assets/vendor_components/jquery/dist/jquery.js')}}"></script>

<!-- popper -->
<script src="{{ url('/backend/assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ url('/backend/assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

<script>
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 2000);
</script>
</html>


