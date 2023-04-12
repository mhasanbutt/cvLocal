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
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>

    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Maintenanace</a></li>
            </ul>
            <span class="title">Damage to Property</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content specialHR">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Property</h4>
                                <form class="inBodyForm">
                                    <div class="row">
                                       	
                                       	<div class="col-md-4">
											<div class="form-group">
												<label>Select Floor</label>
												<div class="select">
													<select>
														<option></option>
														<option>Floor 1</option>
														<option>Floor 2</option>
														<option>Floor 3</option>
														<option>Floor 4</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
                                       	
                                       	<div class="col-md-4">
											<div class="form-group">
												<label>Select Area</label>
												<div class="select">
													<select>
														<option></option>
														<option>Room 1</option>
														<option>Room 2</option>
														<option>Room 3</option>
														<option>Room 4</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
                                       
                                        <div class="col-md-4">
                                            <div class="form-group date">
                                                <label>Date / Time</label>
                                                <input type="text" name="datetimerange">
                                                <img src="images/calendar-icon.svg" class="svg">
                                            </div>
                                        </div>

										<div class="col-md-4">
											<div class="form-group">
												<label>Item Name</label>
												<input type="text" />
											</div>
										</div>
                              		
										<div class="col-md-4">
											<div class="form-group">
												<label>Owner of property</label>
												<div class="select">
													<select>
														<option></option>
														<option>Service User</option>
														<option>Visitor</option>
														<option>Home</option>
														<option>Staff</option>
														<option>Other</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
                             		
                             			<div class="col-md-4">
											<div class="form-group">
												<label>Cause of damage/loss</label>
												<input type="text" />
											</div>
										</div>
                             		
                             			<div class="col-md-4">
											<div class="form-group">
												<label>Description of Damage</label>
												<input type="text" />
											</div>
										</div>
                             		
                             			<div class="col-md-4">
											<div class="form-group">
												<label>Action Taken</label>
												<div class="select">
													<select>
														<option></option>
														<option>Given to Office</option>
														<option>Manual Entry</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
										</div>
                             		
                             			<div class="col-md-4">
											<div class="form-group">
												<label>Item Disposed of?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="controlled" id="Disposed" class="ios-toggle">
													<label for="Disposed" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                              			</div>
                              			
                              			<div class="col-md-4">
                               				<div class="form-group">
                               					<label>Upload Picture</label>
                               					<label class="file">Upload<input type="file" class="hidden"></label>
                               				</div>
                               			</div>
                               			
                               			<div class="col-md-4">
											<div class="form-group">
												<label>Report to management</label>
												<span class="toggles fixed">
													<input type="checkbox" name="management" id="management" class="ios-toggle">
													<label for="management" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                              			</div>
                              		
                               		</div>
                               		
                               		
                                </form>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
	<script src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/jquery.maphilight.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(function() {
            $('input[name="datetimerange"]').daterangepicker({
                timePicker: true,
                singleDatePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                }
            });
        });
        $('input[name="datetimerange"]').on('apply.datetimerange', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="datetimerange"]').on('cancel.datetimerange', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
