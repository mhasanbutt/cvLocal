<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
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
				<li><a href="#">Care</a></li>
				<li><a href="#">Care Plan</a></li>
			</ul>
			<span class="title">eConsent</span>
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
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content">
				<div class="row">
					<div class="col-md-8 col-lg-9">
						<ul class="diseases list-unstyled">
							<li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
							<li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
							<li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
						</ul><br>
						<hr>
						<form class="inBodyForm form-horizontal">
							<div class="form-group">
								<label class="col-md-4 control-label">eConsent Request</label>
								<div class="col-md-6 col-lg-4">
									<div class="select">
										<select>
											<option>Bed Rail</option>
										</select>
										<img src="images/left-arrow.svg" class="svg">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Email <small>(Next of Kin)</small></label>
								<div class="col-md-6 col-lg-4">
									<span class="toggles fixed">
										<input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
										<label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
									</span>
									<input type="email" placeholder="example@domainname.com">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Email Admin</label>
								<div class="col-md-6 col-lg-4">
									<span class="toggles fixed">
										<input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
										<label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
									</span>
									<input type="email" placeholder="example@domainname.com">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Send Via App</label>
								<div class="col-md-6 col-lg-4">
									<span class="toggles fixed">
										<input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
										<label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Phone Call <small>(Via VoIP)</small></label>
								<div class="col-md-8">
									<span class="toggles fixed">
										<input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
										<label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
									</span>
									<textarea type="email" placeholder="Notes"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Physical Copy <small>(Printed)</small></label>
								<div class="col-md-6 col-lg-4">
									<span class="toggles fixed pull-left">
										<input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
										<label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
									</span>
									<span class="uploadedImg"><a href="#"><img src="images/pictures.svg" class="svg"> Selected File: {{filename}}</a></span>

									<div class="progress">
										<div class="progress-bar" content="5%"></div>
									</div>

									<br>
									<label class="file disabled">Upload<input type="file" class="hidden"></label>
									<button class="print disabled">Print</button>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Approved Via eSign</small></label>
								<div class="col-md-6 col-lg-4">
									<span class="toggles fixed">
										<input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
										<label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
									</span><br>
									<label class="file">Upload<input type="file" class="hidden"></label>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 col-lg-3 text-center">
						<span class="profileImgLarge">
							<img src="images/temp-picture.jpg">
						</span>
						<div class="well well-sm">
							<div class="scrollArea">
								<article>
									<p><strong>DEPRIVATION OF LIBERTY (DoLS)</strong></p>
									<p>UNIT:  <strong>Oxford Street</strong><br>
									Name of Resident:  <strong>Terrance Edwards</strong><br>
									D.O.B:    <strong>05-04-1976</strong></p>
									<p>The Deprivation of Liberty Safeguards Act (2008) is a supplement to the Mental Capacity Act.  The safeguards define a code of practice for the authorisation and review of any action that deprives a person of their liberty.  In all cases authorisation must be sought from the local authority who then appoints independent professional assessors.  If the application is refused by the assessors, alternative and less restrictive treatments or actions must be used instead.  Successful applications authorise the treatment or action resulting in DoLS for a maximum of 12 months.</p>
									<p>Quisque sem nunc, dignissim vitae urna at, porttitor volutpat mauris. Nam tincidunt a diam ac dapibus. Duis nec rhoncus ipsum. Mauris volutpat euismod bibendum. Praesent sollicitudin erat non lorem interdum, ut sodales diam vehicula. Maecenas consectetur cursus dui eget dignissim. Duis sed luctus turpis. Quisque placerat egestas lacus, mollis condimentum dolor viverra aliquam.</p>
									<p>Sed venenatis sollicitudin nisi, eget mattis eros blandit quis. Sed in elit venenatis, fermentum risus ac, molestie dolor. Pellentesque feugiat odio ornare nunc viverra, vitae semper enim rutrum. Pellentesque ac gravida quam. Duis egestas non libero eu luctus. Donec metus diam, convallis condimentum placerat id, porta iaculis nisi. Suspendisse dictum, diam non vestibulum varius, dui ante commodo elit, non luctus nisi quam pretium ante. Proin eu nisi urna. Vestibulum sit amet velit et ipsum iaculis dapibus nec ut odio. Etiam semper, erat non consequat ullamcorper, ipsum metus laoreet orci, a ullamcorper odio massa et diam. Sed malesuada a augue vitae accumsan.</p>
									<p>Pellentesque vitae nunc lacus. Proin ornare ligula sed nibh facilisis sodales. Donec consectetur auctor erat, nec viverra eros eleifend et. Aliquam orci ipsum, convallis aliquam nunc id, tincidunt maximus neque. Morbi dolor lacus, euismod ut pretium a, euismod et orci. Integer in tortor at elit aliquam posuere. Cras justo velit, congue quis quam vitae, hendrerit vulputate felis. Maecenas vulputate tortor diam, vitae egestas lorem egestas nec. Phasellus pharetra velit vitae sodales tempor. Mauris a faucibus purus, eget lobortis leo. Ut eget posuere tellus, ut condimentum massa. Curabitur dictum, est sit amet scelerisque faucibus, felis purus gravida elit, id viverra libero eros et arcu. Donec finibus rutrum nunc eu aliquam. Etiam gravida pulvinar nulla, a rutrum ex porta in. Integer placerat nibh felis.</p>
								</article>
							</div>
						</div>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>
	
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
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
		$('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY'));
		});

		$('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
			$(this).val('');
		});
	</script>
</body>
</html>
