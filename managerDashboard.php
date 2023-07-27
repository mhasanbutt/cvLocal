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

    <div class="managerDashSimplified">
        <div class="dashContainer">
            <section>
                <div class="sections clearfix">
                    <span class="greetings">Good After Noon! <strong>Rishi</strong></span>
                    <span class="welcome">Welcome to NEW Dashboard, if you would like to revert to OLD Dashboard, please Click Here.</span>

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
                                        <span class="subTitle">Injury</span>
                                        77 <i>last 3 days</i>
                                        <a href="#" data-text="See Injury"></a>
                                    </li>
                                    <li>
                                        <span class="subTitle">Pressure Ulcer</span>
                                        02 <i>last 3 days</i>
                                        <a href="#" data-text="See Ulcer"></a>
                                    </li>
                                </ul>
                            </article>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>