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
                            <h3 class="box-title">posts <strong></strong>&nbsp &nbsp</h3>
                       
                            {{--<a href="{{route('viewAdmin')}}" class="btn btn-info label-success pull-right" > <i class="glyphicon glyphicon-eye-open"></i> views all</a>--}}
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
                                <table id="example1"
                                       class="table example   table-responsive editable_table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Title</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        {{--<th>Image</th>--}}
                                        <th class="no-order no-export">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $count => $key)
                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{$key->title}}</td>
                                            <td>{{$key->Merchant->phone}}</td>
                                            <td>{{$key->Merchant->address}}</td>
                                            <td>{{$key->Merchant->name}}</td>
                                            <td>{{$key->Merchant->email}}</td>

                                            <td>
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <a href="{{route('searchdetail',$key->id)}}">
                                                                <button type="submit" class="btn btn-info btn-xs">
                                                                    <i class="fa fa-eye"></i>
                                                                </button>
                                                            </a>
                                                        </th>
                                                        <th>
                                                            <a href="javascript:void(0)" onclick="$(this).parent().find('#del').submit();" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                            <form id="del" method="post" action="{{route('backend.post.destroy',$key->id)}}">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                @method('DELETE')
                                                            </form>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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