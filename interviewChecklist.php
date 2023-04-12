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
            <span class="title">Interview Checklist</span>
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" value="Lorem Ipsum" disabled class="disabled" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Department Applying for</label>
                                                <input type="text" value="Lorem Ipsum" disabled class="disabled" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Position Applying For</label>
                                                <input type="text" value="Lorem Ipsum" disabled class="disabled" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-4">
                                            <div class="form-group date">
                                                <label>Date</label>
                                                <input type="text" name="dateRange" value="11/22/2017" disabled class="disabled" />
                                                <img src="images/calendar-icon.svg" class="svg">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Interview Checklist</h4>
                                    
                                    <div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>Discussed role</label>
												<span class="toggles fixed">
													<input type="checkbox" name="consentPatient" id="consentPatient" class="ios-toggle">
													<label for="consentPatient" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>
										<div class="col-md-4">
											<label>position selected for</label>
											<div class="select">
												<select>
													<option value="" selected="selected">Select</option>
													<option>Healthcare Assistant</option>
													<option>Registered Nurse</option>
													<option>Team Leader</option>
													<option>Housekeeper</option>
													<option>Activities Coordinator</option>
													<option>Laundry</option>
													<option>Maintenance</option>
													<option>Administrator</option>
													<option>Reception</option>
													<option>Accounts</option>
													<option>Manager</option>
													<option>Deputy Manager</option>
													<option>Driver</option>
													<option>Other</option>
												</select>
												<img src="images/left-arrow.svg" class="svg">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea placeholder="Notes:"></textarea>
											</div>
										</div>

                                    </div>
                                    
                                    <hr>
                                    <h4>Rota</h4>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>We provide 24 hour 7 days a week around the clock care for our residents. This means you need to be very flexible. Our Rota changes every week.</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" id="ourresident" class="ios-toggle">
															<label for="ourresident" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<textarea placeholder="Notes:"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>Weekly Hours</label>
                                    			<input type="text" />
                                    		</div>
                                   		</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Shift Availability</h4>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
												<label>Early-Early (06.30 AM- 14.45 PM)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="" id="timeEarly" class="ios-toggle">
													<label for="timeEarly" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
												<label>Early (06.30 AM- 14.45 PM)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="" id="timeEarl" class="ios-toggle">
													<label for="timeEarl" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
												<label>Late (14.30 PM - 21.15 PM)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="" id="timeLate" class="ios-toggle">
													<label for="timeLate" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
												<label>Long Day (14.30 PM - 21.15 PM)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="" id="timeLongday" class="ios-toggle">
													<label for="timeLongday" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
												<label>Night (21.00 PM - 08.15 AM)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="" id="timeNight" class="ios-toggle">
													<label for="timeNight" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
												<label>Short Long day (COVENT GARDEN) (08.00 AM – 18.30PM)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="" id="timeshortlong" class="ios-toggle">
													<label for="timeshortlong" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-12">
                                    		<div class="form-group">
                                    			<label>Notes:</label>
                                    			<textarea></textarea>
                                    		</div>
                                    	</div>
                                    </div>
                                    
                                    
                                    <hr>
                                    <h4>Holidays/ Day off Request</h4>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Holidays must be booked in advance, as well as writing in the day request book. We do not accept holiday bookings from 15th December - 7th January.</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" id="holidaysbooked" class="ios-toggle">
															<label for="holidaysbooked" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<textarea placeholder="Notes:"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Dress Code</h4>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Smart casual – No jeans, no trainers. Jewellery to be removed.</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" id="Dresscode" class="ios-toggle">
															<label for="Dresscode" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<textarea placeholder="Notes:"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Uniform</h4>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
												<label>Women Tunic £15 Each(3 in total)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="" id="womentunic" class="ios-toggle">
													<label for="womentunic" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
												<label>Men's Polo Shirt £10 Each(3 in total)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="" id="MenPolo" class="ios-toggle">
													<label for="MenPolo" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-12">
                                    		<div class="form-group">
                                    			<label>Notes:</label>
                                    			<textarea></textarea>
                                    		</div>
                                    	</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Requirments</h4>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>Disclosure and Barring Service (DBS) - £65.00 with two proof of address copies</label>
												<div class="row">
													<div class="col-md-12">
														<span class="toggles fixed">
															<input type="checkbox" id="barringService" class="ios-toggle">
															<label for="barringService" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<label>Disclosure and Barring Service (DBS) - £60.00 with two proof of address copies</label>
												<div class="row">
													<div class="col-md-12">
														<span class="toggles fixed">
															<input type="checkbox" id="barringService1" class="ios-toggle">
															<label for="barringService1" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>ID Badge - £3.00</label>
												<div class="row">
													<div class="col-md-12">
														<span class="toggles fixed">
															<input type="checkbox" id="Badge" class="ios-toggle">
															<label for="Badge" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<label>You are required to provide the names and contact details of two referees</label>
												<div class="row">
													<div class="col-md-12">
														<span class="toggles fixed">
															<input type="checkbox" id="referees" class="ios-toggle">
															<label for="referees" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<textarea placeholder="Notes:"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Documents</h4>
                                    
                                    <div class="row">
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                    			<label>Passport</label>
                                    			<span class="toggles fixed">
													<input type="checkbox" id="Passport" class="ios-toggle">
													<label for="Passport" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                    			<label>N.I Number</label>
                                    			<span class="toggles fixed">
													<input type="checkbox" id="Number" class="ios-toggle">
													<label for="Number" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                    			<label>Proof of Address</label>
                                    			<span class="toggles fixed">
													<input type="checkbox" id="ProffAddress" class="ios-toggle">
													<label for="ProffAddress" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                    			<label>Bank Details</label>
                                    			<span class="toggles fixed">
													<input type="checkbox" id="bankdetail" class="ios-toggle">
													<label for="bankdetail" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    </div>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-3">
												<label>Qualification Certificates</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" id="QualificationCert" class="ios-toggle">
															<label for="QualificationCert" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<textarea placeholder="Notes:"></textarea>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-6">
												<label>You are required to attend mandatory training when requested</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" id="mandatoryTraining" class="ios-toggle">
															<label for="mandatoryTraining" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<textarea placeholder="Notes:"></textarea>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-3">
												<label>Smoking & Duty Policy</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" id="DutyPolic" class="ios-toggle">
															<label for="DutyPolic" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<textarea placeholder="Notes:"></textarea>
														</div>
													</div>
												</div>
											</div>
											
										</div>
                                    </div>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>It is your responsibility to provide the Reception with your P45 or P46 on time before you start work.</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" id="responsibility" class="ios-toggle">
															<label for="responsibility" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<textarea placeholder="Notes:"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Care Certificate Training</h4>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>Set Charge</label>
                                    			<input type="text" />
                                    		</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>Enroll in Care Certificate training</label>
                                    			<span class="toggles fixed">
													<input type="checkbox" id="Certificatetraining" class="ios-toggle">
													<label for="Certificatetraining" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
                                    		</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>Payrate/Salary</label>
                                    			<input type="text" />
                                    		</div>
                                    	</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>Payrate (Hourly)</label>
                                    			<input type="text" />
                                    		</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>Salary (P/A)</label>
                                    			<input type="text" />
                                    		</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>E-sign</label>
                                    			<label class="file">Upload<input type="file" class="hidden"></label>
                                    		</div>
                                    	</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Management Only</h4>
                                    <span class="formInfo">INDUCTION</span>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label>Paid/Unpaid</label>
												<div class="row">
													<div class="col-md-12">
														<span class="toggles fixed">
															<input type="checkbox" id="paidun" class="ios-toggle">
															<label for="paidun" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">	
										<div class="form-group">
											<div class="col-md-3">
												<div class="form-group date">
													<label>Day 1</label>
													<input type="text" name="dateRange">
													<img src="images/calendar-icon.svg" class="svg">
												</div>
                                    		</div>
                                    		<div class="col-md-3">
												<div class="form-group">
													<label>Assign To Floor</label>
													<div class="select">
														<select>
															<option>Select</option>
															<option>Floor 1</option>
															<option>Floor 2</option>
															<option>Floor 3</option>
															<option>Floor 4</option>
														</select>
														<img src="images/left-arrow.svg" class="svg">
													</div>
												</div>
                                    		</div>
                                    		<div class="col-md-6">
												<div class="form-group">
													<label>Notes:</label>
													<input type="text" />
												</div>
                                    		</div>
										</div>
                                    </div>
                                    <div class="row">	
										<div class="form-group">
											<div class="col-md-3">
												<div class="form-group date">
													<label>Day 2</label>
													<input type="text" name="dateRange">
													<img src="images/calendar-icon.svg" class="svg">
												</div>
                                    		</div>
                                    		<div class="col-md-3">
												<div class="form-group">
													<label>Assign To Floor</label>
													<div class="select">
														<select>
															<option>Select</option>
															<option>Floor 1</option>
															<option>Floor 2</option>
															<option>Floor 3</option>
															<option>Floor 4</option>
														</select>
														<img src="images/left-arrow.svg" class="svg">
													</div>
												</div>
                                    		</div>
                                    		<div class="col-md-6">
												<div class="form-group">
													<label>Notes:</label>
													<input type="text" />
												</div>
                                    		</div>
										</div>
                                    </div>
                                    <div class="row">	
										<div class="form-group">
											<div class="col-md-3">
												<div class="form-group date">
													<label>Day 3</label>
													<input type="text" name="dateRange">
													<img src="images/calendar-icon.svg" class="svg">
												</div>
                                    		</div>
                                    		<div class="col-md-3">
												<div class="form-group">
													<label>Assign To Floor</label>
													<div class="select">
														<select>
															<option>Select</option>
															<option>Floor 1</option>
															<option>Floor 2</option>
															<option>Floor 3</option>
															<option>Floor 4</option>
														</select>
														<img src="images/left-arrow.svg" class="svg">
													</div>
												</div>
                                    		</div>
                                    		<div class="col-md-6">
												<div class="form-group">
													<label>Notes:</label>
													<input type="text" />
												</div>
                                    		</div>
										</div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                                <label>Add to Calendar</label>
                                                <span class="toggles fixed">
													<input type="checkbox" id="Calendar" class="ios-toggle">
													<label for="Calendar" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
                                            </div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                                <label>Add to To-do List</label>
                                                <span class="toggles fixed">
													<input type="checkbox" id="List" class="ios-toggle">
													<label for="List" class="checkbox-label" data-off="NO" data-on="YES"></label>
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

    <div class="modal fade" id="typeMedication" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Patch Location</h4>
                </div>
                <div class="modal-body text-center">
                    <section class="bodyMap">
                        <img src="images/bodyMap.png" class="map" usemap="#bodyMap">
                        <map name="bodyMap">
                          <area position="lsof" data="Left Sole of Foot" shape="rect" coords="329,605,401,689" href="#" title="Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot Left Sole of Foot ">
                          <area position="rsof" data="Right Sole of Foot" shape="rect" coords="224,605,296,689" href="#">
                          <area position="lla" data="Left Lumbar Area" shape="rect" coords="435,228,471,342" href="#">
                          <area position="rsc" data="Right Scapula" shape="rect" coords="501,137,541,218" href="#">
                          <area position="sa" data="Sacral Area" shape="rect" coords="478,303,498,344" href="#">
                          <area position="lva" data="Lumbar Vertebrae Area" shape="rect" coords="478,261,498,302" href="#">
                          <area position="dta2" data="Dorsal Thoracic Area" shape="rect" coords="478,219,498,260" href="#">
                          <area position="dta" data="Dorsal Thoracic Area" shape="rect" coords="478,177,498,218" href="#">
                          <area position="lab" data="Lower Abdomen" shape="rect" coords="107,343,170,367" href="#">
                          <area position="lia" data="Left Inguinal Area" shape="rect" coords="178,343,204,368" href="#">
                          <area position="ria" data="Right Inguinal Area" shape="rect" coords="73,345,99,368" href="#">
                          <area position="rv" data="Right Vacio" shape="rect" coords="72,295,98,341" href="#">
                          <area position="lv" data="Left Vacio" shape="rect" coords="177,293,203,341" href="#">
                          <area position="ur" data="Umbilical Region" shape="rect" coords="106,293,169,340" href="#">
                          <area position="le" data="Left Eye" shape="rect" coords="142,53,168,72" href="#">
                          <area position="fh" data="Forehead" shape="poly" coords="110,35,166,36,166,52,110,52" href="#">
                          <area position="re" data="Right Eye" shape="rect" coords="110,52,136,71" href="#">
                          <area position="nose" data="Nose" shape="rect" coords="129,70,149,85" href="#">
                          <area position="lips" data="Lips" shape="rect" coords="125,86,152,98" href="#">
                          <area position="mandible" data="Mandible" shape="rect" coords="125,100,151,116" href="#">
                          <area position="lct" data="Left Chest" shape="poly" coords="141,163,202,166,194,221,141,221" href="#">
                          <area position="lc" data="Left Clavicle" shape="poly" coords="158,134,153,147,186,147,191,135" href="#">
                          <area position="ls" data="Left Shoulder" shape="poly" coords="199,138,214,142,226,149,234,160,238,171,213,168" href="#">
                          <area position="ana" data="Anterior Neck Area" shape="poly" coords="123,126,154,126,147,147,129,148" href="#">
                          <area position="lap" data="Left Armpit" shape="poly" coords="209,196,206,230,197,228,201,197" href="#">
                          <area position="ra" data="Right Arm" shape="poly" coords="35,193,32,213,23,253,62,266,70,189" href="#">
                          <area position="rct" data="Right Chest" shape="poly" coords="140,164,140,221,82,221,76,167" href="#">
                          <area position="rap" data="Right Armpit" shape="poly" coords="69,197,70,222,79,225,76,196" href="#">
                          <area position="rs" data="Right Shoulder" shape="poly" coords="77,137,65,140,52,148,46,153,40,164,41,173,51,173,60,172,65,165" href="#">
                          <area position="rc" data="Right Clavicle" shape="poly" coords="118,138,122,148,86,146,83,136" href="#">
                          <area position="eg" data="Epigastrium" shape="rect" coords="106,231,169,290" href="#">
                          <area position="lhc" data="Left hypochondrium" shape="rect" coords="177,231,203,291" href="#">
                          <area position="rhc" data="Right hypochondrium" shape="rect" coords="72,233,98,291" href="#">
                          <area position="scrotum" data="Scrotum / Penis" shape="poly" coords="115,386,131,425,147,427,159,386" href="#">
                          <area position="lfa" data="Left Forearm" shape="poly" coords="217,295,233,353,257,366,261,325,253,291" href="#">
                          <area position="rfa" data="Right Forearm" shape="poly" coords="23,288,16,313,18,354,41,359,52,329,59,291" href="#">
                          <area position="lw" data="Left Wrist" shape="poly" coords="235,377,258,378,257,389,235,390" href="#">
                          <area position="rw" data="Right Wrist" shape="poly" coords="40,370,17,370,16,383,38,383" href="#">
                          <area position="lit" data="Left Inner Thigh" shape="poly" coords="209,375,213,418,212,473,203,523,147,529,144,468,162,374" href="#">
                          <area position="rit" data="Right Inner Thigh" shape="poly" coords="129,530,71,516,63,464,61,407,65,379,108,380,132,442" href="#">
                          <area position="rfol" data="Right Shin" shape="poly" coords="148,597,145,635,151,679,152,720,179,721,187,673,201,633,199,586" href="#">
                          <area position="lfol" data="Left Shin" shape="poly" coords="129,602,76,584,75,620,92,693,97,723,123,720,130,653" href="#">
                          <area position="lank" data="Left Ankle" shape="poly" coords="153,723,179,724,180,747,145,745" href="#">
                          <area position="rank" data="Right Ankle" shape="poly" coords="125,722,130,747,95,751,96,723" href="#">
                          <area position="rpof" data="Right Foot" shape="poly" coords="93,760,130,764,128,783,84,787" href="#">
                          <area position="lpof" data="Left Foot" shape="poly" coords="147,769,183,761,196,783,153,788" href="#">
                          <area position="boh" data="Back of Head" shape="poly" coords="454,27,475,15,514,17,522,40,451,43" href="#">
                          <area position="oa" data="Occipital Area" shape="poly" coords="452,47,521,44,509,95,464,93" href="#">
                          <area position="lsc" data="Left Scapula" shape="rect" coords="436,137,476,218" href="#">
                          <area position="pna" data="Posterior neck Area" shape="poly" coords="462,109,509,110,512,128,464,130" href="#">
                          <area position="cva" data="Cervical Vertebrae Area" shape="rect" coords="478,135,498,176" href="#">
                          <area position="lpsa" data="Left Posterior Shoulder Area" shape="poly" coords="433,141,401,149,387,168,387,192,407,188,432,190" href="#">
                          <area position="rla" data="Right Lumbar Area" shape="rect" coords="506,228,542,342" href="#">
                          <area position="rpsa" data="Right Posterior Shoulder Area" shape="poly" coords="543,139,565,145,580,157,588,182,561,194,543,189" href="#">
                          <area position="lra" data="Left Rear Arm" shape="poly" coords="382,216,408,220,416,260,410,274,373,269,373,242" href="#">
                          <area position="rra" data="Right Rear Arm" shape="poly" coords="592,215,601,244,603,274,563,275,560,240,565,220" href="#">
                          <area position="reb" data="Right Elbow" shape="poly" coords="602,281,565,284,568,312,610,310" href="#">
                          <area position="leb" data="Left Elbow" shape="poly" coords="373,281,411,283,406,314,366,310" href="#">
                          <area position="rrfa" data="Right Rear Forearm" shape="poly" coords="572,321,609,320,608,370,586,373" href="#">
                          <area position="lrfa" data="Left Rear Forearm" shape="poly" coords="364,316,402,325,391,363,367,365" href="#">
                          <area position="rb" data="Right Buttocks" shape="poly" coords="488,356,550,350,564,429,489,425" href="#">
                          <area position="lboh" data="Left back of Hand" shape="poly" coords="232,399,263,402,262,424,250,442,240,418,234,434" href="#">
                          <area position="rboh" data="Right Back of Hand" shape="poly" coords="16,396,42,396,45,436,35,414,32,448,14,428" href="#">
                          <area position="lpoh" data="Left Palm" shape="poly" coords="368,389,389,390,392,433,379,411,381,446,363,420" href="#">
                          <area position="rpoh" data="Right Palm" shape="poly" coords="586,391,607,393,614,419,603,445,595,445,591,416,583,436" href="#">
                          <area position="rreart" data="Right Rear Thigh" shape="poly" coords="492,442,499,515,548,535,564,439" href="#">
                          <area position="rpopa" data="Right Popliteal Area" shape="poly" coords="497,541,546,546,548,583,501,579" href="#">
                          <area position="rcalf" data="Right Calf" shape="poly" coords="498,600,497,645,502,716,531,720,539,669,551,622,549,596" href="#">
                          <area position="lcalf" data="Left Calf" shape="poly" coords="425,595,479,603,473,716,444,716,436,670,424,628" href="#">
                          <area position="lfof" data="Left Toes" shape="poly" coords="323,582,323,568,324,558,328,549,338,545,347,548,352,561,352,579,359,553,361,547,373,552,390,571,400,584,403,600,325,596" href="#">
                          <area position="rfof" data="Right Toes" shape="poly" coords="300,594,300,581,301,562,293,547,282,541,276,556,274,579,271,565,265,547,248,560,221,593" href="#">
                          <area position="apex" data="Apex" shape="rect" coords="114,16,163,31" href="#">
                          <area position="lpopa" data="Left Popliteal Area" shape="rect" coords="427,549,476,581" href="#">
                          <area position="rk" data="Right Knee" shape="poly" coords="75,535,79,552,81,571,129,592,126,582,128,551" href="#">
                          <area position="lk" data="Left Knee" shape="poly" coords="149,552,197,547,196,564,196,577,148,592,149,575" href="#">
                          <area position="rheel" data="Right Heel" shape="poly" coords="237,742,251,767,279,768,291,742" href="#">
                          <area position="lheel" data="Left Heel" shape="poly" coords="335,746,346,769,374,768,387,748" href="#">
                          <area position="lreart" data="Left Rear Thigh"  shape="poly" coords="413,446,481,445,475,521,426,535" href="#">
                          <area position="lb" data="Left Buttocks" shape="poly" coords="425,355,486,355,484,429,410,427" href="#">
                          <area position="la" data="Left Arm" shape="poly" coords="211,177,211,245,252,245,238,181" href="#">
                          <area position="ref" data="Left Arm" shape="poly" coords="112,90,105,62,96,67,105,90" href="#">
                          <area position="lef" data="Left Arm" shape="poly" coords="172,63,179,73,167,91" href="#">
                          <area position="rearb" data="Left Arm" shape="poly" coords="523,65,528,74,516,89" href="#">
                          <area position="learb" data="Left Arm" shape="poly" coords="451,81,449,64,460,87" href="#">
                          <area position="rboheel" data="Right Back of Heel" shape="poly" coords="496,752,495,765,498,788,514,789,527,787,548,788,539,772,530,751" href="#">
                          <area position="lboheel" data="Left Back of Heel" shape="poly" coords="443,754,479,754,480,775,473,789,458,789,444,787,430,787,436,770" href="#">
                        </map>
                        <p>&nbsp;</p>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

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
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
		
		$(".select2").select2();
		$(".select2_multi").select2({ closeOnSelect: false});
		
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
        $("#typeMed").change(function() {
            $('#typeMedication').modal();
        });
        $('#typeMedication').on('shown.bs.modal', function (e) {
            alert("sdasdf")
        	$('.map').maphilight();
        	$('.star').click(function(e) {
        		e.preventDefault();
        		var data = $('.star').mouseout().data('maphilight') || {};
        		data.alwaysOn = !data.alwaysOn;
        		$('.star').data('maphilight', data).trigger('alwaysOn.maphilight');
        	});
//            var map = $('[usemap=#bodyMap]');
        	var map = $('img.map');
        	var canvas = $('<canvas width="'+map.width()+'" height="'+map.height()+'" />');
        	canvas.css({
        		position: 'absolute',
        		top: map.position().top,
        		left: map.position().left,
        		pointerEvents: 'none'
        	});

        	$('.bodyMap').append(canvas);
        	var context = canvas[0].getContext('2d');
        	function calculateCenterPoint(areas) {
        		var maxX = 0,
        		minX = Infinity,
        		maxY = 0,
        		minY = Infinity;

        		Array.prototype.forEach.call(areas, function (e) {
        			var i = 0,
        			coords = e.getAttribute('coords').split(',');

        			while (i < coords.length) {
        				var x = parseInt(coords[i++],10),
        				y = parseInt(coords[i++],10);
        				if (x < minX) minX = x;
        				else if (x > maxX) maxX = x;

        				if (y < minY) minY = y;
        				else if (y > maxY) maxY = y;
        			}
        		});
        		return {
        			x: minX + (maxX - minX) / 2,
        			y: minY + (maxY - minY) / 2
        		};
        	}
        	function drawCenter(center, color) {
        		context.clearRect(0,0,canvas.width(),canvas.height());
        		drawOldPoints();
        		context.beginPath();
        		context.arc(center.x, center.y, 6, 0, 2 * Math.PI, false);
        		context.fillStyle = '#'+color+'';
        		context.fill();
        		context.lineWidth = 1;
        		context.strokeStyle = '#FFF';
        		context.stroke();
        	}
        	function drawExistingCenter(center, color) {
        		context.beginPath();
        		context.arc(center.x, center.y, 6, 0, 2 * Math.PI, false);
        		context.fillStyle = '#'+color+'';
        		context.fill();
        		context.lineWidth = 1;
        		context.strokeStyle = '#FFF';
        		context.stroke();
        	}
        	$(document).on('click', 'map area', function (e) {
        		var mapCode = $(this).attr("position");
        		var mapVal = $(this).attr("data");
        		var center = calculateCenterPoint($('area[position="'+mapCode+'"]'));
        		drawCenter(center, "F00");
        		alert(mapVal);
                $('#location').focus();

        	});
        	var ActiveWounds = [{"woundLocation":"LE","color":"00F"},{"woundLocation":"LC","color":"F0F"},{"woundLocation":"RA","color":"0FF"}];
        	drawOldPoints();

        	function drawOldPoints(){
        		ActiveWounds.forEach(function(element) {
        			newCenter = calculateCenterPoint($('area[position="'+element.woundLocation+'"]'));
        			drawExistingCenter(newCenter,element.color);
        		});
        	}
        });
    </script>
</body>
</html>
