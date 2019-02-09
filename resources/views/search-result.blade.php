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
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                    <li class="nav-item active ">
                                        <a class="nav-link" href="{{route('home.index')}}" style="color:#F2F2F2;">Home</a>
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
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{route('post.store')}}" class="btn btn-primary text-caps btn-rounded btn-framed" style="color:#F2F2F2;">Submit Post</a>
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
<form method='GET' action="{{URL::to('/search')}}" class="hero-form form">
{{ csrf_field() }}
     <div class="container">
            <!--Main Form-->
                 <div class="main-search-form">
                    <div class="form-row">
                         <div class="col-md-9 col-sm-9">
                                 <div class="form-group">
                                        <label for="what" class="col-form-label" style="color:#F2F2F2;">What Are You Looking For?</label>
                                        <input name="value" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
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
@endsection
@section('background')
<div class="background">
    <div class="background-image original-size" style="background-color:#FFCC66" >
        {{--<img src="{{asset('/assets/img/gradient-1.jpg')}}" alt="">--}}
    </div>
  <!--end background-image-->
</div>
@endsection
@section('items')
<section class="content">
            <section class="block">
                <div class="container">
                   <div class="section-title clearfix">
                       <h2>Search Results</h2>
                    </div>
                    <div class="read-more" data-read-more-link-more="Show More" data-read-more-link-less="Show Less" >
                       <div class="items masonry grid-xl-4-items grid-lg-3-items grid-md-2-items">
                       @if(count($posts))
                           @foreach($posts as $p)
                               @include('layout.search-post')
                            @endforeach
                        @else
                          <div  class="author-description">
                          
                             <h4>No Results Found</h4>  
                        
                          </div>
                        @endif  
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