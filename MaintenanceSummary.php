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
                <li><a href="#">Maintenanace</a></li>
            </ul>
            <span class="title">Maintenance Summary</span>
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
														<label>Floor</label>
														<div class="select">
															<select disabled class="disabled">
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>Other</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Area</label>
														<div class="select">
															<select disabled class="disabled">
																<option>Room 11</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>Other</option>
															</select>
															<img src="images/left-arrow.svg" class="svg">
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Header</label>
														<input type="text" class="disabled" disabled value="Toilet is blocked">
													</div>
												</div>
											</div>
                                    		<div class="row">
                                    			<div class="col-md-12">
													<div class="form-group">
														<label>Description of maintenance fault</label>
														<textarea class="disabled" disabled>The bowl is also loose.</textarea>
													</div>
												</div>
                                    		</div>
                                    		<div class="row">
                                    			<div class="col-md-4">
													<div class="form-group">
														<label>Task Status</label>
														<div class="radioButton">
															<input type="radio" id="pending" name="tstatus" />
															<label for="pending"><span></span>Pending</label>
														</div>
														<div class="radioButton">
															<input type="radio" id="Completed" name="tstatus" />
															<label for="Completed"><span></span>Completed</label>
														</div>
													</div>
                                   				</div>
                                   				<div class="col-md-4">
													<div class="form-group">
														<label>Report to Management</label>
														<span class="toggles fixed">
															<input type="checkbox" name="management" id="rManagement" class="ios-toggle">
															<label for="rManagement" class="checkbox-label" data-off="NO" data-on="YES"></label>
														</span>
													</div>
                                   				</div>
                                    		</div>
                                    	</div>
<style>
	.MSummaryimage{
		width: 100%;
		border-radius: 4px;
		height: auto;
	}
	.radioButton{
		float: left;
		margin-right: 15px;
		margin-top: 12px;
		cursor: pointer;
	}
	.radioButton input[type="radio"] {
    display:none;
}
.radioButton input[type="radio"] + label span {
    display:inline-block;
    width:19px;
	border-radius: 100%;
    height:19px;
    margin:0px 5px 0 0;
    vertical-align:middle;
	border: solid 2px #ACB6B6;
    cursor:pointer;
	-webkit-transition: all 300ms linear;
	-moz-transition: all 300ms linear;
	-ms-transition: all 300ms linear;
	-o-transition: all 300ms linear;
	transition: all 300ms linear;
}

.radioButton input[type="radio"]:checked + label span {
    background:#3DA492;
	border-color:#3DA492;
	position: relative;
	-webkit-transition: all 300ms linear;
	-moz-transition: all 300ms linear;
	-ms-transition: all 300ms linear;
	-o-transition: all 300ms linear;
	transition: all 300ms linear;
}
.radioButton input[type="radio"]:checked + label span:before{
	position: absolute;
	content: "";
	width: 11px;
	height: 11px;
	background: #fff;
	border-radius: 100%;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto;
	display: block;
	-webkit-transition: all 300ms linear;
	-moz-transition: all 300ms linear;
	-ms-transition: all 300ms linear;
	-o-transition: all 300ms linear;
	transition: all 300ms linear;
	
}
</style>
                                    	<div class="col-md-3 text-center">
                                    		<img src="images/staff1.jpg" class="MSummaryimage" />
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
                <button type="button">Back</button> <button type="button">Verify</button> <button type="button" class="save">Complete</button>
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
