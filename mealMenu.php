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
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/meal_ingredients.png"> Menu</span>
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

        <div class="weekSelector">
            <button class="next"></button>
            <input type="text" value="24 DEC - 30 DEC" style="width:200px;">
            <button class="prev"></button>
        </div>
	</section>

	<section class="contentBody noBg noFooter">
        <div class="mealMenu">
            <div class="week">
                <ul class="list-unstyled clearfix">
                    <li><i>18</i> Monday</li>
                    <li><i>19</i> Tuesday</li>
                    <li><i>20</i> Wednesday</li>
                    <li><i>21</i> Thursday</li>
                    <li><i>22</i> Friday</li>
                    <li><i>23</i> Saturday</li>
                    <li><i>24</i> Sunday</li>
                </ul>
            </div>

            <div class="scrollArea">
                <div class="openShifts">
                    <span class="title">Breakfast <small>(08:30:00)</small></span>
                    
                    <div class="roster">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <div class="meals">
                                    <span class="title">Main meal</span>
                                    <ul class="list-unstyled">
                                        <li>Cereal</li>
                                        <li>Scrambled Eggs</li>
                                        <li>Poached Egg</li>
                                        <li>Boiled Eggs</li>
                                        <li>Porridge</li>
                                    </ul>
                                    <span class="title">Drinks</span>
                                    <ul class="list-unstyled">
                                        <li>Coffee</li>
                                        <li>Tea</li>
                                    </ul>
                                </div>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
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
    <script src="js/select2.min.js"></script>
	<script src="js/custom.js"></script>
    <script>
        $(".select2").select2();
    </script>
</body>

</html>