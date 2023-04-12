<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="dashboard"> <!-DO NOT INCLUDE THIS TAG IN DYNAMIC CODE->
        <section class="last">
            <span class="lastLogin"><i>Last Login:</i> 11 Feb, 2022 - 11:21 am</span>
            <span class="lastRefresh"><i>Last Refresh:</i> 11 Feb, 2022 - 13:07 pm</span>
            <button><samp></samp></button>
        </section>

        <section class="quickLinks">
            <div class="scrollArea">
                <div class="content">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" style="background-image:url('https://jawa.linksdev.co.uk/images/flyer.png')">
                                <i>35</i>
                                <span>Active Enquiries</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" style="background-image:url('https://jawa.linksdev.co.uk/media/images/audit_dashboard_icon.png')">
                                <i>35</i>
                                <span>Audits Outstanding</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" style="background-image:url('https://jawa.linksdev.co.uk/images/event_reporting.png')">
                                <i>35</i>
                                <span>Event Reporting</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" style="background-image:url('images/invoice.png')">
                                <i>35</i>
                                <span>Invoice Unpaid</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" style="background-image:url('https://jawa.linksdev.co.uk/images/vacuum-cleaner.png')">
                                <i>35</i>
                                <span>HK Task(s) Overdue</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </section>

        <section class="middle">
            <article class="byThree">
                <span class="title">Overall Stats</span>
                <ul class="list-unstyled clearfix twoSections">
                    <li>
                        <i>89</i>
                        <span>Total Service Users</span>
                    </li>
                    <li>
                        <i>111</i>
                        <span>Total Staff</span>
                    </li>
                </ul>
                <div class="moreInfo">
                    <span>Freezed Service User</span> <i>09</i>
                </div>
            </article>
            <article class="byThree">
                <span class="title">Follow Ups <small>(Due Today Or Any Outstanding)</small></span>
                <ul class="list-unstyled clearfix fourSections">
                    <li>
                        <i>10</i>
                        <span>Pending</span>
                    </li>
                    <li>
                        <i>28</i>
                        <span>Not Completed</span>
                    </li>
                    <li>
                        <i>10</i>
                        <span>Pending</span>
                    </li>
                    <li>
                        <i>28</i>
                        <span>Not Completed</span>
                    </li>
                </ul>
            </article>
            <article class="byThree">
                <div id="bar" class="bar" style="width:100%; height:100%;"></div>
            </article>

            <article class="byTwo">
                <div>
                    <span class="title">Covid Tracker</span>
                    <ul class="list-unstyled covidTracker">
                        <li>Service users displaying symptom <span>0</span></li>
                        <li>Service users tested positive <span>0</span></li>
                        <li>Staff displaying symptoms <span>0</span></li>
                        <li>Staff tested positive <span>0</span></li>
                    </ul>
                </div>
                <div>
                    <span class="title">A &amp; I <small>(Last 30 days)</small></span>
                    <ul class="list-unstyled byColourStat">
                        <li>
                            Active <span><i style="width:14%;">14</i></span>
                        </li>
                        <li>
                            Waiting Sign Off <span><i style="width:6%;">6</i></span>
                        </li>
                        <li>
                            Completed <span><i style="width:57%;">57</i></span>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="byOne carer">
                <div>
                    <span class="title">Care Provided <small>(as of 11.03.2022)</small></span>

                    <div class="scrollArea">
                        <div class="content">
                            <small class="title">Task(s) Description</small>
                            <ul class="colours list-unstyled">
                                <li>Care Plans Created</li>
                                <li>Daily Notes</li>
                                <li>Care Routines</li>
                                <li>Risk Assessments</li>
                                <li>Scored Assessments</li>
                                <li>Mental Assessments</li>
                            </ul>

                            <ul class="stat list-unstyled">
                                <li data-point="0"><span style="height:10%;"></span></li>
                                <li data-point="0"><span style="height:23%;"></span></li>
                                <li data-point="0"><span style="height:15%;"></span></li>
                                <li data-point="0"><span style="height:55%;"></span></li>
                                <li data-point="0"><span style="height:62%;"></span></li>
                                <li data-point="0"><span style="height:74%;"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="title">Training</span>

                    <div class="scrollArea">
                        <div class="content">
                            <ul class="list-unstyled training">
                                <li class="clearfix">
                                    <div>
                                        <span>Qualification</span>
                                        Health &amp; safty
                                    </div>
                                    <div>
                                        <span>Expiry Date</span>
                                        20-03-2023
                                    </div>
                                    <div>
                                        <span>Status</span>
                                        Active
                                    </div>
                                    <a href="https://jawa.linksdev.co.uk/hr/training/edit/13">
                                        <img src="https://jawa.linksdev.co.uk/images/view.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section class="warnings">
            <div class="scrollArea">
                <div class="content">
                    <ul class="list-unstyled clearfix">
                    <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>3</i>
                                Room Allocation Missing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>47</i>
                                Pictures not Updated in Last 6 Months
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i>6</i>
                                Accidents and Falls(Last 30 Days)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="js/custom.js"></script>
    <script>
        Highcharts.chart('bar', {
            chart: {
                type: 'column',
                backgroundColor: 'rgba(255,255,255,0.1)',
                align: 'center',
                
            },
            title: {
                text: 'Care Routine Analysis',
                textsize: 22
            },
            
            tooltip: {
                crosshairs: [true, true]
            },
            xAxis: {
                type: 'category',
                tickPosition: 'inside',
                tickwidth: 4,

            },
            yAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: ''
                }
            },
            legend: {
                enabled:false, 
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },


            series: [{
                    color: '#E74C3C',
                    name: 'Care Routine(s)',

                    data: [{
                            name: 'Set',
                            drilldown: 'tnc',
                            color:'#6DC679',
                            y: 4,
                        },
                        {
                            name: 'Done',
                            drilldown: 'tnc',
                            color:'#118ab2',
                            y: 15,
                        },
                        {
                            name: '30mins',
                            drilldown: 'tnc',
                            color:'#ff9f1c',
                            y: 10,
                        },
                        {
                            name: 'Missed',
                            drilldown: 'tnc',
                            color:'#e63946',

                            y: 15,
                        },
                    ],
                },
            ],
            
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $('.refresh').click(function(){
            $(this).toggleClass('rotate');
        });

        $('.floorSelection span').click(function(){
            $(this).parent().toggleClass('expand');
            $(this).parent().parent().toggleClass('changeColor');
        });

        $(document).ready(function(){
            $('.stats').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 3
            });
        });
    </script>
</body>
</html>
