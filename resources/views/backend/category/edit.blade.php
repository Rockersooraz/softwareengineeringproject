@extends('layouts.backend')

@section('title', 'Edit Category')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Caregory
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="box">
                        

                        <div class="box-body">

                            <form action="{{route('backend.category.update',$category->id)}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}

                                @method('PUT')
                                <div class="box-body">


<div class="col-lg-offset-3 col-lg-6">
   

   <div class="form-group">
     <label for="Category-Title"> Category-Title</label>
     <input type="Text" class="form-control"  name="title" placeholder="Enter Category-Title" value ="{{$category->title}}">
   </div>



   <div class="form-group">
     <label for="Category-Slug"> Category-Slug</label>
     <input type="Text" class="form-control"  name="slug" placeholder="Enter Category-slug" value ="{{$category->slug}}">
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