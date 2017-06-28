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
							<h2>Attendances</h2>
							<div class="subtitle">All the Attendances Information.</div>
						</div>
		
					</div>
				</div>
			</header>

			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Date/Time</th>
							<th>Student Number</th>				
							<th>Course</th>
							<th>Unit</th>
							<th>Class</th>
							<th>Lecturer</th>
						</tr>
						</thead>
						
						<tbody>

						@if($attendances->count())
                            @foreach($attendances as $attendance)
								<tr>
									<td>
										{!! $attendance->created_at !!}
									</td>
									<td>
										<a href="{!! route('admin.attendance.show', $attendance->student_id) !!}">
											{!! $attendance->student_number !!}
										</a>
									</td>
									<td>
										{!! $attendance->course !!}
									</td>						
									<td>
										{!! $attendance->unit !!}
									</td>
									<td>
										{!! $attendance->class !!}
									</td>
									<td>
										{!! $attendance->lecturer !!}
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