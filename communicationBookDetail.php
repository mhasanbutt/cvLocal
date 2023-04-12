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
            <span class="title">Communication Book</span>
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
                    <button type="button" class="btn"><img src="images/settings-work-tool.svg" class="svg">Edit</button>
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
                        <form class="inBodyForm form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Area</label>
                                <div class="col-md-6 col-lg-4">
                                    <div class="select">
                                        <select>
                                            <option>Unit</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6 col-lg-4">
                                    <div class="select">
                                        <select>
                                            <option>Floor</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Service User</label>
                                <div class="col-md-8">
                                	<div class="row">
                                		<div class="col-md-4">
                                			<div class="serviceUserCheckbox">
                                				<input id="servUsr1" type="checkbox" name="test"/>
                                				<label for="servUsr1">
													<img src="images/temp-picture.jpg"> Service User
												</label>
											</div>
                                		</div>
                                		<div class="col-md-4">
                                			<div class="serviceUserCheckbox">
                                				<input id="servUsr2" type="checkbox" name="test"/>
                                				<label for="servUsr2">
													<img src="images/temp-picture.jpg"> Service User
												</label>
											</div>
                                		</div>
                                		<div class="col-md-4">
                                			<div class="serviceUserCheckbox">
                                				<input id="servUsr3" type="checkbox" name="test"/>
                                				<label for="servUsr1">
													<img src="images/temp-picture.jpg"> Service User
												</label>
											</div>
                                		</div>
                                        <div class="col-md-4">
                                			<div class="serviceUserCheckbox">
                                				<input id="servUsr1" type="checkbox" name="test"/>
                                				<label for="servUsr1">
													<img src="images/temp-picture.jpg"> Service User
												</label>
											</div>
                                		</div>
                                		<div class="col-md-4">
                                			<div class="serviceUserCheckbox">
                                				<input id="servUsr2" type="checkbox" name="test"/>
                                				<label for="servUsr2">
													<img src="images/temp-picture.jpg"> Service User
												</label>
											</div>
                                		</div>
                                		<div class="col-md-4">
                                			<div class="serviceUserCheckbox">
                                				<input id="servUsr3" type="checkbox" name="test"/>
                                				<label for="servUsr1">
													<img src="images/temp-picture.jpg"> Service User
												</label>
											</div>
                                		</div>
                                	</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">For Service Users</label>
                                <div class="col-md-8">
                                    <div class="checkBox">
                                        <input type="checkbox" name="all" id="all" class="hidden">
                                        <label for="all"><img src="images/checked.svg" class="svg"></label>
                                        Edward Thomson
                                    </div>
                                    <div class="checkBox">
                                        <input type="checkbox" name="all" id="all" class="hidden">
                                        <label for="all"><img src="images/checked.svg" class="svg"></label>
                                        Terrence Edwards
                                    </div>
                                    <div class="checkBox">
                                        <input type="checkbox" name="all" id="all" class="hidden">
                                        <label for="all"><img src="images/checked.svg" class="svg"></label>
                                        John Smith
                                    </div>
                                    <div class="checkBox">
                                        <input type="checkbox" name="all" id="all" class="hidden">
                                        <label for="all"><img src="images/checked.svg" class="svg"></label>
                                        Harry Parker
                                    </div>
                                    <div class="checkBox">
                                        <input type="checkbox" name="all" id="all" class="hidden">
                                        <label for="all"><img src="images/checked.svg" class="svg"></label>
                                        Service User 1
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-8 col-lg-6">
                                    <textarea></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Notes From</label>
                                <div class="col-md-6 col-lg-4">
                                    <span class="formInfo">David King</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Add to To-Do List</label>
                                <div class="col-md-6 col-lg-4">
                                    <span class="toggles fixed">
                                        <input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle">
                                        <label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Send Notification to Admin to-do list</label>
                                <div class="col-md-6 col-lg-4">
                                    <span class="toggles fixed">
                                        <input type="checkbox" name="emailKin" id="emailKin" class="ios-toggle" checked>
                                        <label for="emailKin" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                    </span>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
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
