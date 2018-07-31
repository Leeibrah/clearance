@extends('layouts.dash')

@section('css')
    <link rel="stylesheet" href="/backend/css/lib/datatables-net/datatables.min.css">
@stop

@section('content')

	<!--start page-content-->
	<div class="page-content">
		<!--start container-fluid-->
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Departments</h2>
							<div class="subtitle">All the departments Information.</div>
						</div>
						<div class="tbl-cell tbl-cell-action button">
							<a href="{!! route('admin.department.create') !!}">
								<button type="button" class="btn btn-rounded btn-block">Create</button>
							</a>
						</div>
					</div>
				</div>
			</header>

			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Name</th>
							<th>Status</th>
							<!-- <th>Edit department</th> -->
						</tr>
						</thead>
						
						<tbody>

						@if($departments->count())
                            @foreach($departments as $department)
								<tr>
									<td>
										{!! $department->name !!}
									</td>
																
									<td>
										@if($department->active == 1)
											Active
										@else
											Inactive
										@endif
									</td>
									<!-- <td>
										@if($department->active == 1)
											<a href="{!! route('admin.department.deactivate', $department->id) !!}"><i class="fa fa-pencil-square-o" aria-hidden="true"> Deactivate department</i></a>
										@else
											<a href="{!! route('admin.department.activate', $department->id) !!}"><i class="fa fa-pencil-square-o" aria-hidden="true"> Activate department</i></a>
										@endif
										
									</td> -->
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
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	
	<script type="text/javascript">
	    $(document).ready(function() {
	        $('#example').DataTable( {
	        	"columnDefs": [
	                { "type": "numeric-comma", targets: 3 }
	            ]
	            dom: 'Bfrtip',
	            pageLength: 50
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