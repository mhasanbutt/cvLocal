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
        .menudrop{
            position: relative;
            left: 10px;
        }
        .rotasec{
            padding-right: 7px;
            position: relative;
            bottom: 10px;
        }
        .daysinrota{
            height: 24px;
            margin-bottom: 5px;
            overflow: hidden;
        }
        .li1{
            background-color: rgb(119, 141, 169);
            float: left;
            width: calc((100% - 30px) / 7);
            padding: 2px;
            height: 24px;
            border-radius: 6px;
            color: #EDF2F4;
            font-weight: 500;
            font-size: 12px;
            line-height: 20px;
            margin-left: 3.5px;
        }
        .li1 i{
            float: left;
            height: 20px;
            border-radius: 4px;
            width: 20px;
            text-align: center;
            font-size: 10px;
            line-height: 12px;
            padding: 4px 0;
            color: #1C3C4B;
            background-color: #EDF2F4;
            margin-right: 5px;
            font-style: normal;
            font-weight: 600;
        }
        .shiftsopen{
            margin-top: 19px;
            padding-right: 15px;
            margin-bottom: 5px;
        }

        .title1{
            display: block;
            height: 30px;
            background-color: #004564;
            border-radius: 6px;
            margin-bottom: 5px;
            font-size: 14px;
            line-height: 18px;
            padding: 6px 10px;
            font-weight: 500;
            color: #FFF;
            font-family: "Poppins", sans-serif;
        }
        .title1 i{
            font-size: 10px;
            font-weight: 500;
            color: #778DA9;
            font-style: normal;
            float: right;
            cursor: pointer;
            padding-right: 5px;
        }
        .anotherdiv{

        }
        .anotherdiv ul li{
            width: calc((100% - 35px) / 7);
            float: left;
            position: relative;
        }
        .addtosec{
            display: block;
            height: 100%;
            min-height: 90px;
            background-color: #fff;
            border-radius: 6px;
            border: 1px solid #BED1E8;
            cursor: pointer;
            position: relative;
        }
        .imgshowarrow{
            height: 15px;
            width: 15px;
            float: right;
        }
        .rotalist{
            margin-left: 6px;
        }
        .shiftsofstaff{
            padding-right: 15px;
        }
        .infoofstaff{
            background-color: #004564;
            height: 55px;
            border-radius: 4px;
            margin-bottom: 5px;
            padding-right: 10px;
        }
        .divofstaff{
            float: left;
            height: 50px;
            padding-right: 40px;
            position: relative;
            white-space: nowrap;
        }
        .imgofstaff{
            margin: 0;
            margin-left: 0;
            margin-top: 0;
            padding: 0;
            overflow: hidden;
        }
        .imgofstaff img{

        }
        .nameofstaff{
            color: #fff;
            width: calc(100% - 60px);
            font-size: 15px;
            font-weight: 500;
            margin-top: 5px;
            position: relative;
            bottom: 9px;
        }
        .dutyofstaff{
            color: #fff;
            position: relative;
            font-size: 15px;
            font-weight: 300;
            top: 12px;
            right: 59px;
        }
        .moreinformation{
            position: absolute;
            right: 0;
            top: 13px;
            height: 24px;
            width: 24px;
            background: url("images/eMarMoreInfo.png");
            background-repeat: no-repeat;
            background-position: center;
            cursor: pointer;
            background-size: 24px;
        }
        .moreinformation:hover .moreinformationrota{
            bottom: 100%;
            visibility: visible;
            opacity: 1;
        }
        .infoofhours{
            color: #E26D5C;
            font-size: 17px;
            line-height: 18px;
            padding: 16px 0;
            display: inline-block;
            float: right;
            margin-right: 53px;
            margin-top: 3px;
        }
        .conflict1{
            float: right;
            color: #fff;
            line-height: 18px;
            padding: 16px 0;
            display: inline-block;
            font-size: 16px;
            margin-left: 15px;
            margin-right: 10px;
            margin: 2px 10px 2px 0;
        }

        .searchinrota{
            background-color: #fff;
            border-radius: 4px;
            border: 1px lightgrey solid;
            padding: 5px;
        }
        .searchinrota select{
            border: none;
            font-size: 12px;
        }
        .chngedisplay{
            background-color: #404455 ;
            color: #fff;
            font-size: 8px;
            border-radius: 4px;
            border: 1px solid #404455 ;
            position: relative;
            bottom: 2px;
            margin-right: 2px;
        }
        .searchimg{
            margin-left: 5px;
            margin-right: 7px;
        }
        .selectweeks{
            background-color: #fff;
            border: 1px solid lightgrey;
            float: right;
            padding-top: 5px;
            position: relative;
            height: 35px;
            margin-left: 20px;
            border-radius: 6px;
            margin-right: 15px ;
        }
        .nextbtn{
            border: none;
        }
        .nextbtn img{
            margin-bottom: 3px;
        }
        .prebtn{
            border: none;
        }
        .prebtn img{
            margin-bottom: 3px;
        }
        .selectweeks .yearofcalen{
            font-style: normal;
            color: rgb(119, 141,169);
            margin-left: 3px;
        }

        .rotacategory{
            float: right;
            margin: 0;
            padding-top: 14px;
            padding-bottom: 4px;
            position: relative;
            bottom: 8px;
        }
        .rotacategory li{
            float: left;
            border-bottom: 1px solid #DDD;
        }
        .rotacategory li a{
            color: black;
            font-size: 12px;
            margin-left: 3px
            display: block;
            line-height: 24px;
            position: relative;
            padding-right: 5px;
        }
        .rotacategory li img{
            margin-left: 10px;
            margin-bottom: 4px;
        }
        .shiftinformation{
            height: 90px;
            margin-bottom: 5px;
            background-color: #E9EDC9;
            border-radius: 6px;
            position: relative;
            cursor: pointer;
        }
        .hoursofshifts{
            display: block;
            height: 45px;
            padding: 10px;
            line-height: 25px;
            font-size: 16px;
            font-weight: 500;
        }
        .hoursofshifts i{
            font-weight: 300;
            font-style: normal;
            color: #778DA9;
            margin-left: 3px;
        }
        .locationofstaff{
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
        .moreinformationrota ul li{
            display: inline-block;
            padding: 5px 10px;
            text-align: center;
            white-space: normal;
            border-left: 1px solid #BDE0FE;
        }
        span.hour{
            font-weight: 500;
            font-size: 14px;
            line-height: 18px;
            margin-bottom: 5px;
            white-space: nowrap;
            text-transform: none;
        }
        .moreinformationrota ul li span{
            display: block;
            font-size: 10px;
            font-weight: 300;
            color: #778DA9;
            line-height: 12px;
            text-transform: uppercase;
        }
        .moreinformationrota{
            position: absolute;
            background-color: #EDF2F4;
            border: 2px solid #778DA9;
            border-radius: 6px;
            padding: 5px;
            z-index: 2;
            left: -10px;
            bottom: calc(100% - 5px);
            transition: all 200ms linear;
            opacity: 0;
            visibility: hidden;
        }
        .impportantli{
            background-color: rgb(119, 141, 169);
            border-radius: 5px;
        }
        .impportantli span.imphour{
            color: #fff;
        }
        .shiftsinfo{
            height: 90px;
            margin-bottom: 5px;
            background-color: #E9EDC9;
            border-radius: 6px;
            position: relative;
            cursor: pointer;
            cursor: pointer;
        }
        .shiftsinfo{
            background-color: #BDE0FE;
        }
        span.hour1{
            display: block;
            height: 45px;
            padding: 10px;
            line-height: 25px;
            font-size: 16px;
            font-weight: 500;
        }
        span.hour1 i{
            font-weight: 300;
            font-style: normal;
            color: #778DA9;
        }
        .location1{
            background-color: #A2D2FF;
            height: 45px;
            border-radius: 0 0 6px 6px;
            font-size: 14px;
            font-weight: 600;
            color: #004564;
            line-height: 21px;
            padding: 12px 10px;
            display: block;
        }
        .img1{
            float: right;
        }
        .rotalist .on-leave:before{
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            content: "On Leave";
            backdrop-filter: blur(7px);
            color: #004564;
            font-size: 18px;
            line-height: 24px;
            padding-top: 33px;
            text-align: center;
        }
        .anotherdiv ul{
            margin: 0;
            display: flex;
        }
        .rotalist + .addtosec  {
            height: auto;
        }
        .searchinrota select.selectevent.disabled{
            appearance: none;
            pointer-events: none;
        }
        .liinrota .addtosec img{
            position: absolute;
            top: 46%;
            left: 45%;
        }
        .addtosection2{
            display: block;
            height: 90px;
            background-color: #fff;
            border-radius: 6px;
            border: 1px solid #BED1E8;
            cursor: pointer;
        }
        .addtosection2 img{
            position: absolute;
            top: 69%;
            left: 45%;
        }
        .addtosection3{
            display: block;
            height: 45px;
            background-color: #fff;
            border-radius: 6px;
            border: 1px solid #BED1E8;
            cursor: pointer;
        }
        .addtosection3 span{
            position: absolute;
            top: 58%;
            left: 35%;
            font-style: normal;

        }
        .addtosection4{
            display: block;
            height: 45px;
            background-color: #fff;
            border-radius: 6px;
            border: 1px solid #BED1E8;
            cursor: pointer;
            margin-top: 5px;
        }
        .addtosection4 img{
            position: absolute;
            top: 82%;
            left: 45%;
        }
        .active1{
           padding-right: 5px;

        }
        .searchinrota .rostersec{
            border-left: lightgrey 1px solid;
            padding-left: 7px;
        }
        .list1{
            margin-left: 0;
        }
        .anotherlist{
            margin-left: 0;
        }
        .popupinfo1{
            left: 155px;
            bottom: auto;
            top: 10px;
            position: absolute;
            background-color: #EDF2F4;
            border: 2px solid #778DA9;
            border-radius: 6px;
            padding: 5px;
            z-index: 2;
            width: 400px;
            transition: all 200ms linear;
            opacity: 0;
            visibility: hidden;
        }
        .popupinfo1 ul{
            margin: 0;
            display: flex;
        }
        .popupinfo1 ul li{
            display: inline-block;
            padding: 5px 10px;
            text-align: center;
            border-left: 1px solid #BDE0FE;
            white-space: normal;
        }
        .popupinfo1 ul li:first-child{
            border-left: 0;
        }
        .popupinfo1 span.shifthours1{
            font-weight: 500;
            font-size: 14px;
            line-height: 18px;
            margin-bottom: 5px;
            white-space: nowrap;
            text-transform: none;
            color: #778DA9;
            display: block;
        }
        .popupinfo1 ul li span{
            display: block;
            font-size: 10px;
            font-weight: 300;
            color: #778DA9;
            line-height: 12px;
            text-transform: uppercase;
        }
        .popupinfo1 ul li:last-child{
            padding: 0;
            border-left: 0;
            width: 90px;
        }
        .popupinfo1 ul li ul{
            background-color: #778DA9;
            border-radius: 6px;
        }
        .popupinfo1 ul li ul li:last-child{
            padding: 5px 10px;
            border-left: 1px solid #BDE0FE;
        }
        .adminli{
            position: relative;
            left: 85px;
        }
        .adminli1{
            position: relative;
            left: 28px;
        }
        .adminli2{
            position: relative;
            left: 10px;
        }
        .shiftsinfo:hover .popupinfo1{
            left: 150px;
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Rota</a></li>
        </ul>
        <span class="title" style="font-weight: 500;"><img src="images/day.png">Rota Management</span>
    </div>

    <div class="filtersSearch clearfix autoWidth">
        <form>
            <div class="searchinrota">
                <span class="searchimg">
                    <img src="images/rotaSearch.png" width="20px" height="20px">
                </span>

                <select id="myselect" class="selectevent disabled">
                    <option class="opt1">3-3 Leander Lodge</option>
                    <option class="opt1">9-9 Thorten Lodge</option>
                </select>
                <button class="chngedisplay" type="button">Change</button>

                <select class="rostersec">
                    <option>Roster</option>
                    <option>Service Users</option>
                </select>
            </div>
        </form>

        <div class="dropMenu menudrop" style="margin-left: 0">
            <span class="openDropMenu">Action</span>
            <ul class="list-unstyled">
                <li><a href="#" class="print_all_details print">Print Full Detail</a></li>
                <li><a href="#" class="print_all_tabs print">Print</a></li>
            </ul>
        </div>
        <a class="new icon " href="#">
            Shift
        </a>
        <div class="selectweeks">
            <button class="prebtn">
                <img src="images/leftArrowWeekRotation.png" width="14px" height="14px">
            </button>
            <span>
                <img src="images/calendarIconWeekRotation.png" width="24px" height="24px">
            </span>
            <span class="dateofcalendar">6 Aug- 12 Aug,<i class="yearofcalen">2023</i></span>
            <button class="nextbtn">
                <img src="images/rightArrowWeekRotation.png" width="15px" height="15px">
            </button>
        </div>
        <ul class=" rotacategory list-unstyled clearfix">
            <li class="active1" style="border-bottom: 3px solid black;">
                <img src="images/calendarRota.png" width="24px" height="24px">
                <a class="activee" href="#">Overall</a>
            </li>
            <li style="margin-left: 5px">
                <img src="images/holidaysRota.png" width="24px" height="24px">
                <a href="#">Holidays</a>
            </li>
            <li style="margin-left: 5px">
                <img src="images/payrollRota.png" width="24px" height="24px">
                <a href="#">Payroll</a>
            </li>
        </ul>
    </div>
</section>
<section class="contentBody noBg noFloor">
    <div class="rotasec">
        <div class="daysinrota">
            <ul class="list-unstyled clearfix">
                <li class="li1 list1">
                    <i>6</i>
                    Sunday
                </li>
                <li class="li1 list2">
                    <i>7</i>
                    Monday
                </li>
                <li class="li1 list3">
                    <i>8</i>
                    Tuesday
                </li>
                <li class="li1 list4">
                    <i>9</i>
                    Wednesday
                </li>
                <li class="li1 list5">
                    <i>10</i>
                    Thursday
                </li>
                <li class="li1 list6">
                    <i>11</i>
                    Friday
                </li>
                <li class="li1 list7">
                    <i>12</i>
                    Saturday
                </li>
            </ul>
        </div>
    </div>
    <div class="scroll-wrapper scrollArea">
        <div class="scrollArea scroll-content">
            <div class="shiftsopen">
                <span class="title1">
                    Open Shifts
                    <img class="imgshowarrow" src="images/showAllArrow.png">
                    <i>Show All</i>
                </span>
                <div class="anotherdiv anotherdiv1">
                    <ul class="list-unstyled clearfix">
                        <li class="liinrota rotalist" style="margin-left: 0"><i class="addtosec li01"><img src="images/plusgrey.png" width="21px" height="22px"></i></li>
                        <li class="rotalist ">
                           <div class="shiftinformation" data-siblings" + 2 more"><span class="hoursofshifts">08:00-17:00<i>9h</i></span>
                                <span class="locationofstaff">N-Edwardes Square</span>
                           </div>
                            <i class="addtosection2 li02" style="height: 51%">
                                <img src="images/plusgrey.png" width="21px" height="22px">
                            </i>
                        </li>
                        <li class="rotalist hiddenrestofli ">
                            <div class="shiftinformation" data-siblings"+ 2 more">
                                <span class="hoursofshifts">
                                    08:00-17:00
                                    <i>9h</i>
                                </span>
                                <span class="locationofstaff">
                                    N-Edwardes Square
                                </span>
                            </div>
                            <div style="display: none" class="shiftinformation shiftinfo1" data-siblings"+ 2 more">
                                <span class="hoursofshifts">
                                    08:00-17:00
                                    <i>9h</i>
                                </span>
                                <span class="locationofstaff">
                                    N-Edwardes Square
                                </span>
                            </div>
                            <div style="display: none" class="shiftinformation shiftinfo1" data-siblings"+ 2 more">
                                <span class="hoursofshifts">
                                    08:00-17:00
                                    <i>9h</i>
                                </span>
                                <span class="locationofstaff">
                                    N-Edwardes Square
                                </span>
                            </div>
                            <i class="addtosection3 li03">
                                <span>+ 2 more</span>
                            </i>
                            <i class="addtosection4 li03">
                                <img src="images/plusgrey.png" width="21px" height="22px">
                            </i>
                        </li>
                        <li class="liinrota rotalist"><i class="addtosec li04"><img src="images/plusgrey.png" width="21px" height="22px"></i></li>
                        <li class="liinrota rotalist"><i class="addtosec li05"><img src="images/plusgrey.png" width="21px" height="22px"></i></li>
                        <li class="liinrota rotalist"><i class="addtosec li06"><img src="images/plusgrey.png" width="21px" height="22px"></i></li>
                        <li class="liinrota rotalist"><i class="addtosec li07"><img src="images/plusgrey.png" width="21px" height="22px"></i></li>
                    </ul>
                </div>
            </div>
            <div class="shiftsofstaff">
                <div class="infoofstaff">
                    <div class="divofstaff">
                        <span class="imgofstaff">
                            <img src="images/staffimg.png" height="55px" width="55px">
                        </span>
                        <span class="nameofstaff">
                            Peter M
                        </span>
                        <span class="dutyofstaff">
                            Driver
                        </span>
                        <div class="moreinformation">
                            <i></i>
                            <div class="moreinformationrota">
                                <ul class=" infolist list-unstyled clearfix" style="margin-bottom: 0">
                                    <li>
                                        <span class="hour">14:00hrs</span>
                                        <span>Allocated<br>Hours</span>
                                    </li>
                                    <li>
                                        <span class="hour">08:30hrs</span>
                                        <span>Others<br>Floors</span>
                                    </li>
                                    <li>
                                        <span class="hour">22:30hrs</span>
                                        <span>Total<br>Hours</span>
                                    </li>
                                    <li>
                                        <span class="hour">26:00hrs</span>
                                        <span>Contracted<br>Hours</span>
                                    </li>
                                    <li class="impportantli">
                                        <span class="hour imphour">06:00hrs</span>
                                        <span class="imphour">Over<br>Time</span>
                                    </li>
                                    <li class="impportantli">
                                        <span class="hour imphour">00:00hrs</span>
                                        <span class="imphour">Early<br>Leaves</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <span class="conflict1">
                        <img src="images/warning.png" width="24px" height="24px" style="margin-right: 6px">
                        1 Conflicts(s)
                    </span>
                    <span class="infoofhours">
                        Below Contracted Hours
                    </span>
                </div>
                <div class="anotherdiv">
                    <ul class="list-unstyled clearfix">
                        <li class="rotalist anotherlist" style="width: 205px">
                            <div class="shiftsinfo" data-siblings>
                                <span class="hour1 popupinfo">
                                    08:00-17:00
                                    <i>9h</i>
                                </span>
                                <span class="location1 popupinfo">
                                    HMI
                                </span>
                                <div class="popupinfo1">
                                    <ul class="list-unstyled clearfix">
                                        <li style="margin: 0 17px 0 0px">
                                            <span class="shifthours1">00:15hrs</span>
                                            <span>
                                                Break<br>Time
                                            </span>
                                        </li>
                                        <li class="adminli2"  style="margin: 0 17px 0 0px">
                                            <span class="shifthours1">00:00hrs</span>
                                            <span>Over<br>Time</span>
                                        </li>
                                        <li class="adminli1" style="margin: 0 25px 0 0px">
                                            <span class="shifthours1 ">1-Administrator</span>
                                            <span>
                                                Payroll<br>(Rate)
                                            </span>
                                        </li>
                                        <li class="adminli" style="margin: 0 17px 0 0px">
                                            <ul class="list-unstyled clearfix">
                                                <li>
                                                    <span class="shifthours1" style="color: white">06:00hrs</span>
                                                    <span style="color: white">Over<br>Time</span>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="anotherdiv">
                    <ul class="list-unstyled clearfix">
                        <li class="rotalist anotherlist" style="width: 120px">
                            <div class="shiftsinfo" data-siblings>
                                <span class="hour1">
                                    17:00
                                    <i>9h</i>
                                </span>
                                <span class="location1">
                                    HMI
                                </span>
                            </div>
                        </li>
                        <li class="rotalist" style="width: 220px">
                            <div class="shiftsinfo" data-siblings>
                                <span class="hour1">
                                    17:00-03:00
                                    <i>10h</i>
                                    <img src="images/groupinblue.png" width="24px" height="24px" class="img1">
                                </span>
                                <span class="location1">
                                    HMI
                                    <img src="images/flagingrey.png" width="24px" height="24px" class="img1">
                                </span>
                            </div>
                        </li>
                        <li class="rotalist" style="width: 220px">
                            <div class="shiftsinfo on-leave" data-siblings>
                                <span class="hour1">
                                    17:00-03:00
                                    <i>10h</i>
                                </span>
                                <span class="location1">
                                    HMI
                                </span>
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
        $(".question").on('click', function(){
            $(".question").next('ul').not($(this).next('ul')).hide();
            let offset = $(this).offset();
            $(this).next('ul').css({top: offset.top, left: offset.left}).fadeToggle();
        });
        $(document).ready(function(){
            $(".anotherdiv1").click(function(){
                $(".addtosection3").toggle();
                $(".shiftinfo1").toggle("display: block");
                $(".addtosection4 img").css("top", "10px") .css("position", "relative");
                $(".addtosection2").css("height", "50%") .css("position", "relative");
                $(".addtosection2 img").css("top", "50%") .css("position", "relative");
                $(".addtosection2 img").toggleClass(".addtosection2");
            });
            $(".chngedisplay").click(function(){
                $(this).hide();
                $('.selectevent').removeClass('disabled');
            });

            $('.selectevent').change(function(){
                $('.selectevent').addClass('disabled');
                $(".chngedisplay").show();
            });
        });

    </script>
</body>
</html>
