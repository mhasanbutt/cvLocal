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
		.form-section{
			position: relative;
			padding-top: 16px;
			clear: both;
			margin-bottom: 20px;
			float: left;
			width: 100%;
		}
		.form-section .title{
			position: absolute;
			top: 0px;
			left: 10px;
			font-family: 'Roboto', sans-serif;
			font-size: 15px;
			border-radius: 4px;
			overflow: hidden;
			display: inline-block;
			background-color: #F8931D;
			z-index: 99;
			padding: 5px 15px;
			color: #fff;
		
		}
		/*.form-section .title span{
			position: relative;
			z-index: 999;
			padding: 5px 15px;
			text-align: center;
			float: left;
			background-color: #F8931D;
		}
		.form-section .title:after{
			content: "";
			left: 0;
			top: 0;
			right: 0;
			border-radius: 4px 4px 0 0;
			background-color: #fff;
			bottom: 0;
			height: 20px;
			position: absolute;
			z-index: -1;
			border: 1px solid #F8931D;
		}*/
		.form-section-inner {
			padding: 25px 15px 15px 15px;
			background: #fff;
			border-radius: 4px;
			float: left;
			width: 100%;
			position: relative;

		}
		
	</style>
	<section class="contentBody noBg">
		<div class="scrollArea ">
			<div class="content specialHR">
				<form class="inBodyForm">
					<div class="row">
						<div class="col-md-3 pull-right">
							<div class="form-section">
								<div class="title"><span>Upload Photo</span></div>
								<div class="form-section-inner">
									<span class="profileImgLarge " style="display: block; margin: auto; margin-bottom: 20px;">
										<img src="images/photo-camera.svg" class="svg">
										<label class="update">Upload <input type="file" hidden></label>
										<img src="images/temp-picture.jpg">
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="form-section">
								<div class="title"><span>Personal Information</span></div>
								<div class="form-section-inner">
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
									
								</div>
							</div>
							
							<div class="form-section">
								<div class="title"><span>Official Detail</span></div>
								<div class="form-section-inner">
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