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
            bottom: 145px;
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
			<span class="title"><img src="https://jawa.care-vision.co.uk/images/alert-centre.png"> Dependancy Report</span>
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
				<p>The dependency level of the patients can be used to ensure a standardised approach when deciding the staffing levels and appropriate qualifications of staff.</p>
                
				<ul class="list-unstyled clearfix dependancyGroups">
					<li>
						<span>
							<strong>Care Group A</strong>
							Estimated direct care required per day - 1 Hour
						</span>
						A person who is deemed to be in Care Group A may be regarded as largely capable of "self care"
					</li>
					<li>
						<span>
							<strong>Care Group B</strong>
							Estimated direct care required per day - 2 Hour
						</span>
						A person who is deemed to be Care Group B may be regarded as requiring "average care"
					</li>
					<li>
						<span>
							<strong>Care Group C</strong>
							Estimated direct care required per day - 3 Hour
						</span>
						A person who is deemed to be Care Group C may be regarded as needing  "above average care"
					</li>
					<li>
						<span>
							<strong>Care Group D</strong>
							Estimated direct care required per day - 4 Hour
						</span>
						A person who is deemed to be Care Group D may be regarded as needing "maximum care"
					</li>
					<li>
						<span>
							<strong>Care Group E</strong>
							Estimated direct care required per day - 5 Hour
						</span>
						As others with increasing needs / End of Life
					</li>
				</ul>

				<div class="alertsReport depdReport">
                    <section class="SUsers clearfix">
                        <section class="profile">
                            <span class="img">
                                <span class="nickName">Timmy</span>
                            </span>
                        </section>

                        <div class="allalerts clearfix">
							<ul class="list-unstyled clearfix">
                                <li style="width:150px;">
                                    <span class="title">Name</span>
                                    Mr Jim Anderson
                                </li>
                                <li style="width:110px;">
                                    <span class="title">Date of Birth</span>
                                    32-08-1956 <i>90</i>
                                </li>
                                <li style="width:150px;">
                                    <span class="title">Floor</span>
                                    Floor12
                                </li>
                                <li style="width:150px;">
                                    <span class="title">Room</span>
                                    Floor12
                                </li>
                            </ul>

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
									<span class="title">Dependancy Level</span>
									<div class="text-center">Care Group D - <i>Very High Dependancy</i> <strong>5.0 hours</strong></div>
								</article>
							</div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

		<div class="dependancies" data-title="Staffing levels using dependency level">
			<div class="totalHours">
				<span>Total Daily Hours  <i>198</i></span> <span>Total Care Hours <i>1386</i> <small>[ 7 Days ]</small></span>
			</div>

			<ul class="list-unstyled clearfix">
				<li>
					<article>
						Care Group A <small>Self Caring</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
					</article>
				</li>
				<li>
					<article>
						Care Group B <small>Low Dependancy</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
					</article>
				</li>
				<li>
					<article>
						Care Group C <small>Medium Dependancy</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
					</article>
				</li>
				<li>
					<article>
						Care Group D <small>High Dependancy</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
					</article>
				</li>
				<li>
					<article>
						Care Group E <small>Very High Dependancy</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
					</article>
				</li>
			</ul>
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