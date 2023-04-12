<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Bootstrap 101 Template</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <section class="printReady">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <img src="images/logo.png" class="logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <button class="printButton"  onclick="window.print();"><img src="images/printing-tool.svg" class="svg"> Print</button>
                        <article class="date">
                            <span>
                                <?php echo date('M dS, Y - H:i');?>
                            </span>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="printMiddleBody">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <article class="staffQR">
                            <div class="front">
                                <div class="name">
                                    <span>
                                        Staff Name 1<br><strong>Designation Here</strong>
                                    </span>
                                </div>
                                <div class="logo">
                                    <img src="images/logo.png" alt=""> <i>QR COde</i>
                                </div>
                            </div>
                            <div class="back">
                                <div>
                                    Home Names<br><strong>Care Home address</strong>
                                </div>
                            </div>
                        </article>

                        <ul class="listing list-unstyled">
                            <li>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <article class="serviceUserMiniProfile">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <small>Service User Name</small>
                                                    Mr. John Corner <strong>(Johny)</strong>
                                                </div>
                                                <div class="col-xs-3">
                                                    <small>Service User ID</small>
                                                    SU87345U00
                                                </div>
                                                <div class="col-xs-3">
                                                    <small>Date of Birth</small>
                                                    25-05-1958
                                                </div>
                                                <div class="col-xs-3">
                                                    <small>Location</small>
                                                    Oxford St.
                                                </div>
                                            </div>
                                        </article>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <span class="printInfo"><small>Date / Time:</small> <br>
                                                2017-06-21 00:00:00</span>
                                            </div>
                                            <div class="col-xs-6">
                                                <span class="printInfo"><small>Read By:</small> <br>
                                                Carers</span>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="desc"><small>Description</small><br>
                                                Morbi enim velit, rutrum vitae enim id, rhoncus varius orci. Vivamus id consectetur sapien. Curabitur ultricies porta sem. Praesent aliquam pretium risus, a luctus nibh commodo vel. Mauris faucibus placerat quam, eu consequat eros fermentum nec. Integer sit amet tempor arcu. Suspendisse potenti. Donec sagittis viverra purus in pulvinar. Integer eu ante ac lectus blandit tincidunt. Etiam finibus molestie lacus nec tincidunt. Nullam at quam quis felis tincidunt convallis sed eu tortor. Aenean finibus non neque posuere accumsan.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 text-right">
                                        <img src="images/temp-picture.jpg" class="profileImg">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <article class="serviceUserMiniProfile">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <small>Service User Name</small>
                                                    Mr. John Corner <strong>(Johny)</strong>
                                                </div>
                                                <div class="col-xs-3">
                                                    <small>Service User ID</small>
                                                    SU87345U00
                                                </div>
                                                <div class="col-xs-3">
                                                    <small>Date of Birth</small>
                                                    25-05-1958
                                                </div>
                                                <div class="col-xs-3">
                                                    <small>Location</small>
                                                    Oxford St.
                                                </div>
                                            </div>
                                        </article>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <small>Date / Time:</small> <br>
                                                2017-06-21 00:00:00
                                            </div>
                                            <div class="col-xs-6">
                                                <small>Read By:</small> <br>
                                                Carers
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="desc"><small>Description</small><br>
                                                Morbi enim velit, rutrum vitae enim id, rhoncus varius orci. Vivamus id consectetur sapien. Curabitur ultricies porta sem. Praesent aliquam pretium risus, a luctus nibh commodo vel. Mauris faucibus placerat quam, eu consequat eros fermentum nec. Integer sit amet tempor arcu. Suspendisse potenti. Donec sagittis viverra purus in pulvinar. Integer eu ante ac lectus blandit tincidunt. Etiam finibus molestie lacus nec tincidunt. Nullam at quam quis felis tincidunt convallis sed eu tortor. Aenean finibus non neque posuere accumsan.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 text-right">
                                        <img src="images/temp-picture.jpg" class="profileImg">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        &copy; <?php echo date('Y');?> CareVision Management Ltd. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
