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
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Admin</a></li>
                <li><a href="#">Survey</a></li>
            </ul>
            <span class="title"><img src="images/survey.png" alt=""> My Surveys</span>
        </div>
        <ul class="search list-unstyled clearfix col4">
            <li>
                <div class="fieldContainer searchField">
                    <input type="text" placeholder="Search by keyword">
                    <img src="images/magnifier-tool.svg" class="searchIcon svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Survey Conducted By</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Published?</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer date">
                    <input type="text" name="dateRange" placeholder="Date range">
                    <img src="images/calendar-icon.svg" class="calendar svg">
                </div>
            </li>
        </ul>
        <div class="clearfix">
            <button type="button" class="searchButton">Search</button>
            <div class="pull-right clearfix">
                <div class="btn-group pull-left noAlergy">
                    <button class="btn default"><img src="images/analysis-icon.svg" class="svg"> Analysis</button>
                </div>
                <div class="btn-group noAlergy">
                    <button type="button" class="btn orange"><img src="images/add-new-document.svg" class="svg">Create Survey</button>
                </div>
            </div>
        </div>
    </section>

    <section class="contentBody noBg ">
        <div class="scrollArea">
            <div class="content">
                <article class="feedbackListing survey">
                    <ul class="list-unstyled clearfix">
                        <li>
                            <i>Title</i> <span class="value">Care Plan Survey</span> 
                        </li>
                        <li>
                            <i>Created</i> <span class="value">02-08-2021</span>
                        </li>
                        <li>
                            <i>Modified</i> <span class="value">04-08-2021 <a href="#" class="edit">Edit</a></span>
                        </li>
                        <li>
                            <i>Responses</i> <span class="value">3</span>
                        </li>
                        <li>
                            <i>Analyze</i> <span class="value"><a href="#" class="analyze">Analyze</a></span>
                        </li>
                        <li>
                            <i>&nbsp;</i> <span class="value"><a href="#" class="remove">Remove</a></span>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">

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

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
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