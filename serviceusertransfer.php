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

    <style>
        .highcharts-drilldown-axis-label {
            fill: #CCC !important;
        }

        text {
            fill: #CCC !important;
        }
    </style>
</head>

<body>
    <div class="directorDash">
        <aside>
            <article>
                Director <span class="home">(Care Home)</span> <i><?php echo date('M d, Y'); ?></i>
            </article>
            <ul class="list-unstyled menu">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Messages <i>12</i></a></li>
                <li><a href="#">Log Out</a></li>
            </ul>
        </aside>

        <div class="allStat">
            <span>
                <i>78<small>%</small></i> Occupancy Of All<br>Care Homes
            </span>
            <span>
                <i>06</i> Number Of<br>Care Homes
            </span>
        </div>

        <section class="show">
            <h3>Service User Transfer</h3>

            <form action="">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <label for="">From Home</label>
                        <div class="select">
                            <select name="" id="" tabindex="1">
                                <option value="">Care Home 1</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <label for="">Floor</label>
                        <div class="select">
                            <select name="" id="">
                                <option value="">Floor 1</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <label for="">Service User</label>
                        <div class="select">
                            <select name="" id="">
                                <option value="">Service User 1</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <label for="">Date of Discharge</label>
                        <input type="text" class="date">
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <label for="">To Home</label>
                        <div class="select">
                            <select name="" id="">
                                <option value="">Care Home 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <label for="">Floor</label>
                        <div class="select">
                            <select name="" id="">
                                <option value="">Floor 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <label for="">Room</label>
                        <div class="select">
                            <select name="" id="">
                                <option value="">Room 1</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="">Notes</label>
                        <textarea name="" id=""></textarea>
                    </div>
                </div>

                <button type="button" class="showTransferPop">Continue</button>
            </form>
        </section>
    </div>

    <div class="popmodal transferPop">
        <div class="modalContainer">
            <section>
                <form action="">
                    <p><em><small>Note: Service User profile and contacts will be transfered as a mandatory information. Other than this;</small></em></p>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Would you like to Transfer Alerts &amp; Allergies?</label>
                            <div class="toggle">
                                <input type="checkbox" name="" id="alerts">
                                <label for="alerts"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">* Would you like to Transfer Active Care Plans?</label>
                            <div class="toggle">
                                <input type="checkbox" name="" id="careplans">
                                <label for="careplans"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Would you like to Transfer Active Risk Assessments?</label>
                            <div class="toggle">
                                <input type="checkbox" name="" id="risk">
                                <label for="risk"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Would you like to Transfer Active Scored Assessments?</label>
                            <div class="toggle">
                                <input type="checkbox" name="" id="scored">
                                <label for="scored"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Would you like to Transfer Active Mental Capacity Assessments?</label>
                            <div class="toggle">
                                <input type="checkbox" name="" id="mca">
                                <label for="mca"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Would you like to Transfer Documents?</label>
                            <div class="toggle">
                                <input type="checkbox" name="" id="docs">
                                <label for="docs"></label>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="hideTransferPop">Cancel</button> <button type="button" class="green">Transfer</button>
                    <hr>
                    <p><em><small>* Care Plan headings unique to this home will not be transferred to the new home </small></em></p>
                </form>
            </section>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.showTransferPop').click(function(){
            $('.transferPop').addClass('active');
        });
        $('.hideTransferPop').click(function(){
            $('.transferPop').removeClass('active');
        });
    </script>
</body>

</html>