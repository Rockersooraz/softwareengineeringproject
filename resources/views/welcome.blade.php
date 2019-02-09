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
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <!--Main navigation list-->
                    <ul class="navbar-nav">
                        <li class="nav-item active ">
                            <!-- <ul class="child"> -->
                            <!-- <li class="nav-item">
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
                            </li> -->
                            <!-- </ul> -->
                        </li>
                        <li class="nav-item has-child">
                            <a class="nav-link" href="#" style="color:#F2F2F2;">Category</a>

                            <!-- 1st level -->
                            <ul class="child">
                                @foreach($categories as $category)
                                    <li class="nav-item" style="text-align:left;">
                                        <a href="{{route('categoryfilter',$category->id)}}" class="nav-link"
                                           value="{{$category->title}}" 
                                                {{--@if($category->id == $Post->category_id)--}}
                                                {{--selected--}}
                                                {{--@endif--}} >{{$category->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('post.store')}}" class="btn btn-primary text-caps btn-rounded btn-framed" style = "color:#F2F2F2">Submit
                                Post</a>
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
@section('advertisement-slider')

    <div class="container" style="margin-top: -10px;background-color:#FFCC66;width: 100%;height: 100%;">
        <br>
        <div class="row">

            @if( ! empty($add1))
            <div class="col-md-6" style="height: 140px">
                <div class="modal-content"
                     style="background-color: #a39e9b; width: 100%; height: 100%;overflow: hidden">
                    {{--<h2 style="text-align: center">Advertisement 1</h2>--}}
                    <img src="{{ asset('/images/Customads-1'.'/'.$add1->filename) }}"alt="">
                </div>
            </div>
            @endif
            {{--<div class="col-md-1">--}}

            {{--</div>--}}
            <div class="col-md-6">
           
                <div class="row">
                @if( ! empty($add2))
                    <div class="col-md-6" style="height: 140px">
                        <div class="modal-content"
                             style="background-color: #a39e9b; width: 100%; height: 100%;overflow: hidden">
                            {{--<h2 style="text-align: center">Advertisement 2</h2>--}}
                            <img src="{{ asset('/images/Customads-2'.'/'.$add2->filename) }}" alt="">
                        </div>
                    </div>
                    @endif
                    @if( ! empty($add3))
                    <div class="col-md-6" style="height: 140px">
                        <div class="modal-content"
                             style="background-color: #a39e9b; width: 100%; height: 100%;overflow: hidden; ">
                            {{--<h2 style="text-align: center">Advertisement 3</h2>--}}
                            <img src="{{ asset('/images/Customads-3'.'/'.$add3->filename) }}" alt="">

                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="clear-fix">
                    <br>
                    <br>
                </div>
            </div>

            <div id="jssor_1"
                 style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin"
                     style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                         src="{{asset('/assets/slider/img/spin.svg')}}"/>
                </div>
                <div data-u="slides"
                     style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
                    @foreach( $randomposts as $post)
                        <div class="items">
                            <div class="item">
                                <!-- <div class="ribbon-featured">Featured</div> -->
                                <!--end ribbon-->
                                <div class="wrapper">
                                    <div class="image" style="height: 15rem">
                                        <h3 style="left:1.8rem;bottom:3rem;padding-right: 0.8rem;margin-bottom: -0.5rem;font-size:16px">
                                            <a href="{{route('searchdetail',$post->id)}}}"
                                               class="title">{{$post->title}}</a>
                                        <!-- <span class="tag">{{$post->type}}</span> -->
                                        </h3>
                                        <a href="{{route('searchdetail',$post->id)}}"
                                           class="image-wrapper background-image">
                                            @php $images = json_decode($post->filename,true); @endphp
                                            @if(is_array($images) && !empty($images))
                                                <img data-u="image" src="{{ asset('/images/posts/'.$images[0]) }}"
                                                     alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location" style="top: 125px; font-size: 12px">
                                        <a href="#">{{$post->location}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;"
                     data-autocenter="1"
                     data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewbox="0 0 16000 16000"
                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;"
                     data-autocenter="2"
                     data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a"
                              d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;"
                     data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a"
                              d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-md-12">
                <form method='POST' action="search" class="hero-form form">
                    {{ csrf_field() }}
                    <div class="container">
                        <!--Main Form-->
                        <div class="main-search-form">
                            <div class="form-row">
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group">
                                        <label for="what" class="col-form-label" style="color:#382727;">What Are You
                                            Looking
                                            For?</label>
                                        <input name="value" type="text" class="form-control small" id="what"
                                               placeholder="What are you looking for?">
                                        <!-- <input hidden name="column" value="title"> -->
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
                        <!--Alternative Form-->
                        <!--end alternative-search-form-->
                    </div>
                    <!--end container-->
                </form>
            </div>
        </div>

    </div>

@endsection
@section('hero-form')

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
        <!--============ Popular Ads ===========================================================================-->
    @include('layout.popularposts')
    <!--============ End Popular Ads =======================================================================-->
        <!--============ Features Steps =========================================================================-->
        <section class="block">
            <div class="container">
                <div class="block">
                    <h2>Working  With Us Is Easy</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="feature-box">
                                <figure>
                                    <img src="{{asset('/assets/icons/feature-user.png')}}" alt="">
                                    <span>1</span>
                                </figure>
                                <h3>Create an Account</h3>
                                <p>First user or merchant need to get registered in Synopticsiary.</p>
                            </div>
                            <!--end feature-box-->
                        </div>
                        <!--end col-->
                        <div class="col-md-3">
                            <div class="feature-box">
                                <figure>
                                    <img src="/assets/icons/feature-upload.png" alt="">
                                    <span>2</span>
                                </figure>
                                <h3>Submit Your Post</h3>
                                <p>Once Account is created, you need to submit your post describing about your business.</p>
                            </div>
                            <!--end feature-box-->
                        </div>
                        <!--end col-->
                        <div class="col-md-3">
                            <div class="feature-box">
                                <figure>
                                    <img src="/assets/icons/feature-like.png" alt="">
                                    <span>3</span>
                                </figure>
                                <h3>Promote Your Business</h3>
                                <p>Synopticdiary acts as a bridge between Business and Users.If you are convinced,Make a deal.</p>
                            </div>
                            <!--end feature-box-->
                        </div>
                        <!--end col-->
                        <div class="col-md-3">
                            <div class="feature-box">
                                <figure>
                                    <img src="/assets/icons/feature-wallet.png" alt="">
                                    <span>4</span>
                                </figure>
                                <h3>Enjoy the Service!</h3>
                                <p>Enjoy The Service Provided by Synopticdiary.</p>
                            </div>
                            <!--end feature-box-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end block-->
            </div>
            <!--end container-->
            <div class="background" data-background-color="#fff"></div>
            <!--end background-->
        </section>
        <!--end block-->
        <!--============ End Features Steps =====================================================================-->
        <!--============ Recent Ads =============================================================================-->
    @include('layout.recentposts')
    <!--end block-->
        <!--============ End Recent Ads =========================================================================-->
    </section>
@endsection
@section('footer')
@include('layout.footer')
@endsection