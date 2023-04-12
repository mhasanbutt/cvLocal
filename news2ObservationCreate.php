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
				<li><a href="#">Health Stats</a></li>
            </ul>
            <span class="title">NEWS2 Observation</span>
        </div>
    </section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
				<ul class="diseases list-unstyled">
					<li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
					<li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
					<li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
				</ul>

				<form class="inBodyForm">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<span class="newTitle">Temperature</span>
								</div>
								<div class="col-md-4">
									<div class="form-group date">
										<label>Time / Date</label>
										<input type="text" name="dateRange" placeholder="Date">
										<img src="images/calendar-icon.svg" class="calendar svg">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group slideHandles">
										<span class="formInfo">89.6 (<sup>o</sup>F)</span>
										<label>Celsius (<sup>o</sup>C)</label>
										<input type="text" id="temperatureSlider" name="weight" value="37">
									</div>
								</div>
								<div class="col-md-6 text-right">
									<section class="therm" style="margin:21px 0 39px 0;">
										<span class="tempScale"></span>
										<img src="images/thermometer.png">
									</section>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Measured</label>
										<div class="select">
											<select class="" name="MeasuredBy">
												<option value="" selected="selected">Select</option>
												<option value="Oral">By Mouth</option>
												<option value="Forehead">Using Forehead</option>
												<option value="Ear">By Ear</option>
												<option value="Armpit">Under the Armpit</option>
												<option value="By Mouth">By Mouth</option>
												<option value="Using Forehead">Using Forehead</option>
												<option value="By Ear">By Ear</option>
												<option value="Under the Armpit">Under the Armpit</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom:30px;">
									<p class="bmiCalculated">
										Normal
									</p>
								</div>
								<div class="col-md-12">
									<span class="newTitle">Pulse</span>
								</div>
								<div class="col-md-6">
                                    <div class="form-group slideHandles">
                                        <label>Pulse (BPM)</label>
                                        <p class="clearfix"></p>
                                        <input type="text" id="pulseSlider" name="weight" value="">
                                    </div>
                                </div>
								<div class="col-md-4 col-md-offset-2">
									<div class="heart-rate" style="margin-top:-40px;padding-bottom:0;">
										<span class="heartRate">72</span>
										<img src="images/bpm-heart.svg" class="svg heart">
										<img src="images/bpm-graph.svg" class="svg heartBeat">
										<div class="fade-in"></div>
										<div class="fade-out"></div>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom:30px;">
                                    <p class="bmiCalculated">
                                        72 <small>BPM</small>
                                    </p>
                                    <small class="bmiCriteria">Normal = 60 bpm - 100bpm</small>
                                </div>
								<div class="col-md-12">
									<span class="newTitle">Respiration</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-3">
											<label for="">Breaths (per minute)</label>
											<input type="text" name="" id="">
										</div>
										<div class="col-md-3">
											<label for="">Position</label>
											<select id="position" name="position">
												<option value="" selected="selected">Select</option>
												<option value="Standing">Standing</option>
												<option value="Seated">Seated</option>
												<option value="Lying">Lying</option>
											</select>
										</div>
										<div class="col-md-12">
											<p class="bmiCalculated">Normal 12-20</p>
											<small class="bmiCriteria">Normal &gt;= 95</small>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<article class="respiratory" style="transform: translate(40%, -26%);">
										<span content="20 bpm">Respiratory Rate</span>
										<img src="https://jawa.linksdev.co.uk/images/respiratoryrate.gif">
									</article>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<span class="newTitle">Blood Pressure</span>
								</div>
								<div class="col-md-6">
									<div class="form-group slideHandles">
										<label>Systolic</label>
										<p class="clearfix"></p>
										<input type="text" id="systolicSlider" name="weight" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group slideHandles">
										<label>Diastolic</label>
										<p class="clearfix"></p>
										<input type="text" id="diastolicSlider" name="weight" value="">
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom:30px;">
                                    <p class="bmiCalculated">
                                        Normal <small>BP</small>
                                    </p>
                                </div>
								<div class="col-md-12">
									<span class="newTitle">Blood Oxygen</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group slideHandles">
												<label>Saturation Level</label>
												<p class="clearfix"></p>
												<input type="text" id="bloodOxy" name="weight" value="">
											</div>
										</div>
										<div class="col-md-12" style="margin-bottom:30px;">
											<p class="bmiCalculated">
												Normal - 95%
											</p>
											<small class="bmiCriteria">Normal >= 95 %</small>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<article class="bloodOxy" style="display:inline-block;">
										<span>100<i>%</i></span>
										<img src="images/bloodoxy.png">
									</article>
								</div>
								
								<div class="col-md-12">
									<span class="newTitle">Conciousness</span>
								</div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label>Level of Consciousness</label>
                                        <div class="select">
                                            <select class="StatusForPrint" name="level">
                                            	<option value="alert">Alert</option>
                                            	<option value="new_confusion">New Confusion</option>
                                            	<option value="voice">Voice</option>
                                            	<option value="pain">Pain</option>
                                            	<option value="unresponsive">Unresponsive</option>
                                            	<option value="other">Other</option>
                                            </select>
                                            <!--?xml version="1.0" encoding="utf-8"?-->
											<svg
                                            	xmlns="http://www.w3.org/2000/svg"
                                            	xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                            	viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="512px"
                                            	height="512px">
                                            	<g>
                                            		<path
                                            			d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"
                                            			fill="#999999"></path>
                                            	</g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
						<hr style="display:block;width:100%;">
						<div class="col-md-10">
							<div class="form-group date">
								<label>Comments</label>
								<textarea></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Create Follow Up</label>
								<span class="toggles fixed">
									<input type="checkbox" name="toDoList" id="toDoList" class="ios-toggle">
									<label for="toDoList" class="checkbox-label" data-off="NO" data-on="YES"></label>
								</span>
							</div>
						</div>
					</div>
					
					<div class="ctas">
						<button>Back</button> <button class="green">Save</button> <button class="blue">Save &amp; Print</button>
					</div>
				</form>
            </div>
        </div>
    </section>

    <div class="pop" id="witByPop">
        <div>
            <section>
                <article style="width:380px;">
                    <span class="popFuse" data-close="witBy"></span>
                    <span class="title">Witnessed By</span>
                    
                    <ul class="form list-unstyled clearfix">
                        <li>
                            <span class="title">Username</span>
                            <input type="text" name="" id="" >
                        </li>

                        <li>
                            <span class="title">Password</span>
                            <input type="password" name="" id="">
                        </li>
                    </ul>

                    <div class="ctas">
                        <button style="background-color:#7992B6;color:#FFF;">Verify</button> <button class="popClose" data-close="witBy">Close</button>
                    </div>
                </article>
            </section>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
	<script src="js/moment.min.js"></script>
    <script src="js/datepicker-2.1.25.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/select2.min.js"></script>
	<script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.assocMap').on('click',function(){
            $(this).next('div').addClass('show');
        });

        $('.mapChoice i').on('click', function(){
            $(this).parent().removeClass('show');
        });

        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });

        $('.autoPop').daterangepicker({
            "singleDatePicker": true,
            autoUpdateInput: true
        });

        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        $('.select2').select2();

        $('[type=checkbox]').on('change', function(){
            var checkID = $(this).attr('id');

            if($(this).is(':checked')){
                $('.' + checkID + 'Hidden').show();
            } else {
                $('.' + checkID + 'Hidden').hide();
            }
        });

        $('[type=checkbox]').on('change', function(){
            var checkID = $(this).attr('id');
            $('#' + checkID + 'Pop').css('display', 'table');
        });

        $('.popFuse, .popClose').click(function(){
            var popID = $(this).attr('data-close');
            $('#' + popID + 'Pop').css('display', 'none');
            $('#' + popID).prop("checked", false);
        });

        $('.informedSection .btnGroup input[type=radio]').on('change', function(){
            var informedID = $(this).attr('id');
            var informedName = $(this).attr('name');

            if($(this).attr('name') == informedID){
                $('#' + informedName + 'Date').show();
            } else {
                $('#' + informedName + 'Date').hide();
            }
        });

        $('input[name=associateChoice]').on('change', function(){
            if($(this).is(':checked') && $(this).attr('id') == "assInj"){
                $('.or').hide();
                $('.associate:nth-of-type(2)').hide();
            } else if($(this).is(':checked') && $(this).attr('id') == "assPUlcer") {
                $('.or').hide();
                $('.associate:nth-of-type(1)').hide();
            } else {
                $('.or').show();
                $('.associate').show();
            }
        });

		$("#temperatureSlider").ionRangeSlider({
            min: 35,
            max: 42,
            force_edges: true,
            postfix: ' <sup>o</sup>C',
            step: 0.1
        });

		$("#pulseSlider").ionRangeSlider({
            min: 60,
            max: 100,
            force_edges: true,
            postfix: ' bpm'
        });

		$("#systolicSlider").ionRangeSlider({
            min: 0,
            max: 300,
            force_edges: true,
            postfix: ' mm Hg'
        });
        $("#diastolicSlider").ionRangeSlider({
            min: 0,
            max: 300,
            force_edges: true,
            postfix: ' mm Hg'
        });

		$("#bloodOxy").ionRangeSlider({
			min: 60,
			max: 100,
			force_edges: true,
			postfix: ' bpm'
		});
    </script>
</body>
</html>
