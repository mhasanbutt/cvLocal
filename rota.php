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
				<li>Rota</li>
			</ul>
			<span class="title"><img src="images/day.png"> Rota Management</span>
		</div>

        <div class="filtersSearch clearfix autoWidth">
            <form>
                <div class="rotaSearch" data-msg="No Changes to Publish">
                    <select class="populate selected">
                        <option>3-3 Leander Lodge</option>
                        <option>9-9 thorten Lodge</option>
                    </select>

                    <button type="button" class="changeSelection">Change</button>

                    <select>
                        <option>Roster</option>
                        <option>Service Users</option>
                    </select>
                </div>
            </form>

            <div class="dropMenu">
                <span class="openDropMenu">Actions</span>
                <ul class="list-unstyled">
                    <li><a href="#" class="floor">Edit Floors</a></li>
                    <li><a href="#" class="room">Edit Bulk Rooms</a></li>
                    <li><a href="#" class="print">Print</a></li>
                </ul>
            </div>

            <a class="new icon" href="#">Shift</a>
        </div>

        <div class="weekSelector">
            <button class="next"></button>
            <input type="text" value="24 DEC - 30 DEC">
            <button class="prev"></button>
        </div>

        <ul class="staffRotaCategory list-unstyled clearfix">
            <li><a href="#" class="overall active">Overall</a></li>
            <li><a href="#" class="holidays">Holidays</a></li>
            <li><a href="#" class="payroll">Payroll</a></li>
        </ul>
	</section>

	<section class="contentBody noBg noFooter">
        <div class="newRota">
            <div class="rotaDays">
                <ul class="list-unstyled clearfix">
                    <li><i>18</i> Monday</li>
                    <li><i>19</i> Tuesday</li>
                    <li><i>20</i> Wednesday</li>
                    <li><i>21</i> Thursday</li>
                    <li><i>22</i> Friday</li>
                    <li><i>23</i> Saturday</li>
                    <li><i>24</i> Sunday</li>
                </ul>
            </div>

            <div class="scrollArea">
                <div class="openShifts">
                    <span class="title">Open Shifts <i>Show All</i></span>

                    <div class="roster">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <div class="shiftInfo" data-siblings="">
                                    <span class="hours">08:00-17:00 <i>9h</i></span>
                                    <span class="location">N-Edwardes Square</span>
                                </div>
                                <div class="shiftInfo">
                                    <span class="hours">08:00-17:00 <i>9h</i></span>
                                    <span class="location">N-Edwardes Square</span>
                                </div>
                                <div class="shiftInfo">
                                    <span class="hours">08:00-17:00 <i>9h</i></span>
                                    <span class="location">N-Edwardes Square</span>
                                </div>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="staffShifts">
                    <div class="staffInfo">
                        <div class="staff">
                            <span class="picture"><img src="images/temp-picture.jpg"></span>
                            <span class="name">Peter M</span>
                            <span class="designation">Driver</span>
                            <div class="moreInfo">
                                <i></i>
                                <div class="infoPop">
                                    <ul class="list-unstyled clearfix">
                                        <li>
                                            <span class="hours">14:00hrs</span>
                                            <span>Allocated<br>Hours</span>
                                        </li>
                                        <li>
                                            <span class="hours">8:30hrs</span>
                                            <span>Other<br>Floors</span>
                                        </li>
                                        <li>
                                            <span class="hours">22:30hrs</span>
                                            <span>Total<br>Hours</span>
                                        </li>
                                        <li>
                                            <span class="hours">26:00hrs</span>
                                            <span>Contract<br>Hours</span>
                                        </li>
                                        <li>
                                            <ul class="list-unstyled clearfix">
                                                <li>
                                                    <span class="hours">06:00hrs</span>
                                                    <span>Over<br>Time</span>
                                                </li>
                                                <li>
                                                    <span class="hours">00:00hrs</span>
                                                    <span>Early<br>Leave</span>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <span class="hoursInfo">Below Contracted Hours</span>

                        <span class="conflicts">1 conflicts(s)</span>
                    </div>

                    <div class="roster">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <div class="shiftInfo" data-siblings="">
                                    <span class="hours">08:00-17:00 <i>9h</i></span>
                                    <span class="location">HM1</span>
                                    <div class="infoPop">
                                        <ul class="list-unstyled clearfix">
                                            <li>
                                                <span class="hours">00:15hrs</span>
                                                <span>Break<br>Time</span>
                                            </li>
                                            <li>
                                                <span class="hours">00:00hrs</span>
                                                <span>Over<br>Time</span>
                                            </li>
                                            <li>
                                                <span class="hours">1-Administrator</span>
                                                <span>Payroll<br>(Rate)</span>
                                            </li>
                                            <li>
                                                <ul class="list-unstyled clearfix">
                                                    <li>
                                                        <span class="hours">06:00hrs</span>
                                                        <span>Over<br>Time</span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="shiftInfo">
                                    <span class="hours">08:00-17:00 <i>9h</i></span>
                                    <span class="location">DRI</span>
                                </div>

                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <div class="shiftInfo onLeave">
                                    <span class="hours">08:00-17:00 <i>9h</i></span>
                                    <span class="location">DRI</span>
                                </div>

                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                            <li>
                                <i class="toAdd"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="js/custom.js"></script>
<script>
    let dateDay = new Date().getDate().toString();
    let toDay = $(".rotaDays ul li");

    $(toDay).each(function(){
        if($(this).children("i").text() === dateDay) {
            $(this).addClass('today');
        }
    });

    $(".changeSelection").click(function(){
        $(this).siblings('select').removeClass('selected');
        $(this).hide(100);
    });

    $(".populate").on('change', function(){
        $(this).addClass('selected');
        $(this).next('button').show(100);
    });

    let catchShiftInfo = $(".openShifts .roster ul li .shiftInfo");
    let rosterCount = catchShiftInfo.length;
    let toDisplayCount = rosterCount - 1;
    catchShiftInfo.eq(0).addClass('restHidden').attr('data-siblings', "+ " +toDisplayCount+ " more");
    catchShiftInfo.not(':eq(0)').slideUp();

    $(".openShifts").click(function(){
        catchShiftInfo.eq(0).toggleClass('restHidden')
        catchShiftInfo.not(':eq(0)').slideToggle();
    });

    $(".roster ul li").mouseenter(function(){
        var hoverBox = $(this).index();
        $(".rotaDays ul li").eq(hoverBox).css('background-color', '#414d5c')
    }).mouseleave(function(){
        $(".rotaDays ul li").css('background-color', '#778da9')
    });
</script>
</body>

</html>