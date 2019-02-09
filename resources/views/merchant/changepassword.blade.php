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
                                <img src="{{ asset('public/images/WebsiteLogo'.'/'.$web->logo) }}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                    <li class="nav-item active ">
                                        <a class="nav-link" href="#"  style="color:#F2F2F2;" >Home</a>
                                        <!-- <ul class="child">
                                            <li class="nav-item">
                                                <a href="index.html" class="nav-link">Home 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-2.html" class="nav-link">Home 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-3.html" class="nav-link">Home 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-4.html" class="nav-link">Home 4</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item has-child">
                                      <a class="nav-link" href="#" style="color:#F2F2F2;" >Category</a>
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
                                        <a href="{{route('post.store')}}" class="btn btn-primary text-caps btn-rounded btn-framed"    style="color:#F2F2F2;">Submit Post</a>
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
                        {{--<ol class="breadcrumb">--}}
                            {{--<li class="breadcrumb-item"  ><a href="#" style="color:#F2F2F2;" >Home</a></li>--}}
                            {{--<li class="breadcrumb-item"  ><a href="#"style="color:#F2F2F2;">Merchant Section</a></li>--}}
                        {{--</ol>--}}
                        <!--end breadcrumb-->
                    </div>
                    <!--end container-->
                </div>
@endsection
@section('hero-form')
   <div class="collapse" id="collapseMainSearchForm">
   <form method='GET' action="{{URL::to('/search')}}" class="hero-form form">
            {{ csrf_field() }}
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
                        <h1   style="color:#F2F2F2;">Merchant Area</h1>
                    </div>
                    <!--end container-->
                </div>
@endsection
@section('background')
<div class="background">
    <div class="background-image original-size" style="background-color:#FFCC66" >
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
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                <a class="nav-link icon" href="{{ route('profile.edit',$merchant->id) }}">
                                    <i class="fa fa-user"></i>My Profile
                                </a>
                                <a class="nav-link icon" href="{{ route('merchant.dashboard') }} ">
                                    <i class="fa fa-heart"></i>My Ads Listing
                                </a>
                                <a class="nav-link active icon" href="{{ route('merchant.passwordchange.request',$merchant->id) }}">
                                    <i class="fa fa-recycle"></i>Change Password
                                </a>
                                <a class="nav-link icon" href="{{ route('showcomment',$merchant->id) }}">
                                <i class="fa fa-pencil-square-o"></i></i></i>Speak Messages
                                </a>
                                <a class="nav-link icon" href="{{ route('merchant.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>

                                        {{ __('Logout') }}   
                                 </a>
                                 <form  id="logout-form" action="{{ route('merchant.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </nav>
                        </div>
          
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <form class="form" action="{{route('merchant.passwordchange.reset',$merchant->id)}}" name="change_password_form"
                                id="change_password_form" enctype="multipart/form-data" method="post">
                                {{csrf_field()}}
                                <div class="row justify-content-center">
                                
                                    <div class="col-md-6">
                                    <div class ="form-group">
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
            </div>
                                        <div class="form-group">
                                            <label for="current_password" class="col-form-label required">Current Password</label>
                                            <input name="current_password" type="password" class="form-control" id="current_password" placeholder="Current Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="new_current_password" class="col-form-label required">New Password</label>
                                            <input name="new_password" type="password" class="form-control" id="new_current_password" placeholder="New Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="repeat_new_current_password" class="col-form-label required">Repeat Password</label>
                                            <input name="confirm_password" type="password" class="form-control" id="repeat_new_current_password" placeholder="Repeat New Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" class="btn btn-info float-right">Change Password</button>
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </form>
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
