@extends('layouts.backend')
@section('title', 'Create Category')
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
                            <h3 class="box-title">Create <strong style="color: #5fa7da">Category</strong>&nbsp &nbsp</h3>
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

                        <form action="{{ route('backend.category.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
             
              <div class="box-body">


             <div class="col-lg-offset-3 col-lg-6">
                
    
                <div class="form-group">
                  <label for="Category-Title"> Category-Title</label>
                  <input type="Text" class="form-control"  name="title" placeholder="Enter Category-Title">
                </div>
  

  
                <div class="form-group">
                  <label for="Category-Slug"> Category-Slug</label>
                  <input type="Text" class="form-control"  name="slug" placeholder="Enter Category-slug">
                </div>

           

              <!-- /.box-body -->

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href="{{route('backend.category.index')}}"><i class="fa fa-arrow-left"></i>Back</a>
              </div>
            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection