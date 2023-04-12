<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Care</a></li>
                <li><a href="#">Event Reporting</a></li>
            </ul>
            <span class="title"><img src="images/event.png" alt="Event Investigation"> Investigation</span>
        </div>
        <div class="ProfileInfo" hidden>
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
        <ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer searchField">
                    <input type="text" placeholder="Search by keyword">
                    <img src="images/magnifier-tool.svg" class="searchIcon svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Floor/Home</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Service User</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Carer</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer date">
                    <input type="text" name="dateRange" placeholder="Date">
                    <img src="images/calendar-icon.svg" class="calendar svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Event Type</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Classification</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Grading</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>All Stages</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Choose Status</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
        </ul>
        <div class="clearfix">
            <button type="button" class="searchButton">Search</button>
            <button type="button" class="defaultButton">Reset Filters</button>
            
            <div class="pull-right clearfix">
                <ul class="diseases list-unstyled" hidden>
                    <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn orange"><img src="images/add.svg" class="svg">New</button>
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

    <section class="contentBody noBg">
        <div class="scrollArea">
            <div class="content">
                <ul class="list-unstyled eventListing clearfix">
                    <li>
                        <article>
                            <span class="status" style="background-color:#D3F9D6;">Investigated</span>
                            <div class="checkbox">
                                <input type="checkbox" name="" id="checkID1" hidden>
                                <label for="checkID1"></label>
                            </div>

                            <ul class="list-unstyled clearfix">
                                <li>
                                    <i class="title">Home</i>
                                    <span class="value">Highfield House</span>
                                </li>
                                <li>
                                    <i class="title">Location</i>
                                    <span class="value">Lounge</span>
                                </li>
                                <li>
                                    <i class="title">Service User</i>
                                    <span class="value">Tim Shermin</span>
                                </li>
                                <li>
                                    <i class="title">Time / Date</i>
                                    <span class="value">02:22 01.01.2020</span>
                                </li>
                                <li>
                                    <i class="title">Added By</i>
                                    <span class="value">Ruth Moore</span>
                                </li>
                                <li>
                                    <i class="title">Type</i>
                                    <span class="value">Adverse Clinical</span>
                                </li>
                                <li>
                                    <i class="title">Grading</i>
                                    <span class="value">Moderate</span>
                                </li>
                                <li>
                                    <i class="title">Classification</i>
                                    <span class="value">NEWS Protocol Activation</span>
                                </li>
                                <li>
                                    <i class="title">Last Updated</i>
                                    <span class="value">15:45 01.02.2020</span>
                                </li>
                                <li>
                                    <i class="title">Investigation Deadline</i>
                                    <span class="value">12.02.2020</span>
                                </li>
                                <li>
                                    <i class="title">Event Detail</i>
                                    <span class="value">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur vitae faucibus mi. Nullam at risus sed eros aliquam blandit. Praesent imperdiet posuere convallis. Mauris ac mauris urna.</span>
                                </li>
                            </ul>

                            <a href="#" class="ctas edit"><img src="images/edit.png" alt="Edit"></a>
                            <a href="#" class="ctas view"><img src="images/eye.png" alt="View"></a>
                        </article>

                        <ul class="list-unstyled informed clearfix">
                            <li>
                                <span>Manager</span>
                                <i>14-04-2022</i>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <article>
                            <div class="checkbox">
                                <input type="checkbox" name="" id="checkID1" hidden>
                                <label for="checkID1"></label>
                            </div>

                            <ul class="list-unstyled clearfix">
                                <li>
                                    <i class="title">Home</i>
                                    <span class="value">Highfield House</span>
                                </li>
                                <li>
                                    <i class="title">Location</i>
                                    <span class="value">Lounge</span>
                                </li>
                                <li>
                                    <i class="title">Service User</i>
                                    <span class="value">Tim Shermin</span>
                                </li>
                                <li>
                                    <i class="title">Time / Date</i>
                                    <span class="value">02:22 01.01.2020</span>
                                </li>
                                <li>
                                    <i class="title">Added By</i>
                                    <span class="value">Ruth Moore</span>
                                </li>
                                <li>
                                    <i class="title">Type</i>
                                    <span class="value">Adverse Clinical</span>
                                </li>
                                <li>
                                    <i class="title">Grading</i>
                                    <span class="value">Moderate</span>
                                </li>
                                <li>
                                    <i class="title">Classification</i>
                                    <span class="value">NEWS Protocol Activation</span>
                                </li>
                                <li>
                                    <i class="title">Last Updated</i>
                                    <span class="value">15:45 01.02.2020</span>
                                </li>
                                <li>
                                    <i class="title">Investigation Deadline</i>
                                    <span class="value">12.02.2020</span>
                                </li>
                                <li>
                                    <i class="title">Event Detail</i>
                                    <span class="value">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur vitae faucibus mi. Nullam at risus sed eros aliquam blandit. Praesent imperdiet posuere convallis. Mauris ac mauris urna.</span>
                                </li>
                            </ul>

                            <a href="#" class="ctas edit"><img src="images/edit.png" alt="Edit"></a>
                            <a href="#" class="ctas view"><img src="images/eye.png" alt="View"></a>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-4">
                <div class="listCount">
                    <select>
                        <option>50</option>
                        <option>100</option>
                        <option>150</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="records">

                    <div class="counter">
                        <span>Page</span>
                        <span class="field"><input type="text" value="1"></span>
                        <span>of 15</span>
                    </div>
                    <span class="next"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <div class="form-inline">
                    <label>Sort by</label>
                    <div class="select">
                        <select>
                            <option>Identified Needs</option>
                            <option>Care Plan</option>
                            <option>Service User</option>
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
    <script src="js/custom.js"></script>
    <script>
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
