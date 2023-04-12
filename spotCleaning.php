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
                <li><a href="#">House Keeping</a></li>
                <li><a href="#">Task(s)</a></li>
            </ul>
            <span class="title">Add Spot Cleaning</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <form class="inBodyForm form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Select Floor</label>
                                <div class="col-md-2">
                                    <div class="select">
                                        <select>
                                            <option>Floor 1</option>
                                            <option>Floor 2</option>
                                            <option>Floor 3</option>
                                            <option>Floor 4</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Select Room</label>
                                <div class="col-md-2">
                                    <div class="select">
                                        <select>
                                            <option>A-11</option>
                                            <option>A-12</option>
                                            <option>A-13</option>
                                            <option>A-14</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Cleaning Type</label>
                                <div class="col-md-8">
                                    <ul class="spotCleaning clearfix list-unstyled">
                                        <li>
                                            <input id="spotPoint1" name="spotPoint" type="radio" hidden class="hidden">
                                            <label for="spotPoint1">
                                                <span><img src="images/carpet.svg" class="svg"></span>
                                                <span>Carpet Cleaning</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input id="spotPoint2" name="spotPoint" type="radio" hidden class="hidden">
                                            <label for="spotPoint2">
                                                <span><img src="images/vacuum.svg" class="svg"></span>
                                                <span>Hoovering</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input id="spotPoint3" name="spotPoint" type="radio" hidden class="hidden">
                                            <label for="spotPoint3">
                                                <span><img src="images/mopping.svg" class="svg"></span>
                                                <span>Mopping</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input id="spotPoint4" name="spotPoint" type="radio" hidden class="hidden">
                                            <label for="spotPoint4">
                                                <span><img src="images/bin.svg" class="svg"></span>
                                                <span>Empty Sanitary Bins</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
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
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
