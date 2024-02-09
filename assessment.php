<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style>
        .scroll-wrapper {
            bottom: 50px;
        }

        .ctas {
            position: absolute;
            bottom: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Care</a></li>
                <li><a href="#">Assessments</a></li>
            </ul>
            <span class="title"><img src="https://jawa.linksdev.co.uk/images/folder-search.png"> Review Risk Assessment</span>
        </div>

        <div class="ProfileInfo">
            <span class="profileImage"><img src="images/temp-picture.jpg"></span>
            <ul class="list-unstyled">
                <li>
                    <span>Service User Name</span>
                    Terrance Edwards
                </li>
                <li>
                    <span>Date of Birth</span>
                    05-04-1974
                </li>
                <li>
                    <span>Client No.</span>
                    5921583
                </li>
                <li>
                    <span>Location</span>
                    Oxford St.
                </li>
            </ul>
        </div>
    </section>

    <section class="contentBody noBg noFooter">
        <div class="counters clearfix">
            <ul class="list-unstyled clearfix pull-right">
                <li><article><span>12</span><div class="title"><i>Staff with 100%</i></div> </article></li>
                <li><article><span>12</span><div class="title"><i>Staff with less then 75%</i></div> </article></li>
                <li><article><span>12</span><div class="title"><i> Staff with less then 50%</i></div> </article></li>
                <li><article><span>12</span><div class="title"><i>Staff with less then 25%</i></div> </article></li>
            </ul>

            <span class="title">
                Observations / Handover Notes since<br>
                23-10-2023
            </span>
        </div>

        <div class="scrollArea">
            <div class="content">
                <div class="assessmentQuestions">
                    <article>
                        <span class="question">Sex</span>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <input type="radio" name="sex" id="sex1" hidden>
                                <label for="sex1">Male</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex2" hidden>
                                <label for="sex2">Female</label>
                            </li>
                        </ul>
                    </article>

                    <article>
                        <span class="question">Age</span>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <input type="radio" name="sex" id="sex1" hidden>
                                <label for="sex1">14 - 49</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex2" hidden>
                                <label for="sex2">50 - 64</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex1" hidden>
                                <label for="sex1">65 - 74</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex2" hidden>
                                <label for="sex2">75 - 80</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex2" hidden>
                                <label for="sex2">81+</label>
                            </li>
                        </ul>
                    </article>

                    <article>
                        <span class="question">Continence <i>(More than one option allowed)</i></span>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <input type="checkbox" name="continence" id="continence1" hidden>
                                <label for="continence1">Male</label>
                            </li>
                            <li>
                                <input type="checkbox" name="continence" id="continence2" hidden>
                                <label for="continence2">Female</label>
                            </li>
                        </ul>
                    </article>

                    <div class="newForm">
                        <ul class="list-unstyled col4 clearfix">
                            <li>
                                <span class="title">Review Date</span>
                                <input type="text">
                            </li>
                        </ul>
                    </div>
                </div>
                <section>
                    <div class="assessmentScore">
                        <span class="title">Cumulative Score</span>
                        <span class="score">11</span>
                        <div>
                            <span class="title">Level of Risk</span>
                            <p>Risk</p>
                        </div>
                    </div>

                    <div class="informSection">
                        <ul class="list-unstyled">
                            <li>
                                <span>
                                    <i>Level of Risk</i>
                                    Risk
                                </span>
                                <span>
                                    <i>Condition</i>
                                    Equal or greater than
                                </span>
                                <span>
                                    <i>Score</i>
                                    10
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i>Level of Risk</i>
                                    High Risk
                                </span>
                                <span>
                                    <i>Condition</i>
                                    Equal or greater than
                                </span>
                                <span>
                                    <i>Score</i>
                                    15
                                </span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="ctas">
            <button>Back</button> <button class="green">Save as Draft</button>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
