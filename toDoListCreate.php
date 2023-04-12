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
                <li><a href="#">Care Routines</a></li>
            </ul>
            <span class="title">Create Task(s)</span>
        </div>
    </section>

    <section class="contentBody">
        <aside class="toDoForm">
            <div class="level one">
                <div class="scrollArea">
                    <ul class="list-unstyled">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                <span class="moduleName">Vitals</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                <span class="moduleName">Vitals</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="level two">
                <div class="scrollArea">
                    <ul class="list-unstyled">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                <span class="moduleName">Vitals</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                <span class="moduleName">Vitals</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="level three">
                <div class="scrollArea">
                    <ul class="list-unstyled">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                <span class="moduleName">Vitals</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                <span class="moduleName">Vitals</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <form class="inBodyForm clearfix">
                <div class="scrollArea">
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Area</label>
                                    <div class="select">
                                        <select>
                                            <option>Home</option>
                                            <option>Floor</option>
                                            <option>Room</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group date">
                                    <label>Start Date</label>
                                    <input type="text" name="startDate">
                                    <img src="images/calendar-icon.svg" class="svg">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group date">
                                    <label>Select Time</label>
                                    <input type="text" name="startDate">
                                    <img src="images/clock-with-white-face.svg" class="svg">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Duration</label>
                                    <div class="select">
                                        <select>
                                            <option>5 min</option>
                                            <option>10 min</option>
                                            <option>15 min</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Frequency</label>
                                    <div class="select">
                                        <select>
                                            <option value="" selected="selected">No Frequency</option><option value="Every 30 Minutes">Every 30 Minutes</option><option value="Every Hour">Every Hour</option><option value="Every 2 Hours">Every 2 Hours</option><option value="Every 3 Hours">Every 3 Hours</option><option value="Every 4 Hours">Every 4 Hours</option><option value="Every 5 Hours">Every 5 Hours</option><option value="Every 6 Hours">Every 6 Hours</option><option value="Every Day">Every Day</option><option value="Every Week">Every Week</option><option value="Every Month">Every Month</option><option value="Every Year">Every Year</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group date">
                                    <label>For How Long?</label>
                                    <input type="text" name="startDate">
                                    <img src="images/calendar-icon.svg" class="svg">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Staff Required</label>
                                    <div class="select">
                                        <select>
                                            <option>Not Required</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Created By</label>
                                    <span class="formInfo">Carer</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Alert</label>
                                    <span class="toggles fixed">
                                        <input type="checkbox" name="alert" id="alert" class="ios-toggle">
                                        <label for="alert" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Task</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="formButton orange">Save</button>
                    </section>
                </div>
            </form>
        </aside>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-12">
                <button>Back</button>
                <button class="save" id="preview">Preview</button>
            </div>
        </div>
    </section>

    <div class="toDoPop">
        <div>
            <div class="list">
                <article>To-Do Task(s) List</article>
                <section>
                    <div class="scrollArea">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Modules</th>
                                    <th>Area</th>
                                    <th>Start Date</th>
                                    <th>Frequency</th>
                                    <th>Task</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                            <li>
                                                <span class="icon"><img src="images/vitals.svg" class="svg"></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        Floor 1 / Room 1
                                    </td>
                                    <td>
                                        07-02-2018
                                    </td>
                                    <td>
                                        Every 30 minutes
                                    </td>
                                    <td>
                                        Take Blood Pressure Measurements
                                    </td>
                                    <td>
                                        <button type="button" class="trash"><img src="images/garbage.svg" class="svg"></button>
                                    </td>
                                    <td>
                                        <button type="button"><img src="images/pencil.svg" class="svg"></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <div class="cta">
                    <button id="close">Close</button> <button class="save">Confirm</button>
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
    <script>

        $('#preview').click(function(){
            $('.toDoPop').addClass('active');
        });

        $('#close').click(function(){
            $('.toDoPop').removeClass('active');
        });

        $('.one a').click(function(){
            $('.one a').removeClass('focus');
            $(this).addClass('focus');
            $('.two').addClass('show');
            $('.three').removeClass('show');
            $('.two a').removeClass('focus');
            $('.three a').removeClass('focus');
            $('.inBodyForm').fadeOut(100);
        });

        $('.two a').click(function(){
            $('.two a').removeClass('focus');
            $(this).addClass('focus');
            $('.three').addClass('show');
            $('.three a').removeClass('focus');
            $('.inBodyForm').fadeOut(100);
        });

        $('.three a').click(function(){
            $('.three a').removeClass('focus');
            $(this).addClass('focus');
            $('.inBodyForm').fadeOut(100).delay(500).fadeIn(100)
        });

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
