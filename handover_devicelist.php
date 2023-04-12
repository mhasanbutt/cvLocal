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
				<li><a href="#">Care</a></li>
				<li><a href="#">Handover</a></li>
				<li>New handover</li>
			</ul>
			<span class="title"><img src="images/handover.png"> New handover</span>
		</div>
		<ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer select disabled">
                    <select>
                        <option>Floor</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
			<li>
				<button type="button" class="searchButton reset">Change Floor</button>
			</li>
        </ul>
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content">
				<ul class="trainingStats clearfix list-unstyled title" data-content="Housekeeping Tasks">
					<li>
						<span>49</span> Pending Cleaning
					</li>
					<li>
						<span>0</span> Missed Cleaning
					</li>
					<li>
						<span>0</span> CLeaning Not Done
					</li>
					<li>
						<span>0</span> Completed Cleaning
					</li>
					<li>
						<span>0</span> Cleaning Not Required
					</li>
				</ul>
				<br clear="both">
				<hr>
				<div class="row">
					<div class="col-md-9">
						<h4>Devices List</h4>
						<div class="row">
							<div class="col-md-3">
								<article class="device_status">
									Downing Street 3<br>
									<div class="button_group">
										<span class="radio_box">
											<input type="radio" id="ds3s" name="downing" hidden>
											<label for="ds3s">S</label>
										</span>
										<span class="radio_box">
											<input type="radio" id="ds3c" name="downing" hidden>
											<label for="ds3c">C</label>
										</span>
										<span class="radio_box">
											<input type="radio" id="ds3m" name="downing" hidden>
											<label for="ds3m">M</label>
										</span>
									</div>
								</article>
							</div>
							<div class="col-md-3">
								<article class="device_status">
									Aldgate 4<br>
									<div class="button_group">
										<span class="radio_box">
											<input type="radio" id="a4s" name="aldgate" hidden>
											<label for="a4s">S</label>
										</span>
										<span class="radio_box">
											<input type="radio" id="a4c" name="aldgate" hidden>
											<label for="a4c">C</label>
										</span>
										<span class="radio_box">
											<input type="radio" id="a4m" name="aldgate" hidden>
											<label for="a4m">M</label>
										</span>
									</div>
								</article>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="roomkey">
							<label>Medicine Room key</label>
							<span class="toggles">
								<input type="checkbox" name="eSign" id="eSign" class="ios-toggle">
								<label for="eSign" class="checkbox-label" data-off="NO" data-on="YES"></label>
							</span>
						</div>

						<p>&nbsp;</p>

						<ul class="list-unstyled">
							<li content="s">Currently with staff member</li>
							<li content="c">Charging or in storage room</li>
							<li content="m">Currently missing</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contentFooter">
		<div class="row">
			<div class="col-md-6">
				<button type="button">Back</button> <button type="button" class="save">Save &amp; Continue</button>
			</div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>