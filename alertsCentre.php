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
			</ul>
			<span class="title"><img src="https://jawa.care-vision.co.uk/images/alert-centre.png"> Alerts Centre</span>
		</div>

		<div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
			<div class="checkbox">
				<input type="checkbox" name="currentlyActive" id="currentlyActive" hidden>
				<label for="currentlyActive"></label>
			</div>

			<a href="jawascript:void();" id="activeAlert"
				style="background-image:url('images/handoverStepArrow.png');background-color:#6dc77a;">Active /
				Deactive</a>

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

			<a href="#" style="padding-left:10px;">Print</a>
		</div>

		<ul class="diseases list-unstyled">
			<li><a href=""><img src="images/exclamation-mark.svg" class="svg">DNR</a></li>
			<li><a href=""><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</a></li>
			<li><a href=""><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</a></li>
		</ul>
	</section>

	<section class="contentBody noFooter">
		<div class="alertsHistory">
			<small><i>Note: Any alerts that highlighted in red were created during the pre-admission assessment and have
					been marked as outstanding.These alerts need to be completed by pressing on the eye symbol next to
					the corresponding alert.</i></small>

			<div class="scrollArea">
				<div class="content">
					<article class="alertsList">
						<input type="checkbox" name="" id="alert1" hidden>
						<label for="alert1"></label>

						<ul class="list-unstyled clearfix">
							<li style="width:110px;">
								<i>Date Added</i>
								<span>04-03-2022</span>
							</li>
							<li style="width:200px;">
								<i>Service User</i>
								<span>Mr Tim K. Shermin</span>
							</li>
							<li style="width:calc(100% - 765px);">
								<i>Type of Alerts</i>
								<span>Bowel Movement</span>
							</li>
							<li style="width:200px;">
								<i>Added By</i>
								<span>Rishi R.</span>
							</li>
							<li style="width:110px;">
								<i>Review Date</i>
								<span>-</span>
							</li>
							<li style="width:100px;">
								<i>Status</i>
								<span>Active</span>
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

	<div hidden class="newPopup">
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

	<div hidden class="modal fade in toDoListPop" tabindex="-1" role="dialog" style="display:block;">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Transfer / Equipment</h4>
                </div>

                <div class="modal-body inBodyForm">
					<p>Tim needs the following equipment(s)</p>
					<br clear="all">

                    <div class="row">
						<div class="col-md-4">
							<div class="form-group" style="min-height:0;">
								<label>Hoist</label>
								<input type="checkbox" name="hoist" id="hoist" hidden class="switch">
								<label for="hoist"></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="min-height:0;">
								<label>Sara Steady</label>
								<input type="checkbox" name="sarastead" id="sarastead" hidden class="switch">
								<label for="sarastead"></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="min-height:0;">
								<label>Stand Aid</label>
								<input type="checkbox" name="standaid" id="standaid" hidden class="switch">
								<label for="standaid"></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="min-height:0;">
								<label>Wheelchair</label>
								<input type="checkbox" name="wheelchair" id="wheelchair" hidden class="switch">
								<label for="wheelchair"></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="min-height:0;">
								<label>Zimmer Frame</label>
								<input type="checkbox" name="zimmer" id="zimmer" hidden class="switch">
								<label for="zimmer"></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="min-height:0;">
								<label>Chairlift</label>
								<input type="checkbox" name="chairlift" id="chairlift" hidden class="switch">
								<label for="chairlift"></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="min-height:0;">
								<label>Rotunda</label>
								<input type="checkbox" name="rotunda" id="rotunda" hidden class="switch">
								<label for="rotunda"></label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<article class="multiOption">
								Transfer Sling

								<input type="radio" value="X-Large" name="transfer" id="transx" hidden>
								<label for="transx">X-Large</label>
								<input type="radio" value="Large" name="transfer" id="translarg" hidden>
								<label for="translarg">Large</label>
								<input type="radio" value="Medium" name="transfer" id="transmed" hidden>
								<label for="transmed">Medium</label>
								<input type="radio" value="Small" name="transfer" id="transmall" hidden>
								<label for="transmall">Small</label>
							</article>

							<article class="multiOption">
								Bathing Sling

								<input type="radio" value="X-Large" name="bathing" id="bathx" hidden>
								<label for="bathx">X-Large</label>
								<input type="radio" value="Large" name="bathing" id="bathlarg" hidden>
								<label for="bathlarg">Large</label>
								<input type="radio" value="Medium" name="bathing" id="bathmed" hidden>
								<label for="bathmed">Medium</label>
								<input type="radio" value="Small" name="bathing" id="bathmall" hidden>
								<label for="bathmall">Small</label>
							</article>

							<article class="multiOption">
								Toileting Sling

								<input type="radio" value="X-Large" name="toileting" id="toiletx" hidden>
								<label for="toiletx">X-Large</label>
								<input type="radio" value="Large" name="toileting" id="toiletlarg" hidden>
								<label for="toiletlarg">Large</label>
								<input type="radio" value="Medium" name="toileting" id="toiletmed" hidden>
								<label for="toiletmed">Medium</label>
								<input type="radio" value="Small" name="toileting" id="toiletmall" hidden>
								<label for="toiletmall">Small</label>
							</article>

							<article class="multiOption">
								Standing Sling

								<input type="radio" value="X-Large" name="standing" id="standx" hidden>
								<label for="standx">X-Large</label>
								<input type="radio" value="Large" name="standing" id="standlarg" hidden>
								<label for="standlarg">Large</label>
								<input type="radio" value="Medium" name="standing" id="standmed" hidden>
								<label for="standmed">Medium</label>
								<input type="radio" value="Small" name="standing" id="standmall" hidden>
								<label for="standmall">Small</label>
							</article>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h3>Pressure Relieving Equipment</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Mattress MAKE</label>
										<select name="" id="">
											<option value="">Steiss Dynamic Mattress Overlay System - Medium Risk</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Mattress MODEL</label>
										<select name="" id="">
											<option value="">AX315</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Weight setting FORMAT</label>
										<select name="" id="">
											<option value="">30kg</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Pressure setting OPTIONS</label>
										<select name="" id="">
											<option value="">Dynamic</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>Pressure Relieving Cushion</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Pressure Relieving Cushion MAKE</label>
										<select name="" id="">
											<option value="">Steiss cushion only – PR723310</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Pressure Relieving Cushion MODEL</label>
										<select name="" id="">
											<option value="">AX315</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Weight setting FORMAT</label>
										<select name="" id="">
											<option value="">30kg</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Pressure setting OPTIONS</label>
										<select name="" id="">
											<option value="">Dynamic</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
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