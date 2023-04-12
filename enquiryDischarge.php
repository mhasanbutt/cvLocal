<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<script src="js/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/drilldown.js"></script>
	<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Reports</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/flyer.png"> Improved Enquiry /
				Discharge</span>
		</div>

		<div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
			<form class="search" style="margin-left:10px;">
				<div class="byStaff">
					<input type="text" name="staffname" id="staffname" placeholder="Search by keyword">
					<button>search</button>
				</div>

				<span class="filters">Filters</span>

				<div class="allFilters">
					<ul class="list-unstyled">
						<li>
							<div class="form-group">
								<label for="">Choose Service User</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1">Service User 1</option>
									</select>
								</div>
							</div>
						</li>
					</ul>

					<button class="green">Search</button> <button>Reset Filters</button>
				</div>
			</form>
		</div>
	</section>

	<section class="contentBody noFooter">
		<div class="scrollArea">
			<div class="content">
				<div class="row">
					<div class="col-md-6">
						<div id="container-userinquiry">
							<script>
								Highcharts.chart('container-userinquiry', {
									chart: {
										type: 'line',
										align: 'center'
									},
									title: {
										text: 'Service User(s)',
										textsize: 22
									},
									subtitle: {
										enabled: false,
										text: '',

									},
									tooltip: {
										crosshairs: [true, true]
									},
									xAxis: {
										type: 'category',
									},
									yAxis: {
										type: 'categories',
										title: {
											text: 'Amount of Entries'
										}
									},

									credits: {
										enabled: false
									},

									series: [{
											name: 'Enquiries',
											color: '#f8a13f',
											borderWidth: 25,
											dataLabels: {
												enabled: true,
												format: '{point.y:.f}[Enquires]',
												className: 'highlight',
											},

											data: [{
													name: '12-12',
													drilldown: 'tnc',
													y: 16,
												},
												{
													name: '13-12',
													drilldown: 'tnc',
													y: 15,
												},
												{
													name: '14-12',
													drilldown: 'tnc',
													y: 6,
												},
												{
													name: '15-12',
													drilldown: 'tnc',
													y: 25,
												},
												{
													name: '16-12',
													drilldown: 'tnc',
													y: 14,
												},
											],
										},
										{
											name: 'Admission',
											borderWidth: 25,
											color: '#a5aad9',
											dataLabels: {
												enabled: true,
												format: '{point.y:.f}[Admission]',
											},

											data: [{
													name: '12-12',
													drilldown: 'tnc',
													y: 5,
												},
												{
													name: '13-12',
													drilldown: 'tnc',
													y: 8,
												},
												{
													name: '14-12',
													drilldown: 'tnc',
													y: 5,
												},
												{
													name: '15-12',
													drilldown: 'tnc',
													y: 22,
												},
												{
													name: '16-12',
													drilldown: 'tnc',
													y: 4,
												},
											]
										},
										{

											name: 'Discharges',
											borderWidth: 25,
											color: '#8b6792',
											dataLabels: {
												enabled: true,
												format: '{point.y:.f}[Discharges]',
											},

											data: [{
													name: '12-12',
													drilldown: 'tnc',
													y: 11,
												},
												{
													name: '13-12',
													drilldown: 'tnc',

													y: 7,
												},
												{
													name: '14-12',
													drilldown: 'tnc',

													y: 13,
												},
												{
													name: '15-12',
													drilldown: 'tnc',

													y: 3,
												},
												{
													name: '16-12',
													drilldown: 'tnc',

													y: 10,
												},

											]
										}
									],
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
					</div>

					<div class="col-md-6">
						<div id="bar" class="bar">
							<script>
								Highcharts.chart('bar', {
									chart: {
										type: 'bar',
									},
									title: {
										text: 'Overview of Enquiries',
									},
									tooltip: {
										crosshairs: [true, true]
									},
									xAxis: {
										type: 'category',
									},
									yAxis: {
										title: {
											text: 'Amount of Entries'
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
									credits: {
										enabled: false
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
											name: 'Active',
											color: '#f8a13f',
											dataLabels: {
												enabled: false,
												format: '{point.y:.f}[Active]',

											},
											data: [{
													name: '12-10',
													drilldown: 'tnc',
													y: 15,

												},
												{
													name: '11-10',
													y: 13,
													drilldown: 'tnc1',
												},
												{
													name: '10-10',
													y: 5,
													drilldown: 'tnc2',

												},
												{
													name: '09-10',
													y: 12,
													drilldown: 'tnc3',

												},
												{
													name: '08-10',
													y: 10,
													drilldown: 'tnc4',
												},
											]
										},
										{
											name: 'Unsucessful',
											color: '#a5aad9',
											dataLabels: {
												enabled: false,
												format: '{point.y:.f}[Unsucessful]',

											},
											data: [{
													name: '12-10',
													y: 18,
													drilldown: 'tnc4',
												},
												{
													name: '11-10',
													y: 8,

												},
												{
													name: '10-10',
													y: 8,


												},
												{
													name: '09-10',
													y: 16,


												},
												{
													name: '08-10',
													y: 1,


												},
											]
										},
										{
											name: 'Converted',
											color: '#8b6792',
											dataLabels: {
												enabled: false,
												format: '{point.y:.f}[Converted]',

											},
											data: [{
													name: '12-10',
													drilldown: 'tnc',
													y: 5,

												},
												{
													name: '11-10',
													y: 18,
													drilldown: 'tnc1',
												},
												{
													name: '10-10',
													y: 18,
													drilldown: 'tnc2',

												},
												{
													name: '09-10',
													y: 22,
													drilldown: 'tnc3',

												},
												{
													name: '08-10',
													y: 30,
													drilldown: 'tnc4',
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
						</div>
					</div>

					<div class="col-md-6">
						<div id="pie" class="pie">
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
										text: 'How did you hear about us?',
									},
									tooltip: {
										enabled: false,
										pointFormat: '{series.name}:<b>{point.percentage:.f}%</b>'
									},

									xAxis: {
										type: 'category',
									},

									legend: {
										enabled: false
									},

									yAxis: {
										title: {
											text: 'Amount of Enquries'
										},
									},

									credits: {
										enabled: false
									},

									plotOptions: {
										series: {
											borderWidth: 1,
											borderColor: 'monocolor',
										}
									},

									series: [{
										type: 'pie',
										name: 'Service user Enquires Recieved via',
										data: [{
												name: 'Telephone',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 1,
												drilldown: 'NOK1',
												color: '#F8961E'
											},
											{
												name: 'Email',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 6,
												drilldown: 'NOK2',
												color: '#F9AC4D'
											},

											{
												name: 'Local Authority',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 7,
												drilldown: 'NOK3',
												color: '#FBD19D'
											},
											{
												name: 'Trusted Care',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 12,
												drilldown: 'Autumna',
												color: '#FBCBB2'
											},
											{
												name: 'Egress',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 13,
												drilldown: 'Autumna',
												color: '#F9844A'
											},
											{
												name: 'D2A',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 15,
												drilldown: 'Autumna',
												color: '#C64606'
											},
											{
												name: 'Recomended by friend/family',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 3,
												drilldown: 'Autumna',
												color: '#FDC4C5'
											},
											{
												name: 'Facebook',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 11,
												drilldown: 'Autumna',
												color: '#73A84D'
											},
											{
												name: 'Twitter',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 3,
												drilldown: 'Autumna',
												color: '#43AA8B'
											},
											{
												name: 'Google',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 9,
												drilldown: 'Autumna',
												color: '#4D908E'
											},
											{
												name: 'Main Home Sign or Walk/Drive in',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 6,
												drilldown: 'Autumna',
												color: '#4D908E'
											},
											{
												name: 'Banner',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 8,
												drilldown: 'Autumna',
												color: '#ce6a85'
											},
											{
												name: 'LA Social Worker',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 18,
												drilldown: 'Autumna',
												color: '#885c58ff'
											},
											{
												name: 'Care Home Open day ',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 0,
												drilldown: 'Autumna',
												color: '#985277'
											},
											{
												name: 'Carehome.co.uk',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 12,
												drilldown: 'Autumna',
												color: '#d0bc62ff'
											},
											{
												name: 'Our Website',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 12,
												drilldown: 'Autumna',
												color: '#f9c74fff'
											},
											{
												name: 'Hospital Discharged team',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 4,
												drilldown: 'Autumna',
												color: '#5c374c'
											},
											{
												name: 'Leaflet/Brochure',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 6,
												drilldown: 'Autumna',
												color: '#90be6dff'
											},
											{
												name: 'Local Publication / Magzine Advert',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 1,
												drilldown: 'Autumna',
												color: '#2e525cff'
											},
											{
												name: 'Newspaper Advert',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 2,
												drilldown: 'Autumna',
												color: '#6ab47cff'
											},
											{
												name: 'Online Newspaper',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 7,
												drilldown: 'Autumna',
												color: '#43aa8bff'
											},
											{
												name: 'Other Website',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 9,
												drilldown: 'Autumna',
												color: '#4d908eff'
											},
											{
												name: 'Other',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 5,
												drilldown: 'Autumna',
												color: '#577590ff'
											}
										],
									}],

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
					</div>

					<div class="col-md-6">
						<div id="pie-2" class="pie-2">
							<script>
								Highcharts.chart('pie-2', {
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
										text: 'Reasons for Closure',
									},
									tooltip: {
										enabled: false,
										pointFormat: '{series.name}:<b>{point.y:}%</b>'
									},

									xAxis: {
										type: 'category',
									},

									legend: {
										enabled: 'false'
									},

									yAxis: {
										title: {
											text: 'Amount of Enquries'
										},
									},

									credits: {
										enabled: false
									},

									plotOptions: {
										series: {
											borderWidth: 1,
											borderColor: 'monocolor',
											stroke: {
												enabled: 5
											}
										}
									},

									series: [{
										type: 'pie',
										name: 'Reasons',
										data: [{
												name: 'Funding not agreed by LA',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 1,
												drilldown: 'NOK1',
												color: '#F8961E'
											},
											{
												name: 'Funding not agreed by client',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 0,
												drilldown: 'NOK2',
												color: '#F9AC4D'
											},

											{
												name: 'Incorrect placement Category',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 12,
												drilldown: 'NOK3',
												color: '#FBD19D'
											},
											{
												name: 'Condition Changed(Unalbled to meet needs)',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 15,
												drilldown: 'Autumna',
												color: '#FBCBB2'
											},
											{
												name: 'Found Another Service',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 8,
												drilldown: 'Autumna',
												color: '#F9844A'
											},
											{
												name: 'Referred to another service with company',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 5,
												drilldown: 'Autumna',
												color: '#C64606'
											},
											{
												name: 'Unabled to source required equipement/PPE',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 8,
												drilldown: 'Autumna',
												color: '#FDC4C5'
											},
											{
												name: 'Cannot be placed because of medical issues',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 3,
												drilldown: 'Autumna',
												color: '#FDC4C5'
											},
											{
												name: 'Assessment Outstandings',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 11,
												drilldown: 'Autumna',
												color: '#73A84D'
											},
											{
												name: 'RPR doest not want Service User to move',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 5,
												drilldown: 'Autumna',
												color: '#43AA8B'
											},
											{
												name: 'RPR doesnot like service',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 1,
												drilldown: 'Autumna',
												color: '#4D908E'
											},
											{
												name: 'Distance too far for PRP',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 0,
												drilldown: 'Service User gone to hospital',
												color: '#4D908E'
											},
											{
												name: 'Not in best interest to move',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 2,
												drilldown: 'Autumna',
												color: '#4D908E'
											},
											{
												name: 'Ongoing safeguarding',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 7,
												drilldown: 'Autumna',
												color: '#ce6a85'
											},
											{
												name: 'Service user has died',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 6,
												drilldown: 'Autumna',
												color: '#985277'
											},
											{
												name: 'Other',
												dataLabels: {
													enabled: true,
													format: '{point.name:.f}',
												},
												y: 4,
												drilldown: 'Autumna',
												color: '#5c374c'
											},
										],
									}],

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
					</div>

					<div class="col-md-4 reportEnquiryStatus">
						<span class="title">A &amp; I <small>(Last 30 days)</small></span>

						<ul class="list-unstyled byColourStat">
							<li>
								Active <span><i style="width:10%;">4</i></span>
							</li>
							<li>
								Awaiting Sign Off <span><i style="width:17.5%;">7</i></span>
							</li>
							<li>
								Completed <span><i style="width:5%;">2</i></span>
							</li>
						</ul>
					</div>

					<div class="col-md-8">
						<div id="carehome1" class="serviceUsersSponsor">
							<script>
								var pieColors = (function () {
									var colors = [],
										base = Highcharts.getOptions().colors[0],
										i;

									for (i = 0; i < 10; i += 1) {
										colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
									}
									return colors;
								}());
								Highcharts.chart('carehome1', {
									chart: {
										type: 'pie',
										backgroundColor: 'rgb(0,0,0,0)'
									},


									title: {
										text: '',

									},
									tooltip: {
										pointFormat: '<b>{point.percentage:.1f}%</b>'
									},
									accessibility: {
										point: {
											valueSuffix: '%'
										}
									},
									plotOptions: {
										pie: {
											allowPointSelect: true,
											cursor: 'pointer',
											colors: pieColors,
											dataLabels: {
												enabled: true,
												format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
												color: 'white'
											}
										}
									},
									series: [{
										name: 'Funding Type',
										data: [{
												name: 'Private ',
												y: 67,
												color: '#4780b7'
											},
											{
												name: 'LA',
												y: 4,
												color: '#cebd3e'
											},
											{
												name: 'LA (TopUp)',
												y: 4,
												color: '#da4569'
											},
											{
												name: 'LA (FNC)',
												y: 2,
												color: '#6267cb'
											},
											{
												name: 'LA (TopUp & FNC)',
												y: 6,
												color: '#d17d36'
											},
											{
												name: 'NHS',
												y: 4,
												color: '#6ac757'
											},
											{
												name: 'FNC',
												y: 2,
												color: '#1c1c1e'
											},
											{
												name: 'Other',
												y: 2,
												color: '#999999'
											},
										]
									}]
								});
							</script>
						</div>

						<div class="dashLegends">
							<ul class="list-unstyled">
								<li>Private: <strong>67% (39 Beds)</strong></li>
								<li>LA: <strong>4% (4 Beds)</strong></li>
								<li>LA (TopUp): <strong>4% (2 Beds)</strong></li>
								<li>LA (FNC): <strong>2% (4 Bed)</strong></li>
								<li>LA (TopUp & FNC): <strong>6% (3 Beds)</strong></li>
								<li>NHS: <strong>4% (2 Beds)</strong></li>
								<li>FNC: <strong>2% (4 Bed)</strong></li>
								<li>Other: <strong>2% (1 Bed)</strong></li>
								<li>Not Selected: <strong>0% (0 Bed)</strong></li>
							</ul>
						</div>
					</div>

					<div class="col-md-12 reportEnquiryList">
						<h2>
							Service User Enquiries

							<div class="select">
								<div class="select">
									<select class="EnquiryHomeFilter" name="HomeFrom">
										<option value="" selected="selected">Select Home</option>
										<option value="263">Woolton Grange Care Home</option>
										<option value="264">Barnston Court</option>
									</select>
								</div>
							</div>
						</h2>

						<div class="enquiryTab">
							<span class="active" id="recent">Recent</span>
							<span id="noAction">No Action 48hrs</span>
							<span id="converted">Converted</span>
							<span id="closed">Closed</span>
						</div>

						<table class="active highlightName" id="recentTab">
							<thead>
								<tr>
									<th>Recent Enquiries</th>
									<th>Enquiry Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						<table class="highlightName" id="noActionTab">
							<thead>
								<tr>
									<th>Recent Enquiries</th>
									<th>Enquiry Date</th>
									<th>Status</th>
									<th>Last Action</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						<table class="highlightName" id="convertedTab">
							<thead>
								<tr>
									<th>Service User</th>
									<th>Conversion Date</th>
									<th>Residency Type</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						<table class="highlightName" id="closedTab">
							<thead>
								<tr>
									<th>Service User</th>
									<th>Conversion Date</th>
									<th>Residency Type</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="newPopup">
		<article>
			<div>
				<div class="popupContainer">
					<span class="title">
						<i class="close"></i>
						Active / Deactive Alerts
					</span>

					<div class="popupBody">
						<p><small><i>To Activate/Deactivate an Alert, you will need a witness to verify.</i></small></p>

						<ul class="list-unstyled alertsCheckboxes clearfix">
							<li>
								<span class="title">DNACPR</span>
								<input type="checkbox" name="dnacpr" id="dnacpr" class="changeState" hidden>
								<label for="dnacpr"></label>
							</li>
						</ul>
					</div>

					<a class="proceed" href="javascript:void();">Done</a>
				</div>

				<div class="secondary" style="display:none;width:250px;">
					<span class="title">
						<i class="close"></i>
						DNACPR
					</span>

					<div class="popupBody">
						<div class="form-group">
							<label for="">Has the DNACPR been uploaded to the Filing Cabinet?</label>
							<input type="checkbox" name="dnacpr" id="dnacpruploaded" class="changeState" hidden>
							<label for="dnacpruploaded" class="checkbox"></label>
						</div>

						<div class="form-group">
							<label for="">Have the funeral notes been uploaded to the Filing Cabinet?</label>
							<input type="checkbox" name="dnacpr" id="filingCabinet" class="changeState" hidden>
							<label for="filingCabinet" class="checkbox"></label>
						</div>

						<div class="form-group">
							<label for="">Indefinite DNACPR?</label>
							<input type="checkbox" name="dnacpr" id="indefinitednacpr" class="changeState" hidden>
							<label for="indefinitednacpr" class="checkbox"></label>
						</div>

						<div class="form-group">
							<label for="">Date of Review</label>
							<input type="text" name="" id="">
						</div>

						<div class="form-group">
							<label for="">Date of DNACPR Order</label>
							<input type="text" name="" id="">
						</div>

						<div class="form-group">
							<label for="">Reminder Before</label>
							<input type="text" name="" id="">
						</div>

						<div class="form-group">
							<label for="">Comments</label>
							<input type="text" name="" id="">
						</div>
					</div>

					<a href="javascript:void();">Cancel</a> <a class="proceed" href="javascript:void();">Confirm</a>
				</div>
			</div>
		</article>
	</div>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('#activeAlert').click(function () {
			$('.newPopup').css('display', 'table');
		});

		$('.newPopup .close').click(function () {
			$('.newPopup').css('display', 'none');
		});

		$('.changeState').on('click', function () {
			if ($(this).is(':checked')) {
				$('.popupContainer').addClass('moveLeft');
				$('.secondary').css('display', 'inline-block');
			}
		});

		$('input[name="dateRange"]').daterangepicker({
			"opens": "left",
			"singleDatePicker": true,
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		});
		$('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY'));
		});

		$('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
			$(this).val('');
		});
	</script>
</body>

</html>