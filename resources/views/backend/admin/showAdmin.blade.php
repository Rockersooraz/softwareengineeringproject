@extends('layouts.backend')

@section('title', 'Admin')
@section('activeAdmin', 'active')

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                View Admins
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Admin</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Hover Export Data Table</h3>
                            <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                    <tr>
                                        {{--<th>S.N.</th>--}}
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--@foreach($admin as $count =>$key)--}}

                                        <tr>
                                            {{--<td>{{++$count}}</td>--}}
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>{{$admin->phone}}</td>

                                        </tr>
                                    {{--@endforeach--}}


                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection