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
</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Care</a></li>
				<li><a href="#">Resident Summary</a></li>
			</ul>
			<span class="title">June Armstrong</span>
		</div>
		<div class="btn-group noAlergy pull-right">
			<button type="button" class="btn orange"><img src="images/add-new-document.svg" class="svg">New</button>
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
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content specialHR">
				<div class="row">
					<div class="col-md-8 col-lg-9">
						<ul class="diseases list-unstyled">
							<li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
							<li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
							<li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
						</ul><br>
						<hr>
						<form class="inBodyForm fieldBorders orange">
							<h4><span>Resident Summary</span></h4>
							<div class="row">
								<div class="col-md-12 age">
									<div class="form-group">
										<label>Age</label>
										<input type="text" value="68" id="age" class="disabled" disabled>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="required">First Name</label>
										<input type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Middle Name</label>
										<input type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Title</label>
										<div class="select">
											<select>
												<option>Mr.</option>
												<option>Professor</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Known As</label>
										<input type="text" value="Jimmy">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group date">
										<label>Date of Birth</label>
										<input type="text" id="dob" name="dateRange" placeholder="Date">
										<img src="images/calendar-icon.svg" class="calendar svg">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Sex</label>
										<div class="select">
											<select>
												<option></option>
												<option>Male</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Marital Status</label>
										<div class="select">
											<select>
												<option></option>
												<option>Married</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Religion</label>
										<input type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Ethnic Origin</label>
										<div class="select">
											<select>
												<option></option>
												<option>White British</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
							</div>
							<hr>
							<h4><span>In-House Information</span></h4>
							<div class="row">
								<div class="col-md-4 height">
									<div class="form-group">
										<label>Height</label>
										<div class="counter" style="margin-right: 10px;">
											<button type="button" class="counterBtn plus"><img
													src="images/left-arrow.svg" class="svg"></button>
											<button type="button" class="counterBtn minus"><img
													src="images/left-arrow.svg" class="svg"></button>
											<input type="text" maxlength="3" value="0">
										</div>
										<div class="select small">
											<label>Unit</label>
											<select>
												<option>cm</option>
												<option>Feet</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
								<div class="col-md-4 height">
									<div class="form-group">
										<label>Weight</label>
										<div class="counter" style="margin-right: 10px;">
											<button type="button" class="counterBtn plus"><img
													src="images/left-arrow.svg" class="svg"></button>
											<button type="button" class="counterBtn minus"><img
													src="images/left-arrow.svg" class="svg"></button>
											<input type="text" maxlength="3" value="0">
										</div>
										<div class="select small">
											<label>Unit</label>
											<select>
												<option>kg</option>
												<option>Pounds</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>NI</label>
										<input type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>NHS Number</label>
										<input type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Residency Type</label>
										<div class="select">
											<select>
												<option></option>
												<option>Permanent</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Floor</label>
										<div class="select">
											<select>
												<option></option>
												<option>1</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Room</label>
										<div class="select">
											<select>
												<option></option>
												<option>B-35</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group date">
										<label>Date of Admission</label>
										<input type="text" name="dateRange" placeholder="Date">
										<img src="images/calendar-icon.svg" class="calendar svg">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Resident Number</label>
										<input type="text" value="AAED2" disabled>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group date">
										<label>End of Service</label>
										<input type="text" name="dateRange" placeholder="Date">
										<img src="images/calendar-icon.svg" class="calendar svg">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 col-lg-3 text-center">
						<span class="profileImgLarge" style="display:inline-block;">
							<img src="images/photo-camera.svg" class="svg">
							<label class="update">Update <input type="file" hidden></label>
							<img src="images/temp-picture.jpg">
						</span>
						<p>Client Number: <strong>SE2494483</strong></p>
						<h5 class="text-left inPageLinksTitle">Service User Hub</h5>
						<ul class="inPageLinks list-unstyled text-left">
							<li><a href="#">DOLS <small>[ Active till - 12.03.2018 ]</small></a></li>
							<li><a href="#">DNAR <small>[ No DNAR in place ]</small></a></li>
							<li><a href="#">Allergies <small>[ Calcifediol ]</small></a></li>
							<li><a href="#">POA / NOK</a></li>
							<li><a href="#">SOVA</a></li>
						</ul>
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

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="js/datepicker-2.1.25.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
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