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
                    <img src="{{ asset('/images/WebsiteLogo'.'/'.$web->logo) }}"alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <!--Main navigation list-->
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="color:#F2F2F2;">Home</a>
                        </li>
                        <li class="nav-item has-child">
                            <a class="nav-link" href="#"   style="color:#F2F2F2;" >Category</a>
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
                            <a href="{{route('post.store')}}" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Post</a>
                        </li>
                    </ul>
                    <!--Main navigation list-->
                </div>
                <!--end navbar-collapse-->
            </nav>
            <!--end navbar-->
            {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item"><a href="index.html" style="color:#F2F2F2;">Home</a></li>--}}
                {{--<li class="breadcrumb-item"><a href="#" style="color:#F2F2F2;">Merchant</a></li>--}}
                {{--<li class="breadcrumb-item active" style="color:#F2F2F2;">Edit</li>--}}
            {{--</ol>--}}
            <!--end breadcrumb-->
        </div>
        <!--end container-->
    </div>
@endsection
@section('page-title')
    <div class="page-title">
        <div class="container">
            <h1 style="color:#F2F2F2;">Submit Post</h1>
        </div>
 @endsection
 @section('background')
            <div class="background">
                {{--<div class="background-image original-size">--}}
                    {{--<img src="{{asset('/assets/img/hero-background-image-01.jpg')}}" alt="">--}}
                {{--</div>--}}
                <div class="background-image original-size" style="background-color:#FFCC66" >
                    {{--<img src="{{asset('/assets/img/gradient-1.jpg')}}" alt="">--}}
                </div>
                <!--end background-image-->
            </div>
 @endsection
 @section('items')
        <style>
                .profile-image .images {
                    width: 100%;
                    height: 25.5rem;
                    border-radius: inherit;
                    box-shadow: 0 0.2rem .7rem 0 rgba(0,0,0, .08);
                    overflow: hidden;
                    text-align: center;
                }
                .profile-image .images img {
                    height: 100%;
                }

                .single-file-inputs {
                    overflow: hidden;
                    position: relative;
                    margin-top: 2rem;
                    font-size: 1.2rem;
                    text-align: center;
                }
                .single-file-inputs input[type="file"] {

                    padding-top: 4rem;
                    position: absolute;
                    width: 100%;
                    cursor: pointer;
                    outline: none;
                    z-index: 1;
                }
                .single-file-inputs div i {
                    margin-left: .5rem;
                }
            </style>
            <section class="content">
                <section class="block">
                    <div class="container">
                        <section>
                            <div class="container">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('success'))
                                @endif
                            </div>
                        </section>
                        <form class="form form-submit" method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                          {{csrf_field()}}
                            @method('PUT')
                            <section>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title" class="col-form-label required">Title</label>
                                                <input name="title" type="text" class="form-control" id="title"
                                                       placeholder="Title"  value="{{$post->title}}" required>
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <div class="col-md-12">
                                            <label for="submit-category" class="col-form-label">Category</label>
                                    <select class="change-tab" data-change-tab-target="category-tabs" name="category" id="submit-category" >
                                        @foreach($categories as $c)
                                        <option value="{{$post->category->id}}">{{$post->category->title}}</option>
                                          <option value="{{$c->id}}"
                                           {{--@if($c->id == $post->category_id)--}}
                                            {{--selected--}}
                                              {{--@endif--}}
                                              >{{$c->title}}</option>
                                         @endforeach
                                   </select>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="input-location" class="col-form-label required">Exact
                                                    Location</label>
                                                <input name="location" type="text" class="form-control"
                                                       id="input-location" value="{{$post->location}}" placeholder="Enter Location">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <br>
                                        <h5 style ="color:rgb(32, 173, 216) ">Image Size must be less than 2MB</h5>
                                        <div class="profile-image">
                                            <div class="images background-image" style="border-radius: inherit">
                                                <div class="background-image-small">
                                                @php $images = json_decode($post->filename,true); @endphp
                                      @if(is_array($images) && !empty($images))
                                         @foreach ($images as $image )
                                         <input name="image" type="text" class="form-control"  value="{{$image}}" hidden>

                                         <img src="{{ asset('/images/posts/'.$image) }}" alt="" >    
                                         @endforeach 
                                          @endif
                                                </div>
                                            </div>
                                            <div class="single-file-inputs">
                                                <input type="file" id="image" name="filename[]">
                                                <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="padding-left: 3rem">
                                        <div class="form-group">
                                            <label for="details" class="col-form-label required">Additional
                                                Details</label>
                                            <textarea name="description" id="details" class="form-control"
                                                      rows="4">{{$post->description}}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <section class="clearfix">
                                    <div class="form-group">
                                        <button type="submit" value="submit"
                                                class="btn btn-primary large icon float-right">Submit<i
                                                    class="fa fa-chevron-right"></i></button>
                                    </div>
                                </section>
                            </section>
                        </form>
                        <!--end form-submit-->
                    </div>
                    <!--end container-->
                </section>
                <!--end block-->
            </section>
 @endsection
 @section('footer')
@include('layout.footer')
@endsection


