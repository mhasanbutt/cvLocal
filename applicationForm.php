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
            <span class="title">Application Form</span>
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
                                   	<h4>Personal Details and Information</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Position Applied For</label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>How did you hear about this vacancy?</label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>Middle Name</label>
                                    			<input type="text" value="" />
                                    		</div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                    			<label>Last Name</label>
                                    			<input type="text" value="" />
                                    		</div>
                                    	</div>
                                    	<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="Miss">Miss</option>
														<option value="Mr">Mr</option>
														<option value="Mrs">Mrs</option>
														<option value="Ms">Ms</option>
														<option value="Other">Other</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                                <label>Likes to be known as</label>
                                                <input type="text">
                                            </div>
                                    	</div>
                                    	<div class="col-md-3">
                                            <div class="form-group date">
                                                <label>Date Of Birth</label>
                                                <input type="text" name="dob">
                                                <img src="images/calendar-icon.svg" class="svg">
                                            </div>
                                        </div>
                                        <div class="col-md-1 age">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" class="disabled" value="32" disabled>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                    		<div class="form-group">
                                                <label>NI No</label>
                                                <input type="text">
                                            </div>
                                    	</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                                <label>Landline</label>
                                                <input type="text">
                                            </div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                                <label>Mobile Phone</label>
                                                <input type="text">
                                            </div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                                <label>Email</label>
                                                <input type="text">
                                            </div>
                                    	</div>
									</div>
                              		
                              		<div class="row">
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                                <label>Address</label>
                                                <input type="text">
                                            </div>
                                    	</div>
                                    	<div class="col-md-4">
                                    		<div class="form-group">
                                                <label>Postcode</label>
                                                <input type="text">
                                            </div>
                                    	</div>
                                   	</div>
                                    
                                    <hr>
                                    <h4>Additional Information</h4>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Do you have Legal Right to work in the UK?</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" name="consentPatient" id="consentPatient" class="ios-toggle">
															<label for="consentPatient" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<span class="formInfo mentalCapacityCheck">Please note we are unable to recruit anyone who does not have the legal right to work in the UK</span>
														<div class="" hidden="">
															<textarea placeholder="Are there conditions attached, please specify"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Are there conditions attached, please specify</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" name="consentPatient" id="consentPatient" class="ios-toggle">
															<label for="consentPatient" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="" hidden="">
															<textarea placeholder="Are there conditions attached, please specify"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Are you related or do you know anyone who works for {{company name?}}</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" name="consentPatient" id="companyName" class="ios-toggle">
															<label for="companyName" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="" hidden="">
															<input type="text" placeholder="Please Enter Name" />
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-4">
											<div class="form-group">
												<label>Please Enter Name</label>
												<input type="text">
											</div>
                                    	</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Criminal Record Declaration</h4>
                                    
                                    <div class="feedbackstaffmember note warning">
                                    	The nature of the work you are applying for is exempt from the provisions of the Rehabilitation of Offenders Act 1974.  If you are applying for a post involving access to persons in receipt of care services, your offer of employment will be subject to a satisfactory enhanced Disclosure and Barring Service check,  It is therefore a requirement that all previous convictions are declared, even those which would otherwise be regarded as ‘spent’.  (Any such information will be treated confidentially).
                                    </div>
                                    
                                    <h4>Please read the above carefully and then answer the following questions:</h4>
                                    
                                    <div class="row">
                                    	<div class="form-group">
											<div class="col-md-12">
												<label>Have you ever been convicted of a criminal offence?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="consentPatient" id="criminaloffence" class="ios-toggle">
													<label for="criminaloffence" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                   		</div>
                                   		<div class="form-group" hidden="">
                                   			<div class="col-md-12">
                                   				<textarea placeholder="Please provide details below"></textarea>
											</div>
                                   		</div>
                                   		<div class="form-group">
											<div class="col-md-12">
												<label>Have you ever received any official cautions, reprimands or warning?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="consentPatient" id="reprimandswarning" class="ios-toggle">
													<label for="reprimandswarning" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                   		</div>
                                   		<div class="form-group" hidden="">
                                   			<div class="col-md-12">
                                   				<textarea placeholder="Please provide details below"></textarea>
											</div>
                                   		</div>
                                   		<div class="form-group">
											<div class="col-md-12">
												<label>To your knowledge, are you currently the subject of any criminal proceedings or any police investigation?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="consentPatient" id="policeinvestigation" class="ios-toggle">
													<label for="policeinvestigation" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                   		</div>
                                   		<div class="form-group" hidden="">
                                   			<div class="col-md-12">
                                   				<textarea placeholder="Please provide details below"></textarea>
											</div>
                                   		</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Education <button class="addMultiple" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#educationplus"><img src="images/plus.svg" class="svg" /> Add</button></h4>
                                    
                                    <div class="form-group">
                                    	<div class="row">
                                    	
                                    		<div class="col-md-12">
                                    			<table class="table table-striped table-hover" align="center">
													<thead>
														<tr>
															<th>Date Started</th>
															<th>Date Finished</th>
															<th>Name of Institution</th>
															<th>Qualification Achieved</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>11/10/2013</td>
															<td>11/10/2017</td>
															<td>Lorem Ipsum</td>
															<td>Lorem Ipsum</td>
															<td><a href="#" class="canceled"><img src="images/garbage.svg" class="svg" /></a></td>
														</tr>
													</tbody>
												</table>
                                    		</div>
                                    	</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Employment History <button class="addMultiple" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Employmentplus"><img src="images/plus.svg" class="svg" /> Add</button></h4>
                                    
                                    <div class="form-group">
                                    	<div class="row">
                                    	
                                    		<div class="col-md-12">
                                    			<table class="table table-striped table-hover" align="center">
													<thead>
														<tr>
															<th>Employer’s name</th>
															<th>Start/End Date</th>
															<th>Address</th>
															<th>Postode</th>
															<th>Tel No</th>
															<th>Email</th>
															<th>Job Title</th>
															<th>Final pay/salary</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Lorem Ipsum</td>
															<td>11/10/2013</td>
															<td>Lorem Ipsum</td>
															<td>E14</td>
															<td>+123456789</td>
															<td>test@test.com</td>
															<td>Lorem Ipsum</td>
															<td>£5457</td>
															<td><a href="#" class="canceled"><img src="images/garbage.svg" class="svg" /></a></td>
														</tr>
													</tbody>
												</table>
                                    		</div>
                                    	</div>
                                    </div>
                                    
                                    
                                    <hr>
                                    <h4>Other relevant training <button class="addMultiple" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#educationtrainingplus"><img src="images/plus.svg" class="svg" /> Add</button></h4>
                                    
                                    <div class="form-group">
                                    	<div class="row">
                                    	
                                    		<div class="col-md-12">
                                    			<table class="table table-striped table-hover" align="center">
													<thead>
														<tr>
															<th>Date Started</th>
															<th>Date Finished</th>
															<th>Name of Institution</th>
															<th>Qualification Achieved</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>11/10/2013</td>
															<td>11/10/2017</td>
															<td>Lorem Ipsum</td>
															<td>Lorem Ipsum</td>
															<td><a href="#" class="canceled"><img src="images/garbage.svg" class="svg" /></a></td>
														</tr>
													</tbody>
												</table>
                                    		</div>
                                    	</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-12">
                                    		<div class="form-group">
                                                <label>Any details of membership of professional bodies</label>
                                                <textarea></textarea>
                                            </div>
                                    	</div>
                                    </div>
                                  	
                                 	<div class="feedbackstaffmember note warning">
                                 		IF THERE IS A GAP BETWEEN TWO DATE RANGES ENTERED. 14.05.2017 - 14.08.2017 and 14.12.2017 and 14.03.2018. Any gap further than 30 days the system should pick up and offer a warning message without
                                 	</div>
                                  				
                                  	<h4>References <button class="addMultiple" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Referencesplus"><img src="images/plus.svg" class="svg" /> Add</button></h4>
                                 			
                                 	<div class="form-group">
                                    	<div class="row">
                                    	
                                    		<div class="col-md-12">
                                    			<table class="table table-striped table-hover" align="center">
													<thead>
														<tr>
															<th>Name</th>
															<th>Address</th>
															<th>Landline</th>
															<th>Email</th>
															<th>Occupation/Relationship</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Lorem Ipsum</td>
															<td>Lorem Ipsum</td>
															<td>+123456789</td>
															<td>test@test.com</td>
															<td>Lorem Ipsum</td>
															<td><a href="#" class="canceled"><img src="images/garbage.svg" class="svg" /></a></td>
														</tr>
													</tbody>
												</table>
											</div>
                                 		</div>
                                 	</div>			
                                    
                                    <div class="row">
                                    	<div class="col-md-12">
                                    		<div class="form-group">
                                                <label>Please use this section to state how your skills, experience and training would enable you to meet the requirements of the role for which you are applying.  Please make reference to the person specification.</label>
                                                <textarea></textarea>
                                            </div>
                                    	</div>
                                    </div>
                                    
                                    <hr>
                                    <h4>Health</h4>
                                    
                                    <div class="row">
                                    	<div class="form-group">
											<div class="col-md-12">
												<label>Do you consider yourself to have any health conditions or disabilities which may be relevant to this job application?</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" name="consentPatient" id="healthconditions" class="ios-toggle">
															<label for="healthconditions" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="" hidden="">
															<input type="text" placeholder="Please give further details" />
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="form-group">
											<div class="col-md-12">
												<label>Have you had any treatment for any condition relating to the abuse or misuse of drugs or alcohol</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" name="consentPatient" id="drugsalcohol" class="ios-toggle">
															<label for="drugsalcohol" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="" hidden="">
															<input type="text" placeholder="Please give further details" />
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="form-group">
											<div class="col-md-12">
												<label>Have you ever suffered from back or neck injuries, or dermatitis?</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" name="consentPatient" id="neckinjuries" class="ios-toggle">
															<label for="neckinjuries" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="" hidden="">
															<input type="text" placeholder="Please give further details" />
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="form-group">
											<div class="col-md-12">
												<label>Have you had any problems regarding lifting or manual handling?</label>
												<div class="row">
													<div class="col-md-1">
														<span class="toggles fixed">
															<input type="checkbox" name="consentPatient" id="lifting" class="ios-toggle">
															<label for="lifting" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
													<div class="col-md-8">
														<div class="" hidden="">
															<input type="text" placeholder="Please give further details" />
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                  	
                                  	<div class="form-group">
										<div class="feedbackstaffmember note warning">
											The information in this form is true and complete.  I agree that any deliberate omissions, falsification or misrepresentation on this form will be grounds for rejecting this application or subsequent dismissal if employed by the organisation.  This equally applies to any medical questionnaires I may complete.
										</div>
                                  	</div>
                                  	<div class="form-group">
										<div class="feedbackstaffmember note warning">
											 I confirm that I have not been subject to any cautions or convictions (other than those given above), investigation, disciplinary action, or enquiry into adult/child protection matters or inappropriate behaviour, and that the information I have given in the Criminal Record section is to the best of my knowledge correct.
										</div>
									</div>
                                  
                                  	<div class="row">
                            			<div class="col-md-12">
                            				<div class="feedbackstaffmember">Please Hand Back the Device to a Staff Member</div>
										</div>
                            		</div>
                                   
                                   <hr>
                                   
                                   <div class="row">
                                   		<div class="col-sm-4">
                                   			<div class="form-group">
                                   				<label>Staff Name</label>
                                   				<input type="text" class="dottedLine">
                                   			</div>
                                   		</div>
                                   		<div class="col-sm-4">
                                   			<div class="form-group">
                                   				<label>Date</label>
                                   				<input type="text" class="dottedLine">
                                   			</div>
                                   		</div>
                                   		<div class="col-sm-4">
                                   			<div class="form-group">
                                   				<label>Signature</label>
                                   				<input type="text" class="dottedLine">
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
    
<div id="educationplus" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Education</h4>
			</div>
			<div class="modal-body">
				<form class="inBodyForm">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group date">
									<label>Date Started</label>
									<input type="text" name="dob">
									<img src="images/calendar-icon.svg" class="svg">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group date">
									<label>Date Finished</label>
									<input type="text" name="dob">
									<img src="images/calendar-icon.svg" class="svg">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Name of Institution</label>
									<input type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Qualification Achieved</label>
									<input type="text">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
    
<div id="educationtrainingplus" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Other relevant training</h4>
			</div>
			<div class="modal-body">
				<form class="inBodyForm">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group date">
									<label>Date Started</label>
									<input type="text" name="dob">
									<img src="images/calendar-icon.svg" class="svg">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group date">
									<label>Date Finished</label>
									<input type="text" name="dob">
									<img src="images/calendar-icon.svg" class="svg">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Name of Institution</label>
									<input type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Qualification Achieved</label>
									<input type="text">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
    
<div id="Employmentplus" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Other relevant training</h4>
			</div>
			<div class="modal-body">
				<form class="inBodyForm">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="form-group">
									<label>Employer’s name</label>
									<input type="text" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="form-group date">
									<label>Start/End Date</label>
									<input type="text" name="dateRange">
									<img src="images/calendar-icon.svg" class="svg">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<div class="form-group">
									<label>Address</label>
									<input type="text" />
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<div class="form-group">
									<label>Postode</label>
									<input type="text" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<div class="form-group">
									<label>Tel No</label>
									<input type="text" />
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<div class="form-group">
									<label>Email</label>
									<input type="text" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<div class="form-group">
									<label>Job Title</label>
									<input type="text" />
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<div class="form-group">
									<label>Final pay/salary</label>
									<input type="text" />
								</div>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<div class="form-group">
									<label>Brief description of duties and responsibilities</label>
									<textarea></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<div class="form-group">
									<label>Reason for Leaving:</label>
									<textarea></textarea>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
        
<div id="Referencesplus" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">References</h4>
			</div>
			<div class="modal-body">
				<form class="inBodyForm">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Name</label>
									<input type="text" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Address</label>
									<input type="text" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Landline</label>
									<input type="text" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Email</label>
									<input type="text" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Occupation/Relationship</label>
									<input type="text" />
								</div>
							</div>
						</div>
					</div>
					
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
		
		$('input[name="dob"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true
		}, 
		function(start, end, label) {
			var years = moment().diff(start, 'years');
		});
		
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
