<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php include("header.php");?>

    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Care</a></li>
                <li><a href="#">Health Stats</a></li>
            </ul>
            <span class="title">Fluid Intake</span>
        </div>
        <div class="ProfileInfo">
            <img src="images/temp-picture.jpg" class="picture">
            <span class="profileImg"><img src="images/photo-camera.svg" class="svg"></span>
            <ul class="list-unstyled">
                <li>
                    <span>Service User Name</span><br>
                    Terrance Edwards
                </li>
                <li>
                    <span>Date of Birth</span><br>
                    05-04-1974
                </li>
                <li>
                    <span>Client No.</span><br>
                    5921583
                </li>
                <li>
                    <span>Location</span><br>
                    Oxford St.
                </li>
            </ul>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-7">
                        <ul class="diseases list-unstyled">
                            <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                        </ul><br>
                        <hr>
                        <form class="inBodyForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label>Date</label>
                                        <input type="text" name="dateRange" placeholder="Date">
                                        <img src="images/calendar-icon.svg" class="calendar svg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group time">
                                        <label>Time</label>
                                        <input type="text" placeholder="Time">
                                        <img src="images/clock-with-white-face.svg" class="calendar svg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type of Fluid</label>
                                        <div class="select">
                                            <select>
                                                <option>Select</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Amount of Fluid</label>
                                        <div class="select">
                                            <select>
                                                <option>Select</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Notify Manager</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
                                            <label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 text-right">
                        <div class="fluidIntakeCent">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="target pull-right">Daily Target <br><strong>1500 <small>/ 2500</small></strong></span>
                                </div>
                                <div class="col-md-6 percent">
                                    <div class="pChart" data-percent="60"><span><strong>60%</strong><br>Progress</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="glassFill pull-right">
                            <img src="images/beaker.png" class="beaker">
                            <!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="display: none;">
                                <symbol id="wave">
                                    <path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z"></path>
                                    <path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z"></path>
                                    <path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z"></path>
                                    <path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z"></path>
                                </symbol>
                            </svg> -->
                            <div class="water-jar">
                                <!-- <div class="water-filling"></div> -->
                                <div class="water coffee" style="height:10%;bottom:0;"></div>
                                <div class="water tea" style="height:20%;bottom:10%;"></div>
                                <div class="water squash" style="height:30%;bottom:30%;"></div>
                                <div class="water milk" style="height:10%;bottom:50%;"></div>
                                <div class="water nutrition" style="height:20%;bottom:60%;"></div>
                                <div class="water" style="height:20%;bottom:80%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button> <button type="button" class="save">Save</button>
            </div>
            <div class="col-md-6 text-right">
                <div class="form-inline">
                    <label>Service User</label>
                    <div class="select">
                        <select>
                            <option>Terrance Edwards</option>
                            <option>John Smith</option>
                            <option>Tony Anderson</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
                <div class="form-inline">
                    <label>By Floor</label>
                    <div class="select">
                        <select>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>

    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/easyPieChart.js"></script>
    <script src="js/custom.js"></script>
    <script>

        $('.pChart').easyPieChart({
            lineWidth: 5,
            size: 110,
            scaleColor: "#000",
            trackColor: "#DDD",
            barColor: "#3DA492"
        });
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        $(".counterBtn").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.hasClass('plus')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find("input").val(newVal);
        });

        // var water=document.getElementById("water");
        // var percent=0;
        // var interval;
        // interval=setInterval(function(){
        //     percent++;
        //     water.style.transform='translate(0'+','+(100-percent)+'%)';
        //     if(percent==60){  /* Comments for Developer - DYNAMIC VALUE */
        //         clearInterval(interval);
        //     }
        // },40);
    </script>
</body>
</html>
