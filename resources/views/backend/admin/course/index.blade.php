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
							<h2>Courses</h2>
							<div class="subtitle">All the courses Information.</div>
						</div>
						<div class="tbl-cell tbl-cell-action button">
							<a href="{!! route('admin.course.create') !!}">
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
							<th>Edit Course</th>
						</tr>
						</thead>
						
						<tbody>

						@if($courses->count())
                            @foreach($courses as $course)
								<tr>
									<td>
										{!! $course->name !!}
									</td>
																
									<td>
										@if($course->active == 1)
											Active
										@else
											Inactive
										@endif
									</td>
									<td>
										@if($course->active == 1)
											<a href="{!! route('admin.course.deactivate', $course->id) !!}"><i class="fa fa-pencil-square-o" aria-hidden="true"> Deactivate Course</i></a>
										@else
											<a href="{!! route('admin.course.activate', $course->id) !!}"><i class="fa fa-pencil-square-o" aria-hidden="true"> Activate Course</i></a>
										@endif
										
									</td>
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