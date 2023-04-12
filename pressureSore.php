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
            <span class="title">Pressure Sore</span>
        </div>
        <div class="ProfileInfo">
            <img src="images/temp-picture.jpg" class="picture">
            <span class="profileImg"><img src="images/photo-camera.svg" class="svg"></span>
            <ul class="list-unstyled">
                <li>
                    <span>Service User Name</span><br>
                    Terrance Edwards
                </li>
                <li>
                    <span>Date of Birth</span><br>
                    05-04-1974
                </li>
                <li>
                    <span>Client No.</span><br>
                    5921583
                </li>
                <li>
                    <span>Location</span><br>
                    Oxford St.
                </li>
            </ul>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="diseases list-unstyled">
                            <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                        </ul><br>
                        <hr>
                        <img src="images/legends.png" class="legends">
                        <section class="bodyMap">
                            <img src="images/bodyMap.png" class="map" usemap="#bodyMap">
                            <map name="bodyMap">
                              <area position="rsc" data="Right Scapula" shape="rect" coords="490,145,562,218" href="#">
                              <area position="sacrum" data="sacrum" shape="poly" coords="103,359,131,425,147,427,171,359" href="#">
                              <area position="lsc" data="Left Scapula" shape="rect" coords="413,144,486,218" href="#">
                              <area position="reb" data="Right Elbow" shape="poly" coords="602,281,565,284,568,312,610,310" href="#">
                              <area position="leb" data="Left Elbow" shape="poly" coords="373,281,411,283,406,314,366,310" href="#">
                              <area position="rb" data="Right Buttocks" shape="poly" coords="488,356,550,350,564,429,489,425" href="#">
                              <area position="riknee" data="Right Inner Knee" shape="poly" coords="497,541,546,546,548,583,501,579" href="#">
                              <area position="liknee" data="Left Inner Knee" shape="rect" coords="427,544,476,582" href="#">
                              <area position="rk" data="Right Knee" shape="poly" coords="75,524,79,541,81,560,129,581,126,571,128,540" href="#">
                              <area position="lk" data="Left Knee" shape="poly" coords="149,541,197,536,196,553,196,566,148,581,149,564" href="#">
                              <area position="rheel" data="Right Heel" shape="poly" coords="235,733,251,767,279,768,293,732" href="#">
                              <area position="lheel" data="Left Heel" shape="poly" coords="333,736,346,769,374,768,390,737" href="#">
                              <area position="lb" data="Left Buttocks" shape="poly" coords="420,355,486,355,484,429,410,427" href="#">
                              <area position="llowerBack" data="Left Lower Back" shape="poly" coords="429,299,485,299,485,354,421,353,429,327" href="#">
                              <area position="rlowerBack" data="Right Lower Back" shape="poly" coords="487,299,489,353,549,349,546,323,548,301" href="#">
                              <area position="rboheel" data="Right Back of Heel" shape="poly" coords="496,752,495,765,498,788,514,789,527,787,548,788,539,772,530,751" href="#">
                              <area position="lboheel" data="Left Back of Heel" shape="poly" coords="443,754,479,754,480,775,473,789,458,789,444,787,430,787,436,770" href="#">
                          </map>
                            <p>&nbsp;</p>
                      </section>
                    </div>
                    <div class="col-md-8">
                        <form class="inBodyForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" id="location">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label>Report Date</label>
                                        <input type="text" name="dateRange" placeholder="Date">
                                        <img src="images/calendar-icon.svg" class="calendar svg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type of Wound</label>
                                        <div class="select">
                                            <select>
                                                <option>Select</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Length<small>(mm)</small></label>
                                                <div class="counter">
                                                    <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                    <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                    <input type="text" maxlength="3" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Width<small>(mm)</small></label>
                                                <div class="counter">
                                                    <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                    <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                    <input type="text" maxlength="3" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Depth<small>(mm)</small></label>
                                                <div class="counter">
                                                    <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                    <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                    <input type="text" maxlength="3" value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Add to Daily Notes / Communication Book</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
                                            <label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Add to to-do-list</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="toDoList" id="toDoList" class="ios-toggle">
                                            <label for="toDoList" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Notify Manager</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
                                            <label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Notify Head Office</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="eSign" id="eSign" class="ios-toggle">
                                            <label for="eSign" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Wound Image</label>
                                        <label class="file">Upload<input type="file" class="hidden"></label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-left inPageLinksTitle " style="width: 507px;"> Service User Hub</h5>
                        <ul class="inPageLinks list-unstyled text-left" style="width: 507px;">
                            <li><a href="http://192.168.8.105/care_vision/public/careplan/sova">SOVA</a></li>
                            <li><a href="http://192.168.8.105/care_vision/public/turningchart">Turning Chart</a></li>
                            <li><a href="http://192.168.8.105/care_vision/public/newassessment/waterlow">Waterlow</a></li>
                            <li><a href="#">Incident &amp; Accident</a></li>
                        </ul>
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

    <div class="modal fade toDoListPop" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add to To-Do-List</h4>
                </div>
                <div class="modal-body inBodyForm">
                    <div class="form-group date">
                        <label>Date / Time</label>
                        <input type="text" name="dateRange">
                        <small>Choose date/time of the task</small>
                        <img src="images/calendar-icon.svg" class="calendar svg">
                    </div>
                    <div class="form-group">
                        <label>Alert</label>
                        <span class="toggles fixed">
                            <input type="checkbox" name="alert" id="alert" class="ios-toggle">
                            <label for="alert" class="checkbox-label" data-off="NO" data-on="YES"></label>
                        </span>
                        <small class="clearfix">To show notification on date/time</small>
                    </div>
                    <div class="form-group">
                        <label>Repeat</label>
                        <div class="select">
                            <select>
                                <option></option>
                                <option>Every Hour</option>
                                <option>Every 2 Hours</option>
                                <option>Every 3 Hours</option>
                                <option>Every 4 Hours</option>
                                <option>Every 5 Hours</option>
                                <option>Every 6 Hours</option>
                                <option>Every Day</option>
                                <option>Every Week</option>
                            </select>
                            <img src="images/left-arrow.svg" class="svg">
                        </div>
                        <small>Interval of task to be done</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/jquery.maphilight.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('input[name="dateRange"]').daterangepicker({
            "singleDatePicker": true,
            "timePicker": true,
             "opens": "left",
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY  h:mm A'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        $(".counterBtn").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.hasClass('plus')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find("input").val(newVal);
        });

        $('#toDoList').click(function(){
            if ($('#toDoList').is(':checked')) {
                $('.toDoListPop').modal('show')
            } else {
                $('.toDoListPop').modal('hide')
            }
        });

        $(window).load(function(){
        	$('.map').maphilight();
        	$('.star').click(function(e) {
        		e.preventDefault();
        		var data = $('.star').mouseout().data('maphilight') || {};
        		data.alwaysOn = !data.alwaysOn;
        		$('.star').data('maphilight', data).trigger('alwaysOn.maphilight');
        	});
        	var map = $('[usemap=#bodyMap]');
        	var canvas = $('<canvas width="'+map.width()+'" height="'+map.height()+'" />');
        	canvas.css({
        		position: 'absolute',
        		top: map.position().top,
        		left: map.position().left,
        		pointerEvents: 'none'
        	});

        	$('.bodyMap').append(canvas);
        	var context = canvas[0].getContext('2d');
        	function calculateCenterPoint(areas) {
        		var maxX = 0,
        		minX = Infinity,
        		maxY = 0,
        		minY = Infinity;

        		Array.prototype.forEach.call(areas, function (e) {
        			var i = 0,
        			coords = e.getAttribute('coords').split(',');

        			while (i < coords.length) {
        				var x = parseInt(coords[i++],10),
        				y = parseInt(coords[i++],10);
        				if (x < minX) minX = x;
        				else if (x > maxX) maxX = x;

        				if (y < minY) minY = y;
        				else if (y > maxY) maxY = y;
        			}
        		});
        		return {
        			x: minX + (maxX - minX) / 2,
        			y: minY + (maxY - minY) / 2
        		};
        	}
        	function drawCenter(center, color) {
        		context.clearRect(0,0,canvas.width(),canvas.height());
        		drawOldPoints();
        		context.beginPath();
        		context.arc(center.x, center.y, 6, 0, 2 * Math.PI, false);
        		context.fillStyle = '#'+color+'';
        		context.fill();
        		context.lineWidth = 1;
        		context.strokeStyle = '#FFF';
        		context.stroke();
        	}
        	function drawExistingCenter(center, color) {
        		context.beginPath();
        		context.arc(center.x, center.y, 6, 0, 2 * Math.PI, false);
        		context.fillStyle = '#'+color+'';
        		context.fill();
        		context.lineWidth = 1;
        		context.strokeStyle = '#FFF';
        		context.stroke();
        	}
        	$(document).on('click', 'map area', function (e) {
        		var mapCode = $(this).attr("position");
        		var mapVal = $(this).attr("data");
        		var center = calculateCenterPoint($('area[position="'+mapCode+'"]'));
        		drawCenter(center, "F00");
        		alert(mapVal);
                $('#location').focus();

        	});
        	var ActiveWounds = [{"woundLocation":"LE","color":"00F"},{"woundLocation":"LC","color":"F0F"},{"woundLocation":"RA","color":"0FF"}];
        	drawOldPoints();

        	function drawOldPoints(){
        		ActiveWounds.forEach(function(element) {
        			newCenter = calculateCenterPoint($('area[position="'+element.woundLocation+'"]'));
        			drawExistingCenter(newCenter,element.color);
        		});
        	}
        });
    </script>
</body>
</html>
