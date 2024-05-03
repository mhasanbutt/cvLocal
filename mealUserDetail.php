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
                <li><a href="#">Service User</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/meal_ingredients.png"> Service User Detail</span>
		</div>

        <div class="filtersSearch clearfix autoWidth">
            <div class="dropMenu">
                <span class="openDropMenu">Actions</span>
                <ul class="list-unstyled">
                    <li><a href="#" class="export">Export</a></li>
                </ul>
            </div>
        </div>
	</section>

	<section class="contentBody noBg noFooter">
        <div class="mealUserDetail">
            <section>
                <div>
                    <span class="title">Food intake</span>
                    <div class="scrollArea">
                        <ul class="list-unstyled">
                            <li>
                                <span class="title">Breakfast</span>
                                <p><i>22.02.2023</i> Cereal, Fried Egg, Scrambled Eggs, Poached Egg, Boiled Eggs, Porridge, Coffee, Tea, Fruit Juice</p>
                            </li>
                            <li>
                                <span class="title">Lunch</span>
                                <p><i>22.02.2023</i> Cereal, Fried Egg, Scrambled Eggs, Poached Egg, Boiled Eggs, Porridge, Coffee, Tea, Fruit Juice</p>
                            </li>
                            <li>
                                <p><i>22.02.2023</i> Cereal, Fried Egg, Scrambled Eggs</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="likes">
                    <span class="title">Likes</span>
                    <div class="scrollArea">
                        <ul class="list-unstyled">
                            <li>
                                <p>He like to have Tea with 2 Tea spoon honey.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <span class="title">5 Recent Orders</span>
                    <div class="scrollArea">
                        <ul class="list-unstyled">
                            <li>
                            
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="dislikes">
                    <span class="title">Dislikes</span>
                    <div class="scrollArea">
                        <ul class="list-unstyled">
                            <li>
                            
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            
            <aside>
                <span class="title">Food Allergies</span>
                
                <div class="scrollArea">
                    <ul class="list-unstyled">
                        <li>
                            <span class="title">Glorbs</span>
                            <p>Fink has a food allergy from Its been, pharmacy was informed via Phone</p>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
	</section>

    <div class="pop" style="display: none;">
        <div>
            <section>
                <article style="width:500px;">
                    <span class="popFuse"></span>
                    <span class="title" id="popTitle">Upload File</span>
                    
                    <form action="" method="post" class="newForm">
                        <ul class="col2 list-unstyled clearfix">
                            <li>
                                <span class="title">Title: <i>Mandatory</i></span>
                                <input type="text" name="title" id="file_title" required="required">
                            </li>
                            <li>
                                <span class="title">Add to folder: *</span>
                                <select id="folderID" name="folderID"><option value="0">Default Folder</option><option value="346">Folder for Service User Linksdev</option><option value="725">this</option><option value="726">this</option><option value="955">testing</option><option value="956">test</option><option value="961" selected="selected">2</option></select>
                            </li>
                            <li>
                                <span class="title">Visible to non-admin?</span>
                                <input type="checkbox" name="isPublic" id="isPublic" value="1" hidden="">
                                <label for="isPublic"></label>
                            </li>
                            <li style="width:100%;">
                                <span class="title">Upload Picture/Document</span>
                                <input id="file_item" type="file" name="file_item" hidden>
                                <label for="file_item">Upload</label>

                                <div class="progress fullWidth" id="progress_upload_attachment_image">
                                    <div class="progress-bar" id="bar_upload_attachment_image" content="5%"></div>
                                </div>
                            </li>
                        </ul>
                        <input type="hidden" name="imagePath" id="imagePath" value="">
                        <input type="hidden" name="extension" id="ext" value="">
                        <input type="hidden" name="file_id" id="file_id" value="">
                        <input type="hidden" name="addedittype" id="addedittype" value="add">
                        <input type="hidden" name="_token" value="nVdlY61mlWlIOSbea0sLz3fsYbVzNAWAeRDV7sxF">
                        <div class="ctas">
                            <button class="save_btn" id="submit_file_save" disabled="disabled" style="background-color:#6DC77A;">Save</button>
                        </div>
                    </form>
                </article>
            </section>
        </div>
    </div>
 
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