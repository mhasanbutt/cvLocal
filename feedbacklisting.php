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
                <li><a href="#">HR / Management</a></li>
            </ul>
            <span class="title"><img src="images/feedback.png" alt=""> Feedback</span>
        </div>
    </section>

    <section class="contentBody noBg ">
        <div class="scrollArea">
            <div class="content">
                <article class="generalListing">
                    <section>
                        <ul class="list-unstyled clearfix withCheckbox">
                            <li>
                                <input type="checkbox" class="gridcheckbox historyCheckBox" data-id="57" data-invoice="57" id="57" hidden="">
                                <label for="57"></label>
                            </li>
                            <li style="width: 100px;">
                                <span class="title">Date</span> 28-05-2021
                            </li>
                            <li style="width:220px;">
                                <span class="title">Feedack Left By</span>Mr Tim Shermin <br><small class="serviceuser">Service User</small>
                            </li>
                            <li style="width:220px;">
                                <span class="title">Feedack Left For</span> Mrs Kristine Bagherbilli <br><small class="staff">Staff</small>
                            </li>
                            <li style="width:150px;">
                                <span class="title">Feedback</span>
                                <ul class="stars list-unstyled clearfix">
                                    <li></li><li></li><li></li><li></li><li></li>
                                </ul>
                            </li>
                            <li style="width:150px;">
                                <span class="title">Type of Feedback</span>
                            </li>
                            <li style="width:150px;">
                                <span class="title">Source of Feedback</span>
                            </li>
                            <li style="width:calc(100% - 1040px);">
                                <span class="title">Attachment</span>
                            </li>
                            <li>
                                <span class="title">&nbsp;</span>
                                <i class="eye"></i>
                            </li>
                            <li style="width: 100%;">
                                <span class="title">Comments</span> Vivamus luctus luctus massa, vitae iaculis ante interdum ac. Vestibulum scelerisque lorem vel justo gravida vehicula. Nunc gravida ex interdum eros suscipit, et aliquam leo scelerisque. Vivamus blandit nisi porttitor mi vestibulum laoreet. Vivamus lacus quam, gravida et ex eu, varius mollis elit.
                            </li>

                        </ul>
                    </section>
                </article>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-4 text-right">
                <div class="form-inline">
                    <label>Sort by</label>
                    <div class="select">
                        <select>
                            <option>Identified Needs</option>
                            <option>Care Plan</option>
                            <option>Service User</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
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