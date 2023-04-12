<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <?php include("header.php");?>

    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Care</a></li>
                <li><a href="#">Handover</a></li>
                <li>New handover</li>
            </ul>
            <span class="title"><img src="images/handover.png"> New handover</span>
        </div>
        <ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer select disabled">
                    <select>
                        <option>Floor</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <button type="button" class="searchButton reset">Change Floor</button>
            </li>
        </ul>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="noData_col">
                    <article>
                        <span><img src="images/noData.svg" class="svg"> <br>No Record Found</span>
                    </article>
                </div>
                <div class="row">
                    
                    <div class="col-md-9">
                        <h4>Staff on Shift</h4>

                        <ul class="list-unstyled stafflist">
                            <li>
                                <article>
                                    <div class="user">
                                        <span class="picture">
                                            <img src="https://jawa.linksdev.co.uk/getattachmentdata?path=Y29tcGFueS8zL2VtcGxveWVlL2VtcGxveWVlXzExMF8xNTQ4MDYwNDYwXy5wbmc=">
                                        </span>
                                        <span class="name">Akmal javed</span>
                                        <span class="designation">Manager</span>
                                    </div>
                                    <div class="status">
                                        <span>
                                            <input type="radio" name="aj" id="ajh" hidden>
                                            <label for="ajh">H</label>
                                        </span>
                                        <span>
                                            <input type="radio" name="aj" id="ajp" hidden>
                                            <label for="ajp">P</label>
                                        </span>
                                        <span>
                                            <input type="radio" name="aj" id="ajl" hidden>
                                            <label for="ajl">L</label>
                                        </span>
                                        <span>
                                            <input type="radio" name="aj" id="aja" hidden>
                                            <label for="aja">A</label>
                                        </span>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="roomkey">
                            <h4>AM / PM Handover?</h4>
                            <span class="radio">
                                <input type="radio" name="ampm" id="am" hidden>
                                <label for="am">AM</label>
                            </span>
                            <span class="radio">
                                <input type="radio" name="ampm" id="pm" hidden>
                                <label for="pm">PM</label>
                            </span>
                        </div>

                        <p>&nbsp;</p>

                        <h4>Current Staff on Shift</h4>
                        Rishi J.

                        <p>&nbsp;</p>

                        <h4>Next Staff on Shift</h4>
                        <div class="inBodyForm">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <button type="button" class="formButton orange">Verify</button> <span>New user</span>
                        </div>

                        <p>&nbsp;</p>

                        <ul class="list-unstyled">
                            <li content="h">Present During Handover</li>
                            <li content="p">Present</li>
                            <li content="l">Late</li>
                            <li content="a">Absent</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button> <button type="button" class="completed">Complete Handover</button>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>