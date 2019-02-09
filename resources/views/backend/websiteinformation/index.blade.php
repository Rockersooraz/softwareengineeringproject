@extends('layouts.backend')
@section('title', 'Create Admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Admin
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Website <strong style="color: #5fa7da">Content</strong>&nbsp &nbsp</h3>
                        </div>
                        <div class="panel-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success" role="alert" align="center">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>{{session()->get('success')}}</strong>
                                </div>
                            @endif
                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert" align="center">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>{{session()->get('error')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="box-body">

                        @if( empty($websiteinfo))
                        <form action="{{route('backend.websiteinformation.store')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <div class="control-group">
                                                <div class="controls">
                                                    {{--<div class="fileupload fileupload-new" data-provides="fileupload">--}}
                                                    {{--<div class="fileupload-new thumbnail"--}}
                                                    {{--style="width: 150px; height:100px;">--}}
                                                    {{--<img src="{{ url('public/imgaes/backend/admin'.$admin->image) }}"/>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="fileupload-preview fileupload-exists thumbnail"--}}
                                                    {{--style="width: 150px; height:100px;"></div>--}}
                                                    {{--<div>--}}
                                                    {{--<small class="text text-danger">{{$errors->first('image')}}</small>--}}

                                                    {{--<span class="btn btn-file">--}}
                                                    {{--<span class="fileupload-new btn btn-primary">Select image</span>--}}
                                                    {{--<span class="fileupload-exists btn btn-info">Change</span>--}}
                                                    {{--<input type="file" name="image"/>--}}
                                                    {{--</span>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Phone</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="add phone number" required>
                                                <small class="text text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Address First Line</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-vcard"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="address1"
                                                       placeholder="First line of address" required>
                                                <small class="text text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Address Second Line</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-id-card-o"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="address2"
                                                       placeholder="Second line of address" required>
                                                <small class="text text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Email</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="email"
                                                       placeholder="your Email" required>
                                                <small class="text text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Description</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                    </div>
                                                </div>
						                     	<textarea name="description" id="textarea"  class="form-control" required placeholder="Description about Synopticdiary"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-3"><strong>Synopticdiary Logo</strong></div>
                                    <div class="col-md-9">
                                    <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-file-image-o"></i>
                                                    </div>
                                                </div>
                                                <input type="file" name="image" value="Upload Logo" class="form-control" required>
                                            </div>
                                         </div>
                                      </diV>
					            </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <button type="submit" class="btn btn-success"><i
                                                     class="fa fa-check"></i>&nbsp;&nbsp;
                                                    Save Changes
                                                </button>&nbsp;
                                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                                    Cancel&nbsp;&nbsp;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @else
                            @foreach($websiteinfo as $web)
                            <form action="{{route('backend.websiteinformation.update',$web->id)}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <div class="control-group">
                                                <div class="controls">
                                                    {{--<div class="fileupload fileupload-new" data-provides="fileupload">--}}
                                                    {{--<div class="fileupload-new thumbnail"--}}
                                                    {{--style="width: 150px; height:100px;">--}}
                                                    {{--<img src="{{ url('public/imgaes/backend/admin'.$admin->image) }}"/>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="fileupload-preview fileupload-exists thumbnail"--}}
                                                    {{--style="width: 150px; height:100px;"></div>--}}
                                                    {{--<div>--}}
                                                    {{--<small class="text text-danger">{{$errors->first('image')}}</small>--}}

                                                    {{--<span class="btn btn-file">--}}
                                                    {{--<span class="fileupload-new btn btn-primary">Select image</span>--}}
                                                    {{--<span class="fileupload-exists btn btn-info">Change</span>--}}
                                                    {{--<input type="file" name="image"/>--}}
                                                    {{--</span>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Phone</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="add phone number" value ="{{$web->phone}}" required>
                                                <small class="text text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Address First Line</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-vcard"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="address1"
                                                       placeholder="First line of address" value ="{{$web->address1}}" required>
                                                <small class="text text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Address Second Line</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-id-card-o"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control"  value ="{{$web->address2}}" name="address2"
                                                       placeholder="Second line of address" required>
                                                <small class="text text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Email</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="email"
                                                       placeholder="your Email" value ="{{$web->email}}" required>
                                                <small class="text text-danger"></small>
                                                <input name="fname" type="text" class="form-control"
                                                    value="{{$web->logo}}" hidden>
                                                    <input name="id" type="text" class="form-control"
                                                    value="{{$web->id}}" hidden>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Description</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                    </div>
                                                </div>
						                     	<textarea name="description" id="textarea"  class="form-control" required placeholder="Description about Synopticdiary">{{$web->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-3"><strong>Synopticdiary Logo</strong></div>
                                    <div class="col-md-9">
                                    <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                    <img src="{{ asset('public/images/WebsiteLogo'.'/'.$web->logo) }}" alt="" class="avatar avatar-sm">
                                                    </div>
                                                </div>
                                                <input type="file" name="image" value="Upload Logo" class="form-control" >
                                            </div>
                                         </div>
                                      </diV>
					            </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <button type="submit" class="btn btn-success"><i
                                                     class="fa fa-check"></i>&nbsp;&nbsp;
                                                    Save Changes
                                                </button>&nbsp;
                                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                                    Cancel&nbsp;&nbsp;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                            @endif
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection