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
                <li><a href="#">Care Plan</a></li>
            </ul>
            <span class="title">Review</span>
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
        <ul class="search list-unstyled clearfix" style="visibility:hidden"></ul>
        <div class="clearfix">
            <div class="pull-right clearfix">
                <ul class="diseases list-unstyled">
                    <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn orange"><img src="images/Checked.svg" class="svg">No Change</button>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
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
                            <th>Care Plan</th>
                            <th>Service User</th>
                            <th>Status</th>
                            <th>Last Reviewed</th>
                            <th>Next Review</th>
                            <th width="50"></th>
                            <th width="50"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview" data-toggle="modal" data-target="#quickView"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Behavioural Concerns</td>
                            <td>Terrance Edwards</td>
                            <td>Pending</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                            <td><a href="#" class="qview"><img src="images/quickview.svg" class="svg"></a></td>
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

    <div class="modal fade" id="quickView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Behavioural Concerns</h4>
                </div>
                <div class="modal-body">
                    <div class="inBodyForm">
                        <div class="form-group">
                            <label>Identified Need</label>
                            <textarea>Suspendisse potenti. Donec hendrerit orci neque, eu sodales neque placerat ac. Vivamus scelerisque libero erat, eu finibus urna facilisis nec. Aenean at porta odio, vel laoreet felis. Pellentesque eget porta ante, ut maximus lacus. Morbi rhoncus mi in scelerisque congue. In quis ex ac lectus venenatis rutrum a at dui. </textarea>
                        </div>
                        <div class="form-group">
                            <label>Aim of Plan</label>
                            <textarea>Suspendisse potenti. Donec hendrerit orci neque, eu sodales neque placerat ac. Vivamus scelerisque libero erat, eu finibus urna facilisis nec. Aenean at porta odio, vel laoreet felis. Pellentesque eget porta ante, ut maximus lacus. Morbi rhoncus mi in scelerisque congue. In quis ex ac lectus venenatis rutrum a at dui. </textarea>
                        </div>
                        <div class="form-group">
                            <label>Plan of Action</label>
                            <textarea>Suspendisse potenti. Donec hendrerit orci neque, eu sodales neque placerat ac. Vivamus scelerisque libero erat, eu finibus urna facilisis nec. Aenean at porta odio, vel laoreet felis. Pellentesque eget porta ante, ut maximus lacus. Morbi rhoncus mi in scelerisque congue. In quis ex ac lectus venenatis rutrum a at dui. </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        $('#quickView').on('show.bs.modal', function (e) {
          autosize($('textarea'));
        })
    </script>
</body>
</html>
