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
</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li>Health Stats</li>
				<li><a href="#">Blood Oxygen</a></li>
			</ul>
			<span class="title"><img src="images/blood-oxygen.png"> Blood Oxygen</span>
		</div>
		<div class="ProfileInfo">
			<img src="images/temp-picture.jpg" class="picture">
			<span class="profileImg"><img src="images/photo-camera.svg" class="svg"></span>
			<ul class="list-unstyled">
				<li>
					<span>Service User Name</span><br>
					Terrance Edwards
				</li>
				<li>
					<span>Date of Birth</span><br>
					05-04-1974
				</li>
				<li>
					<span>Client No.</span><br>
					5921583
				</li>
				<li>
					<span>Location</span><br>
					Oxford St.
				</li>
			</ul>
		</div>
		<div class="clearfix" style="margin-top:20px;">
			<div class="pull-right clearfix">
				<ul class="diseases list-unstyled" hidden>
					<li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
					<li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
					<li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
				</ul>
				<div class="btn-group">
					<button type="button" class="btn"><img src="images/add-new-document.svg" class="svg">New</button>
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content">
				<div class="row">
					<div class="col-md-9">
						<form class="inBodyForm">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group date">
										<label>Date</label>
										<input type="text" name="dateRange" placeholder="Date" class="disabled"
											disabled>
										<img src="images/calendar-icon.svg" class="calendar svg">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group date">
										<label>Time</label>
										<input type="text" name="dateRange" placeholder="Time" class="disabled"
											disabled>
										<img src="images/clock-with-white-face.svg" class="calendar svg">
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group slideHandles">
										<label>Pulse (BPM)</label>
										<p class="clearfix"></p>
										<input type="text" id="pulseSlider" name="weight" value="">
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group date">
										<label>Comments</label>
										<textarea></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Notify Manager</label>
										<span class="toggles fixed">
											<input type="checkbox" name="manager" id="manager" class="ios-toggle">
											<label for="manager" class="checkbox-label" data-off="NO"
												data-on="YES"></label>
										</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Add to To-Do-list</label>
										<span class="toggles fixed">
											<input type="checkbox" name="toDoList" id="toDoList" class="ios-toggle">
											<label for="toDoList" class="checkbox-label" data-off="NO"
												data-on="YES"></label>
										</span>
									</div>
								</div>
								<div class="col-md-12">
									<p class="bmiCalculated">
										72 <small>BPM</small>
									</p>
									<small class="bmiCriteria">Normal = 60 bpm - 100bpm</small>
								</div>
								<div class="col-md-4">
									<p>&nbsp;</p>
									<section class="multiPicture">
										<div class="form-group">
											<input type="file" name="" id="multiPic" class="hidden">
											<label for="multiPic">
												<span class="fileName">Click here to choose</span>
												<button type="button">Add</button>
											</label>
										</div>
										<ul class="list-unstyled">
											<li picId="25">
												<a href="#" target="_blank">somePicture_nameHere.jpg</a>
												<span class="delete"></span>
											</li>
											<li picId="25">
												<a href="#" target="_blank">somePicture_nameHere.jpg</a>
												<span class="delete"></span>
											</li>
											<li picId="25">
												<a href="#" target="_blank">somePicture_nameHere.jpg</a>
												<span class="delete"></span>
											</li>
										</ul>
									</section>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<article class="bloodOxy">
							<span>100<i>%</i></span>
							<img src="images/bloodoxy.png">
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contentFooter">
		<div class="row">
			<div class="col-md-6">
				<button type="button">Back</button> <button type="button" class="save">Save</button>
			</div>
			<div class="col-md-6 text-right">
				<div class="form-inline">
					<label>Service User</label>
					<div class="select">
						<select>
							<option>Terrance Edwards</option>
							<option>John Smith</option>
							<option>Tony Anderson</option>
						</select>
						<img src="images/left-arrow.svg" class="svg">
					</div>
				</div>
				<div class="form-inline">
					<label>By Floor</label>
					<div class="select">
						<select>
							<option>01</option>
							<option>02</option>
							<option>03</option>
						</select>
						<img src="images/left-arrow.svg" class="svg">
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade toDoListPop" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add to To-Do-List</h4>
				</div>
				<div class="modal-body inBodyForm">
					<div class="form-group date">
						<label>Date / Time</label>
						<input type="text" name="dateRange">
						<small>Choose date/time of the task</small>
						<img src="images/calendar-icon.svg" class="calendar svg">
					</div>
					<div class="form-group">
						<label>Alert</label>
						<span class="toggles fixed">
							<input type="checkbox" name="alert" id="alert" class="ios-toggle">
							<label for="alert" class="checkbox-label" data-off="NO" data-on="YES"></label>
						</span>
						<small class="clearfix">To show notification on date/time</small>
					</div>
					<div class="form-group">
						<label>Repeat</label>
						<div class="select">
							<select>
								<option></option>
								<option>Every Hour</option>
								<option>Every 2 Hours</option>
								<option>Every 3 Hours</option>
								<option>Every 4 Hours</option>
								<option>Every 5 Hours</option>
								<option>Every 6 Hours</option>
								<option>Every Day</option>
								<option>Every Week</option>
							</select>
							<img src="images/left-arrow.svg" class="svg">
						</div>
						<small>Interval of task to be done</small>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/ion.rangeSlider.min.js"></script>
	<script src="js/plotly-latest.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('#multiPic').on('change', function () {
			$('.fileName').html($(this).val());
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
		$('#toDoList').click(function () {
			if ($('#toDoList').is(':checked')) {
				$('.toDoListPop').modal('show')
			} else {
				$('.toDoListPop').modal('hide')
			}
		});
		$("#pulseSlider").ionRangeSlider({
			min: 60,
			max: 100,
			force_edges: true,
			postfix: ' bpm'
		});

		//Chart
		var trace1 = {
			x: ['15 Aug', '16 Aug', '17 Aug', '18 Aug', '19 Aug', '20 Aug', '21 Aug'],
			y: [75, 72, 71, 68, 65, 71, 72],
			type: 'scatter',
			name: 'Blood Pressure',
			line: {
				color: "#A4373B"
			},
			hoverinfo: "x + text + y",
			hovertext: "123"
		};

		var data = [trace1];
		var layout = {
			title: 'Blood Pressure History',
			showlegend: false,
			//width: 450,
			margin: {
				l: 30,
				r: 0
			},
			paper_bgcolor: "#E0E8EE",
			plot_bgcolor: "#E0E8EE",
			font: {
				color: "#333333"
			},
			xaxis: {
				color: "#879290"
			},
			yaxis: {
				color: "#879290"
			},

		};
		Plotly.newPlot('tester', data, layout, {
			displayModeBar: false
		});
	</script>
</body>

</html>