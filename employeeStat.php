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
        <span class="title"><img src="https://jawa.linksdev.co.uk/imgaes/pie-chart.png"> Employee Stat</span>
    </div>

    <div class="filtersSearch clearfix autoWidth">
        <form>
            <div class="byStaff">
                <input type="text" name="staffname" id="staffname" placeholder="Search by service user">
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

        <div class="dropMenu">
            <span class="openDropMenu">Action</span>
            <ul class="list-unstyled">
                <li><a href="#" class="print_all_details print">Print Full Detail</a></li>
                <li><a href="#" class="print_all_tabs print">Print</a></li>
            </ul>
        </div>

    </div>

    <div class="searchFilterDetails">
        <div class="selection">
            <span>Home / Floor <strong>All</strong></span>
            <span>Service User <strong>All</strong></span>
            <span>Date <strong>-</strong></span>
            <span>Type <strong>All</strong></span>
        </div>
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
    </div>
    <div class="scrollArea">
            <div class="generalListing ">
                <section class="clearfix">
                    <ul class="list-unstyled employeeStats clearfix">
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                </section>
                <section class="clearfix">
                    <ul class="list-unstyled employeeStats clearfix">
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                        <li>
                            <span class="percentageBar">
                            <i>47%</i>
                            </span>
                            <span class="empNames">Kahsu Adhina
                            <span class="smallName">(Kahsu)</span>
                            </span>

                        </li>
                </section>
            </div>
    </div>

    <div class="pagingSorting">
        <ul class="list-unstyled paging">
            <li><a href="#">Prev</a></li>
            <li class="current"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next</a></li>
        </ul>

        <div class="sorting">
            <div class="select">
                <select name="" id="">
                    <option value="">Sort By</option>
                </select>
            </div>

            <button type="button" style="background-color:#6B7884">A-Z</button><button type="button" style="margin-right:20px;background-color:#6B7884">Z-A</button>

            <div class="select">
                <select name="" id="">
                    <option value="">50 per page</option>
                </select>
            </div>

            <button type="button" style="background-color:#3DA492;">Apply</button><button type="button">Reset Sorting</button>
        </div>
    </div>
</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
<script>
    $(".question").on('click', function(){
        $(".question").next('ul').not($(this).next('ul')).hide();
        let offset = $(this).offset();
        $(this).next('ul').css({top: offset.top, left: offset.left}).fadeToggle();
    });
</script>
</body>
</html>
