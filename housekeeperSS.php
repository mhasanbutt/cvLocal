<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php include("header.php");?>

    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Houskeeping</a></li>
            </ul>
            <span class="title">Dashboard</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="row RSDashboardInfo">
                            <div class="col-md-8">
                                <a href="#" class="profilePicture"><img src="images/staff1.jpg"></a>
                                <ul class="info list-unstyled">
                                    <li>
                                        <small>Full name</small>
                                        Lorem Ipsum<span></span>
                                    </li>
                                    <li>
                                        <small>Username</small>
                                        Dolorem Ipsum
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row modules">
                            <div class="col-md-4 text-center">
                                <a href="#"><img src="images/laundry.svg" class="svg">
                                <span>Laundry</span></a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#"><img src="images/recipe.svg" class="svg">
                                <span>Maintenance Book</span></a>
                            </div>
                            <div class="col-md-4 text-center" id="cleaning">
                                <a href="#" class="actionPop"><img src="images/cleaner.svg" class="svg">
                                <span>Cleaning</span></a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#"><img src="images/t-shirt.svg" class="svg">
                                <span>Clothing List</span></a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#"><img src="images/address-book.svg" class="svg">
                                <span>Contacts</span></a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#"><img src="images/box.svg" class="svg">
                                <span>Request Supplies</span></a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#"><img src="images/forms.svg" class="svg">
                                <span>Safeguarding Form</span></a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#"><img src="images/chat.svg" class="svg">
                                <span>Message Centre</span></a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="#"><img src="images/list.svg" class="svg">
                                <span>To-Do List</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <article class="dashboardQuickLinks">
                            <h5>To Do List <a href="#">View All</a></h5>
                            <ul class="list-unstyled">
                                <li><a href="#">dolorem ipsum quia dolor sit amet</a></li>
                                <li><a href="#">dolorem ipsum quia dolor sit amet</a></li>
                                <li><a href="#">dolorem ipsum quia dolor sit amet</a></li>
                                <li><a href="#">dolorem ipsum quia dolor sit amet</a></li>
                                <li><a href="#">dolorem ipsum quia dolor sit amet</a></li>
                                <li><a href="#">dolorem ipsum quia dolor sit amet</a></li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bottom-sheet">
        	<span class="actionPopClose"><img src="images/close.svg" class="svg"></span>
        	<ul class="list-unstyled clearfix">
				<li><a href="#" class="SelectFloor"><img src="images/calendar.svg" class="svg"><br>Scheduled Cleaning</a></li>
				<li><a href="#" class="SelectFloor"><img src="images/cleaner.svg" class="svg"><br> Deep Cleaning</a></li>
				<li><a href="#" class="SelectFloor"><img src="images/spot.svg" class="svg"><br> Spot Cleaning</a></li>
			</ul>
		</div>
		<div class="actionOverlay"></div>
    
     </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button>
            </div>
        </div>
    </section>
	
  	
<div class="foodSelection areaSelection areaSelectionHistory ">
	<h4>Select Area</h4>
	<span class="closeFoodSelection"><img src="images/close.svg" class="svg"></span>
	<div class="scrollArea">
		<form class="inBodyForm roomsList">
			<div class="row">
				<div class="col-md-3">
					<table class="floorsTable table table-striped table-hover">
						<thead>
							<tr>
								<th>Floor 1</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3">
					<table class="floorsTable table table-striped table-hover">
						<thead>
							<tr>
								<th colspan="2">Floor 2</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3">
					<table class="floorsTable table table-striped table-hover">
						<thead>
							<tr>
								<th>Floor 3</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3">
					<table class="floorsTable table table-striped table-hover">
						<thead>
							<tr>
								<th>Floor 4</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
							<tr>
								<td><a href="#">Room Name</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</form>
	</div>
	<div class="foot text-right">
		<button>Done</button>
	</div>
</div>
   	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>

    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
		
		$('.actionPop').click(function(){
            $('.contentBody div:last-child').addClass('active');
			$('.bottom-sheet').addClass('active');
        });
		$('.actionPopClose').click(function(){
            $('.contentBody div:last-child').removeClass('active');
			$('.bottom-sheet').removeClass('active');
        });
		
		$('.SelectFloor').click(function(){
            $('.contentBody div:last-child').removeClass('active');
			$('.bottom-sheet').removeClass('active');
        });
		
		
		$('.SelectFloor').click(function(){
            $('.foodSelection').addClass('show');
			$('.overlay').addClass('active');
        });
		
		$('.closeFoodSelection').click(function(){
            $('.foodSelection').removeClass('show');
			$('.overlay').removeClass('active');
        });
		
		
		
    </script>
</body>
</html>
