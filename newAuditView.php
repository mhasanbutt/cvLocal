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
				<li><a href="#">Audits</a></li>
				<li><a href="#">Auditing Forms</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/media/images/audit_dashboard_icon.png" alt=""> First impressions Audit</span>
		</div>
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content">

				<div class="auditViewForm">
					<div class="row">
						<div class="col-md-10 inBodyForm">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Name of Care Home</label>
										<input type="text" name="" id="">
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label for="">Address of Care Home</label>
										<input type="text" name="" id="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" name="" id="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Position</label>
										<input type="text" name="" id="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Updated By</label>
										<input type="text" name="" id="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Date of Audit</label>
										<input type="text" name="" id="">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label for="">Custom Audit Date</label>
										<span class="toggles fixed">
											<input type="checkbox" name="custom_date" id="custom_date" value="1" class="ios-toggle">
											<label for="custom_date" class="checkbox-label" data-off="NO" data-on="YES"></label>
										</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="">Audit From</label>
										<input type="text" name="" id="">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="">Audit To</label>
										<input type="text" name="" id="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Audit For</label>
										<div class="select">
											<select name="" id="">
												<option value="">Home</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Location</label>
										<div class="select">
											<select name="" id="">
												<option value="">3-3 Leander Lodge</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Date of Next Audit</label>
										<input type="text" name="" id="">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label for="">Spot Audit</label>
										<span class="toggles fixed">
											<input type="checkbox" name="custom_date" id="custom_date" value="1" class="ios-toggle">
											<label for="custom_date" class="checkbox-label" data-off="NO" data-on="YES"></label>
										</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="">Attachment</label>
										<input type="file" name="" id="">
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-2">
							<h4><span>Audit Score</span></h4>
							<div class="statusContainer">
								<div class="status svg-container"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 190 120" class="circliful">undefined<clipPath id="cut-off-bottom"> <rect x="100" y="0" width="100" height="200"></rect> </clipPath><circle cx="100" cy="100" r="57" class="border" fill="none" stroke="#ccc" stroke-width="30" stroke-dasharray="360" stroke-linecap="round" clip-path="url(#cut-off-bottom)" transform="rotate(-90,100,100)"></circle><circle class="circle" cx="100" cy="100" r="57" fill="none" stroke="#3498DB" stroke-width="30" stroke-dasharray="0, 20000" stroke-linecap="round" transform="rotate(-180,100,100)"></circle><circle cx="100" cy="100" r="28.5" fill="none" clip-path="url(#cut-off-bottom)" stroke-linecap="round" transform="rotate(-90,100,100)"></circle>undefined<text class="timer" text-anchor="middle" x="100" y="100" style="font-size: 22px;" fill="#aaa"><tspan class="number">0</tspan><tspan class="percent">%</tspan></text></svg></div>
							</div>
						</div>
					</div>
				</div>

				<p>&nbsp;</p>
				
				<div class="categorySet">
					<span class="categoryTitle">
						Category Name
					</span>

					<div class="row inBodyForm">
						<div class="col-md-6">
							<div class="form-group" style="padding-top:10px;">
								<label for="">
									Criteria Title
									<input type="checkbox" name="" id="actioned" hidden>
									<label for="actioned" data-title="Create Follow Up"></label>
								</label>
								<input type="text" name="" id="" placeholder="Example: Are allergies being recorded?">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group" style="padding-top:10px;">
								<label for="">
									Actioned
								</label>
								<div class="select">
									<select name="" id="">
										<option value="">Choose Option</option>
									</select>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group" style="padding-top:10px;">
								<label for="">
									Due Date
								</label>
								<input type="text" name="" id="" placeholder="Auto Date Picker">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Explanation</label>
								<textarea name="" id="" placeholder="You will be able to complete this section when you complete a new audit"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Comments</label>
								<textarea name="" id=""placeholder="Example: This includes food allergies, medication allergies and any other substances the service user might be allergic to"></textarea>
							</div>
						</div>		
					</div>

					<hr>

					<span class="addCriteria verify"><i></i></span>
				</div>
			</div>
		</div>
	</section>

	<section class="contentFooter">
		<div class="row">
			<div class="col-md-6">
				<button type="button">Back</button> <button type="button" class="save">Save</button>
			</div>
		</div>
	</section>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="js/datepicker-2.1.25.js"></script>
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