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
                <li><a href="#">Care</a></li>
                <li><a href="#">Medication</a></li>
            </ul>
            <span class="title">Order History</span>
        </div>
        <div class="ProfileInfo">
            <img src="images/temp-picture.jpg" class="picture">
            <span class="profileImg"><img src="images/photo-camera.svg" class="svg"></span>
            <ul class="list-unstyled">
                <li>
                    <span>Service User Name</span><br>
                    Terrance Edwards
                </li>
                <li>
                    <span>Date of Birth</span><br>
                    05-04-1974
                </li>
                <li>
                    <span>Client No.</span><br>
                    5921583
                </li>
                <li>
                    <span>Location</span><br>
                    Oxford St.
                </li>
            </ul>
        </div>
        <ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer searchField">
                    <input type="text" placeholder="Search by keyword">
                    <img src="images/magnifier-tool.svg" class="searchIcon svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Service User</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Carer</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer date">
                    <input type="text" name="dateRange" placeholder="Date">
                    <img src="images/calendar-icon.svg" class="calendar svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Floor</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
        </ul>
        <div class="clearfix">
            <button type="button" class="searchButton">Search</button>
            <div class="pull-right clearfix">
                <ul class="diseases list-unstyled" hidden>
                    <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn"><img src="images/plus.svg" class="svg">New Order</button>
                </div>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Date Ordered</th>
                            <th>Date Received</th>
                            <th>Source of Medication</th>
                            <th class="desc">Medicines Ordered</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>28-09-2017</td>
                            <td>30-09-2017</td>
                            <td>Pharmacy - Online Order</td>
                            <td>Paracetamol, Ibuprofen, Lactalo...</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>28-08-2017</td>
                            <td>30-08-2017</td>
                            <td>Boots</td>
                            <td>Penicilin</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>28-09-2017</td>
                            <td>30-09-2017</td>
                            <td>Pharmacy - Online Order</td>
                            <td>Paracetamol, Ibuprofen, Lactalo...</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>28-09-2017</td>
                            <td>30-09-2017</td>
                            <td>Pharmacy - Online Order</td>
                            <td>Paracetamol, Ibuprofen, Lactalo...</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>28-09-2017</td>
                            <td>30-09-2017</td>
                            <td>Pharmacy - Online Order</td>
                            <td>Paracetamol, Ibuprofen, Lactalo...</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>28-09-2017</td>
                            <td>30-09-2017</td>
                            <td>Pharmacy - Online Order</td>
                            <td>Paracetamol, Ibuprofen, Lactalo...</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>28-09-2017</td>
                            <td>30-09-2017</td>
                            <td>Pharmacy - Online Order</td>
                            <td>Paracetamol, Ibuprofen, Lactalo...</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>28-09-2017</td>
                            <td>30-09-2017</td>
                            <td>Pharmacy - Online Order</td>
                            <td>Paracetamol, Ibuprofen, Lactalo...</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>28-09-2017</td>
                            <td>30-09-2017</td>
                            <td>Pharmacy - Online Order</td>
                            <td>Paracetamol, Ibuprofen, Lactalo...</td>
                            <td>Pending</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-4">
                <div class="listCount">
                    <select>
                        <option>50</option>
                        <option>100</option>
                        <option>150</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="records">

                    <div class="counter">
                        <span>Page</span>
                        <span class="field"><input type="text" value="1"></span>
                        <span>of 15</span>
                    </div>
                    <span class="next"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
                </div>
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
