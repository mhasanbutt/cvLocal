<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>

    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Reception</a></li>
            </ul>
            <span class="title">Feedback</span>
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
                                <form class="inBodyForm">
                                   	<h4>We welcome feedback from prospective service users and families.</h4>Please take a few moments at the end of your visit to let us know about your experience today.
                                   	<hr>
                                    <div class="row">
                                       	<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name of Service User</label>
                                                <input value="Lorem Ipsum" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group date">
                                                <label>Time & date of viewing</label>
                                                <input type="text" value="11/08/2017" name="dateRange">
                                                <img src="images/calendar-icon.svg" class="svg">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name of person viewing</label>
                                                <input value="Lorem Ipsum" type="text" />
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Relationship to service user</label>
                                                <input type="text" value="Lorem Ipsum" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Contact tel no</label>
                                                <input type="text" value="+123456789" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Email</label>
												<input type="text" value="sample@sample.com" />
											</div>
										</div>
									</div>

                               		<hr>
									<h4>Impression of</h4>

                              		<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Warmth of welcome</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Cleanliness of home</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>
									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Bedrooms</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Lounge/Dining Areas</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Kitchen Facilities</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Laundry Fascilities</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Activities Offered</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Presentation of Staff</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Quality of Website</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Brochure</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-4">
                               				<div class="form-group">
                                                <label>How did you hear about us?</label>
                                                <div class="select">
													<select>
														<option>Select</option>
														<option>website</option>
														<option>local authority</option>
														<option>marketing</option>
														<option>friend</option>
														<option>exisiting resident</option>
														<option>other</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
                                            </div>
                                            <div class="form-group" hidden="">
                                                <label>Other</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Have you viewed other homes? Please Provide Details</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
                               			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Any Other Comments</label>
                                                <textarea></textarea>
                                            </div>
										</div>
									</div>

									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>On a scale from 'very dissatisfied' to 'very satisified' please rate your experience</label>
												<table class="table table-stiped satisfactoryLevel" align="center">
													<thead>
														<tr>
															<th>Very Dissatisfied</th>
															<th>Dissatisfied</th>
															<th>Neutral</th>
															<th>Satisified</th>
															<th>Very Satisfied</th>
															<th>Not Applicable</th>
														</tr>
													</thead>
													<tbody>
														<tr class="smileys">
															<td><button type="button" class="btn smileysBtn"><img src="images/angry.svg" class="svg"></button></td>
															<td><button type="button" class="btn smileysBtn"><img src="images/confused.svg" class="svg"></button></td>
															<td><button type="button" class="btn smileysBtn"><img src="images/sad.svg" class="svg"></button></td>
															<td><button type="button" class="btn smileysBtn"><img src="images/smile.svg" class="svg"></button></td>
															<td><button type="button" class="btn smileysBtn"><img src="images/laughing.svg" class="svg"></button></td>
															<td><button type="button" class="btn smileysBtn">N/A</button></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>

                            		<div class="row">
                            			<div class="col-md-12">
                            				<div class="feedbackstaffmember">Please Hand Back the Device to a Staff Member <span>Thank you for your feedback!</span></div>
										</div>
                            		</div>


                            		<div class="text-center"><button type="button" class="formButton continue">Continue</button> </div>
                            		<hr>

                            		<h4>For office use only</h4>

                            		<div class="row">
                               			<div class="col-md-4">
                               				<div class="form-group">
                                                <label>Name of Staff Providing Viewing</label>
                                                <input type="text" value="" />
                                            </div>
										</div>
										<div class="col-md-4">
                               				<div class="form-group">
                                                <label>Job Title</label>
                                                <input type="text" value="" />
                                            </div>
										</div>
										<div class="col-md-4">
                               				<div class="form-group">
                                                <label>Name of Service Viewed</label>
                                                <input type="text" value="" />
                                            </div>
										</div>
									</div>

                            		<div class="row">
                               			<div class="col-md-4">
                               				<div class="form-group">
                                                <label>Service user currently in</label>
                                                <div class="select">
													<select>
														<option>Select</option>
														<option>Hospital</option>
														<option>Care Home</option>
														<option>Own Home</option>
														<option>Other</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
                                            </div>
                                            <div class="form-group" hidden="">
                                                <label>Other</label>
                                                <input type="text" value="" />
                                            </div>
										</div>
										<div class="col-md-4">
                                            <div class="form-group date">
                                                <label>Timescale for admission</label>
                                                <input type="text" name="dateRange">
                                                <img src="images/calendar-icon.svg" class="svg">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                    		<div class="form-group">
                                                <label>FUNDING</label>
                                                <div class="select">
													<select>
														<option>Select</option>
														<option>Private</option>
														<option>LA Top Up</option>
														<option>NHS</option>
														<option>FNC</option>
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
                                                <label>Fee Quote</label>
                                                <input type="text" value="" />
                                            </div>
										</div>
                               			<div class="col-md-4">
                               				<div class="form-group">
                                                <label>Council contact details</label>
                                                <input type="text" />
                                            </div>
										</div>
									</div>

                            		<div class="row">
                            			<div class="col-md-12">
                               				<div class="form-group">
                                                <label>Other information</label>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>
	<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/jquery.maphilight.min.js"></script>
    <script src="js/custom.js"></script>

<script type="text/javascript">
	$(function() {
		$('.datetimepicker3').datetimepicker({
		pickDate: false,
		pickSeconds: false,
		});
	});
</script>

    <script>
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
