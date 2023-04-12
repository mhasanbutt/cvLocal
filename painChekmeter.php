<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Care</a></li>
                <li><a href="#">Health Stats</a></li>
                <li><a href="#">Vitals</a></li>
            </ul>
            <span class="title">Temperature</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="painChek text-center">
                    <input type="text" id="temperatureSlider" name="weight" value="5">
                    <br clear="all">
                    <p>NRS Pain score: 7, <strong>Severe</strong> <span><i></i><i></i><i></i><i></i></span></p>
                    An NRS score of 7 or higher is classified as Severe Pain.
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

    <div class="modal fade toDoListPop" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add to To-Do-List</h4>
                </div>
                <div class="modal-body inBodyForm">
                    <div class="form-group date">
                        <label>Date / Time</label>
                        <input type="text" name="dateRange">
                        <small>Choose date/time of the task</small>
                        <img src="images/calendar-icon.svg" class="calendar svg">
                    </div>
                    <div class="form-group">
                        <label>Alert</label>
                        <span class="toggles fixed">
                            <input type="checkbox" name="alert" id="alert" class="ios-toggle">
                            <label for="alert" class="checkbox-label" data-off="NO" data-on="YES"></label>
                        </span>
                        <small class="clearfix">To show notification on date/time</small>
                    </div>
                    <div class="form-group">
                        <label>Repeat</label>
                        <div class="select">
                            <select>
                                <option></option>
                                <option>Every Hour</option>
                                <option>Every 2 Hours</option>
                                <option>Every 3 Hours</option>
                                <option>Every 4 Hours</option>
                                <option>Every 5 Hours</option>
                                <option>Every 6 Hours</option>
                                <option>Every Day</option>
                                <option>Every Week</option>
                            </select>
                            <img src="images/left-arrow.svg" class="svg">
                        </div>
                        <small>Interval of task to be done</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
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

        $('#toDoList').click(function(){
            if ($('#toDoList').is(':checked')) {
                $('.toDoListPop').modal('show')
            } else {
                $('.toDoListPop').modal('hide')
            }
        });

        $("#temperatureSlider").ionRangeSlider({
            min: 0,
            max: 10,
            force_edges: true,
            step: 1,
            grid: true,
            values: [
                "0", "1", "2", "3", "4", "5",
                "6", "7", "8", "9", "10"
            ],
            hide_min_max: true
        });

    </script>
</body>
</html>
