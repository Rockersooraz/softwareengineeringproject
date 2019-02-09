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
             
              <form  class="form clearfix" method="POST" action="{{ route('merchant.registers') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
              {{csrf_field()}}
                        <section>
                           <div class="row">
                           <div class="col-md-8">                 
                                <!--end col-md-8-->
                                <div class="col-md-12">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Company Name" class="col-form-label required">{{ __('Company Name') }}</label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Company Name"   value="{{ old('name') }}"required>
                                        @if ($errors->has('company_name'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Company Address" class="col-form-label required"> Comapny Address</label>
                                        <input name="address" type="text" class="form-control " id="address"  value="{{ old('address') }}"  placeholder="Company Location" required>
                                        <span class="input-group-addon"></span>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile" class="col-form-label required"> Mobile Number</label>
                                        <input name="mobile" type="text" class="form-control" id="mobile"   placeholder="Mobile Number"  value="{{ old('mobile') }}" required>
                                        <span class="input-group-addon"></span>
                                        @if ($errors->has('mobile'))
                                       <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                       </span>
                                     @endif
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="col-form-label required">Phone Number</label>
                                        <input name="phone" type="text" class="form-control" id="phone"   value="{{ old('phone') }}" placeholder="Phone Number" >
                                        <span class="input-group-addon"></span>
                                        @if ($errors->has('phone'))
                                       <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                       </span>
                                     @endif
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="col-form-label required">Email </label>
                                        <input name="email" type="text" class="form-control" id="email"  value="{{ old('email') }}" placeholder="Your E-mail"  required>
                                        @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                @endif
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Established Date" class="col-form-label required">Established Date </label>
                                        <input name="established_date" type="date" class="form-control" id="established_date"  placeholder="Established Date"  value="{{ old('established_date') }}"required>
                                        <span class="input-group-addon"></span>
                                        @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                @endif
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Password" class="col-form-label required">Password </label>
                                        <input name="password" type="password" class="form-control" id="Password"   placeholder="Password">
                                        <span class="input-group-addon"></span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <!--end form-group-->
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password-confirm" class="col-form-label required">{{ __('Confirm Password') }}</label>
                                        <input name="password_confirmation" type="password" class="form-control" id="Password"   placeholder=" Confirm Password" required>
                                        <span class="input-group-addon"></span>
                                    </div>
                                 
                                   
                                    <!--end form-group-->
                                </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                        <div class="profile-image">
                                            <div class="image background-image" style = "width : 200px; height : 140px">
                                            <div class="background-image-small">
                                                <img src="{{asset('/assets/img/author-09.jpg')}}" alt=""style="    max-width: 70%; height: 150px;" >
                                            </div>
                                            </div>
                                            <div class="single-file-input" style="padding-right : 175px">
                                                <input type="file" id="image" name="image">
                                                <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                <label for="details" class="col-form-label ">Business Details</label>
                                <textarea name="description" id="details" placeholder="Explain About Your Business(Optional)" class="form-control"  value="{{ old('description') }}"rows="6">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                               </div> 
  
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="checkbox">
                                         <label><input type="checkbox" value="" required>I have read and agree to <a href="{{route('terms')}}" target ="new" style="color:blue;">terms and condition</a> </label>
                                      </div>
                                    </div>
                                    <br>
                                    <hr style="border : solid black 0.5px">
                                    <div class="form-group">
                                    <div class="col-md-12">
                                    
                                    </div>
                   
                              </div>
                              <div class="form-group">
                                 <input type="submit" class="btn btn-info " value="Register"/>                    
                              </div> 
                     <section class="clearfix">
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
