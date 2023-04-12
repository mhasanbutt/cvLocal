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
                <li><a href="#">Medication</a></li>
            </ul>
            <span class="title">All Medicines</span>
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
        <div class="clearfix" style="margin-top:20px;">
            <span class="activePresc">Active Prescription(s): <strong>5</strong></span>
            <div class="pull-right">
                <ul class="diseases list-unstyled">
                    <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn"><img src="images/dailynotes.svg" class="svg">Daily Notes (4)</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn dispenseBtn" data-toggle="modal" data-target="#medicinePot">
                        <img src="images/pills-pot.svg" class="svg">Medicine Pot (2)
                        <div class="arrow_box">
                            Medicine has been added to pot.
                        </div>
                    </button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn noIcon">Hide PRN</button>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Show All</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="contentBody noBg">
        <div class="scrollArea">
            <div class="content">
                <div class="dispenseMedication">
                    <ul class="list-unstyled">
                        <li class="tar controlled">
                            <article>
                                <div class="lastGiven">
                                    <span class="type">mar</span>
                                    <span class="timeDate">Last Given: <strong>02:01 pm 20-06-2018</strong></span>
                                </div>
                                <div class="img">
                                    <img src="images/1516097087_lisinopril.png" alt="Cover">
                                </div>
                                <div class="firstInfo">
                                    <div class="medicineName">
                                        <span class="moreInfo"><img src="images/exclamation-mark.svg" class="svg" alt="More Info"></span>
                                        specialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicinespecialControlledMedicine
                                    </div>
                                    <span class="strength">Strength: <strong>10</strong></span>
                                    <p class="description">
                                        Sed ut tellus eu dui dictum dapibus sed a nulla. Sed rhoncus lorem dui, sed fringilla tortor consectetur auctor. Ut euismot...
                                    </p>
                                    <div class="dosageStock">
                                        <span class="dosage">Dosage: <strong>1.00 Tablets (3.00 Tablets max)</strong></span>
                                        <span class="stock">In Stock: <strong>27.00</strong></span>
                                    </div>
                                </div>
                                <div class="cpv">
                                    <span class="info">Controlled, prn, Variable</span>
                                    <span class="dueTime">Due Time: <strong>08:00 am 27-06-2018</strong></span>
                                </div>
                                <div class="cta">
                                    <span class="route">Route: <strong>Suppository</strong></span>
                                    <span class="covert"><span>Covert</span> (Crushed and mixed with drink)</span>
                                    <button type="button"><img src="images/medicine.svg" class="svg" alt="Medicine"> Make Available</button>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button>
            </div>
        </div>
    </section>

    <div class="modal fade medicinePot" id="medicinePot" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body clearfix">
                    <div class="serviceUserInfo clearfix">
                        <img src="images/temp-picture.jpg"><br>
                            Terrance Edwards (Terry)<br>
                            Date of Birth: 15-04-1956<br>
                            Client No.: ID25746<br>
                            Location: Room32
                        </div>
                    <ul class="diseases clearfix list-unstyled">
                        <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                        <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                        <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                    </ul>
                    <div class="select">
                        <select>
                            <option>Status</option>
                            <option>Refused</option>
                            <option>Nausea or vomiting</option>
                            <option>Hospitalised</option>
                            <option>Social Leave</option>
                            <option>Refused &amp; Destroyed</option>
                            <option>Offered PRN not Required</option>
                            <option>Prompt</option>
                            <option>Make Available</option>
                            <option>Other</option>
                            <option>See note</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                    <ul class="potList list-unstyled">
                        <li>
                            <span>Medicine Name<br>
                            <span class="dosage">Quantity/Dosage: 1 / 200mg</span></span>
                            <button class="checked clicked"><img src="images/checked.svg" class="svg"></button>
                            <button class="followup"><img src="images/followup.svg" class="svg"></button>
                            <div class="select">
                                <select>
                                    <option>Status</option>
                                    <option>Refused</option>
                                    <option>Nausea or vomiting</option>
                                    <option>Hospitalised</option>
                                    <option>Social Leave</option>
                                    <option>Refused &amp; Destroyed</option>
                                    <option>Offered PRN not Required</option>
                                    <option>Prompt</option>
                                    <option>Make Available</option>
                                    <option>Other</option>
                                    <option>See note</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </li>
                        <li>
                            <span>Medicine Name<br>
                            <span class="dosage">Quantity/Dosage: 1 / 200mg</span></span>
                            <button class="checked"><img src="images/checked.svg" class="svg"></button>
                            <button class="followup"><img src="images/followup.svg" class="svg"></button>
                            <div class="select">
                                <select>
                                    <option>Status</option>
                                    <option>Refused</option>
                                    <option>Nausea or vomiting</option>
                                    <option>Hospitalised</option>
                                    <option>Social Leave</option>
                                    <option>Refused &amp; Destroyed</option>
                                    <option>Offered PRN not Required</option>
                                    <option>Prompt</option>
                                    <option>Make Available</option>
                                    <option>Other</option>
                                    <option>See note</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </li>
                        <li>
                            <span>Medicine Name<br>
                            <span class="dosage">Quantity/Dosage: 1 / 200mg</span></span>
                            <button class="checked"><img src="images/checked.svg" class="svg"></button>
                            <button class="followup"><img src="images/followup.svg" class="svg"></button>
                            <div class="select">
                                <select>
                                    <option>Status</option>
                                    <option>Refused</option>
                                    <option>Nausea or vomiting</option>
                                    <option>Hospitalised</option>
                                    <option>Social Leave</option>
                                    <option>Refused &amp; Destroyed</option>
                                    <option>Offered PRN not Required</option>
                                    <option>Prompt</option>
                                    <option>Make Available</option>
                                    <option>Other</option>
                                    <option>See note</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </li>
                        <li>
                            <span>Medicine Name<br>
                            <span class="dosage">Quantity/Dosage: 1 / 200mg</span></span>
                            <button class="checked"><img src="images/checked.svg" class="svg"></button>
                            <button class="followup"><img src="images/followup.svg" class="svg"></button>
                            <div class="select">
                                <select>
                                    <option>Status</option>
                                    <option>Refused</option>
                                    <option>Nausea or vomiting</option>
                                    <option>Hospitalised</option>
                                    <option>Social Leave</option>
                                    <option>Refused &amp; Destroyed</option>
                                    <option>Offered PRN not Required</option>
                                    <option>Prompt</option>
                                    <option>Make Available</option>
                                    <option>Other</option>
                                    <option>See note</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </li>
                        <li>
                            <span>Medicine Name<br>
                            <span class="dosage">Quantity/Dosage: 1 / 200mg</span></span>
                            <button class="checked"><img src="images/checked.svg" class="svg"></button>
                            <button class="followup"><img src="images/followup.svg" class="svg"></button>
                            <div class="select">
                                <select>
                                    <option>Status</option>
                                    <option>Refused</option>
                                    <option>Nausea or vomiting</option>
                                    <option>Hospitalised</option>
                                    <option>Social Leave</option>
                                    <option>Refused &amp; Destroyed</option>
                                    <option>Offered PRN not Required</option>
                                    <option>Prompt</option>
                                    <option>Make Available</option>
                                    <option>Other</option>
                                    <option>See note</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Completed</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="dispensePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Dispense Witness</h4>
                </div>
                <div class="modal-body dispensePop">
                    <div class="serviceUserInfo clearfix"><img src="images/temp-picture.jpg"><br>
                    Terrance Edwards (Terry)<br>
                    Date of Birth: 15-04-1956<br>
                    Client No.: ID25746<br>
                    Location: Room32</div>
                    <ul class="diseases clearfix list-unstyled">
                        <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                        <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                        <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                    </ul>
                    <div>
                        <span class="mediName">Medicine Name [MAR]</span><br>
                        <span class="dosage"><span>Strength:</span> 400mg</span>
                        <p>
                            Directions Etiam arcu velit, vehicula sed imperdiet a, consectetur non eros. Etiam eu diam pharetra, tempus leo vel, vestibulum risus. Sed id blandit ante. Donec ac orci sed ante lacinia consequat.
                        </p>
                        <span class="reqDosage"><span>Dosage:</span> 200 mg</span> <span class="qty"><span>Quantity:</span> 1 - 2</span> <span class="prescribedQty"><span>Prescribed Quantity:</span> 20</span>
                    </div>
                    <hr>
                    <form>
                        <div style="position:relative; margin-bottom:20px;">
                            You are using a medication that is expiring soon,<br>do you want to open a new medication?
                            <div class="select pull-right">
                                <select>
                                    <option>Choose</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group date">
                                    <label>Date of Opening</label>
                                    <input type="text">
                                    <img src="images/calendar-icon.svg" class="svg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group date">
                                    <label>Use Before</label>
                                    <input type="text">
                                    <img src="images/calendar-icon.svg" class="svg">
                                </div>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <hr>
                        <h4>Credentials Required for Controlled Medicine</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Done</button>
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
