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
            <span class="title">Contacts Care</span>
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
                                    	<div class="col-md-9">
                                    		<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<h4>Contact Type</h4>
														<div class="select">
															<select>
																<option value="" selected="selected">Select</option>
																<option>Son</option>
																<option>Daughter</option>
																<option>Spouse</option>
																<option>Solicitor</option>
																<option>Care Manager</option>
																<option>Friend</option>
																<option>GP</option>
																<option>Social Worker</option>
																<option>IMCA</option>
																<option>other</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-4" hidden="">
													<div class="form-group">
														<label>Other</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<hr>
											<h4>Personal Information</h4>
											<div class="row">
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
												<div class="col-md-4">
													<div class="form-group">
														<label>Organisation</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Middle Name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Landline</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Phone (Work)</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Mobile</label>
														<input type="text" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Address</label>
														<input type="text" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Postal Code</label>
														<input type="text" />
													</div>
												</div>
											</div>
                                    	</div>
                                    	<div class="col-md-3 text-center">
                                    		<span class="profileImgLarge" style="display:inline-block;">
												<img src="images/photo-camera.svg" class="svg">
												<label class="update">Upload <input type="file" hidden></label>
												<img src="images/temp-picture.jpg">
											</span>
                                    	</div>
                                    </div>
                                   	<div class="row">
                                   		<div class="col-md-12">
											<div class="form-group">
												<label>Notes</label>
												<textarea></textarea>
											</div>
										</div>
                                   	</div>

                                   	<hr>
                                   	<div class="row">
                                   		<div class="col-md-4">
                                   			<div class="form-group">
                                   				<label>Allocate to Service User</label>
                                   				<div class="select">
                                   					<select>
														<option>Terrance Edwards</option>
														<option>John Smith</option>
														<option>Tony Anderson</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
                                   				</div>
                                   			</div>
                                   		</div>
                                        <div class="col-md-4">
                                            <div class="form-group">
												<label>Next of Kin (NOK)</label>
												<span class="toggles fixed">
													<input type="checkbox" name="consentPatient" id="NOK" class="ios-toggle">
													<label for="NOK" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                        </div>
                                   	</div>
                                   	<div class="row">
                                   		<div class="col-md-6">
                                   			<h4>Power of attorney (POA)</h4>
                                   			<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Power of Attorney</label>
														<div class="select">
															<select>
																<option value="" selected="selected">Select</option>
																<option value="">LPA - Lasting Power of Attorney</option>
																<option value="">CoP - Court of Protection</option>
																<option value="">Other</option>
																<option value="">Pending</option>
																<option value="">N/A</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-6" hidden>
													<div class="form-group">
														<label>&nbsp;</label>
														<input type="text">
													</div>
												</div>
											</div>



											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Applies to</label>
														<div class="select">
															<select>
																<option value="" selected="selected">Select</option>
																<option value="Finance">Finance</option>
																<option value="Health and Welfare">Health and Welfare</option>
																<option value="Health, Welfare and Finance">Health, Welfare and Finance</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Type</label>
														<div class="select">
															<select>
																<option value="" selected="selected">Select</option>
																<option value="Individual Power of Attorney">Individual Power of Attorney</option>
																<option value="">Joint Power of Attorney</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-4" hidden="">
													<div class="form-group">
														<label>Another Name</label>
														<input type="text" />
													</div>
												</div>
											</div>
                                   		</div>
                                   	</div>

                                   	<hr>
                                    <h4>Joint power of attorney (POA) detail <button class="addMultiple" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#relationship"><img src="images/plus.svg" class="svg" /> Add</button></h4>

                                    <div class="row">
                                    	<div class="form-group">
                                    		<div class="col-md-12">
                                    			<table class="table table-striped table-hover" align="center">
													<thead>
														<tr>
															<th>Name</th>
															<th>Relationship</th>
															<th width="60px"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Lorem Ipsum</td>
															<td>Lorem Ipsum</td>
															<td class="text-center"><a href="#" class="canceled"><img src="images/garbage.svg" class="svg" /></a></td>
														</tr>
													</tbody>
												</table>
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

<div id="relationship" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Joint power of attorney (POA)</h4>
			</div>
			<div class="modal-body">
				<form class="inBodyForm">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Name</label>
									<input type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Relationship</label>
									<input type="text">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-primary">Save</button>
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
		$('input[name="date"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });

		$(".select2").select2();
		$(".select2_multi").select2({ closeOnSelect: false});

        $('input[name="date"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="date"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
