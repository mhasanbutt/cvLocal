<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li>
                <a href="#">HR</a>
            </li>
        </ul>
        <span class="title"><img src="images/trainingMatrix.png" alt="Training Matrix"> Training Matrix <small>( 2019 - 2020 )</small></span>
    </div>
    <ul class="trainingStats clearfix list-unstyled">
        <li>
            <span>1</span> Missing Training
        </li>
        <li>
            <span>1</span> Expired Training
        </li>
        <li>
            <span>1</span> Training due to Expire
        </li>
        <li>
            <span>1</span> Training in Process
        </li>
    </ul>
    <ul class="search list-unstyled clearfix">
        <li>
            <div class="fieldContainer searchField">
                <input type="text" placeholder="Search employee">
                <img src="images/magnifier-tool.svg" class="searchIcon svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Floor/Home</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Department</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Qualification Name</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Employee</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Position</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Status</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Year</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
    </ul>
    <div class="clearfix">
        <button type="button" class="searchButton">Search</button>
        <button type="button" class="defaultButton">Reset Filter</button>
        <div class="pull-right clearfix">
            <div class="noAlergy btn-group">
                <button type="button" class="btn orange">
                    <img src="images/printing-tool.svg" class="svg">Print
                </button>
            </div>
        </div>
    </div>
</section>

<section class="contentBody">
    <div class="scrollArea">
        <div class="content trainingTable">
            <table class="table training table-bordered">
                <thead>
                    <tr>
                        <th>Qualification <img src="images/right-arrow.svg" class="svg"></th>
                        <th colspan="2">Fire Safety</th>
                        <th colspan="2">Sova &amp; Abuse</th>
                        <th colspan="2">Manual Handling</th>
                        <th colspan="2">Manual Handling</th>
                        <th colspan="2">Manual Handling</th>
                    </tr>
                    <tr>
                        <th>Employee <img src="images/right-arrow.svg" class="svg"></th>
                        <th>Date Completed</th>
                        <th>Date Due</th>
                        <th>Date Completed</th>
                        <th>Date Due</th>
                        <th>Date Completed</th>
                        <th>Date Due</th>
                        <th>Date Completed</th>
                        <th>Date Due</th><th>Date Completed</th>
                        <th>Date Due</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Laura Ross <span>Receptionist</span></td>
                        <td class="green">01-01-2019</td>
                        <td class="green">01-01-2020</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td><td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Maria Rodrigues <span>Healthcare Assistant</span></td>
                        <td class="orange">01-01-2019</td>
                        <td class="orange">01-01-2020</td>
                        <td class="red">01-01-2020</td>
                        <td class="red">01-01-2020</td>
                        <td>01-01-2020</td>
                        <td>01-01-2020</td>
                        <td>01-01-2020</td>
                        <td>01-01-2020</td><td>01-01-2020</td>
                        <td>01-01-2020</td>
                    </tr>
                    <tr>
                        <td>Maria Cruz <span>Team Leader</span></td>
                        <td>01-01-2019</td>
                        <td>01-01-2020</td>
                        <td><img src="images/delete.svg" class="svg notCompleted"></td>
                        <td><img src="images/delete.svg" class="svg notCompleted"></td>
                        <td class="blue">01-01-2020</td>
                        <td class="blue">01-01-2020</td>
                        <td class="blue">01-01-2020</td>
                        <td class="blue">01-01-2020</td><td class="blue">01-01-2020</td>
                        <td class="blue">01-01-2020</td>
                    </tr>
                </tbody>
            </table>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
