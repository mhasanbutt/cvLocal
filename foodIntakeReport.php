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
            bottom: 50px;
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
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/food-plate.png"> Food Intake Report</span>
		</div>

		<div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
            <samp class="stats" style="width:120px;"><span>01</span>Have not had Breakfast</samp>
            <samp class="stats" style="width:120px;"><span>01</span>Have not had Lunch</samp>
            <samp class="stats" style="width:120px;"><span>08</span>Have not had Dinner / Supper</samp>
            <samp class="stats" style="width:120px;"><span>01</span>Have not had Snack</samp>

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
				<div class="alertsReport depdReport careNoteQuality foodIntake print">
                    <section class="SUsers clearfix">
                        <section class="profile">
                            <span class="img">
                                <span class="nickName">Timmy</span>
                                <img src="images/temp-picture.jpg">
                            </span>
                        </section>

                        <div class="allalerts clearfix">
							<ul class="list-unstyled clearfix">
                                <li style="width:calc(100% - 710px);">
                                    <span class="title">Name</span>
                                    Mr Jim Anderson
                                </li>
                                <li style="width:210px;">
                                    <span class="title">Date of Birth</span>
                                    32-08-1956 <i>90</i>
                                </li>
                                <li style="width:250px;">
                                    <span class="title">Floor</span>
                                    Floor12
                                </li>
                                <li style="width:250px;">
                                    <span class="title">Room</span>
                                    Floor12
                                </li>
                            </ul>

                            <div>
								<article>
									<span class="title">Breakfast</span>

                                    <span class="contentTitle"><i>Added by</i> -</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
								</article>
								<article>
									<span class="title">Lunch</span>

                                    <span class="contentTitle"><i>Added by</i> John Smith</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
								</article>
								<article>
									<span class="title">Dinner</span>

                                    <span class="contentTitle"><i>Added by</i> John Smith</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
								</article>
                                <article>
                                    <span class="title">Supper</span>

                                    <span class="contentTitle"><i>Added by</i> John Smith</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
                                </article>
                                <article>
                                    <span class="title">Snacks</span>

                                    <span class="contentTitle"><i>Added by</i> John Smith</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
                                </article>
							</div>
                        </div>
                    </section>

                    <section class="SUsers clearfix">
                        <section class="profile">
                            <span class="img">
                                <span class="nickName">Timmy</span>
                                <img src="images/temp-picture.jpg">
                            </span>
                        </section>

                        <div class="allalerts clearfix">
                            <ul class="list-unstyled clearfix">
                                <li style="width:calc(100% - 710px);">
                                    <span class="title">Name</span>
                                    Mr Jim Anderson
                                </li>
                                <li style="width:210px;">
                                    <span class="title">Date of Birth</span>
                                    32-08-1956 <i>90</i>
                                </li>
                                <li style="width:250px;">
                                    <span class="title">Floor</span>
                                    Floor12
                                </li>
                                <li style="width:250px;">
                                    <span class="title">Room</span>
                                    Floor12
                                </li>
                            </ul>

                            <div>
                                <article>
                                    <span class="title">Breakfast</span>

                                    <span class="contentTitle"><i>Added by</i> -</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>-</span>
                                        </div>
                                    </span>
                                </article>
                                <article>
                                    <span class="title">Lunch</span>

                                    <span class="contentTitle"><i>Added by</i> John Smith</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
                                </article>
                                <article>
                                    <span class="title">Dinner</span>

                                    <span class="contentTitle"><i>Added by</i> John Smith</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
                                </article>
                                <article>
                                    <span class="title">Supper</span>

                                    <span class="contentTitle"><i>Added by</i> John Smith</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
                                </article>
                                <article>
                                    <span class="title">Snacks</span>

                                    <span class="contentTitle"><i>Added by</i> John Smith</span>
                                    <span class="contentTitle">
                                        <i>Notes</i>
                                        <div class="scrollArea">
                                            <span>Pellentesque vitae massa id leo mattis tempor ac at nisl. Mauris semper, risus in fermentum vulputate, massa nunc molestie odio, non venenatis diam urna ut turpis. Quisque eros purus, ullamcorper at dignissim eget, vestibulum pharetra ligula. Aliquam erat volutpat. Praesent congue, augue ac consectetur euismod, felis orci lacinia velit, vel imperdiet odio nisl non mi.</span>
                                        </div>
                                    </span>
                                </article>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="pagingSorting">
            <ul class="list-unstyled paging">
                <li><a href="#" class="disabled">Prev</a></li>
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

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
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