@extends('layouts.dash')


@section('content')
	
	<div class="page-content">

		@if(Session::has('message'))
			<div class="alert alert-success fade in" style="color:#000;">
		        <a href="#" class="close" data-dismiss="alert">&times;</a>
		        <strong>Success!</strong> {{ Session::get('message') }}
		    </div>
	    @endif
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3 col-md-12">
					
					<section class="box-typical">
						<header class="box-typical-header-sm">Background</header>
						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-notebook-bird"></i>
								Normal Loan Limit
							</header>
							<div class="text-block text-block-typical">
								<p>
									<b>
										KES: {!! $normal_loan_limit !!} 
									</b>
								</p>
							</div>

							<br>
							<div class="text-block text-block-typical">
								<article class="friends-list-item col-lg-4">
									<a href="{!! route('normal.increase', $employee->id_number) !!}" style="color:green;">
										<i class="fa fa-arrow-up " aria-hidden="true"></i>
										&nbsp; Increase
									</a>
								</article>

								@if(!$normal_loan_limit == 0)
								<article class="friends-list-item pull-right">
									<a href="{!! route('normal.decrease', $employee->id_number) !!}" style="color:red;">
										<i class="fa fa-arrow-down" aria-hidden="true"></i>
										&nbsp; Decrease
									</a>
								</article>
								@endif
							</div>
						</article>
						<!--.profile-info-item-->

					
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">Background</header>

						<!--.profile-info-item-->
						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-notebook-bird"></i>
								Salary Advanced Loan Limit
							</header>
							<div class="text-block text-block-typical">
								<p>
									<b>
										KES: {!! $salary_advance_limit !!}  
									</b>
								</p>
								
								<br>
								<div class="text-block text-block-typical">
									<article class="friends-list-item col-lg-4">
										<a href="{!! route('salary.increase', $employee->id_number) !!}" style="color:green;">
											<i class="fa fa-arrow-up " aria-hidden="true"></i>
											&nbsp; Increase
										</a>
									</article>

									@if(!$salary_advance_limit == 0)
									<article class="friends-list-item pull-right">
										<a href="{!! route('salary.decrease', $employee->id_number) !!}" style="color:red;">
											<i class="fa fa-arrow-down" aria-hidden="true"></i>
											&nbsp; Decrease
										</a>
									</article>
									@endif
								</div>

							</div>
						</article>
						<!--.profile-info-item-->
					
					</section><!--.box-typical-->

				</div><!--.col- -->



				<div class="col-lg-3 col-lg-pull-6 col-md-6 col-sm-6">
					<section class="box-typical">
						<div class="profile-card">
							<div class="profile-card-photo">
								@if($upload == null)
								<img src="{{ main_url() }}/uploads/profiles/no-image.png" alt="No-Image">
								@else
								<img src="{{ main_url() }}/uploads/profiles/{!! $upload->profile !!}" alt="{!! $upload->profile !!}">\
								@endif
							</div>
							<div class="profile-card-name">
								{!! DB::table('users')->where('id', $employee->user_id)->value('first_name') !!}
								{!! DB::table('users')->where('id', $employee->user_id)->value('last_name') !!}
							</div>
							
						</div><!--.profile-card-->


						
					</section>

					<section class="box-typical">
						<header class="box-typical-header-sm">View Loan Details</header>
						<div class="friends-list stripped">
							<article class="friends-list-item">
								<a href="{!! route('admin.employees.loan-schedule', $employee->id) !!}" style="color:green;">
									<i class="fa fa-external-link" aria-hidden="true"></i>
									&nbsp; Loan Schedule 
								</a>
							</article>									
						</div>				
					</section>


				</div><!--.col- -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<section class="box-typical ">
						<header class="box-typical-header-sm">Go Back to User Profile</header>
						<div class="friends-list stripped">
							<article class="friends-list-item">
								<a href="{!! route('admin.employees.show', $employee->id) !!}" style="color:green;">
									<i class="fa fa-arrow-left" aria-hidden="true"></i>
									&nbsp; Back to {!! $user->first_name !!}'s Profile
								</a>
							</article>									
						</div>				
					</section>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">

					<section class="box-typical">
						<header class="box-typical-header-sm">User Information Verification</header>
						<div class="friends-list stripped">
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell">
											<p class="user-card-row-name">
												<div>
													<b>
														Data and CRB verification
													</b>
												</div>
											</p>
											<br>

											@if($employee->verified == 1)
											<div class="tbl">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-time _green">
														<i class="fa fa-check" aria-hidden="true"></i>
														User Data is Verified
													</div>
												</div>
											</div>
											@else
											<div class="tbl">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-time _red">
														<i class="fa fa-times" aria-hidden="true"></i>
														User Data Not Verified
													</div>
												</div>
											</div>
											@endif									
										</div>

										<div>
											
										</div>
										
									</div>
								</div>
							</article>									
						</div>				
					</section>

					<br>
					<section class="box-typical">
						<header class="box-typical-header-sm">Blacklist this User</header>
						<div class="friends-list stripped">
							<article class="friends-list-item">
								<!-- <div class="user-card-row">
									<div class="tbl-row"> -->
					
										<div>
											@if(DB::table('blacklists')->where('user_id', '=', $employee->user_id)->exists())
												<p class="user-card-row-status">
													<a href="{!! route('admin.employees.whitelist', $employee->id) !!}" style="color:green;">
													<i class="fa fa-plus-square" aria-hidden="true"></i>
														&nbsp; Whitelist
													</a>
												</p>
											@else


												<p class="user-card-row-status">
													<a href="{!! route('admin.employees.blacklist', $employee->id) !!}" style="color:red;">
													<i class="fa fa-chain-broken" aria-hidden="true"></i>
														&nbsp; Blacklist
													</a>
												</p>
											@endif
										</div>
										
									<!-- </div>
								</div> -->
							</article>									
						</div>				
					</section>
				</div>
				<!--.col- -->
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div>

	<script src="/backend/js/lib/jquery/jquery.min.js"></script>
	<script src="/backend/js/lib/tether/tether.min.js"></script>
	

	<script type="text/javascript" src="/backend/js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/backend/js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="/backend/js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(document).ready(function() {
			$('.panel').lobiPanel({
				sortable: true
			});

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						},
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});

			$('.panel').on('dragged.lobiPanel', function(ev, lobiPanel){
				$('.dahsboard-column').matchHeight();
			});
		});
	</script>
	<script src="/backend/js/app.js"></script>


@stop