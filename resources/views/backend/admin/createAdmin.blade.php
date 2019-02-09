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
                            <h3 class="box-title">Create <strong style="color: #5fa7da">Admin</strong>&nbsp &nbsp</h3>
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

                            <form action="{{route('backend.admin.store')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Name : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                   required>
                                            <small class="text text-danger">{{$errors->first('name')}}</small>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Phone</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                            <small class="text text-danger">{{$errors->first('phone')}}</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Address : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="address"
                                                   placeholder="Address" required>
                                            <small class="text text-danger">{{$errors->first('address')}}</small>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Company Name : *</strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="company_name"
                                                   placeholder="Company Name" required>
                                            <small class="text text-danger">{{$errors->first('company_name')}}</small>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Email </strong></div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="email" placeholder="Email"
                                                   required>
                                            <small class="text text-danger">{{$errors->first('email')}}</small>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Password</strong></div>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="password"
                                                   placeholder="password">
                                            <small class="text text-danger">{{$errors->first('password')}}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Confirm Password</strong></div>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="password_confirmation"
                                                   placeholder="Confirm Password">
                                            <small class="text text-danger">{{$errors->first('password_confirmation')}}</small>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-3"><strong>Image</strong></div>--}}
                                        {{--<div class="col-md-9">--}}
                                            {{--<input type="file" class="form-control" name="image" placeholder="Image">--}}
                                            {{--<small class="text text-danger">{{$errors->first('image')}}</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9">
                                            <div align="center">
                                                <button type="submit" class="btn btn-success"><i
                                                            class="fa fa-check"></i>&nbsp;&nbsp;
                                                    Save Changes
                                                </button>&nbsp;
                                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                                    Cancel &nbsp;&nbsp;
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