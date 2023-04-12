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
                <li><a href="#">Houskeeping</a></li>
            </ul>
            <span class="title">Scheduled Cleaning</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="inBodyForm">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Select Floor</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option>Floor 1</option>
														<option>Floor 2</option>
														<option>Floor 3</option>
														<option>Floor 4</option>
														<option>Floor 5</option>
														<option>Floor 6</option>
														<option>Floor 7</option>
														<option>Floor 8</option>
														<option>Floor 9</option>
														<option>Floor 10</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Select Room</label>
												<div class="select">
													<select>
														<option value="" selected="selected">Select</option>
														<option>ROOM A-1</option>
														<option>ROOM A-2</option>
														<option>ROOM A-3</option>
														<option>ROOM A-4</option>
														<option>ROOM A-5</option>
														<option>ROOM A-6</option>
														<option>ROOM A-7</option>
														<option>ROOM A-8</option>
														<option>ROOM A-9</option>
														<option>ROOM A-10</option>
													</select>
													<img src="images/left-arrow.svg" class="svg">
												</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">&nbsp;</label>
                                                <button type="button" class="formButton orange">Show</button>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <h4>Tasks Outstanding</h4>

                                    <div class="row">
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                 				<label>Make Bed</label>
                                 				<span class="toggles fixed">
													<input type="checkbox" name="consentPatient" id="jobOffered" class="ios-toggle">
													<label for="jobOffered" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                 				<label>Change Kylie Sheet</label>
                                 				<span class="toggles fixed">
													<input type="checkbox" name="ChangeKylie" id="ChangeKylie" class="ios-toggle">
													<label for="ChangeKylie" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                 				<label>Hoover</label>
                                 				<span class="toggles fixed">
													<input type="checkbox" name="ChangeKylie" id="Hoover" class="ios-toggle">
													<label for="Hoover" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                 				<label>Dust Room</label>
                                 				<span class="toggles fixed">
													<input type="checkbox" name="ChangeKylie" id="DustRoom" class="ios-toggle">
													<label for="DustRoom" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    </div>

                                    <div class="row">
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                 				<label>Empty Bins</label>
                                 				<span class="toggles fixed">
													<input type="checkbox" name="ChangeKylie" id="Bins" class="ios-toggle">
													<label for="Bins" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                 				<label>Mop Floor</label>
                                 				<span class="toggles fixed">
													<input type="checkbox" name="ChangeKylie" id="MopFloor" class="ios-toggle">
													<label for="MopFloor" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                 				<label>Nurse Call Bell Checked</label>
                                 				<span class="toggles fixed">
													<input type="checkbox" name="ChangeKylie" id="BellChecked" class="ios-toggle">
													<label for="BellChecked" class="checkbox-label" data-off="NO" data-on="YES"></label>
												</span>
											</div>
                                    	</div>
                                    	<div class="col-md-3">
                                    		<div class="form-group">
                                    			<label>Upload Picture(s)</label>
                                    			<label class="file">Upload<input type="file" class="hidden"></label>
											</div>
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
                <button type="button">Back</button> <button type="button" class="save">Task(S) Completed</button>
            </div>
            <div class="col-md-6 text-right"></div>
        </div>
    </section>

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
