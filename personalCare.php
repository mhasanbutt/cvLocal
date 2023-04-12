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
                <li><a href="#">Care</a></li>
            </ul>
            <span class="title">Personal Care</span>
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
                    <div class="col-md-12">
                        <ul class="diseases list-unstyled">
                            <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                        </ul><br>
                        <hr>
                        <form class="inBodyForm form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Type of Personal Care</label>
                                <div class="col-md-6 col-lg-4">
                                    <div class="select">
                                        <select>
                                            <option>Personal Hygiene</option>
                                            <option>Oral Hygiene</option>
                                            <option>Glasses/Hearing Aid Check</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Type of Hygiene</label>
                                <div class="col-md-6 col-lg-4">
                                    <div class="select pull-left">
                                        <select>
                                            <option>Bath Taken</option>
                                            <option>Shower Taken</option>
                                            <option>Strip Wash</option>
                                            <option>Face Wash</option>
                                            <option>Wet Wipe</option>
                                            <option>Refused</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                    <div class="btn-group smileys pull-right" role="group">
                                      <button type="button" class="btn smileysBtn"><img src="images/laughing.svg" class="svg"></button>
                                      <button type="button" class="btn smileysBtn"><img src="images/smile.svg" class="svg"></button>
                                      <button type="button" class="btn smileysBtn"><img src="images/depression.svg" class="svg"></button>
                                      <button type="button" class="btn smileysBtn"><img src="images/confused.svg" class="svg"></button>
                                      <button type="button" class="btn smileysBtn"><img src="images/angry.svg" class="svg"></button>
                                    </div>
                                    <input type="text" hidden="hidden">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Additional Procedures</label>
                                <div class="col-md-5">
                                    <div class="well">
                                        <span class="formInfo">Hair Washed</span>
                                        <div class="btn-group smileys" role="group">
                                          <button type="button" class="btn smileysBtn"><img src="images/laughing.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/smile.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/depression.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/confused.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/angry.svg" class="svg"></button>
                                        </div>
                                        <input type="text" hidden="hidden">
                                    </div>
                                    <div class="well">
                                        <span class="formInfo">Shaved</span>
                                        <div class="btn-group smileys" role="group">
                                          <button type="button" class="btn smileysBtn"><img src="images/laughing.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/smile.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/depression.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/confused.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/angry.svg" class="svg"></button>
                                        </div>
                                        <input type="text" hidden="hidden">
                                    </div>
                                    <div class="well">
                                        <span class="formInfo">Nail Care</span>
                                        <div class="btn-group smileys" role="group">
                                          <button type="button" class="btn smileysBtn"><img src="images/laughing.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/smile.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/depression.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/confused.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/angry.svg" class="svg"></button>
                                        </div>
                                        <input type="text" hidden="hidden">
                                    </div>
                                    <div class="well">
                                        <span class="formInfo">Cream Applied</span>
                                        <div class="btn-group smileys" role="group">
                                          <button type="button" class="btn smileysBtn"><img src="images/laughing.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/smile.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/depression.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/confused.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/angry.svg" class="svg"></button>
                                        </div>
                                        <input type="text" hidden="hidden">
                                    </div>
                                    <div class="well">
                                        <span class="formInfo">Dressed Themselves</span>
                                        <div class="btn-group smileys" role="group">
                                          <button type="button" class="btn smileysBtn"><img src="images/laughing.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/smile.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/depression.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/confused.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/angry.svg" class="svg"></button>
                                        </div>
                                        <input type="text" hidden="hidden">
                                    </div>
                                    <div class="well">
                                        <span class="formInfo">Dressed Themselves with Assistance</span>
                                        <div class="btn-group smileys" role="group">
                                          <button type="button" class="btn smileysBtn"><img src="images/laughing.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/smile.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/depression.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/confused.svg" class="svg"></button>
                                          <button type="button" class="btn smileysBtn"><img src="images/angry.svg" class="svg"></button>
                                        </div>
                                        <input type="text" hidden="hidden">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Skin Condition</label>
                                <div class="col-md-6 col-lg-4">
                                    <div class="select">
                                        <select>
                                            <option>Normal Skin</option>
                                            <option>Dry Skin</option>
                                            <option>Broke Skin</option>
                                            <option>Skin Rash</option>
                                            <option>Skin Peel</option>
                                            <option>Bruised Skin</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Open Incident Form</label>
                                <div class="col-md-6 col-lg-4">
                                    <span class="toggles fixed">
                                        <input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
                                        <label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Comments</label>
                                <div class="col-md-6">
                                    <textarea type="email" placeholder="Optional"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Add to daily notes</label>
                                <div class="col-md-6 col-lg-4">
                                    <span class="toggles fixed">
                                        <input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
                                        <label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                    </span>
                                </div>
                            </div>
                        </form>
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
