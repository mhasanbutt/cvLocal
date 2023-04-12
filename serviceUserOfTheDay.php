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
			<span class="title"><img src="images/serviceUserDay.png"> Service User of the Day</span>
		</div>
	</section>

	<section class="contentBody noBg noFooter">
        <span class="pageReload"></span>
        <div class="scrollArea">
            <div class="content" style="padding:0;">
                <section class="serviceUserDay">
                    <h3>Care Plan(s)</h3>

                    <article>
                        <span class="title">Care Plan Reviewed</span>

                        <ul class="list-unstyled">
                            <li>
                                <span>
                                    <i>Care plan Name</i>
                                    Some name goes here
                                </span>

                                <span>
                                    <i>Entry Date / Time</i>
                                    Some name goes here
                                </span>

                                <span>
                                    <i>Next Review</i>
                                    Some name goes here
                                </span>

                                <span>
                                    <i>Comments</i>
                                    Some name goes here
                                </span>

                                <span>
                                    <i>Reviewed By</i>
                                    Some name goes here
                                </span>
                            </li>
                        </ul>
                    </article>
                </section>

                <section class="serviceUserDay">
                    <h3>Vital Signs Recorded</h3>

                    <article class="noRecord">
                        <span class="title">Temperature</span>
                    </article>
                </section>

                <section class="serviceUserDay">
                    <h3>Catering</h3>

                    <span class="addComments">Add Comments</span>

                    <article>
                        <span class="title">Likes and Dislikes</span>

                        <ul class="list-unstyled">
                            <li>
                                <span>
                                    <i>Entry Date / Time</i>
                                    Some name goes here
                                </span>
                                
                                <span>
                                    <i>Likes / Dislikes / Preferences</i>
                                    Some name goes here
                                </span>

                                <span>
                                    <i>Added By</i>
                                    Some name goes here
                                </span>
                            </li>
                        </ul>

                        <div class="formSection">
                            <div class="formElement" data-extra="Alert Center, Fluid, Food etc">
                                <label for="">Dietary Requirements in Modules</label>

                                <div class="yesNo">
                                    <input type="checkbox" name="" id="yesNo" hidden>
                                    <label for="yesNo"></label>
                                </div>
                            </div>

                            <div class="formElement comments" hidden>
                                <label for="">Comments</label>
                                <input type="text" name="" id="">
                            </div>
                        </div>
                    </article>
                </section>

                <section class="serviceUserDay reduceIt reduce">
                    <h3>Daily Notes</h3>

                    <span class="collapse"></span>

                    <article>
                        <span class="title">Weight</span>

                        <ul class="list-unstyled">
                            <li>
                                <span>
                                    <i>Module</i>
                                    Module icon here
                                </span>

                                <span>
                                    <i>Entry Date / Time</i>
                                    24-03-2022 15:03
                                </span>
                                
                                <span>
                                    <i>comments</i>
                                    Some name goes here
                                </span>

                                <span>
                                    <i>Added By</i>
                                    Some name goes here
                                </span>

                                <span>
                                    <i>Read By</i>
                                    Some name goes here
                                </span>
                            </li>
                        </ul>
                    </article>
                </section>

                <section class="serviceUserDay clearfix">
                    <h3>Comparison</h3>

                    <article class="divide">
                        <span class="title">Daily Notes <small>(Last 3 months)</small></span>
                    </article>

                    <article class="divide">
                        <span class="title">Weight <small>(Last 3 entries)</small></span>
                    </article>

                    <article class="divide">
                        <span class="title">Injuries <small>(Last 30 days)</small></span>
                    </article>

                    <article class="divide">
                        <span class="title">Professional Visits <small>(Last 30 days)</small></span>
                    </article>
                </section>

                <section class="serviceUserDay">
                    <h3>Sign Off</h3>

                    <article>
                        <div class="formSection">
                            <div class="formElement">
                                <label for="">Username</label>
                                <input type="text" name="" id="">
                            </div>

                            <div class="formElement">
                                <label for="">Password</label>
                                <input type="password" name="" id="">
                            </div>

                            <div class="formElement">
                                <label for="">&nbsp;</label>
                                <button type="button">Submit</button>
                            </div>
                        </div>
                    </article>
                </section>

                <button type="button" style="background-color:#6dc77a;">Save</button> <button type="button">Cancel</button>
            </div>
        </div>
	</section>

	<div class="newPopup">
		<article>
			<div>
				<div class="popupContainer">
					<span class="title">
						<i class="close"></i>
						Deactivate Milestone(s)
					</span>

					<div class="popupBody">
						<p><small><i>Select the milestone(s), you need to deactivate below.</i></small></p>

						<ul class="list-unstyled deactiveMilestone clearfix">
							<li>
								<input type="checkbox" name="milestone1" id="milestone1" hidden>
								<label for="milestone1">Milestone 1 <strong>Milestone title to go here...</strong></label>
							</li>
						</ul>
					</div>

					<a class="proceed" href="javascript:void();">Done</a>
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
        $('.collapse').on('click', function(){
            $('.reduceIt').toggleClass('reduce');
        });
        $('.addComments').on('click', function(){
            $('.comments').show();
        });

		$('#deactive').click(function () {
			$('.newPopup').css('display', 'table');
		});

		$('.newPopup .close').click(function () {
			$('.newPopup').css('display', 'none');
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