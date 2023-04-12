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
            <span class="title">Add Rooms</span>
        </div>
        <div class="pull-right clearfix">
            <div class="btn-group noAlergy">
                <button type="button" class="btn orange"><img src="images/settings-work-tool.svg" class="svg">Edit Rooms</button>
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Add Floor</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content specialHR">
                <div class="row">
                    <div class="col-md-12">
                        <form class="inBodyForm roomsList">
                            <div class="row">
                                <div class="col-md-3">
                                    <table class="floorsTable table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="3">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f11" class="hidden">
                                                        <label for="f11"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                    Floor 1 <a href="#"><img src="images/plus.svg" class="svg"></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f12" class="hidden">
                                                        <label for="f12"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f13" class="hidden">
                                                        <label for="f13"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <table class="floorsTable table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="3">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f2" class="hidden">
                                                        <label for="f2"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                    Floor 2 <a href="#"><img src="images/plus.svg" class="svg"></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f21" class="hidden">
                                                        <label for="f21"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f22" class="hidden">
                                                        <label for="f22"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f23" class="hidden">
                                                        <label for="f23"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <table class="floorsTable table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="3">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f31" class="hidden">
                                                        <label for="f31"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                    Floor 3 <a href="#"><img src="images/plus.svg" class="svg"></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f32" class="hidden">
                                                        <label for="f32"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f33" class="hidden">
                                                        <label for="f33"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f34" class="hidden">
                                                        <label for="f34"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f35" class="hidden">
                                                        <label for="f35"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <table class="floorsTable table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="3">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f41" class="hidden">
                                                        <label for="f41"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                    Floor 4 <a href="#"><img src="images/plus.svg" class="svg"></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f42" class="hidden">
                                                        <label for="f42"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f43" class="hidden">
                                                        <label for="f43"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f44" class="hidden">
                                                        <label for="f44"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f45" class="hidden">
                                                        <label for="f45"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f46" class="hidden">
                                                        <label for="f46"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="row">
                            	<div class="col-md-3">
                                    <table class="floorsTable table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="3">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f111" class="hidden">
                                                        <label for="f111"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                    Floor 1 <a href="#"><img src="images/plus.svg" class="svg"></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f122" class="hidden">
                                                        <label for="f122"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f133" class="hidden">
                                                        <label for="f133"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <table class="floorsTable table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="3">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f221" class="hidden">
                                                        <label for="f221"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                    Floor 2 <a href="#"><img src="images/plus.svg" class="svg"></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f222" class="hidden">
                                                        <label for="f222"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f223" class="hidden">
                                                        <label for="f223"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                            <tr>
                                                <td width="30">
                                                    <div class="checkBox">
                                                        <input type="checkbox" name="all" id="f223" class="hidden">
                                                        <label for="f223"><img src="images/checked.svg" class="svg"></label>
                                                    </div>
                                                </td>
                                                <td><input type="text" value="Room 1"></td>
                                                <td><a href="#" data-toggle="modal" data-target="#addRoom"><img src="images/settings-work-tool.svg" class="svg"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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

    <div class="modal fade" id="addRoom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Room</h4>
                </div>
                <div class="modal-body">
                    <form class="inBodyForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Floor</label>
                                    <div class="select">
                                        <select class="disabled" disabled>
                                            <option>Floor 1</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Room Number</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Funding Type</label>
                                    <div class="select">
                                        <select>
                                            <option>Privately Funded</option>
                                            <option>Local Authority</option>
                                            <option>CCG</option>
                                            <option>Mixed</option>
                                            <option>Any</option>
                                            <option>Other</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Room Facing</label>
                                    <div class="select">
                                        <select>
                                            <option>Garden</option>
                                            <option>Courtyard</option>
                                            <option>Street</option>
                                            <option>View</option>
                                            <option>Other</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type of Residency</label>
                                    <div class="select">
                                        <select>
                                            <option>Single</option>
                                            <option>Shared Room</option>
                                            <option>Husband &amp; Wife</option>
                                            <option>Other</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type of Flooring</label>
                                    <div class="select">
                                        <select>
                                            <option>Carpeted</option>
                                            <option>Laminated</option>
                                            <option>Other</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type of Room</label>
                                    <div class="select">
                                        <select>
                                            <option>En Suite</option>
                                            <option>Toilet Only</option>
                                            <option>Other</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group date">
                                    <label>Fee Level <small>[Approximate]</small></label>
                                    <input type="text" name="dateRange">
                                    <img src="images/calendar-icon.svg" class="svg">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Other Features</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
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
    <script src="js/jquery.maphilight.min.js"></script>
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
