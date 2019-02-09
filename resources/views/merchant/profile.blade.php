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
                    <img src="{{ asset('/images/WebsiteLogo'.'/'.$web->logo) }}" alt="#">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <!--Main navigation list-->
                    <ul class="navbar-nav">
                        <li class="nav-item active ">
                            <a class="nav-link" href="#" style="color:#F2F2F2;">Home</a>
                        </li>
                        <li class="nav-item has-child">
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
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post.store')}}" class="btn btn-primary text-caps btn-rounded btn-framed"
                               style="color:#F2F2F2;">Submit Post</a>
                        </li>
                    </ul>
                    <!--Main navigation list-->
                </div>
                <!--end navbar-collapse-->
            </nav>
            <!--end navbar-->
        </div>
        <!--end container-->
    </div>
@endsection
@section('hero-form')
    <div class="collapse" id="collapseMainSearchForm">
        <form method='GET' action="search" class="hero-form form">
            <div class="container">
                <!--Main Form-->
                <div class="main-search-form">
                    <div class="form-row">
                        <div class="col-md-9 col-sm-9">
                            <div class="form-group">
                                <label for="what" class="col-form-label">What Are You Looking For?</label>
                                <input name="value" type="text" class="form-control small" id="what"
                                       placeholder="What are you looking for?">
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
            <h1>MY Profile</h1>
        </div>
        <!--end container-->
    </div>
@endsection
@section('background')
    <div class="background">
        <div class="background-image original-size" style="background-color:#FFCC66" >
            {{--<img src="{{asset('/assets/img/gradient-1.jpg')}}" alt="">--}}
        </div>
    </div>
@endsection
@section('items')
<section class="content">
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="nav flex-column side-nav">
                            <a class="nav-link active icon" href="{{ route('merchant.editprofile',$merchant->id) }}">
                                <i class="fa fa-user"></i>My Profile
                            </a>
                            <a class="nav-link icon" href="{{ route('merchant.dashboard') }} ">
                                <i class="fa fa-heart"></i>My Ads Listing
                            </a>
                            <a class="nav-link icon"
                               href="{{ route('merchant.passwordchange.request',$merchant->id) }}">
                                <i class="fa fa-recycle"></i>Change Password
                            </a>
                            <a class="nav-link icon" href="{{ route('showcomment',$merchant->id) }}">
                                <i class="fa fa-pencil-square-o"></i></i>Speak Messages
                            </a>
                            <a class="nav-link icon" href="{{ route('merchant.logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('merchant.logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </nav>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-9">
                        <form class="form" class="row" method="POST"
                              action="{{ route('profile.update',$merchant->id) }}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h2>Personal Information</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Company Name" class="col-form-label required">Company
                                                            Name</label>
                                                        <input name="name" type="text" class="form-control" id="name"
                                                               placeholder="Company Name" value="{{$merchant->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Company Location" class="col-form-label required">Company
                                                            Location</label>
                                                        <input name="address" type="text" class="form-control" id="name"
                                                               placeholder="Company location"
                                                               value="{{$merchant->address}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone" class="col-form-label required">Phone
                                                            No</label>

                                                        <input name="phone" type="text" class="form-control" id="phone"
                                                               placeholder="Your Phone" value="{{$merchant->phone}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone" class="col-form-label required">Mobile No</label>
                                                    <input name="mobile" type="text" class="form-control" id="phone"
                                                           placeholder="Your Phone" value="{{$merchant->mobile}}">
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email" class="col-form-label required">Email</label>
                                                        <input name="email" type="email" class="form-control" id="email"
                                                               placeholder="Your Email" value="{{$merchant->email}}">
                                                        <input name="id" type="text" class="form-control"
                                                               value="{{$merchant->id}}" hidden>
                                                        <input name="fname" type="text" class="form-control"
                                                               value="{{$merchant->image}}" hidden>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email" class="col-form-label required">Company Website</label>
                                                        <input name="website" type="text" class="form-control" id="website"
                                                         placeholder="Your Website" value="{{$merchant->website}}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="profile-image">
                                                <div class="image background-image">
                                                    <div class="background-image-small">
                                                        <img src="{{ asset('/images/ProfilePictures'.'/'.$merchant->image) }}">
                                                    </div>
                                                </div>
                                                <div class="single-file-input">
                                                    <input type="file" id="image" name="image">
                                                    <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="details" class="col-form-label required"> Details</label>
                                                <textarea name="description" id="details" rows="5"
                                                          placeholder="Explain About Your Business"
                                                          class="form-control">{{$merchant->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <section class="clearfix">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-info float-right" value="Save Changes"/>
                                        </div>
                                    </section>
                                </div>
                                <!--end col-md-8-->
                            </div>
                        </form>
                    </div>
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