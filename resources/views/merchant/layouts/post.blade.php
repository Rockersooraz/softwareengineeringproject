                               <div class="item">
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>      <a href="#" class="tag category">{{$post->category->title}}</a>
                                                <a href="{{route('post.show',$post->id)}}" class="title">{{$post->title}}</a>
                                            </h3>
                                            <a href="{{route('post.show',$post->id)}}" class="image-wrapper background-image">
                                            @php $images = json_decode($post->filename,true); @endphp
                                                 @if(is_array($images) && !empty($images))
                                             <img src="{{ asset('/images/posts/'.$images[0]) }}" alt="" >
                                            @endif
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">{{$post->location}}</a>
                                        </h4>
                                      
                                        

                                        <div class="admin-controls">
                                            <a href="{{route('post.edit',$post->id)}}">
                                                <i class="fa fa-pencil"></i>Edit
                                            </a>
                                            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()"  > <i class="fa fa-trash"></i>Delete</a>
                                              <form action="{{route('post.destroy',$post->id)}}" method="post">
                                                @method('DELETE')
                                               {{csrf_field()}}
                                             </form>
                                            </a>
                                        </div>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p>{{$post->description}}</p>
                                        </div>
                                        <!--end description-->
                                        <a href="{{route('post.show',$post->id)}}" class="detail text-caps underline">Detail</a>
                                        <!-- <a href="single-listing-1.html" class="detail text-caps underline">Detail</a> -->
                                    </div>
                                </div>