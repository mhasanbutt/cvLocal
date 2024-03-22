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
        .contentBody .scroll-wrapper {
            bottom: 60px;
        }
        .contentBody .ctas {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Audits</a></li>
        </ul>
        <span class="title"><img src="images/audits.png"> Ulcer & Injury Audit</span>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            <div class="newForm">
                <ul class="list-unstyled clearfix col4">
                    <li>
                        <span class="title">Select Type</span>
                        <select>
                            <option>Select Type</option>
                            <option>Pressure Ulcer</option>
                            <option>Injury Management</option>
                        </select>
                    </li>
                </ul>
            </div>

            <ul class="multiUserSelection list-unstyled clearfix">
                <li>
                    <input type="checkbox" name="userSelection" id="user1" hidden>
                    <label for="user1">
                        <span class="img"><img src="images/temp-picture.jpg"></span>
                        <span class="name">Mr Tim Shermin</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="userSelection" id="user2" hidden>
                    <label for="user2">
                        <span class="img"><img src="images/temp-picture.jpg"></span>
                        <span class="name">Mr Smith Bucknar</span>
                    </label>
                </li>
            </ul>

            <div class="newForm">
                <ul class="list-unstyled clearfix col4">
                    <li>
                        <button>Load Record</button>
                    </li>
                </ul>
            </div>

            <div class="generalListing">
                <span class="title">Mr Tim Shermin</span>

                <section>
                    <ul class="withCheckbox picture list-unstyled clearfix">
                        <li>
                            <input type="checkbox" name="select" id="select1" hidden>
                            <label for="select1"></label>
                        </li>
                        <li>
                            <img src="images/temp-picture.jpg">
                        </li>
                        <li style="width:160px;">
                            <span class="title">Date</span>
                            (15:43) 23.03.2023
                        </li>
                        <li style="width:130px;">
                            <span class="title">Grades</span>
                            Redness
                        </li>
                        <li style="width:calc(100% - 600px);">
                            <span class="title">Location</span>
                            Left Buttocks 2
                        </li>
                        <li style="width:240px;">
                            <span class="title">Wound monitoring & Date of photo</span>
                            2.12.2024
                        </li>
                    </ul>
                    <div class="newForm">
                        <ul class="list-unstyled clearfix">
                            <li style="width:100%;">
                                <span class="title">Title</span>
                                <textarea></textarea>
                            </li>
                        </ul>
                    </div>
                </section>
                <section>
                    <ul class="withCheckbox picture list-unstyled clearfix">
                        <li>
                            <input type="checkbox" name="select" id="select1" hidden>
                            <label for="select1"></label>
                        </li>
                        <li>
                            <img src="images/temp-picture.jpg">
                        </li>
                        <li style="width:160px;">
                            <span class="title">Date</span>
                            (15:43) 23.03.2023
                        </li>
                        <li style="width:130px;">
                            <span class="title">Grades</span>
                            Redness
                        </li>
                        <li style="width:calc(100% - 600px);">
                            <span class="title">Location</span>
                            Left Buttocks 2
                        </li>
                        <li style="width:240px;">
                            <span class="title">Wound monitoring & Date of photo</span>
                            2.12.2024
                        </li>
                    </ul>
                </section>
            </div>

            <div class="GSFSelection">
                <article>
                    <input type="checkbox" name="gsfOptions" id="opt1" hidden>
                    <label for="opt1">Recognition of the dying phase by the care home and GP and communicated to all staff.</label>

                    <div class="newForm">
                        <ul class="list-unstyled clearfix col4">
                            <li>
                                <span class="title">Date</span>
                                <input type="date">
                            </li>
                            <li>
                                <span class="title">Last Reviewed By</span>
                                <span class="text">Rishi R.</span>
                            </li>
                            <li class="textarea" style="width:100%;">
                                <span class="title">Comments</span>
                                <textarea></textarea>
                            </li>
                        </ul>
                    </div>
                </article>
                <article>
                    <input type="checkbox" name="gsfOptions" id="opt2" hidden>
                    <label for="opt2">GP to review resident</label>

                    <div class="newForm">
                        <ul class="list-unstyled clearfix col4">
                            <li>
                                <span class="title">Date</span>
                                <input type="date">
                            </li>
                            <li>
                                <span class="title">Last Reviewed By</span>
                                <span class="text">Rishi R.</span>
                            </li>
                            <li class="textarea" style="width:100%;">
                                <span class="title">Comments</span>
                                <textarea></textarea>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="ctas">
        <button>Back</button>
        <button class="blue">Create Audit</button>
    </div>
</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
<script>
    $('.GSFSelection article input[type=checkbox]').click(function(){
        if ($(this).is(':checked')){
            $(this).siblings('.newForm').slideDown();
        } else {
            $(this).siblings('.newForm').slideUp();
        }
    });
</script>
</body>
</html>
