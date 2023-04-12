<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Admin</a></li>
				<li><a href="#">Service User initial Enquiry</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/service-users.png" alt="Service User"> Service User Conversion Summary</span>
		</div>
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content">
				<h3>
					15-15-Tim Sherman, is converted into service user successfully.
				</h3>
				<div class="row">
					<div class="col-md-6">
						<h5>Following actions are already taken;</h5>
						<ul class="conversionList list-unstyled">
							<li class="done">
								Pre Admission Asssessment PDF Generated.
							</li>
							<li class="done">
								Profile created 97% Completed.
							</li>
							<li class="done">
								service user contacts copied
							</li>
							<li class="warning">
								Follow up for the following missing modules are created.
							</li>
							<li class="done">
								Short term care plans created.
							</li>
						</ul>
						<h4>
							<span>Alerts</span>
						</h4>
						<ul class="convertedAlerts list-unstyled">
							<li class="notDone">
								<span class="title">Risk Assessment</span>
								<span class="toggles">
									<input type="checkbox" class="ios-toggle" name="riskassess" id="riskassess" hidden>
									<label for="riskassess" class="checkbox-label" data-off="NO" data-on="YES"></label>
								</span>
							</li>
							<li class="notDone">
								<span class="title">Scored Assessment</span>
								<span class="toggles">
									<input type="checkbox" class="ios-toggle" name="scoredassess" id="scoredassess" hidden>
									<label for="scoredassess" class="checkbox-label" data-off="NO" data-on="YES"></label>
								</span>
							</li>
							<li class="notDone">
								<span class="title">MCA</span>
								<span class="toggles">
									<input type="checkbox" class="ios-toggle" name="mca" id="mca" hidden>
									<label for="mca" class="checkbox-label" data-off="NO" data-on="YES"></label>
								</span>
							</li>
							<li class="Done">
								<span class="title">Mental Assessment</span>
								<span class="toggles">
									<input type="checkbox" class="ios-toggle" name="mental" id="mental" hidden>
									<label for="mental" class="checkbox-label" data-off="NO" data-on="YES"></label>
								</span>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<h5>
							Following actions are required;
						</h5>
						<ul class="conversionList list-unstyled">
							<li data-number="1" class="required">
								assigning room to service user requierd
							</li>
						</ul>
						<h4>
							<span>Alerts</span>
						</h4>
						<ul class="convertedAlerts list-unstyled">
							<li class="required">
								<span class="title">DOLS</span>
								<span class="toggles">
									<input type="checkbox" class="ios-toggle" name="dols" id="dols" hidden>
									<label for="dols" class="checkbox-label" data-off="NO" data-on="YES"></label>
								</span>
							</li>
							<li class="required">
								<span class="title">DNACPR</span>
								<span class="toggles">
									<input type="checkbox" class="ios-toggle" name="dnacpr" id="dnacpr" hidden>
									<label for="dnacpr" class="checkbox-label" data-off="NO" data-on="YES"></label>
								</span>
							</li>
							<li class="required">
								<span class="title">UTI</span>
								<span class="toggles">
									<input type="checkbox" class="ios-toggle" name="uti" id="uti" hidden>
									<label for="uti" class="checkbox-label" data-off="NO" data-on="YES"></label>
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button>
			</div>
        </div>
    </section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
