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
				<li>Report</li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/heartbeat-multi.png"> Personal Hygiene</span>
		</div>

        <div class="weekSelector" style="width:200px;">
            <button class="next"></button>
            <input type="text" value="24 DEC - 30 DEC">
            <button class="prev"></button>
        </div>
	</section>

	<section class="contentBody noBg noFooter">
        <div class="scrollArea">
            <div class="content">
                <div class="hygieneReport">
                    <div class="profile">
                        <span class="picture"><img src="images/temp-picture.jpg"></span>
                        <span class="name">Mr Abdi Ismail Wais</span>
                        <span class="location">Bond Street <i>B-02</i></span>
                    </div>
                    
                    <div class="calendar">
                        <ul class="days list-unstyled">
                            <li><i>18</i> Monday</li>
                            <li><i>19</i> Tuesday</li>
                            <li><i>20</i> Wednesday</li>
                        </ul>

                        <ul class="record list-unstyled">
                            <li>
                                <div>
                                    <span class="title">Oral hygiene</span>
                                    <div class="scrollArea">
                                        <div class="timeBased">
                                            <span class="time">3:39 pm</span>
                                            <ul>
                                                <li class="refused">Toothbrush</li>
                                                <li>Mouthwash</li>
                                                <li>Floss</li>
                                                <li>Dentures</li>
                                                <li>Clean Dentures</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="title">Personal hygiene</span>
                                    <div class="scrollArea">
                                        <div class="timeBased">
                                            <span class="time">3:39 pm</span>
                                            <ul>
                                                <li class="done">Skin Check</li>
                                                <li>Skin Condition</li>
                                                <li>Cream Applied</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="title">Shower</span>
                                    <div class="timeBased">
                                        <span class="time">3:39 pm</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>