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
                <div class="assessmentQuestions custom">
                    <article>
                        <span class="question"><span class="special">Step 1 - Screening</span> Mobility Status <i>(Multiple Choice)</i></span>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <input type="checkbox" name="sex" id="sex1" hidden>
                                <label for="sex1" style="background-color:rgba(255, 228, 94, 0.6);">Needs the help of another person to walk</label>
                            </li>
                            <li>
                                <input type="checkbox" name="sex" id="sex2" hidden>
                                <label for="sex2" style="background-color:rgba(255, 228, 94, 0.6);">Spends all or the majority of time in bed or chair</label>
                            </li>
                            <li>
                                <input type="checkbox" name="sex" id="sex1" hidden>
                                <label for="sex1" style="background-color:rgba(255, 228, 94, 0.6);">Remains in the same position for long periods</label>
                            </li>
                            <li>
                                <input type="checkbox" name="sex" id="sex2" hidden>
                                <label for="sex2" style="background-color:rgba(144, 224, 239, 0.6);">Walks independently with or without walking aids</label>
                            </li>
                        </ul>
                    </article>

                    <article>
                        <span class="question">Skin Status</span>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <input type="radio" name="sex" id="sex1" hidden>
                                <label for="sex1" style="background-color:rgba(242, 132, 130, 0.6);">Current PU category 1 or above</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex2" hidden>
                                <label for="sex2" style="background-color:rgba(255, 228, 94, 0.6);">Reported history of previous PU</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex1" hidden>
                                <label for="sex1" style="background-color:rgba(255, 228, 94, 0.6);">Vulnerable skin</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex2" hidden>
                                <label for="sex2" style="background-color:rgba(255, 228, 94, 0.6);">Medical device causing pressure/shear at skin site e.g. O2 mask, NG tube</label>
                            </li>
                            <li>
                                <input type="radio" name="sex" id="sex2" hidden>
                                <label for="sex2" style="background-color:rgba(144, 224, 239, 0.6);">Normal skin</label>
                            </li>
                        </ul>
                    </article>

                    <section>
                        <span class="title">Current Detailed Skin Assessment Area 2</span>

                        <div class="area clearfix">
                            <span class="areaName" data-title="Area">R Hip</span>

                            <ul class="list-unstyled clearfix">
                                <li>
                                    <input type="radio" name="rHip" id="pain" hidden>
                                    <label for="pain" style="background-color:rgba(255, 228, 94, 0.6);">Pain</label>
                                </li>
                                <li>
                                    <input type="radio" name="rHip" id="vulSkin" hidden>
                                    <label for="vulSkin" style="background-color:rgba(251, 139, 36, 0.6);">Vulnerable Skin</label>
                                </li>
                                <li>
                                    <input type="radio" name="rHip" id="pu" hidden>
                                    <label for="pu" style="background-color:rgba(242, 132, 130, 0.6);">PU Category</label>
                                </li>
                                <li>
                                    <input type="radio" name="rHip" id="normalSkin" hidden>
                                    <label for="normalSkin" style="background-color:rgba(144, 224, 239, 0.6);">Normal Skin</label>
                                </li>
                            </ul>
                        </div>

                        <div class="area clearfix">
                            <span class="areaName" data-title="Area">R Hip</span>

                            <ul class="list-unstyled clearfix">
                                <li>
                                    <input type="radio" name="rHip" id="pain" hidden>
                                    <label for="pain" style="background-color:rgba(255, 228, 94, 0.6);">Pain</label>
                                </li>
                                <li>
                                    <input type="radio" name="rHip" id="vulSkin" hidden>
                                    <label for="vulSkin" style="background-color:rgba(251, 139, 36, 0.6);">Vulnerable Skin</label>
                                </li>
                                <li>
                                    <input type="radio" name="rHip" id="pu" hidden>
                                    <label for="pu" style="background-color:rgba(242, 132, 130, 0.6);">PU Category</label>
                                </li>
                                <li>
                                    <input type="radio" name="rHip" id="normalSkin" hidden>
                                    <label for="normalSkin" style="background-color:rgba(144, 224, 239, 0.6);">Normal Skin</label>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <section>
                    <div class="assessmentScore">
                        <span class="title">Cumulative Score</span>
                        <span class="score">11</span>
                        <div>
                            <span class="title">Level of Risk</span>
                            <p>PU Category - 1 or
                                above or scarring
                                from
                                previous pressure
                                ulcers</p>
                        </div>
                    </div>

                    <ul class="list-unstyled assessmentLegends">
                        <li style="background-color:rgba(144, 224, 239, 0.6);">No pressure ulcer not currently at risk</li>
                        <li style="background-color:rgba(251, 139, 36, 0.6);">No pressure ulcer but at risk</li>
                        <li style="background-color:rgba(242, 132, 130, 0.6);">PU Category 1 or above or scarring from previous pressure ulcers</li>
                    </ul>
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
