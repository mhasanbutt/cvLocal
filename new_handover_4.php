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
                    <div class="devices emps">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <article>
                                    <img src="images/emp-profile.jpg" alt="">
                                    <div class="empName">
                                        Rishi R. <i>(Administrator)</i>
                                    </div>
                                    <div class="radioSet">
                                        <input type="radio" name="emp1" id="presentStaff" hidden> <label for="presentStaff">H</label>
                                        <input type="radio" name="emp1" id="present" hidden> <label for="present">P</label>
                                        <input type="radio" name="emp1" id="late" hidden> <label for="late">L</label>
                                        <input type="radio" name="emp1" id="absent" hidden> <label for="absent">A</label>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <div class="formFields">
                        <div class="form-group">
                            <label for="">Staf Information (Lateness, sicknes, absence etc.)</label>
                            <textarea name="" id=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Any Other Information</label>
                            <textarea name="" id=""></textarea>
                        </div>
                    </div>
                </div>
            </section>
            <aside>
                <div class="scrollArea">
                    <div>
                        <div class="form-group clearfix">
                            <label for="">AM / PM Handover?</label>
                            <div class="radioButtons">
                                <input type="radio" name="AmPm" id="am" hidden>
                                <label for="am">AM</label>
                                <input type="radio" name="AmPm" id="pm" hidden>
                                <label for="pm">PM</label>
                            </div>
                        </div>
                        <hr>

                        <span class="title">Current Staff on Shift</span>
                        Rishi R.
                        <hr>

                        <span class="title">Next Staff on Shift</span>
                        
                        <div class="credentials">
                            <label for="">Username</label>
                            <input type="text" name="" id="">

                            <label for="">Password</label>
                            <input type="password" name="" id="">

                            <button>Verify</button>
                        </div>
                        <hr>

                        <ul class="list-unstyled handOverLegends">
                            <li><i>H</i> Present During Handover</li>
                            <li><i>P</i> Present</li>
                            <li><i>L</i> Late</li>
                            <li><i>A</i> Absent</li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>

		<button class="newStyle">Back</button> <button class="newStyle green">Complete Handover</button>

		<ul class="list-unstyled clearfix steps">
			<li data-label="1" class="done">
				Service User Overview
			</li>
			<li data-label="2" class="done">
				Housekeeping &amp; Devices
			</li>
			<li data-label="3" class="done">
				Group<br>Allocation
			</li>
			<li data-label="4" class="current">
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