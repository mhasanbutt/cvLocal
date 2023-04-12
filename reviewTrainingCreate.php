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
            <li><a href="#">Support</a></li>
        </ul>
        <span class="title"><img src="images/reviewTrainingIcon.png"> Create Reviews &amp; Trainings</span>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            <form class="newForm">
                <ul class="list-unstyled clearfix col4">
                    <li>
                        <span class="title">Home</span>
                        <select class="select2"></select>
                    </li>
                    <li>
                        <span class="title">Type</span>
                        <select>
                            <option>Review</option>
                            <option>Training</option>
                        </select>
                    </li>
                    <li style="width:50%;">
                        <span class="title">Title</span>
                        <input type="text">
                    </li>
                    <li>
                        <span class="title">Date</span>
                        <input type="text" class="date">
                    </li>
                    <li>
                        <span class="title">Status</span>
                        <select></select>
                    </li>
                    <li>
                        <span class="title">Outcome</span>
                        <select></select>
                    </li>
                    <li style="width:100%;">
                        <span class="title">Notes</span>
                        <textarea></textarea>
                    </li>
                </ul>
            </form>
        </div>
    </div>

    <div class="ctas">
        <button>Back</button>
        <button class="green">Update</button>
        <button class="pull-right" style="background-color:#F69478;">Add Status</button>

    </div>
</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/custom.js"></script>
<script>
    $('.select2').select2();
</script>
</body>
</html>
