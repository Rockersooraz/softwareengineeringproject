@extends('layout.frontend')
@section('secondary-navigation')
@if(Auth::guard('merchant')->check()) 
         @include('layout.authenticated')  
      @else
          @include('layout.unauthenticated')
        @endif
@endsection
@section('main-navigation')
<div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="{{route('home.index')}}">
                                <img src="{{ asset('/images/WebsiteLogo'.'/'.$web->logo) }}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                      
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                <li class="nav-item">
                                    
                                    <a class="nav-link" href="{{route('home.index')}}"  style="color:#F2F2F2;" >Home</a>
                                </li>
                                    <li class="nav-item has-child ">
                                        <a class="nav-link" href="#" style="color:#F2F2F2;">Category</a>
                                        <!-- 1st level -->
                                        <ul class="child">
                                        @foreach($categories as $category)
                                            <li class="nav-item">
                                            <a href="{{route('categoryfilter',$category->id)}}" class="nav-link" value="{{$category->title}}"
                                           {{--@if($category->id == $Post->category_id)--}}
                                            {{--selected--}}
                                              {{--@endif--}} >{{$category->title}}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('post.store')}}" class="btn btn-primary text-caps btn-rounded btn-framed"    style="color:#F2F2F2;">Submit Ad</a>
                                    </li>
                                </ul>
                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                            <a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseMainSearchForm">
                                <i class="fa fa-search"></i>
                                <i class="fa fa-close"></i>
                            </a>
                            <!--end main-search-form-toggle-->
                        </nav>
                        <!--end navbar-->
                        
                        <!--end breadcrumb-->
                    </div>
                    <!--end container-->
                </div>
@endsection
@section('hero-form')
   <div class="collapse" id="collapseMainSearchForm">
                    <form  method='GET' action="search" class="hero-form form">
                    {{csrf_field()}}
                        <div class="container">
                            <!--Main Form-->
                            <div class="main-search-form">
                               <div class="form-row">
                                  <div class="col-md-9 col-sm-9">
                                     <div class="form-group">
                                          <label for="what" class="col-form-label" >What Are You Looking For?</label>
                                            <input name="value" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
                                            <input hidden name="column" value="title">
                                      </div>
                                     <!--end form-group-->
                                  </div>
                                  <!--end col-md-3-->
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary width-100">Search</button>
                            </div>
                                <!--end col-md-3-->
                         </div>
                                <!--end form-row-->
                    </div>
                            <!--end main-search-form-->
             </div>
                        <!--end container-->
         </form>
                    <!--end hero-form-->
    </div> 
    @endsection 
@section('page-title')
<div class="page-title">
                    <div class="container">
                        <h1 style="color:#F2F2F2;">Register</h1>
                    </div>
                    <!--end container-->
                </div>
@endsection
@section('background')
<div class="background">
    <div class="background-image original-size" style="background-color:#7AD7F0 " >
        {{--<img src="{{asset('/assets/img/gradient-1.jpg')}}" alt="">--}}
    </div>
                    <!--end background-image-->
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('merchant.password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
                <div class="background-image original-size" style="background-color:#7AD7F0">
                    {{--<img src="{{asset('/assets/img/footer-background-icons.jpg')}}" alt="">--}}
                </div>
                <!--end background-image-->
            </div>
            <!--end background-->
        </div>
    </section>
@endsection