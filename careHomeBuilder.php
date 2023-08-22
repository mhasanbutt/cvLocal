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
                <li><a href="#">Admin</a></li>
            </ul>
            <span class="title"><img src="images/construction.png"> Care Home Builder</span>
        </div>
        <div class="filtersSearch clearfix autoWidth">
            <div class="dropMenu">
                <span class="openDropMenu">Actions</span>
                <ul class="list-unstyled">
                    <li><a label="Print All" href="#" class="print">Print All</a></li>
                    <li><a label="Print Selected" href="#" class="print">Print Selected</a></li>
                </ul>
            </div>

            <a class="new icon" href="newHome.php">New Home</a>
        </div>
    </section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content" style="padding-right: 20px;">
                <ul class="list-unstyled clearfix homeBuilderListing">
                    <li>
                        <article class="clearfix">
                            <input type="checkbox" name="selectedHomes" id="home1" hidden>
                            <label for="home1"></label>

                            <span class="homeName" data-postCode="SE20 8TJ">7-7-Thornton Lodge</span>

                            <div class="floorRoomInfo">
                                <span class="floor">3</span>
                                <span class="room">12</span>
                            </div>

                            <div class="manager">Michael Jacob</div>

                            <ul class="list-unstyled clearfix">
                                <li>View</li>
                                <li><span class="active">SMTP</span></li>
                                <li>Filing Cabinet</li>
                                <li>Settings</li>
                            </ul>
                        </article>
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
