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
                <li><a href="#">Care Plan</a></li>
            </ul>
            <span class="title">Behavioural Concerns</span>
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
                    <button type="button" class="btn orange"><img src="images/add-new-document.svg" class="svg">New</button>
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
                        <article class="generalInfo"><span><span class="title">Last Review Date:</span>  2017-06-29</span> <span><span class="title">Updated By:</span>  Nulla facilisi</span></article>
                        <form class="inBodyForm">
                            <div class="form-group">
                                <label>Identified Need</label>
                                <textarea class="disabled" disabled>Pellentesque a sodales lectus, vel pellentesque augue. Aenean erat tellus, commodo eu nibh a, consequat commodo nulla. Pellentesque rhoncus libero nulla, id posuere diam suscipit vel. Nam ut eros vitae nunc elementum tincidunt quis sed nisl. Fusce laoreet dictum nulla, a viverra ligula semper vitae. Pellentesque a sodales lectus, vel pellentesque augue. Aenean erat tellus, commodo eu nibh a, consequat commodo nulla. Pellentesque rhoncus libero nulla, id posuere diam suscipit vel. Nam ut eros vitae nunc elementum tincidunt quis sed nisl. Fusce laoreet dictum nulla, a viverra ligula semper vitae.</textarea>
                            </div>
                            <div class="form-group">
                                <label>Aim of Plan</label>
                                <textarea>Pellentesque a sodales lectus, vel pellentesque augue. Aenean erat tellus, commodo eu nibh a, consequat commodo nulla. Pellentesque rhoncus libero nulla, id posuere diam suscipit vel. Nam ut eros vitae nunc elementum tincidunt quis sed nisl. Fusce laoreet dictum nulla, a viverra ligula semper vitae.</textarea>
                            </div>
                            <div class="form-group">
                                <label>Plan of Action</label>
                                <textarea>Pellentesque a sodales lectus, vel pellentesque augue. Aenean erat tellus, commodo eu nibh a, consequat commodo nulla. Pellentesque rhoncus libero nulla, id posuere diam suscipit vel. Nam ut eros vitae nunc elementum tincidunt quis sed nisl. Fusce laoreet dictum nulla, a viverra ligula semper vitae.</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Revision Date</label>
                                        <input type="text" name="dateRange" placeholder="Date">
                                        <img src="images/calendar-icon.svg" class="calendar svg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>New Attachment</label>
                                        <label class="file">Upload<input type="file" class="hidden"></label>
                                        <span class="formInfo">abcd.jpg</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5>eConsent Status <small>(Approval Via)</small></h5>
                                <p>Not Approved</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email (next of Kin)</label>
                                        <span class="toggles">
                                            <input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
                                            <label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                        <input type="email" placeholder="example@domainname.com" class="disabled" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email Admin</label>
                                        <span class="toggles">
                                            <input type="checkbox" name="emailAdmin" id="emailAdmin" class="ios-toggle">
                                            <label for="emailAdmin" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                        <input type="email" placeholder="example@domainname.com" class="disabled" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Send Via App</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="sendViaApp" id="sendViaApp" class="ios-toggle">
                                            <label for="sendViaApp" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone Call (via VoIP)</label>
                                        <span class="toggles">
                                            <input type="checkbox" name="phoneCall" id="phoneCall" class="ios-toggle">
                                            <label for="phoneCall" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                        <textarea type="email" placeholder="Notes" class="disabled" disabled></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Physical Copy (Printed)</label>
                                        <span class="toggles fixed pull-right">
                                            <input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
                                            <label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                        <label class="file">Upload<input type="file" class="hidden"></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Approved Via eSign</label>
                                        <span class="toggles fixed pull-right">
                                            <input type="checkbox" name="eSign" id="eSign" class="ios-toggle">
                                            <label for="eSign" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                        <label class="file">Upload<input type="file" class="hidden"></label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-lg-3 text-center">
                        <h5 class="inPageLinksTitle"><span>Service User Hub</span></h5>
                        <ul class="inPageLinks list-unstyled text-left">
                            <li><a href="#">Behavioural Chart</a></li>
                            <li><a href="#">Safeguarding</a></li>
                            <li><a href="#">Related Accidents &amp; Incidents</a></li>
                            <li><a href="#">Risk Assessment</a></li>
                            <li><a href="#">Refer to Mental Health Team</a></li>
                        </ul>
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
    </script>
</body>
</html>
