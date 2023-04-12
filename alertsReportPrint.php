<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Care Vision - Less Admin, More Care</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style>
        body {
            overflow-y: auto;
            background: #FFF;
        }
        .container {
            width: 760px;
        }

        .alertsReport {
            padding-right: 0;
        }

        .SUsers {
            border-bottom: 1px solid #999; 
        }

        .SUsers:last-of-type, .SUsers:only-of-type {
            border-bottom: 0;
        }

        .allalerts {
            border-bottom: 1px solid #999;
            border-radius: 0 !important;
        }

        .allalerts:last-of-type {
            border-bottom: 0;
        }

        .allalerts li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <section class="printReady">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <img src="images/logo.png" class="logo">
                    </div>

                    <div class="col-xs-4 text-center">
                        <h3>Alerts Report</h3>
                    </div>

                    <div class="col-xs-4 text-right">
                        <button class="printButton" onclick="window.print();"><img src="images/print-icon.png"> Print</button>

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
						<div class="alertsReport">
							<section class="SUsers clearfix">
								<section class="profile">
									<span class="img">
										<span class="nickName">Timmy</span>
									</span>
									<ul class="list-unstyled">
										<li>
											<span class="title">Name</span>
											Mr Jim Anderson
										</li>
										<li>
											<span class="title">Date of Birth</span>
											<i>90</i> 32-08-1956
										</li>
										<li>
											<span class="title">Floor</span>
											Floor12
										</li>
										<li>
											<span class="title">Room</span>
											Floor12
										</li>
									</ul>
								</section>

								<div class="allalerts clearfix">
									<div>
										<article>
											<ul class="list-unstyled clearfix columns col3">
												<li>
													<span class="title">Catheter</span>
													Suprapubic<br>Silicone<br>18 Red End
												</li>
												<li>
													<span class="title">Enteral Feeding</span>
													NJT
												</li>
												<li>
													<span class="title">Tracheostomy</span>
												</li>
											</ul>
										</article>
										<article>
											<span class="title">Allergies and Dietary Preferences</span>
											<ul class="diseases list-unstyled">
												<li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
												<li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
												<li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
											</ul>
										</article>
										<article>
											<ul class="list-unstyled clearfix columns col2">
												<li>
													<span class="title">GSF</span>
													<span class="gsf"><img src="images/gsf-coloured.png"></span>
												</li>
												<li>
													<span class="title">Resuscitation Status</span>
													DNACPR
												</li>
											</ul>
										</article>
									</div>
									<div>
										<article>
											<span class="title">Alerts</span>
											<ul class="diseases list-unstyled">
												<li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
												<li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
												<li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
											</ul>
										</article>
										<article>
											<span class="title">Diagnosis</span>
											<span class="salt">S.A.L.T <strong>Level 1 - Slightly thick</strong></span>
											<ul class="list-unstyled clearfix diagnosis">
												<li>Tiberium Infestation</li>
											</ul>
										</article>
										<article>
											<span class="title">Mobility</span>
											<ul class="list-unstyled clearfix mobility">
												<li>
													<i>Hoist</i> Yes
												</li>
												<li>
													<i>Wheelchair</i> Yes
												</li>
												<li>
													<i>Rotunda</i> Yes
												</li>
												<li>
													<i>Standing Sling</i> Small
												</li>
												<li>
													<i>Transfer Sling</i> Medium
												</li>
												<li>
													<i>Bathin Sling</i> Large
												</li>
											</ul>
										</article>
									</div>
									<div class="notes">
										<span class="title">Nurse / Carer Notes</span>
										Nulla tristique magna vitae turpis blandit, ac mattis ipsum gravida. Proin nec magna sit amet ex lobortis commodo. Sed vel odio sem. Cras egestas molestie lacus, sed rutrum augue feugiat sed. Vestibulum non tortor et ex feugiat feugiat. Nulla non urna sit amet arcu bibendum accumsan eget at elit. Nam lacinia augue sed libero tincidunt congue. In venenatis, odio sed suscipit cursus, arcu ipsum consequat ligula, bibendum placerat leo augue nec nulla. Aliquam at leo in sem auctor faucibus sed vel purus. Aliquam fringilla luctus mi. Aenean sem tortor, bibendum rutrum tortor sollicitudin, blandit tristique tellus. Ut in suscipit metus. Nunc finibus accumsan est. Vivamus dapibus dui non quam feugiat, vel scelerisque nibh bibendum. 
									</div>
								</div>
							</section>
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
