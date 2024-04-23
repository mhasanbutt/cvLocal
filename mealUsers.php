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
				<li><a href="#">Nutrition</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/meal_ingredients.png"> Service Users</span>
		</div>

        <div class="filtersSearch clearfix autoWidth">
            <div class="dropMenu">
                <span class="openDropMenu">Actions</span>
                <ul class="list-unstyled">
                    <li><a href="#" class="export">Export</a></li>
                </ul>
            </div>

            <a class="new icon" href="#">Add Meal</a>
        </div>
	</section>

	<section class="contentBody noBg noFooter">
        
	</section>
 
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/select2.min.js"></script>
	<script src="js/custom.js"></script>
    <script>
        $(".select2").select2();
    </script>
</body>

</html>