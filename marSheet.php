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
                <li><a href="#">Care</a></li>
                <li><a href="#">Medication</a></li>
            </ul>
            <span class="title">MAR Sheet</span>
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
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
               	<div class="row">
               		<div class="col-md-5">
               			<div class="marUserProfile">
               				<img src="images/temp-picture.jpg">
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
               		</div>
               		<div class="col-md-7">
               			<ul class="diseases list-unstyled">
							<li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
							<li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
							<li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
						</ul><br>
              			<hr>
              			<div class="marSheetIninfo clearfix">
							<span class="pull-left">Home Name: <strong>ABCxyz</strong></span>
							<span class="pull-left">Home Address: <strong>Frankfort</strong></span>
							<span class="pull-left">Doctor: <strong>Dr. Who</strong></span>
							<br><hr>
							<ul class="diseases list-unstyled">
								<li><img src="images/exclamation-mark.svg" class="svg">Penicillin (Phenoxymethylpenicillin)</li>
								<li><img src="images/exclamation-mark.svg" class="svg">Abiraterone</li>
								<li><img src="images/exclamation-mark.svg" class="svg">Accupro</li>
								<li><img src="images/exclamation-mark.svg" class="svg">Acepril</li>
								<li><img src="images/exclamation-mark.svg" class="svg">Another Allergy</li>
								<li><img src="images/exclamation-mark.svg" class="svg">One More Allergy</li>
							</ul>
						</div>
               		</div>
               	</div>
                <div class="marSheetDateInfo">
                    <span>Start Day: <strong>Monday</strong></span>
                    <span>Start Date: <strong>16-09-2017</strong></span>
                    <span>End Date: <strong>19-09-2017</strong></span>
                </div>
                <ul class="marSheetListing list-unstyled clearfix">
                    <li>
                        <div class="view"><span data-toggle="modal" data-target="#knowMedicine"><img src="images/exclamation-mark.svg" class="svg"></span><strong>WhatCouldBe theLongest PossibleName of AMedicine</strong> <small>(200mg)</small></div>
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="medicineInfo list-unstyled">
                                    <li><span>Medicine Type: </span>Tablet</li>
                                    <li><span>Dosage: </span>2 Tablets</li>
                                    <li><span>Route: </span><span class="routeAdministration">Oral</span></li>
                                </ul>
                                <strong>Directions: </strong>Vivamus in est augue. Donec ornare eget ipsum a dapibus. Mauris erat tortor, mattis ut odio et, aliquet volutpat arcu. Phasellus sed finibus ex. Nulla elementum auctor diam, imperdiet lao.
                            </div>
                            <div class="col-md-1 timeSlot hidden">
                                <ul class="list-unstyled">
                                    <li><strong>Time Slot</strong></li>
                                    <li>00:00</li>
                                    <li>00:00</li>
                                    <li>00:00</li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th colspan="7">Week 1</th>
                                            <th colspan="7">Week 2</th>
                                            <th colspan="7">Week 3</th>
                                            <th colspan="7">Week 4</th>
                                        </tr>
                                        <tr>
                                            <th>Time Slot</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>13</th>
                                            <th>14</th>
                                            <th>15</th>
                                            <th>16</th>
                                            <th>17</th>
                                            <th>18</th>
                                            <th>19</th>
                                            <th>20</th>
                                            <th>21</th>
                                            <th>22</th>
                                            <th>23</th>
                                            <th>24</th>
                                            <th>25</th>
                                            <th>26</th>
                                            <th>27</th>
                                            <th>28</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>08:00</td>
                                            <td><a href="#" class="initials" data-toggle="modal" data-target="#medicationInfo">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes A">A</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">D</span></td>
                                            <td><span class="codes">D</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                        </tr>
                                        <tr>
                                            <td>12:00</td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes A">A</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">D</span></td>
                                            <td><span class="codes">D</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                        </tr>
                                        <tr>
                                            <td>16:00</td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes A">A</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">D</span></td>
                                            <td><span class="codes">D</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                        </tr>
                                        <tr>
                                            <td>20:00</td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes A">A</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">D</span></td>
                                            <td><span class="codes">D</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="stockInfo">
                                    <span class="medInfo">Carried Forward:	<strong>5</strong></span>
                                    <span class="medInfo">Received:	<strong>30</strong></span>
                                    <span class="medInfo">By:	<strong>Robert Williams</strong></span>
                                    <span class="medInfo">Returned/Destroyed:	<strong>3</strong></span>
                                    <span class="medInfo">By:	<strong>Harry Parker</strong></span>
                                    <span class="medInfo">Total: <strong>32</strong></span>
                                    <span class="medInfo">Consumed:	<strong>10</strong></span>
                                    <span class="medInfo">Balance:	<strong>22</strong></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="view"><span data-toggle="modal" data-target="#knowMedicine"><img src="images/exclamation-mark.svg" class="svg"></span><strong>WhatCouldBe theLongest PossibleName of AMedicine</strong> <small>(200mg)</small></div>
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="medicineInfo list-unstyled">
                                    <li><span>Medicine Type: </span>Tablet</li>
                                    <li><span>Dosage: </span>2 Tablets</li>
                                    <li><span>Route: </span><span class="routeAdministration">Oral</span></li>
                                </ul>
                                <strong>Directions: </strong>Vivamus in est augue. Donec ornare eget ipsum a dapibus. Mauris erat tortor, mattis ut odio et, aliquet volutpat arcu. Phasellus sed finibus ex. Nulla elementum auctor diam, imperdiet lao.
                            </div>
                            <div class="col-md-1 timeSlot hidden">
                                <ul class="list-unstyled">
                                    <li><strong>Time Slot</strong></li>
                                    <li>00:00</li>
                                    <li>00:00</li>
                                    <li>00:00</li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th colspan="7">Week 1</th>
                                            <th colspan="7">Week 2</th>
                                            <th colspan="7">Week 3</th>
                                            <th colspan="7">Week 4</th>
                                        </tr>
                                        <tr>
                                            <th>Time Slot</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>13</th>
                                            <th>14</th>
                                            <th>15</th>
                                            <th>16</th>
                                            <th>17</th>
                                            <th>18</th>
                                            <th>19</th>
                                            <th>20</th>
                                            <th>21</th>
                                            <th>22</th>
                                            <th>23</th>
                                            <th>24</th>
                                            <th>25</th>
                                            <th>26</th>
                                            <th>27</th>
                                            <th>28</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10:00</td>
                                            <td><a href="#" class="initials" data-toggle="modal" data-target="#medicationInfo">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes A">A</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">D</span></td>
                                            <td><span class="codes">D</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                        </tr>
                                        <tr>
                                            <td>--:--</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>--:--</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>--:--</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="stockInfo">
                                    <span class="medInfo">Carried Forward:	<strong>5</strong></span>
                                    <span class="medInfo">Received:	<strong>30</strong></span>
                                    <span class="medInfo">By:	<strong>Robert Williams</strong></span>
                                    <span class="medInfo">Returned/Destroyed:	<strong>3</strong></span>
                                    <span class="medInfo">By:	<strong>Harry Parker</strong></span>
                                    <span class="medInfo">Total: <strong>32</strong></span>
                                    <span class="medInfo">Consumed:	<strong>10</strong></span>
                                    <span class="medInfo">Balance:	<strong>22</strong></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="view"><span data-toggle="modal" data-target="#knowMedicine"><img src="images/exclamation-mark.svg" class="svg"></span><strong>WhatCouldBe theLongest PossibleName of AMedicine</strong> <small>(200mg)</small></div>
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="medicineInfo list-unstyled">
                                    <li><span>Medicine Type: </span>Tablet</li>
                                    <li><span>Dosage: </span>2 Tablets</li>
                                    <li><span>Route: </span><span class="routeAdministration">Oral</span></li>
                                </ul>
                                <strong>Directions: </strong>Vivamus in est augue. Donec ornare eget ipsum a dapibus. Mauris erat tortor, mattis ut odio et, aliquet volutpat arcu. Phasellus sed finibus ex. Nulla elementum auctor diam, imperdiet lao.
                            </div>
                            <div class="col-md-1 timeSlot hidden">
                                <ul class="list-unstyled">
                                    <li><strong>Time Slot</strong></li>
                                    <li>00:00</li>
                                    <li>00:00</li>
                                    <li>00:00</li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th colspan="7">Week 1</th>
                                            <th colspan="7">Week 2</th>
                                            <th colspan="7">Week 3</th>
                                            <th colspan="7">Week 4</th>
                                        </tr>
                                        <tr>
                                            <th>Time Slot</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>13</th>
                                            <th>14</th>
                                            <th>15</th>
                                            <th>16</th>
                                            <th>17</th>
                                            <th>18</th>
                                            <th>19</th>
                                            <th>20</th>
                                            <th>21</th>
                                            <th>22</th>
                                            <th>23</th>
                                            <th>24</th>
                                            <th>25</th>
                                            <th>26</th>
                                            <th>27</th>
                                            <th>28</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10:00</td>
                                            <td><a href="#" class="initials" data-toggle="modal" data-target="#medicationInfo">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes A">A</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><span class="codes">C</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><span class="codes">D</span></td>
                                            <td><span class="codes">D</span></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                            <td><a href="#" class="initials">TC</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="stockInfo">
                                    <span class="medInfo">Carried Forward:	<strong>5</strong></span>
                                    <span class="medInfo">Received:	<strong>30</strong></span>
                                    <span class="medInfo">By:	<strong>Robert Williams</strong></span>
                                    <span class="medInfo">Returned/Destroyed:	<strong>3</strong></span>
                                    <span class="medInfo">By:	<strong>Harry Parker</strong></span>
                                    <span class="medInfo">Total: <strong>32</strong></span>
                                    <span class="medInfo">Consumed:	<strong>10</strong></span>
                                    <span class="medInfo">Balance:	<strong>22</strong></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <article class="medicationLegends">
                    <span>Refured <strong>A</strong></span> <span>Nausea or vomiting <strong>B</strong></span> <span>Hospitalised <strong>C</strong></span> <span>social leave <strong>D</strong></span> <span>refused &amp; destroyed <strong>E</strong></span> <span>offered PRN when required <strong>N</strong></span> <span>prompt <strong>P</strong></span> <span>make available <strong>M</strong></span> <span>Other <strong>F</strong></span> <span>See Note <strong>G</strong></span>
                </article>
            </div>
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

                    <div class="counter">
                        <span>Page</span>
                        <span class="field"><input type="text" value="1"></span>
                        <span>of 15</span>
                    </div>
                    <span class="next"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <div class="form-inline">
                    <label>Sort by</label>
                    <div class="select">
                        <select>
                            <option>Identified Needs</option>
                            <option>Care Plan</option>
                            <option>Service User</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade knowMedicine" id="knowMedicine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Medicine Name (200mg)</h4>
                </div>
                <div class="modal-body">
                    <div class="inBodyForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type of Medicine</label>
                                    <input type="text" disabled class="disabled">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Used For</label>
                                    <input type="text" disabled class="disabled">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Before Taking</label>
                                    <textarea disabled class="disabled"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>How to take</label>
                                    <input type="text" disabled class="disabled">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Side-Effect</label>
                                    <textarea disabled class="disabled"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade medicinePot" id="medicationInfo" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body clearfix">
                    <div class="serviceUserInfo clearfix">
                        <img src="images/temp-picture.jpg"><br>
                            Terrance Edwards (Terry)<br>
                            Date of Birth: 15-04-1956<br>
                            Client No.: ID25746<br>
                            Location: Room32
                        </div>
                    <ul class="diseases clearfix list-unstyled">
                        <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                        <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                        <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                    </ul>
                    <div class="row">
                        <div class="col-md-4">
                            GP Name: <br><label>Dr. Who</label>
                        </div>
                        <div class="col-md-4">
                            Medicine Name: <br><label>Penicilin</label>
                        </div>
                        <div class="col-md-4">
                            Medicine Type: <br><label>Tablet</label>
                        </div>
                        <div class="col-md-4">
                            Dosage: <br><label>2 Tablets</label>
                        </div>
                        <div class="col-md-4">
                            Route: <br><label>Oral</label>
                        </div>
                        <div class="col-md-4">
                            Date/Time Administered: <br><label>14-09-2017 00:00</label>
                        </div>
                        <div class="col-md-4">
                            Status: <br><label>Administrated</label>
                        </div>
                        <div class="col-md-4">
                            Follow Up: <br><label>22-09-2017</label>
                        </div>
                        <div class="col-md-4">
                            Quantity: <br><label>2</label>
                        </div>
                        <div class="col-md-8">
                            <br><label>CONTROLLED</label> (Witnessed by: Carer)
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>

    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
