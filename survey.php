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
            <li><a href="#">HR / Management</a></li>
        </ul>
        <span class="title"><img src="images/surveyIcon.png"> Surveys</span>
    </div>

    <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
        <form class="search" style="margin-left:10px;">
            <div class="byStaff">
                <input type="text" name="staffname" id="staffname" placeholder="Search by keyword">
                <button>search</button>
            </div>

            <span class="filters">Filters</span>

            <div class="allFilters">
                <ul class="list-unstyled">
                    <li>
                        <div class="form-group">
                            <label for="">Choose Service User</label>
                            <div class="select">
                                <select name="" id="">
                                    <option value="Floor 1">Service User 1</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>

                <button class="green">Search</button>
                <button>Reset Filters</button>
            </div>
        </form>

        <a href="#" class="addServiceUser" style="color:#1f262a;background-color:#6DC77A;background-image:url('images/createNew.png');margin-left:10px;">Create Survey</a>
    </div>
</section>

<section class="contentBody noFooter noBg">
    <span class="loadMore" style="left:50%;"></span>
    <div class="scrollArea">
        <div class="content">
            <div class="generalListing">
                <section>
                    <ul class="list-unstyled clearfix">
                        <li style="width:calc(100% - 860px);">
                            <span class="title">Title</span>
                            Test heading
                        </li>
                        <li style="width:100px;">
                            <span class="title">Creation Date</span>
                            09-10-2022
                        </li>
                        <li style="width:100px;">
                            <span class="title">Modified</span>
                            10-09-2023
                        </li>
                        <li style="width:80px;">
                            <span class="title">Published?</span>
                            Yes
                        </li>
                        <li style="width:140px;">
                            <span class="title">Surveys Conducted</span>
                            80
                        </li>
                        <li style="width:80px;">
                            <a href="#" class="iconWithTitle entries" data-title="Entries"></a>
                        </li>
                        <li style="width:80px;">
                            <a href="#" class="iconWithTitle analyse" data-title="Analyse"></a>
                        </li>
                        <li style="width:80px;">
                            <a href="#" class="iconWithTitle link" data-title="Survey Link"></a>
                        </li>
                        <li style="width:80px;margin-right:20px;">
                            <a href="#" class="iconWithTitle conduct" data-title="Conduct Survey"></a>
                        </li>
                        <li style="width:50px;">
                            <span class="assocMap" data-id="963" data-residentid="3519" style="margin-top:10px;"></span>
                            <div class="mapChoice" id="mapChoice963">
                                <a href="#" class="openBodyMApList" data-type="injury">Injury Management</a> <a href="#" class="openBodyMApList" data-type="ulcer">Pressure Ulcer Management</a> <i></i>
                            </div>
                        </li>
                        <li style="width:50px;">
                            <a href="#" class="delete"></a>
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
<script>
    $('.assocMap').on('click',function(){
        $(this).next('div').addClass('show');
    });

    $('.mapChoice i').on('click', function(){
        $(this).parent().removeClass('show');
    });
</script>
</body>
</html>
