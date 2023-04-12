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
        <span class="title"><img src="images/surveyIcon.png"> Conduct Survey</span>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            <div class="surveyForm">
                <article class="categoryBLock" data-catTitle="Category Name">
                    <span class="title">Question 1</span>
                    <div class="starRating clearfix">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <input type="radio" name="rating" id="fiveStar" hidden>
                                <label for="fiveStar"></label>
                            </li>
                            <li>
                                <input type="radio" name="rating" id="fourStar" hidden>
                                <label for="fourStar"></label>
                            </li>
                            <li>
                                <input type="radio" name="rating" id="threeStar" hidden>
                                <label for="threeStar"></label>
                            </li>
                            <li>
                                <input type="radio" name="rating" id="twoStar" hidden>
                                <label for="twoStar"></label>
                            </li>
                            <li>
                                <input type="radio" name="rating" id="oneStar" hidden>
                                <label for="oneStar"></label>
                            </li>
                        </ul>

                        <input type="text" class="commentBox" placeholder="Comments (Non Mandatory)">
                    </div>

                    <span class="title">Question 2</span>
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

                        <input type="text" class="commentBox" placeholder="Comments (Non Mandatory)">
                    </div>
                </article>

                <span class="title">Question 3</span>
                <div class="chooseOneOption clearfix">
                    <ul class="list-unstyled clearfix">
                        <li>
                            <input type="radio" name="agree" id="sAgree" hidden>
                            <label for="sAgree">Strongly Agree</label>
                        </li>
                        <li>
                            <input type="radio" name="agree" id="agree" hidden>
                            <label for="agree">Agree</label>
                        </li>
                        <li>
                            <input type="radio" name="agree" id="neitherAgreeDisagree" hidden>
                            <label for="neitherAgreeDisagree">Neither Agree Nor Disagree</label>
                        </li>
                        <li>
                            <input type="radio" name="agree" id="disagree" hidden>
                            <label for="disagree">Disagree</label>
                        </li>
                        <li>
                            <input type="radio" name="agree" id="sDisagree" hidden>
                            <label for="sDisagree">Strongly Disagree</label>
                        </li>
                    </ul>

                    <input type="text" class="commentBox" placeholder="Comments (Non Mandatory)">
                </div>

                <span class="title">Question 4</span>
                <div class="onlyComments clearfix">
                    <input type="text" class="commentBox" placeholder="Comments">
                </div>

                <span class="title">Question 5</span>
                <div class="multiChoice clearfix">
                    <ul class="list-unstyled clearfix">
                        <li>
                            <input type="checkbox" name="multiChoiceQuest5" id="opt1" hidden>
                            <label for="opt1">Aliquam semper egestas venenatis. Donec rutrum mauris ac pellentesque tincidunt.</label>
                        </li>
                        <li>
                            <input type="checkbox" name="multiChoiceQuest5" id="opt2" hidden>
                            <label for="opt2">Donec rutrum mauris ac pellentesque tincidunt.</label>
                        </li>
                        <li>
                            <input type="checkbox" name="multiChoiceQuest5" id="opt3" hidden>
                            <label for="opt3">Donec rutrum mauris ac pellentesque tincidunt.</label>
                        </li>
                    </ul>

                    <input type="text" class="commentBox" placeholder="Comments (Non Mandatory)">
                </div>
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
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
