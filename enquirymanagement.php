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
				<li><a href="#">Admin</a></li>
				<li><a href="#">Enquiry Management</a></li>
			</ul>
			<span class="title">
				<img src="images/flyer.png" alt=""> Overview
			</span>
		</div>

		<div class="carehome">
			<span class="occupency">
				<small>Occupency</small> 54 / 70 (<strong>77</strong>%)
			</span>
			<span class="carehomeinfo">
				<i>Currently Managing</i>
				Care Home 1
			</span>
			<a href="#">Add Enquiry</a>
		</div>

		<div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
			<form class="search" style="margin-left:10px;">
				<div class="byStaff">
					<input type="text" name="staffname" id="staffname" placeholder="Search by keyword">
					<button>search</button>
				</div>

				<span class="filters">Filters</span>

				<div class="allFilters">
					<ul class="list-unstyled">
						<li>
							<div class="form-group">
								<label for="">Choose Service User</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1">Service User 1</option>
									</select>
								</div>
							</div>
						</li>
					</ul>

					<button class="green">Search</button> <button>Reset Filters</button>
				</div>
			</form>
		</div>
	</section>

	<section class="contentBody noFooter noBg">
		<div class="enquiryoverview">
			<div class="overviewdetail">
				<div class="enquirystatus">
					<ul class="list-unstyled clearfix">
						<li>
							<article> Total Enquiries [pvt.]
							<span>12 [03]</span>
							</article>
						</li>
						<li>
							<article> Enquiring
							<span>12</span>
							</article>
						</li>
						<li>
							<article> Upcoming Viewings
							<span>12</span>
							</article>
						</li>
						<li>
							<article> Viewed
							<span>12</span>
							</article>
						</li>
						<li>
							<article> Pre-admission Accessment
							<span>12</span>
							</article>
						</li>
						<li>
							<article> Converted <small>(Last 7 days)</small>
							<span>12</span>
							</article>
						</li>
						<li>
							<article> Closed <small>(Last 7 days)</small>
							<span>12</span>
							</article>
						</li>
					</ul>
				</div>

				<div class="enquirydetail">
					<ul class="grouptabs list-unstyled">
						<li id="enquiry" class="active">
							<span>Enquiries</span>
						</li>
						<li id="closed">
							<span>Closed Entries</span>
						</li>
					</ul>

					<ul class="overviewhistory list-unstyled clearfix">
						<li id="enquirybox" class="active">
							<ul class="list-unstyled clearfix">
								<li>
									<i>Enquiry Date</i>
									18-07-2018
								</li>
								<li>
									<i>Added By (Staff)</i>
									Rishi R.
								</li>
								<li>
									<i>Service User (Prospect)</i>
									John Smith
								</li>
								<li>
									<i>Funding Type</i>
									L.A
								</li>
								<li>
									<i>Current Residency</i>
									Hospital
								</li>
								<li>
									<i>Status</i>
									Active
								</li>
								<li>
									<a href="#"></a>
								</li>
								<li>
									<i>Comment</i>
									Etiam tincidunt mi eget dolor volutpat, sit amet tincidunt lorem lobortis. Aliquam suscipit porttitor lectus... 
								</li>
							</ul>
						</li>
						<li id="closedbox">Closed Entries</li>
					</ul>
				</div>

				<div class="paging">
					<ul class="list-unstyled">
						<li></li>
						<li class="highlight">1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
						<li>6</li>
						<li>7</li>
						<li></li>
					</ul>

					<div class="select">
						<select name="perPage" id="perPage">
							<option value="perPage">50 per page</option>
						</select>
					</div>

					<div class="select">
						<select name="sortBy" id="sortBy">
							<option>Sort By</option>
						</select>
					</div>

					<button class="btn desc active"></button>
					<button class="btn asc"></button>
				</div>
				
				<div class="enquiryfilter">
					<div class="scrollArea">
						<form class="clearfix">
							<span>Filters</span>
							<div class="form-group">
								<input type="text" placeholder="Search By Keyword">
							</div>
							<div class="form-group">
								<div class="select">
									<select name="home" id="home">
										<option value="home">Select Home</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="select">
									<select name="addedby" id="addedby">
										<option value="addedby">Added By</option>
									</select>
								</div>
							</div>
							<div class="form-group sortby">
								<div class="select">
									<select name="sortBy" id="sortBy">
										<option value="sortBy">Sort By</option>
									</select>
								</div>
								<button class="btn desc active"></button>
								<button class="btn asc"></button>
							</div>
							<div class="form-group">
								<input type="text" placeholder="08-07-2021 - 10-08-2021" class="calender">
							</div>
							<button class="btn">Search</button>
							<button class="btn transparent">Reset</button>							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('.filters').on('click', function(){
			$('.allFilters').slideToggle();
		});

		$('.grouptabs li').on('click', function(){
			var t = $(this).attr('id');
			$('.grouptabs li').removeClass('active');
			$(this).addClass('active');

			$('.overviewhistory li').removeClass('active');
			$('#' + t + 'box').addClass('active');
		});
	</script>
</body>

</html>