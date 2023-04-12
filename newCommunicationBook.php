<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>

<body>
	<?php include("header.php");?>

	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Care</a></li>
				<li><a href="#">Communication Book</a></li>
			</ul>
			<span class="title"><img src="images/communicationbook.svg" class="svg"> History</span>
		</div>
		<div class="ProfileInfo">
			<img src="images/temp-picture.jpg" class="picture">
			<span class="profileImg"><img src="images/photo-camera.svg" class="svg"></span>
			<ul class="list-unstyled">
				<li>
					<span>Service User Name</span><br>
					Terrance Edwards
				</li>
				<li>
					<span>Date of Birth</span><br>
					05-04-1974
				</li>
				<li>
					<span>Client No.</span><br>
					5921583
				</li>
				<li>
					<span>Location</span><br>
					Oxford St.
				</li>
			</ul>
		</div>
		<ul class="search list-unstyled clearfix">
			<li>
				<div class="fieldContainer searchField">
					<input type="text" placeholder="Search by keyword">
					<img src="images/magnifier-tool.svg" class="searchIcon svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Terrance Edwards</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Carer</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer date">
					<input type="text" name="dateRange" placeholder="Date">
					<img src="images/calendar-icon.svg" class="calendar svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>Floor</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
		</ul>
		<div class="clearfix">
			<button type="button" class="searchButton">Search</button>
			<div class="sortListing">
				<select>
					<option>Sort By</option>
					<option>Date</option>
					<option>Service User</option>
					<option>Carer</option>
					<option>Read By</option>
				</select>
				<img src="images/left-arrow.svg" class="svg">
			</div>
			<button class="sortDirection"><img src="images/ascending.svg" class="svg"></button>
			<div class="historySorting">
				<span class="selection">
					<a href="#">Select All</a> | <a href="#">Remove Selection</a>
				</span>
			</div>
			<div class="pull-right clearfix">
				<div class="btn-group">
					<button type="button" class="btn orange"><img src="images/add-new-document.svg"
							class="svg">New</button>
				</div>
				<div class="btn-group">
					<button type="button" class="btn"><img src="images/add-new-document.svg" class="svg">Mark as
						Read</button>
				</div>
				<div class="btn-group">
					<button type="button" class="btn"><img src="images/add-new-document.svg" class="svg">Delete</button>
				</div>
				<div class="pull-right clearfix">
					<ul class="diseases list-unstyled">
						<li><img src="images/exclamation-mark.svg" class="svg">Allergy</li>
						<li><img src="images/sova.svg" class="svg">SOVA</li>
						<li><img src="images/food_fluid_chart.svg" class="svg">Food</li>
						<li><img src="images/pressure_sore.svg" class="svg">Pressure Sore</li>
						<li><img src="images/fluid.svg" class="svg">FLUID</li>
						<li><img src="images/constipation.svg" class="svg">Bowel Movement</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="contentBody noBg">
		<div class="scrollArea">
			<ul class="historyListing list-unstyled">
				<li>
					<span class="checkBox">
						<input type="checkbox" id="id1" hidden>
						<label for="id1"><img src="images/checked.svg" class="svg"></label>
					</span>
					<article>
						<ul class="clearfix list-unstyled">
							<li>
								<small>Module</small>
								<span class="icon"><img src="images/communicationbook.svg" class="svg"></span>
							</li>
							<li>
								<small>Date</small>
								<span>(14:25) 21-02-2018</span>
							</li>
							<li>
								<small>Service User</small>
								<span>Mr. Tim Sherman</span>
							</li>
							<li>
								<small>Read By</small>
								<span>-</span>
							</li>
							<li>
								<small>Added By</small>
								<span>Rishi Local</span>
							</li>
							<li class="col-3">
								<small>Description</small>
								<span>Test message for Care Home</span>
							</li>
						</ul>
					</article>
					<span class="listingHandle"></span>
					<aside class="markAsRead">
						<a href="#"><img src="images/printing-tool.svg" class="svg"><span>Print</span></a> <a
							href="#"><img src="images/markAsRead.svg" class="svg"><span>Mark as read</span></a>
					</aside>
				</li>
				<li>
					<span class="checkBox">
						<input type="checkbox" id="id2" hidden>
						<label for="id2"><img src="images/checked.svg" class="svg"></label>
					</span>
					<article>
						<ul class="clearfix list-unstyled">
							<li>
								<small>Module</small>
								<span class="icon"><img src="images/communicationbook.svg" class="svg"></span>
							</li>
							<li>
								<small>Date</small>
								<span>(14:25) 21-02-2018</span>
							</li>
							<li>
								<small>Service User</small>
								<span>Mr. Tim Sherman</span>
							</li>
							<li>
								<small>Read By</small>
								<span>-</span>
							</li>
							<li>
								<small>Added By</small>
								<span>Rishi Local</span>
							</li>
							<li class="col-3">
								<small>Description</small>
								<span>Test message for Care Home</span>
							</li>
						</ul>
					</article>
					<span class="listingHandle"></span>
					<aside class="markAsRead">
						<a href="#"><img src="images/printing-tool.svg" class="svg"><span>Print</span></a> <a
							href="#"><img src="images/markAsRead.svg" class="svg"><span>Mark as read</span></a>
					</aside>
				</li>
				<li>
					<span class="checkBox">
						<input type="checkbox" id="id3" hidden>
						<label for="id3"><img src="images/checked.svg" class="svg"></label>
					</span>
					<article>
						<ul class="clearfix list-unstyled">
							<li>
								<small>Module</small>
								<span class="icon"><img src="images/communicationbook.svg" class="svg"></span>
							</li>
							<li>
								<small>Date</small>
								<span>(14:25) 21-02-2018</span>
							</li>
							<li>
								<small>Service User</small>
								<span>Mr. Tim Sherman</span>
							</li>
							<li>
								<small>Read By</small>
								<span>-</span>
							</li>
							<li>
								<small>Added By</small>
								<span>Rishi Local</span>
							</li>
							<li class="col-3">
								<small>Description</small>
								<span>Test message for Care Home</span>
							</li>
						</ul>
					</article>
					<span class="listingHandle"></span>
					<aside class="markAsRead">
						<a href="#"><img src="images/printing-tool.svg" class="svg"><span>Print</span></a> <a
							href="#"><img src="images/markAsRead.svg" class="svg"><span>Mark as read</span></a>
					</aside>
				</li>
				<li>
					<span class="checkBox">
						<input type="checkbox" id="id4" hidden>
						<label for="id4"><img src="images/checked.svg" class="svg"></label>
					</span>
					<article>
						<ul class="clearfix list-unstyled">
							<li>
								<small>Module</small>
								<span class="icon"><img src="images/communicationbook.svg" class="svg"></span>
							</li>
							<li>
								<small>Date</small>
								<span>(14:25) 21-02-2018</span>
							</li>
							<li>
								<small>Service User</small>
								<span>Mr. Tim Sherman</span>
							</li>
							<li>
								<small>Read By</small>
								<span>-</span>
							</li>
							<li>
								<small>Added By</small>
								<span>Rishi Local</span>
							</li>
							<li class="col-3">
								<small>Description</small>
								<span>Test message for Care Home</span>
							</li>
						</ul>
					</article>
					<span class="listingHandle"></span>
					<aside class="markAsRead">
						<a href="#"><img src="images/printing-tool.svg" class="svg"><span>Print</span></a> <a
							href="#"><img src="images/markAsRead.svg" class="svg"><span>Mark as read</span></a>
					</aside>
				</li>
				<li>
					<span class="checkBox">
						<input type="checkbox" id="id5" hidden>
						<label for="id5"><img src="images/checked.svg" class="svg"></label>
					</span>
					<article>
						<ul class="clearfix list-unstyled">
							<li>
								<small>Module</small>
								<span class="icon"><img src="images/communicationbook.svg" class="svg"></span>
							</li>
							<li>
								<small>Date</small>
								<span>(14:25) 21-02-2018</span>
							</li>
							<li>
								<small>Service User</small>
								<span>Mr. Tim Sherman</span>
							</li>
							<li>
								<small>Read By</small>
								<span>-</span>
							</li>
							<li>
								<small>Added By</small>
								<span>Rishi Local</span>
							</li>
							<li class="col-3">
								<small>Description</small>
								<span>Test message for Care Home</span>
							</li>
						</ul>
					</article>
					<span class="listingHandle"></span>
					<aside class="markAsRead">
						<a href="#"><img src="images/printing-tool.svg" class="svg"><span>Print</span></a> <a
							href="#"><img src="images/markAsRead.svg" class="svg"><span>Mark as read</span></a>
					</aside>
				</li>
				<li>
					<span class="checkBox">
						<input type="checkbox" id="id6" hidden>
						<label for="id6"><img src="images/checked.svg" class="svg"></label>
					</span>
					<article>
						<ul class="clearfix list-unstyled">
							<li>
								<small>Module</small>
								<span class="icon"><img src="images/communicationbook.svg" class="svg"></span>
							</li>
							<li>
								<small>Date</small>
								<span>(14:25) 21-02-2018</span>
							</li>
							<li>
								<small>Service User</small>
								<span>Mr. Tim Sherman</span>
							</li>
							<li>
								<small>Read By</small>
								<span>-</span>
							</li>
							<li>
								<small>Added By</small>
								<span>Rishi Local</span>
							</li>
							<li class="col-3">
								<small>Description</small>
								<span>Test message for Care Home</span>
							</li>
						</ul>
					</article>
					<span class="listingHandle"></span>
					<aside class="markAsRead">
						<a href="#"><img src="images/printing-tool.svg" class="svg"><span>Print</span></a> <a
							href="#"><img src="images/markAsRead.svg" class="svg"><span>Mark as read</span></a>
					</aside>
				</li>
				<li>
					<span class="checkBox">
						<input type="checkbox" id="id7" hidden>
						<label for="id7"><img src="images/checked.svg" class="svg"></label>
					</span>
					<article>
						<ul class="clearfix list-unstyled">
							<li>
								<small>Module</small>
								<span class="icon"><img src="images/communicationbook.svg" class="svg"></span>
							</li>
							<li>
								<small>Date</small>
								<span>(14:25) 21-02-2018</span>
							</li>
							<li>
								<small>Service User</small>
								<span>Mr. Tim Sherman</span>
							</li>
							<li>
								<small>Read By</small>
								<span>-</span>
							</li>
							<li>
								<small>Added By</small>
								<span>Rishi Local</span>
							</li>
							<li class="col-3">
								<small>Description</small>
								<span>Test message for Care Home</span>
							</li>
						</ul>
					</article>
					<span class="listingHandle"></span>
					<aside class="markAsRead">
						<a href="#"><img src="images/printing-tool.svg" class="svg"><span>Print</span></a> <a
							href="#"><img src="images/markAsRead.svg" class="svg"><span>Mark as read</span></a>
					</aside>
				</li>
				<li>
					<span class="checkBox">
						<input type="checkbox" id="id8" hidden>
						<label for="id8"><img src="images/checked.svg" class="svg"></label>
					</span>
					<article>
						<ul class="clearfix list-unstyled">
							<li>
								<small>Module</small>
								<span class="icon"><img src="images/communicationbook.svg" class="svg"></span>
							</li>
							<li>
								<small>Date</small>
								<span>(14:25) 21-02-2018</span>
							</li>
							<li>
								<small>Service User</small>
								<span>Mr. Tim Sherman</span>
							</li>
							<li>
								<small>Read By</small>
								<span>-</span>
							</li>
							<li>
								<small>Added By</small>
								<span>Rishi Local</span>
							</li>
							<li class="col-3">
								<small>Description</small>
								<span>Test message for Care Home</span>
							</li>
						</ul>
					</article>
					<span class="listingHandle"></span>
					<aside class="markAsRead">
						<a href="#"><img src="images/printing-tool.svg" class="svg"><span>Print</span></a> <a
							href="#"><img src="images/markAsRead.svg" class="svg"><span>Mark as read</span></a>
					</aside>
				</li>
			</ul>
		</div>
	</section>

	<section class="contentFooter">
		<div class="row">
			<div class="col-md-4">
				<div class="listCount">
					<select>
						<option>50</option>
						<option>100</option>
						<option>150</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="records">
					<span class="previous"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
					<div class="counter">
						<span>Page</span>
						<span class="field"><input type="text" value="1"></span>
						<span>of 15</span>
					</div>
					<span class="next"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
				</div>
			</div>
		</div>
	</section>

	<div class="residentSelectChange">
		<span class="filter"><img src="https://jawa.linksdev.co.uk/images/filter-multi.png" alt="filter"></span>
		<div class="fields">
			<div class="form-inline">
				<label>Select Home</label>
				<div class="select">
					<select class="change_global_unit" name="units">
						<option value="">Select Floor/Home</option>
						<optgroup label="3-3-Leander Lodge (Home)">
							<option value="3-home">All (3-3-Leander Lodge Home)</option>
							<option value="1-floor">Floor</option>
							<option value="2-floor">First Floor</option>
							<option value="10-floor">Basement Floor</option>
							<option value="294-floor">Extra Floor</option>
						</optgroup>
						<optgroup label="6-6-Care Home (Home)">
							<option value="6-home">All (6-6-Care Home Home)</option>
							<option value="11-floor">Floor 12</option>
						</optgroup>
						<optgroup label="7-7-Thornton Lodge (Home)">
							<option value="7-home">All (7-7-Thornton Lodge Home)</option>
							<option value="12-floor">12-12-Basement</option>
							<option value="13-floor">13-13-Ground Floor</option>
							<option value="14-floor" selected="selected">14-14-First Floor</option>
						</optgroup>
						<optgroup label="Old Home (Home)">
							<option value="163-home">All (Old Home Home)</option>
							<option value="306-floor">Floor 1</option>
							<option value="307-floor">Floor2</option>
						</optgroup>
					</select>
					<!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129"
						enable-background="new 0 0 129 129" width="512px" height="512px">
						<g>
							<path
								d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"
								fill="#999999"></path>
						</g>
					</svg>
				</div>
			</div>
			<div class="form-inline">
				<label>Service User</label>
				<div class="select">
					<select class="change_global_resident" name="residentID">
						<option value="">Select</option>
						<option value="15" selected="selected">Mr Tim K. Sherman</option>
						<option value="252">Miss Lab Rat</option>
						<option value="370">Mr 370-370-Murray Truelove</option>
						<option value="1483">Mr Shahzad Alam Bhatti</option>
						<option value="1556">Mr Herbert hert van</option>
						<option value="1564">Mr dan201 daniel</option>
						<option value="1637">Mr Jonshon test</option>
						<option value="1863">Mr Adnan Khan Afridi</option>
						<option value="2995">Mr John Smith</option>
						<option value="3029">Mrs Mxxxx Gxxx</option>
						<option value="3031">Mrs Joan Chapman</option>
						<option value="3037">Mr Terry Stockbridge</option>
						<option value="3054">Mr John Sullivan</option>
						<option value="3082">Mr Pxxxxx Mxxxx</option>
					</select>
					<!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129"
						enable-background="new 0 0 129 129" width="512px" height="512px">
						<g>
							<path
								d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"
								fill="#999999"></path>
						</g>
					</svg>
				</div>
			</div>
		</div>
	</div>

	<article class="tutorials">
		<span>Tutorials</span>
		<ul class="list-unstyled">
			<li><a href="#">Tutorial Link 1</a></li>
			<li><a href="#">Tutorial Link 2</a></li>
		</ul>
	</article>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('.historyListing .listingHandle').click(function () {
			$(this).toggleClass('move');
			$(this).parent().children('article').toggleClass('shrink');
		});

		$('input[name="dateRange"]').daterangepicker({
			"opens": "left",
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		});
		$('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
		});

		$('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
			$(this).val('');
		});
	</script>
</body>

</html>