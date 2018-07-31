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
							<h4>Disbursed Loans</h4>
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
								<th>Time Disbursed</th>
								<th>Loan Amount</th>
								<th>Interest</th>
								<th>Phone</th>
								<th>Name</th>
								<th>Due Date</th>
							</tr>
						</thead>
						
						<tbody>

							@if($loans->count())
	                            @foreach($loans as $loan)
									<tr>
										<td>{!! $loan->created_at !!}</td>
										<td>{!! $loan->loan_amount !!}</td>
										<td>{!! $loan->interest !!}</td>
										<td>{!! $loan->phone !!}</td>
										<td>
											{!! DB::table('users')->where('phone', $loan->phone)->value('first_name') !!}
											{!! DB::table('users')->where('phone', $loan->phone)->value('last_name') !!}
										</td>
										
										<td>
											{!! date("Y-m-d",strtotime("+30days",strtotime($loan->created_at))) !!}
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
	</script>
@stop

