
@extends('layout.frontend')

@section('secondary-navigation')
     @if(Auth::guard('merchant')->check()) 
         @include('layout.authenticated')  
      @else
          @include('layout.unauthenticated')
        @endif
@endsection

@section('page-title')
<div class="page-title">
                    <div class="container">
                        <h1 class="opacity-40 center">
                            <a href="#">Buy</a>, <a href="#">Sell</a> or <a href="#">Find</a> What You need
                        </h1>
                    </div>
                    <!--end container-->
                </div>
@endsection

@section('items')
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('merchant.password.request') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('footer')
    <section class="footer">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <a href="#" class="brand">
                            <img src="{{asset('/assets/img/logo.png')}}" alt="">
                        </a>
                        <p>
                        synopticdiary is The best business directory of Nepal.
                        </p>
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-3">
                        <h2>Navigation</h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{route('home.index')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('post.store')}}">Submit Post</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled">
                                        @if(Auth::guard('merchant')->check())
                                            <li>
                                                <a href="{{route('merchant.dashboard')}}">My Profile</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{route('merchant.login')}}">Sign In</a>
                                            </li>
                                            <li>
                                                <a href="{{route('merchant.register')}}">Register</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-4">
                        <h2>Contact</h2>
                        <address>
                            <figure>
                                <br>
                                lainchour . next to nist collage<br>
                                Kathmandu Nepal
                            </figure>
                            <br>
                            <strong>Email:</strong> <a href="#">synopticdiary@gmail.com</a>
                            <br>
                            <strong>Phone: </strong> 9818125918
                            <br>
                            <br>
                            <a href="contact.html" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                        </address>
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <div class="background">
                <div class="background-image original-size" style="background-color: #20add8">
                    {{--<img src="{{asset('/assets/img/footer-background-icons.jpg')}}" alt="">--}}
                </div>
                <!--end background-image-->
            </div>
            <!--end background-->
        </div>
    </section>
@endsection

















