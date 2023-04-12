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
                <li><a href="#">Chef</a></li>
            </ul>
            <span class="title">Service Users</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
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
                <div class="row">
                    <div class="col-md-8">
                        <h4>Allergies <small>(Food)</small></h4>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Type of Allergen</th>
                                    <th>Additional Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Penicillin (Phenoxymethylpenicillin)</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>Abidec (with vitamin A, vitamin D, pyridoxine, riboflavin, nicotinamide and ascorbic acid)</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-striped table-hover">
                                   	<thead>
                                   		<tr>
                                   			<th>Likes</th>
                                   		</tr>
                                   	</thead>
                                    <tbody>
                                        <tr>
                                            <td>Beef</td>
                                        </tr>
                                        <tr>
                                            <td>Potatoes</td>
                                        </tr>
                                        <tr>
                                            <td>Chocolates</td>
                                        </tr>
                                        <tr>
                                            <td>Carrots</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-striped table-hover">
                                   	<thead>
                                   		<tr>
                                   			<th>Dislikes</th>
                                   		</tr>
                                   	</thead>
                                    <tbody>
                                        <tr>
                                            <td>Pork</td>
                                        </tr>
                                        <tr>
                                            <td>Brussel Sprouts</td>
                                        </tr>
                                        <tr>
                                            <td>Pancakes</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <h4>Meal Preferences</h4>
                                <p>
                                    Dislikes dinner.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Food Intake</h4>
                        <ul class="serviceUserFoodInfo list-unstyled">
                            <li>
                                Fish and Chips <small>( 3/4 Plate )</small> <span class="pull-right">24-04-2017</span><br><strong>LUNCH</strong>
                            </li>
                            <li>
                                Scrambled Egg <small>( Full Plate )</small> <span class="pull-right">26-04-2017</span><br><strong>Breakfast</strong>
                            </li>
                            <li>
                                Salad <small>( Full Plate )</small> <span class="pull-right">22-04-2017</span><br><strong>Dinner</strong>
                            </li>
                        </ul>
                        <p>&nbsp;</p>
                        <h4>Recent Orders</h4>
                        <ul class="serviceUserFoodInfo list-unstyled">
                            <li>
                                Fish and Chips <small>( 3/4 Plate )</small> <span class="pull-right">24-04-2017</span><br><strong>LUNCH</strong>
                            </li>
                            <li>
                                Scrambled Egg <small>( Full Plate )</small> <span class="pull-right">26-04-2017</span><br><strong>Breakfast</strong>
                            </li>
                            <li>
                                Salad <small>( Full Plate )</small> <span class="pull-right">22-04-2017</span><br><strong>Dinner</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-4">
                <button>Back</button>
            </div>
            <div class="col-md-4 col-md-offset-4 text-right">
                <div class="form-inline">
                    <label>Service Users</label>
                    <div class="select">
                        <select>
                            <option>Mrs. Bertha</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>

    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
