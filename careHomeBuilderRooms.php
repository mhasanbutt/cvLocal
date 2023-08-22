<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Admin</a></li>
                <li><a href="#">Care Home Builder</a></li>
            </ul>
            <span class="title"><img src="images/construction.png"> Floors / Rooms</span>
        </div>
        <div class="filtersSearch clearfix autoWidth">
            <div class="dropMenu">
                <span class="openDropMenu">Actions</span>
                <ul class="list-unstyled">
                    <li><a href="#" class="floor">Edit Floors</a></li>
                    <li><a href="#" class="room">Edit Bulk Rooms</a></li>
                    <li><a href="#" class="print">Print</a></li>
                </ul>
            </div>

            <a class="new icon" href="newHome.php">New Floor</a>
        </div>
    </section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
                <div class="pageSpecificArea clearfix">
                    <form name="add_resident_form" id="residentForm">
                        <ul class="list-unstyled clearfix">
                            <li class="incrDecr" data-unit="">
                                <span class="title">Registered maximum Service Users</span>
                                <button type="button" class="counterBtn plus"></button>
                                <button type="button" class="counterBtn minus"></button>
                                <input type="text" name="cqcbeds" id="cqcbeds" value="50">
                            </li>

                            <input type="hidden" name="_token" value="EPjJBtgDsmWN4FqMWCeHXd0TVwdNq9tOmpPlS1M6">
                        </ul>
                        <button class="CQCBedUpdate" type="button">Update</button>
                    </form>
                </div>

                <article class="floorsRooms newForm">
                    <span class="title">
                        12-12-Basement
                        <input type="checkbox" name="hasNoK" id="hasNoK" value="1" hidden="">
                        <label for="hasNoK"></label>
                        <button type="button" class="append_panels_button">Add Room(s)</button>
                    </span>

                    <ul class="list-unstyled clearfix">
                        <li>
                            <input type="checkbox" id="room1" hidden>
                            <label for="room1"></label>
                            <input type="text" value="155-155-Room 1">
                            <i></i>
                        </li>
                    </ul>
                </article>
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

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
