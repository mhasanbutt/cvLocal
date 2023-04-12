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
            <span class="title">Medication Summary</span>
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
                <div class="fieldContainer select">
                    <select>
                        <option>Location</option>
                        <option>Floor 1</option>
                        <option>Floor 2</option>
                        <option>Floor 3</option>
                        <option>Global</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Display</option>
                        <option>Scheduled</option>
                        <option>Adminstered</option>
                        <option>Overdue</option>
                        <option>Not Done Yet</option>
                        <option>Not Administered</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
        </ul>
        <div class="clearfix">
            <button type="button" class="searchButton">Search</button>
            <div class="pull-right clearfix">
                <ul class="diseases list-unstyled">
                    <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Service User</th>
                            <th>Room</th>
                            <th>Med Ref.</th>
                            <th>Date of Birth</th>
                            <th>Allergies</th>
                            <th>Time Remaining</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="images/temp-picture.jpg" class="picture"></td>
                            <td>Terrance Edwards</td>
                            <td>Room 1</td>
                            <td>#</td>
                            <td>05-04-1947</td>
                            <td><span title="All Allergies" class="allergies"><img src="images/exclamation-mark.svg" class="svg"></span></td>
                            <td>
                                <div class="medStatus">
                                    <img src="images/medStatus_img5.png">
                                </div>
                                <span class="medTime">Over Due since <span>20 Minutes</span></span>
                            </td>
                            <td class="text-center"><a href="medication.php" class="view"><img src="images/view.svg" class="svg"></a></td>
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
