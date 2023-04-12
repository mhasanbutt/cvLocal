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
                <li><a href="#">Accounts</a></li>
                <li><a href="#">Service User</a></li>
            </ul>
            <span class="title">Create Contract</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content specialHR">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="inBodyForm fieldBorders orange">
                            <h4><span>Service User Summary</span></h4>
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-md-12 age">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" value="68" id="age" class="disabled" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middle Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <div class="select">
                                                    <select>
                                                        <option>Mr.</option>
                                                        <option>Professor</option>
                                                    </select>
                                                    <img src="images/left-arrow.svg" class="svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Known As</label>
                                                <input type="text" value="Jimmy">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group date">
                                                <label>Date of Birth</label>
                                                <input type="text" id="dob" name="dateRange" placeholder="Date">
                                                <img src="images/calendar-icon.svg" class="calendar svg">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sex</label>
                                                <div class="select">
                                                    <select>
                                                        <option></option>
                                                        <option>Male</option>
                                                    </select>
                                                    <img src="images/left-arrow.svg" class="svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Marital Status</label>
                                                <div class="select">
                                                    <select>
                                                        <option></option>
                                                        <option>Married</option>
                                                    </select>
                                                    <img src="images/left-arrow.svg" class="svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Religion</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ethnic Origin</label>
                                                <div class="select">
                                                    <select>
                                                        <option></option>
                                                        <option>White British</option>
                                                    </select>
                                                    <img src="images/left-arrow.svg" class="svg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <span class="profileImgLarge pull-right" style="display:inline-block;">
                                        <img src="images/photo-camera.svg" class="svg">
                                        <img src="images/temp-picture.jpg">
                                    </span>
                                </div>
                            </div>
                            <hr>
                            <h4><span>In-house Information</span></h4>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Room Number</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Residency Type</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">Permanent</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Placement Criteria</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">Residential Dementia</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Service User Number</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">NI Number</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">NHS Number</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Local Authority</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">LA</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Weekly Fees</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Invoice Total</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group date">
                                        <label for="">Date of Admission</label>
                                        <input type="text">
                                        <img src="images/calendar-icon.svg" class="svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <h4><span>Contract Information</span></h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">Fees</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Repeat</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">Quarterly</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Days</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Method</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">BACS</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group date">
                                        <label for="">Contract Start</label>
                                        <input type="text">
                                        <img src="images/calendar-icon.svg" class="svg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group date">
                                        <label for="">Contract End</label>
                                        <input type="text">
                                        <img src="images/calendar-icon.svg" class="svg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group date">
                                        <label for="">Processing Date</label>
                                        <input type="text">
                                        <img src="images/calendar-icon.svg" class="svg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group date">
                                        <label for="">Next Period Start</label>
                                        <input type="text">
                                        <img src="images/calendar-icon.svg" class="svg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group date">
                                        <label for="">Next Period End</label>
                                        <input type="text">
                                        <img src="images/calendar-icon.svg" class="svg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group date">
                                        <label for="">Days upon Death</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Account Reference</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">Al BL</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4><span>NOK/Payee</span></h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Contact Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">PostCode</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Telephone</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Fax Number</label>
                                        <input type="email">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4><span>Funding Information</span></h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Nominal</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">4001 - Lewisham</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">VAT Code</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">T9</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Funding</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="">LA</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Allow Printing</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="allowPrint" id="allowPrint" class="ios-toggle">
                                            <label for="allowPrint" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Stop Invoicing</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="stopInvoice" id="stopInvoice" class="ios-toggle">
                                            <label for="stopInvoice" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>

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
