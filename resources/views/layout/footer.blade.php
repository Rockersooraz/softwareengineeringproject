<section class="footer">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <a href="#" class="brand">
                            <img src="{{ asset('/images/WebsiteLogo'.'/'.$web->logo) }}" alt="">
                        </a>
                        <p>
                        {{$web->description}}
                        </p>
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-3">
                        <h2>Navigation</h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{route('home.index')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('post.store')}}">Submit Post</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled">
                                        @if(Auth::guard('merchant')->check())
                                            <li>
                                                <a href="{{route('merchant.dashboard')}}">My Profile</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{route('merchant.login')}}">Sign In</a>
                                            </li>
                                            <li>
                                                <a href="{{route('merchant.register')}}">Register</a>
                                            </li>
                                        @endif
                                        <li>
                                                <a href="{{route('privacy')}}">Privacy Policies</a>
                                         </li>
                                         <li>
                                                <a href="{{route('terms')}}">Terms And Condition</a>
                                         </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-4">
                        <h2>Contact</h2>
                        <address>
                            <figure>
                               
                                {{$web->address1}}<br>
                                {{$web->address2}}
                            </figure>
                            <br>
                            <strong>Email:</strong> <a href="#">{{$web->email}}</a>
                            <br>
                            <strong>Phone: </strong>{{$web->phone}}
                            <br>
                            <br>
                            <a href="{{route('Mail.index')}}" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                        </address>
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <div class="background">
                <div class="background-image original-size" style="background-color: #FFCC66">
                    {{--<img src="{{ asset('/images/WebsiteLogo'.'/'.$web->logo) }}" alt="">--}}
                </div>
                <!--end background-image-->
            </div>
            <!--end background-->
        </div>
    </section>