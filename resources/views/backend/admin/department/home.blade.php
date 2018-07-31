@extends('layouts.dash')

@section('content')

	<!-- content-here -->
	<div class="content-container" id="content" style="margin-left: 20%; margin-top: 2%;">
		<div class="page page-ui-tables">
			<ol class="breadcrumb breadcrumb-small">
				<li>Home</li>
				<li class="active"><a href="#/tables/tables">Course</a></li>
			</ol>

			<div class="page-wrap">
				<!-- row -->
				<div class="row">
					<!-- Basic Table -->
					<!-- Data Table -->
						<div class="col-md-12">
							<div class="panel panel-lined table-responsive panel-hovered mb20 data-table" style="padding-bottom: 20px">
								<div class="panel-heading">Courses</div>
								<div class="panel-body">
									<div class="small text-bold left mt5">
										Show&nbsp;
										<select class="lengthSelect">
											<option value="5">5</option>
											<option value="10" selected>10</option>
											<option value="20">20</option>
											<option value="50">50</option>
										</select> 
										&nbsp;entries
									</div>

									<div class="pull-right">
										<a href="{!! route('admin.course.create') !!}">Add a New Course</a>
									</div>
								</div>
							<!-- data table -->
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>
											Name
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
								
										<th>
											Show
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											Edit
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
									</tr>
								</thead>
								<tbody>

									@if($course->count())
			                            @foreach($course as $course)
											<tr>
												<td>{!! $course->name !!}</td>
												<td><a href="{!! route('admin.course.show', $course->id) !!}">Show</a></td>
												<td><a href="{!! route('admin.course.edit', $course->id) !!}">Edit</a></td>
											</tr>
										@endforeach
			                        @endif
								</tbody>
							</table>
							<!-- #end data table -->	
							
						</div>					<!-- Data Table -->
				</div>
				<!-- #end row -->
			</div> <!-- #end page-wrap -->
		</div>
	</div>
@stop

@section('js')

	<!-- Dev only -->
	<!-- build:remove -->
	<script src="/scripts/dev/less.min.js"></script>	
	<!-- /build -->

	<!-- Vendors -->
	<!-- build:js scripts/vendors.js -->
	<script src="/scripts/vendors/jquery.min.js"></script> 
	<script src="/scripts/vendors/bootstrap.min.js"></script>
	<!-- /build -->


	<script src="/scripts/plugins/screenfull.js"></script>
	<script src="/scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="/scripts/plugins/waves.min.js"></script>
	<script src="/scripts/plugins/jquery.dataTables.min.js"></script>
	<script src="/scripts/app.js"></script>
	<script src="/scripts/tables.init.js"></script>
@stop
