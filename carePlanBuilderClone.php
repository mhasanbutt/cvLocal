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
				<li><a href="#">Care</a>
				</li>
				<li><a href="#">Assessments</a>
				</li>
			</ul>
			<span class="title">Pre-Admission Assessment and </span>
		</div>
		<div class="ProfileInfo">
			<img src="images/temp-picture.jpg" class="picture">
			<span class="profileImg"><img src="images/photo-camera.svg" class="svg"></span>
			<ul class="list-unstyled">
				<li>
					<span>Service User Name</span><br> Terrance Edwards
				</li>
				<li>
					<span>Date of Birth</span><br> 05-04-1974
				</li>
				<li>
					<span>Client No.</span><br> 5921583
				</li>
				<li>
					<span>Location</span><br> Oxford St.
				</li>
			</ul>
		</div>
	</section>

	<section class="contentBody">

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
			</div>
			<div class="carePlanBuilderWrapper">
				<div class="carePlanBuilderWrapperLeft">
					<div class="scrollArea">
						<span class="cPBuilderCount cPBCount">Taking Care of Myself</span>
						<div class="cPBuilderButton">
							<a href="#" class="btn orange"><img src="images/review.svg" class="svg"> Conduct Review</a>
							<a href="#" class="btn"><img src="images/printing-tool.svg" class="svg"> Print</a>
						</div>

						<article class="careBuilder CareRoutinesbox">
							<span class="group">Personal Care</span>
							<div>
								<h4>Identified Need</h4>
								<div class="title">What is the level of independence for Martin? (<small>Single Choice)</small>)</div>
								<div class="careBuildersection">
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox">
												<input value="Martin is independent with personal care." type="radio" name="id1" id="id1">
												<label for="id1">Martin is independent with personal care.RISK ASSESSMENTs <span><img src="images/interaction_icon__repairs.png"></span></label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox">
												<input type="radio" value="Martin is independent with personal care, but requires assistance at times." name="id1" id="id2">
												<label for="id2">Martin is independent with personal care, but requires assistance at times. <span><img src="images/interaction_icon_continence.png"></span></label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox">
												<input type="radio" name="id1" id="id3" value="Martin requires more assistance at certain times.">
												<label for="id3">Martin requires more assistance at certain times. <span><img src="images/interaction_icon_utiNew.png"></span></label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox">
												<input type="radio" name="id1" id="id4" value="Martin always requires assistance with personal care.">
												<label for="id4">Martin always requires assistance with personal care. <span><img src="images/interaction_icon_catheter_output.png"></span></label>
											</div>
										</li>
									</ul>
								</div>
								<div class="editText disabled">
									<button><img src="images/pencil.svg" class="svg"></button>
									<textarea class="disabled" disabled>Martin is independent with personal care.</textarea>
								</div>
							</div>


							<div class="CareRoutinescolapsBtn">
								<span><img src="images/left-arrow.svg" class="svg"></span>
							</div>
						</article>

						<hr class="BoldHr" />

						<div class="CareRoutinesboxRAS">
							<span class="group RAssess">RISK ASSESSMENTs <img src="images/left-arrow.svg" class="svg"></span>

							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses1">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Self Neglect</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses2">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Risk of flooding own room</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses3">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Custom</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<div class="inBodyForm clearfix">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group riskAssSel riskAssSel1">
											<div class="select">
												<select>
													<option value="0">Select Risk Assessments</option>
													<option value="1">Self-Neglect</option>
													<option value="2">Risk of flooding own room</option>
													<option value="3">Custom</option>
												</select>
												<img src="images/left-arrow.svg" class="svg">
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

						<hr class="BoldHr" />

						<div class="CareRoutinesboxRAS">
							<span class="group RAssess">SCORED ASSESSMENTS <img src="images/left-arrow.svg" class="svg"></span>

							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses4">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Self Neglect</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses5">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Risk of flooding own room</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses6">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Custom</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<div class="inBodyForm clearfix">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group riskAssSel riskAssSel2">
											<div class="select">
												<select>
													<option value="0">Select Risk Assessments</option>
													<option value="4">Self-Neglect</option>
													<option value="5">Risk of flooding own room</option>
													<option value="5">Custom</option>
												</select>
												<img src="images/left-arrow.svg" class="svg">
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

						<hr class="BoldHr" />

						<article class="careBuilder CareRoutinesbox CareRoutinesboxRAS">
							<span class="group RAssess">MENTAL CAPACITY ASSESSMENT <img src="images/left-arrow.svg" class="svg"></span>

							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses7">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Self Neglect</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses8">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Risk of flooding own room</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<article class="careBuilder CareRoutinesbox CareRoutinesboxAsses CareRoutinesboxAsses9">
								<img src="images/close.svg" class="svg CareRoutinesboxAssesDel">
								<span class="group"><img src="images/left-arrow.svg" class="svg"> Custom</span>
								<div class="riskAssessmentToggle">
									<h4>Sex </h4>
									<ul class="list-unstyled">
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Male " id="question_438_1" type="radio" points="1" data-assessmentid="12">
												<label for="question_438_1">Male </label>
											</div>
										</li>
										<li>
											<div class="assessmentCheckBox assessmentParentDiv">
												<input name="assessmentQuestion[12][170]" value="Female" id="question_439_1" type="radio" points="2" data-assessmentid="12">
												<label for="question_439_1">Female</label>
											</div>
										</li>
									</ul>
									<input type="hidden" value="1" class="article_question_required" name="article_question_required">
									<span class="questionMca">Duis laoreet, dolor in pretium bibendum, quam lorem porttitor orci</span>
									<table class="table table-stiped" align="center">
										<thead>
											<tr>
												<th></th>
												<th align="center">Name</th>
												<th align="center">Signature</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Doctors</td>
												<td><input type="text">
												</td>
												<td><textarea></textarea>
												</td>
											</tr>
											<tr>
												<td>Nurse</td>
												<td><input type="text">
												</td>
												<td><input type="text">
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</article>
							<div class="inBodyForm clearfix">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group riskAssSel riskAssSel3">
											<div class="select">
												<select>
													<option value="0">Select Risk Assessments</option>
													<option value="7">Self-Neglect</option>
													<option value="8">Risk of flooding own room</option>
													<option value="9">Custom</option>
												</select>
												<img src="images/left-arrow.svg" class="svg">
											</div>
										</div>

									</div>
								</div>
							</div>
						</article>

						<div class="inBodyForm clearfix">
							<div class="row">
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<div class="col-md-6">
									<div class="form-group date">
										<label>Review Date</label>
										<input type="text" value="11/08/2017" name="dateRange">
										<img src="images/calendar-icon.svg" class="svg">
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

				<div class="carePlanBuilderWrapperRight">
					<div class="careBuilderPreviewRout">
						<div class="scrollArea">
							<span class="cPBuilderCount cPBCount">Care Routines</span>

							<aside class="toDoForm CareRoutines">
								<div class="level one">
									<div class="scrollArea">
										<ul class="list-unstyled">
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/interaction_icon_events.png"></span>
															<span class="moduleName">Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/toothbrush.svg" class="svg"></span>
															<span class="moduleName">Oral Hygiene</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/hair.svg" class="svg"></span>
															<span class="moduleName">Skin Condition</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/shirt.svg" class="svg"></span>
															<span class="moduleName">Dressing</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/blood-donation.svg" class="svg"></span>
															<span class="moduleName">Personal Care</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/bath.svg" class="svg"></span>
															<span class="moduleName">Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/toothbrush.svg" class="svg"></span>
															<span class="moduleName">Oral Hygiene</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/hair.svg" class="svg"></span>
															<span class="moduleName">Skin Condition</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/shirt.svg" class="svg"></span>
															<span class="moduleName">Dressing</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/blood-donation.svg" class="svg"></span>
															<span class="moduleName">Personal Care</span>
														</a>



											</li>
										</ul>
									</div>
								</div>
								<div class="level two">
									<div class="scrollArea">
										<ul class="list-unstyled">
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/interaction_icon_events.png"></span>
															<span class="moduleName">Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/interaction_icon_vitals.png"></span>
															<span class="moduleName">Shower</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/bath-sponge.svg" class="svg"></span>
															<span class="moduleName">Strip Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/sink.svg" class="svg"></span>
															<span class="moduleName">Face Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/liquid-soap.svg" class="svg"></span>
															<span class="moduleName">Hand Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/bath.svg" class="svg"></span>
															<span class="moduleName">Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/shower.svg" class="svg"></span>

															<span class="moduleName">Shower</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/bath-sponge.svg" class="svg"></span>
															<span class="moduleName">Strip Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/sink.svg" class="svg"></span>
															<span class="moduleName">Face Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/liquid-soap.svg" class="svg"></span>
															<span class="moduleName">Hand Wash</span>
														</a>



											</li>
										</ul>
									</div>
								</div>
								<div class="level three">
									<div class="scrollArea">
										<ul class="list-unstyled">
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/interaction_icon_vitals.png"></span>
															<span class="moduleName">Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/shower.svg" class="svg"></span>
															<span class="moduleName">Shower</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/bath-sponge.svg" class="svg"></span>
															<span class="moduleName">Strip Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/sink.svg" class="svg"></span>
															<span class="moduleName">Face Wash</span>
														</a>



											</li>
											<li>
												<a href="javascript:void(0)">
															<span class="icon"><img src="images/liquid-soap.svg" class="svg"></span>
															<span class="moduleName">Hand Wash</span>
														</a>



											</li>
										</ul>
									</div>
								</div>

								<span class="cPBuilderCount cPBCount">Suggested Care Routines</span>
								<div class="selectedCareRou">
									<div class="selectedCareRouIcon checkedSCR">
										<img src="images/close.svg" class="svg DelCareRouIcon" id="DelCareRouIcon">
										<input type="radio" name="Rsum" id="Rsum1"/>
										<label for="Rsum1">
											<span><img src="images/interaction_icon__repairs.png"></span>
										</label>
									</div>
									<div class="selectedCareRouIcon">
										<input type="radio" name="Rsum" id="Rsum2"/>
										<label for="Rsum2">
											<img src="images/toilet.svg" class="svg">
											<img src="images/close.svg" class="svg DelCareRouIcon" id="DelCareRouIcon">
										</label>
									</div>
									<div class="selectedCareRouIcon">
										<input type="radio" name="Rsum" id="Rsum3"/>
										<label for="Rsum3">
													<img src="images/gel.svg" class="svg">
													<img src="images/close.svg" class="svg DelCareRouIcon" id="DelCareRouIcon">
												</label>



									</div>
									<div class="selectedCareRouIcon">
										<input type="radio" name="Rsum" id="Rsum4"/>
										<label for="Rsum4">
													<img src="images/soap.svg" class="svg">
													<img src="images/close.svg" class="svg DelCareRouIcon" id="DelCareRouIcon">
												</label>



									</div>
								</div>

								<form class="inBodyForm clearfix CareRoutinesForm">
									<h4> <span class="icon"><img src="images/interaction_icon__repairs.png"></span> Create Care Routines</h4>
									<section>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Area</label>
													<div class="select">
														<select>
															<option>Home</option>
															<option>Floor</option>
															<option>Room</option>
														</select>
														<img src="images/left-arrow.svg" class="svg">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group date">
													<label>Start Date</label>
													<input type="text" name="startDate">
													<img src="images/calendar-icon.svg" class="svg">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group date">
													<label>Select Time</label>
													<input type="text" name="startDate">
													<img src="images/clock-with-white-face.svg" class="svg">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Duration</label>
													<div class="select">
														<select>
															<option>5 min</option>
															<option>10 min</option>
															<option>15 min</option>
														</select>
														<img src="images/left-arrow.svg" class="svg">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Frequency</label>
													<div class="select">
														<select>
															<option value="" selected="selected">No Frequency</option>
															<option value="Every 30 Minutes">Every 30 Minutes</option>
															<option value="Every Hour">Every Hour</option>
															<option value="Every 2 Hours">Every 2 Hours</option>
															<option value="Every 3 Hours">Every 3 Hours</option>
															<option value="Every 4 Hours">Every 4 Hours</option>
															<option value="Every 5 Hours">Every 5 Hours</option>
															<option value="Every 6 Hours">Every 6 Hours</option>
															<option value="Every Day">Every Day</option>
															<option value="Every Week">Every Week</option>
															<option value="Every Month">Every Month</option>
															<option value="Every Year">Every Year</option>
														</select>
														<img src="images/left-arrow.svg" class="svg">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group date">
													<label>For How Long?</label>
													<input type="text" name="startDate">
													<img src="images/calendar-icon.svg" class="svg">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Staff Required</label>
													<div class="select">
														<select>
															<option>Not Required</option>
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
														</select>
														<img src="images/left-arrow.svg" class="svg">
													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label>Created By</label>
													<span class="formInfo">Carer</span>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Alert</label>
													<span class="toggles fixed">
														<input type="checkbox" name="alert" id="alert" class="ios-toggle">
														<label for="alert" class="checkbox-label" data-off="NO" data-on="YES"></label>
													</span>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Task</label>
													<textarea></textarea>
												</div>
											</div>
										</div>
										<button class="formButton">Save</button>
										<button class="formButton cancle">Cancle</button>
									</section>
								</form>
							</aside>

							<div class="CareRoutinesHistory">
								<hr>
								<span class="cPBuilderCount">Care Routine Summary</span>
								<div class="table-responsive">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th></th>
												<th>Frequency</th>
												<th>aLERT</th>
												<th>Active</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="center">
													<a href="#" class="view"><img src="images/interaction_icon__repairs.png"></a>
												</td>
												<td>Neque porro quisquam est qui dolorem dolor sit amet,</td>
												<td>Yes</td>
												<td>
													<span class="toggles fixed">
														<input type="checkbox" name="alert" id="active" class="ios-toggle" checked>
														<label for="active" class="checkbox-label" data-off="NO" data-on="YES"></label>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
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
				<button type="button">Back</button>
				<button type="button" class="completed">Save as Draft</button>
				<button type="button" class="save">Save & Publish</button>
			</div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/ion.rangeSlider.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$( document ).ready( function () {
			var height = $( '.contentBody' ).height();
			$( '.careBuilderPreview' ).height( height - 111 );

			$( '.scrollArea' ).scrollbar( {
				"onScroll": function ( y, x ) {
					if ( y.scroll > 0 ) {
						$( '.careBuilderPreview' ).addClass( 'fixed' );
						$( '.careBuilderPreview' ).css( 'top', y.scroll );
					} else {
						$( '.careBuilderPreview' ).removeClass( 'fixed' );
						$( '.careBuilderPreview' ).css( 'top', 0 );
					}
				}
			} );
			$( '.scrollAreaChild' ).scrollbar();
		} );

		$( '#preview' ).click( function () {
			$( '.toDoPop' ).addClass( 'active' );
		} );

		$( '#close' ).click( function () {
			$( '.toDoPop' ).removeClass( 'active' );
		} );

		$( '.one a' ).click( function () {
			$( '.one a' ).removeClass( 'focus' );
			$( this ).addClass( 'focus' );
			$( '.two' ).addClass( 'show' );
			$( '.three' ).removeClass( 'show' );
			$( '.two a' ).removeClass( 'focus' );
			$( '.three a' ).removeClass( 'focus' );
			//$('.inBodyForm').fadeOut(100);
		} );

		$( '.two a' ).click( function () {
			$( '.two a' ).removeClass( 'focus' );
			$( this ).addClass( 'focus' );
			$( '.three' ).addClass( 'show' );
			$( '.three a' ).removeClass( 'focus' );
			//$('.inBodyForm').fadeOut(100);
		} );

		$( '.three a' ).click( function () {
			$( '.three a' ).removeClass( 'focus' );
			$( this ).addClass( 'focus' );
			//$('.inBodyForm').fadeOut(100).delay(500).fadeIn(100)
		} );

		$( '.selectedCareRouIcon label' ).click( function () {
			$( '.inBodyForm' ).fadeOut( 100 ).delay( 500 ).fadeIn( 100 )
		} );

		$( 'input[name="dateRange"]' ).daterangepicker( {
			"opens": "left",
			drops: 'up',
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		} );
		$( 'input[name="dateRange"]' ).on( 'apply.daterangepicker', function ( ev, picker ) {
			$( this ).val( picker.startDate.format( 'MM/DD/YYYY' ) + ' - ' + picker.endDate.format( 'MM/DD/YYYY' ) );
		} );

		$( 'input[name="dateRange"]' ).on( 'cancel.daterangepicker', function ( ev, picker ) {
			$( this ).val( '' );
		} );


		$( '.assessmentCheckBox input[type=radio]' ).click( function () {
			var singleValues = $( this ).val();
			$( this ).parent().parent().parent().parent().next( ".editText" ).children( "textarea" ).html( singleValues );
		} );


		$( '.assessmentCheckBox input[type=checkbox]' ).click( function () {

			var textarea = $( this ).parent().parent().parent().parent().next( "div" ).children( "textarea" );
			var selected = [];

			$( '.assessmentCheckBox input[type=checkbox]:checked' ).each( function () {
				selected.push( $( this ).val() );
			} );
			if ( $( this ).is( ':checked' ) ) {
				$( textarea ).append( $( this ).val() );
			} else {
				$( textarea ).html( "" );
				$( textarea ).html( selected );
			}
		} );


		$( '.editText button' ).click( function () {
			$( this ).next( "textarea" ).removeClass( "disabled" ).removeAttr( "disabled" );
		} );

		var select = $( '.riskAssSel1 select' );
		var box1 = $( '.CareRoutinesboxAsses1' );
		var box2 = $( '.CareRoutinesboxAsses2' );
		var box3 = $( '.CareRoutinesboxAsses3' );
		$( select ).change( function () {
			if ( $( this ).val() == "1" ) {
				$( box1 ).show();
				$('.CareRoutinesboxAsses1 .group').trigger( "click" );
			}

			if ( $( this ).val() == "2" ) {
				$( box2 ).show();
				$('.CareRoutinesboxAsses2 .group').trigger( "click" );
			}

			if ( $( this ).val() == "3" ) {
				$( box3 ).show();
				$('.CareRoutinesboxAsses3 .group').trigger( "click" );
			}
		} );


		var select2 = $( '.riskAssSel2 select' );
		var box4 = $( '.CareRoutinesboxAsses4' );
		var box5 = $( '.CareRoutinesboxAsses5' );
		var box6 = $( '.CareRoutinesboxAsses6' );
		$( select2 ).change( function () {
			if ( $( this ).val() == "4" ) {
				$( box4 ).show();
				$('.CareRoutinesboxAsses4 .group').trigger( "click" );
			}

			if ( $( this ).val() == "5" ) {
				$( box5 ).show();
				$('.CareRoutinesboxAsses5 .group').trigger( "click" );
			}

			if ( $( this ).val() == "6" ) {
				$( box6 ).show();
				$('.CareRoutinesboxAsses6 .group').trigger( "click" );
			}
		} );



		var select3 = $( '.riskAssSel3 select' );
		var box7 = $( '.CareRoutinesboxAsses7' );
		var box8 = $( '.CareRoutinesboxAsses8' );
		var box9 = $( '.CareRoutinesboxAsses9' );
		$( select3 ).change( function () {
			if ( $( this ).val() == "7" ) {
				$( box7 ).show();
				$('.CareRoutinesboxAsses7 .group').trigger( "click" );
			}

			if ( $( this ).val() == "8" ) {
				$( box8 ).show();
				$('.CareRoutinesboxAsses8 .group').trigger( "click" );
			}

			if ( $( this ).val() == "9" ) {
				$( box9 ).show();
				$('.CareRoutinesboxAsses9 .group').trigger( "click" );
			}
		} );


		// Mobile menu
		var SlideSpeed = 400;
		var x = $( ".CareRoutinesbox" ).offset();
		jQuery( ".CareRoutinescolapsBtn" ).click( function () {
			if ( !jQuery( this ).parent( "article" ).find( ".careBuildersection" ).is( ":visible" ) ) {
				jQuery( this ).parent( "article" ).find( ".careBuildersection" ).slideDown( SlideSpeed );
				jQuery( this ).removeClass( "rotate" );
			} else {
				jQuery( this ).parent( "article" ).find( ".careBuildersection" ).slideUp( SlideSpeed );
				jQuery( this ).addClass( "rotate" );
			}

			return false;
		} );

		jQuery( ".group" ).click( function () {
			if ( !jQuery( this ).next( ".riskAssessmentToggle" ).is( ":visible" ) ) {
				jQuery( this ).next( ".riskAssessmentToggle" ).slideDown( SlideSpeed );
				jQuery( this ).parent( "article" ).css( 'padding-bottom', '15px' );
				jQuery( this ).addClass( 'open' );
			} else {
				jQuery( this ).next( ".riskAssessmentToggle" ).slideUp( SlideSpeed );
				jQuery( this ).parent( "article" ).css( 'padding-bottom', '0px' );
				jQuery( this ).removeClass( 'open' );
			}

			return false;
		} );

		jQuery( ".RAssess" ).click( function () {
			if ( !jQuery( this ).parent( ".CareRoutinesboxRAS" ).find( '.riskAssessmentToggle' ).is( ":visible" ) ) {
				jQuery( this ).parent( ".CareRoutinesboxRAS" ).children( "article:nth-child(2)" ).find( '.riskAssessmentToggle' ).slideDown( SlideSpeed );
				jQuery( this ).parent( ".CareRoutinesboxRAS" ).children( "article:nth-child(2)" ).children('.group').addClass('open');
				jQuery( this ).parent( ".CareRoutinesboxRAS" ).find( 'article' ).css( 'padding-bottom', '0px' );
				jQuery( this ).parent( ".CareRoutinesboxRAS" ).children( "article:nth-child(2)" ).css( 'padding-bottom', '15px' );
			}
			else {
				jQuery( this ).parent( ".CareRoutinesboxRAS" ).find( '.riskAssessmentToggle' ).slideUp( SlideSpeed );
				jQuery( this ).parent( ".CareRoutinesboxRAS" ).find( '.riskAssessmentToggle' ).slideUp( SlideSpeed );
				jQuery( this ).parent( ".CareRoutinesboxRAS" ).find( 'article' ).css( 'padding-bottom', '0' );
				jQuery( this ).removeClass('open');
				jQuery( this ).parent( ".CareRoutinesboxRAS" ).children( "article" ).children('.group').removeClass('open');

			}
		});
	</script>
</body>

</html>
