@extends('layouts.dash')

@section('content')
	

	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-9 col-lg-12 col-xl-8 col-md-8">
					<section class="box-typical proj-page">
						<section class="proj-page-section proj-page-header">
							<div class="title">
								Department Details
								<i class="font-icon font-icon-pencil"></i>
							</div>
							<div>{!! $department->name !!}</div>
							<!-- <div class="project">Project: <a href="#">Lorem Ipsum</a></div> -->
						</section><!--.proj-page-section-->

						<section class="proj-page-section">

							<div class="tbl">

								<div class="tbl-row">
									<div class="tbl-cell">
										<b>
											Department Email Address:
										</b>
									</div>									
								</div>
								<div class="">
									{!! $department->physical_address !!}
								</div>
								<br>

							</div>

							
						</section><!--.proj-page-section-->

						<section class="proj-page-section">
						
							<div class="proj-page-txt">
								<header class="proj-page-subtitle">
									<h3>department Status</h3>
								</header>
								<p>
									@if($department->status == 1)
										Active
									@else
										Inactive
									@endif
								</p>
							</div>
						</section>

					</section><!--.proj-page-->

					<section>
						<a href="{!! route('admin.companies.edit', $department->id) !!}">
							<button type="button" class="btn btn-grey">
								Edit department Account
							</button>
						</a>
					</section>
					
				</div>

				<div class="col-xxl-3 col-lg-12 col-xl-4 col-md-4">
					<section class="box-typical proj-page">
						<section class="proj-page-section proj-page-time-info">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<b>
											Business Type:
										</b>
									</div>									
								</div>
								<div class="">
									{!! $department->business_type !!}
								</div>
								<br>

								<div class="tbl-row">
									<div class="tbl-cell">
										<b>
											No.of Employees
										</b>
									</div>									
								</div>
								<div class="">
									{!! $department->employees_no !!}
								</div>
								<br>

								<div class="tbl-row">
									<div class="tbl-cell">
										<b>
											Years Operated
										</b>
									</div>									
								</div>
								<div class="">
									{!! $department->years_operated !!}
								</div>
							</div>
							<div class="progress-compact-style">
								<progress class="progress progress-success" value="100" max="100">100%</progress>
							</div>
						</section><!--.proj-page-section-->

					</section><!--.proj-page-->
				</div>
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

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