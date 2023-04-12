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

<body class="closedLeftNav">
	<?php include("header.php");?>

	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li>Rota</li>
			</ul>
			<span class="title"><img src="images/day.png"> Rota Management</span>
		</div>

		<span class="homeFloor">Angel, <i>Oatleigh Care Ltd</i>.</span>

		<span class="settings">To change the view, go to <a href="#">Settings</a>.</span>

		<ul class="search list-unstyled clearfix hidden">
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Select Floor</option>
						<option>Floor 1</option>
						<option>Floor 2</option>
						<option>Floor 3</option>
						<option>Total</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Select Floor</option>
						<option>Floor 1</option>
						<option>Floor 2</option>
						<option>Floor 3</option>
						<option>Total</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Select Floor</option>
						<option>Floor 1</option>
						<option>Floor 2</option>
						<option>Floor 3</option>
						<option>Total</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Select Floor</option>
						<option>Floor 1</option>
						<option>Floor 2</option>
						<option>Floor 3</option>
						<option>Total</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Select Floor</option>
						<option>Floor 1</option>
						<option>Floor 2</option>
						<option>Floor 3</option>
						<option>Total</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Select Floor</option>
						<option>Floor 1</option>
						<option>Floor 2</option>
						<option>Floor 3</option>
						<option>Total</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
		</ul>
	</section>

	<section class="contentBody gray noFooter">
		<div class="filtersSearch clearfix">
			<article class="weekSelection">
				<button class="prev">Left</button>
				<input type="text" name="dateRange" id="dateRange">
				<button class="next">Right</button>
			</article>

			<div class="dropList floorChange">
				<span style="background-image:url('images/rotaDropList_stairs.png');">Floor 1</span>
				<div class="scroll">
					<div class="scrollArea">
						<ul class="list-unstyled">
							<li class="rotaHomeGroup">Home 1</li>
							<li>Floor 1</li>
							<li>Basement</li>
							<li>First Floor</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="dropList">
				<span style="background-image:url('images/rotaDropList_tools.png');">Tools</span>
			</div>

			<div class="dropList">
				<span style="background-image:url('images/rotaDropList_print.png');">Print</span>
			</div>

			<button style="background-image:url('images/rotaAddEmployeeIcon.png');background-color:#6DC679;">Add Employee</button>

			<button style="background-image:url('images/rotaOnLeaveStaffIcon.png');background-color:#D8445A;color:#FFF;">Staff on Leave</button>

			<form class="search">
				<div class="byStaff">
					<input type="text" name="staffname" id="staffname" placeholder="Search by staff name">
					<button>search</button>
				</div>

				<span class="filters">Filters</span>

				<div class="allFilters">
					<ul class="list-unstyled">
						<li>
							<div class="form-group">
								<label for="">Choose Floor</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1">Floor 1</option>
									</select>
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="">Choose Department</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1"></option>
									</select>
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="">Choose Position</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1"></option>
									</select>
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="">Choose Payrate</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1"></option>
									</select>
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="">Choose Shift</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1"></option>
									</select>
								</div>
							</div>
						</li>
					</ul>

					<button class="green">Show Rota</button> <button>Reset Filters</button>
				</div>
			</form>
		</div>

		<div class="rotaGrid">
			<div class="scrollArea">
				<div class="rotaGridContainer">
					<div class="rotagrid compact">
						<ul class="list-unstyled rotaheader">
							<li></li>
							<li>
								15 Mon
								<div class="perDateInfo">
									<img src="https://jawa.linksdev.co.uk/images/rotatargetorange.png">
									<span class="rotaTargetTooltip">
										<strong>Groups:</strong> Over Limit<br>
										<strong>Positions:</strong> Over Limit<br>
										<strong>Shifts:</strong> Over Limit
									</span>
								</div>
							</li>
							<li>
								15 Mon
								<div class="perDateInfo">
									<img src="https://jawa.linksdev.co.uk/images/rotatargetorange.png">
									<span class="rotaTargetTooltip">
										<strong>Groups:</strong> Over Limit<br>
										<strong>Positions:</strong> Over Limit<br>
										<strong>Shifts:</strong> Over Limit
									</span>
								</div>
							</li>
							<li>
								15 Mon
								<div class="perDateInfo">
									<img src="https://jawa.linksdev.co.uk/images/rotatargetorange.png">
									<span class="rotaTargetTooltip">
										<strong>Groups:</strong> Over Limit<br>
										<strong>Positions:</strong> Over Limit<br>
										<strong>Shifts:</strong> Over Limit
									</span>
								</div>
							</li>
							<li>
								15 Mon
								<div class="perDateInfo">
									<img src="https://jawa.linksdev.co.uk/images/rotatargetorange.png">
									<span class="rotaTargetTooltip">
										<strong>Groups:</strong> Over Limit<br>
										<strong>Positions:</strong> Over Limit<br>
										<strong>Shifts:</strong> Over Limit
									</span>
								</div>
							</li>
							<li>
								15 Mon
								<div class="perDateInfo">
									<img src="https://jawa.linksdev.co.uk/images/rotatargetorange.png">
									<span class="rotaTargetTooltip">
										<strong>Groups:</strong> Over Limit<br>
										<strong>Positions:</strong> Over Limit<br>
										<strong>Shifts:</strong> Over Limit
									</span>
								</div>
							</li>
							<li>
								15 Mon
								<div class="perDateInfo">
									<img src="https://jawa.linksdev.co.uk/images/rotatargetorange.png">
									<span class="rotaTargetTooltip">
										<strong>Groups:</strong> Over Limit<br>
										<strong>Positions:</strong> Over Limit<br>
										<strong>Shifts:</strong> Over Limit
									</span>
								</div>
							</li>
							<li>
								15 Mon
								<div class="perDateInfo">
									<img src="https://jawa.linksdev.co.uk/images/rotatargetorange.png">
									<span class="rotaTargetTooltip">
										<strong>Groups:</strong> Over Limit<br>
										<strong>Positions:</strong> Over Limit<br>
										<strong>Shifts:</strong> Over Limit
									</span>
								</div>
							</li>
							<li>Weekly Hours</li>
						</ul>

						<ul class="list-unstyled rotausertable">
							<li>
								<span class="picture shade9"><img src="https://jawa.linksdev.co.uk/getattachmentdata?path=Y29tcGFueS8zL2VtcGxveWVlL2VtcGxveWVlXzExMF8xNTQ4MDYwNDYwXy5wbmc="></span>
								<span class="name">Akmal javed</span>
								<span class="designation">Manager</span>
								<span class="remove"><img src="images/remove.png"></span>
							</li>

							<li  class="filled published">
								<span class="shades"style="background: #8691af;"></span>
								<span class="deleterota"><img src="images/rotaRemove.png"></span>
								<div class="moreinfo">
									<img src="images/rotaMoreInfo.png">
									<span>
										<strong>Break:</strong> 40 mins<br>
										<strong>Overtime:</strong> 0 hour(s)<br>
										<strong>Rate:</strong> 8
									</span>
								</div>
								<span class="RotaDuplicateShift"></span>
								<span class="shift">Morning</span>
								<span class="shiftime">07:30 - 14:00</span>
								<span class="workingHours">13:00 <i>Total</i> • 0:45|1:00 <i>OT|FE</i></span>
							</li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li>
								<strong>Allocated:</strong> 17 hr 30 min<br>
								<strong>Contract:</strong> 60<br>
								<strong>OT/EY:</strong> 0/0<br>
								<strong>Contract:</strong>
							</li>
						</ul>

						<ul class="list-unstyled rotausertable">
							<li>
								<span class="picture"><img src="https://jawa.linksdev.co.uk/getattachmentdata?path=Y29tcGFueS8zL2VtcGxveWVlL2VtcGxveWVlXzExMF8xNTQ4MDYwNDYwXy5wbmc="></span>
								<span class="name">Akmal javed</span>
								<span class="designation">Manager</span>
								<span class="remove"><img src="images/remove.png"></span>
							</li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li class="hourswarn">
								<strong>Allocated:</strong> 17 hr 30 min<br>
								<strong>Contract:</strong> 60<br>
								<strong>OT/EY:</strong> 0/0
							</li>
						</ul>
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

	<!-- <div id="toast-container">
		<div class="toast toast-error" style="">
			<button class="toast-close-button">×</button>
			<div class="toast-title">Error</div>
			<div class="toast-message">
				<span>Please Select a Shift</span>
				<span>Please select another field</span>
			</div>
		</div>
	</div> -->

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>

	<script>

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
	</script>
</body>

</html>