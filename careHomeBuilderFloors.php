<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
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
                <li><a href="#">Reception</a></li>
                <li><a href="#">Care Home Builder</a></li>
            </ul>
            <span class="title">Add Floors</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <form class="inBodyForm form-inline">
                            <div class="form-group">
                                <label>Number of Floors</label>
                                <div class="counter tempGauge">
                                    <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                    <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                    <input type="text" maxlength="3" value="0" size="2">
                                </div>
                            </div>
                            <p></p>
                            <button type="button" class="formButton">Next</button>
                            <hr>
                            <table class="addFloors table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th width="60">Sr. No.</th>
                                        <th style="width:20%;">Floor Name [Optional]</th>
                                        <th style="width:20%;">Floor Level</th>
                                        <th class="desc">Description [Optional]</th>
                                        <th width="140">No. of Bedrooms</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" placeholder="Basement/Ground floor...">
                                            </div>
                                        </td>
                                        <td><textarea></textarea></td>
                                        <td>
                                            <div class="counter tempGauge">
                                                <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <input type="text" maxlength="3" value="0">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" placeholder="Basement/Ground floor...">
                                            </div>
                                        </td>
                                        <td><textarea></textarea></td>
                                        <td>
                                            <div class="counter tempGauge">
                                                <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <input type="text" maxlength="3" value="0">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" placeholder="Basement/Ground floor...">
                                            </div>
                                        </td>
                                        <td><textarea></textarea></td>
                                        <td>
                                            <div class="counter tempGauge">
                                                <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <input type="text" maxlength="3" value="0">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" placeholder="Basement/Ground floor...">
                                            </div>
                                        </td>
                                        <td><textarea></textarea></td>
                                        <td>
                                            <div class="counter tempGauge">
                                                <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <input type="text" maxlength="3" value="0">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" placeholder="Basement/Ground floor...">
                                            </div>
                                        </td>
                                        <td><textarea></textarea></td>
                                        <td>
                                            <div class="counter tempGauge">
                                                <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <input type="text" maxlength="3" value="0">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" placeholder="Basement/Ground floor...">
                                            </div>
                                        </td>
                                        <td><textarea></textarea></td>
                                        <td>
                                            <div class="counter tempGauge">
                                                <button type="button" class="counterBtn plus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <button type="button" class="counterBtn minus"><img src="images/left-arrow.svg" class="svg"></button>
                                                <input type="text" maxlength="3" value="0">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div class="form-group">
                                <label>Allocate Rooms</label>
                                <span class="toggles fixed">
                                    <input type="checkbox" name="status" id="status" class="ios-toggle">
                                    <label for="status" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button> <button type="button" class="save">Save</button>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/jquery.maphilight.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
