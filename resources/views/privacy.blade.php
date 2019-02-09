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
                                <img src="{{ asset('/images/WebsiteLogo'.'/'.$web->logo) }}"  alt="#">
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
                        <h2> Privacy Policy</h2>
                        <p>
                       

Protecting privacy is important to us but due to the nature of our business, some functions and services offered through our site requires user to provide certain personal information such as name, email address, contact address, phone numbers, etc. for communication purpose and such information collected are provided to us voluntarily. Some of this information is displayed ly in Internet and may be used by third parties, on whom we do not have any control. Similarly, some of personal information is shared with other users in order to facilitate communication. 

Some of computer data are involuntarily collected by our system in order to ensure proper functioning of our services. These data include cookies, user IP address, site browsing behavior, page traffic & information related to computer, browser, screen, etc. Third party vendor, including Google may also collect these data in order to display ads-based user behavior. 

We use collected information and data to provide our services, facilitate communication between users, customize information, communicate marketing and promotional offers (which you can opt out anytime), display third parties advertisements, identify user, market research, troubleshoot & improve or develop our system. 

We do not and sell or rent users personal information to third parties without users’ explicit consent. However, we may be required from time to time to disclose user’s personal information to Governmental or law enforcement authorities. We may also disclose personal information to enforce our policies regarding to claims made by others for violation of their rights, privacy and property. We may share some part of your personal information with our service provider (including but not limited to mobile network operators, hosting providers, etc.), who helps us in functioning of our business and technical operations. 

We store this personal information on secure computer & ensure best effort to protect from unauthorized access and malicious use. However, transmission of data over internet is not under our control and may not be completely safe. 

You can modify, delete your personal details, posting & other information from our system whenever you want. But we might retain backup / archive of such information for purposes not limited to reporting, regulatory compliances, etc. for reasonable time. We may aggregate information in manner to anonymize data, and supply such non-personally identifiable data to our affiliates.
                        </p>
                    </section>
                   
                  
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
@endsection

@section('footer')
@include('layout.footer')
@endsection