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
            right: 410px;
            width: auto;
            left: 0;
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
        <span class="title"><img src="images/reviewTrainingIcon.png"> Reviews &amp; Trainings</span>
    </div>

    <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
        <form class="search" style="margin-left:10px;">
            <div class="byStaff" style="width:180px;height:32px;">
                <select class="select2">
                    <option>Select Home</option>
                </select>
            </div>
            <div class="byStaff" style="margin-left:10px;">
                <select>
                    <option>Select Status</option>
                </select>
            </div>
            <div class="byStaff" style="margin-left:10px;">
                <select>
                    <option>Select Outcome</option>
                </select>
            </div>
        </form>

        <a href="#" class="addServiceUser" style="color:#1f262a;background-color:#6DC77A;background-image:url('images/createNew.png');margin-left:10px;">Add</a>
    </div>
</section>

<section class="contentBody noFooter">
    <span class="loadMore" style="left:50%;"></span>
    <div class="scrollArea">
        <div class="content">
            <div class="generalListing">
                <section class="blue">
                    <ul class="list-unstyled clearfix">
                        <li style="width:240px;">
                            <span class="title">Home</span>
                            Test heading
                        </li>
                        <li style="width:calc(100% - 730px);">
                            <span class="title">Title</span>
                            09-10-2022
                        </li>
                        <li style="width:100px;">
                            <span class="title">Date</span>
                            10-09-2023
                        </li>
                        <li style="width:120px;">
                            <span class="title">Type</span>
                            Review
                        </li>
                        <li style="width:220px;">
                            <span class="title">Status</span>
                            80
                        </li>
                        <li style="width:50px;">
                            <a href="#" class="eye"></a>
                        </li>
                    </ul>
                </section>
                <section class="red">
                    <ul class="list-unstyled clearfix">
                        <li style="width:240px;">
                            <span class="title">Home</span>
                            Test heading
                        </li>
                        <li style="width:calc(100% - 730px);">
                            <span class="title">Title</span>
                            09-10-2022
                        </li>
                        <li style="width:100px;">
                            <span class="title">Date</span>
                            10-09-2023
                        </li>
                        <li style="width:120px;">
                            <span class="title">Type</span>
                            Training
                        </li>
                        <li style="width:220px;">
                            <span class="title">Status</span>
                            80
                        </li>
                        <li style="width:50px;">
                            <a href="#" class="eye"></a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <article class="newCalendar">
        <div class="date">Tuesday <i>14 March</i></div>
        <div class="months">
            <button class="left"></button>
            <ul class="list-unstyled clearfix">
                <li><button>January</button></li>
                <li><button>February</button></li>
                <li><button class="selected">March</button></li>
                <li><button>April</button></li>
                <li><button>May</button></li>
                <li><button>June</button></li>
            </ul>
            <button class="right"></button>
        </div>
        <ul class="list-unstyled clearfix weeks">
            <li><button>mon</button></li>
            <li><button>tue</button></li>
            <li><button>wed</button></li>
            <li><button>thu</button></li>
            <li><button>fri</button></li>
            <li><button>sat</button></li>
            <li><button>sun</button></li>
        </ul>
        <ul class="list-unstyled clearfix days">
            <li><button disabled>27</button></li>
            <li><button disabled>28</button></li>
            <li><button>01</button></li>
            <li><button>02</button></li>
            <li><button>03</button></li>
            <li><button>04</button></li>
            <li><button>05</button></li>
            <li><button>27</button></li>
            <li><button>28</button></li>
            <li><button>01</button></li>
            <li><button>02</button></li>
            <li><button>03</button></li>
            <li><button>04</button></li>
            <li><button>05</button></li>
            <li><button>27</button></li>
            <li><button class="selected current">14</button></li>
            <li><button class="task">15</button></li>
            <li><button>02</button></li>
            <li><button>03</button></li>
            <li><button>04</button></li>
            <li><button>05</button></li>
            <li><button>27</button></li>
            <li><button>28</button></li>
            <li><button>01</button></li>
            <li><button>02</button></li>
            <li><button>03</button></li>
            <li><button>04</button></li>
            <li><button>05</button></li>
            <li><button>27</button></li>
            <li><button>28</button></li>
            <li><button>01</button></li>
            <li><button>02</button></li>
            <li><button>03</button></li>
            <li><button>04</button></li>
            <li><button>05</button></li>
        </ul>
    </article>
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
