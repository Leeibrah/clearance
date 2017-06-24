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

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h4>Repayment Scheduled Loans</h4>
							<div class="subtitle">All the Loans Information.</div>
						</div>
					</div>
				</div>
			</header>

			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>

							<th>Date</th>
							<th>Name</th>
							<th>Email</th>
							<th>Principle</th>
							<th>Interest</th>
							
							<th>ID Number</th>
							<th>1st</th>
							<th>2nd</th>
							<th>3rd</th>
							<th>Paid</th>
							<th>Balance</th>
							<th>Phone</th>
							<th>Due Date</th>
							<th>Progress</th>
							<th>Status</th>
						</tr>
						</thead>
						
						<tbody>

                            @foreach($loans as $loan)
								<tr>
									<td>{!! $loan->created_at !!}</td>
									<td>
									{!! DB::table('users')->where('phone', $loan->phone)->value('first_name') !!}
									{!! DB::table('users')->where('phone', $loan->phone)->value('last_name') !!}
									</td>
									<td>{!! DB::table('users')->where('phone', $loan->phone)->value('email') !!}</td>
									<td>{!! DB::table('loans_due')->where('phone', $loan->phone)->where('created_at', $loan->created_at)->value('loan_amount') !!}</td>
									<td>{!! DB::table('loans_due')->where('phone', $loan->phone)->where('created_at', $loan->created_at)->value('interest') !!}</td>
									
									<td>{!! DB::table('users')->where('phone', $loan->phone)->value('id_number') !!}</td>
									<td>{!! DB::table('repayment_schedule')->where('loan_id', $loan->loan_id)->value('installment_amount') !!}</td>
									<td>{!! DB::table('repayment_schedule')->where('loan_id', $loan->loan_id)->skip(1)->value('installment_amount') !!}</td>
									<td>{!! DB::table('repayment_schedule')->where('loan_id', $loan->loan_id)->skip(2)->value('installment_amount') !!}</td>
									<td>
										{!! DB::table('repayment_schedule')->where('loan_id', $loan->loan_id)->sum('paid_amount') !!}
									</td>
									<td>
									{!! (DB::table('loans_due')->where('phone', $loan->phone)->where('created_at', $loan->created_at)->value('loan_amount') + DB::table('loans_due')->where('phone', $loan->phone)->where('created_at', $loan->created_at)->value('interest'))-DB::table('repayment_schedule')->where('loan_id', $loan->loan_id)->sum('paid_amount') !!}
									</td>
									<td>{!! $loan->phone !!}</td>
									<td>{!! $loan->due_date !!}</td>
									<td>
										@if ($loan->due_date <= $todayDate)
											<p class="text-danger">Overdue</p>
										@else
											<p class="text-success">Progress</p>
										@endif
									</td>
									<td>
										@if(DB::table('repayment_schedule')->where('loan_id', $loan->loan_id)->orderBy('id', 'desc')->value('active') == 3)
 											<button type="button" class="btn btn-success">Paid</button>
										@elseif(DB::table('repayment_schedule')->where('loan_id', $loan->loan_id)->orderBy('id', 'desc')->value('active') == 4)
											<button type="button" class="btn btn-danger">Unsent</button>
 										@else
 											<button type="button" class="btn btn-warning">Active</button>
 										@endif
 									</td>
								</tr>
							@endforeach
              
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
	            pageLength: 50,
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

	    var date, dates = []
		table.rows().every(function(rowIdx, tableLoop, rowLoop) {
			date = this.data().date;
		  if (~dates.indexOf(date)) {
		    this.nodes().to$().attr('excluded', 'true')
		  } else {
		    dates.push(date) 
		  }
		})

		$.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
		   return table.row(dataIndex).nodes().to$().attr('excluded') != 'true'
		})

		table.draw()
	</script>
@stop