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
    <style>
        .contentBody>.scroll-wrapper {
            bottom: 45px;
        }
        .pagingSorting {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            }
    </style>
</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Reports</a></li>
			</ul>
			<span class="title"><img src="https://jawa.care-vision.co.uk/images/alert-centre.png"> Alerts Centre</span>
		</div>

		<div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
            <a href="#" style="padding-left:10px;">Print</a>

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

	<section class="contentBody noBg noFooter" style="right:10px;bottom:10px;">
        <div class="scrollArea">
            <div class="content">
                <div class="alertsReport">
                    <section class="SUsers clearfix">
                        <section class="profile">
                            <span class="img">
                                <span class="nickName">Timmy</span>
                            </span>
                            <ul class="list-unstyled">
                                <li>
                                    <span class="title">Name</span>
                                    Mr Jim Anderson
                                </li>
                                <li>
                                    <span class="title">Date of Birth</span>
                                    <i>90</i> 32-08-1956
                                </li>
                                <li>
                                    <span class="title">Floor</span>
                                    Floor12
                                </li>
                                <li>
                                    <span class="title">Room</span>
                                    Floor12
                                </li>
                            </ul>
                        </section>

                        <div class="allalerts clearfix">
                            <div>
								<article>
									<ul class="list-unstyled clearfix columns col3">
										<li>
											<span class="title">Catheter</span>
											Suprapubic<br>Silicone<br>18 Red End
										</li>
										<li>
											<span class="title">Enteral Feeding</span>
											NJT
										</li>
										<li>
											<span class="title">Tracheostomy</span>
										</li>
									</ul>
								</article>
								<article>
									<span class="title">Allergies and Dietary Preferences</span>
									<div class="scrollArea">
										<div class="content">
											<ul class="diseases list-unstyled">
												<li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
												<li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
												<li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
											</ul>
										</div>
									</div>
								</article>
								<article>
									<ul class="list-unstyled clearfix columns col2">
										<li>
											<span class="title">GSF</span>
											<span class="gsf"><img src="images/gsf-coloured.png"></span>
										</li>
										<li>
											<span class="title">Resuscitation Status</span>
											DNACPR
										</li>
									</ul>
								</article>
							</div>
							<div>
								<article>
									<span class="title">Alerts</span>
									<div class="scrollArea">
										<div class="content">
											<ul class="diseases list-unstyled">
												<li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
												<li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
												<li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
											</ul>
										</div>
									</div>
								</article>
								<article>
									<span class="title">Diagnosis</span>
									<span class="salt">S.A.L.T <strong>Level 1 - Slightly thick</strong></span>
									<div class="scrollArea">
										<div class="content">
											<ul class="list-unstyled clearfix diagnosis">
												<li>Tiberium Infestation</li>
											</ul>
										</div>
									</div>
								</article>
								<article>
									<span class="title">Mobility</span>
									<ul class="list-unstyled clearfix mobility">
										<li>
											<i>Hoist</i> Yes
										</li>
										<li>
											<i>Wheelchair</i> Yes
										</li>
										<li>
											<i>Rotunda</i> Yes
										</li>
										<li>
											<i>Standing Sling</i> Small
										</li>
										<li>
											<i>Transfer Sling</i> Medium
										</li>
										<li>
											<i>Bathin Sling</i> Large
										</li>
									</ul>
								</article>
							</div>
							<div class="notes">
								<span class="title">Nurse / Carer Notes</span>
								<div class="scrollArea">
									<div class="content">
									Nulla tristique magna vitae turpis blandit, ac mattis ipsum gravida. Proin nec magna sit amet ex lobortis commodo. Sed vel odio sem. Cras egestas molestie lacus, sed rutrum augue feugiat sed. Vestibulum non tortor et ex feugiat feugiat. Nulla non urna sit amet arcu bibendum accumsan eget at elit. Nam lacinia augue sed libero tincidunt congue. In venenatis, odio sed suscipit cursus, arcu ipsum consequat ligula, bibendum placerat leo augue nec nulla. Aliquam at leo in sem auctor faucibus sed vel purus. Aliquam fringilla luctus mi. Aenean sem tortor, bibendum rutrum tortor sollicitudin, blandit tristique tellus. Ut in suscipit metus. Nunc finibus accumsan est. Vivamus dapibus dui non quam feugiat, vel scelerisque nibh bibendum. 
									</div>
								</div>
							</div>
                        </div>
                    </section>
                </div>
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