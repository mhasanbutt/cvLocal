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
                <li>Outcomes</li>
			</ul>
			<span class="title"><img src="images/outcome.png"> Create New Outcome</span>
		</div>
	</section>

	<section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
                <section class="newOutcome clearfix">
					<p><small><i>Please add information in the Outcome text box. For each Outcome, you can create multiple Milestones. Example: an outcome can be Get back to cooking meals. Milestones 1 can be,  Safely use the cooker Milestone 2 can be, abilty to go to the shops and buy essentials .</i></small></p>

                    <article class="newTitle">
                        <div class="fieldSet">
                            <label for="outcomeTitle">Outcome Title</label>
                            <input type="text" name="outcomeTitle" id="outcomeTitle" maxlength="50">
                            <span class="extraText">(50 Character Limit)</span>
                        </div>

                        <button>Save</button> <button style="background-color:#ffcd60;color:#1c3c4b;float:right;padding-right:38px;background-image:url('images/rotaDateRightArrow.png');background-position:right 10px center;">Add Milestone</button>
                    </article>

                    <article class="milestones">
						<div class="fieldSet">
                            <label for="outcomeTitle">Milestone 1</label>
                            <input type="text" name="outcomeTitle" id="outcomeTitle" maxlength="50">
                        </div>
						<div class="fieldSet">
                            <label for="outcomeTitle">Milestone 2</label>
                            <input type="text" name="outcomeTitle" id="outcomeTitle" maxlength="50">
                        </div>
						<div class="fieldSet">
                            <label for="outcomeTitle">Milestone 3</label>
                            <input type="text" name="outcomeTitle" id="outcomeTitle" maxlength="50">
                        </div>
						<div class="fieldSet">
                            <label for="outcomeTitle">Milestone 4</label>
                            <input type="text" name="outcomeTitle" id="outcomeTitle" maxlength="50">
                        </div>
						<samp>* You can add upto 10 Milestones<br>** 50 Character Limit</samp>
                    </article>
                </section>
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