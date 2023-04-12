<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/drilldown.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>

</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Reports</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/fluidIntake.png" alt="Sleep Diary">Fluid
				Intake</span>
		</div>
		<ul class="search col4 list-unstyled clearfix">
			<li>
				<div class="fieldContainer select">
					<select>
						<option>All Homes / Floors</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>All Service Users</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>All Staff</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer date">
					<input type="text" name="dateRange" placeholder="Date">
					<img src="images/calendar-icon.svg" class="calendar svg">
				</div>
			</li>
		</ul>
		<div class="clearfix">
			<button type="button" class="searchButton">Search</button>
			<div class="pull-right clearfix">
				<div class="btn-group noAlergy">
					<button type="button" class="btn orange"><img src="images/printing-tool.svg"
							class="svg">Print</button>
				</div>
			</div>
		</div>
	</section>

	<section class="contentBody noFooter">
		<div class="scrollArea">
			<div class="content">
				<div class="row">
					<div class="col-md-12 inBodyForm">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="">No. of Service Users</label>
									<div class="select">
										<select>
											<option>1 - 10</option>
											<option>11 - 20</option>
										</select>
										<img src="images/left-arrow.svg" class="svg">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group date">
									<label for="">Date</label>
									<input type="text" name="dateRange" id="" placeholder="Date">
									<img src="images/calendar-icon.svg" class="calendar svg">
								</div>
							</div>
						</div>
						<div id="container-fluidconsumption" style="width:100%; height:100%;"></div>
					</div>
					<div class="col-md-6">
						<div id="column" class="column" style="width:100%; height:100%;"></div>
					</div>
					<div class="col-md-6">
						<div id="pie" class="pie" style="width:100%; height:100%;"></div>
					</div>
					<div class="col-md-6">
						<div id="line" class="line" style="width:100%; height:100%;"></div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<!-- optional -->
	<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>

	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/drilldown.js"></script>

	<script>
		Highcharts.chart('column', {
			chart: {
				type: 'column',
				events: {
					drilldown: function (e) {
						this.options.legend["enabled"] = true;
					},
					drillup: function (e) {
						this.options.legend["enabled"] = true;
					},
				}
			},
			title: {
				text: 'Administration Analysis',
				fontSize: '20'
			},
			tooltip: {
				enabled: false
			},

			yAxis: {
				title: {
					text: ''
				},
				labels: {
					enabled: false
				}
			},

			xAxis: {
				type: 'category',
			},

			legend: {
				enabled: false
			},

			series: [{
				name: 'Value',
				borderWidth: 20,
				dataLabels: {
					enabled: true,
					format: '{point.y:.f}',
					distance: 5
				},

				data: [{
						name: 'Total Administration',
						drilldown: 'tnc',
						color: '#1B4F72',
						y: 50,
					},
					{
						name: 'Given Late',
						y: 9,
						drilldown: 'tnc1',
						color: '#21618C'
					},
					{
						name: 'Missed',
						y: 10,
						drilldown: 'tnc2',
						color: '#2874A6'
					},
					{
						name: 'No Stock',
						y: 12,
						drilldown: 'tnc2',
						color: '#3498DB'
					},
					{
						name: 'Not Given',
						y: 10,
						drilldown: 'tnc3',
						color: '#85C1E9'
					},
					{
						name: 'PRNs Administrated',
						y: 5,
						drilldown: 'tnc4',
						color: '#AED6F1'
					},
					{
						name: 'MAR Adjustments',
						y: 4,
						drilldown: 'tnc5',
						color: '#D6EAF8'
					},
				]
			}],
			drilldown: {
				series: [{
						id: 'tnc1',
						name: 'Service Users',
						data: [{
								name: 'Service User_1',
								y: 1,
								drilldown: 'NOK',
							},
							{
								name: 'Service User_2',
								y: 1,
								drilldown: 'NOK',
							},
							{
								name: 'Service User_3',
								y: 1,
								drilldown: 'NOK',
							},
							{
								name: 'Service User_4',
								y: 1,
								drilldown: 'NOK',
							},
							{
								name: 'Service User_5',
								y: 1,
								drilldown: 'NOK',
							},
						]
					}, {
						id: 'tnc2',
						name: 'Service Users',
						data: [{
								name: 'Service User_1',
								y: 1,
								drilldown: 'NOK1',
							},
							{
								name: 'Service User_2',
								y: 1,
								drilldown: 'NOK1',
							},
							{
								name: 'Service User_3',
								y: 1,
								drilldown: 'NOK1',
							},
							{
								name: 'Service User_4',
								y: 1,
								drilldown: 'NOK1',
							},
							{
								name: 'Service User_5',
								y: 1,
								drilldown: 'NOK1',
							},
						]
					}, {
						id: '',
						data: [{
								name: 'Omer',
								y: 14,
								drilldown: 'NOK',
							},
							{
								name: 'Usman',
								y: 10,
								drilldown: 'NOK',
							},
							{
								name: 'Ali',
								y: 14,
								drilldown: 'NOK',
							},
							{
								name: 'Daniyal',
								y: 14,
								drilldown: 'NOK',
							},
							{
								name: 'Sana',
								y: 18,
								drilldown: 'NOK',
							},
						]
					}, {
						id: '',
						data: [{
								name: 'Omer',
								y: 2.85,
								drilldown: 'NOK',
							},
							{
								name: 'Usman',
								y: 5,
								drilldown: 'NOK',
							},
							{
								name: 'Ali',
								y: 2.85,
								drilldown: 'NOK',
							},
							{
								name: ' Daniyal',
								y: 2.85,
								drilldown: 'NOK',
							},
							{
								name: 'Sana',
								y: 0.45,
								drilldown: 'NOK',
							},
						]

					}, {
						id: '',
						data: [{
								name: 'Omer',
								y: 11,
								drilldown: 'NOK',
							},
							{
								name: 'Usman',
								y: 11.5,
								drilldown: 'NOK',
							},
							{
								name: 'Ali',
								y: 10.09,
								drilldown: 'NOK',
							},
							{
								name: 'Daniyal',
								y: 14.09,
								drilldown: 'NOK',
							},
							{
								name: 'Sana',
								y: 10.46,
								drilldown: 'NOK',
							},
						]
					},
					{
						id: '',
						data: [{
								name: 'Omer',
								y: 14.8,
								drilldown: 'NOK',
							},
							{
								name: 'Usman',
								y: 10,
								drilldown: 'NOK',
							},
							{
								name: 'Ali',
								y: 14.8,
								drilldown: 'NOK',
							},
							{
								name: 'Daniyal',
								y: 12.8,
								drilldown: 'NOK',
							},
							{
								name: 'Sana',
								y: 21.6,
								drilldown: 'NOK',
							},
						]
					},
					{
						id: '',
						name: 'Health Stat Entry of provided Service User w.r.t Selected Date',
						type: 'bar',

						data: [{
								name: '14-12-2020',
								y: 100,
								color: '#909497',
								drilldown: 'NOK'
							},
							{
								name: '15-12-2020',
								y: 90,
								color: '#34495E',
								drilldown: 'NOK'
							},
							{
								name: '16-12-2020',
								y: 98,
								color: '#85929E',
								drilldown: 'NOK'
							},
							{
								name: '17-12-2020',
								y: 87,
								color: '#95A5A6',
								drilldown: 'NOK'
							},
							{
								name: '18-12-2020',
								y: 95,
								color: '#BDC3C7',
								drilldown: 'NOK'
							},
							{
								name: '20-12-2020',
								y: 97,
								color: '#ECF0F1',
								drilldown: 'NOK'
							},
						]
					},
				]
			},
			responsive: {
				rules: [{
					condition: {
						maxWidth: 500
					},
					chartOptions: {
						legend: {
							layout: 'horizontal',
							align: 'center',
							verticalAlign: 'bottom'
						}
					}
				}]
			}

		});
	</script>

	<script>
		Highcharts.chart('pie', {
			chart: {
				type: 'pie'
			},
			title: {
				text: 'Mediction Not Given By Reasons'
			},

			accessibility: {
				announceNewData: {
					enabled: true
				},
				point: {
					valueSuffix: '%'
				}
			},

			plotOptions: {
				series: {
					dataLabels: {
						enabled: true,
						format: '{point.name}: {point.y:.1f}%'
					}
				}
			},

			yAxis:{
				title:{
					text:''
				},
				labels:{
					enabled:false
				},
			},

			xAxis:{
				type:'category'
			},
			

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
			},

			series: [{
				name: "Reasons",
				colorByPoint: false,
				data: [
					{
						name: "Refused (Plucked)",
						y: 10.57,
						drilldown: "tnc1",
						color: '#2874A6'
					},
					{
						name: "Refused (Not plucked)",
						y: 7.23,
						drilldown: "tnc2",
						color: '#3498DB'
					},
					{
						name: "Nausea or vomiting",
						y: 5.58,
						drilldown: "tnc3",
						color: '#85C1E9'
					},
					{
						name: "Hospitalised",
						y: 4.02,
						drilldown: "tnc4",
						color: '#AED6F1'
					},
					{
						name: "Social leave",
						y: 1.92,
						drilldown: "tnc5",
						color: '#D6EAF8'
					},
					{
						name: "Returned & destroyed",
						y: 7.62,
						drilldown: "tnc6",
						color: '#D6EAF8'
					},
					{
						name: "Offered PRN not required",
						y: 7.23,
						drilldown: "tnc7",
						color: '#AED6F1'
					},
					{
						name: "Prompt",
						y: 5.58,
						drilldown: "tnc8",
						color: '#85C1E9'
					},
					{
						name: "Other",
						y: 4.02,
						drilldown: "tnc9",
						color: '#3498DB'

					},
					{
						name: "See note",
						y: 1.92,
						drilldown: "tnc10",
						color: '#2874A6'
					},
					{
						name: "Sleeping",
						y: 7.62,
						drilldown: "tnc11",
						color: '#21618C'
					}
				]
			}],
			drilldown: {
				series: [{
						name: "Service Users",
						id: "tnc",
						type:'column',
						tooltip: {
							headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
							pointFormat: '<span style="color:{point.color}">{point.name}</span>'
						},
						dataLabels: {
							enabled: false,
							format: '{point.name}: {point.y:.1f}%'
						},

						data: [{
								name: "Service User_1",
								y: 1,
								drilldown: 'NOK',
								color: '#909497',

							},
							{
								name: "Service User_2",
								y: 1,
								drilldown: 'NOK1',
								color: '#34495E',
							},
							{
								name: "Service User_3",
								y: 1,
								drilldown: 'NOK',
								color: '#85929E',

							},
							{
								name: "Service User_4",
								y: 1,
								drilldown: 'NOK1',
								color: '#95A5A6',
								
							},
							{
								name: "Service User_5",
								y: 1,
								drilldown: 'NOK',
								color: '#BDC3C7',

							},
							{
								name: "Service User_6",
								y: 1,
								drilldown: 'NOK1',
								color: '#909497',
							},
							{
								name: "Service User_7",
								y: 1,
								drilldown: 'NOK',
								color: '#34495E',

							},
							{
								name: "Service User_8",
								y: 1,
								drilldown: 'NOK1',
								color: '#85929E',
							},
							{
								name: "Service User_9",
								y: 1,
								drilldown: 'NOK',
								color: '#95A5A6',

							},
							{
								name: "Service User_10",
								y: 1,
								drilldown: 'NOK1',
								color: '#BDC3C7',
							},
						]
					},
					{
						name: "Service Users",
						id: "tnc1",
						type:'column',
						tooltip: {
							headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
							pointFormat: '<span style="color:{point.color}">{point.name}</span>'
						},
						dataLabels: {
							enabled: false,
							format: '{point.name}: {point.y:.1f}%'
						},

						data: [{
								name: "Service User_1",
								y: 1,
								drilldown: 'NOK',
								color: '#909497',

							},
							{
								name: "Service User_2",
								y: 1,
								drilldown: 'NOK1',
								color: '#34495E',
							},
							{
								name: "Service User_3",
								y: 1,
								drilldown: 'NOK',
								color: '#85929E',

							},
							{
								name: "Service User_4",
								y: 1,
								drilldown: 'NOK1',
								color: '#95A5A6',
								
							},
							{
								name: "Service User_5",
								y: 1,
								drilldown: 'NOK',
								color: '#BDC3C7',

							},
						]
					},
				]
			}
		});
	</script>

	<script>
		Highcharts.chart('line', {
			chart: {
				type: 'line',
				align: 'center'
			},
			title: {
				text: 'By Staff',
				textsize: 22
			},

			tooltip: {
				crosshairs: [true, true]
			},
			xAxis: {
				type: 'category',
				tickPosition: 'inside',
				tickwidth: 4,

			},
			yAxis: {
				type: 'category',
				title: {
					text: ''
				}
			},

			series: [{
					color: '#E74C3C',
					name: 'No Stock',
					borderWidth: 25,
					dataLabels: {
						enabled: true,
						format: '{point.y:.f}',
						className: 'highlight',
					},

					data: [{
							name: 'Staff_1',
							drilldown: 'tnc',
							y: 23,
						},
						{
							name: 'Staff_2',
							drilldown: 'tnc',

							y: 22,
						},
						{
							name: 'Staff_3',
							drilldown: 'tnc',

							y: 26,
						},
						{
							name: 'Staff_4',
							drilldown: 'tnc',

							y: 22,
						},
						{
							name: 'Staff_5',
							drilldown: 'tnc',

							y: 25,
						},
						{
							name: 'Staff_6',
							drilldown: 'tnc',

							y: 24,
						},
						{
							name: 'Staff_7',
							drilldown: 'tnc',

							y: 6,
						},
						{
							name: 'Staff_8',
							drilldown: 'tnc',

							y: 20,
						},
						{
							name: 'Staff_9',
							drilldown: 'tnc',

							y: 23,
						},
						{
							name: 'Staff_10',
							drilldown: 'tnc',

							y: 29,
						}
					],
				},
				{
					borderWidth: 25,
					color: '#1F618D',
					name: 'Not Given',
					dataLabels: {
						enabled: true,
						format: '{point.y:.f}',
					},

					data: [{
							name: 'Staff_1',
							drilldown: 'tnc',

							y: 3,
						},
						{
							name: 'Staff_2',
							drilldown: 'tnc',

							y: 2,
						},
						{
							name: 'Staff_3',
							drilldown: 'tnc',

							y: 3,
						},
						{
							name: 'Staff_4',
							drilldown: 'tnc',

							y: 3,
						},
						{
							name: 'Staff_5',
							drilldown: 'tnc',

							y: 3,
						},
						{
							name: 'Staff_6',
							drilldown: 'tnc',

							y: 3,
						},
						{
							name: 'Staff_7',
							drilldown: 'tnc',

							y: 2,
						},
						{
							name: 'Staff_8',
							drilldown: 'tnc',

							y: 9,
						},
						{
							name: 'Staff_9',
							drilldown: 'tnc',

							y: 6,
						},
						{
							name: 'Staff_10',
							drilldown: 'tnc',

							y: 2,
						}
					]
				},
				{

					borderWidth: 25,
					name: 'MAR Adjustment',
					color: '#117A65',
					dataLabels: {
						enabled: true,
						format: '{point.y:.f}',
					},

					data: [{
							name: 'Staff_1',
							drilldown: 'tnc',
							y: 26,
						},
						{
							name: 'Staff_2',
							drilldown: 'tnc',

							y: 25,
						},
						{
							name: 'Staff_3',
							drilldown: 'tnc',

							y: 29,
						},
						{
							name: 'Staff_4',
							drilldown: 'tnc',

							y: 28,
						},
						{
							name: 'Staff_5',
							drilldown: 'tnc',

							y: 25,
						},
						{
							name: 'Staff_6',
							drilldown: 'tnc',

							y: 27,
						},
						{
							name: 'Staff_7',
							drilldown: 'tnc',

							y: 8,
						},
						{
							name: 'Staff_8',
							drilldown: 'tnc',

							y: 29,
						},
						{
							name: 'Staff_9',
							drilldown: 'tnc',

							y: 29,
						},
						{
							name: 'Staff_10',
							drilldown: 'tnc',

							y: 31,
						},
					]
				}
			],
			drilldown: {
				series: [{
					id: 'tnc',
					type: 'column',
					name: 'No Of Service User',
					data: [{
							name: 'Total Medication',
							y: 5,
						},
						{
							name: 'Given Late',
							y: 1,
						},
						{
							name: 'Missed',
							y: 0,
						},
						{
							name: 'PRN Administrated',
							y: 1,
						},
					]
				}, ]
			},
			responsive: {
				rules: [{
					condition: {
						maxWidth: 500
					},
					chartOptions: {
						legend: {
							layout: 'horizontal',
							align: 'center',
							verticalAlign: 'bottom'
						}
					}
				}]
			}
		});
	</script>
	</div>


	<script>
		$('input[name="dateRange"]').daterangepicker({
			"opens": "left",
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		});
		$('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
		});

		$('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
			$(this).val('');
		});
	</script>
</body>

</html>