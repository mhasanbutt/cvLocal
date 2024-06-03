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
    <link href="css/" rel="stylesheet">
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
    <div class="ProfileInfo">
        <ul class="list-unstyled clearfix">
            <li>
                <article class="residentBarName">Mr F S T</article>
            </li>
            <li>
                <span>Date of Admission</span>
                05-04-1974
            </li>
            <li>
                <span>Date of Birth</span>
                05-04-1974
            </li>
            <li>
                <span>Client No.</span>
                211
            </li>
            <li>
                <span>Location</span>
            </li>
            <li>
                <span>NHS</span>
            </li>
        </ul>
    </div>
</section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="serviceUserSummary clearfix">
                <div class="content">
                    <div class="diseasesAlert">
                        'DNACPR' has been updated from 'Alert Centre' Previous Value was 'No' and New Value is 'Yes' By 'Rishi R_' At '20-05-2024'
                        <button type="button">Ignore</button>
                    </div>
                    <aside class="ServiceuserImg">
                        <span class="picture">
                            <img src="images/temp-picture.jpg">
                        </span>
                    </aside>
                    <div class=" formBlock">
                        <form class="newForm">
                            <span class="title">Personal Details</span>
                            <ul class="col4 list-unstyled clearfix">
                                <li>
                                    <label class="title">FULL NAME</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">Likes to be known as</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">Date of Birth</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">Age</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">Gender</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">NHS No.</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">Religion</label>
                                    <input type="text">
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class=" formSegment">
                        <form class="newForm">
                            <span class="title">Home Details</span>
                            <ul class="col4 list-unstyled clearfix">
                                <li>
                                    <label class="title">Name</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">address</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">post code</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">telephone</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">floor</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">Room</label>
                                    <input type="text">
                                </li>
                                <li>
                                    <label class="title">Aware of transfer?</label>
                                    <input type="checkbox" id="no-fluid-restriction" hidden>
                                    <label for="no-fluid-restriction"></label>
                                </li>
                            </ul>
                        </form>
                        <span class="Allergytitle">Key Indicators</span>
                        <section class="statusLables">
                            <i class="title">Allergies</i>
                            <span>S.L.T     Level 3 - Liquidised. Level 2 - Mildly Thick</span>
                            <ul class="allergyList">
                                <li>Plate Size - Medium</li>
                            </ul>
                        </section>
                        <span class="Allergytitle">Wounds & Bruises</span>
                        <div class="woundArea">
                            <div class="content generalListing bruisesListing">
                                <section>
                                    <ul class="list-unstyled clearfix">
                                        <li>
                                            <span class="title">Date reported</span>
                                            <span class="value">11.19.2021</span>
                                        </li>
                                        <li>
                                            <span class="title">location of wound</span>
                                            <span class="value">right inner thigh 2</span>
                                        </li>
                                        <li>
                                            <span class="title">type of wound</span>
                                            <span class="value">Bruise</span>
                                        </li>
                                        <li>
                                            <span class="title">status</span>
                                            <span class="value">Active</span>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                            <div class="woundImage">
                                <img src="./images/Image%202.png">
                            </div>
                            <div class="woundInfoImg">
                                <img src="images/bodyMapLegendsimg.png">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>
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
        min: 35,
        max: 42,
        force_edges: true,
        postfix: ' <sup>o</sup>C',
        step: 0.1
    });

</script>
</body>
</html>
