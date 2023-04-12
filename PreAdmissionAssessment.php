<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
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
				<li><a href="#">Admin</a></li>
				<li><a href="#">Service User Initial Enquiry</a></li>
			</ul>
			<span class="title">Pre-Admission Assessment</span>
		</div>
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content specialHR">
				<div class="row">
					<div class="col-md-12">
						<div class="formSteps text-center hidden">
							<ul class="list-unstyled">
								<li class="active">
									<span>1</span><br>
									Medicine Details
								</li>
								<li>
									<span>2</span><br>
									Medication Details for service user
								</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4>Service User Details</h4>
								<form class="inBodyForm">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label>Title</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="Mr">Mr</option>
														<option>Mrs</option>
														<option value="">Doctor</option>
														<option value="">Professor</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Middle Name</label>
												<input type="text" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Known As</label>
												<input type="text" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group date">
												<label>Date Of Birth</label>
												<input type="text" name="dateRange">
												<img src="images/calendar-icon.svg" class="svg">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Gender</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="Mr">Male</option>
														<option>Female</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Age</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Marital Status</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="Mr">Married</option>
														<option>Unmarried</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										<div class="col-md-12">
											<h4>GP Details</h4>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>NHS No.</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Surgery Name</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Surgery Address</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Surgery Postcode</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>GP Name</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-12">
											<h4>Contact person Details</h4>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Title</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="Mr">Mr</option>
														<option>Mrs</option>
														<option value="">Doctor</option>
														<option value="">Professor</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Middle Name</label>
												<input type="text" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Relationship</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="son">Son</option>
														<option>Daughter</option>
														<option value="">Grand Son</option>
														<option value="">Grand Daughter</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>NOK</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>TELEPHONE</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>EMAIL ADDRESS</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>ADDRESS</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Postcode</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Funding</label>
												<input type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>House Owner?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Intensions to Sell Property <small>(Defered)</small></label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>DOLS in Place?</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="yes">Yes</option>
														<option>No</option>
														<option>Pending</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>DNAR in Place?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Safeguarding</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Power of Attorney</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="yes">Yes</option>
														<option>No</option>
														<option>Pending</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Applies To</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="yes">Yes</option>
														<option>No</option>
														<option>Pending</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Type</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option value="yes">Yes</option>
														<option>No</option>
														<option>Pending</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>
										
										<div class="col-md-12">
											<h4>Funding Details</h4>
										</div>

										<div class="col-md-12 text-center">
											<section class="fundingDetails">
												<span class="addMore"><img src="images/addMore.png" alt="Add"></span>
												<table class="table table-stripped" align="center" style="width: 450px !important;">
													<thead>
														<tr>
															<th width="80%">Type of Contributor</th>
															<th width="20%" style="text-align: right;">Fee Quote</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="select">
																	<select name="" id="">
																		<option value="LA">LA</option>
																	</select>
																	<img src="images/left-arrow.svg" class="svg">
																</div>
															</td>
															<td align="right"><input type="text" style="width: 100px; text-align: right;"></td>
															<td><span class="removeType"><img src="images/bin.svg" alt="Delete Record" class="svg"></span></td>
														</tr>
														<tr>
															<td>
																<div class="select">
																	<select name="" id="">
																		<option value="LA">LA</option>
																	</select>
																	<img src="images/left-arrow.svg" class="svg">
																</div>
															</td>
															<td align="right"><input type="text" style="width: 100px; text-align: right;"></td>
															<td><span class="removeType"><img src="images/bin.svg" alt="Delete Record" class="svg"></span></td>
														</tr>
													</tbody>
												</table>
												<article class="text-right"><strong>Total: &pound;750.00</strong></article>
											</section>
										</div>
										
										<div class="col-md-12">
											<h4>Medical Condition</h4>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Eyesight</label>
												<div class="select">
													<select>
														<option>Good</option>
														<option>Wear spectacles</option>
														<option>Able to read</option>
														<option>Can recognise objects across the room</option>
														<option>Visually impaired</option>
														<option>Requires supervision</option>
														<option>Registered Blind</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Applies To</label>
												<div class="select">
													<select>
														<option value="">Right Eye</option>
														<option value="">Left Eye</option>
														<option value="">Both Eyes</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Alzheimers/ Dementia?</label>
												<div class="select">
													<select>
														<option value="">Select</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Hearing</label>
												<div class="select">
													<select>
														<option value="">Select</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Applies To</label>
												<div class="select">
													<select>
														<option value="">Select</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Pacemaker?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Height(cm) <small>[optional]</small></label>
												<input type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Weight(kg) <small>[optional]</small></label>
												<input type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Catheter?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Diabetic?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Diabetes Type</label>
												<div class="select">
													<select>
														<option value="">Type I</option>
														<option value="">Type II</option>
														<option value="">Type II (Tablet Controlled)</option>
														<option value="">Type II (Diet Controlled)</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Stoma?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>UTI?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Previous Surgeries?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Epileptic?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-12">
											<h4>Allergies</h4>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Allergy From</label>
												<div class="select">
													<select>
														<option value="">Select</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Type of Allergen</label>
												<input type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Additional Comment</label>
												<input type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>&nbsp;</label>
												<button type="button" class="formButton plus">+</button>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Allergy From</label>
												<div class="select">
													<select>
														<option value="">Select</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Type of Allergen</label>
												<input type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Additional Comment</label>
												<input type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>&nbsp;</label>
												<button type="button" class="formButton remove"><img src="images/bin.svg" class="svg" alt="Remove"></button>
											</div>
										</div>

										<div class="col-md-12">
											<h4>Diagnosis</h4>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label>Diagnosis</label>
												<textarea name="" id=""></textarea>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Covert Medication</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Medication to be Crushed?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label>Current Medication</label>
												<textarea name="" id=""></textarea>
											</div>
										</div>

										<div class="col-md-12">
											<h4>Skin Integrity</h4>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Overall Skin Condition</label>
												<div class="select">
													<select>
														<option value="">Normal</option>		
														<option value="">Bruised</option>		
														<option value="">Fragile</option>		
														<option value="">Dry</option>		
														<option value="">Thin</option>		
														<option value="">Discoloured</option> 		
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Ulcers?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Rashes?</label>
												<span class="toggles fixed">
													<input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
													<label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Feet</label>
												<div class="select">
													<select>
														<option value="">Good</option>		
														<option value="">Poor</option>		
														<option value="">Requires regular foot care</option>		 		
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-12">
											<h4>Pressure Ulcers</h4>
										</div>

										<div class="col-md-12 text-center">
											<section class="bodyMap">
												<!--male start -->
												<!--male start -->
												<img src="https://jawa.care-vision.co.uk/images/bodyMap.png" class="map" usemap="#bodyMap">
												<map name="bodyMap">
													<area position="lla1" data="Left Lumbar Area 1" shape="rect" coords="435,228,471,265" href="#">
													<area position="lla2" data="Left Lumbar Area 2" shape="rect" coords="435,264,471,301" href="#">
													<area position="lla3" data="Left Lumbar Area 3" shape="rect" coords="435,300,471,336" href="#">
													<area position="rsc1" data="Right Scapula 1" shape="rect" coords="501,137,541,178" href="#">
													<area position="rsc2" data="Right Scapula 2" shape="rect" coords="501,177,541,218" href="#">
													<area position="sa" data="Sacral Area" shape="rect" coords="478,303,498,344" href="#">
													<area position="lva" data="Lumbar Vertebrae Area" shape="rect" coords="478,261,498,302" href="#">
													<area position="dta2" data="Dorsal Thoracic Area 2" shape="rect" coords="478,219,498,260" href="#">
													<area position="dta" data="Dorsal Thoracic Area 1" shape="rect" coords="478,177,498,218" href="#">
													<area position="lia" data="Left Inguinal Area" shape="rect" coords="178,343,204,368" href="#">
													<area position="ria" data="Right Inguinal Area" shape="rect" coords="73,345,99,368" href="#">
													<area position="le" data="Left Eye" shape="rect" coords="142,53,168,72" href="#">
													<area position="re" data="Right Eye" shape="rect" coords="110,52,136,71" href="#">
													<area position="nose" data="Nose" shape="rect" coords="129,70,149,85" href="#">
													<area position="lips" data="Lips" shape="rect" coords="125,86,152,98" href="#">
													<area position="mandible" data="Mandible" shape="rect" coords="125,100,151,116" href="#">
													<area position="lc" data="Left Clavicle" shape="poly" coords="158,134,153,147,186,147,191,135" href="#">
													<area position="ls" data="Left Shoulder" shape="poly" coords="199,138,214,142,226,149,234,160,238,171,213,168" href="#">
													<area position="ana" data="Anterior Neck Area" shape="poly" coords="123,126,154,126,147,147,129,148" href="#">
													<area position="lap" data="Left Armpit" shape="poly" coords="209,196,206,230,197,228,201,197" href="#">
													<area position="rap" data="Right Armpit" shape="poly" coords="69,197,70,222,79,225,76,196" href="#">
													<area position="rs" data="Right Shoulder" shape="poly" coords="77,137,65,140,52,148,46,153,40,164,41,173,51,173,60,172,65,165" href="#">
													<area position="rc" data="Right Clavicle" shape="poly" coords="118,138,122,148,86,146,83,136" href="#">
													<area position="scrotum" data="Scrotum / Penis" shape="poly" coords="115,386,131,425,147,427,159,386" href="#">
													<area position="lw" data="Left Wrist" shape="poly" coords="235,377,258,378,257,389,235,390" href="#">
													<area position="rw" data="Right Wrist" shape="poly" coords="40,370,17,370,16,383,38,383" href="#">
													<area position="lank" data="Left Ankle" shape="poly" coords="153,723,179,724,180,747,145,745" href="#">
													<area position="rank" data="Right Ankle" shape="poly" coords="125,722,130,747,95,751,96,723" href="#">
													<area position="rpof" data="Right Foot" shape="poly" coords="93,760,130,764,128,783,84,787" href="#">
													<area position="lpof" data="Left Foot" shape="poly" coords="146,767,182,759,195,781,152,786" href="#">
													<area position="lsc1" data="Left Scapula 1" shape="rect" coords="436,137,476,178" href="#">
													<area position="lsc2" data="Left Scapula 2" shape="rect" coords="436,177,476,218" href="#">
													<area position="pna" data="Posterior neck Area" shape="poly" coords="462,109,509,110,512,128,464,130" href="#">
													<area position="cva" data="Cervical Vertebrae Area" shape="rect" coords="478,135,498,176" href="#">
													<area position="lpsa" data="Left Posterior Shoulder Area" shape="poly" coords="433,141,401,149,387,168,387,192,407,188,432,190" href="#">
													<area position="rla1" data="Right Lumbar Area 1" shape="rect" coords="506,228,542,265" href="#">
													<area position="rla2" data="Right Lumbar Area 2" shape="rect" coords="506,264,542,301" href="#">
													<area position="rla3" data="Right Lumbar Area 3" shape="rect" coords="506,300,542,337" href="#">
													<area position="rpsa" data="Right Posterior Shoulder Area" shape="poly" coords="543,139,565,145,580,157,588,182,561,194,543,189" href="#">
													<area position="lra" data="Left Rear Arm" shape="poly" coords="382,216,408,220,416,260,410,274,373,269,373,242" href="#">
													<area position="rra" data="Right Rear Arm" shape="poly" coords="592,215,601,244,603,274,563,275,560,240,565,220" href="#">
													<area position="reb" data="Right Elbow" shape="poly" coords="602,281,565,284,568,312,610,310" href="#">
													<area position="leb" data="Left Elbow" shape="poly" coords="373,281,411,283,406,314,366,310" href="#">
													<area position="rrfa" data="Right Rear Forearm" shape="poly" coords="572,321,609,320,608,370,586,373" href="#">
													<area position="lrfa" data="Left Rear Forearm" shape="poly" coords="364,316,402,325,391,363,367,365" href="#">
													<area position="rb1" data="Right Buttocks 1" shape="poly" coords="488,356,520,353,524,389,489,392" href="#">
													<area position="rb2" data="Right Buttocks 2" shape="poly" coords="488,392,524,389,524,421,489,423" href="#">
													<area position="rb3" data="Right Buttocks 3" shape="poly" coords="524,390,560,385,562,419,525,421" href="#">
													<area position="rb4" data="Right Buttocks 4" shape="poly" coords="521,353,553,350,559,387,524,390" href="#">
													<area position="lboh" data="Left back of Hand" shape="poly" coords="232,399,263,402,262,424,250,442,240,418,234,434" href="#">
													<area position="rboh" data="Right Back of Hand" shape="poly" coords="16,396,42,396,45,436,35,414,32,448,14,428" href="#">
													<area position="lpoh" data="Left Palm" shape="poly" coords="368,389,389,390,392,433,379,411,381,446,363,420" href="#">
													<area position="rpoh" data="Right Palm" shape="poly" coords="586,391,607,393,614,419,603,445,595,445,591,416,583,436" href="#">
													<area position="rreart1" data="Right Rear Thigh 1" shape="poly" coords="496,447,498,482,559,482,564,439" href="#">
													<area position="rreart2" data="Right Rear Thigh 2" shape="poly" coords="497,484,497,515,551,524,558,483" href="#">
													<area position="rpopa" data="Right Popliteal Area" shape="poly" coords="497,541,546,546,548,583,501,579" href="#">
													<area position="rcalf1" data="Right Calf 1" shape="poly" coords="498,600,496,617,496,633,548,638,550,628,550,608,549,596" href="#">
													<area position="rcalf2" data="Right Calf 2" shape="poly" coords="496,634,494,651,497,676,538,679,541,661,543,652,546,639" href="#">
													<area position="rcalf3" data="Right Calf 3" shape="poly" coords="497,675,498,692,501,717,531,713,531,703,534,694,538,679" href="#">
													<area position="lcalf1" data="Left Calf 1" shape="poly" coords="425,595,479,603,478,634,425,633,424,622,425,606" href="#">
													<area position="lcalf2" data="Left Calf 2" shape="poly" coords="426,633,479,634,476,672,438,674,434,658,426,644" href="#">
													<area position="lcalf3" data="Left Calf 3" shape="poly" coords="438,675,476,672,474,716,445,718,443,703,438,686" href="#">
													<area position="lfof" data="Left Toes" shape="poly" coords="323,582,323,568,324,558,328,549,338,545,347,548,352,561,352,579,359,553,361,547,373,552,390,571,400,584,403,600,325,596" href="#">
													<area position="rfof" data="Right Toes" shape="poly" coords="300,594,300,581,301,562,293,547,282,541,276,556,274,579,271,565,265,547,248,560,221,593" href="#">
													<area position="lpopa" data="Left Popliteal Area" shape="rect" coords="427,549,476,581" href="#">
													<area position="rk" data="Right Knee" shape="poly" coords="75,535,79,552,81,571,129,592,126,582,128,551" href="#">
													<area position="lk" data="Left Knee" shape="poly" coords="149,552,197,547,196,564,196,577,148,592,149,575" href="#">
													<area position="rheel" data="Right Heel" shape="poly" coords="237,742,251,767,279,768,291,742" href="#">
													<area position="lheel" data="Left Heel" shape="poly" coords="335,746,346,769,374,768,387,748" href="#">
													<area position="lreart1" data="Left Rear Thigh1" shape="poly" coords="413,446,478,446,477,484,415,481" href="#">
													<area position="lreart2" data="Left Rear Thigh2" shape="poly" coords="418,485,475,486,474,514,424,524" href="#">
													<area position="lb1" data="Left Buttocks 1" shape="poly" coords="422,353,454,352,454,392,413,393" href="#">
													<area position="lb2" data="Left Buttocks 2" shape="poly" coords="413,393,453,392,455,427,412,430" href="#">
													<area position="lb3" data="Left Buttocks 3" shape="poly" coords="454,392,487,388,486,423,455,427" href="#">
													<area position="lb4" data="Left Buttocks 4" shape="poly" coords="454,352,483,354,487,388,454,392" href="#">
													<area position="ref" data="Right Ear" shape="poly" coords="112,90,105,62,96,67,105,90" href="#">
													<area position="lef" data="Left Ear" shape="poly" coords="172,63,179,73,167,91" href="#">
													<area position="rearb" data="Right Ear" shape="poly" coords="523,65,528,74,516,89" href="#">
													<area position="learb" data="Left Ear" shape="poly" coords="451,81,449,64,460,87" href="#">
													<area position="rboheel" data="Right Back of Heel" shape="poly" coords="496,752,495,765,498,788,514,789,527,787,548,788,539,772,530,751" href="#">
													<area position="lboheel" data="Left Back of Heel" shape="poly" coords="443,754,479,754,480,775,473,789,458,789,444,787,430,787,436,770" href="#">
													<area position="apex1" data="Apex 1" shape="poly" coords="109,18,114,32,137,34,136,11" href="#">
													<area position="apex2" data="Apex 2" shape="poly" coords="136,13,137,34,165,31,161,15" href="#">
													<area position="fh1" data="Forehead" shape="poly" coords="110,32,109,51,140,51,138,39" href="#">
													<area position="fh2" data="Forehead" shape="poly" coords="140,39,142,51,168,51,166,33" href="#">
													<area position="rct1" data="Right Chest 1" shape="poly" coords="140,189,140,221,82,221,80,196" href="#">
													<area position="rct2" data="Right Chest 2" shape="poly" coords="78,170,80,196,140,189,141,163" href="#">
													<area position="lct1" data="Left Chest 1" shape="poly" coords="141,189,200,191,194,221,141,221" href="#">
													<area position="lct2" data="Left Chest 2" shape="poly" coords="142,163,141,188,200,190,203,164" href="#">
													<area position="ra1" data="Right Arm 1" shape="poly" coords="31,222,29,229,23,253,62,266,68,233" href="#">
													<area position="ra2" data="Right Arm 2" shape="poly" coords="39,184,36,214,32,222,68,232,69,209,68,183" href="#">
													<area position="la1" data="Left Arm" shape="poly" coords="211,177,211,207,243,212,238,181" href="#">
													<area position="la2" data="Left Arm 1" shape="poly" coords="211,208,213,257,253,256,243,212" href="#">
													<area position="rfa1" data="Right Forearm 1" shape="poly" coords="23,288,16,313,16,323,53,324,52,329,59,291" href="#">
													<area position="rfa2" data="Right Forearm 2" shape="poly" coords="16,323,19,353,40,355,53,324" href="#">
													<area position="lfa1" data="Left Forearm 1" shape="poly" coords="221,324,235,357,259,357,259,337,262,323" href="#">
													<area position="lfa2" data="Left Forearm 2" shape="poly" coords="217,295,222,324,261,323,257,307,253,291" href="#">
													<area position="rhc1" data="Right hypochondrium 1" shape="rect" coords="72,260,98,291" href="#">
													<area position="rhc2" data="Right hypochondrium 2" shape="rect" coords="72,232,98,261" href="#">
													<area position="lhc1" data="Left hypochondrium 1" shape="rect" coords="177,261,203,291" href="#">
													<area position="lhc2" data="Left hypochondrium 2" shape="rect" coords="177,232,203,262" href="#">
													<area position="eg1" data="Epigastrium 1" shape="rect" coords="136,260,169,290" href="#">
													<area position="eg2" data="Epigastrium 2" shape="rect" coords="106,260,137,290" href="#">
													<area position="eg3" data="Epigastrium 3" shape="rect" coords="136,231,169,261" href="#">
													<area position="eg4" data="Epigastrium 4" shape="rect" coords="106,231,137,261" href="#">
													<area position="rv1" data="Right Vacio 1" shape="rect" coords="72,292,98,317" href="#">
													<area position="rv2" data="Right Vacio 2" shape="rect" coords="72,316,98,341" href="#">
													<area position="ur1" data="Umbilical Region 1" shape="rect" coords="137,316,169,340" href="#">
													<area position="ur2" data="Umbilical Region 2" shape="rect" coords="106,317,137,340" href="#">
													<area position="ur3" data="Umbilical Region 3" shape="rect" coords="137,293,169,317" href="#">
													<area position="ur4" data="Umbilical Region 4" shape="rect" coords="106,293,138,318" href="#">
													<area position="lv1" data="Left Vacio 1" shape="rect" coords="177,316,203,340" href="#">
													<area position="lv2" data="Left Vacio 2" shape="rect" coords="177,293,203,317" href="#">
													<area position="rit1" data="Right Inner Thigh 1" shape="poly" coords="128,424,64,418,62,413,61,406,65,378,108,379,122,416" href="#">
													<area position="lit2" data="Left Inner Thigh 2" shape="poly" coords="142,432,144,454,212,461,213,430" href="#">
													<area position="lit3" data="Left Inner Thigh 3" shape="poly" coords="146,458,149,491,212,491,211,464" href="#">
													<area position="lit4" data="Left Inner Thigh 4" shape="poly" coords="149,494,149,527,199,526,209,493" href="#">
													<area position="lit1" data="Left Inner Thigh 1" shape="poly" coords="210,380,212,399,213,424,213,431,150,430,156,411,163,378" href="#">
													<area position="rit2" data="Right Inner Thigh 2" shape="poly" coords="62,421,65,455,130,452,130,428" href="#">
													<area position="rit3" data="Right Inner Thigh 3" shape="poly" coords="62,457,65,494,130,489,132,457" href="#">
													<area position="rit4" data="Right Inner Thigh 4" shape="poly" coords="67,494,77,527,126,528,127,494" href="#">
													<area position="lab1" data="Lower Abdomen 1" shape="rect" coords="139,343,170,367" href="#">
													<area position="lab2" data="Lower Abdomen 2" shape="rect" coords="107,343,140,367" href="#">
													<area position="rfol" data="Right Shin 1" shape="poly" coords="129,602,76,584,74,601,75,618,74,622,129,632,131,620" href="#">
													<area position="rfo2" data="Right Shin 2" shape="poly" coords="128,632,75,622,77,637,81,650,84,659,128,661,129,649" href="#">
													<area position="rfo3" data="Right Shin 3" shape="poly" coords="128,662,85,659,87,669,89,678,90,687,125,688,127,676" href="#">
													<area position="rfo4" data="Right Shin 4" shape="poly" coords="126,689,93,688,93,697,94,707,97,720,125,719,123,704" href="#">
													<area position="lfol1" data="Left Shin 1" shape="poly" coords="148,597,145,610,146,621,147,628,198,628,201,611,200,600,199,586" href="#">
													<area position="lfol2" data="Left Shin 2" shape="poly" coords="147,632,145,641,146,650,146,659,191,660,193,649,196,645,198,631" href="#">
													<area position="lfol3" data="Left Shin 3" shape="poly" coords="148,659,148,668,149,679,151,688,184,687,187,675,189,668,192,661" href="#">
													<area position="lfol4" data="Left Shin 4" shape="poly" coords="151,688,151,697,152,707,152,719,181,718,181,704,182,696,183,688" href="#">
													<area position="rsof1" data="Right Sole of Foot 1" shape="rect" coords="224,605,262,648" href="#">
													<area position="rsof2" data="Right Sole of Foot 2" shape="rect" coords="224,647,262,690" href="#">
													<area position="rsof3" data="Right Sole of Foot 3" shape="rect" coords="261,647,299,690" href="#">
													<area position="rsof4" data="Right Sole of Foot 4" shape="rect" coords="261,605,299,648" href="#">
													<area position="lsof1" data="Left Sole of Foot 1" shape="rect" coords="328,605,366,648" href="#">
													<area position="lsof2" data="Left Sole of Foot 2" shape="rect" coords="328,647,366,690" href="#">
													<area position="lsof3" data="Left Sole of Foot 3" shape="rect" coords="365,647,403,690" href="#">
													<area position="lsof4" data="Left Sole of Foot 4" shape="rect" coords="365,605,403,648" href="#">
													<area position="boh1" data="Back of Head 1" shape="poly" coords="460,17,475,15,486,14,486,41,451,43" href="#">
													<area position="boh2" data="Back of Head 2" shape="poly" coords="486,14,509,15,518,26,522,41,487,40" href="#">
													<area position="oa1" data="Occipital Area 1" shape="poly" coords="452,47,485,47,485,68,457,68" href="#">
													<area position="oa2" data="Occipital Area 2" shape="poly" coords="458,68,485,68,485,89,462,89" href="#">
													<area position="oa3" data="Occipital Area 3" shape="poly" coords="485,68,517,67,512,88,484,89" href="#">
													<area position="oa4" data="Occipital Area 4" shape="poly" coords="485,47,521,46,518,67,484,68" href="#">
													<area position="chl" data="Left Cheek" shape="poly" coords="153,78,153,111,166,95,166,78" href="#">
													<area position="chr" data="Right Cheek" shape="poly" coords="113,79,115,101,122,107,122,79" href="#">
												</map>
												<!--male end -->
												<!--male end -->
												<p>&nbsp;</p>
												<canvas width="626" height="802" style="position: absolute; top: 0px; left: 0px; pointer-events: none;"></canvas>
											</section>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Location</label>
												<input type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Grade of Pressure Sore</label>
												<div class="select">
													<select>
														<option value="">Select</option>	
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
											</div>
											<div class="form-group" hidden="">
												<input value="Lorem Ipsum" type="text">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Wound Image</label>
												<label class="file">Upload<input type="file" class="hidden"></label>
											</div>
										</div>

										<div class="col-md-9">
											<div class="form-group">
												<div class="row">
													<div class="col-md-4">
														<label>Length<small>(mm)</small></label>
														<div class="counter">
															<button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
															<button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
															<input type="text" maxlength="3" value="0">
														</div>
													</div>
													<div class="col-md-4">
														<label>Width<small>(mm)</small></label>
														<div class="counter">
															<button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
															<button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
															<input type="text" maxlength="3" value="0">
														</div>
													</div>
													<div class="col-md-4">
														<label>Depth<small>(mm)</small></label>
														<div class="counter">
															<button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
															<button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
															<input type="text" maxlength="3" value="0">
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group date">
												<label>Report Date</label>
												<input type="text" name="dateRange">
												<img src="images/calendar-icon.svg" class="svg">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group date">
												<label>Pressure Sore Treated by</label>
												<input type="text" name="dateRange">
												<img src="images/calendar-icon.svg" class="svg">
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


	<div id="PersonResponsible" class="modal fade" role="dialog">
		<div class="modal-dialog routaPop">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Person/Authority Responsible for Payment</h4>
				</div>
				<div class="modal-body">
					<form class="inBodyForm">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name of Authority (optional)</label>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>TELEPHONE</label>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>EMAIL ADDRESS</label>
									<input type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>ADDRESS</label>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>POSTAL ADDRESS</label>
									<input type="text">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
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
		$('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY'));
		});

		$('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
			$(this).val('');
		});
	</script>
</body>

</html>