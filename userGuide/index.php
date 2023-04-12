<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>CareVision - User Guide</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/loginPage-logo.png" alt="Care Vision" class="logo">
                </div>
                <div class="col-lg-6">
                    <section class="pull-right">
                        <article class="date">
                            <span>
                                <?php echo date('M dS, Y');?>
                            </span>
                        </article>
                        <span class="headerIcons notification active">
                            <img src="images/notifications-button.svg" class="svg">
                        </span>
                        <a href="#" class="messagesAlert active"><span>21</span><img src="images/black-back-closed-envelope-shape.svg" class="svg"></a>
                    </section>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="button"><img src="images/magnifier-tool.svg" class="svg" alt="Search"></button>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#medication" aria-controls="medication" role="tab" data-toggle="tab">Medication</a></li>
                    <li role="presentation"><a href="#emar" aria-controls="emar" role="tab" data-toggle="tab">EMAR</a></li>
                    <li role="presentation"><a href="#medAdmin" aria-controls="medAdmin" role="tab" data-toggle="tab">Medication Administration</a></li>
                    <li role="presentation"><a href="#suOrder" aria-controls="suOrder" role="tab" data-toggle="tab">Service User Order</a></li>
                    <li role="presentation"><a href="#returnDestroy" aria-controls="returnDestroy" role="tab" data-toggle="tab">Return &amp; Destroy</a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="medication">

                        <h2>Medication</h2>

                        <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum. Donec lobortis viverra odio ac porttitor. Nulla sit amet eros a dui malesuada fringilla.</p>

                        <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

                        <ul class="innerLinks list-unstyled">
                            <li><a href="#">Medicine Room</a></li>
                            <li><a href="#">Service User Medication</a></li>
                        </ul>

                        <h3>Medicine Room</h3>
                        <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

                        <div class="warningNote">
                            Correct and complete medcine information needs to be added in this section.
                        </div>

                        <h3>Service User medication</h3>
                        <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="emar">
                        <h2>EMAR</h2>

                        <div class="row">
                            <div class="col-lg-6">
                                <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum. Donec lobortis viverra odio ac porttitor. Nulla sit amet eros a dui malesuada fringilla.</p>
                                <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="descrImg">
                                    <img src="images/eMAR-mainWindow.jpg" alt="EMAR" class="img-responsive">
                                    Nulla interdum urna urna, a accumsan lacus dignissim non.
                                </div>
                            </div>
                        </div>

                        <ul class="innerLinks list-unstyled">
                            <li><a href="#create">Create New EMAR</a></li>
                            <li><a href="#history">History</a></li>
                            <li><a href="#view">View EMAR</a></li>
                            <li><a href="#update">Update EMAR</a></li>
                        </ul>

                        <h3 id="create">Create New EMAR</h3>

                        <div class="descrImg">
                            <img src="images/create-emar.jpg" alt="EMAR" class="img-responsive">
                            Nulla interdum urna urna, a accumsan lacus dignissim non.
                        </div>

                        <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

                        <div class="warningNote">
                            <strong>Start Date</strong> should always be after the end date of previous EMAR.
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                                <p>Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum. Donec lobortis viverra odio ac porttitor. Nulla sit amet eros a dui malesuada fringilla.</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="descrImg">
                                    <img src="images/newEMAR-form.jpg" alt="EMAR" class="img-responsive">
                                    Nulla interdum urna urna, a accumsan lacus dignissim non.
                                </div>
                            </div>
                        </div>

                        <h3 id="history">History</h3>

                        <div class="descrImg">
                            <img src="images/eMAR-history.jpg" alt="EMAR" class="img-responsive">
                            Nulla interdum urna urna, a accumsan lacus dignissim non.
                        </div>

                        <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

                        <h3 id="view">View EMAR</h3>

						<div class="descrImg">
                            <img src="images/eMAR-view.png" alt="EMAR" class="img-responsive">
                            Nulla interdum urna urna, a accumsan lacus dignissim non.
                        </div>

                        <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>


						<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum. Donec lobortis viverra odio ac porttitor. Nulla sit amet eros a dui malesuada fringilla.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

						<div class="descrImg">
							<img src="images/eMAR-mainWindow.jpg" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                        <div class="row">
                            <div class="col-lg-6">
                                <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
                                <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="descrImg">
                                    <img src="images/eMAR-MedicineIcon.png" alt="EMAR" class="img-responsive">
                                    Nulla interdum urna urna, a accumsan lacus dignissim non.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<h4>Medicine Detail</h4>
								<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
                                <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                                <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
                                <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
                       		</div>
                       		<div class="col-sm-6">
                       			<div class="descrImg">
									<img src="images/eMAR-Medicine-detail.png" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
							</div>
                        </div>

                        <div class="descrImg">
                            <img src="images/eMAR-medication-administered.jpg" alt="EMAR" class="img-responsive">
                            Nulla interdum urna urna, a accumsan lacus dignissim non.
                        </div>
						<p class="lead">Pellentesque cursus diam elit, at faucibus lorem tempor at. Aliquam fringilla lectus eget justo lacinia condimentum. Praesent varius dolor nisi, eget lobortis justo fringilla sed.</p>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<h4>Medication Administered</h4>
								<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
                                <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       		</div>
                       		<div class="col-sm-6">
                       			<div class="descrImg">
									<img src="images/eMAR-medication-administered-detail.png" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
							</div>
                        </div>

						<h3 id="update">Update EMAR</h3>

                 		<div class="descrImg">
                            <img src="images/eMAR-update.png" alt="EMAR" class="img-responsive">
                            Nulla interdum urna urna, a accumsan lacus dignissim non.
                        </div>

                        <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

                  		<div class="warningNote">
                            <strong>Start Date</strong> should always be after the end date of previous EMAR.
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum. Donec lobortis viverra odio ac porttitor. Nulla sit amet eros a dui malesuada fringilla.</p>
                                <p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="descrImg">
                                    <img src="images/updateEMAR-form.png" alt="EMAR" class="img-responsive">
                                    Nulla interdum urna urna, a accumsan lacus dignissim non.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="medAdmin">
                    	<h2>Medication Administration</h2>

						<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
						<div class="descrImg">
							<img src="images/Medication-Administration.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                        <ul class="innerLinks list-unstyled">
                            <li><a href="#historyad">History</a></li>
                            <li><a href="#viewad">View EMAR</a></li>
                            <li><a href="#dispensead">Dispense</a></li>
                        </ul>

                        <h3 id="historyad">History</h3>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/MedicationAdministration.jpg" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

                        <h3 id="viewad">View EMAR</h3>

                        <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       	<div class="descrImg">
							<img src="images/MedicationAdmin-view-Mar.jpg" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>


						<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

						<div class="descrImg">
							<img src="images/ad-emar.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/ad-emar-medicine-info.jpg" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<h4>Medicine Detail</h4>
                        		<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/eMAR-Medicine-detail.png" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

                        <h3 id="dispensead">Dispense</h3>

						<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

						<div class="descrImg">
							<img src="images/MedicationAdministraterDispense.jpg" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

						<div class="row">
							<div class="col-sm-6">
								<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
								<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
							</div>
							<div class="col-sm-6">
								<div class="descrImg">
										<img src="images/DispenseMedication.png" alt="EMAR" class="img-responsive">
										Nulla interdum urna urna, a accumsan lacus dignissim non.
									</div>
							</div>
						</div>

                       	<div class="warningNote">
                            <strong>Nulla molestie sodales</strong> Mauris eu lectus sit amet ante sollicitudin bibendum.
                        </div>
                        <div class="row">
                        	<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/Dispense-detail-alert.png" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/DispenseMedication-detail.jpg" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/Dispense-detail.png" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="suOrder">
                    	<h2>Service User Order</h2>
                    	<div class="row">
                    		<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales Mauris eu.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/Service-User-Order-ss.png" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
						</div>

                   		<ul class="innerLinks list-unstyled">
                           	<li><a href="#genNOsuo">Generate New Order</a></li>
                           	<li><a href="#OrderUsersuo">Order Service User</a></li>
                            <li><a href="#historysuo">Order History</a></li>
                            <li><a href="#revodsuo">Review Order</a></li>
                        </ul>

                        <h3 id="genNOsuo">Generate New Order</h3>
                        <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       	<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>

                       	<div class="warningNote">
                            <strong>Nulla molestie sodales</strong> Mauris eu lectus sit amet ante sollicitudin bibendum.
                        </div>

                       	<div class="descrImg">
							<img src="images/SUO-new-order.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                        <h3 id="OrderUsersuo">Order Service User</h3>
                        <p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       	<p class="lead">Nulla molestie pulvinar sodales. Mauris eu lectus sit amet ante sollicitudin bibendum.</p>

                        <div class="descrImg">
							<img src="images/SUO.jpg" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>
                       	<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

                        <div class="row">
                    		<div class="col-sm-6">
                        		<p class="lead">Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       			<p class="lead">Nunc iaculis sapien quis sem auctor.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/SUO-resident.jpg" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
						</div>

                       	<h3 id="historysuo">Order History</h3>
						<p class="lead">Morbi at nibh placerat, fermentum dui id, placerat tellus. Sed molestie metus in justo gravida cursus. In sagittis purus elit, quis efficitur purus fringilla quis.</p>
                       	<p>Maecenas congue non diam vel semper. Mauris semper vulputate auctor. Ut efficitur mi maximus libero scelerisque, non malesuada libero molestie.</p>
                        <div class="descrImg">
							<img src="images/su-Order-History.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                   		<div class="row">
                    		<div class="col-sm-6">
                        		<p class="lead">Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       			<p class="lead">Nunc iaculis sapien quis sem auctor.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/su-Review-Order.jpg" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
						</div>

                   		<h3 id="revodsuo">Review Order</h3>

                   		<p class="lead">Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                  		<div class="warningNote">
                            <strong>Nulla molestie sodales</strong> Mauris eu lectus sit amet ante sollicitudin bibendum.
                        </div>
                  		<div class="descrImg">
							<img src="images/Service-User-Order-ss.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="returnDestroy">
                    	<h2>Return & Destroy</h2>

						<p class="lead">Nulla molestie pulvinar sodales Mauris eu.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

						<div class="descrImg">
							<img src="images/RD-Review-Order.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                  		<ul class="innerLinks list-unstyled">
                         	<li><a href="#rdsUser">Service User</a></li>
                         	<li><a href="#rdhistory">Return & Destroyed History</a></li>
                          	<li><a href="#RdNew">Return & Destroyed (New)</a></li>
                        </ul>


                        <h3 id="rdsUser">Service User</h3>

						<p class="lead">Nulla molestie pulvinar sodales Mauris eu.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

						<div class="descrImg">
							<img src="images/SUO.jpg" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                       	<p class="lead">Nulla molestie pulvinar sodales Mauris eu.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales Mauris eu.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       			<p class="lead">Cras tristique ut lorem id fringilla. Nulla a vulputate libero, nec pellentesque risus. Vestibulum at felis tristique.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/SUO-resident.jpg" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

                        <h3 id="rdhistory">Return & Destroyed History</h3>

                        <p class="lead">Fusce tincidunt est dui, interdum varius quam ultricies quis. Vivamus vel pellentesque ipsum, faucibus accumsan leo. </p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                   		<div class="descrImg">
							<img src="images/rd-history.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                   		<div class="row">
                        	<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales Mauris eu.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       			<p class="lead">Cras tristique ut lorem id fringilla. Nulla a vulputate libero, nec pellentesque risus. Vestibulum at felis tristique.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/rd-history-v-alert.png" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

						<p class="lead">In convallis diam sed erat elementum blandit quis lobortis nunc. Sed sed ullamcorper mauris.</p>
                       	<p>Mauris gravida faucibus ultrices. Praesent lorem diam, consectetur non mauris eu, sollicitudin lobortis enim. Ut ut ornare velit. Sed sed libero arcu. </p>
                        <div class="descrImg">
							<img src="images/rd-Review-Order-view.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>
                        <p>Proin sit amet vehicula augue. Vivamus nec urna orci. Proin aliquet ligula id sollicitudin efficitur. Fusce elementum interdum magna in scelerisque. Fusce volutpat porttitor odio, id convallis elit vulputate quis. </p>


                        <h3 id="RdNew">Return & Destroyed (New)</h3>
                        <div class="row">
                        	<div class="col-sm-6">
                        		<p class="lead">Nulla molestie pulvinar sodales Mauris eu.</p>
								<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
                       			<p class="lead">Cras tristique ut lorem id fringilla. Nulla a vulputate libero, nec pellentesque risus. Vestibulum at felis tristique.</p>
                        	</div>
                        	<div class="col-sm-6">
                        		<div class="descrImg">
									<img src="images/rd-history-new.png" alt="EMAR" class="img-responsive">
									Nulla interdum urna urna, a accumsan lacus dignissim non.
								</div>
                        	</div>
                        </div>

                        <p class="lead">Nulla molestie pulvinar sodales Mauris eu.</p>
						<p>Nunc iaculis sapien quis sem auctor, sed pharetra arcu euismod. Duis commodo porttitor lectus, non pharetra neque tempor a. Nulla interdum urna urna, a accumsan lacus dignissim non.</p>
						<p class="lead">Cras tristique ut lorem id fringilla. Nulla a vulputate libero, nec pellentesque risus. Vestibulum at felis tristique.</p>

                        <div class="warningNote">
                            <strong>Nulla molestie sodales</strong> Mauris eu lectus sit amet ante sollicitudin bibendum.
                        </div>

                        <div class="descrImg">
							<img src="images/SUO-new-order.png" alt="EMAR" class="img-responsive">
							Nulla interdum urna urna, a accumsan lacus dignissim non.
						</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="img-zoomer">
    	<div class='image_popup'><span>X</span></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

	$(document).ready(function($){
		$('body').on('click','img',function(){
			$('.img-zoomer').addClass('open');
			var imgsrc=$(this).attr('src');
			//alert(imgsrc);
			$(".img-zoomer .image_popup").append(" <img src='"+imgsrc+"'>");
		})
	});
	$(".image_popup span").click(function(){
    	$(".img-zoomer").removeClass("open");
		$(".img-zoomer .image_popup img").remove();
	});
    </script>
</body>
</html>
