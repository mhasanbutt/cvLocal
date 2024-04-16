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
    <style>

        *{
            font-family: "Poppins", sans-serif;
            box-sizing: border-box;
        }
        .searchinrota{
            height: 33px;
            background-color: #fff;
            padding: 0 0 0 38px;
            background-repeat: no-repeat;
            background-position: left 12px center;
            background-image: url("images/rotaSearch.png");
            border: none;
            border-radius: 7px;
            background-size: 18px;
        }
        .selectevent{
            border: none;
            font-size: 13px;
            float: left;
            height: 33px;
        }
        .chngedisplay{
            background-color: #404455;
            border-radius: 6px;
            color: #fff;
            font-size: 8px;
            margin-top: 5px;
            padding: 0 6px;
            margin-left: 6px;
            font-weight: 600;
        }
        .searchinrota .rosterbtn{
            border: 0;
            border-left: 1px solid lightgrey;
            font-size: 12px;
            margin-top: 6px;
        }
        .selectorofweeks{
            height: 38px;
            float: right;
            padding-top: 11px;
            position: relative;
            margin-left: 20px;
            margin-top: 5px;
        }
        .prebtn{
            background-image: url("images/leftArrowWeekRotation.png");
            height: 17px;
            width: 17px;
            border: 0;
            background-position: center;
            position: absolute;
            background-color: transparent;
            top: 13px;
            background-repeat: no-repeat;
            background-size: 14px;
            left: 5px;

        }
        .selectorofweeks span{
            border: 1px solid #DDD;
            background-color: #FFF;
            border-radius: 6px;
            width: 100%;
            padding: 8px 30px 8px 60px;
            line-height: 18px;
            font-size: 12px;
            background-image: url("images/calendarIconWeekRotation.png");
            background-repeat: no-repeat;
            background-position: left 29px center;
            background-size: 24px;
        }
        .yearcalendar{
            font-style: normal;
            color: #5087a8;
        }
        .nextbtn{
            background-image: url("images/rightArrowWeekRotation.png");
            height: 17px;
            width: 17px;
            border: 0;
            background-position: center;
            position: absolute;
            background-color: transparent;
            border-radius: 5px;
            top: 13px;
            right: 7px;
            left: auto;
            background-repeat: no-repeat;
            background-size: 14px;
        }
        .rotacategory{
            float: right;
            padding-top: 15px;
            margin: 0;
        }
        .rotacategory li{
            float: left;
            border-bottom: 1px solid lightgrey;
        }
        .rotacategory li .overallbtn{
            background-image: url("images/calendarRota.png");
        }
        .rotacategory li a{
            color: #5E616E;
            line-height: 25px;
            padding: 0 6px 0 35px;
            font-size: 12px;
            position: relative;
            background-size: 20px;
            background-repeat: no-repeat;
            background-position: left 10px center;
        }
        a.holiday{
            background-image: url("images/holidaysRota.png");
        }
        a.payrolls{
            background-image: url("images/payrollRota.png");
        }
        .newrotasec{
            padding-right: 15px;
        }
        .daysinrota{
            height: 25px;
            margin-bottom: 6px;
            overflow: hidden;
        }
        .daysinrota ul li{
            background-color: rgb(119, 141, 169);
            width: calc((100% - 35px) / 7);
            padding: 2px;
            height: 24px;
            border-radius: 6px;
            color: #EDF2F4;
            font-weight: 500;
            font-size: 12px;
            line-height: 20px;
            transition: all 200ms linear;
            float: left;
            margin-right: 5.5px;
        }
        .daysinrota ul li:last-child{
            margin-right: 0;
        }
        .daysinrota ul li i{
            float: left;
            height: 20px;
            border-radius: 5px;
            width: 20px;
            text-align: center;
            font-size: 11px;
            line-height: 13px;
            padding: 4px 0;
            color: #1C3C4B;
            background-color: #EDF2F4;
            margin-right: 5px;
            font-style: normal;
            font-weight: 500;
        }
        .Shiftsopen{
            padding-right: 15px;
            margin-bottom: 5px;
        }
        .Shiftsopen .title-shift{
            background-color: #004564;
            display: block;
            height: 30px;
            border-radius: 6px;
            font-size: 14px;
            line-height: 18px;
            padding: 6px 10px;
            font-weight: 500;
            color: #FFF;
            margin-bottom: 5px;
        }
        .newrotasec .scroll-wrapper{
            top: 30px;
        }
        .Shiftsopen .title-shift i{
            font-size: 12px;
            font-weight: 500;
            font-style: normal;
            float: right;
            padding-right: 19px;
            background-size: 15px;
            background-repeat: no-repeat;
            background-position: right center;
            background-image: url("images/showAllArrow.png");
            cursor: pointer;
            color: #778DA9;
        }
        .newrotasec .roster-rota{
            overflow: hidden;
        }
        .newrotasec .roster-rota ul{
            margin: 0;
            display: flex;
        }
        .newrotasec .roster-rota ul li:first-child{
            margin-left: 0;
        }
        .newrotasec .roster-rota ul li{
            margin-left: 5px;
            width: calc((100% - 30px) / 7);
            float: left;
        }

        .roster-rota ul li .Addto{
            display: block;
            height: 100%;
            min-height: 90px;
            position: relative;
            border: 1px solid #BED1E8;
            border-radius: 6px;
            background-color: #FFF;
            cursor: pointer;
        }
        .roster-rota ul li .Addto:before{
            position: absolute;
            content: "+";
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            color: #BED1E8;
            font-size: 32px;
            font-style: normal;
            font-weight: 300;
        }
        .roster-rota ul li .resthidden{
            margin-bottom: 52px;
        }
        .roster-rota ul li .shiftinfo{
            height: 90px;
            margin-bottom: 5px;
            background-color: #E9EDC9;
            border-radius: 6px;
            position: relative;
            cursor: pointer;
        }
        .roster-rota ul li .hour{
            display: block;
            height: 46px;
            padding: 11px;
            line-height: 26px;
            font-size: 17px;
            font-weight: 500;
        }
        .roster-rota ul li .hour i{
            font-style: normal;
            color: #778DA9;
            font-weight: 300;
        }
        .roster-rota ul li .location-rota{
            height: 45px;
            border-radius: 0 0 6px 6px;
            font-size: 14px;
            font-weight: 600;
            color: #004564;
            line-height: 21px;
            padding: 12px 10px;
            background-color: #CCD5AE;
            display: block;
        }
        .roster-rota ul li .resthidden:after{
            height: 42.5px;
            line-height: 42.5px;
            width: 100%;
            border: 1px solid #BED1E8;
            border-radius: 6px;
            background-color: #FFF;
            position: absolute;
            content: attr(data-siblings);
            left: 50%;
            top: calc(100% + 5px);
            transform: translate(-50%, 0);
            font-size: 12px;
            color: #004564;
            font-weight: 400;
            text-align: center;
        }
        .roster-rota ul li .shiftinfo + .Addto{
            height: auto;
        }
        .roster-rota ul li .shiftinfo .resthidden ~.Addto{
            min-height: 42px;
        }
        .roster-rota ul li .showarea .resthidden ~.Addto{
            min-height: 172px;
        }
        .roster-rota ul li .shiftsmoreinfo + moreinfo{
            height: auto;
        }
        .newrotasec .staffofShifts{
            padding-right: 15px;
        }
        .newrotasec .staffofShifts .staffinfo{
            background-color: #004564;
            border-radius: 6px;
            height: 50px;
            padding-right: 10px;
            text-align: right;
            font-family: "Poppins", sans-serif;
            margin-bottom: 5px;
        }
        .newrotasec .staffofShifts .staffinfo .staff-sec{
            float: left;
            height: 50px;
            position: relative;
            white-space: nowrap;
            padding-right: 44px;
        }
        .staffofShifts .staffinfo .staff-sec .picture-staff{
            float: left;
            height: 50px;
            width: 50px;
            border-radius: 6px;
            box-shadow: 2px 0 4px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            margin-right: 15px;
        }
        .staffofShifts .staffinfo .staff-sec .picture-staff img{
            width: 50px;
            height: 50px;
        }
        .staffofShifts .staffinfo .staff-sec .staff-name{
            float: left;
            width: calc(100% - 65px);
            color: #FFF;
            font-size: 14px;
            font-weight: 500;
            margin-top: 5px;
            text-align: left;
        }

        .staffofShifts .staffinfo .staff-sec .staff-designation{
            font-weight: 300;
            margin-top: 0;
            float: left;
            width: calc(100% - 65px);
            color: #FFF;
            font-size: 14px;
            text-align: left;
        }
        .staffofShifts .staffinfo .staff-sec .moreInfostaff{
            position: absolute;
            right: 0;
            top: 13px;
            height: 24px;
            width: 24px;
            background-image: url("images/eMarMoreInfo.png");
            background-size: 24px;
            background-repeat: no-repeat;
            background-position: center;
            cursor: pointer;
        }
        .newrotasec .staffofShifts .infoPopstaff{
            position: absolute;
            background-color: #EDF2F4;
            border: 2px solid #778DA9;
            border-radius: 6px;
            padding: 5px;
            z-index: 2;
            left: -10px;
            bottom: calc(100% - 5px);
            transition: all 200ms linear;

        }
        .newrotasec .staffofShifts .infoPopstaff ul{
            display: flex;
            margin: 0;
        }
        .newrotasec .staffofShifts .infoPopstaff:after{
            position: absolute;
            content: "";
            left: 15px;
            top: calc(100% - 3px);
            height: 12px;
            width: 12px;
            background-image: url("images/rotaMoreInfoArrow.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 12px;
        }
        .infoPopstaff ul li:first-child{
            border-left: 0;
        }
        .infoPopstaff ul li span.duty-hours{
            font-weight: 500;
            font-size: 14px;
            line-height: 18px;
            margin-bottom: 5px;
            white-space: nowrap;
            text-transform: none;
        }
        .infoPopstaff ul li span{
            display: block;
            font-size: 10px;
            font-weight: 300;
            color: #778DA9;
            line-height: 12px;
            text-transform: uppercase;
        }
        .infoPopstaff ul li{
            display: inline-block;
            padding: 5px 10px;
            text-align: center;
            border-left: 1px solid #BDE0FE;
            white-space: normal;
        }
        .infoPopstaff ul li ul{
            background-color: #778DA9;
            border-radius: 4px;
        }
        .infoPopstaff ul li:last-child{
            padding: 5px 10px;
            border-left: 1px solid #BDE0FE
        }
        .infoPopstaff ul li ul li span{
            color: #EDF2F4;
        }
        .newrotasec .staffofShifts .staffinfo .hoursInfomation{
            color: #E26D5C;
            font-size: 14px;
            line-height: 18px;
            padding: 16px 0;
            display: inline-block;
        }
        .newrotasec .staffofShifts .staffinfo .conflict{
            color: #EDF2F4;
            font-weight: 600;
            margin-left: 50px;
            padding-left: 29px;
            background-image: url("images/warning.png");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: 24px;
        }


    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <?php include("sideNav.php"); ?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <i class="list-unstyled">
                <li>Rota</li>
            </i>
            <span class="title"><img src="images/day.png"> Rota Management</span>
        </div>
        <div class="filtersSearch clearfix autoWidth">
            <form>
                <div class="searchinrota">
                    <select class="selectevent disabled">
                        <option>3-3 Leander Lodge</option>
                        <option>9-9 thorten Lodge</option>
                    </select>

                    <button class="chngedisplay" type="button">Change</button>

                    <select class="rosterbtn">
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
        <div class="selectorofweeks">
            <button class="prebtn"></button>
            <span>6 Aug-12 Aug,<i class="yearcalendar">2023</i></span>
            <button class="nextbtn"></button>
        </div>

        <ul class="rotacategory list-unstyled clearfix">
            <li><a href="#" class="overallbtn active">Overall</a></li>
            <li><a href="#" class="holiday">Holidays</a></li>
            <li><a href="#" class="payrolls">Payroll</a></li>
        </ul>
    </section>

    <section class="contentBody noBg noFooter">
        <div class="newrotasec">
            <div class="daysinrota">
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
            <div class="scrollArea scroll-wrapper">
                <div class="Shiftsopen">
                    <span class="title-shift">Open Shifts <i>Show All</i></span>

                    <div class="roster-rota">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <i class="Addto"></i>
                            </li>
                            <li>
                                <div class="shiftinfo" data-siblings="">
                                    <span class="hour">08:00-17:00 <i>9h</i></span>
                                    <span class="location-rota">N-Edwardes Square</span>
                                </div>
                                <i class="Addto styled1"></i>
                            </li>
                            <li>
                                <div class="shiftinfo resthidden" data-siblings="">
                                    <span class="hour">08:00-17:00 <i>9h</i></span>
                                    <span class="location-rota">N-Edwardes Square</span>
                                </div>
                                <div class="shiftinfo">
                                    <span class="hour">08:00-17:00 <i>9h</i></span>
                                    <span class="location-rota">N-Edwardes Square</span>
                                </div>
                                <div class="shiftinfo">
                                    <span class="hour">08:00-17:00 <i>9h</i></span>
                                    <span class="location-rota">N-Edwardes Square</span>
                                </div>
                                <i class="Addto styled"></i>
                            </li>
                            <li>
                                <i class="Addto"></i>
                            </li>
                            <li>
                                <i class="Addto"></i>
                            </li>
                            <li>
                                <i class="Addto"></i>
                            </li>
                            <li>
                                <i class="Addto"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="staffofShifts">
                    <div class="staffinfo">
                        <div class="staff-sec">
                            <span class="picture-staff"><img src="images/temp-picture.jpg"></span>
                            <span class="staff-name">Peter M</span>
                            <span class="staff-designation">Driver</span>
                            <div class="moreInfostaff">
                                <i></i>
                                <div class="infoPopstaff">
                                    <ul class="list-unstyled clearfix">
                                        <li>
                                            <span class="duty-hours">14:00hrs</span>
                                            <span>Allocated<br>Hours</span>
                                        </li>
                                        <li>
                                            <span class="duty-hours">8:30hrs</span>
                                            <span>Other<br>Floors</span>
                                        </li>
                                        <li>
                                            <span class="duty-hours">22:30hrs</span>
                                            <span>Total<br>Hours</span>
                                        </li>
                                        <li>
                                            <span class="duty-hours">26:00hrs</span>
                                            <span>Contract<br>Hours</span>
                                        </li>
                                        <li>
                                            <ul class="list-unstyled clearfix">
                                                <li>
                                                    <span class="duty-hours">06:00hrs</span>
                                                    <span>Over<br>Time</span>
                                                </li>
                                                <li>
                                                    <span class="duty-hours">00:00hrs</span>
                                                    <span>Early<br>Leave</span>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span class="hoursInfomation">Below Contracted Hours</span>

                        <span class="conflict">1 conflicts(s)</span>
                    </div>
                    <div class="roster-rota">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <div class="shiftinfo">
                                    <span class="hour">17:00<i>9h</i></span>
                                    <span class="location-rota">HMI</span>
                                    <div class="infoPopstaff">
                                        <ul class="list-unstyled clearfix">
                                            <li>
                                                <span class="duty-hours">00:15hrs</span>
                                                <span>Break<br>Time</span>
                                            </li>
                                            <li>
                                                <span class="duty-hours">00:00hrs</span>
                                                <span>Over<br>Time</span>
                                            </li>
                                            <li>
                                                <span class="duty-hours">1-Administrator</span>
                                                <span>Payroll<br>(Rate)</span>
                                            </li>
                                            <li>
                                                <ul class="list-unstyled clearfix">
                                                    <li>
                                                        <span class="duty-hours">06:00hrs</span>
                                                        <span>Over<br>Time</span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function(){
            var heightOfClass2 = $('.styled').height();

            $('.styled1').height(heightOfClass2);
        });
    </script>
</body>
</html>
