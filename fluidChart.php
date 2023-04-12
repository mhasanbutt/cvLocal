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
						<div id="pie" class="pie" style="width:100%; height:100%;"></div>
					</div>
					<div class="col-md-6">
						<div id="column-2" class="column" style="width:100%; height:100%;"></div>
					</div>
					<div class="col-md-6">
						<div id="bar" class="bar" style="width:100%; height:100%;"></div>
					</div>
					<div class="col-md-6">
						<div id="pie-2" class="pie" style="width:100%; height:100%;"></div>
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
		Highcharts.chart('container-fluidconsumption', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Fluid Analysis'
			},
			xAxis: {
				type: 'category'
			},
			yAxis: [{
				labels: {
					format: '{value}(ml)'
				},
				title: {
					text: 'Fluid (ml)'
				}
			}, {
				title: {
					text: ''
				},
				opposite: true,

			}],
			legend: {
				shadow: false
			},
			tooltip: {
				shared: true
			},
			plotOptions: {
				column: {
					grouping: true,
					shadow: true,
					borderWidth: 0,
					negativeColor: 'red',

				}
			},

			series: [{
					name: 'Offered',
					color: '#833029',
					drilldown: 'tnc',
					data: [{
							name: 'Service User_1',
							y: 900,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_2',
							y: 1000,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_3',
							y: 500,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_4',
							y: 450,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_5',
							y: 1300,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_6',
							y: 2000,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_7',
							y: 1500,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_8',
							y: 1800,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_9',
							y: 1200,
							drilldown: 'tnc',

						},
						{
							name: 'Service User_10',
							y: 3000,
							drilldown: 'tnc',

						},

					],
					pointPadding: 0.3,
					pointPlacement: -0.2,
					dataLabels: {
						enabled: false,
						borderRadius: 5,
						backgroundColor: 'rgba(252, 255, 197, 0.7)',
						borderWidth: 1,
						borderColor: '#AAA',
						y: -6,
						format: '{point.y:.f}[ml]',
					},

					tooltip: {
						valuePrefix: '',
						valueSuffix: ' ml'
					},
				},
				{
					name: 'Consumed',
					color: '#118ab2',
					id: 'tnc1',
					data: [{
							name: 'Service User_1',
							y: 800,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_2',
							y: 1000,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_3',
							y: 400,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_4',
							y: 450,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_5',
							y: 1100,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_6',
							y: 1800,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_7',
							y: 1500,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_8',
							y: 1400,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_9',
							y: 1000,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_10',
							y: 2800,
							drilldown: 'tnc2',

						},
					],
					pointPadding: 0.3,
					pointPlacement: -0.2,
					dataLabels: {
						enabled: false,
						borderRadius: 5,
						backgroundColor: 'rgba(252, 255, 197, 0.7)',
						borderWidth: 1,
						borderColor: '#AAA',
						y: -8,
						format: '{point.y:.f}[ml]',
					},

					tooltip: {
						valuePrefix: '',
						valueSuffix: ' ml'
					},
				},
				{
					name: ' Balance/Deficit',
					color: 'green',
					negativeColor: 'red',
					data: [{
							name: 'Service User_1',
							y: -100,
							drilldown: '',

						},
						{
							name: 'Service User_2',
							y: 1000,
							drilldown: '',

						},
						{
							name: 'Service User_3',
							y: -100,
							drilldown: '',

						},
						{
							name: 'Service User_4',
							y: 450,
							drilldown: '',

						},
						{
							name: 'Service User_5',
							y: -200,
							drilldown: '',

						},
						{
							name: 'Service User_6',
							y: -200,
							drilldown: '',

						},
						{
							name: 'Service User_7',
							y: 1500,
							drilldown: '',

						},
						{
							name: 'Service User_8',
							y: -400,
							drilldown: '',

						},
						{
							name: 'Service User_9',
							y: -200,
							drilldown: '',

						},
						{
							name: 'Service User 10',
							y: -200,
							drilldown: '',

						},
					],
					tooltip: {
						valuePrefix: '',
						valueSuffix: ' ml'
					},
					dataLabels: {
						enabled: false,
						borderRadius: 5,
						backgroundColor: 'rgba(252, 255, 197, 0.7)',
						borderWidth: 1,
						borderColor: '#AAA',
						y: -6,
						format: '{point.y:.f}%',
					},
					pointPadding: 0.3,
					pointPlacement: -0.2,
					yAxis: 0
				},
				{
					name: 'Target',
					color: 'rgba(225, 206, 193)',
					data: [{
							name: 'Service User_1',
							y: 1200,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_2',
							y: 1500,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_3',
							y: 1000,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_4',
							y: 1200,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_5',
							y: 2200,
							drilldown: '',

						},
						{
							name: 'Service User_6',
							y: 2500,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_7',
							y: 2800,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_8',
							y: 3000,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_9',
							y: 1500,
							drilldown: 'tnc1',

						},
						{
							name: 'Service User_10',
							y: 3500,
							drilldown: 'tnc1',

						},
					],
					tooltip: {
						valuePrefix: '',
						valueSuffix: ' ml'
					},
					dataLabels: {
						enabled: false,
						borderRadius: 5,
						backgroundColor: 'rgba(252, 255, 197, 0.7)',
						borderWidth: 1,
						borderColor: '#AAA',
						y: -6,
						format: '{point.y:.f}%',
					},
					pointPadding: 0.3,
					pointPlacement: -0.2,
					yAxis: 0
				}
			],
			drilldown: {
				id: 'tnc',
				series: [{
						type: 'pie',
						id: 'tnc',
						name: 'Fluid(ml)',

						data: [{
								name: 'Milk',
								y: 200,
								drilldown: 'NOK1',

								color: '#847577'
							},
							{
								name: 'Water',
								y: 300,
								drilldown: 'NOK2',

								color: '#847577'
							},
							{
								name: 'Juices',
								y: 400,
								drilldown: 'NOK3',

								color: '#847577'
							},


						]
					}, {
						id: 'tnc1',
						name: 'Fluid(ml)',
						type: 'pie',
						color: '#a6a2a2',


						data: [{
								name: 'Milk',
								y: 200,
								color: '#a6a2a2',

							},
							{
								name: 'Juices',
								y: 100,
								color: '#a6a2a2',

							},
							{
								name: 'Tea',
								y: 100,
								color: '#a6a2a2',

							},
							{
								name: 'Water',
								y: 400,
								color: '#a6a2a2',

							},
						]
					},
					{
						id: 'NOK3',
						type: 'column',
						name: 'No Of Service User(s)',


						data: [{
								name: 'Offered',
								y: 15,


								color: '#847577'
							},
							{
								name: 'Consumed',
								y: 14,

								color: '#a6a2a2'
							},
						]
					},
					{
						id: 'NOK4',
						type: 'column',
						name: 'No of Service User(s)',


						data: [{
								name: 'Offered',
								y: 23,

								color: '#847577'
							},
							{
								name: 'Consumed',
								y: 22,


								color: '#a6a2a2'
							},

						]
					}
				]
			},


		});
	</script>
	<script>
		Highcharts.chart('pie-2', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Fluid Intake'
			},
			xAxis: {
				categories: ['20-2-2020', '21-02-2020', '22-02-2020', '23-02-2020', '24-02-2020','25-02-2020']
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Fluid Intake'
				},
				stackLabels: {
					enabled: false,
					style: {
						fontWeight: 'bold',
						color: ( // theme
							Highcharts.defaultOptions.title.style &&
							Highcharts.defaultOptions.title.style.color
						) || 'gray'
					}
				}
			},
			
			tooltip: {
				headerFormat: '<b>{point.x}</b><br/>',
				pointFormat: '{series.name}: {point.name}<br/>Total: {point.y}'
			},
			plotOptions: {
				column: {
					stacking: 'normal',
					dataLabels: {
						enabled: false
					}
				}
			},
			series: [{
				name: 'Target Met',
				color: 'green',
				data: [{
						name: '20-02-2020',
						y: 2,
						drilldown: 'tnc',

					},
					{
						name: '21-02-2020',
						y: 1,
						drilldown: 'tnc',

					},
					{
						name: '22-02-2020',
						y: 2,
						drilldown: 'tnc',

					},
					{
						name: '23-02-2020',
						y: 1,
						drilldown: 'tnc',

					},
					{
						name: '24-02-2020',
						y: 2,
						drilldown: 'tnc',

					},
					{
						name: '25-02-2020',
						y: 1,
						drilldown: 'tnc',

					},

				],

			}, {
				name: 'Target Not Met',
				color: 'red',

				data: [{
						name: '20-02-2020',
						y: 3,
						drilldown: 'tnc',

					},
					{
						name: '21-02-2020',
						y: 1,
						drilldown: 'tnc1',

					},
					{
						name: '22-02-2020',
						y: 2,
						drilldown: 'tnc1',

					},
					{
						name: '23-02-2020',
						y: 2,
						drilldown: 'tnc',

					},
					{
						name: '24-02-2020',
						y: 1,
						drilldown: 'tnc1',

					},
					{
						name: '25-02-2020',
						y: 3,
						drilldown: 'tnc1',

					},

				],
			}, {
				name: 'No Targets Set',
				color: '#64767B',

				data: [{
						name: '20-02-2020',
						y: 1,
						drilldown: 'tnc',

					},
					{
						name: '21-02-2020',
						y: 1,
						drilldown: 'tnc2',

					},
					{
						name: '22-02-2020',
						y: 2,
						drilldown: 'tnc2',

					},
					{
						name: '23-02-2020',
						y: 1,
						drilldown: 'tnc',

					},
					{
						name: '24-02-2020',
						y: 1,
						drilldown: 'tnc2',

					},
					{
						name: '25-02-2020',
						y: 1,
						drilldown: 'tnc2',

					},
				],
			}, ],

			drilldown: {
				id: 'tnc1',

				series: [{
						name: 'No Of Service User(s)',
						borderWidth: 20,
						showInLegend: false,
						type: 'pie',

						data: [{
								name: 'Target Met',
								y: 90,
								drilldown: '',
								color: '#64767B'
							},
							{
								name: 'Target Not Met',
								y: 10,
								drilldown: 'NOK2',
								color: '#833029',
							},
						]
					},
					{
						id: 'NOK1',
						type: 'line',
						name: 'Target Set',
						type: 'pie',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						data: [{
								name: 'Service User_(1)',
								y: 1100,
								drilldown: 'NOK1',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml)]',
								}

							},
							{
								name: 'Service User_(2)',
								y: 1100,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								},


								color: '#a6a2a2',

							},
							{
								name: 'Service User_(3)',
								y: 3000,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
							{
								name: 'Service User_(4)',
								y: 1500,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}

							},
							{
								name: 'Service User_(5)',
								y: 1000,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								},
								color: '#a6a2a2',

							},
							{
								name: 'Service User_(6)',
								y: 700,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
							{
								name: 'Service User_(7)',
								y: 1800,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
							{
								name: 'Service User_(8)',
								y: 1000,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								},
								color: '#a6a2a2',

							},
							{
								name: 'Service User_(9)',
								y: 3500,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
							{
								name: 'Service User_(11)',
								y: 1300,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}

							},
							{
								name: 'Service User_(12)',
								y: 1200,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								},


								color: '#a6a2a2',

							},
							{
								name: 'Service User_(13)',
								y: 500,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
							{
								name: 'Service User_(14)',
								y: 800,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}

							},
							{
								name: 'Service User_(15)',
								y: 3500,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								},


								color: '#a6a2a2',

							},
							{
								name: 'Service User_(16)',
								y: 1400,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
							{
								name: 'Service User_(17)',
								y: 1200,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}

							},
							{
								name: 'Service User_(18)',
								y: 800,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								},


								color: '#a6a2a2',

							},
							{
								name: 'Service User_(19)',
								y: 800,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
							{
								name: 'Service User_(20)',
								y: 2000,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}

							},
							{
								name: 'Service User_(21)',
								y: 1000,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								},


								color: '#a6a2a2',

							},
							{
								name: 'Service User_(22)',
								y: 1500,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
							{
								name: 'Service User_(23)',
								y: 1500,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}

							},
							{
								name: 'Service User_(24)',
								y: 1700,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								},
								color: '#a6a2a2',

							},
							{
								name: 'Service User_(25)',
								y: 2000,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[ml]',
								}
							},
						],
					},
					{
						id: 'tnc',
						type: 'pie',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: '20-02-2020',
						data: [{
								name: 'Service User not Met Target',
								y: 10,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service not Met Target]',
								}
							},
							{
								name: 'Service User met Target',
								y: 15,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User met Target]',
								},
								color: '#a6a2a2',
							},

						]
					},
					{
						id: 'NOK3',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 10,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 1,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 3,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK4',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 12,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 1,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 1,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},

					{
						id: 'NOK5',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 2,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 10,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 6,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK6',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 2,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 1,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 1,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},

					{
						id: 'NOK7',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 20,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 18,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 22,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK8',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 5,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 6,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 3,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK9',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 10,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 2,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 10,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK10',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 5,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 10,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 5,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK11',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 2,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 2,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 3,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK12',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 2,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 10,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 4,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
				]
			},


			responsive: {
				rules: [{
					condition: {
						maxWidth: 1000
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
				type: 'pie',
				events: {
					drilldown: function (e) {
						this.options.legend["enabled"] = false;
					},
					drillup: function (e) {
						this.options.legend["enabled"] = false;
					}
				}
			},
			title: {
				text: 'Fluid Provided',

			},

			xAxis: {
				type: 'category',
			},

			legend: {
				enabled: 'false'
			},

			yAxis: {
				title: {
					text: 'Fluid(ml)'
				},
			},

			plotOptions: {
				pie: {
					dataLabels: {
						enabled: true,
						distance: 20,
						style: {
							fontWeight: 'bold',
						}
					},
					startAngle: -90,
					endAngle: 90,
					center: ['50%', '75%'],
					size: '120%'
				}
			},
			series: [{
				type: 'pie',
				name: 'Service User(s)',
				innerSize: '50%',
				data: [{
						name: 'Staff_1',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.name:.f}[3Floor][8Rooms]'
						},
						y: 29,
						drilldown: 'NOK1',
						color: '#64767B'
					},
					{
						name: 'Staff_2',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.name:.f}[1Floor][15Rooms]'
						},
						y: 31,
						drilldown: 'NOK2',
						color: '#D0D1D1'
					},

					{
						name: 'Satff_3',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.name:.f}[GFloor][11Rooms]'
						},
						y: 17,
						drilldown: 'NOK3',
						color: '#DDD4CB'
					},
					{
						name: 'Satff_4',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.name:.f}[1Floor][13Rooms]'
						},
						y: 23,
						drilldown: 'NOK4',
						color: '#A46652'
					}
				],
			}],
			drilldown: {
				name: 'Fluid Provided',
				type: 'bar',

				series: [{
						type: 'bar',
						name: 'No of Service User(s)',

						id: 'NOK1',

						data: [{
								name: 'Service User_1',
								y: 1000,
								drilldown: 'NOK1',

								color: '#847577'
							},
							{
								name: 'Service User_2',
								y: 1600,
								drilldown: 'NOK1',

								color: '#847577'
							},
							{
								name: 'Service User_3',
								y: 1800,
								drilldown: 'NOK1',

								color: '#847577'
							},
							{
								name: 'Service User_4',
								y: 3000,
								drilldown: 'NOK1',

								color: '#847577'
							},
							{
								name: 'Service User_5',
								y: 900,
								drilldown: 'NOK1',

								color: '#847577'
							},

						]
					}, {
						id: 'NOK2',
						name: 'No Of Service User(s)',
						type: 'bar',


						data: [{
								name: 'Offered',
								y: 29,


								color: '#847577'
							},
							{
								name: 'Consumed',
								y: 29,


								color: '#a6a2a2'
							},
						]
					},
					{
						id: 'NOK3',
						type: 'bar',
						name: 'No Of Service User(s)',


						data: [{
								name: 'Offered',
								y: 15,


								color: '#847577'
							},
							{
								name: 'Consumed',
								y: 14,

								color: '#a6a2a2'
							},
						]
					},
					{
						id: 'NOK4',
						type: 'bar',
						name: 'No of Service User(s)',


						data: [{
								name: 'Offered',
								y: 23,

								color: '#847577'
							},
							{
								name: 'Consumed',
								y: 22,


								color: '#a6a2a2'
							},

						]
					}
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
		Highcharts.chart('column-2', {
			chart: {
				type: 'column',

			},
			title: {
				text: 'Risk Assesment and Nutrition and Hydration Plan',
				textsize: 22
			},

			tooltip: {
				enabled: false
			},
			xAxis: {
				type: 'category',

			},
			yAxis: {
				title: '',
				labels: {
					enabled: true,

				},
			},
			legend: {
				align: 'center',
				verticalAlign: 'bottom',
				layout: 'horizontal',
				enabled: false
			},

			series: [{
					color: '#64767B',
					borderWidth: 5,
					name: 'Risk of Dehydration',
					dataLabels: {
						enabled: true,
						borderRadius: 5,
						backgroundColor: 'rgba(252, 255, 197, 0.7)',
						borderWidth: 1,
						borderColor: '#AAA',
						y: -6,
						format: '{point.y:.f}[Risk of Dehydration]:',
					},

					data: [{
							drilldown: 'tnc',
							y: 35,
							name: 'Risk Of Dhydration'
						},

					],
				},
				{
					borderWidth: 2,
					color: '#833029',
					name: 'Nutrition and Dehydration Assesment',
					dataLabels: {
						enabled: true,
						borderRadius: 5,
						backgroundColor: 'rgba(252, 255, 197, 0.7)',
						borderWidth: 1,
						borderColor: '#AAA',
						y: -6,
						format: '{point.y:.f} [Nutrition and Dehydration Assesment]',
					},

					data: [{

						drilldown: 'tnc',
						y: 40,
						name: 'Nutrition and Dehydration Assesment'
					}, ]
				},
				{
					borderWidth: 2,
					color: '#BA8741',
					name: 'Fluid Alerts',
					dataLabels: {
						enabled: true,
						borderRadius: 5,
						backgroundColor: 'rgba(252, 255, 197, 0.7)',
						borderWidth: 1,
						borderColor: '#AAA',
						y: -6,
						format: '{point.y:.f} [Fluid Alerts]',
					},

					data: [{

						drilldown: 'tnc',
						y: 25,
						name: 'Fluid Alerts'
					}, ]
				},


			],
			drilldown: {
				type: 'column',

				series: [{
						id: 'tnc',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								id: 'tnc',
								name: 'JAN',
								y: 10,
								drilldown: 'NOK1',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: 'FEB',
								y: 18,
								drilldown: 'NOK2',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: 'MAR',
								y: 14,
								drilldown: 'NOK3',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'APR',
								y: 14,
								drilldown: 'NOK4',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'MAY',
								y: 18,
								drilldown: 'NOK5',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'JUN',
								y: 8,
								drilldown: 'NOK6',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'JUL',
								y: 11,
								drilldown: 'NOK7',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'AUG',
								y: 13,
								drilldown: 'NOK8',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'SEP',
								y: 22,
								drilldown: 'NOK9',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'OCT',
								y: 20,
								drilldown: 'NOK10',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'NOV',
								y: 7,
								drilldown: 'NOK11',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
							{
								name: 'DEC',
								y: 14,
								drilldown: 'NOK12',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					}, {
						id: 'NOK1',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 5,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 5,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 5,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK2',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 9,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 3,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 6,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK3',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 10,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 1,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 3,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK4',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 12,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 1,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 1,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},

					{
						id: 'NOK5',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 2,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 10,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 6,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK6',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 2,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 1,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 1,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},

					{
						id: 'NOK7',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 20,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 18,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 22,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK8',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 5,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 6,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 3,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK9',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 10,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 2,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 10,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK10',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 5,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 10,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 5,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK11',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 2,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 2,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 3,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
							},
						]

					},
					{
						id: 'NOK12',
						type: 'line',
						dataLabels: {
							enabled: true,
							borderRadius: 5,
							backgroundColor: 'rgba(252, 255, 197, 0.7)',
							borderWidth: 1,
							borderColor: '#AAA',
							y: -6,
							format: '{point.y:.f}',
						},
						name: 'No Of Service User',
						data: [{
								name: '01-02-2020',
								y: 2,
								drilldown: 'NOK',
								color: '#847577',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}

							},
							{
								name: '15-02-2020',
								y: 10,
								drilldown: 'NOK',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								},


								color: '#a6a2a2',

							},
							{
								name: '30-02-2020',
								y: 4,
								drilldown: 'NOK',
								color: '#cfd2cd',
								dataLabels: {
									enabled: true,
									borderRadius: 5,
									backgroundColor: 'rgba(252, 255, 197, 0.7)',
									borderWidth: 1,
									borderColor: '#AAA',
									y: -6,
									format: '{point.y:.f}[Service User(s)]',
								}
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
		Highcharts.chart('bar', {
			chart: {
				type: 'line',
			},
			title: {
				text: 'Daily Fluid Consumption',
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.f}[ml]</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			xAxis: {
				type: 'category',
			},
			yAxis: {
				title: '',
				labels: {
					enabled: true
				}
			},
			legends: {
				title: {
					text: 'Intake Stat(s)<br/><span style="font-size: 9px; color: #666; font-weight: normal">(Click these to  hide)</span>'
				},
				layout: 'Horizantal',
				align: 'right',
				verticalAlign: 'top',
				x: -10,
				y: 100
			},
			plotOptions: {
				series: {
					dataLabels: {
						enabled: true,
						borderRadius: 5,
						backgroundColor: 'rgba(252, 255, 197, 0.7)',
						borderWidth: 1,
						borderColor: '#AAA',
						y: -6
					}
				}
			},
			series: [{
					name: 'Service users that Consumed Fluids',
					color: '#656144',

					data: [{
							name: '12-10-2020',
							drilldown: 'tnc',
							y: 1500,
							dataLabels: {
								enabled: true,
								format: '{point.y:.f}[ml]:',

							},

						},
						{
							name: '11-10-2020',
							y: 1000,
							drilldown: 'tnc1',
							dataLabels: {
								enabled: true,
								format: '{point.y:.f}[ml]:',

							},
						},
						{
							name: '10-10-2020',
							y: 1800,
							drilldown: 'tnc2',
							dataLabels: {
								enabled: true,
								format: '{point.y:.f}[ml]:',

							},

						},
						{
							name: '09-10-2020',
							y: 500,
							drilldown: 'tnc3',
							dataLabels: {
								enabled: true,
								format: '{point.y:.f}[ml]:',

							},

						},
						{
							name: '08-10-2020',
							y: 2500,
							drilldown: 'tnc4',
							dataLabels: {
								enabled: true,
								format: '{point.y:.f}[ml]:',

							},

						},
						{
							name: '07-10-2020',
							y: 1500,
							drilldown: 'tnc5',
							dataLabels: {
								enabled: true,
								format: '{point.y:.f}[ml]:',

							},
						},
						{
							name: '06-10-2020',
							y: 2000,
							drilldown: 'tnc6',
							dataLabels: {
								enabled: true,
								format: '{point.y:.f}[ml]:',

							},
						},
					]
				},
			],

			responsive: {
				rules: [{
					condition: {
						maxWidth: 500
					},
					chartOptions: {
						legend: {
							layout: 'vertical',
							align: 'center',
							verticalAlign: 'bottom'
						}
					}
				}]
			}
		})
	</script>
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