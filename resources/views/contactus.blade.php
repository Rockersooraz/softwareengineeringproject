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
                    <img src="{{ asset('images/WebsiteLogo'.'/'.$web->logo) }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item active has-child ">
                            <a class="nav-link" href="#" style="color:#F2F2F2;">Category</a>
                            <!-- 1st level -->
                            <ul class="child">
                                @foreach($categories as $category)
                                    <li class="nav-item">
                                    <a href="{{route('categoryfilter',$category->id)}}" class="nav-link" value="{{$category->title}}"
                                           value="{{$category->title}}"
                                                {{--@if($category->id == $Post->category_id)--}}
                                                {{--selected--}}
                                                {{--@endif--}} >{{$category->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item active ">
                            <a class="nav-link" href="{{route('home.index')}}" style="color:#F2F2F2;">Home</a>
                        </li>

                        <li class="nav-item">
                        <a href="{{route('post.store')}}" class="btn btn-primary text-caps btn-rounded btn-framed" style = "color:#F2F2F2">Submit
                                Post</a>
                        </li>
                    </ul>
                </div>
                <a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse"
                   aria-expanded="false" aria-controls="collapseMainSearchForm">
                    <i class="fa fa-search"></i>
                    <i class="fa fa-close"></i>
                </a>
            </nav>
            {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item"><a href="#" style="color:#F2F2F2;">Home</a></li>--}}
                {{--<li class="breadcrumb-item"><a href="#" style="color:#F2F2F2;">Merchant Section</a></li>--}}
            {{--</ol>--}}

        </div>
    </div>
@endsection
@section('hero-form')
    <div class="collapse" id="collapseMainSearchForm">
        <form method='POST' action="{{URL::to('/search')}}" class="hero-form form">
            {{ csrf_field() }}
            <div class="container">
                <!--Main Form-->
                <div class="main-search-form">
                    <div class="form-row">
                        <div class="col-md-9 col-sm-9">
                            <div class="form-group">
                                <label for="what" class="col-form-label">What Are You Looking For?</label>
                                <input name="value" type="text" class="form-control small" id="what"
                                       placeholder="What are you looking for?">
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-3-->
                        <div class="form control">
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
            <h1 style="color:#F2F2F2;">Contact</h1>
        </div>
        <!--end container-->
    </div>
@endsection
@section('background')
    <div class="background">
        <div class="background-image original-size" style="background-color:#FFCC66">
            {{--<img src="{{asset('public/assets/img/gradient-1.jpg')}}" alt="">--}}
        </div>
        <!--end background-image-->
    </div>
@endsection
@section('items')
<section class="content">
            <section class="block">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Get In Touch</h2>
                            <p>
                            {{$web->description}}

                            </p>
                            <br>
                            <figure class="with-icon">
                                <i class="fa fa-map-marker"></i>
                                <span>{{$web->address1}}<br>{{$web->address2}}</span>
                            </figure>
                            <br>
                            <figure class="with-icon">
                                <i class="fa fa-phone"></i>
                                <span>{{$web->phone}}</span>
                            </figure>
                            <figure class="with-icon">
                                <i class="fa fa-envelope"></i>
                                <a href="#"></a>
                            </figure>
                            <figure class="with-icon">
                                <i class="fa fa-envelope"></i>
                                <a href="#">{{$web->email}}</a>
                            </figure>
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-8">
                        @if(session()->has('success'))
                    <div class="alert alert-success" role="alert" align="center">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{session()->get('success')}}</strong>
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert" align="center">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{session()->get('error')}}</strong>
                    </div>
                       @endif
                            <h2>Contact Form</h2>
                            <form class="form form-submit" method="post" action="{{route('Mail.store')}}"
                              enctype="multipart/form-data">
                            {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label required">Your Name</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="col-form-label required">Your Email</label>
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="subject" class="col-form-label">Subject</label>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="message" class="col-form-label required">Your Message</label>
                                    <textarea name="description" id="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                                </div>
                                <!--end form-group-->
                                <button type="submit" class="btn btn-primary float-right">Send Message</button>
                            </form>
                            <!--end form-->
                        </div>
                        <!--end col-md-8 -->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
@endsection
@section('footer')
@include('layout.footer')
@endsection
