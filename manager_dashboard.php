<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.webp" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="newChartDashboard">
        <ul class="list-unstyled">
            <li class="small">
                <ul class="list-unstyled tabs">
                    <li data-link="tsu" class="active">Total Service Users</li>
                    <li data-link="tc">Total Staff</li>
                </ul>
                <section class="tabContent">
                    <div id="tsutab" class="show">
                        <span class="filter"></span>
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="date" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <div class="select">
                                    <select name="serviceUsers" id="">
                                        <option value="">Service User</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div id="container-users" style="height:100%;"></div>
                    </div>
                    <div id="tctab">
                        <span class="filter"></span>
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="date" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <div class="select">
                                    <select name="serviceUsers" id="">
                                        <option value="">Service User</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div id="container-staff" style="height:100%;"></div>
                    </div>
                </section>
            </li>
            <li>
                <ul class="list-unstyled tabs">
                    <li data-link="odcp" class="active">Overdue Care Plans</li>
                    <li data-link="medication">Medication</li>
                </ul>
                <section class="tabContent">
                    <div id="medicationtab">
                        <span class="filter"></span>
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="date" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <div class="select">
                                    <select name="serviceUsers" id="">
                                        <option value="">Service User</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div id="container-emar" style="height: 100%;"></div>
                    </div>
                    <div id="odcptab" class="show">
                        <div id="container-overduecare" style="height: 100%;"></div>
                    </div>
                </section>
            </li>
            <li>
                <article>
                    <span class="filter"></span>
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="date" placeholder="Date">
                        </div>
                        <div class="form-group">
                            <div class="select">
                                <select name="serviceUsers" id="">
                                    <option value="">Service User</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <span class="title">Handovers</span>
                    <div id="container-handover" style="height: 90%;"></div>
                </article>
            </li>
        </ul>
        <ul class="list-unstyled">
            <li>
                <ul class="list-unstyled tabs">
                    <li data-link="admindischarge" class="active">Admissions / Discharges</li>
                    <li data-link="startleave">Starters/Leavers</li>
                </ul>
                <section class="tabContent">
                    <div id="startleavetab">
                        <span class="filter"></span>
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="date" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <div class="select">
                                    <select name="serviceUsers" id="">
                                        <option value="">Service User</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div id="container-employees" style="height: 100%;"></div>
                    </div>
                    <div id="admindischargetab" class="show">
                        <div id="container-audit" style="height: 100%;"></div>
                    </div>
                </section>
            </li>
            <li class="small">
                <article>
                    <span class="filter"></span>
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="date" placeholder="Date">
                        </div>
                        <div class="form-group">
                            <div class="select">
                                <select name="serviceUsers" id="">
                                    <option value="">Service User</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <span class="title">Care Routines</span>
                    <div id="container-careroutine" style="height: calc(100% - 34px);"></div>
                </article>
            </li>
            <li class="small">
                <article>
                    <span class="filter"></span>
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="date" placeholder="Date">
                        </div>
                        <div class="form-group">
                            <div class="select">
                                <select name="serviceUsers" id="">
                                    <option value="">Service User</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <span class="title">Daily Notes</span>
                    <div id="container-dailynotes" style="height:100%;"></div>
                </article>
            </li>
            <li class="small">
                <ul class="list-unstyled tabs">
                    <li data-link="attwarn" class="active">Attendance Warning(s)</li>
                    <li data-link="andi">A &amp; I</li>
                </ul>
                <section class="tabContent">
                    <div id="attwarntab" class="show">
                        <span class="filter"></span>
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="date" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <div class="select">
                                    <select name="serviceUsers" id="">
                                        <option value="">Service User</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div id="container-warnings" style="height: 100%;"></div>
                    </div>
                    <div id="anditab">
                        <div id="container-a&i" style="height: 100%;"></div>
                    </div>
                </section>
            </li>
        </ul>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="js/custom.js"></script>

    <script>
        $('.filter').on('click', function () {
            $(this).siblings('form').toggleClass('show');
        });

        $('input[name="date"]').daterangepicker({
            "opens": "left",
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="date"]').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="date"]').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
        });

        $('.tabs li').click(function () {
            var t = $(this).attr('data-link');

            if (!$(this).hasClass('active')) {
                $(this).siblings('li').removeClass('active');
                $(this).addClass('active');
                $(this).parent().siblings('.tabContent').children('div').removeClass('show');
                $('#' + t + 'tab').addClass('show');
            }
        });

        Highcharts.chart('container-users', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: 0,
                plotShadow: false,
                margin: [0, 0, 0, 0],
                marginbottom: 45
            },
            title: {
                text: 'Service User Summary',
                align: 'center',
                verticalAlign: 'middle',
                y: 60,
            },
            tooltip: {
                pointFormat: '{series.name}:<b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: true,
                        distance: 0,
                        style: {
                            fontWeight: 'bold',
                            color: 'black'
                        }
                    },
                    startAngle: -90,
                    endAngle: 90,
                    center: ['48%', '55%'],
                    size: '70%',
                    borderWidth: 0
                }
            },
            series: [{
                type: 'pie',
                name: 'Total Service User(s)',
                innerSize: '75%',
                data: [{
                    name: 'CHC',
                    y: 1000,
                    color: '#F8A13F'
                }, {
                    name: 'DWP',
                    y: 0,
                    color: '#E9A35B'
                }, {
                    name: 'LA',
                    y: 1100,
                    color: '#DDA472'
                }, {
                    name: 'Top Up',
                    y: 600,
                    color: '#C7A69B'
                }, {
                    name: 'Private',
                    y: 200,
                    color: '#BFA7A9'
                }, {
                    name: 'PCT',
                    y: 1200,
                    color: '#A5AAD9'
                }, {
                    name: 'Pension',
                    y: 1100,
                    color: '#9E9CCB'
                }, {
                    name: 'Other',
                    y: 100,
                    color: '#825F8E'
                }, ]
            }]
        });
        Highcharts.chart('container-staff', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: 0,
                plotShadow: false
            },
            title: {
                text: 'Staff Summary',
                align: 'center',
                verticalAlign: 'middle',
                y: 80
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: true,
                        distance: 20,
                        style: {
                            fontWeight: 'bold',
                            color: 'BLACK'
                        }
                    },
                    startAngle: -90,
                    endAngle: 90,
                    center: ['43%', '60%'],
                    size: '80%'
                }
            },
            series: [{
                type: 'pie',
                name: 'Staff Summary',
                innerSize: '70%',
                data: [{
                    name: 'Agency<br>Staff',
                    y: 93.2,
                    color: '#f8a13f'
                }, {
                    name: 'Bank<br>Staff',
                    y: 6.8,
                    color: '#8F7AA9',
                    dataLabels: {
                        distance: 0
                    },

                }]
            }]
        });
        Highcharts.chart('container-emar', {
            chart: {
                type: 'bar',

            },
            title: 'false',
            tooltip: {
                crosshairs: [true, true]
            },
            xAxis: {
                labels: {
                    enabled: false
                }
            },
            yAxis: {
                type: 'category',
                title: {
                    text: 'Total No of Medication',
                }
            },

            series: [{
                    color: '#f8a13f',
                    name: 'Total Medication',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f} ',
                        borderRadius: 5,
                        backgroundColor: 'rgba(252, 255, 197, 0.7)',
                        borderWidth: 1,
                        borderColor: '#AAA',
                        y: 0
                    },

                    data: [{
                        y: 9,
                    }, ],
                },
                {
                    color: '#a5aad9',
                    name: 'Missed',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                        borderRadius: 5,
                        backgroundColor: 'rgba(252, 255, 197, 0.7)',
                        borderWidth: 1,
                        borderColor: '#AAA',
                        y: 0
                    },

                    data: [{
                        y: 4,
                    }, ]
                },
                {
                    color: '#8b6792',
                    name: 'Late Medication',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                        borderRadius: 5,
                        backgroundColor: 'rgba(252, 255, 197, 0.7)',
                        borderWidth: 1,
                        borderColor: '#AAA',
                        y: 0
                    },

                    data: [{
                        y: 5,
                    }, ]
                }
            ],
        });
        Highcharts.chart('container-overduecare', {
            chart: {
                type: 'bar',

            },
            title: 'false',
            tooltip: {
                crosshairs: [true, true]
            },
            xAxis: {
                labels: {
                    enabled: false
                }
            },
            yAxis: {
                type: 'category',
                title: {
                    text: 'Total No of Medication',
                }
            },

            series: [{
                    name: 'Care Plan(s)',
                    dataLabels: {
                        enabled: true,
                        borderRadius: 5,
                        backgroundColor: 'rgba(252, 255, 197, 0.7)',
                        borderWidth: 1,
                        borderColor: '#AAA',
                        y: 0
                    },
                    color: '#C89482',

                    data: [{
                        y: 7,
                    }, ],
                },
                {
                    color: '#9BA2A0',
                    name: 'Risk Assesment(s)',
                    dataLabels: {
                        enabled: true,
                        borderRadius: 5,
                        backgroundColor: 'rgba(252, 255, 197, 0.7)',
                        borderWidth: 1,
                        borderColor: '#AAA',
                        y: 0
                    },

                    data: [{
                        y: 4,

                    }, ]
                },
                {
                    color: '#F8A13F',
                    name: 'Scored Assesment(s)',
                    dataLabels: {
                        enabled: true,
                        borderRadius: 5,
                        backgroundColor: 'rgba(252, 255, 197, 0.7)',
                        borderWidth: 1,
                        borderColor: '#AAA',
                        y: 0
                    },
                    data: [{
                        y: 5,
                    }, ]
                }
            ],
        });
        Highcharts.chart('container-careroutine', {
            chart: {
                type: 'column',
            },
            title: false,
            xAxis: {
                type: 'catagory',
            },
            yAxis: [{
                title: 'false'
            }, {
                opposite: true,
                title: {
                    text: 'Total No of Carer(s)'
                }
            }],
            legend: {
                shadow: false
            },
            tooltip: {
                shared: true
            },
            plotOptions: {
                column: {
                    grouping: false,
                    shadow: false,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Pending',
                color: 'rgba(165,170,217,1)',
                data: [7],
                pointPadding: 0.3,
                pointPlacement: -0.2
            }, {
                name: 'Missed',
                color: 'rgba(126,86,134,.9)',
                data: [9],
                pointPadding: 0.4,
                pointPlacement: -0.2
            }, {
                name: 'Completed',
                color: 'rgba(248,161,63,1)',
                data: [17],
                tooltip: {
                    valuePrefix: '$',
                    valueSuffix: ' M'
                },
                pointPadding: 0.4,
                pointPlacement: 0,
                yAxis: 1
            }, ]
        });
        Highcharts.chart('container-employees', {
            chart: {
                type: 'spline',
            },
            title: 'false',

            xAxis: {
                type: 'catagory',
            },
            yAxis: {
                title: {
                    text: 'No of Staff(s)'
                },
                labels: {
                    formatter: function () {
                        return this.value + '';
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Active(s)',
                color: '#8b6792',
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.f}',
                    distance: 5
                },

                marker: {
                    symbol: 'square'
                },
                data: [9, 18, 19, 24, 18, 12, 9]

            }, {
                name: 'Archive/Terminated',
                color: '#eea914',
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.f}',
                    distance: 5
                },
                marker: {
                    symbol: 'diamond'
                },
                data: [7, 8, 5, 4, 2, 1, 9]
            }, ]
        });
        Highcharts.chart('container-audit', {
            chart: {
                type: 'spline',
            },
            title: 'false',

            xAxis: {
                type: 'catagory'
            },
            yAxis: {
                title: {
                    text: 'No Of Service User(s)'
                },
                labels: {
                    formatter: function () {
                        return this.value + '';
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                    name: 'Intial Enquiry(s)',
                    color: '#8b6792',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                        distance: 5
                    },

                    marker: {
                        symbol: 'square'
                    },
                    data: [9, 18, 19, 24, 18, 12, 17]

                }, {
                    name: 'Mannual Entry(s)',
                    color: '#a5aad9',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                        distance: 5
                    },

                    marker: {
                        symbol: 'diamond'
                    },
                    data: [7, 4, 15, 8, 12, 5, 15]
                },
                {
                    name: 'Readmission(s)',
                    color: '#C89482',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                        distance: 5
                    },

                    marker: {
                        symbol: 'diamond'
                    },
                    data: [6, 8, 21, 18, 12, 15, 7]
                },
                {
                    name: 'Discharged',
                    color: '#eea914',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                        distance: 5
                    },

                    marker: {
                        symbol: 'diamond'
                    },
                    data: [2, 3, 1, 18, 2, 5, 3]
                }
            ]
        });
        var pieColors = (function () {
            var colors = [],
                base = Highcharts.getOptions().colors[0],
                i;

            for (i = 0; i < 10; i += 1) {
                colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
            }
            return colors;
        }());

        Highcharts.chart('container-dailynotes', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',
                margin: [0, 0, 0, 0]
            },
            title: 'false',
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,
                    borderWidth: 20,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        distance: 0,
                        filter: {
                            property: 'percentage',
                            operator: '>',
                            value: 4
                        }
                    }
                }
            },
            series: [{
                data: [{
                        name: 'Actives Status',
                        y: 88,
                        color: '#F89F3A'
                    },
                    {
                        name: 'Deleted Status',
                        y: 12,
                        color: '#B29FBC',
                        borderWidth: 5
                    },

                ]
            }]
        });
        Highcharts.chart('container-handover', {

            chart: {
                type: 'area',
            },

            title: 'false',

            xAxis: {
                type: 'category'
            },

            yAxis: {
                allowDecimals: true,
                min: 3,
                title: {
                    text: 'Total Handovers'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.x + '</b><br/>' +
                        this.series.name + ': ' + this.y + '<br/>' +
                        'Total: ' + this.point.stackTotal;
                }
            },

            plotOptions: {
                column: {
                    stacking: 'normal',
                    borderWidth: 5
                }
            },

            series: [{
                name: 'Handover Read',
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.f}',
                },
                color: '#DDA472',
                data: [5, 3, 4, 7, 2],
            }, {
                name: 'Not Read User Split',
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.f}',
                },
                color: '#BFA7A9',
                data: [3, 4, 4, 2, 5],
            }, ]
        });
        Highcharts.chart('container-warnings', {
            chart: {
                type: 'line',
            },
            title: 'false',
            xAxis: {
                type: 'category',
                tickPosition: 'inside',
                tickwidth: 10,
                tickhight: 10,
                labels: {
                    overflow: 'justify'
                },

            },
            yAxis: {
                title: {
                    text: 'ROTA'
                }

            },
            plotOptions: {
                line: {
                    lineWidth: 4,
                    states: {
                        hover: {
                            lineWidth: 15
                        }
                    }
                }
            },
            series: [{
                    color: '#5c374c',
                    name: 'Pending Warnings',
                    borderWidth: 25,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                    },
                    data: [{
                            y: 1,
                        },
                        {
                            y: 0,
                        },
                        {
                            y: 0,
                        },
                        {
                            y: 1,
                        },
                        {
                            y: 0,
                        },
                    ]
                },
                {
                    borderWidth: 25,
                    id: 'tnc1',
                    color: '#a5aad9',
                    name: 'Actioned Warnings',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                    },

                    data: [{
                            y: 0,
                        },
                        {
                            y: 0,
                        },
                        {
                            y: 1,
                        },
                        {
                            y: 1,
                        },
                        {
                            y: 0,
                        },
                    ]
                },
                {
                    borderWidth: 25,
                    color: '#f8a13f',
                    name: 'Dismissed Warnings',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.f}',
                    },

                    data: [{
                            y: 2,
                        },
                        {
                            y: 1,
                        },
                        {
                            y: 1,
                        },
                        {
                            y: 2,
                        },
                        {
                            y: 1,
                        },
                    ]
                },
            ],
        });
        Highcharts.chart('container-a&i', {
            chart: {
                type: 'bar'
            },
            title: 'false',
            xAxis: {
                categories: [
                    'Accident(s)',
                    'Incident(s)',
                    'Other(s)',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Witnessed',
                color: '#f8a13f',
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                    distance: 50,
                },
                data: [5, 3, 9]

            }, {
                name: 'Injury Sustained',
                color: '#825f8e',
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                    distance: 50,
                },
                data: [6, 8, 5]

            }, {
                name: 'Hospitalised',
                color: '#979dd3',
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                    distance: 50,
                },
                data: [9, 5, 4]

            }, ]
        });
    </script>
</body>

</html>