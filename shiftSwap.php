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
                <li><a href="#">Rota</a></li>
            </ul>
            <span class="title"><img src="images/swap.png" alt=""> Shift Swap</span>
        </div>
    </section>

    <section class="contentBody noBg">
        <div class="scrollArea">
            <div class="content">
                <div class="swapProfile">
                    <input type="checkbox" id="selectSwap" hidden>
                    <label for="selectSwap"></label>

                    <ul class="list-unstyled clearfix">
                        <img src="images/emp-profile.jpg">

                        <li>
                            <span class="title">User From</span>
                            Chef
                        </li>
                        <li>
                            <span class="title">Shift From</span>
                            Special Shift
                        </li>
                        <li>
                            <span class="title">Floor From</span>
                            Floor 1
                        </li>
                        <li>
                            <span class="title">Shift Day From</span>
                            19.03.2023
                        </li>
                    </ul>

                    <ul class="list-unstyled clearfix">
                        <img src="images/emp-profile.jpg">

                        <li>
                            <span class="title">User From</span>
                            Chef
                        </li>
                        <li>
                            <span class="title">Shift From</span>
                            Special Shift
                        </li>
                        <li>
                            <span class="title">Floor From</span>
                            Floor 1
                        </li>
                        <li>
                            <span class="title">Shift Day From</span>
                            19.03.2023
                        </li>
                    </ul>

                    <section>
                        <ul class="list-unstyled" data-title="Request Status">
                            <li class="color">
                                <input type="radio" name="preRequest" id="preRequest1" hidden>
                                <label for="preRequest1">Accepted</label>
                            </li>
                            <li>
                                <input type="radio" name="preRequest" id="preRequest2" hidden>
                                <label for="preRequest2">Rejected</label>
                            </li>
                        </ul>
                        <ul class="list-unstyled" data-title="Official Status" data-rejectedBy="Rejected By: Rishi R.">
                            <li>
                                <input type="radio" name="officialRequest" id="officialRequest1" hidden>
                                <label for="officialRequest1">Accepted</label>
                            </li>
                            <li>
                                <input type="radio" name="officialRequest" id="officialRequest2" hidden>
                                <label for="officialRequest2">Rejected</label>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>