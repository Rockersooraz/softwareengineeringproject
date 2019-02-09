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
                            <a class="nav-link" href="{{route('home.index')}}" style="color:#F2F2F2;">Home</a>
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
@section('background')
    <div class="background">
        <div class="background-image original-size" style="background-color:#FFCC66" >
            {{--<img src="{{asset('/assets/img/gradient-1.jpg')}}" alt="">--}}
        </div>
        <!--end background-image-->
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
@section('items')
    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row">
                    <!--============ Listing Detail =============================================================-->
                    <div class="col-md-7">
                        <!--Gallery Carousel-->
                        <section>
                            <h2 style="margin-bottom: 2rem; font-size: 32px"><strong>{{$post->title}}</strong></h2>
                        {{--<h4><a href="#" style="color:#9f191f;"> {{$post->location}}</a></h4>--}}
                        <!--end section-title-->
                            <div class="image-wrapper">
                                @php $images = json_decode($post->filename,true); @endphp
                                @if(is_array($images) && !empty($images))
                                    @foreach ($images as $image)
                                        <img src="{{ asset('/images/posts/'.$image) }}" style="width: 100%; height: 100%" alt="" data-hash="#">
                                    @endforeach
                                @endif
                            </div>
                            {{--<div class="gallery-carousel-thumbs owl-carousel">--}}
                            {{--@php $images = json_decode($post->filename,true); @endphp--}}
                            {{--@if(is_array($images) && !empty($images))--}}
                            {{--@foreach ($images as $image )--}}
                            {{--<img src="{{ asset('/images/posts/'.$image) }}" alt="">--}}
                            {{--@endforeach--}}
                            {{--@endif--}}
                            {{--</div>--}}
                        </section>
                        <!--end Gallery Carousel-->
                        <!--Description-->
                    {{--<section>--}}
                    {{--<h2>Description</h2>--}}
                    {{--<p>--}}
                    {{--{{$post->description}}--}}
                    {{--</p>--}}
                    {{--</section>--}}
                    <!--end Description-->
                        <!--Details & Location-->
                        {{--<section>--}}
                            {{--<h2 style="margin-bottom: 2rem"> Post Details</h2>--}}
                            {{--<p>--}}
                                {{--{{$post->description}}--}}
                            {{--</p>--}}
                            {{--<dl class="columns-4">--}}
                                {{--<dt>Date Added</dt>--}}
                                {{--<dd>{{$post->created_at->format('d M Y')}}</dd>--}}
                                {{--<dt>Location</dt>--}}
                                {{--<dd>{{$post->location}}</dd>--}}
                            {{--</dl>--}}
                            {{--<hr>--}}
                        {{--</section>--}}
                        {{--<section>--}}
                            {{--<h2 style="margin-bottom: 2rem">Business Details</h2>--}}
                            {{--<dl class="columns-3">--}}
                                {{--<dt>Name</dt>--}}
                                {{--<dd>{{$post->Merchant->name}}</dd>--}}
                                {{--<dt>Email</dt>--}}
                                {{--<dd>{{$post->Merchant->email}}</dd>--}}
                                {{--<dt>Phone Number</dt>--}}
                                {{--<dd>{{$post->Merchant->phone}}</dd>--}}
                            {{--</dl>--}}
                            {{--<hr>--}}
                        {{--</section>--}}

                    </div>
                    <!--============ End Listing Detail =========================================================-->
                    <div class="col-md-1">

                    </div>
                    <!--============ Sidebar ====================================================================-->
                    <div class="col-md-4">
                        <br>
                        <br>
                        <section>
                            <h2 style="margin-bottom: 2rem"> Post Details</h2>
                            <p style="text-align: justify">
                               &nbsp;&nbsp; {{$post->description}}
                            </p>
                            <br>
                            <dl class="columns-1">
                                <dt>Date Added</dt>
                                <dd>{{$post->created_at->format('d M Y')}}</dd>
                            </dl>
                            <hr>
                       
                            <h2 style="margin-bottom: 2rem">Business Details</h2>
                            <dl class="columns-1">
                                <dt>Name</dt>
                                <dd>{{$post->Merchant->name}}</dd>
                                <dt>Email</dt>
                                <dd>{{$post->Merchant->email}}</dd>
                                <dt>Phone Number</dt>
                                <dd>{{$post->Merchant->phone}}</dd>
                                <dt>Location</dt>
                                <dd>{{$post->location}}</dd>
                            </dl>
                            <hr>
                            <form class="sidebar-form form" method='POST' action="{{URL::to('/search')}}" >
                            {{ csrf_field() }}
                                       <div class="form-group">
                                            <input name="value" type="text" class="form-control" id="what" placeholder="What are you looking for?">
                                          <!--end form-group-->
                                      <button type="submit" class="btn btn-primary width-100">Search</button>
                                 </div>
                            </form>
                        </section>
                        {{--<aside class="sidebar">--}}
                            {{--<section>--}}
                                {{--<h2>Ads You May Like</h2>--}}
                                {{--<div class="items compact">--}}
                                    {{--@foreach($randposts as $p)--}}
                                        {{--<div class="item">--}}
                                            {{--<!--end ribbon-->--}}
                                            {{--<div class="wrapper">--}}
                                                {{--<div class="image">--}}
                                                    {{--<h3>--}}
                                                        {{--<a href="{{route('searchdetail',$p->id)}}"--}}
                                                           {{--class="title">{{$p->title}}</a>--}}
                                                        {{--<span class="tag">{{$p->type}}</span>--}}
                                                    {{--</h3>--}}
                                                    {{--@php $images = json_decode($p->filename,true); @endphp--}}
                                                    {{--@if(is_array($images) && !empty($images))--}}
                                                        {{--<a href="#" class="image-wrapper background-image">--}}
                                                            {{--<img src="{{ asset('/images/posts/'.$images[0]) }}"--}}
                                                                 {{--alt=""></a>--}}
                                                    {{--@endif--}}
                                                {{--</div>--}}
                                                {{--<!--end image-->--}}
                                                {{--<h4 class="location">--}}
                                                    {{--<a href="#">{{$p->location}}</a>--}}
                                                {{--</h4>--}}
                                                {{--<div class="price">Rs.{{$p->price}}</div>--}}
                                                {{--<div class="meta">--}}
                                                    {{--<figure>--}}
                                                        {{--<i class="fa fa-calendar-o"></i>{{$p->created_at->format('d M Y')}}--}}
                                                    {{--</figure>--}}
                                                    {{--<figure>--}}
                                                        {{--<a href="{{route('profile.show',$p->merchant_id)}}">--}}
                                                            {{--<i class="fa fa-user"></i>{{$p->Merchant->name}}--}}
                                                        {{--</a>--}}
                                                    {{--</figure>--}}
                                                {{--</div>--}}
                                                {{--<!--end meta-->--}}
                                            {{--</div>--}}
                                            {{--<!--end wrapper-->--}}
                                        {{--</div>--}}
                                        {{--<!--end item-->--}}
                                {{--@endforeach--}}
                                {{--<!--end item-->--}}
                                {{--</div>--}}
                            {{--</section>--}}
                            {{--<section>--}}
                                {{--<!-- <h2>Search Ads</h2> -->--}}
                                {{--<!--============ Side Bar Search Form ===========================================-->--}}
                          
                                {{--<!--============ Side Bar Search Form ===========================================-->--}}
                        {{--</aside>--}}
                    </div>
                    <!--============ End Sidebar ================================================================-->
                    <div class="col-md-12">
                        <section>
                            <h2 style="margin-bottom: 2rem">Reviews</h2>
                            <div class="comments">
                                @foreach($post->comments as $Comment)
                                    <div class="comment">
                                        <div class="author">
                                            <a href="#" class="author-image">
                                                <div class="background-image">
                                                    <img src="{{asset('/images/ProfilePictures/'.$Comment->merchants->image)}}" alt="">
                                                </div>
                                            </a>
                                            <div class="author-description">
                                            <h3><a href="{{route('profile.show',$Comment->merchants->id)}}">{{$Comment->User_name}}</a></h3>
                                                <div class="meta">
                                                    <!-- <span class="rating" data-rating="4"></span> -->
                                                    <span>{{$Comment->created_at->diffForHumans()}}
                                                    </span>
                                                    <h5>
                                                        {{$Comment->body}}
                                                    </h5>
                                                </div>
                                                <!--end meta-->

                                            </div>
                                            <!--end author-description-->
                                        </div>
                                        <!--end author-->
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-12">
                            @if(session()->has('success'))
                            <div class="alert alert-danger" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              <strong>{{session()->get('success')}}</strong>
                            </div>
                            @endif
                            @if(session()->has('errors'))
                            <div class="alert alert-danger" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              <strong>{{session()->get('errors')}}</strong>
                            </div>
                            @endif
                                <form method="POST" action="{{route('addcomment',$post->id)}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="review" class="col-form-label">Your Review</label>
                                        <textarea name="body" id="body" class="form-control" rows="4"
                                        placeholder="Good , I am satisfied." required></textarea>
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" class="btn btn-primary small btn-framed float-right" value="Add Review">
                                    </div>
                                    <!--end form-group-->
                                </form>
                            </div>
                         

                        </section>
                    </div>
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