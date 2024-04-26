<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.webp" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
    <link href="css/chat.css" rel="stylesheet">
</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>
	<section class="dashboard"> <!-DO NOT INCLUDE THIS TAG IN DYNAMIC CODE->
		<div class="covidReload">
			<span class="title">Dashboard</span>

			<div class="covidStatus">
				Service Users - 0 <strong>(0 Positive)</strong> - Staff - 0 <strong>(0 Positive)</strong>
			</div>

			<div class="reload">
				Last Reload: 10:04 am - 18 May, 2022 <button>Reload</button>
			</div>
		</div>

		<div class="statLinks clearfix">
			<div class="links">
				<div class="scrollArea">
					<ul class="list-unstyled clearfix">
						<li data-title="Care Routine" data-count="32"><img src="images/care-routine.png" alt=""></li>
						<li data-title="Handover"><img src="images/handover.png" alt=""></li>
						<li data-title="Follow Up"><img src="images/followUp.png" alt=""></li>
						<li data-title="Pre-Assessment"><img src="images/flyer.png" alt=""></li>
						<li data-title="Requested Leaves"><img src="images/diary-multi.png" alt=""></li>
						<li data-title="Audit"><img src="images/audit_dashboard_icon.png" alt=""></li>
					</ul>
				</div>
			</div>

			<div class="stats clearfix">
				<ul class="list-unstyled clearfix pull-right">
                    <li data-title="Medication Orders" class="medicationOrder">
                        <span>93 <i>Pending</i></span>
                        <span>03 <i>Interim</i></span>
                    </li>
                    <li>
                        <span>93 <i>Service Users</i></span>
                        <span>03 <i>Freeze</i></span>
                    </li>
                    <li>
                        <article class="toolTip">
                            <div class="infoPop">
                                <ul class="list-unstyled clearfix">
                                    <li>
                                        <span class="hours">12</span>
                                        <span>Suspended</span>
                                    </li>
                                    <li>
                                        <span class="hours">5</span>
                                        <span>Agency</span>
                                    </li>
                                    <li>
                                        <span class="hours">72</span>
                                        <span>Actuall</span>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <span>
                            93 <i>Staff</i>
                        </span>
                        <span>03 <i>Leavers</i></span>
                    </li>
                </ul>
			</div>
		</div>

		<div class="moreStats">
			<div class="careRoutineAnalysis">
				<span class="title" data-extra="From last 30 days">Care Routine Analysis</span>

				<div class="thisContainer">
					<div id="bar" class="bar" style="width:100%; height:100%;"></div>
				</div>
			</div>

			<div class="careProvided">
				<span class="title" data-extra="as of 25-04-2022">Care Provided <samp>(by staff)</samp></span>

				<div class="settings">
					<span class="filter"></span>
					
					<input type="hidden" name="_token" value="0z0ScdS9RjXlxH8LJoe2XyyUuMICD8myhMukgfZ2">
					
					<section>
						<div class="selector">
							<select class="floorOrRoom" name="searchunits"><option value="" selected="selected">Select Floor/Home</option><optgroup label="Oatleigh Care Ltd. (Home)"><option value="3-home" selected="selected">All (Oatleigh Care Ltd. Home)</option><option value="3-floor">Angel</option><option value="4-floor">Covent Garden</option><option value="5-floor">Downing Street</option><option value="6-floor">Edwardes Square</option></optgroup><optgroup label="Homelands Care LLP (Home)"><option value="4-home">All (Homelands Care LLP Home)</option><option value="7-floor">Bond Street</option></optgroup><optgroup label="Oatlands Care ltd. (Home)"><option value="5-home">All (Oatlands Care ltd. Home)</option><option value="8-floor">Aldgate</option><option value="9-floor">Barbican</option></optgroup><optgroup label="All homes (Home)"><option value="93-home">All (All homes Home)</option></optgroup><optgroup label="Oatscare Ltd (Home)"><option value="111-home">All (Oatscare Ltd Home)</option></optgroup></select>
						</div>
						<div class="selector">
							<select class="Months" id="searchMonths" name="searchMonths"><optgroup label=""><option value="0">Select Month</option></optgroup><option value="2022-08-01">Aug, 2022</option><option value="2022-07-01">Jul, 2022</option><option value="2022-06-01">Jun, 2022</option><option value="2022-05-01">May, 2022</option><option value="2022-04-01">Apr, 2022</option><option value="2022-03-01">Mar, 2022</option><option value="2022-02-01">Feb, 2022</option><option value="2022-01-01">Jan, 2022</option><option value="2021-12-01">Dec, 2021</option><option value="2021-11-01">Nov, 2021</option><option value="2021-10-01">Oct, 2021</option><option value="2021-09-01">Sep, 2021</option><option value="2021-08-01">Aug, 2021</option></select>
						</div>
						<div class="selector">
							<select class="sortOrder" id="sortOrder" name="searchSortOrder"><option value="">Select Order</option><option value="totalDailyNotes">Daily Notes</option><option value="totalCarePlans" selected="selected">Care Plans</option><option value="totalCareRoutines">Care Routines</option><option value="totalRiskAssessments">Risk Assessments</option><option value="totalScoredAssessments">Assessments</option><option value="totalMentalAssessments">Mental Assessments</option></select>
						</div>

						<button class="searchCareProvided">Search</button>
					</section>
				</div>

				<div class="thisContainer">
					<div class="scrollArea">
						<ul class="list-unstyled careProvidedList">
							<li>
								<span class="img"></span>

								<span class="name">Rishi R. <i>Manager</i></span>

								<div class="scores">
									<i style="height:30%;"></i> <i style="height:40%;"></i> <i style="height:20%;"></i> <i style="height:70%;"></i> <i style="height:45%;"></i> <i style="height:10%;"></i> 
								</div>

								<article class="moreInfo">
									<span>Task(s) Description</span>
									<ul class="list-unstyled">
										<li><strong>28</strong> Care Plans Created</li>
										<li><strong>73</strong> Daily Notes</li>
										<li><strong>29</strong> Care Routines</li>
										<li><strong>5</strong> Risk Assessments</li>
										<li><strong>24</strong> Assessments</li>
										<li><strong>1</strong> Mental Assessments</li>
									</ul>
								</article>
							</li>

							<li>
								<span class="img"></span>

								<span class="name">Rishi R. <i>Manager</i></span>

								<div class="scores">
									<i style="height:30%;"></i> <i style="height:40%;"></i> <i style="height:20%;"></i> <i style="height:70%;"></i> <i style="height:45%;"></i> <i style="height:10%;"></i> 
								</div>

								<article class="moreInfo">
									<span>Task(s) Description</span>
									<ul class="list-unstyled">
										<li><strong>28</strong> Care Plans Created</li>
										<li><strong>73</strong> Daily Notes</li>
										<li><strong>29</strong> Care Routines</li>
										<li><strong>5</strong> Risk Assessments</li>
										<li><strong>24</strong> Assessments</li>
										<li><strong>1</strong> Mental Assessments</li>
									</ul>
								</article>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="andi">
				<span class="title" data-extra="From last 30 days">Accidents &amp; Incidents</span>

				<div class="thisContainer">
					<article>
						<span class="total">14</span>

						<ul class="list-unstyled">
							<li>
								<span style="height:70%;" data-value="07"></span>
							</li>
							<li>
								<span style="height:30%;" data-value="03"></span>
							</li>
						</ul>
					</article>
				</div>
			</div>

			<div class="attendanceWarning">
				<span class="title" data-extra="as of 25-04-2022">Attendance Warning</span>

				<ul class="list-unstyled">
					<li>Arrived Late <i>02</i></li>
					<li>Finished Early <i>02</i></li>
					<li>Arrived Late, Finished Early <i>02</i></li>
					<li>Longer Shift than Required <i>02</i></li>
					<li>Clocked in without on ROTA <i>02</i></li>
					<li>Absent <i>02</i></li>
				</ul>
			</div>

			<div class="birthdayAnI">
				<div class="upcomingBirthdays">
					<i class="printBday"></i>

					<span class="title" data-extra="Next 30 Days">Upcoming Birthday(s)</span>

					<span class="digit">07</span>
				</div>

				<div class="AnI">
					<i class="goTo"></i>
					
					<span class="title" data-extra="Last 3 days">Injury / Pressure Ulcer</span>

					<span class="digit">07</span>
				</div>
			</div>
		</div>

		<div class="followupNewAdmission clearfix">
			<div class="followUp">
				<span class="title">Follow Ups</span>

				<ul class="list-unstyled">
					<li data-point="Injury">38</li>
					<li data-point="Pressure Ulcer">24</li>
					<li data-point="Catheter">20</li>
					<li data-point="Enteral Feeding">12</li>
				</ul>
			</div>

			<div class="admissionAction">
				<span class="title">New Admission <i>Action(s)</i></span>

				<ul class="list-unstyled clearfix">
					<li>Support Care Plans <i>62</i></li>
					<li>Risk Assessments <i>62</i></li>
					<li>Assessments <i>62</i></li>
					<li>MCAs <i>62</i></li>
					<li>Consent Forms <i>62</i></li>
					<li>Alerts <i>62</i></li>
				</ul>
			</div>
		</div>
	</section>

	<div class="warningsBG"></div>
	<div class="warningsRed">
		<span class="title"><samp>Warnings</samp></span>

		<div class="scrollArea">
			<ul class="list-unstyled clearfix warningsList">
				<li class="warningClick"
					data-ids="5024,5626,5631,5650,5670,5671,5675,5679,5685,5686,5687,5694,5696,5699,5701,5702,5713,5719,5720,5721,5722,5723">
					<a>
						<i>22</i>
						<span class="warningText">Room Missing</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,251,256,370,529,1071,1483,1862,3420,3454,3460,3462,3519,3524,3531,3721,3828,4993,4995,5023,5024,5036,5045,5047,5048,5288,5293,5425,5545,5609,5611,5626,5631,5634,5648,5650,5662,5670,5671,5675,5679,5685,5686,5687,5688,5694,5696,5698,5699,5701,5702,5711,5713,5714,5717,5719,5720,5721,5722,5723">
					<a>
						<i>60</i>
						<span class="warningText">Pictures not Updated in Last 6 Months</span>
					</a>
				</li>
				<li class="warningClick" data-ids="3048,252,3829,373">
					<a>
						<i>4</i>
						<span class="warningText">Accidents and Falls(Last 30 Days)</span>
					</a>
				</li>
				<li class="warningClick" data-ids="3048,252,3829,373" data-name="accidentsIncidentsThisMonth">
					<a>
						<i>4</i>
						<span class="warningText">Accidents and Incidents (last 30 days)</span>
					</a>
				</li>
				<li class="warningClick" data-ids="">
					<a>
						<i>0</i>
						<span class="warningText">Incidents(Last 30 Days)</span>
					</a>
				</li>
				<li class="warningClick" data-ids="">
					<a>
						<i>0</i>
						<span class="warningText">Incidents &amp; Falls last 24 hours</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="110,251,252,256,370,373,529,914,1071,1116,1862,3048,3453,3460,3462,3519,3520,3524,3828,3829,5036,5048,5049,5293,5634,5650">
					<a>
						<i>26</i>
						<span class="warningText">A&amp;I Awaiting Sign Off</span>
					</a>
				</li>
				<li class="warningClick" data-ids="3828,373,5655,5634,3455,5036,252">
					<a>
						<i>7</i>
						<span class="warningText"><span>ABC(Last 30 Days)</span>
						</span></a>
				</li>
				<li class="warningClick" data-ids="252">
					<a>
						<i>1</i>
						<span class="warningText">Events Reported (Last 30 Days)</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,110,256,370,373,914,1071,1116,1483,3048,3416,3420,3445,3454,3455,3460,3462,3519,3524,3529,3531,3721,3828,3829,3831,4995,5023,5024,5036,5045,5047,5048,5288,5293,5425,5545,5609,5611,5626,5631,5634,5648,5650,5655,5662,5670,5671,5675,5679,5685,5686,5687,5688,5694,5696,5698,5699,5701,5702,5711,5713,5714,5717,5719,5720,5721,5722,5723">
					<a>
						<i>68</i>
						<span class="warningText">No Risk Of Fall Assessment</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="110,251,252,256,370,373,914,1071,1483,1862,3048,3420,3455,3460,3520,3828,3829,5036,5045,5048,5611,5711">
					<a>
						<i>22</i>
						<span class="warningText">Active Injuries</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="110,252,373,529,914,1071,1116,1483,1862,3048,3420,3454,3455,3460,3520,3531,3829,5036,5045">
					<a>
						<i>19</i>
						<span class="warningText">Active PU</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="110,251,252,256,370,373,529,1071,1116,1483,1862,3048,3416,3420,3455,3460,3462,3519,3520,3828,3829,4993,4995,5023,5024,5045,5288,5545,5609,5631,5634,5648,5650,5679,5687,5688,5694,5696,5714,5719,5720,5721,5723">
					<a>
						<i>43</i>
						<span class="warningText">Support Care Plans Overdue</span>
					</a>
				</li>
				<li class="warningClick" data-ids="1071,529,370,251,3520,4995,5045,1862,1116,373,5609,3829,252,5650">
					<a>
						<i>14</i>
						<span class="warningText">Risk Assessments Overdue</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,1071,252,370,914,251,1483,1862,529,3520,3531,3460,3828,5288,110,373,3420,1116,3829,5634,5650,256">
					<a>
						<i>22</i>
						<span class="warningText">Assessments Overdue</span>
					</a>
				</li>
				<li class="warningClick" data-ids="1071,373,1862,3462,1116,252,5045">
					<a>
						<i>7</i>
						<span class="warningText">MCA's Overdue</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,110,1071,1116,3416,3445,3454,3455,3462,3519,3524,3529,3721,3831,4993,4995,5023,5024,5045,5047,5048,5293,5545,5609,5611,5626,5631,5634,5648,5650,5655,5662,5670,5671,5675,5679,5685,5686,5687,5688,5694,5696,5698,5699,5701,5702,5713,5714,5717,5719,5720,5721,5722,5723">
					<a>
						<i>54</i>
						<span class="warningText">No MUST assessment</span>
					</a>
				</li>
				<li class="warningClick" data-ids="251,252,256,370,3048,3420,3460,3531,3828,5036,5425,5711">
					<a>
						<i>12</i>
						<span class="warningText">MUST Score at Risk</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,110,251,252,256,370,914,1071,1116,1483,3416,3420,3445,3454,3455,3462,3519,3520,3524,3529,3531,3721,3831,4993,4995,5023,5024,5045,5047,5048,5288,5293,5545,5609,5611,5626,5631,5634,5648,5650,5655,5662,5670,5671,5675,5679,5685,5686,5687,5694,5696,5698,5699,5701,5702,5713,5714,5717,5719,5720,5721,5722,5723">
					<a>
						<i>63</i>
						<span class="warningText">Missing weights (Last 30 days)</span>
					</a>
				</li>
				<li class="warningClick" data-ids="3048,256">
					<a>
						<i>2</i>
						<span class="warningText">Weight loss of more than 3%</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,251,252,256,370,373,529,914,1071,1116,1483,3416,3420,3445,3454,3455,3462,3519,3520,3524,3529,3531,3721,3828,3829,3831,4993,4995,5023,5024,5036,5045,5047,5048,5288,5293,5425,5609,5611,5631,5634,5648,5650,5655,5662,5670,5671,5675,5679,5687,5688,5694,5696,5698,5701,5702,5711,5714,5717,5719,5720,5721,5722,5723">
					<a>
						<i>64</i>
						<span class="warningText">Fluid Targets Not Met (Yesterday)</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,251,252,256,370,373,529,914,1071,1116,1483,3416,3420,3445,3454,3455,3462,3519,3520,3524,3529,3531,3721,3828,3829,3831,4993,4995,5023,5024,5036,5045,5047,5048,5288,5293,5425,5609,5611,5626,5631,5634,5648,5650,5655,5662,5670,5671,5675,5679,5685,5686,5687,5688,5694,5696,5698,5699,5701,5702,5711,5713,5714,5717,5719,5720,5721,5722,5723">
					<a>
						<i>69</i>
						<span class="warningText">On Fluid Targets</span>
					</a>
				</li>
				<li class="warningClick" data-ids="914,529,252,5036,373">
					<a>
						<i>5</i>
						<span class="warningText">DNACPR Near Expiry</span>
					</a>
				</li>
				<li class="warningClick" data-ids="107,110,252,914,1116,3520,373,529,3829">
					<a>
						<i>9</i>
						<span class="warningText">DOLS Near Expiry</span>
					</a>
				</li>
				<li class="warningClick" data-ids="252,3420">
					<a>
						<i>2</i>
						<span class="warningText">RESPECT Near Expiry</span>
					</a>
				</li>
				<li class="warningClick" data-ids="3829,252">
					<a>
						<i>2</i>
						<span class="warningText">Care Routines Missed in last 24hrs</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,110,251,252,256,370,373,529,914,1071,1116,1483,1862,3048,3416,3420,3445,3454,3455,3460,3462,3520,3524,3529,3531,3721,3828,3829,3831,4993,4995,5023,5024,5036,5045,5047,5048,5288,5293,5425,5545,5609,5611,5626,5631,5634,5648,5650,5655,5662,5670,5671,5675,5679,5685,5686,5687,5688,5694,5696,5698,5699,5701,5702,5711,5713,5714,5717,5719,5720,5721,5722,5723">
					<a>
						<i>73</i>
						<span class="warningText">No personal hygiene in 24 hrs</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="107,110,251,256,370,529,914,1071,1116,1483,1862,3416,3420,3445,3454,3455,3460,3462,3519,3520,3524,3529,3531,3721,3828,3829,3831,4993,4995,5023,5024,5036,5045,5047,5048,5288,5293,5425,5545,5609,5611,5626,5631,5634,5648,5650,5655,5662,5670,5671,5675,5679,5685,5686,5687,5688,5694,5696,5698,5699,5701,5702,5711,5713,5714,5717,5719,5720,5721,5722,5723">
					<a>
						<i>71</i>
						<span class="warningText">No bowel movements within 72 hours</span>
					</a>
				</li>
				<li class="warningClick" data-ids="">
					<a>
						<i id="font17">In Developement</i>
						<span class="warningText">Refused</span>
					</a>
				</li>
				<li class="warningClick" data-ids="">
					<a>
						<i>0</i>
						<span class="warningText">News Charts Completed</span>
					</a>
				</li>
				<li class="warningClick"
					data-ids="110,251,373,529,914,1071,370,1483,1862,3445,3520,3460,3828,252,5036,3829,5650">
					<a>
						<i>17</i>
						<span class="warningText">Care Plans Over due</span>
					</a>
				</li>
				<li class="warningClick" data-ids="">
					<a>
						<i id="font17">In Development</i>
						<span class="warningText">Hoist Used only with one Person</span>
					</a>
				</li>
				<li class="warningClick" data-ids="">
					<a>
						<i>0</i>
						<span class="warningText">Missed Meds(Yesterday)</span>
					</a>
				</li>
				<li class="warningClick" data-ids="">
					<a>
						<i>0</i>
						<span class="warningText">Late Meds(Last 24 Hours)</span>
					</a>
				</li>
				<li articletype="missingTraining" modal_title="Employee(s) missing mandatory training" class="clickable_article">
					<a>
						<i>22</i>
						<span class="warningText">Employee(s) missing mandatory training</span>
					</a>
				</li>
				<li articletype="expiredTraining" modal_title="Expired training" class="clickable_article">
					<a>
						<i>7</i>
						<span class="warningText">Expired training</span>
					</a>
				</li>
				<li articletype="nearExpiryTraining" modal_title="Training near expiry" class="clickable_article">
					<a>
						<i>11</i>
						<span class="warningText">Training near expiry</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

    <div class="chatModule" hidden>
        <samp></samp>

        <div class="chatBox">
            <div class="popMsg" style="display: none">
                <div class="popMsgContainer">
                    <div class="msg">
                        <div class="topBar">
                            <span class="closeChat"></span>
                        </div>

                        <div class="msgSection text-center">
                            <p><strong>Adam is requesting to share your browser screen.</strong></p>
                            NOTE: It's a two-way voice communication sharing.
                        </div>

                        <div class="bottomBar">
                            <span class="cta" style="background-color: #a3d39c;">
                                <i>Accept</i>
                                <i>With Control</i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="popMsg" style="display: none;">
                <div class="popMsgContainer">
                    <div class="msg">
                        <div class="topBar">
                            <span class="closeChat"></span>
                        </div>

                        <div class="msgSection">
                            Do you really want to close the chat?
                        </div>

                        <div class="bottomBar">
                            <button class="cta">Close the Chat</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="topBar">
                <span class="minimizeChat"></span>
                <span class="closeChat"></span>
            </div>

            <div class="midSection">
                <div class="scrollArea">
                    <section>
                        <div class="scrShareStarted">
                            <div class="names">
                                <span>Visitor</span>
                                <span>Adam</span>
                            </div>
                            <div class="bottomBar">
                                <button class="cta">Stop Sharing</button>
                            </div>
                        </div>

                        <div class="attachmentRecv clearfix">
                            <article>
                                <span class="fileName">filename.jpg</span>
                                <span class="fileSize">1.1 mb</span>
                                <span class="fileType">Image File</span>
                                <span class="percentage"><i style="width:20%"></i></span>
                                <button>Download</button>
                            </article>
                        </div>

                        <div class="attachmentSent clearfix">
                            <article>
                                <span class="fileName">filename.jpg</span>
                                <span class="fileSize">1.1 mb</span>
                                <span class="fileType">Image File</span>
                                <span class="percentage"><i style="width:20%"></i></span>
                                <button>Remove</button>
                            </article>
                        </div>

                        <ul class="sent list-unstyled">
                            <li class="clearfix">
                                <i class="menu"></i>
                                <div class="menuItems">
                                    <span class="copy">Copy</span>
                                    <span class="edit">Edit</span>
                                </div>
                                <span class="text">Hi would love to have a quick solution today.</span>
                                <span class="time">TUE <strong>16:44</strong></span>
                            </li>
                        </ul>

                        <ul class="recv list-unstyled">
                            <li class="clearfix">
                                <i class="menu"></i>
                                <div class="menuItems">
                                    <span class="copy">Copy</span>
                                    <span class="edit">Edit</span>
                                </div>
                                <span class="text">Thank you for waiting. <strong>Adam</strong> is your support person.</span>
                                <span class="time">TUE <strong>16:44</strong></span>
                                <span class="readStatus read"></span>
                            </li>
                            <li class="clearfix">
                                <i class="menu"></i>
                                <span class="text">Hi visitor, please give me a  minute to go through your question, will be right back.</span>
                                <span class="time">TUE <strong>16:44</strong></span>
                                <span class="readStatus"></span>
                            </li>
                        </ul>
                    </section>
                </div>

                <div class="text-center" style="display: none;">
                    One of our representatives will be with you shortly. You are number <strong>1</strong> in the queue. Your wait time will be approximately
                    <strong>5 minute(s)</strong>.

                    <span class="special">Thank you for your patience.</span>
                </div>

                <div class="startChatSection" style="display: none;">
                    <div class="chatContainer">
                        <form>
                            Please fill in details below to start a support chat.

                            <ul class="list-unstyled">
                                <li>
                                    <span class="title">Name</span>
                                    <input type="text">
                                </li>
                                <li>
                                    <span class="title">Email</span>
                                    <input type="text">
                                </li>
                                <li>
                                    <span class="title">Question / description in brief</span>
                                    <textarea></textarea>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>

            <div class="bottomBar">
                <button class="cta" style="display: none;">Start Chat</button>

                <form class="sendMsg">
                    <span class="smileys"><i></i></span>
                    <span class="attachment">
                        <input type="file" id="sendAttachment">
                        <label for="sendAttachment"></label>
                    </span>
                    <button class="sendIt"></button>
                    <textarea placeholder="Write a message..."></textarea>
                </form>
            </div>
        </div>
    </div>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="js/custom.js"></script>
	<script>

		$('.careProvided .filter').click(function(){
			$('.settings').toggleClass('expand');
		});

		Highcharts.chart('bar', {
			chart: {
				type: 'column',
				backgroundColor: 'rgba(255,255,255,0.0)',
				align: 'center',

			},
			title: {
				text: 'Care Routine Analysis',
				textsize: 22
			},
			tooltip: {
				crosshairs: [true, true]
			},
			xAxis: {
				type: 'category',
				tickPosition: 'inside',
				tickwidth: 4,

			},
			yAxis: {
				labels: {
					enabled: false
				},
				title: {
					text: ''
				}
			},
			legend: {
				enabled: false,
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle'
			},
			series: [{
				color: '#E74C3C',
				name: 'Care Routine(s)',

				data: [{
						name: 'Set',
						drilldown: 'tnc',
						color: '#3F4253',
						y: 4,
					},
					{
						name: 'Done',
						drilldown: 'tnc',
						color: '#616478',
						y: 15,
					},
					{
						name: '30mins',
						drilldown: 'tnc',
						color: '#7E8296',
						y: 10,
					},
					{
						name: 'Missed',
						drilldown: 'tnc',
						color: '#9FA2B7',
						y: 15,
					},
				],
			}, ],
			responsive: {
				rules: [{
					condition: {
						maxWidth: 500
					},
					chartOptions: {
						legend: {
							layout: 'horizontal',
							align: 'center',
							verticalAlign: 'bottom'
						}
					}
				}]
			}
		});

		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})

		$('.warningsRed .title').click(function () {
			$('.warningsRed').toggleClass('active');
			$('.warningsBG').toggleClass('active');     
		});

		$('.floorSelection span').click(function () {
			$(this).parent().toggleClass('expand');
			$(this).parent().parent().toggleClass('changeColor');
		});
	</script>
</body>
</html>