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
				<li><a href="#">Service Users</a></li>
			</ul>
			<span class="title"><img src="images/outcome.png"> Outcomes</span>
		</div>

		<div class="filtersSearch clearfix pull-right" style="margin-right:20px;">

			<a href="jawascript:void();" style="background-color:#7da7d9;padding-left:10px;">Follow Ups <strong>2</strong></a>

			<a href="jawascript:void();" id="activeAlert" style="color:#1f262a;background-image:url('images/createNew.png');background-color:#6dc77a;">Create New outcomes</a>

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

	<section class="contentBody noFooter">
		<div class="alertsHistory outcome">
			<div class="scrollArea">
				<div class="content">
					<article class="alertsList">
						<ul class="list-unstyled clearfix">
							<li style="width:300px;">
								<i>Outcome Title</i>
								<span>Name of outcome</span>
							</li>
							<li style="width:110px;">
								<i>Date Created</i>
								<span>04-03-2022</span>
							</li>
							<li style="width:110px">
								<i>Last Updated</i>
								<span>04-03-2022</span>
							</li>
							<li style="width:calc(100% - 770px);">
								<i>Milestone Progress</i>
								<div class="milestone">
									<samp class="complete"></samp><samp class="workingOnIt"></samp><samp class="disabled"></samp><samp></samp><samp></samp>
								</div>
							</li>
							<li style="width:200px;">
								<i>Created By</i>
								<span>Rishi R.</span>
							</li>
							<li style="width:50px;">
								<a href="#" class="view" style="margin-top:10px;"></a>
							</li>
						</ul>
					</article>
				</div>
			</div>

			<div class="pagingSorting">
				<ul class="list-unstyled paging">
					<li><a href="#">Prev</a></li>
					<li class="current"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">Next</a></li>
				</ul>

				<a href="">Select All</a> | <a href="">Deselect All</a>

				<ul class="list-unstyled clearfix legends">
					<li>Complete</li>
					<li>Working On It</li>
					<li>Disabled</li>
					<li>Not Started</li>
				</ul>

				<div class="sorting">
					<div class="select">
						<select name="" id="">
							<option value="">Sort By</option>
						</select>
					</div>

					<button type="button" style="background-color:#6B7884">A-Z</button><button type="button"
						style="margin-right:20px;background-color:#6B7884">Z-A</button>

					<div class="select">
						<select name="" id="">
							<option value="">50 per page</option>
						</select>
					</div>

					<button type="button" style="background-color:#3DA492;">Apply</button><button type="button">Reset
						Sorting</button>
				</div>
			</div>
		</div>
	</section>

	<div class="newPopup">
		<article>
			<div>
				<div class="popupContainer">
					<span class="title">
						<i class="close"></i>
						Active / Deactive Alerts
					</span>

					<div class="popupBody">
						<p><small><i>To Activate/Deactivate an Alert, you will need a witness to verify.</i></small></p>

						<ul class="list-unstyled alertsCheckboxes clearfix">
							<li>
								<span class="title">DNACPR</span>
								<input type="checkbox" name="dnacpr" id="dnacpr" class="changeState" hidden>
								<label for="dnacpr"></label>
							</li>
						</ul>
					</div>

					<a class="proceed" href="javascript:void();">Done</a>
				</div>

				<div class="secondary" style="display:none;width:250px;">
					<span class="title">
						<i class="close"></i>
						DNACPR
					</span>

					<div class="popupBody">
						<div class="form-group">
							<label for="">Has the DNACPR been uploaded to the Filing Cabinet?</label>
							<input type="checkbox" name="dnacpr" id="dnacpruploaded" class="changeState" hidden>
							<label for="dnacpruploaded" class="checkbox"></label>
						</div>

						<div class="form-group">
							<label for="">Have the funeral notes been uploaded to the Filing Cabinet?</label>
							<input type="checkbox" name="dnacpr" id="filingCabinet" class="changeState" hidden>
							<label for="filingCabinet" class="checkbox"></label>
						</div>

						<div class="form-group">
							<label for="">Indefinite DNACPR?</label>
							<input type="checkbox" name="dnacpr" id="indefinitednacpr" class="changeState" hidden>
							<label for="indefinitednacpr" class="checkbox"></label>
						</div>

						<div class="form-group">
							<label for="">Date of Review</label>
							<input type="text" name="" id="">
						</div>

						<div class="form-group">
							<label for="">Date of DNACPR Order</label>
							<input type="text" name="" id="">
						</div>

						<div class="form-group">
							<label for="">Reminder Before</label>
							<input type="text" name="" id="">
						</div>

						<div class="form-group">
							<label for="">Comments</label>
							<input type="text" name="" id="">
						</div>
					</div>

					<a href="javascript:void();">Cancel</a> <a class="proceed" href="javascript:void();">Confirm</a>
				</div>
			</div>
		</article>
	</div>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('#activeAlert').click(function () {
			$('.newPopup').css('display', 'table');
		});

		$('.newPopup .close').click(function () {
			$('.newPopup').css('display', 'none');
		});

		$('.changeState').on('click', function(){
			if($(this).is(':checked')){
				$('.popupContainer').addClass('moveLeft');
				$('.secondary').css('display','inline-block');
			}
		});

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