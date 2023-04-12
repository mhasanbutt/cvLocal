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

	<section class="dashboard">
		<div class="user">
			<span class="name">Thomson Edwards <br><small>NEWS 2 Score: <strong>7</strong></small></span>
			<ul class="list-unstyled pull-right">
				<li>
					Service User Number: <strong>AAED2</strong>
				</li>
				<li>
					Location: <strong>Oxford 3</strong>
				</li>
				<li class="age">
					Date of Birth: <strong>28-02-1947 <span>71</span></strong>
				</li>
			</ul>
		</div>
		<div class="newSUDash">
			<div class="col1">
				<div class="pictureLinks">
					<span class="dnar">dnar</span>
					<img src="images/temp-picture.jpg" alt="{{Service User Name}}">
				</div>
				<section>
					<div class="title aCentre">Alert Centre <a href="#" class="external"><img
								src="images/external-link.svg" alt="Open" class="svg"></a></div>
					<div class="scroll">
						<div class="scrollArea">
							<ul class="list-unstyled">
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									Blood Pressure
								</li>
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									Blood Pressure
								</li>
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									Blood Pressure
								</li>
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									Blood Pressure
								</li>
							</ul>
						</div>
					</div>
				</section>
				<section>
					<div class="title rNotes">Resident Notes <a href="#" class="add"><img src="images/add.svg"
								alt="Open" class="svg"></a> <a href="#" class="external"><img
								src="images/external-link.svg" alt="Open" class="svg"></a></div>
					<div class="scroll">
						<div class="scrollArea">
							<ul class="noIcons list-unstyled">
								<li>
									POA Detail Available
								</li>
								<li>
									Type of Pad
								</li>
								<li>
									Phasellus bibendum auctor ante
								</li>
								<li>
									Blood Pressure
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>
			<div class="col2">
				<section>
					<div class="scroll full">
						<div class="scrollArea">
							<ul class="list-unstyled">
								<li>
									<a href="#">
										<span class="img"><img src="images/report.png" alt=""></span>
										<span class="module">Summary</span>
									</a>
								</li>
								<li>
									<a href="#" class="percent">
										<svg class="cent" id="svg" viewbox="0 0 150 150">
											<circle cx="50" cy="50" r="45" fill="#FDB900" />
											<path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff" stroke-dasharray=" ,50.04" d="M50 10
												a 40 40 0 0 1 0 80
												a 40 40 0 0 1 0 -80" />
											<text x="50" y="45" text-anchor="middle" dy="7" font-size="30">40%</text>
											<text x="50" y="60" text-anchor="middle" dy="7" font-size="11">completed</text>
										</svg>
										<span class="module">Admission Requirements</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<div class="healthStats">
					<div class="title hStats">Health Stats</div>
					<div class="scroll">
						<div class="scrollArea">
							<ul class="list-unstyled">
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									<div class="module">
										Behavioural Concerns &amp; Sovas
									</div>
								</li>
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									<div class="module">
										Behavioural Concerns &amp; Sovas
									</div>
								</li>
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									<div class="module">
										Behavioural Concerns &amp; Sovas
									</div>
								</li>
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									<div class="module">
										Behavioural Concerns &amp; Sovas
									</div>
								</li>
								<li>
									<span class="icon"><img src="images/icon1.png" alt=""></span>
									<div class="module">
										Behavioural Concerns &amp; Sovas
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col3">
				<div class="workers">
					<div class="title kWorkers">Key Workers</div>
					<p>
						Aron Aurel, Jillian Evlat, Aron Aurel, Mona Lizza, Tim Sharman
					</p>
				</div>
				<section>
					<ul class="list-unstyled tabLegends">
						<li>Reviewed</li>
						<li>Due to Review</li>
						<li>Not Enough Detail</li>
					</ul>
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#careplan" aria-controls="careplan" role="tab"
								data-toggle="tab">Care Plans</a></li>
						<li role="presentation"><a href="#rManagement" aria-controls="rManagement" role="tab"
								data-toggle="tab">Risk Management</a></li>
						<li role="presentation"><a href="#sAssessment" aria-controls="sAssessment" role="tab"
								data-toggle="tab">Scored Assessment</a></li>
						<li role="presentation"><a href="#mca" aria-controls="mca" role="tab" data-toggle="tab">MCA</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="careplan">
							<div class="scrollArea">
								<ul class="list-unstyled">
									<li>
										<span class="icon"><img src="images/icon1.png" alt=""></span>
										<div class="module">
											Behavioural Concerns &amp; Sovas
										</div>
										<span class="date">03.03.2019</span>
									</li>
									<li>
										<span class="icon"><img src="images/icon1.png" alt=""></span>
										<div class="module">
											Behavioural Concerns &amp; Sovas
										</div>
										<span class="date">03.03.2019</span>
									</li>
									<li>
										<span class="icon"><img src="images/icon1.png" alt=""></span>
										<div class="module">
											Behavioural Concerns &amp; Sovas
										</div>
										<span class="date">03.03.2019</span>
									</li>
									<li>
										<span class="icon"><img src="images/icon1.png" alt=""></span>
										<div class="module">
											Behavioural Concerns &amp; Sovas
										</div>
										<span class="date">03.03.2019</span>
									</li>
									<li>
										<span class="icon"><img src="images/icon1.png" alt=""></span>
										<div class="module">
											Behavioural Concerns &amp; Sovas
										</div>
										<span class="date">03.03.2019</span>
									</li>
									<li>
										<span class="icon"><img src="images/icon1.png" alt=""></span>
										<div class="module">
											Behavioural Concerns &amp; Sovas
										</div>
										<span class="date">03.03.2019</span>
									</li>
								</ul>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="rManagement">...</div>
						<div role="tabpanel" class="tab-pane" id="sAssessment">...</div>
						<div role="tabpanel" class="tab-pane" id="mca">...</div>
					</div>
				</section>
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