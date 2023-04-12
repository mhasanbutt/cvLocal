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
                <li><a href="#">Assessments</a></li>
            </ul>
            <span class="title">Pre-Admission Assessment and Dependency Tool</span>
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
                    <div class="col-md-8 col-lg-9">
                        <article class="assessmentQuest">
                            <span class="group">Communicating</span>
                            <div class="title">Dependency Description</div>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id1">
                                        <label for="id1">Able to communicate clearly verbally or non-verbally and express basic needs</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id2">
                                        <label for="id2">Able to communicate basic needs clearly but needs to be prompted</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id3">
                                        <label for="id3">Able to indicate their need verbally or non-verbally but difficult to understand</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id4">
                                        <label for="id4">English not their first language</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id5">
                                        <label for="id5">Occasionally able to indicate needs or follow simple instructions</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id6">
                                        <label for="id6">Noisy most of the day or night</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id7">
                                        <label for="id7">Unable to consistently communicate basic needs even when prompted verbally or non-verbally</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id8">
                                        <label for="id8">Unable to communicate needs in any way</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="assessmentCheckBox">
                                        <input type="checkbox" name="id1" id="id9">
                                        <label for="id9">Unable to speak or understand English</label>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            <div class="title">Comment</div>
                            <textarea>sjdfglsjkdhf</textarea>
                        </article>
                    </div>
                    <div class="col-md-4 col-lg-3 inBodyForm">
                        <div id="questCircle"><span class="questCount">1 of 40 <span>Questions</span></span></div>
                        <div class="assessmentControl text-center">
                            <a href="#" class="prev disabled"><img src="images/left-arrow.svg" class="svg"> Prev</a>
                            <a href="#" class="next">Next <img src="images/left-arrow.svg" class="svg"></a><br>
                            <button>Save as Draft</button>
                        </div>
                        <div class="pull-right" style="width: 100%; max-width: 391px;"><hr>
                        <h5 class="inPageLinksTitle">Service User Hub</h5>
                        <ul class="inPageLinks list-unstyled text-left">
                            <li><a href="#">Pre-Admission Form</a></li>
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

    <div class="modal fade toDoListPop" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add to To-Do-List</h4>
                </div>
                <div class="modal-body inBodyForm">
                    <div class="form-group date">
                        <label>Date / Time</label>
                        <input type="text" name="dateRange">
                        <small>Choose date/time of the task</small>
                        <img src="images/calendar-icon.svg" class="calendar svg">
                    </div>
                    <div class="form-group">
                        <label>Alert</label>
                        <span class="toggles fixed">
                            <input type="checkbox" name="alert" id="alert" class="ios-toggle">
                            <label for="alert" class="checkbox-label" data-off="NO" data-on="YES"></label>
                        </span>
                        <small class="clearfix">To show notification on date/time</small>
                    </div>
                    <div class="form-group">
                        <label>Repeat</label>
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
                        <small>Interval of task to be done</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
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
        $('#toDoList').click(function(){
            if ($('#toDoList').is(':checked')) {
                $('.toDoListPop').modal('show')
            } else {
                $('.toDoListPop').modal('hide')
            }
        });
        $("#questCircle").circliful({
            animation: 1,
            animationStep: 1,
            foregroundBorderWidth: 15,
            backgroundBorderWidth: 7,
            percent: 100,
            textSize: 28,
            textStyle: 'font-size: 12px;',
            textColor: '#666',
            multiPercentage: 1,
            percentages: [10, 20, 30],
            halfCircle: true,
            start: 50,
            target: 50,
            progressColor: { 1: '#CB0000', 45: '#648DAC', 90: '#3DA492'}
        });
    </script>
</body>
</html>
