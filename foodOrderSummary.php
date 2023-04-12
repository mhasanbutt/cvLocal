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
                <li><a href="#">Chef</a></li>
            </ul>
            <span class="title">Order Summary</span>
        </div>
        <div class="pull-right clearfix">
            <div class="btn-group">
                <button type="button" class="btn" data-toggle="modal" data-target="#allOrders"><img src="images/chef.svg" class="svg">All Orders</button>
            </div>
        </div>
        <ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Floor</option>
                        <option>Floor 1</option>
                        <option>Floor 2</option>
                        <option>Floor 3</option>
                        <option>Total</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
        </ul>

    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <h3>Breakfast</h3>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Amount <small>(Total)</small></th>
                            <th>SALT ALERT - FORK MASHABLE</th>
                            <th>SALT ALERT - PUREE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Scambled Eggs</td>
                            <td>15</td>
                            <td>11</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Boiled Eggs</td>
                            <td>11</td>
                            <td>02</td>
                            <td>02</td>
                        </tr>
                        <tr>
                            <td>Fried Eggs</td>
                            <td>12</td>
                            <td>0</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Toast</td>
                            <td>26</td>
                            <td>03</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
                <div class="orderSummaryComments">
                    <h4>Additional Comments</h4>
                    <textarea disabled class="disabled">(Mr Bertha Green; A-15) Does not want raisins on her porridge</textarea>
                </div>
                <hr>
                <h3>Lunch</h3>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Amount <small>(Total)</small></th>
                            <th>SALT ALERT - FORK MASHABLE</th>
                            <th>SALT ALERT - PUREE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Scambled Eggs</td>
                            <td>15</td>
                            <td>11</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Boiled Eggs</td>
                            <td>11</td>
                            <td>02</td>
                            <td>02</td>
                        </tr>
                        <tr>
                            <td>Fried Eggs</td>
                            <td>12</td>
                            <td>0</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Toast</td>
                            <td>26</td>
                            <td>03</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
                <div class="orderSummaryComments">
                    <h4>Additional Comments</h4>
                    <textarea disabled class="disabled">(Mr Bertha Green; A-15) Does not want raisins on her porridge</textarea>
                </div>
                <hr>
                <h3>Dinner</h3>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Amount <small>(Total)</small></th>
                            <th>SALT ALERT - FORK MASHABLE</th>
                            <th>SALT ALERT - PUREE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Scambled Eggs</td>
                            <td>15</td>
                            <td>11</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Boiled Eggs</td>
                            <td>11</td>
                            <td>02</td>
                            <td>02</td>
                        </tr>
                        <tr>
                            <td>Fried Eggs</td>
                            <td>12</td>
                            <td>0</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Toast</td>
                            <td>26</td>
                            <td>03</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
                <div class="orderSummaryComments">
                    <h4>Additional Comments</h4>
                    <textarea disabled class="disabled">(Mr Bertha Green; A-15) Does not want raisins on her porridge</textarea>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-4">
                <button>Back</button>
            </div>
        </div>
    </section>

    <div class="modal fade" id="allOrders" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">All Orders</h4>
                </div>
                <div class="modal-body">
                    <h4>Breakfast</h4>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Amount</th>
                                <th>Soft Food</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Scambled Eggs</td>
                                <td>55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Boiled Eggs</td>
                                <td>41</td>
                                <td>06</td>
                            </tr>
                            <tr>
                                <td>Fried Eggs</td>
                                <td>54</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Toast</td>
                                <td>44</td>
                                <td>05</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h4>Lunch</h4>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Amount</th>
                                <th>Soft Food</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Scambled Eggs</td>
                                <td>55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Boiled Eggs</td>
                                <td>41</td>
                                <td>06</td>
                            </tr>
                            <tr>
                                <td>Fried Eggs</td>
                                <td>54</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Toast</td>
                                <td>44</td>
                                <td>05</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h4>Dinner</h4>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Amount</th>
                                <th>Soft Food</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Scambled Eggs</td>
                                <td>55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Boiled Eggs</td>
                                <td>41</td>
                                <td>06</td>
                            </tr>
                            <tr>
                                <td>Fried Eggs</td>
                                <td>54</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Toast</td>
                                <td>44</td>
                                <td>05</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h4>Snacks</h4>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Amount</th>
                                <th>Soft Food</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Scambled Eggs</td>
                                <td>55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Boiled Eggs</td>
                                <td>41</td>
                                <td>06</td>
                            </tr>
                            <tr>
                                <td>Fried Eggs</td>
                                <td>54</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Toast</td>
                                <td>44</td>
                                <td>05</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
