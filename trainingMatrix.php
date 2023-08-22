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

    <div class="searchFilterDetails">
        <div class="selection" id="ShowFilterSelection">
            <span>Home/Floor <strong>All (3-3 Leander Lodge Home)</strong></span>
            <span>Date <strong>02-08-2023 - 02-08-2023</strong></span>
            <span>Service User <strong>Mr Admitted  Resident</strong></span>
            <span>Carer <strong>Rishi RR R</strong></span>
            <span>Event Type <strong>Adverse Clinical Event</strong></span>
            <span>Classification <strong>Therapeutic Process / Procedures</strong></span>
            <span>Event Grading <strong>No Harm</strong></span>
            <span>Stage <strong>Reported</strong></span>
            <span>Status <strong>Active</strong></span>
        </div>
    </div>
</section>

<section class="contentBody">
    <div class="scrollArea">
        <div class="content" style="padding-right:20px;">
            <table class="matrixTable">
                <tbody>
                    <tr>
                        <td></td>
                        <td rowspan="4" class="divider mandatoryTrainings"></td>
                        <td><span class="completedDue">Completed</span><span class="completedDue">Due</span></td>
                        <td><span class="completedDue">Completed</span><span class="completedDue">Due</span></td>
                        <td rowspan="4" class="divider optionalTrainings"></td>
                        <td><span class="completedDue">Completed</span><span class="completedDue">Due</span></td>
                        <td><span class="completedDue">Completed</span><span class="completedDue">Due</span></td>
                    </tr>
                    <tr>
                        <td></td>

                        <td><span class="trainingName">Sova &amp; Abuse</span></td>
                        <td><span class="trainingName">Health &amp; safety</span></td>

                        <td><span class="trainingName">Fire Safety</span></td>
                        <td><span class="trainingName">Infection Control</span></td>
                    </tr>
                    <tr>
                        <td><span class="name">Stone Cold Smith</span><span class="designation">Healthcare Assistant</span> </td>

                        <td class="schedule refusedTraining"><span></span><span></span></td>
                        <td class="schedule"><span>02.12.2022</span><span>14.03.2023</span></td>

                        <td class="schedule"><span>02.12.2022</span><span>14.03.2023</span></td>
                        <td class="schedule"><span>02.12.2022</span><span>14.03.2023</span></td>
                    </tr>
                    <tr>
                        <td><span class="name">Stone Cold Smith</span><span class="designation">Healthcare Assistant</span> </td>

                        <td class="schedule refusedTraining"><span></span><span></span></td>
                        <td class="schedule"><span>02.12.2022</span><span>14.03.2023</span></td>

                        <td class="schedule"><span>02.12.2022</span><span>14.03.2023</span></td>
                        <td class="schedule"><span>02.12.2022</span><span>14.03.2023</span></td>
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

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
