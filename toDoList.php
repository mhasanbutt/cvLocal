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
            </ul>
            <span class="title">To Do List</span>
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
                <div class="btn-group noAlergy">
                    <button type="button" class="btn orange"><img src="images/settings-work-tool.svg" class="svg">Edit</button>
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
                    <div class="col-md-8 col-lg-9">
                        <ul class="diseases list-unstyled">
                            <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                        </ul><br>
                        <hr>
                        <form class="inBodyForm form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Area</label>
                                <div class="col-md-6 col-lg-4">
                                    <div class="select">
                                        <select>
                                            <option>Floor / Level</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Task</label>
                                <div class="col-md-8">
                                    <textarea>Vestibulum semper nunc laoreet egestas malesuada. Nullam malesuada tincidunt pulvinar. Sed fringilla blandit posuere. Nam non venenatis erat. Pellentesque vestibulum, magna eu bibendum dignissim, magna mi euismod orci, eu faucibus massa risus vel mi. Suspendisse sodales orci sed erat semper aliquam.</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Assigned To</label>
                                <div class="col-md-6 col-lg-4">
                                    <div class="select">
                                        <select>
                                            <option>Mr. David Johns</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Created By</label>
                                <div class="col-md-6 col-lg-4">
                                    <span class="formInfo">Lorem Ipsum</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Completed By</label>
                                <div class="col-md-6 col-lg-4">
                                    <span class="formInfo">Lorem Ipsum</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Created On</label>
                                <div class="col-md-6 col-lg-4">
                                    <span class="formInfo">June 21st, 2017 - 17:38</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-6 col-lg-4">
                                    <div class="select">
                                        <select>
                                            <option>Completed</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Repeat</label>
                                <div class="col-md-6 col-lg-4 toDoListRepeat">
                                    <div class="select">
                                        <select>
                                            <option></option>
                                            <option>Every Hour</option>
                                            <option>Every 2 Hours</option>
                                            <option>Every 3 Hours</option>
                                            <option>Every 4 Hours</option>
                                            <option>Every 5 Hours</option>
                                            <option>Every 6 Hours</option>
                                            <option>Every Day</option>
                                            <option>Every Week</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-lg-3 text-center">
                        <span class="profileImgLarge">
                            <img src="images/temp-picture.jpg">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button> <button type="button" class="save">Save</button> <button type="button" class="completed">Completed</button>
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

    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function(){
            $('.scrollbar-outer').scrollbar();
            alert ("hello");
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
    </script>
</body>
</html>
