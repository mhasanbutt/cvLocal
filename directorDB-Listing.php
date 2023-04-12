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
    <header class="colored">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="#"><img src="images/loginPage-logo.png" alt="CareVision"></a>
                    </div>
                    <ul class="headerNav list-unstyled">
                        <li class="active">
                            <a href="#">Care</a>
                        </li>
                        <li>
                            <a href="#">Employees</a>
                        </li>
                        <li>
                            <a href="#">Family Login</a>
                        </li>
                        <li>
                            <a href="#">Admin</a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Reception</a>
                                </li>
                                <li>
                                    <a href="#">Finance</a>
                                </li>
                                <li>
                                    <a href="#">Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Chef/Kitchen</a>
                        </li>
                    </ul>
                    <section class="pull-right">
                        <article class="date">
                            <span>
                                <?php echo date('M dS, Y'); ?>
                            </span>
                        </article>
                        <span class="headerIcons notification active">
                            <img src="images/black-back-closed-envelope-shape.svg" class="svg">
                        </span>
                        <div class="dropdown">
                            <button type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img src="images/temp-picture.jpg" class="picture">
                                <img src="images/photo-camera.svg" class="svg">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                                <li>
                                    <a href="#">Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </header>

    <section class="contentBody noBg noFooter directorDb">
        <div class="directorDbTopBar listingTopbar">
            <h2>Welcome,
                <b>CareHome</b>
                <span>(Mr. Director)</span>
            </h2>
            <p>An overlook of all care homes</p>
        </div>

        <div class="directorDbWrap">
            <div class="scrollArea">
                <section class="homes clearfix">
                    <span class="homeTitle">
                        Homes Statistics
                    </span>
                    <div class="btnGroup option" data-title="Service User">
                        <button class="SuperLogin" data-url="https://jawa.linksdev.co.uk/pharmacy/medicationorders" data-redirect="create">
                            Proceed Directly To Orders
                        </button>
                    </div>
                    <ul class="careHomeData clearfix list-unstyled">
                        <li>
                            <article>
                                <a href="https://jawa.linksdev.co.uk/pharmacy/dashboard-homes">
                                    Number Of Homes
                                    <span>2</span>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article>
                                Number of Residents <small>(active orders)</small>
                                <span>47</span>
                            </article>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </section>


    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
