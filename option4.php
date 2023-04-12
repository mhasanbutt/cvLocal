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
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<?php include("header.php");?>

	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Reception</a>
				</li>
			</ul>
			<span class="title">Employee Summary</span>
		</div>
	</section>

	<style>
		.form-latest-view-outer {
			width: 100%;
		}

		.form-latest-view {
			width: 100%;
			background: #fff;
			float: left;
			padding: 15px 15px 15px 15px;
			border-radius: 3px;
			border-top: none;
			position: relative;
		}
		.form-latest-view .row{
			clear: both;
		}
		.form-latest-view .section-title:after{
			content: "";
			border-bottom: double #F8931D;
			position: absolute;
			left: 0;
			right: auto;
			width: 15px;
			top: 13px;
			z-index: 999;
		}
		.form-latest-view .section-title:before{
			content: "";
			border-bottom: double #ccc;
			position: absolute;
			left: 0;
			right: 0;
			top: 13px;
		}
		.form-latest-view .section-title {
			float: left;
			position: relative;
			padding: 0px 30px 3px 0px;
			margin-bottom: 10px;
			font-family: "Roboto Condensed",sans-serif;
			font-weight: 500;
			font-size: 18px;
			color: #F8931D;
			width: 100%;
		}
		.form-latest-view .section-title span{
			background: #fff;
			position: relative;
			margin-left: 15px;
			padding: 0px 7px;

		}
		.form-latest-view label{
			text-transform:capitalize ;
			color: #666;
			font-size: 13px;
		}
		.form-latest-view select, .form-latest-view input{
			border-radius: 4px !important;
			box-shadow: 0px 0px 8px #e7e7e7 inset;
			border: 1px solid #DDD !important;

		}
	</style>
	<section class="contentBody noBg">
		<div class="scrollArea ">
			<div class="content specialHR">
				<form class="inBodyForm">


					<div class="form-latest-view-outer">
						<div class="form-latest-view">
							<div class="row">
								<div class="col-md-3 pull-right">
									<span class="section-title"><span>Upload Photo</span></span>
									<span class="profileImgLarge" style="display:inline-block;">
										<img src="images/photo-camera.svg" class="svg">
										<label class="update">Upload <input type="file" hidden></label>
										<img src="images/temp-picture.jpg">
									</span>
								</div>
								<div class="col-md-9">
									<div class="section-title"><span>Personal Information</span></div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Title</label>
												<div class="select">
													<select>
														<option>Mr.</option>
														<option>Mrs.</option>
														<option>Miss</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group" hidden="">
												<label>&nbsp;</label>
												<div class="select">
													<select>
														<option>Mr.</option>
														<option>Mrs.</option>
														<option>Miss</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>First Name</label>
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
												<label>Known As</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Marital Status</label>
												<div class="select">
													<select>
														<option>Married</option>
														<option>Single</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Gender</label>
												<div class="select">
													<select>
														<option>Male</option>
														<option>Female</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Nationality</label>
												<div class="select">
													<select>
														<option>British</option>
														<option>Pakistan</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Ethinc Origin</label>
												<div class="select">
													<select>
														<option>Choose Ethnicity</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Religion</label>
												<div class="select">
													<select>
														<option>Christian</option>
														<option>Islam</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group date">
												<label>Date of Birth</label>
												<input type="text">
												<img src="images/calendar-icon.svg" class="svg">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Telephone</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Mobile</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Email</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Address</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Postcode</label>
												<input type="text">
											</div>
										</div>
									</div>
									<div class="section-title"><span>Official Detail</span></div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Department</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Position(s)</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Weekly Hours</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Payrate / Salary</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Weekend / Bank Holiday Rate</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Overnight Rate</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Holiday Entitlement</label>
												<input type="text">
											</div>
										</div>
									</div>

									<div class="section-title"><span>Login Detail</span></div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="">Username</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="from-group">
												<label for="">Password</label>
												<input type="password">
											</div>
										</div>
										<div class="col-md-4">
											<div class="from-group">
												<label for="">Retype Password</label>
												<input type="password">
											</div>
										</div>
									</div>

									<div class="section-title"><span>Account Summary</span></div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>NI Number</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Name of bank</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Sort Code</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Account No.</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Account Holder Name</label>
												<input type="text">
											</div>
										</div>
									</div>

									<div class="section-title"><span>Proof of Identity</span></div>

									<div class="row">
										<div class="col-md-4">
											<section class="IDInfo">
												<span>Passport</span>
												<span class="toggles fixed" style="padding: 0px;">
													<input type="checkbox" name="consentPatient" id="NOK" class="ios-toggle">
													<label for="NOK" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
												<div class="form-group date">
													<label>Issue Date</label>
													<input type="text" value="12-12-2014" disabled class="disabled">
													<img src="images/calendar-icon.svg" class="svg">
												</div>
												<div class="form-group date">
													<label>Expiry Date</label>
													<input type="text" value="12-12-2018"  disabled class="disabled">
													<img src="images/calendar-icon.svg" class="svg">
												</div>
											</section>
										</div>
										<div class="col-md-4">
											<section class="IDInfo">
												<span>ID Card</span>
												<span class="toggles fixed" style="padding: 0px;">
													<input type="checkbox" name="idcard" id="idcard" class="ios-toggle">
													<label for="idcard" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
												<div class="form-group date">
													<label>Issue Date</label>
													<input type="text" value="12-12-2014" class="disabled" disabled>
													<img src="images/calendar-icon.svg" class="svg">
												</div>
												<div class="form-group date">
													<label>Expiry Date</label>
													<input type="text" value="12-12-2018" class="disabled" disabled>
													<img src="images/calendar-icon.svg" class="svg">
												</div>
											</section>
										</div>
										<div class="col-md-4">
											<section class="IDInfo">
												<span>VISA</span>
												<span class="toggles fixed" style="padding: 0px;">
													<input type="checkbox" name="visa" id="visa" class="ios-toggle">
													<label for="visa" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
												<div class="form-group date">
													<label>Issue Date</label>
													<input type="text" value="12-12-2014" class="disabled" disabled>
													<img src="images/calendar-icon.svg" class="svg">
												</div>
												<div class="form-group date">
													<label>Expiry Date</label>
													<input type="text" value="12-12-2018" class="disabled" disabled>
													<img src="images/calendar-icon.svg" class="svg">
												</div>
											</section>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</section>

	<section class="contentFooter">
		<div class="row">
			<div class="col-md-6">
				<button type="button">Back</button>
				<button type="button" class="save">Save</button>
			</div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/jquery.maphilight.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$( 'input[name="dateRange"]' ).daterangepicker( {
			"opens": "left",
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		} );
		$( 'input[name="dateRange"]' ).on( 'apply.daterangepicker', function ( ev, picker ) {
			$( this ).val( picker.startDate.format( 'MM/DD/YYYY' ) + ' - ' + picker.endDate.format( 'MM/DD/YYYY' ) );
		} );

		$( 'input[name="dateRange"]' ).on( 'cancel.daterangepicker', function ( ev, picker ) {
			$( this ).val( '' );
		} );
		$( '.select2' ).select2( {
			multiple: true
		} );
	</script>
</body>

</html>
