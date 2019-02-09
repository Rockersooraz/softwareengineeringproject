@extends('layouts.backend')
@section('title', 'admin')
@section('activeAdmin', 'active')
@section('content')
    <script>
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);
    </script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                 Dashboard
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('backend.admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item active">Admin</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="box">
                        <div class="box-header">
                        <h3 class="box-title">Categories</strong>&nbsp &nbsp</h3>

                            <a href="{{route('backend.category.create')}}" class="btn btn-default label-success pull-right">+ Add New</a>
                        </div>
                        <div class="box-body">
                            <div class="panel-body">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>

                                    </div>
                                @endif
                                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Available Categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1"
             class="table example   table-responsive editable_table table-striped table-hover">
              
                <thead>
                <tr>
                  <th>id</th>
                  <th>slug</th>
                  <th>title</th>
                  <th>posts</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $count => $key)
                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{$key->slug}}</td>
                                            <td>{{$key->title}}</td>
                                            <td>{{$key->post->count()}}</td>
                                     

                                            <td>
                                                <table>
                                                    <tr>
                                                   
                                                        <th>
                                                            <a href="{{route('backend.category.edit',$key->id)}}">
                                                                <button type="submit" class="btn btn-success btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button>
                                                            </a>
                                                        </th>
                                                        <th>
                                                         <form id="delete-form-{{$key->id}}" method="post" action="{{route('backend.category.destroy',$key->id)}}" style="display: none;">
                                  {{csrf_field()}}
                                   {{method_field('Delete')}}
                                     </form>

                    <a onclick="
                    if(confirm('You are about to delete'))
                      {
                        event.preventDefault(); document.getElementById('delete-form-{{$key->id}}').submit();
                      }
                      else
                        {
                          event.preventDefault();
                        }">
                        <span class="glyphicon glyphicon-trash"></span></a></th>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                     
            
              </table>
            </div>
            <!-- /.box-body -->
          </div>
                            </div>
                        </div>
                 
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>


@endsection