<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet"/>
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
                <li><a href="#">Reception</a></li>
            </ul>
            <span class="title">Contacts</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content specialHR">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="inBodyForm">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Type of Contact</label>
        												<div class="select">
        													<select>
        														<option value="" selected="selected">Select</option>
        														<option>Staff Enquiry</option>
        														<option>Suppliers</option>
        														<option>Maintenance Contractor</option>
        														<option>Healthcare Professional</option>
        														<option>Bed Enquiry</option>
        														<option>Service User contact</option>
        													</select>
        													<img src="images/left-arrow.svg" class="svg">
        												</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                	<div class="form-group">
                                                		<label>Assign to</label>
                                                		<div class="select">
        													<select>
        														<option value="" selected="selected">Select</option>
        														<option>Carer</option>
        														<option>Admin</option>
        														<option>Manager</option>
        														<option>Maintenance</option>
        														<option>Chef</option>
        													</select>
        													<img src="images/left-arrow.svg" class="svg">
        												</div>
                                                	</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    	<div class="col-md-9">
                                    		<h4>Supplier</h4>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Company</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Job Title</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Email</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>website</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Business)</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Home)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Mobile)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Fax</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Address</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Postal Code</label>
														<input type="text" />
													</div>
												</div>
											</div>
                                    	</div>
                                    	<div class="col-md-3 text-center">
                                    		<span class="profileImgLarge" style="display:inline-block;">
												<img src="images/photo-camera.svg" class="svg">
												<label class="update">Update <input type="file" hidden></label>
												<img src="images/temp-picture.jpg">
											</span>
                                    	</div>
                                    </div>

                                   	<div class="row">
                                   		<div class="col-md-12">
                                    		<div class="form-group">
                                    			<label>Notes</label>
                                    			<textarea></textarea>
                                    		</div>
                                    	</div>
                                   	</div>

                                   	<hr>

                                   	<div class="row">
                                   		<div class="col-md-9">
                                   			<h4>Maintenance Contractor</h4>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Company</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Job Title</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Email</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>website</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Business)</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Home)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Mobile)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Fax</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Address</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Postal Code</label>
														<input type="text" />
													</div>
												</div>
											</div>
                                   		</div>
                                   		<div class="col-md-3 text-center">
                                   			<span class="profileImgLarge" style="display:inline-block;">
												<img src="images/photo-camera.svg" class="svg">
												<label class="update">Update <input type="file" hidden></label>
												<img src="images/temp-picture.jpg">
											</span>
                                   		</div>
                                   	</div>

                                   	<div class="row">
                                   		<div class="col-md-12">
                                    		<div class="form-group">
                                    			<label>Notes</label>
                                    			<textarea></textarea>
                                    		</div>
                                    	</div>
                                   	</div>

                                   	<hr>

                                   	<div class="row">
                                   		<div class="col-md-9">
                                   			<h4>Healthcare Professional</h4>
                                   			<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Company</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Job Title</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Email</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>website</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Business)</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Home)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Mobile)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Fax</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Address</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Postal Code</label>
														<input type="text" />
													</div>
												</div>
											</div>
                                   		</div>
                                   		<div class="col-md-3 text-center">
                                   			<span class="profileImgLarge" style="display:inline-block;">
												<img src="images/photo-camera.svg" class="svg">
												<label class="update">Update <input type="file" hidden></label>
												<img src="images/temp-picture.jpg">
											</span>
                                   		</div>
                                   	</div>

                                   	<div class="row">
                                   		<div class="col-md-12">
                                    		<div class="form-group">
                                    			<label>Notes</label>
                                    			<textarea></textarea>
                                    		</div>
                                    	</div>
                                   	</div>

                                   	<hr>

                                   	<div class="row">
                                   		<div class="col-md-9">
                                   			<h4>Bed Enquiry</h4>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Point of Contact Details</label>
														<input type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Type of Enquiry</label>
														<div class="select">
															<select>
																<option>Select</option>
																<option>Residential</option>
																<option>Nursing</option>
																<option>Respite</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Funding type</label>
														<div class="select">
															<select>
																<option>Select</option>
																<option>Privately Funded</option>
																<option>Local Authority</option>
																<option>CCG</option>
																<option>Topup</option>
																<option>Other</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
													<div class="form-group" hidden="">
														<label>Other</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Relationship</label>
														<div class="select">
															<select>
																<option>Select</option>
																<option>Next of kin</option>
																<option>Power Of Attourney</option>
																<option>Care Manager</option>
																<option>Friend</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Estimated Fee</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Name</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Job Title</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Email</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>website</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Business)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Home)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Mobile)</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Fax</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Address</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Postal Code</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<h4>Service User Details</h4>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>First name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Middle Name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Current Location</label>
														<div class="select">
															<select>
																<option>Select</option>
																<option>Home</option>
																<option>Hospital</option>
																<option>Care Home</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Address</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Postal Code</label>
														<input type="text" />
													</div>
												</div>
											</div>
                                   		</div>
                                   		<div class="col-md-3 text-center">
                                   			<span class="profileImgLarge" style="display:inline-block;">
												<img src="images/photo-camera.svg" class="svg">
												<label class="update">Update <input type="file" hidden></label>
												<img src="images/temp-picture.jpg">
											</span>
                                   		</div>
                                   	</div>

                                    <div class="row">
                                    	<div class="col-md-12">
                                    		<div class="form-group">
                                    			<label>Notes</label>
                                    			<textarea></textarea>
                                    		</div>
                                    	</div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                    	<div class="col-md-9">
                                    		<h4>Staff Enquiry</h4>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Job Title</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Email</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>website</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Curent/Previous Employer</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Business)</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Home)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Mobile)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Address</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Postal Code</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group date">
														<label>Interview Date</label>
														<input type="text" name="date" />
														<img src="images/calendar-icon.svg" class="svg">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Availability</label>
														<div class="select">
															<select>
																<option>Select</option>
																<option>Part Time</option>
																<option>Full Time</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Job Offered?</label>
														<span class="toggles fixed">
															<input type="checkbox" name="consentPatient" id="jobOffered" class="ios-toggle">
															<label for="jobOffered" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
												</div>
											</div>
                                    	</div>
                                    	<div class="col-md-3 text-center">
                                    		<span class="profileImgLarge" style="display:inline-block;">
												<img src="images/photo-camera.svg" class="svg">
												<label class="update">Update <input type="file" hidden></label>
												<img src="images/temp-picture.jpg">
											</span>
                                    	</div>
                                    </div>

                                 	<div class="row">
                                 		<div class="col-md-12">
                                 			<div class="form-group">
                                 				<label>Notes <small>(Qualification/Training/Relevant Experience  & Information)</small></label>
                                 				<textarea></textarea>
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
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="http://linksdev.co.uk/careVision/web/public/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>

    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/jquery.maphilight.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
		$('input[name="date"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });

		$(".select2").select2();
		$(".select2_multi").select2({ closeOnSelect: false});

        $('input[name="date"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="date"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
