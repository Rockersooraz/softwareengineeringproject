<section class="block">
                <div class="container">
                    <h2>Recent Posts</h2>
                    <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
                    @foreach($recentposts as $p )
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="{{route('searchdetail',$p->id)}}" class="title">{{$p->title}}</a>
                                    </h3>
                                    @php $images = json_decode($p->filename,true); @endphp
                                     @if(is_array($images) && !empty($images))
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="{{ asset('/images/posts/'.$images[0]) }}" alt="">
                                    </a>
                                    @endif
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">{{$p->location}}</a>
                                </h4>
                                <a href="{{route('categoryfilter',$p->category->id)}}" class="price">{{$p->Category->title}}</a>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>{{$p->created_at->format('d M Y')}}
                                    </figure>
                                    <figure>
                                    <a href="{{route('profile.show',$p->merchant_id)}}" >
                                            <i class="fa fa-user"></i>{{$p->Merchant->name}}
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>{{$p->description}}</p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Area</figure>
                                            <aside>368m<sup>2</sup></aside>
                                        </li>
                                        <li>
                                            <figure>Bathrooms</figure>
                                            <aside>2</aside>
                                        </li>
                                        <li>
                                            <figure>Bedrooms</figure>
                                            <aside>3</aside>
                                        </li>
                                        <li>
                                            <figure>Garage</figure>
                                            <aside>1</aside>
                                        </li>
                                    </ul>
                                </div>
                                 <!--end addition-info-->
                                 <a href="{{route('searchdetail',$p->id)}} " class="detail text-caps underline">Detail</a>                            </div>
                               </div>
                        @endforeach
                        </div>
                 </div>
           </div>
    </section>