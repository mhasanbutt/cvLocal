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
        .newOutcome .scroll-wrapper {
            top: 40px !important;
        }
    </style>
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
			<span class="title"><img src="images/outcome.png"> Outcome Name</span>
		</div>

        <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
			<a href="jawascript:void();" style="background-color:#4477A4;padding-left:10px;">Print</a>
		</div>
	</section>

	<section class="contentBody noFooter">
        <section class="newOutcome clearfix">
            <p style="padding: 15px;" class="clearfix">
                Created By: <strong>Rishi R.</strong>

                <span class="choices pull-right">
                    <span class="checkbox"><i>Create Follow Up</i>
                        <input type="checkbox" name="followup" id="followup" hidden>
                        <label for="followup"></label>
                    </span>

                    <span class="checkbox"><i>Archived</i>
                        <input type="checkbox" name="archived" id="archived" hidden>
                        <label for="archived"></label>
                    </span>
                </span>

				<span style="float:right;"><button>Back</button> <button style="background-color:#4477A4;">Add Milestone</button> <button id="deactive" style="background-color:#828787;">Deactivate Milestone(s)</button></span>
            </p>

            <div class="scrollArea">
                <div class="content">
                    <article class="milestones view">
						<ul class="list-unstyled clearfix">
                            <li>
                                <section>
									<div class="fieldSet">
										<label for="outcomeTitle">Milestone 1 <strong class="pull-right"><em>Milestone Done</em></strong></label>
										<input type="text" name="outcomeTitle" id="outcomeTitle" maxlength="50">
									</div>
									<div class="fieldSet">
										<label for="outcomeTitle">Comments</label>
										<input type="text" name="outcomeTitle" id="outcomeTitle" maxlength="50">
									</div>

									<button>Save</button> <button class="pull-right" style="background-color:#ffcd60;color:#1c3c4b;margin-left:2px;">Working On It</button> <button class="pull-right" style="background-color:#9055F9;color:#FFF;" data-mark="Done xx Time(s)">Done</button>
								</section>

								<div class="scrollArea">
									<table>
										<tr>
											<th>Date / Time Due</th>
											<th>Comments</th>
										</tr>

										<tr>
											<td>(19:50) 03-04-2022</td>
											<td>When we gave mary's evening personal care I find redness under her breast.</td>
										</tr>
									</table>
								</div>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>
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