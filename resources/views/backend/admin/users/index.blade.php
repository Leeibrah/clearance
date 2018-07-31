@extends('layouts.dash')

@section('css')
    <link rel="stylesheet" href="/backend/css/lib/datatables-net/datatables.min.css">
@stop

@section('content')

	<!--start page-content-->
	<div class="page-content">
		<!--start container-fluid-->
		<div class="container-fluid">

			@if(Session::has('message'))
			    <div class="alert alert-success _black">
			        <strong>Success!</strong><h3>{{ Session::get('message') }}</h3>
			    </div>
			@endif

			@include('includes.errors')

			<div class="tbl-cell tbl-cell-action button pull-right">
				<a href="{!! route('admin.users.create') !!}">
					<button type="button" class="btn btn-rounded btn-block">Create</button>
				</a>
			</div>
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h4>Students</h4>
							<div class="subtitle">All the Students Information.</div>
						</div>
					</div>
				</div>
			</header>
			

			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Student Number</th>
							<th>Email</th>
							<th>Phone</th>
							<th>valid From</th>
							<th>valid To</th>
							<th>Joined</th>
							<th>Edit</th>
							<th>Dlt</th>
						</tr>
						</thead>
						
						<tbody>

						@if($users->count())
                            @foreach($users as $user)
								<tr>
									<td>{!! $user->first_name !!}</td>
									<td>{!! $user->last_name !!}</td>
									<td>{!! $user->registration_number !!}</td>									
									<td>{!! $user->email !!}</td>
									<td>{!! $user->phone !!}</td>
									<td>{!! $user->valid_from !!}</td>
									<td>{!! $user->valid_to !!}</td>
									<td>{!! $user->created_at !!}</td>
									<td><a href="{!! route('admin.users.edit', $user->id) !!}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
									<td><a href="{!! route('admin.users.delete', $user->id) !!}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								</tr>
							@endforeach
                        @endif
              
						</tbody>
					</table>
				</div>
			</section>
		</div>
		<!--.container-fluid-->
	</div>
	<!--.page-content-->

@stop

@section('js')

	<script src="/backend/js/lib/jquery/jquery.min.js"></script>
	<script src="/backend/js/lib/tether/tether.min.js"></script>
	

	<script type="text/javascript" src="/backend/js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/backend/js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="/backend/js/lib/match-height/jquery.matchHeight.min.js"></script>

	<script src="/backend/js/app.js"></script>

	<script type="text/javascript" src="/backend/js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/backend/js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="/backend/js/lib/match-height/jquery.matchHeight.min.js"></script>

	<script src="/backend/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="/backend/js/plugins.js"></script>
	<script src="/backend/js/lib/datatables-net/datatables.min.js"></script>
	
	<script type="text/javascript">
	    $(document).ready(function() {
	        $('#example').DataTable( {
	            dom: 'Bfrtip',
	            buttons: [
	                {
	                    extend: 'pdfHtml5',
	                    message: 'Date here'
	                },
	                {
	                    extend: 'csvHtml5',
	                    message: 'Date here'
	                },
	                {
	                    extend: 'excelHtml5',
	                    message: 'Date here'
	                }
	            ]

	        } );
	    } );
	</script>
@stop