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
        <div class="col-12">
		  <div class="box bg-white">
			  <div class="box-body">
			  	<div class="row">
					<div class="col-md-12">				
					  <div class="box p-20">
						<div class="box-header with-border">
						  <h4 class="box-title">Inbox</h4>
						  <div class="box-controls pull-right">
							<div class="lookup lookup-circle lookup-right">
							  <input type="text" name="s">
							</div>
						  </div>
						  <!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						  <div class="mailbox-messages">
							<div class="box-body">
								<table class="table table-hover">
                <thead>
                   <tr>
                      <th>S.No.</th>
                      <th>Name</th> 
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Added Time</th>
                      <th class="no-order no-export">Action</th>
                   </tr>
                  </thead>
								  <tbody>
                  @foreach($mails as $count => $mail)
								  <tr>
									<!-- <td><input type="checkbox"></td> -->
									<td>{{++$count}}</td></td>
									<!-- <td class="w-80"><img src="../../../images/avatar/8.jpg" alt="" class="avatar avatar-sm"></td> -->
									<td class="mailbox-name">{{$mail->name}}</td>
									<td class="mailbox-email">{{$mail->email}}</td>
									<td class="mailbox-subject"><a href="{{route('backend.mails.show',$mail->id)}}"><b>{{$mail->subject}}</b></a>
                  <td class="mailbox-date">{{$mail->created_at->diffForHumans()}}</td>
									<td>
                    <a href="{{route('backend.mails.show',$mail->id)}}">
                      <button type="submit" class="btn btn-success btn-xs">
                        <i class="fa fa-eye"></i>
                      </button>
                    </a>
                     <form id="delete-form-{{$mail->id}}" method="post" action="{{route('backend.mails.destroy',$mail->id)}}" style="display: none;">
                        {{csrf_field()}}
                        {{method_field('Delete')}}
                      </form>
                    <a onclick="
                    if(confirm('You are about to delete'))
                      {
                        event.preventDefault(); document.getElementById('delete-form-{{$mail->id}}').submit();
                      }
                      else
                        {
                          event.preventDefault();
                        }">
                        <button type="submit" class="btn btn-success btn-xs">
                          <i class="fa fa-trash"></i>
                        </button></a>
                        </td>
								  </tr>
                  @endforeach
								  </tbody>
								</table>
							<!-- /.table -->
							</div>
						  </div>
						  <!-- /.mail-box-messages -->
						</div>
						<!-- /.box-body -->
					  </div>
					  <!-- /. box -->
					</div> 					  
				</div>
			  </div>			
		  </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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