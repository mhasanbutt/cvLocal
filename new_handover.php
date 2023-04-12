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
				<li><a href="#">Care</a></li>
				<li>Handover</li>
			</ul>
			<span class="title"><img src="images/handover.png"> New Handover</span>
		</div>

		<section class="pull-right text-right" style="padding-right:25px;">
			<small>Handover Started On: (13:21) 11-10-2021</small>
			
			<div class="filtersSearch clearfix" style="padding-right:0;">

				<div class="dropList">
					<div class="select">
						<select name="" id="">
							<option value="">Select Floor</option>
						</select>
					</div>
				</div>

				<div class="dropList">
					<div class="select">
						<select name="" id="">
							<option value="">Select Group</option>
						</select>
					</div>
				</div>

				<button class="disabled" style="padding-left:10px;color:#FFF;background-color:#6DC679;">Change Group / Floor</button>

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

		<section class="generalNotes">
			<span class="title">General Handover Notes</span>

			<i class="addNotes">Add</i>
			
			<div class="scrollArea">
				<ul class="list-unstyled clearfix">
					<li>
						<span class="title">Time / Date</span>
						<span class="value">(11:06) 12-04-2021</span>
					</li>
					<li>
						<span class="title">Added By</span>
						<span class="value">Rishi R.</span>
					</li>
					<li>
						<span class="title">Description</span>
						<span class="value">Phasellus auctor, purus ac rhoncus molestie, neque purus efficitur orci, tempus auctor enim dui at lectus. Integer a tellus</span>
					</li>
					<li>
						<i>View</i>
					</li>
				</ul>

				<ul class="list-unstyled clearfix">
					<li>
						<span class="title">Time / Date</span>
						<span class="value">(11:06) 12-04-2021</span>
					</li>
					<li>
						<span class="title">Added By</span>
						<span class="value">Rishi R.</span>
					</li>
					<li>
						<span class="title">Description</span>
						<span class="value">Phasellus auctor, purus ac rhoncus molestie, neque purus efficitur orci, tempus auctor enim dui at lectus. Integer a tellus</span>
					</li>
					<li>
						<i>View</i>
					</li>
				</ul>
			</div>
		</section>

		<div class="handoverServiceUsers">
			<div class="scrollArea">
				<ul class="list-unstyled clearfix handover_residents_new">
					<li>
						<span class="picture" data-name="Mr Mike MEAKIN"><img src="images/emp-profile.jpg" alt=""></span>

						<ul class="list-unstyled routinesStat">
							<li>0</li>
							<li>0</li>
							<li>0</li>
						</ul>

						<div class="stats">
							<ul class="list-unstyled clearfix">
								<li class="columns">
									<span class="title">Stats <small>(For Today)</small></span>
									<ul class="list-unstyled">
										<li>Accidents <i>2</i></li>
										<li>Incidents <i>1</i></li>
										<li>Behavioural Issues <i>1</i></li>
										<li>Times Turned <i>7</i></li>
										<li>Times Awake During Night <i>1</i></li>
										<li>Activities Taken Part In <i>3</i></li>
									</ul>
									<ul class="list-unstyled">
										<li>Accidents <i>2</i></li>
										<li>Incidents <i>1</i></li>
										<li>Behavioural Issues <i>1</i></li>
										<li>Times Turned <i>7</i></li>
										<li>Times Awake During Night <i>1</i></li>
										<li>Activities Taken Part In <i>3</i></li>
									</ul>
								</li>
								<li>
									<span class="title">Vitals <small>(For Today)</small></span>
									<ul class="list-unstyled">
										<li>Accidents <i>2</i></li>
										<li>Incidents <i>1</i></li>
										<li>Behavioural Issues <i>1</i></li>
										<li>Times Turned <i>7</i></li>
										<li>Times Awake During Night <i>1</i></li>
										<li>Activities Taken Part In <i>3</i></li>
									</ul>
								</li>
								<li class="specialTitle">
									<span class="title">Bowel Chart</span>
									<ul class="list-unstyled">
										<li>
											14.10.2021 12:45pm <i>Type 2</i>
										</li>
									</ul>
								</li>
								<li class="specialTitle">
									<span class="title">Food Intake</span>
									<ul class="list-unstyled">
										<li>
											Breakfast <i>1/4</i>
										</li>
									</ul>
								</li>
							</ul>
						</div>

						<div class="handoverNotes">
							<span class="title">Handover Note Entries</span>

							<div class="scrollArea">
								<ul class="list-unstyled">
									<li>
										<input type="checkbox" name="" id="checkbox1" hidden>
										<label for="checkbox1"></label>
										<span class="value">Medication support care plan has been reviewed by Rishi R.</span>
										<span class="timeDate">(10:56) 05-11-2021</span>
									</li>
								</ul>
							</div>
						</div>

						<textarea name="" id="" placeholder="Click here to write service user handvover notes"></textarea>
					</li>
				</ul>
			</div>
		</div>

		<button class="newStyle">Back</button> <button class="newStyle navigation disabled">Prev</button> <button class="newStyle navigation">Next</button> <button class="newStyle green">Proceed To Next Step</button>

		<ul class="list-unstyled clearfix steps">
			<li data-label="1" class="done">
				Service User Overview
			</li>
			<li data-label="2" class="current">
				Housekeeping &amp; Devices
			</li>
			<li data-label="3">
				Group<br>Allocation
			</li>
			<li data-label="4">
				Staff &amp;<br>Sign Off
			</li>
		</ul>
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