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
                <li><a href="#">Medication</a></li>
            </ul>
            <span class="title">Order History</span> </div>
            <div class="ProfileInfo"> <img src="images/temp-picture.jpg" class="picture"> <span class="profileImg"><img src="images/photo-camera.svg" class="svg"></span>
                <ul class="list-unstyled">
                    <li> <span>Service User Name</span><br>
                        Terrance Edwards </li>
                        <li> <span>Date of Birth</span><br>
                            05-04-1974 </li>
                            <li> <span>Client No.</span><br>
                                5921583 </li>
                                <li> <span>Location</span><br>
                                    Oxford St. </li>
                                </ul>
                            </div>
                        </section>
                        <section class="contentBody">
                            <div class="scrollArea">
                                <div class="content">
                                    <ul class="diseases list-unstyled">
                                        <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                                        <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                                        <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                                    </ul><br><hr>
                                    <form class="inBodyForm">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Medicine Name</th>
                                                    <th>Medicine Type</th>
                                                    <th>Strength</th>
                                                    <th>Dosage</th>
                                                    <th>Medication Type</th>
                                                    <th>Current Stock</th>
                                                    <th>Qty. to Order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Penicilin</td>
                                                    <td>MAR</td>
                                                    <td>10mg</td>
                                                    <td>1 Unit</td>
                                                    <td>Tablet</td>
                                                    <td>10</td>
                                                    <td><input type="text" size="2" class="text-center" value="30"></td>
                                                </tr>
                                                <tr>
                                                    <td>Penicilin</td>
                                                    <td>MAR</td>
                                                    <td>10mg</td>
                                                    <td>1 Unit</td>
                                                    <td>Tablet</td>
                                                    <td>10</td>
                                                    <td><input type="text" size="2" class="text-center" value="30"></td>
                                                </tr>
                                                <tr>
                                                    <td>Penicilin</td>
                                                    <td>MAR</td>
                                                    <td>10mg</td>
                                                    <td>1 Unit</td>
                                                    <td>Tablet</td>
                                                    <td>10</td>
                                                    <td><input type="text" size="2" class="text-center" value="30"></td>
                                                </tr>
                                                <tr>
                                                    <td>Penicilin</td>
                                                    <td>MAR</td>
                                                    <td>10mg</td>
                                                    <td>1 Unit</td>
                                                    <td>Tablet</td>
                                                    <td>10</td>
                                                    <td><input type="text" size="2" class="text-center" value="30"></td>
                                                </tr>
                                                <tr>
                                                    <td>Penicilin</td>
                                                    <td>MAR</td>
                                                    <td>10mg</td>
                                                    <td>1 Unit</td>
                                                    <td>Tablet</td>
                                                    <td>10</td>
                                                    <td><input type="text" size="2" class="text-center" value="30"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>&nbsp;</p>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Select Action</label>
                                                    <div class="select">
                                                        <select>
                                                            <option>Select</option>
                                                            <option>Download Order Form - PDF</option>
                                                            <option>Email To</option>
                                                            <option>Pharmacy</option>
                                                            <option>GP</option>
                                                            <option>Print</option>
                                                        </select>
                                                        <img src="images/left-arrow.svg" class="svg"> </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Mark Order as Sent?</label>
                                                        <div class="select">
                                                            <select>
                                                                <option>Select</option>
                                                                <option>Yes</option>
                                                                <option>No</option>
                                                            </select>
                                                            <img src="images/left-arrow.svg" class="svg"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                                <section class="contentFooter">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <button>back</button>
                                            <button class="completed">Save</button>
                                        </div>
                                    </div>
                                </section>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>
                                <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                                <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
                                <script src="js/autosize.min.js"></script>
                                <script src="js/custom.js"></script>
                                <script>

                                $('input[name="dateRange"]').daterangepicker({

                                    "opens": "left",

                                    autoUpdateInput: false,

                                    locale: {

                                        cancelLabel: 'Clear'

                                    }

                                });

                                $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {

                                    $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));

                                });



                                $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {

                                    $(this).val('');

                                });

                                </script>
                            </body>
                            </html>
