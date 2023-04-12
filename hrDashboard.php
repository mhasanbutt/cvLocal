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
				<li><a href="#">HR</a></li>
			</ul>
			<span class="title"><img src="images/hrDashboard-icon.png"> Dashboard</span>
		</div>

		<section class="pull-right text-right" style="padding-right:25px;position:relative;">
			<span class="selectedHome">Your overview for <strong>3-3-Jawa Group</strong></span>
			
			<div class="filtersSearch clearfix" style="padding-right:0;">
				<form class="search" style="margin-left:10px;">
					<div class="byStaff">
						<input type="text" name="staffname" id="staffname" placeholder="Search by staff name">
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
	</section>

	<section class="contentBody noBg noFooter">
		<div class="scrollArea">
			<div class="content">
				<div class="hrdashboard">
					<section class="columns clearfix cols3">
						<article style="height:210px;">
							<span class="title" data-text="Next 14 Days">
								Upcoming Employee Birthdays
							</span>

							<span class="noData">No Data Available</span>
						</article>

						<article style="height:210px;">
							<span class="title" data-text="Last 30 days">
								New Starters
							</span>

							<div class="scrollArea">
								<ul class="list-unstyled records clearfix">
									<li style="width:calc(100% / 3);">
										<span class="title">Name</span>
										John Webb
									</li>
									<li style="width:calc(100% / 3);">
										<span class="title">Position</span>
										12-12-1942
									</li>
									<li style="width:calc(100% / 3);">
										<span class="title">Date of joining</span>
										78
									</li>
								</ul>
							</div>
						</article>

						<article style="height:210px;">
							<span class="title" data-text="Last 30 days">
								New Leavers
							</span>

							<div class="scrollArea">
								<ul class="list-unstyled records clearfix">
									<li style="width:calc(100% / 3);">
										<span class="title">Name</span>
										John Webb
									</li>
									<li style="width:calc(100% / 3);">
										<span class="title">Position</span>
										12-12-1942
									</li>
									<li style="width:calc(100% / 3);">
										<span class="title">Date of leaving</span>
										78
									</li>
								</ul>
							</div>
						</article>
					</section>

					<section class="hrDivide">
						<div class="select">
							Show documents expiring in 
							<select name="" id="">
								<option value="">28 days</option>
							</select>
						</div>

						<div id="id">
							<section class="columns clearfix cols1" style="height: 300px;">
								<article>
									<span class="title">
										Passport / ID Near Expiry
									</span>
									<div class="scrollArea">
										<span class="noData record">No Data Available</span>
									</div>
								</article>
							</section>

							<section class="columns clearfix cols1" style="height: 300px;">
								<article>
									<span class="title">
										Visa / Right To Work Documents Near Expiry
									</span>
									<div class="scrollArea">
										<ul class="list-unstyled records clearfix">
											<li style="width:calc(100% / 8);">
												<span class="title">Company</span>
												Oatlands Homes
											</li>
											<li style="width:calc(100% / 8);">
												<span class="title">Home</span>
												Oatlands Homes
											</li>
											<li style="width:calc(100% / 8);">
												<span class="title">Employee Name</span>
												Oatlands Homes
											</li>
											<li style="width:calc(100% / 8);">
												<span class="title">Position</span>
												Oatlands Homes
											</li>
											<li style="width:calc(100% / 8);">
												<span class="title">Type</span>
												Oatlands Homes
											</li>
											<li style="width:calc(100% / 8);">
												<span class="title">Sub Category</span>
												Oatlands Homes
											</li>
											<li style="width:calc(100% / 8);">
												<span class="title">Date of Expiry</span>
												Oatlands Homes
											</li>
											<li style="width:calc(100% / 8);">
												<span class="title">Expires In</span>
												Oatlands Homes
											</li>
										</ul>
									</div>
								</article>
							</section>

							<section class="columns clearfix cols1" style="height: 300px;">
								<article>
									<span class="title">
										Employee / DBS Checks Near Expiry
									</span>
									<div class="scrollArea">
									<ul class="list-unstyled records clearfix">
										<li style="width:calc(100% / 7);">
											<span class="title">Company</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Home</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Employee Name</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Position</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Type</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Date of Expiry</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Expires In</span>
											Oatlands Homes
										</li>
									</ul>
									</div>
								</article>
							</section>

							<section class="columns clearfix cols1" style="height: 300px;">
								<article>
									<span class="title">
										Nursing Registration Near Expiry
									</span>
									<div class="scrollArea">
									<ul class="list-unstyled records clearfix">
										<li style="width:calc(100% / 7);">
											<span class="title">Company</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Home</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Employee Name</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Position</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Registration Type</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Date of Expiry</span>
											Oatlands Homes
										</li>
										<li style="width:calc(100% / 7);">
											<span class="title">Expires In</span>
											Oatlands Homes
										</li>
									</ul>
									</div>
								</article>
							</section>
						</div>
					</section>

					<section class="quickStats">
						<article>
							<span class="title">Missing References</span>
							<span class="count">04</span>
						</article>

						<article>
							<span class="title">Missing Emergancy Contact Details</span>
							<span class="count">01</span>
						</article>

						<article>
							<span class="title">Missing Visa / ID Information</span>
							<span class="count">02</span>
						</article>
					</section>
				</div>
			</div>
		</div>
	</section>

	<div class="preloader" hidden>
		<svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
			<path fill="#fff" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
			c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
				<animateTransform 
					attributeName="transform" 
					attributeType="XML" 
					type="rotate"
					dur="2s" 
					from="0 50 50"
					to="360 50 50" 
					repeatCount="indefinite" />
			</path>
			<path fill="#fff" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
			c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
				<animateTransform 
					attributeName="transform" 
					attributeType="XML" 
					type="rotate"
					dur="1s" 
					from="0 50 50"
					to="-360 50 50" 
					repeatCount="indefinite" />
			</path>
			<path fill="#fff" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
			L82,35.7z">
				<animateTransform 
					attributeName="transform" 
					attributeType="XML" 
					type="rotate"
					dur="2s" 
					from="0 50 50"
					to="360 50 50" 
					repeatCount="indefinite" />
			</path>
		</svg>
	</div>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('.filters').on('click', function(){
			$('.allFilters').slideToggle();
		});
	</script>
</body>

</html>