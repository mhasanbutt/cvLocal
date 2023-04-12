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
            <li><a href="#">Reports</a></li>
        </ul>
        <span class="title"><img src="images/surveyIcon.png"> Activities</span>
    </div>

    <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
        <a href="#" style="background-color:#4477A4;background-image:url('images/print-icon.png');margin-left:10px;">Print</a>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            <strong>Service User Name 1</strong>

            <div class="generalListing">
                <span class="title">Arts & Crafts</span>

                <section class="activityReportDetail">
                    <ul class="list-unstyled clearfix" data-subTitle="Arts & Crafts">
                        <li>
                            <span class="title">title</span>
                            Test heading
                        </li>
                        <li>
                            <span class="title">Date / Time</span>
                            09-03-2023 01:50pm
                        </li>
                        <li>
                            <span class="title">Comments</span>
                            Elizabeth Betty played a round of the Care Vision memory game
                        </li>
                        <li>
                            <span class="title">Added By</span>
                            Rishi R.
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
