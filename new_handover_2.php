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

				<span class="selectionInfo">
                    <i>Selected Floor</i> Floor 12
                </span>

                <span class="selectionInfo">
                    <i>Selected Group</i> All Groups
                </span>

			</div>
		</section>
	</section>

	<section class="contentBody noBg noFooter">
		<div class="handoverColumns">
            <section>
                <div class="scrollArea">
                    <div class="devices">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <article>
                                    <div class="deviceName">
                                        <span>Device 1 <i>(Mobile)</i></span>
                                    </div>
                                    <div class="radioSet">
                                        <input type="radio" name="device1" id="withStaff" hidden> <label for="withStaff">S</label>
                                        <input type="radio" name="device1" id="inRoom" hidden> <label for="inRoom">C</label>
                                        <input type="radio" name="device1" id="missing" hidden> <label for="missing">M</label>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <div class="deviceName">
                                        <span>Device Name Long 2 <i>(Mobile)</i></span>
                                    </div>
                                    <div class="radioSet">
                                        <input type="radio" name="device1" id="withStaff" hidden> <label for="withStaff">S</label>
                                        <input type="radio" name="device1" id="inRoom" hidden> <label for="inRoom">C</label>
                                        <input type="radio" name="device1" id="missing" hidden> <label for="missing">M</label>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <div class="formFields">
                        <div class="form-group">
                            <label for="">Important Information About Home and Residents</label>
                            <textarea name="" id=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Infection Control</label>
                            <textarea name="" id=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Maintenance / Housekeeping / Laundry Notes</label>
                            <textarea name="" id=""></textarea>
                        </div>
                    </div>
                </div>
            </section>
            <aside>
                <div class="scrollArea">
                    <div>
                        <div class="form-group">
                            <label for="">Medicine Room Key?</label>
                            <span class="toggles fixed">
                                <input type="checkbox" name="controlled" id="activateList" class="ios-toggle">
                                <label for="activateList" class="checkbox-label" data-off="NO" data-on="YES"></label>
                            </span>
                        </div>
                        <hr>

                        <ul class="list-unstyled stats">
                            <li>
                                <span>0</span> Pending Cleaning
                            </li>
                            <li>
                                <span>0</span> Missed Cleaning
                            </li>
                            <li>
                                <span>0</span> Cleaning Not Done
                            </li>
                            <li>
                                <span>0</span> Completed Cleaning
                            </li>
                            <li>
                                <span>0</span> Cleaning Not Required
                            </li>
                        </ul>
                        <hr>

                        <ul class="list-unstyled handOverLegends">
                            <li><i>S</i> Currently with staff member</li>
                            <li><i>C</i> Charging or in storage room</li>
                            <li><i>M</i> Currently missing</li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>

		<button class="newStyle">Back</button> <button class="newStyle green">Proceed To Next Step</button>

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