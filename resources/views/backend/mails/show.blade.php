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
        <section class="content">		
	  <div class="row">
        <div class="col-12">
		  <div class="box bg-white">
			  <div class="box-body">
			  	<div class="row">
					<div class="col-md-12">				
					  <div class="box text-dark p-20">
						<div class="box-header with-border">
						  <h4 class="box-title">Read Mail</h4>

						  <div class="box-controls pull-right">
							<div class="lookup lookup-circle lookup-right">
							  <input type="text" name="s">
							</div>
						  </div>
						  <!-- /.box-tools -->
						</div>
						<!-- /.box-header -->	
						<div class="box-body no-padding">
						  <div class="mailbox-read-info">
							<h5>{{$mail->title}}</h5>
						  </div>
						  <div class="mailbox-read-info clearfix">
							<div class="left-float margin-r-5"><a href="#"><img src="../../../images/1.jpg" alt="user" width="40" class="rounded-circle"></a></div>
							<h5 class="no-margin">{{$mail->name}}<br>
								 <small>From: {{$mail->email}}</small>
							  <span class="mailbox-read-time pull-right">{{$mail->created_at->format('d M Y')}}</span></h5>
						  </div>
						  <!-- /.mailbox-read-info -->
						  <div class="mailbox-controls with-border clearfix">                
							
							</div>
							<!-- /.btn-group -->

						  </div>
						  <!-- /.mailbox-controls -->
						  <div class="mailbox-read-message">
							<p>{{$mail->description}}</p>
						  </div>
						  <!-- /.mailbox-read-message -->
						</div>
					  </div>
					  <!-- /. box -->
					</div>				  
				</div>
			  </div>			
		  </div>
        </div>
        <!-- /.col -->
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