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
            </ul>
            <span class="title">Communication Book</span>
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
                        <option>Terrance Edwards</option>
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
                <div class="btn-group noAlergy">
                    <button type="button" class="btn orange"><img src="images/add-new-document.svg" class="svg">New</button>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Mark as Read</a></li>
                    </ul>
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
                            <th>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="all" class="hidden">
                                    <label for="all"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </th>
                            <th>Date / Time</th>
                            <th>Service User</th>
                            <th>Carer</th>
                            <th class="desc">Description</th>
                            <th>Read By</th>
                            <th width="50"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. </td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. </td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. Phasellus dolor enim, volutpat. </td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Nulla facilisi</td>
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
                    <span class="previous"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
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
                            <option selected>Service User</option>
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
