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
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Reports</a></li>
        </ul>
        <span class="title"><img src="images/relishLogo.png"> Relish Report</span>
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
    </div>
</section>

<section class="contentBody noFooter noBg">
    <span class="loadMore" style="left:50%;"></span>

    <div class="relishListing">
        <div class="scrollArea">
            <div class="content">
                <div class="generalListing">
                    <section>
                        <ul class="list-unstyled clearfix">
                            <li style="width:calc(100% - 510px);">
                                <span class="title">Service User</span>
                                Test heading
                            </li>
                            <li style="width:100px;">
                                <span class="title">Date</span>
                                09-10-2022
                            </li>
                            <li style="width:300px;">
                                <span class="title">Activity Type</span>
                                Arts &amp; Craft
                            </li>
                            <li style="width:110px;">
                                <span class="title">Activity Count</span>
                                80
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="relishGraphs">
        <ul class="list-unstyled">
            <li>
                <figure class="highcharts-figure" style="height:100%;">
                    <div id="activityCount" style="height:100%;"></div>
                </figure>
            </li>
            <li></li>
            <li></li>
        </ul>
    </div>

</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
<script>
    Highcharts.chart('activityCount', {
        chart: {
            backgroundColor: 'transparent',
            type: 'column'
        },
        title: {
            text: 'Activity Count'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Activities'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'No. of Activities'
        },
        series: [{
            name: 'Population',
            colors: [
                '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3'
            ],
            colorByPoint: true,
            groupPadding: 0,
            data: [
                ['Monday', 37.33],
                ['Tuesday', 31.18],
                ['Wednesday', 27.79],
                ['Thursday', 22.23],
                ['Friday', 21.91],
                ['Saturday', 21.74],
                ['Sunday', 21.32]
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
</script>
</body>
</html>
