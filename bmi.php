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
                <li><a href="#">Vitals</a></li>
            </ul>
            <span class="title">BMI</span>
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
        <div class="clearfix" style="margin-top:20px;">
            <div class="pull-right clearfix">
                <ul class="diseases list-unstyled" hidden>
                    <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn"><img src="images/add-new-document.svg" class="svg">New</button>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="diseases list-unstyled">
                            <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                        </ul><br>
                        <hr>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <form class="inBodyForm">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Date</label>
                                        <input type="text" name="dateRange" placeholder="Date">
                                        <img src="images/calendar-icon.svg" class="calendar svg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Time</label>
                                        <input type="text" name="dateRange" placeholder="Time">
                                        <img src="images/clock-with-white-face.svg" class="calendar svg">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group slideHandles">
                                        <label>Weight</label>
                                        <span class="formInfo">240Lbs</span>
                                        <p class="clearfix"></p>
                                        <input type="text" id="weightSlider" name="weight" value="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group slideHandles">
                                        <label>Height</label>
                                        <span class="formInfo">5'7"</span>
                                        <p class="clearfix"></p>
                                        <input type="text" id="heightSlider" name="height" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p class="bmiCalculated">
                                        25 <small>BMI</small>
                                    </p>
                                    <small class="bmiCriteria">Underweight = <18.5, Normal weight = 18.5–24.9, Overweight = 25–29.9, Obesity = BMI of 30 or greater</small>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-lg-4 text-right">
                        <div class="bmiChart clearfix">
                            <ul class="list-unstyled height">
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                                <li>147</li>
                            </ul>
                            <ul class="list-unstyled bmi">
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li class="danger"><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li class="caution"><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li class="highlight"><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li class="ok"><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                                <li class="low"><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li><li><span>12</span></li>
                            </ul>
                            <ul class="list-unstyled weight">
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                                <li>40</li>
                            </ul>
                        </div>
                        <div class="pull-right" style="width: 100%; max-width: 391px;"><hr>
                        <h5 class="text-left">Service User Hub</h5>
                        <ul class="inPageLinks list-unstyled text-left">
                            <li><a href="#">Nutrition Care Plan</a></li>
                            <li><a href="#">Resident Summary</a></li>
                            <li><a href="#">Food Intake</a></li>
                        </ul></div>
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
    <script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
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
        $("#weightSlider").ionRangeSlider({
            min: 40,
            max: 200,
            force_edges: true,
            postfix: 'kg'
        });
        $("#heightSlider").ionRangeSlider({
            min: 150,
            max: 250,
            force_edges: true,
            postfix: 'cm'
        });
    </script>
</body>
</html>
