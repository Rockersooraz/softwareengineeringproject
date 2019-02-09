<section class="block">
                <div class="container">
                <h2>Popular Posts</h2>
                  <div class="carousel slide">
                    <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                    @foreach($randposts as $p)
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="{{route('searchdetail',$p->id)}}" class="title">{{$p->title}}</a>
                                    </h3>
                                    @php $images = json_decode($p->filename,true); @endphp
                                     @if(is_array($images) && !empty($images))
                                        <a href="#" class="image-wrapper background-image">
                                        <img src="{{ asset('/images/posts/'.$images[0]) }}" alt="" ></a>
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
                                <a href="{{route('searchdetail',$p->id)}} " class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->
                        @endforeach

                   
 </section>