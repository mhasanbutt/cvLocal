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
        .contentBody .ctas {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
        }

        .contentBody>.scroll-wrapper {
            top: 42px;
            bottom: 60px;
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">HR / Management</a></li>
            <li><a href="#">Surveys</a></li>
        </ul>
        <span class="title"><img src="images/surveyIcon.png"> Survey Analysis</span>
    </div>

    <div class="filtersSearch clearfix autoWidth">
        <form>
            <div class="byStaff">
                <input type="text" name="staffname" id="staffname" placeholder="Search by Date">
                <button>search</button>
            </div>
        </form>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="pageSpecificArea">
        <div class="counters">
            <ul class="list-unstyled clearfix">
                <li>
                    <article>
                        <span>01</span><div class="title">Average Rating</div>
                    </article>
                </li>
                <li>
                    <article>
                        <span>01</span><div class="title">Total Surveys Conducted</div>
                    </article>
                </li>
            </ul>
        </div>
    </div>

    <div class="scrollArea">
        <div class="content" style="padding-right:20px;">
            <div class="surveyForm">
                <div class="surveyHeading">Survey Main Heading</div>
                <span class="surveySubHeading">Survey Sub Heading</span>

                <article class="categoryBLock" data-catTitle="Category Name">
                    <span class="title">Question 1</span>
                    <ul class="list-unstyled clearfix statsBox">
                        <li>
                            <ul class="list-unstyled clearfix stars">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li class="half"></li>
                            </ul>
                        </li>
                        <li>
                            <span class="figures">Average Rating - <Strong>3.5</Strong></span>
                            <span class="figures">Comments Left - <strong>55</strong></span>
                        </li>
                        <li>
                            <ul class="list-unstyled clearfix statsProgress">
                                <li><span style="width:20%;"></span></li>
                                <li><span style="width:30%;"></span></li>
                                <li><span style="width:50%;"></span></li>
                                <li><span style="width:60%;"></span></li>
                                <li><span style="width:80%;"></span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="ratingCent">1 Star - <strong>13 (15%)</strong></span>
                            <span class="ratingCent">2 Star - <strong>21 (17%)</strong></span>
                            <span class="ratingCent">3 Star - <strong>32 (23%)</strong></span>
                            <span class="ratingCent">4 Star - <strong>38 (25%)</strong></span>
                            <span class="ratingCent">5 Star - <strong>55 (33%)</strong></span>
                        </li>
                    </ul>

                    <span class="title">Question 2</span>
                    <ul class="list-unstyled clearfix statsBox">
                        <li>
                            <div class="chooseOneOption clearfix">
                                <ul class="list-unstyled clearfix">
                                    <li>
                                        <input type="radio" name="yesNo" id="yes" hidden>
                                        <label for="yes">Yes</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="yesNo" id="no" hidden>
                                        <label for="no">No</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="yesNo" id="na" hidden>
                                        <label for="na">N / A</label>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span class="figures">Average Rating - <Strong>3.5</Strong></span>
                            <span class="figures">Comments Left - <strong>55</strong></span>
                        </li>
                        <li>
                            <ul class="list-unstyled clearfix statsProgress">
                                <li><span style="width:20%;"></span></li>
                                <li><span style="width:30%;"></span></li>
                                <li><span style="width:50%;"></span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="ratingCent">Yes - <strong>13 (15%)</strong></span>
                            <span class="ratingCent">No - <strong>21 (17%)</strong></span>
                            <span class="ratingCent">N /A - <strong>32 (23%)</strong></span>
                        </li>
                    </ul>
                </article>

                <span class="title">Question 3</span>
                <ul class="list-unstyled clearfix statsBox">
                    <li>
                        <span class="figures">Average Rating - <Strong>3.5</Strong></span>
                        <span class="figures">Comments Left - <strong>55</strong></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ctas">
        <button>Back</button>
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
