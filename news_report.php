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
				<li><a href="#">News</a></li>
				<li>Current News Score</li>
			</ul>
			<span class="title"><img src="images/journal.png"> Current News Score</span>
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
		<ul class="search list-unstyled clearfix">
			<li>
				<div class="fieldContainer date">
					<input type="text" name="dateRange" placeholder="Date">
					<img src="images/calendar-icon.svg" class="calendar svg">
				</div>
			</li>
			<li>
				<button type="button" class="searchButton reset">Load</button>
			</li>
		</ul>
		<div class="clearfix">
			<div class="pull-right clearfix" style="margin-top: -50px;">
				<ul class="diseases list-unstyled">                    
					<li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
					<li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
					<li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
					<li class="news"><img src="images/news.svg" class="svg">News <strong>7</strong></li>
				</ul>
				<div class="btn-group">
					<button type="button" class="btn"><img src="images/printing-tool.svg" class="svg">Print</button>
				</div>
			</div>
		</div>
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content">
				
				<div class="news_key">
					<span>News Key</span>
					<ul class="list-unstyled clearfix">
						<li>0</li>
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</div>
				<ul class="user_info list-unstyled">
					<li>Full Name <span>{{service user full name}}</span></li>
					<li>Date of Birth <span>{{D.O.B}}</span></li>
					<li>Date of Admission <span>{{date}}</span></li>
				</ul>
				<br clear="all">
				<p>&nbsp;</p>

				<section class="news_data clearfix">
					<article>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li>Date</li>
								<li>Time</li>
							</ul>
							<ul class="list-unstyled">
								<li>21-07-20</li>
								<li>14:34</li>
							</ul>
							<ul class="list-unstyled">
								<li>21-07-20</li>
								<li>15:34</li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
								<li></li>
							</ul>
						</div>
						
					</article>

					<article>
						<div class="module">
							<span class="main_category">a + b</span>
							<span class="module_name">Respiration</span>
							<small>Breaths / min</small>
						</div>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0 circle"><b>123</b></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0 circle"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3">3</li>
								<li class="color2">2</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color1">1</li>
								<li class="color3">3</li>
							</ul>
						</div>
						
					</article>

					<article>
						<div class="module">
							<span class="main_category">a + b</span>
							<span class="module_name">SpO<sub>2</sub> Scale 1</span>
							<small>Oxygen Saturation (%)</small>
						</div>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1 circle"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0">0</li>
								<li class="color1">1</li>
								<li class="color2">2</li>
								<li class="color3">3</li>
							</ul>
						</div>
						
					</article>

					<article>
						<div class="module">
							<span class="main_category">SpO<sub>2</sub> Scale 2</span>
							<span class="module_name">Oxygen Saturation (%)</span>
							<small>Use scale 2 if target range is 88 - 92% e.g. in hypercapnic respiratory failure. Only use scale 2 under the direction of a qualified clinitian.</small>
						</div>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2 circle"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3">3</li>
								<li class="color2">2</li>
								<li class="color1">1</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color1">1</li>
								<li class="color2">2</li>
								<li class="color3">3</li>
							</ul>
						</div>
						
					</article>

					<article>
						<div class="module">
							<span class="main_category">Air or Oxygen?</span>
						</div>
						<div class="columns clearfix">
							
							<ul class="list-unstyled">
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0 circle"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color2"></li>
								<li class="color0"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0">0</li>
								<li class="color2">2</li>
								<li class="color0">0</li>
							</ul>
						</div>
						
					</article>

					<article class="BP">
						<div class="module">
							<span class="main_category">c</span>
							<span class="module_name">Blood Pressure</span>
							<small>mmHg</small>
							Score uses systolic BP only
						</div>
						<div class="columns clearfix">
							<div class="gsvg">
								<svg class="thisvg"></svg>
							</div>
							<ul class="list-unstyled">
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0 circle"><span></span><b>HEL</b></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3 circle_end"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2 circle"><span></span></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3 circle_end"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3 circle"><span></span></li>
								<li class="color0"></li>
								<li class="color0 circle_end"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3">3</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color1">1</li>
								<li class="color2">2</li>
								<li class="color3">3</li>
								<li class="color3">3</li>
								<li class="color3">3</li>
								<li class="color3">3</li>
								<li class="color3">3</li>
							</ul>
						</div>
						
					</article>

					<article>
						<div class="module">
							<span class="main_category">c</span>
							<span class="module_name">Pulse</span>
							<small>Breats / min</small>
						</div>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1 circle"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3"></li>
								<li class="color2"></li>
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color3">3</li>
								<li class="color2">2</li>
								<li class="color2">2</li>
								<li class="color1">1</li>
								<li class="color1">1</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color1">1</li>
								<li class="color3">3</li>
								<li class="color3">3</li>
							</ul>
						</div>
						
					</article>

					<article>
						<div class="module">
							<span class="main_category">d</span>
							<span class="module_name">Conciousness</span>
							<small>Score for NEW</small>
							Onset of confusion <small>(No score if chronic)</small>
						</div>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0 circle"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color0">0</li>
								<li class="color3">3</li>
								<li class="color3">3</li>
								<li class="color3">3</li>
								<li class="color3">3</li>
							</ul>
						</div>
						
					</article>

					<article >
						<div class="module">
							<span class="main_category">e</span>
							<span class="module_name">Temperature</span>
							<small>C</small>
						</div>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
								<li>≥220</li>
								<li>201 - 219</li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0 circle"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2"></li>
								<li class="color1"></li>
								<li class="color0"></li>
								<li class="color0"></li>
								<li class="color1"></li>
								<li class="color3"></li>
							</ul>
							<ul class="list-unstyled">
								<li class="color2">2</li>
								<li class="color1">1</li>
								<li class="color0">0</li>
								<li class="color0">0</li>
								<li class="color1">1</li>
								<li class="color3">3</li>
							</ul>
						</div>
						
					</article>

					<article class="extended">
						<div class="module">
							Frequency of Monitoring	
						</div>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li><strong>12</strong></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
						</div>
					</article>

					<article class="extended">
						<div class="module">
							News Total
						</div>
						<div class="columns clearfix">
							<ul class="list-unstyled">
								<li><strong>2</strong></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
							<ul class="list-unstyled">
								<li></li>
							</ul>
						</div>
					</article>
				</section>
				<p>&nbsp;</p>
				<div class="row">
					<div class="col-md-3 inBodyForm">
						<div class="form-group">
							<label>Notify Head Office</label>
							<span class="toggles fixed">
								<input type="checkbox" name="eSign" id="eSign" class="ios-toggle">
								<label for="eSign" class="checkbox-label" data-off="NO" data-on="YES"></label>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contentFooter">
		<div class="row">
			<div class="col-md-6">
				<button type="button">Back</button> <button type="button" class="completed">Save</button>
			</div>
			<div class="col-md-6 text-right">
				<button type="button" class="news_scores"><img src="images/information.svg" class="svg" alt=""> News Scoring</button>
			</div>
		</div>
	</section>

	<div class="news_scoring">
		<section>
			<article>
				<table>
					<tr>
						<th>NEW Score</th>
						<th>Frequency of Monitoring</th>
						<th>Clinical Response</th>
					</tr>
					<tr>
						<td>0</td>
						<td>12 Hours</td>
						<td>
							<ul>
								<li>
									Continue routine NEWS monitoring
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>1 - 4</td>
						<td>Minimum 4 - 6 hourly</td>
						<td>
							<ul>
								<li>
										Inform registered nurse, who must assess the patient
								</li>
								<li>
									Registered nurse decides whether increased frequency of monitoring and/or escalation of care is required
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>1 - 4 but 3 in a single parameter</td>
						<td>Minimum 1 hourly</td>
						<td>
							<ul>
								<li>
									Registered nurse to inform medical team caring for the patient, who will review and decide whether escalation of care is necessary
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>≥ 5</td>
						<td>Minimum 1 hourly</td>
						<td>
							<ul>
								<li>
									Registered nurse to immediately inform the medical team caring for the patient
								</li>
								<li>
									Registered nurse to request urgent assessment by a clinician or team with core competencies in the care of acutely ill patients
								</li>
								<li>
									Provide clinical care in an environment with monitoring facilities
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>≥ 7</td>
						<td>N/A</td>
						<td>
							<ul>
								<li>
									Registered nurse to immediately inform the medical team caring for the patient – this should be at least at specialist registrar level
								</li>
								<li>
									Emergency assessment by a team with critical care competencies, including practitioner(s) with advanced airway management skills
								</li>
								<li>
									Consider transfer of care to a level 2 or 3clinical care facility, ie higher-dependency unit or ICU
								</li>
								<li>
									Clinical care in an environment with monitoring facilities
								</li>
							</ul>
						</td>
					</tr>
				</table>
			</article>
		</section>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
	<script>

		$('.news_scores').on('click', function(){
			$('.news_scoring').addClass('showit');
		});

		$('.news_scoring').on('click', function(){
			$(this).removeClass('showit');
		});

		var IDs = [];
		var WID = 80;

		$('.circle', $('.BP')).each(function () {
			var position = $(this).position();
			var height = $(this).height();
			var width = $(this).width();
			var parent = $(this).parent();

			var parentposition = $(parent).position();
			var lefts = parentposition.left - WID + (width / 2);
			var tops = position.top + (height / 2);
			console.log($(this));
			IDs.push([lefts, tops]);


			var end = parent.find('.circle_end');

			if (end.length > 0) {
				var diff = end.position().top - position.top;
				$(this).find('span').css('height', diff);
			}

			
		});

		// $('.news_data .circle').function () {
		// 	var position = $(this).offset();

		// 	var height = $(this).height();
		// 	var width = $(this).width();
		// 	$(this).children('b').css({ "left":position.left, "top":position.top, "height":height, "width":width });
		// 	$(this).children('b').addClass('show');
		// });
		

		var line = '<polyline style="fill:none;stroke:#CB0000;stroke-width:3"  points="';
		for (var i = 0; i < 3; i++) {
			line = line + IDs[i][0] + "," + IDs[i][1] + " ";
		}
		line = line + '" />';
		$(".thisvg").html(line);
	</script>
</body>

</html>