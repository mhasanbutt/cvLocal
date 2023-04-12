<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>

</head>

<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="auditDashboard">
        <div class="selection">
            <span>Audit Dashboard</span>

            <article class="filters">
                <div class="groupselects">
                    <select name="Floor" id="Floor">
                        <option value="">Select Floor</option>
                    </select>
                </div>
                <div class="groupselects">
                    <select name="groupselects" id="serviceUser">
                        <option value="">Mr. Tim Shermin</option>
                    </select>
                </div>
                <div class="groupselects">
                    <select name="groupselects" id="audit">
                        <option value="">Select Audit</option>
                    </select>
                </div>
                <div class="groupselects">
                    <select name="groupselects" id="serviceUsers">
                        <option value="">Select Service Users</option>
                    </select>
                </div>
            </article>

            <div class="formgroup pull-right">
                <label>Show Audits Allocated to me</label>
                <div class="toggles fixed">
                    <input type="checkbox" name="keepme" id="km" hidden>
                    <label for="km"></label>
                </div>
            </div>
        </div>

        <article class="audits">
            <div class="audithistory">
                <ul class="list-unstyled clearfix auditstats">
                    <li>
                        <a href="">
                            <small>79</small>
                            Outstanding Audits
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <small>7</small>
                            Audit Falling Pass Score
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <small>9</small>
                            Audits Awaiting Sign Off
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <small>254</small>
                            Completed Audits
                        </a>
                    </li>
                </ul>

                <div>
                    <h4><span>Outstanding History</span></h4>

                    <div class="scrollArea">
                        <ul class="list-unstyled listinghistory">
                            <li>
                                <ul class="list-unstyled clearfix details">
                                    <li>
                                        <span class="title">Audit Name</span>
                                        <span>Infection Control Audit</span>
                                    </li>
                                    <li>
                                        <span class="title">Home Name</span>
                                        <span>Oatlands</span>
                                    </li>
                                    <li>
                                        <span class="title">Audit For</span>
                                        <span>Barbican</span>
                                    </li>
                                    <li>
                                        <span class="title">Date of Next Audit</span>
                                        <span>24.04.2021</span>
                                    </li>
                                </ul>

                                <a href="">
                                    <img src="images/view.png" alt="" width="18" height="18">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="chartsdisplay">
                <ul class="list-unstyled">
                    <li>
                        <div id="bar" class="bar" style="width:100%; height:204px">
                    </li>
                    <li>
                        <div id="stack" class="stack" style="width:100%; height:204px">
                    </li>
                    <li class="auditorlist">
                        <span>Audits Completed By</span>
                       
                        <div class="scrollArea">
                            <ul class="auditor list-unstyled">
                                <li>
                                    <span>123 Audits</span>
                                    <img src="images/temp-picture.jpg" alt="" width="45" height="45">
                                    Nicolita Briceag <br><small>Care Cordinator</small>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="companyaudit">
                <span>Audits Used In Company</span>

                <div class="scrollArea">
                    <ul class="companydetails list-unstyled">
                        <li class="clearfix">
                            <span>Infection Conrol Audit</span>
                            <small>3 Overdue</small>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="js/custom.js"></script>
    <script>
        Highcharts.chart('bar', {
            chart: {
                type: 'bar',
                plotBorderWidth: 1,
            },
            title: {
                text: 'Audit w.r.t Date(s)'
            },
            xAxis: {
                categories: ['Awaiting<br>[9]', 'Outstanding<br>[79]', 'Failing<br>[7]'],
            },
            yAxis: {
                min: 0,
                title: {
                    enabled: false
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                enabled: false
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: false
                    },
                }
            },
            legend: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Year 1800',
                data: [9, 0, 0],
                color: '#585c5c'
            }, {
                name: 'Year 1900',
                data: [0, 79, 0],
                color: '#3da492'
            }, {
                name: 'Year 2000',
                data: [0, 0, 7],
                color: '#acb6b6'
            }]
        });
    </script>
    <script>
        Highcharts.chart('stack', {
            chart: {
                type: 'bar',

                
            },
            title: {
                text: 'Audit Quality'
            },
            xAxis: {
                categories: ['May', 'April', 'March']
            },
           
            legend: {
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'Failing Score',
                data: [5, 3, 6],
                color:'#f3c89c'

            }, {
                name: 'Passing Score',
                data: [2, 2, 3],
                color:'#acb6b6'
            }]
        });
    </script>
</body>

</html>