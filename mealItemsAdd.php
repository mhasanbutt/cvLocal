<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
    <style>
        .contentBody .ctas {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
        }

        .contentBody>.scroll-wrapper {
            bottom: 60px;
        }
    </style>
</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Nutrition</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/meal_ingredients.png"> Meal items</span>
		</div>
	</section>

	<section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
                <img src="images/allergiesTable.png" style="width:470px;" class="pull-right">
                
                <div class="newForm" style="width: calc(100% - 480px);">
                    <ul class="list-unstyled clearfix col3">
                        <li>
                            <span class="title">Name</span>
                            <input type="text">
                        </li>
                        <li>
                            <span class="title">Type</span>
                            <select>
                                <option>Main</option>
                                <option>Drink</option>
                                <option>Dessert</option>
                            </select>
                        </li>
                        <li>
                            <span class="title">14 Allergens</span>
                            <select multiple class="select2">
                                <option>Main</option>
                                <option>Drink</option>
                                <option>Dessert</option>
                            </select>
                        </li>
                        <li>
                            <span class="title">Upload</span>
                            <input type="file" hidden>
                            <label>Upload</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="ctas">
            <button>Back</button> <button class="green">Save</button>
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