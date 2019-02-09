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
            <h1 style="color:#F2F2F2;"> Profile</h1>
        </div>
        <!--end container-->
    </div>
@endsection
@section('background')
    <div class="background">
        <div class="background-image original-size" style="background-color:#FFCC66">
            {{--<img src="{{asset('/assets/img/gradient-1.jpg')}}" alt="">--}}
        </div>
        <!--end background-image-->
    </div>
@endsection
@section('items')
    <section class="content">
        <section class="block">
            <section>
                <div class="container">
                    <div class="author big">
                        <div class="author-image">
                            <div class="background-image">
                                <img src="{{ asset('/images/ProfilePictures'.'/'.$merchant->image) }}">
                            </div>
                        </div>
                        <!--end author-image-->
                        <div class="author-description">
                            <div class="section-title" style="padding-bottom: 0rem">
                                <h2>{{$merchant->name}}</h2>
                                <h4 class="location">
                                    <a href="#">{{$merchant->address}}</a>
                                </h4>
                                <figure style="margin: 0px 6px -3rem">

                                    <div class="text-align-right social">
                                        <a href="#">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                            <div class="additional-info">
                                <ul>
                                    <li>
                                        <figure>Phone</figure>
                                        <aside>{{$merchant->phone}}</aside>
                                    </li>
                                    <li>
                                        <figure>Email</figure>
                                        <aside><a href="#">{{$merchant->email}}</aside>
                                    </li>
                                </ul>
                            </div>

                            <!--end addition-info-->
                            <p>
                                {{$merchant->description}}
                            </p>
                        </div>
                        <!--end author-description-->
                    </div>
                    <!--end author-->
                </div>
                <div class="background">
                    <div class="background-image original-size background-repeat-x">
                        <img src="/assets/img/gradient-background.png" alt="">
                    </div>
                    <!--end background-image-->
                </div>
                <!--end background-->
            </section>
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-12">
                        <section>

                            <!--============ Section Title===================================================================-->
                            <div class="section-title clearfix" style="padding-bottom: 0px">
                                <h2 style="margin-bottom: -3rem">{{$merchant->name}}'s Ads</h2>
                                <div class="float-right float-xs-none d-xs-none thumbnail-toggle">
                                    <a href="#" class="change-class active" data-change-from-class="list compact"
                                       data-change-to-class="grid" data-parent-class="items">
                                        <i class="fa fa-th"></i>
                                    </a>
                                    <a href="#" class="change-class" data-change-from-class="grid"
                                       data-change-to-class="list compact" data-parent-class="items">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </div>
                            </div>
                            <!--============ Items ==========================================================================-->
                            <div class="read-more" data-read-more-link-more="Show More"
                                 data-read-more-link-less="Show Less">
                                <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                                    @foreach($posts as $p)
                                        <div class="item">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <h3>
                                                    <a href="#" class="tag category">{{$p->category->title}}</a>
                                                        <a href="single-listing-1.html" class="title">{{$p->title}}</a>

                                                    </h3>
                                                    @php $images = json_decode($p->filename,true); @endphp
                                                    @if(is_array($images) && !empty($images))
                                                        <a href="single-listing-1.html"
                                                           class="image-wrapper background-image">
                                                            <img src="{{ asset('/images/posts/'.$images[0]) }}"
                                                                 alt="">
                                                        </a>
                                                    @endif
                                                </div>
                                                <!--end image-->
                                                <h4 class="location">
                                                    <a href="#">{{$p->location}}</a>
                                                </h4>

                                                <div class="meta">
                                                    <figure>
                                                        <i class="fa fa-calendar-o"></i>{{$p->created_at->format('d M Y')}}
                                                    </figure>
                                                    <figure>
                                                        <a href="{{route('profile.show',$p->merchant_id)}}">
                                                            <i class="fa fa-user"></i>{{$p->Merchant->name}}
                                                        </a>
                                                    </figure>
                                                </div>
                                                <!--end meta-->
                                                <div class="description">
                                                    <p>{{$p->description}}</p>
                                                </div>
                                                <!--end description-->
                                                <a href="{{route('searchdetail',$p->id)}} "
                                                   class="detail text-caps underline">Detail</a>
                                            </div>
                                        </div>
                                        <!--end item-->
                                @endforeach
                                <!--end item-->
                                </div>
                                <!--============ End Items ==============================================================-->
                            </div>
                            <!--end read-more-->
                        </section>
                    </div>
                    <!--end col-md-9-->
                    <!--end col-md-3-->
                </div>
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </section>
@endsection

@section('footer')
@include('layout.footer')
@endsection
