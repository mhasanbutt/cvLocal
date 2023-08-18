<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.webp" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/managerDashboard.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <div class="dashboardOverlay">
        <section>
            <ul class="list-unstyled clearfix">
                <li>
                    I would like to use the OLD dashboard for now. <a href="#">Change Now</a>
                </li>
                <li>
                    I would like to use the OLD dashboard as default. <a href="#">Go to Settings</a>
                </li>
            </ul>
            <span class="cancel"></span>
        </section>
    </div>

    <div class="managerDashSimplified">
        <div class="dashContainer">
            <section>
                <div class="sections clearfix">
                    <span class="greetings">Good After Noon! <strong>Rishi</strong></span>
                    <span class="welcome">Welcome to <strong>NEW Dashboard</strong>, if you would like to revert to OLD Dashboard, please <span class="revert">Click Here</span>.</span>

                    <br clear="all">
                    <ul class="list-unstyled clearfix">
                        <li>
                            <span class="outerTitle">Overall Stats</span>
                            <article>
                                <span class="subTitle">Service Users</span>
                                <ul class="list-unstyled clearfix">
                                    <li>77 <i>Active</i></li>
                                    <li>02 <i>Freeze</i></li>
                                </ul>
                                <a href="#" data-text="See Service Users"></a>
                            </article>
                        </li>
                        <li>
                            <span class="outerTitle"> </span>
                            <article>
                                <span class="subTitle">Employees</span>
                                <div class="extraStat"><span>17</span> Attendance<br>Warnings</div>
                                <ul class="list-unstyled clearfix">
                                    <li>77 <i>Active</i></li>
                                    <li>02 <i>Leavers</i></li>
                                </ul>
                                <a href="#" data-text="See Employees"></a>
                            </article>
                        </li>
                        <li>
                            <span class="outerTitle">Upcoming Birthdays</span>
                            <article>
                                <span class="subTitle">Service Users <small>[next 30 days]</small></span>
                                <ul class="list-unstyled clearfix">
                                    <li>77 <i>Today</i></li>
                                    <li>02 <i>Future</i></li>
                                </ul>
                                <a href="#" data-text="See List"></a>
                            </article>
                        </li>
                        <li>
                            <span class="outerTitle">Health Stats</span>
                            <article class="subSections">
                                <ul class="list-unstyled clearfix">
                                    <li>
                                        <span class="subTitle" style="margin-bottom:20px;">Injury</span>
                                        77 <i>last 3 days</i>
                                        <a href="#" data-text="See Injury"></a>
                                    </li>
                                    <li>
                                        <span class="subTitle" style="margin-bottom:20px;">Pressure Ulcer</span>
                                        02 <i>last 3 days</i>
                                        <a href="#" data-text="See Ulcer"></a>
                                    </li>
                                </ul>
                            </article>
                        </li>
                        <li>
                            <article>
                                <span class="subTitle">Follow Up</span>
                                <p>Due Today or any Outstanding</p>
                                <ul class="list-unstyled clearfix">
                                    <li>77 <i>Injury</i></li>
                                    <li>02 <i>Pressure Ulcer</i></li>
                                    <li>77 <i>Catheter</i></li>
                                    <li>02 <i>Enteral Feeding</i></li>
                                </ul>
                                <a href="#" data-text="See Follow Up"></a>
                            </article>
                        </li>
                        <li>
                            <article>
                                <span class="subTitle">Accidents &amp; Incidents <small>[last 30 days]</small></span>
                                <ul class="list-unstyled clearfix">
                                    <li>77 <i>Active</i></li>
                                    <li>02 <i>Awaiting Sign Off</i></li>
                                    <li>77 <i>Completed</i></li>
                                </ul>
                                <a href="#" data-text="See A &amp; I"></a>
                            </article>
                        </li>
                        <li>
                            <article>
                                <span class="subTitle">Support Care Plans <small>[last 30 days]</small></span>
                                <ul class="list-unstyled clearfix">
                                    <li>77 <i>Active</i></li>
                                    <li>02 <i>Over Due</i></li>
                                </ul>
                                <a href="#" data-text="See Support Care Plans"></a>
                            </article>
                        </li>
                        <li>
                            <article>
                                <span class="subTitle">Care Routines <small>[last 30 days]</small></span>
                                <ul class="list-unstyled clearfix">
                                    <li>77 <i>Active</i></li>
                                    <li>02 <i>Missed<br><small>[last 24 hours]</small></i></li>
                                </ul>
                                <a href="#" data-text="See Care Routines"></a>
                            </article>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(".revert").click(function(){
            $(".dashboardOverlay").addClass("showOverlay");
        });

        $(".cancel").click(function(){
            $(".dashboardOverlay").removeClass("showOverlay");
        });
    </script>
</body>

</html>