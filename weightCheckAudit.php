<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style>
        .contentBody .scroll-wrapper {
            top: 52px;
            bottom: 50px;
        }

        .contentBody .ctas {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin-top: 0;
        }

        .generalListing .newForm ul li .title {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Audits</a></li>
            </ul>
            <span class="title"><img src="https://jawa.linksdev.co.uk/media/images/audit_dashboard_icon.png" alt=""> Monthly Weight Check</span>
        </div>
        <div class="filtersSearch clearfix autoWidth">
            <div class="dropMenu">
                <span class="openDropMenu">Actions</span>
                <ul class="list-unstyled">
                    <li><a label="Print All" href="#" class="print">Print All</a></li>
                    <li><a label="Print Selected" href="#" class="print">Print Selected</a></li>
                </ul>
            </div>

            <a class="new icon" href="newHome.php">Create Followup</a>
        </div>
    </section>

    <section class="contentBody noBg noFooter">
        <div class="pageSpecificArea">
            <div class="counters">
                <ul class="list-unstyled clearfix">
                    <li>
                        <article>
                            <span>01</span><div class="title">MUST<br>Score</div>
                        </article>
                    </li>
                    <li>
                        <article>
                            <span>01.01-2023</span><div class="title">Revision<br>Date</div>
                        </article>
                    </li>
                </ul>
            </div>
        </div>

        <div class="scrollArea">
            <div class="content">
                <article class="generalListing">
                    <section>
                        <ul class="list-unstyled clearfix">
                            <li style="width:calc(100% / 6);">
                                <span class="title">Service User</span> Service User Name
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Room</span>-
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Past Weight</span> 0
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Past BMI</span> 50.0
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Date Recorded</span> 01.01.2023
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Current Weight</span> 50.00
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Current BMI</span> 50.0
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Loss(-) / Gain(+)</span> 0
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Percentage</span> 0
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">BMI Change</span> 0
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Past MUST Score</span> -
                            </li>
                            <li style="width:calc(100% / 6);">
                                <span class="title">Current MUST Score</span> -
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="newForm">
                                    <ul class="list-unstyled clearfix col4" style="margin-bottom:0;padding-top:10px;">
                                        <li>
                                            <span class="title">REFERRALS MADE: GP / SALT/ DIETITIAN / DENTIST NELL-SAR NUTRITIONIST</span>
                                            <select class="select2" multiple>
                                                <option>Option 1</option>
                                                <option>Option 1</option>
                                                <option>Option 1</option>
                                                <option>Option 1</option>
                                                <option>Option 1</option>
                                            </select>
                                        </li>
                                        <li>
                                            <span class="title">CARE PLAN & MUST REVIEWED</span>
                                            <select>
                                                <option>Option 1</option>
                                            </select>
                                        </li>
                                        <li>
                                            <span class="title">ACTION TAKEN IN HOUSE</span>
                                            <input type="text" placeholder="(i.e., Food first approach)">
                                        </li>
                                        <li>
                                            <span class="title">REASONS FOR WEIGHT LOSS</span>
                                            <input type="text">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
        </div>

        <div class="ctas">
            <button onclick="location.href='https://jawa.linksdev.co.uk/auditing/weightmanagement'" class="btn default">Back</button>
            <button type="button" id="saveForm" class="green saveformbtn save saveAudit">Save</button>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.select2').select2();
    </script>
</body>
</html>