@extends('layouts.backend')

@section('title', 'Dashboard')
@section('activeDashboard', 'active')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="glyphicon glyphicon-list-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">{{$Posts->count()}}</span>
              <span class="info-box-text">Posts</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="glyphicon glyphicon-th"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">{{$Categories->count()}}</span>
              <span class="info-box-text">Categories</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="glyphicon glyphicon-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">{{$Mails->count()}}</span>
              <span class="info-box-text">Mails</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">{{$Merchants->count()}}</span>
              <span class="info-box-text">Join Members</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
