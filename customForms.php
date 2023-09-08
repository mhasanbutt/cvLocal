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
                <li><a href="#">Setup</a></li>
            </ul>
            <span class="title"><img src="images/forms.png" alt=""> Custom Forms</span>
        </div>
        <div class="filtersSearch clearfix autoWidth">
            <div class="dropMenu">
                <span class="openDropMenu">Actions</span>
                <ul class="list-unstyled">
                    <li><a label="Print All" href="#" class="print">Print All</a></li>
                    <li><a label="Print Selected" href="#" class="print">Print Selected</a></li>
                </ul>
            </div>

            <a class="new icon" href="newHome.php">New Form</a>
        </div>
    </section>

    <section class="contentBody noBg noFooter">
        <div class="scrollArea">
            <div class="content">
                <article class="generalListing">
                    <section>
                        <ul class="list-unstyled clearfix withCheckbox">
                            <li>
                                <input type="checkbox" class="gridcheckbox historyCheckBox" data-id="57" data-invoice="57" id="57" hidden="">
                                <label for="57"></label>
                            </li>
                            <li style="width: 220px;">
                                <span class="title">Form Name</span> My Custom Form
                            </li>
                            <li style="width:120px;">
                                <span class="title">Created On</span>15.03.2023
                            </li>
                            <li style="width:220px;">
                                <span class="title">Created By</span> Kristine Bagherbilli
                            </li>
                            <li>
                                <i class="eye"></i>
                            </li>
                            <li>
                                <i class="view"></i>
                            </li>
                            <li>
                                <i class="delete"></i>
                            </li>
                        </ul>
                    </section>
                </article>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>