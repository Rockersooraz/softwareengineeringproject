@extends('layouts.backend')

@section('title', 'Dashboard')
@section('activeDashboard', 'active')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active">Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	  <div class="callout bg-pale-info">
        <h4>Nots!</h4>
        <p>All the data is loaded from a seperate JS file</p>
      </div>
      <div class="row">
        <div class="col-12">
         
          <div class="box">
            <div class="box-body">
            	<div class="table-responsive">
				  <table id="project-table" class="table table-bordered display nowrap margin-top-10">
					<thead>
						<tr class="bg-primary">
							<th></th>
							<th class="text-white">Projects</th>
							<th class="text-white"><i class="fa fa-fw fa-user hidden-md hidden-sm hidden-xs"></i> EST</th>
							<th class="text-white">Contacts</th>
							<th class="text-white">Status</th>
							<th class="text-white"><i class="fa fa-fw fa-calendar hidden-md hidden-sm hidden-xs"></i> Starts</th>
							<th class="text-white"><i class="fa fa-fw fa-calendar hidden-md hidden-sm hidden-xs"></i> Ends</th>
							<th class="text-white">Tracker</th>
						</tr>
					</thead>
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
  <!-- /.content-wrapper -->
  
  
@endsection