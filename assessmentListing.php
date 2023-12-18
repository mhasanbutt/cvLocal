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
    <?php include("header.php"); ?>
    <?php include("sideNav.php"); ?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Audits</a></li>
            </ul>
            <span class="title"><img src="https://jawa.linksdev.co.uk/images/slipping-multi.png"> A &amp; I</span>
        </div>

    </section>

    <section class="contentBody noBg noFooter">
        <div class="painCheks clearfix">
            <div>
                <span class="title">Outstanding Follow-Up <small>All/Current</small></span>
                <input type="text" name="text" id="text" placeholder="Search Residents">
                <div class="scrollArea">
                    <div class="generalListing">
                        <section>
                            <ul class="list-unstyled clearfix">
                                <li style="width:220px;"><span class="title">SERVICE USER</span>Alea Sweeney</li>
                                <li style="width: 250px;"><span class="title">Last Assessed</span>Assessed 9 days ago</li>
                                <li style="width:180px;"><span class="title">Pain Score</span>NRS 5</li>
                                <li style="width:220px;"><span class="title">Pain Level</span>Moderate
                                    <span class="painChek">
                                        <i class="painCheckBar"></i>
                                        <i class="painCheckBar"></i>
                                        <i class="painCheckBar"></i>
                                        <i class="painCheckBar"></i>
                                    </span>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="generalListing">
                        <section>
                            <ul class="list-unstyled clearfix">
                                <li style="width:220px;"><span class="title">SERVICE USER</span>Allen Head</li>
                                <li style="width: 250px;"><span class="title">Last Assessed</span>Assessed 447 days ago
                                </li>
                                <li style="width:180px;"><span class="title">Pain Score</span>Pian Check 8</li>
                                <li style="width:220px;"><span class="title">Pian Level</span>Mild</li>
                            </ul>
                        </section>
                    </div>
                </div>

                <div class="pagingSorting">
                    <ul class="list-unstyled paging">
                        <li><a href="#">Prev</a></li>
                        <li class="current"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>

                    <div class="sorting">
                        <div class="select">
                            <select name="" id="">
                                <option value="">50 per page</option>
                            </select>
                        </div>
                        <button type="button">Reset Sorting</button>
                    </div>
                </div>
            </div>

            <div>
                <span class="title">Outstanding Follow-Up <small>All/Current</small></span>
                <input type="text" name="text2" id="text2" placeholder="Search Residents">
                <div class="scrollArea">
                    <div class="generalListing">
                        <section>
                            <ul class="list-unstyled clearfix">
                                <li style="width:220px;"><span class="title">SERVICE USER</span>Cora TEST</li>
                                <li style="width: 250px;"><span class="title">Last Assessed</span>Assessed 9 days ago
                                </li>
                                <li style="width:180px;"><span class="title">Pain Score</span>Pian Check 8</li>
                                <li style="width:220px;"><span class="title">Pian Level</span>Moderate</li>
                            </ul>
                        </section>
                    </div>
                </div>

                <div class="pagingSorting">
                    <ul class="list-unstyled paging">
                        <li><a href="#">Prev</a></li>
                        <li class="current"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>

                    <div class="sorting">
                        <div class="select">
                            <select name="" id="">
                                <option value="">50 per page</option>
                            </select>
                        </div>

                        <button type="button">ResetSorting</button>
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
        $(".question").on('click', function () {
            $(".question").next('ul').not($(this).next('ul')).hide();
            let offset = $(this).offset();
            $(this).next('ul').css({
                top: offset.top,
                left: offset.left
            }).fadeToggle();
        });
    </script>
</body>

</html>