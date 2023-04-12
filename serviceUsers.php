<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Care</a></li>
                <li><a href="#">Service Users</a></li>
            </ul>
            <span class="title"><img src="images/service-users.png" alt=""> Service User Listing</span>
        </div>

        <div class="filtersSearch showSelection clearfix pull-right" style="margin-right:20px;">
            <form class="search" style="margin-left:10px;">
                <div class="selection">
                    <span>Home: <strong>Care Home 1</strong></span> | 
                    <span>Floor: <strong>Floor 1</strong></span>
                </div>
				<div class="byStaff">
					<input type="text" name="staffname" id="staffname" placeholder="Search by keyword">
					<button>search</button>
				</div>

				<span class="filters">Filters</span>

				<div class="allFilters">
					<ul class="list-unstyled">
						<li>
							<div class="form-group">
								<label for="">Choose Service User</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1">Service User 1</option>
									</select>
								</div>
							</div>
						</li>
					</ul>

					<button class="green">Search</button> <button>Reset Filters</button>
				</div>
			</form>
            
            <a href="#" style="background-image:url('images/print-icon.png');">Show All / Print QR</a>
            <a href="#" style="background-image:url('images/group-allocation.png');">Group Allocation</a>
            <a href="#" class="addServiceUser" style="color:#1f262a;background-color:#6DC77A;background-image:url('images/rotaAddEmployeeIcon.png');margin-left:10px;">Add Service User</a>
		</div>
    </section>

    <section class="contentBody noBg noFooter">
        <span class="loadMore"></span>
        
        <section class="newSUList">
            <div class="scrollArea">
                <div class="listContainer">
                    <ul class="list-unstyled clearfix">
                        <li class="testProfile">
                            <article class="clearfix">
                                <span class="picture fAlert"><a href="#"><img src="images/temp-picture.jpg"></a></span>
                                <span class="listWarnings" data="15">Warnings</span><br>
                                <span class="listAlerts" data="15">Alerts</span><br>
                                <span class="dnacpr">DNACPR</span><br>
                                <span class="newsScore">NEWS Score: 2</span><br clear="all">

                                <ul class="list-unstyled">
                                    <li><strong>(Timmy)</strong> Mr Tim Shermin</li>
                                    <li>23-08-1940 <span title="Age">89</span></li>
                                    <li>10-03-2021   <span title="Client no.">13445</span></li>
                                    <li>Floor 1 / Room 2</li>
                                    <li>33498492948</li>
                                </ul>

                                <span class="postFallAlert">Post Fall Alert</span>
                                <span class="fluidAlert fAlert">Fluid Alert</span>
                            </article>
                        </li>

                        <li>
                            <article class="clearfix freezeHospitalLeave">
                                <span class="picture"><a href="#"><img src="images/temp-picture.jpg"></a></span>
                                <span class="listWarnings" data="15">Warnings</span><br>
                                <span class="listAlerts" data="15">Alerts</span><br>
                                <span class="dnacpr">DNACPR</span><br>
                                <span class="newsScore">NEWS Score: 2</span><br clear="all">

                                <ul class="list-unstyled">
                                    <li><strong>(Timmy)</strong> Mr Tim Shermin</li>
                                    <li>23-08-1940 <span title="Age">89</span></li>
                                    <li>10-03-2021   <span title="Client no.">13445</span></li>
                                    <li>Floor 1 / Room 2</li>
                                    <li>33498492948</li>
                                </ul>

                                <span class="suspended">Hospital</span>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="overallStats">
                <span class="title">Overall <i>Stats</i></span>
				<span class="stat" data-title="Service Users">102</span>
				<span class="stat other" data-title="Freeze Status">07</span>
        </section>

        <section class="newWarnings">
            <span class="title">Warnings</span>

            <div class="scrollArea">
                <div class="listContainer">
                    <ul class="list-unstyled warningsList clearfix">
                        <li><i>04</i> <span>Room Missing</span></li>
                        <li><i>00</i> <span>Belonging list not updated in 3 months</span></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <div class="pop" id="individualWarnings">
        <div>
            <section>
                <article style="width:280px;">
                    <span class="popFuse"></span>
                    <span class="title">Warnings</span>
                    Mr Tim Shermin has following warnings.

                    <ul class="list-unstyled warningsList clearfix">
                    <li><span>Pictures not Updated in Last 6 Months</span></li>
                    <li><span>No Risk Of Fall Assessment</span></li>
                    <li><span>Support Care Plans Overdue</span></li>
                    <li><span>No MUST assessment</span></li>
                    <li><span>Missing weights this month</span></li>
                    <li><span>Fluid Targets Not Met (Yesterday)</span></li>
                    <li><span>On Fluid Targets</span></li>
                    <li><span>No personal hygiene in 24 hrs</span></li>
                    <li><span>No bowel movements within 72 hours</span></li>
                    <li><span>Belonging list not updated in 3 months</span></li>
                    <li><span>Pictures not Updated in Last 6 Months</span></li>
                    <li><span>No Risk Of Fall Assessment</span></li>
                    <li><span>Support Care Plans Overdue</span></li>
                    <li><span>No MUST assessment</span></li>
                    <li><span>Missing weights this month</span></li>
                    <li><span>Fluid Targets Not Met (Yesterday)</span></li>
                    <li><span>On Fluid Targets</span></li>
                    <li><span>No personal hygiene in 24 hrs</span></li>
                    <li><span>No bowel movements within 72 hours</span></li>
                    <li><span>Belonging list not updated in 3 months</span></li>
                    <li><span>No Risk Of Fall Assessment</span></li>
                    <li><span>A&amp;I Awaiting Sign Off</span></li>
                    <li><span>ABC(Last 30 Days)</span></li>
                    <li><span>Active Injuries</span></li>
                    <li><span>Active PU</span></li>
                    <li><span>Support Care Plans Overdue</span></li>
                    <li><span>Pain Chek Requiring Follow Ups</span></li>
                    <li><span>Fluid Targets Not Met (Yesterday)</span></li>
                    <li><span>On Fluid Targets</span></li>
                    <li><span>No personal hygiene in 24 hrs</span></li>
                    <li><span>Belonging list not updated in 3 months</span></li>
                    </ul>
                </article>
            </section>
        </div>
    </div>

    <div class="pop" id="individualAlerts">
        <div>
            <section>
                <article style="width:580px;">
                    <span class="popFuse"></span>
                    <span class="title">Alerts</span>
                    Mr Tim Shermin has following alerts.

                    <ul class="popAlerts clearfix list-unstyled">
                        <li>
                            <span>
                                <img src="https://jawa.care-vision.co.uk/images/alerticon/bloodpressure.png"> Blood Pressure
                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="https://jawa.care-vision.co.uk/images/alerticon/bloodpressure.png"> Blood Pressure
                            </span>
                        </li>
                        <li class="alertDetail">
                            <ul class="list-unstyled clearfix">
                                <li style="width:80px;">
                                    <i>Date Added</i> 13-12-2022
                                </li>

                                <li style="width:180px;">
                                    <i>Added By</i> John Smith
                                </li>

                                <li style="width:180px;">
                                    <i>Witness</i> -
                                </li>

                                <li style="width:100px;">
                                    <i>Status</i> Active
                                </li>

                                <li style="width:100%;">
                                    <i>Comments</i> -
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span>
                                <img src="https://jawa.care-vision.co.uk/images/alerticon/bloodpressure.png"> Blood Pressure
                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="https://jawa.care-vision.co.uk/images/alerticon/bloodpressure.png"> Blood Pressure
                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="https://jawa.care-vision.co.uk/images/alerticon/bloodpressure.png"> Blood Pressure
                            </span>
                        </li>
                    </ul>

                    <span class="subTitle">Allergies</span>
                    <ul class="list-unstyled clearfix allergies">
                        <li>Penicillin (Phenoxymethylpenicillin)</li>
                    </ul>

                    <span class="subTitle">Vaccination</span>
                    <table style="width:100%">
                        <tbody>
                            <tr>
                                <th>Type of Vaccine</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Manufacturer</th>
                                <th>Date Vaccinated</th>
                            </tr>
                            <tr style="border-top:1px solid lightgrey; padding:2.5px">
                                <td>COVID Vaccine</td>
                                <td>Given</td>
                                <td>Booster Shot</td>
                                <td>Pfizer/BioNTech</td>
                                <td>04-04-2022 02:40 PM</td>
                            </tr>
                            <tr style="border-top:1px solid lightgrey; padding:2.5px">
                                <td>COVID Vaccine</td>
                                <td>Given</td>
                                <td>First Dose</td>
                                <td>Pfizer/BioNTech</td>
                                <td>08-01-2021 10:27 AM</td>
                            </tr>
                            <tr style="border-top:1px solid lightgrey; padding:2.5px">
                                <td>COVID Vaccine</td>
                                <td>Given</td>
                                <td>Second Dose</td>
                                <td>Pfizer/BioNTech</td>
                                <td>24-03-2021 11:12 AM</td>
                            </tr>
                            <tr style="border-top:1px solid lightgrey; padding:2.5px">
                                <td>COVID Vaccine</td>
                                <td>Given</td>
                                <td>Booster Shot</td>
                                <td>Pfizer/BioNTech</td>
                                <td>11-10-2021 11:14 AM</td>
                            </tr>
                            <tr style="border-top:1px solid lightgrey; padding:2.5px">
                                <td>Flu Vaccine</td>
                                <td>Given</td>
                                <td>First Dose</td>
                                <td>N/A</td>
                                <td>11-10-2021 11:16 AM</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
            </section>
        </div>
    </div>

    <div class="pop" id="FluidAlert">
        <div>
            <section>
                <article style="width:380px;">
                    <span class="popFuse"></span>
                    <span class="title">Fluid Alert</span>
                    Fluid target has been set at <strong>1000 ml</strong>. Since 11 AM. Tim has only consumed <strong>0 ml</strong>. You can go to <a href="#">Service User dashboard</a> to offer fluid or Press dismiss to remove the warning.

                    <div class="ctas">
                        <button style="background-color:#7992B6;color:#FFF;">Dismiss</button> <button class="popClose">Close</button>
                    </div>
                </article>
            </section>
        </div>
    </div>

    <div class="pop" id="warningServiceUsers">
        <div>
            <section>
                <article style="width:702px;">
                    <span class="popFuse"></span>
                    <span class="title">Room Missing of Service Users</span>
                    The following service users have not been allocated to a room. Please click on the name and go to the "Summary" page to enter the room. Care notes cannot be created unless a service user has been allocated a room.

                    <ul class="list-unstyled clearfix popServiceUsers">
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                                <span class="nickName">Julie</span>
                            </a>
                        </li>
                    </ul>
                </article>
            </section>
        </div>
    </div>

    <div class="pop" id="newServiceUser">
        <div>
            <section>
                <article style="width:700px;">
                    <span class="popFuse"></span>
                    <span class="title">Create New Service User</span>
                    <p>You are adding a new service user to the system without a pre-admission assessment.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://jawa.care-vision.co.uk/residentinitialcareplan/add" id="careBuilderWithQuestions" class="newUserLink">
                                <span>Service User Summary and Support plan</span>
                                <p>This option will help create a service user summary along with a support plan. This is the recommended way of entering a service user</p>
                                <i class="primary">Detailed</i>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="https://jawa.care-vision.co.uk/residentsummery/add" id="careBuilderWithoutQuestions" class="newUserLink">
                                <span>Service User Summary only</span>
                                <p>Please only use this option to create quick Service User summary or for Short Term Service Users. This option does not auto create care plans</p>
                                <i>Quick Option</i>
                            </a>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        $('.listWarnings').click(function(){
            $('#individualWarnings').css('display', 'table');
        });

        $('.listAlerts').click(function(){
            $('#individualAlerts').css('display', 'table');
        });

        $('.addServiceUser').click(function(){
            $('#newServiceUser').css('display', 'table');
        });

        $('.fAlert').click(function(){
            $('#FluidAlert').css('display', 'table');
        });

        $('.popFuse, .popClose').click(function(){
            $('.pop').css('display', 'none');
        });

        $('.newWarnings .warningsList li').click(function(){
            $('#warningServiceUsers').css('display', 'table');
        });
        
        $('.popAlerts li').click(function(){
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $(this).next('li.alertDetail').removeClass('active');
            } else {
                $('.popAlerts li, li.alertDetail').removeClass('active');
                $(this).addClass('active');
                $(this).next('li.alertDetail').addClass('active');
            }
        });
    </script>
</body>
</html>
