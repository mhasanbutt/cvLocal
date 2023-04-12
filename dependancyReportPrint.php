<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Dependency Report</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<style>
		.container {
			width: 760px !important;
		}

        @media print {
            .header {
                display: none;
            }
        }
	</style>
</head>
<body class="overFlow">
    <section class="printReady">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="images/logo.png" class="logo">
                    </div>
					<div class="col-xs-6 text-center">
						<h3>This Is Me</h3>
					</div>
                    <div class="col-xs-3 text-right">
                        <button class="printButton"  onclick="window.print();"><img src="images/printing-tool.svg" class="svg"> Print</button>
                        <article class="date">
                            <span>
                                <?php echo date('M dS, Y - H:i');?>
                            </span>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="printMiddleBody">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>The dependency level of the patients can be used to ensure a standardised approach when deciding the staffing levels and appropriate qualifications of staff.</p>

                        <ul class="list-unstyled clearfix dependancyGroups print">
                            <li>
                                <span>
                                    <strong>Care Group A</strong>
                                    Estimated direct care required per day - 1 Hour
                                </span>
                                A person who is deemed to be in Care Group A may be regarded as largely capable of "self care"
                            </li>
                            <li>
                                <span>
                                    <strong>Care Group B</strong>
                                    Estimated direct care required per day - 2 Hour
                                </span>
                                A person who is deemed to be Care Group B may be regarded as requiring "average care"
                            </li>
                            <li>
                                <span>
                                    <strong>Care Group C</strong>
                                    Estimated direct care required per day - 3 Hour
                                </span>
                                A person who is deemed to be Care Group C may be regarded as needing  "above average care"
                            </li>
                            <li>
						<span>
							<strong>Care Group D</strong>
							Estimated direct care required per day - 4 Hour
						</span>
                                A person who is deemed to be Care Group D may be regarded as needing "maximum care"
                            </li>
                            <li>
						<span>
							<strong>Care Group E</strong>
							Estimated direct care required per day - 5 Hour
						</span>
                                As others with increasing needs / End of Life
                            </li>
                        </ul>

                        <div class="alertsReport depdReport">
                            <section class="SUsers clearfix">
                                <section class="profile">
                                    <span class="img">
                                        <span class="nickName">Timmy</span>
                                    </span>
                                </section>

                                <div class="allalerts print clearfix">
                                    <ul class="list-unstyled clearfix">
                                        <li style="width:calc(100% - 410px);">
                                            <span class="title">Name</span>
                                            Mr Jim Anderson
                                        </li>
                                        <li style="width:110px;">
                                            <span class="title">Date of Birth</span>
                                            32-08-1956 <i>90</i>
                                        </li>
                                        <li style="width:150px;">
                                            <span class="title">Floor</span>
                                            Floor12
                                        </li>
                                        <li style="width:150px;">
                                            <span class="title">Room</span>
                                            Floor12
                                        </li>
                                    </ul>

                                    <div>
                                        <article>
                                            <span class="title">Alerts</span>
                                            <div class="scrollArea">
                                                <div class="content">
                                                    <ul class="diseases list-unstyled">
                                                        <li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
                                                        <li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
                                                        <li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <span class="title">Allergies and Dietary Preferences</span>
                                            <div class="scrollArea">
                                                <div class="content">
                                                    <ul class="diseases list-unstyled">
                                                        <li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
                                                        <li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
                                                        <li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <span class="title">Dependancy Level</span>
                                            <div class="text-center">Care Group D - <i>Very High Dependancy</i> <strong>5.0 hours</strong></div>
                                        </article>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="dependancies print" data-title="Staffing levels using dependency level">
                            <div class="totalHours">
                                <span>Total Daily Hours  <i>198</i></span> <span>Total Care Hours <i>1386</i> <small>[ 7 Days ]</small></span>
                            </div>

                            <ul class="list-unstyled print clearfix">
                                <li>
                                    <article>
                                        Care Group A <small>Self Caring</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        Care Group B <small>Low Dependancy</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        Care Group C <small>Medium Dependancy</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        Care Group D <small>High Dependancy</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        Care Group E <small>Very High Dependancy</small> <span class="sUsers">6 Service Users</span> <span class="hours"><i>06</i> Care Hours</span>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        &copy; <?php echo date('Y');?> CareVision Management Ltd. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
