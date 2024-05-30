<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
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
                <li><a href="#">Medication</a></li>
            </ul>
            <span class="title">Medication Authorization</span>
        </div>
    </section>

    <section class="contentBody noBg noFooter">
        <div class="scrollArea">
            <div class="content">
                <ul class="medAuth list-unstyled">
                    <li>
                        <a href="#" class="picture"><img src="images/temp-picture.jpg"></a>
                        <span class="title">June Armstrong <small>[Carer]</small></span>
                        <ul class="list-unstyled">
                            <li class="notAllowed">
                                MAR
                            </li>
                            <li class="allowed">
                                TAR
                            </li>
                            <li class="allowed">
                                PRN
                            </li>
                            <li class="notAllowed">
                                Patch
                            </li>
                            <li class="allowed">
                                Injection
                            </li>
                            <li class="notAllowed">
                                Inventory
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
