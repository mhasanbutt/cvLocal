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
    <style>
        .contentBody .scroll-wrapper {
            bottom: 60px;
        }
        .contentBody .ctas {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Rota</a></li>
            <li><a href="#">Requests</a></li>
            <li><a href="#">Leave Requests</a></li>
        </ul>
        <span class="title"><img src="images/leaveRequest.png"> New Leave Request</span>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            <form class="newLeave">
                <div class="mainForm newForm">
                    <ul class="list-unstyled clearfix col2">
                        <li>
                            <span class="title">Department</span>
                            <select>
                                <option disabled>Select Department</option>
                            </select>
                        </li>
                        <li>
                            <span class="title">Position</span>
                            <select>
                                <option disabled>Select Position</option>
                            </select>
                        </li>
                        <li>
                            <span class="title">User</span>
                            <select class="select2">
                                <option disabled>Select Users</option>
                            </select>
                        </li>
                        <li>
                            <span class="title">Leave Type</span>
                            <select>
                                <option disabled>Select Type</option>
                            </select>
                        </li>
                        <li>
                            <span class="title">Floor</span>
                            <select>
                                <option disabled>Select Floor</option>
                            </select>
                        </li>
                        <li>
                            <span class="title">Start Date</span>
                            <input type="date">
                        </li>
                        <li>
                            <span class="title">End Date</span>
                            <input type="date">
                        </li>
                        <li>
                            <span class="title">Days</span>
                            <input type="text" class="disabled" disabled>
                        </li>
                        <li>
                            <span class="title">Status</span>
                            <select>
                                <option disabled>Select Status</option>
                            </select>
                        </li>
                        <li class="textarea" style="width: 100%;">
                            <span class="title">Message</span>
                            <textarea></textarea>
                        </li>
                    </ul>
                </div>

                <div class="leavesAllocated newForm">
                    Annual Leave hours Allocated <small>(Breaks Excluded)</small>
                    <div class="hours">
                        <span>13</span> hours, <span>45</span> minutes
                    </div>
                    <ul class="clearfix list-unstyled">
                        <li>
                            <input type="date" class="disabled" disabled>
                        </li>
                        <li>
                            <select>
                                <option>
                                    16 Hour Manager Shift (09:00 18:00)
                                </option>
                            </select>
                        </li>
                    </ul>
                </div>

                <div class="otherStaffLeaves">
                    Other Staff on Leave During that Period

                    <article>
                        <span class="date">21.11.2023</span>
                        <ul class="list-unstyled">
                            <li>
                                <span class="staffName">Arthur Shelby</span> -
                            </li>
                            <li>
                                <span class="staffName">Jane Doe</span> [6 Hour Manager Shift (09:00 - 18:00)]
                            </li>
                        </ul>
                    </article>
                    <article>
                        <span class="date">21.11.2023</span>
                        <ul class="list-unstyled">
                            <li>
                                <span class="staffName">Arthur Shelby</span> -
                            </li>
                            <li>
                                <span class="staffName">Jane Doe</span> [6 Hour Manager Shift (09:00 - 18:00)]
                            </li>
                        </ul>
                    </article>
                </div>
            </form>
        </div>
    </div>

    <div class="ctas">
        <button>Back</button>
        <button class="green">add leave</button>
    </div>
</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
