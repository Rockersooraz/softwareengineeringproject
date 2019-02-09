@extends('layouts.backend')

@section('title', 'Edit Admin')

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
                            <h3 class="box-title">Edit <strong style="color: #5fa7da">Admin</strong>&nbsp &nbsp</h3>
                        </div>

                        <div class="box-body">

                            <form action="{{route('backend.admin.update',$admin->id)}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}

                                @method('PUT')
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <div class="control-group">
                                                <div class="controls">
                                                    {{--<div class="fileupload fileupload-new" data-provides="fileupload">--}}
                                                    {{--<div class="fileupload-new thumbnail"--}}
                                                    {{--style="width: 150px; height:100px;">--}}
                                                    {{--<img src="{{ url('/imgaes/backend/admin'.$admin->image) }}"/>--}}
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
                                <input type="hidden" name="id" value="{{$admin->id}}">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Name </strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-address-book"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="name"
                                                       value="{{$admin->name}}" required>
                                                <small class="text text-danger">{{$errors->first('name')}}</small>
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
                                                       value="{{$admin->phone}}" required>
                                                <small class="text text-danger">{{$errors->first('phone')}}</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Address</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-vcard"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="address"
                                                       value="{{$admin->address}}" required>
                                                <small class="text text-danger">{{$errors->first('address')}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Company Name</strong></div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-institution (alias)"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="company_name"
                                                       value="{{$admin->company_name}}" required>
                                                <small class="text text-danger">{{$errors->first('company_name')}}</small>
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
                                                       value="{{$admin->email}}" required>
                                                <small class="text text-danger">{{$errors->first('email')}}</small>
                                            </div>
                                        </div>
                                    </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection