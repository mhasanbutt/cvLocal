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
	<link rel="stylesheet" href="css/toast.css">
</head>

<body>
	<?php include("header.php");?>

	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li>Reports</li>
			</ul>
			<span class="title"><img src="images/reportCareRoutine.png"> Care Routines</span>
		</div>
        
        <article class="reportsSelection" content-title="Selection, Based on Search">
            All <i>(Home / Floor)</i>, All <i>(Service Users)</i>, All <i>(Staff)</i>, 23.11.2021 <i>(Date)</i>
        </article>
	</section>

	<section class="contentBody gray noFooter">
		<div class="filtersSearch clearfix">

			<button style="padding-left:10px;background-color:#6DC679;text-transform:uppercase;">Completed</button>
            <button style="padding-left:10px;background-color:#d9425a;text-transform:uppercase;" class="disabled">Late</button>
			<button style="padding-left:10px;background-color:#7e98c0;text-transform:uppercase;" class="disabled">Missed</button>

			<form class="search">
				<div class="byStaff">
					<input type="text" name="staffname" id="staffname" placeholder="Search by Service User">
					<button>search</button>
				</div>

				<span class="filters">Filters</span>

				<div class="allFilters">
					<ul class="list-unstyled">
						<li>
							<div class="form-group">
								<label for="">Choose Home / Floor</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1">Floor 1</option>
									</select>
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="">Choose Staff</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1"></option>
									</select>
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="">Choose Date</label>
								<input type="text" name="" id="">
							</div>
						</li>
					</ul>

					<button class="green">Search</button> <button>Reset Filters</button>
				</div>
			</form>
		</div>

        <div class="reportCareRoutines">
            <div class="scrollArea">
                <section class="serviceUser">
                    <span class="name">Mr Tyrone's_4 TEST</span>

                    <ul class="list-unstyled">
                        <li class="clearfix">
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Start Time / Date</i>
                                (08:00) 23-11-2021 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Completed Time / Date</i>
                                - 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>COmpleted by</i>
                                Steve Benson
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Feature</i>
                                Headcount 
                            </span>
							<span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Added By</i>
                                George Boston
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Frequency</i>
                                Every 2 hrs 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Staff Required</i>
                                1 Staff 
                            </span>
							<span style="width:calc(100% - calc(calc(100% - 120px) / 7) - 20px);margin-left:0;">
                                <i>Task</i>
                                L. Venomous 
                            </span>
							<span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Late By</i>
                                <strong style="color:#CB0000;">2h 36m</strong> 
                            </span>
                        </li>
						<li class="clearfix">
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Start Time / Date</i>
                                (08:00) 23-11-2021 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Completed Time / Date</i>
                                - 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>COmpleted by</i>
                                Steve Benson
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Feature</i>
                                Headcount 
                            </span>
							<span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Added By</i>
                                George Boston
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Frequency</i>
                                Every 2 hrs 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Staff Required</i>
                                1 Staff 
                            </span>
							<span style="width:100%;margin-left:0;">
                                <i>Task</i>
                                L. Venomous 
                            </span>
                        </li>
                    </ul>
                </section>

				<section class="serviceUser">
                    <span class="name">Mr Tim Shermin</span>

                    <ul class="list-unstyled">
                        <li class="clearfix">
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Start Time / Date</i>
                                (08:00) 23-11-2021 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Completed Time / Date</i>
                                - 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>COmpleted by</i>
                                Steve Benson
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Feature</i>
                                Headcount 
                            </span>
							<span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Added By</i>
                                George Boston
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Frequency</i>
                                Every 2 hrs 
                            </span>
                            <span style="width:calc(calc(100% - 120px) / 7);">
                                <i>Staff Required</i>
                                1 Staff 
                            </span>
							<span style="width:100%;margin-left:0;">
                                <i>Task</i>
                                L. Venomous 
                            </span>
                        </li>
                    </ul>
                </section>
            </div>
        </div>

		<div class="graphCareRoutines">
            <div class="scrollArea">
                <div class="content">
                    <div class="careroutineServiceUsers">
                        <ul class="list-unstyled tabs clearfix">
                            <li class="active" data-link="missed">
                                Missed
                            </li>
                            <li data-link="late">
                                Late
                            </li>
                        </ul>
                        <div class="tabContent">
                            <div style="display:block;" id="missedtab">
                                <table class="table table-compact table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                Service users
                                            </th>
                                            <th>
                                                No. of Care Routines
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Mr. Time Shermin
                                            </td>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="latetab">
                                Hi
                            </div>
                        </div>
                        
                    </div>
                    <div id="bar" class="bar" style="width:100%; height:100%;"></div>
                </div>
            </div>
		</div>
	</section>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="js/custom.js"></script>

	<script>
        $('.tabs li').click(function () {
			var t = $(this).attr('data-link');

			if (!$(this).hasClass('active')) {
				$(this).siblings('li').removeClass('active');
				$(this).addClass('active');
				$(this).parent().siblings('.tabContent').find('div').hide();
				$('#' + t + 'tab').show();
			}
		});

		function nameWidth() {
			var nameWidth = $('.rotausertable li .name').width();
			$('.rotagrid.compact .rotausertable li:last-child').css('padding-left', nameWidth + 10);
		}

		if($('body').hasClass('closedLeftNav')) {
			$('.leftNav').addClass('closed');
			$('.handle').addClass('open');
			$('.contentHeader').addClass('expand');
			$('.contentBody').addClass('expand');
			setTimeout(nameWidth, 1000);
		};

		$('input[name="dateRange"]').daterangepicker({
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		});

		$('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
			$(this).val(picker.startDate.format('D MMM') + ' - ' + picker.endDate.format('D MMM'));
		});

		$('.floorChange').on('click', function(){
			$(this).children('ul, .scroll').slideToggle();
		});

		$('.floorChange ul li').on('click', function(){
			var floor = $(this).text();
			$(this).parent().parent().children('span').html(floor);
		});

		$('.filters').on('click', function(){
			$('.allFilters').slideToggle();
		});

        Highcharts.chart('bar', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255,255,255,0.1)',
                align: 'center',
                
            },
            title: {
                text: 'Care Routine Analysis',
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
                labels: {
                    enabled: false
                },
                title: {
                    text: ''
                }
            },
            legend: {
                enabled:false, 
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },


            series: [{
                    color: '#E74C3C',
                    name: 'Care Routine(s)',

                    data: [{
                            name: 'Care Routine Set',
                            drilldown: 'tnc',
                            color:'#6DC679',
                            y: 4,
                        },
                        {
                            name: 'Done within 30 Min',
                            drilldown: 'tnc',
                            color:'#118ab2',
                            y: 15,
                        },
                        {
                            name: 'Done within 1 Hour',
                            drilldown: 'tnc',
                            color:'#ff9f1c',
                            y: 10,
                        },
                        {
                            name: 'Missed',
                            drilldown: 'tnc',
                            color:'#e63946',

                            y: 15,
                        },
                    ],
                },
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
</body>

</html>