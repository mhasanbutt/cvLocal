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
                <li><a href="#">Support Dashboard</a></li>
                <li><a href="#">Enquiries</a></li>
            </ul>
            <span class="title"><img src="images/enquiries.png"> New Enquiry</span>
        </div>

        <ul class="list-unstyled enquiryStatus">
            <li title="New Enquiry"><span>New Enquiry</span></li>
            <li title="Rishi Intro Call done"><span>Rishi Intro Call done</span></li>
            <li title="Pre Demo"><span>Pre Demo</span></li>
            <li title="Demo Booked"><span>Demo Booked</span></li>
            <li title="Demo Done" class="highlight"><span>Demo Done</span></li>
            <li title="Quotation Sent"><span>Quotation Sent</span></li>
            <li title="Migration Files Sent"><span>Migration Files Sent</span></li>
            <li title="Migration Files Received"><span>Migration Files Received</span></li>
            <li title="Cloud Uploaded"><span>Cloud Uploaded</span></li>
            <li title="Hardware Sent For Delivery"><span>Hardware Sent For Delivery</span></li>
            <li title="Onboarding Date Decided"><span>Onboarding Date Decided</span></li>
            <li title="Cloud Link &amp; Password Emailed"><span>Cloud Link &amp; Password Emailed</span></li>
            <li title="Onboarded"><span>Onboarded</span></li>
            <li title="Dead Lead"><span>Dead Lead</span></li>
        </ul>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <form class="inBodyForm">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="select">
                                            <select>
                                                <option></option>
                                                <option value="">New Enquiry</option>
                                                <option value="">Rishi Intro Call done</option>
                                                <option value="">Pre Demo</option>
                                                <option value="">Demo Booked</option>
                                                <option value="">Demo Done</option>
                                                <option value="">Quotation Sent</option>
                                                <option value="">Migration Files Sent</option>
                                                <option value="">Migration Files Received</option>
                                                <option value="">Cloud Uploaded</option>
                                                <option value="">Hardware Sent For Delivery</option>
                                                <option value="">Onboarding Date Decided</option>
                                                <option value="">Cloud Link &amp; Password Emailed</option>
                                                <option value="">Onboarded</option>
                                                <option value="">Dead Lead</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Date</label>
                                        <input type="text" name="datetimerange">
                                        <img src="images/calendar-icon.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact Person Name</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact Person Position</label>
                                        <div class="select">
                                            <select>
                                                <option></option>
                                                <option value="">Owner</option>
                                                <option value="">Director</option>
                                                <option value="">Partner</option>
                                                <option value="">Regional manager</option>
                                                <option value="">Manager</option>
                                                <option value="">Other</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Manager Name</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Manager Email</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Manager Telephone</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Billing Email</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Marketing Email</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contract Sent</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="controlled" id="addcalreception" class="ios-toggle">
                                            <label for="addcalreception" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contract Received</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="controlled" id="addcalreception" class="ios-toggle">
                                            <label for="addcalreception" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Upload Contract</label>
                                        <input type="file" name="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Modules (multi select)</label>
                                        <div class="select">
                                            <select>
                                                <option></option>
                                                <option value="">Care</option>
                                                <option value="">Emar</option>
                                                <option value="">HR</option>
                                                <option value="">Chef</option>
                                                <option value="">HK</option>
                                                <option value="">Rota</option>
                                                <option value="">Clocking In</option>
                                                <option value="">Accounts</option>
                                                <option value="">Visitors Book</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hardware  (multi select)</label>
                                        <div class="select">
                                            <select>
                                                <option></option>
                                                <option value="">Hardware invoice sent</option>
                                                <option value="">Hardware sent</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Payment Received</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="controlled" id="addcalreception" class="ios-toggle">
                                            <label for="addcalreception" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phones</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tablets</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Clocking In</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Charging Docks</label>
                                        <input type="text" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Online Training</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="controlled" id="addcalreception" class="ios-toggle">
                                            <label for="addcalreception" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Date</label>
                                        <input type="text" name="datetimerange">
                                        <img src="images/calendar-icon.svg" class="svg">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Onsite Training</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="controlled" id="addcalreception" class="ios-toggle">
                                            <label for="addcalreception" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Date</label>
                                        <input type="text" name="datetimerange">
                                        <img src="images/calendar-icon.svg" class="svg">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Onboarding Date / Link Sent</label>
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="controlled" id="addcalreception" class="ios-toggle">
                                            <label for="addcalreception" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group date">
                                        <label>Date</label>
                                        <input type="text" name="datetimerange">
                                        <img src="images/calendar-icon.svg" class="svg">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <section class="checklist">
                                <h3>Task(s) Checklist</h3>
                                <div class="form-group">
                                    <label for="">Activate Pending Task Checklist</label>
                                    <span class="toggles fixed">
                                        <input type="checkbox" name="controlled" id="activateList" class="ios-toggle">
                                        <label for="activateList" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                    </span>
                                </div>

                                <ul class="list-unstyled">
                                    <li>
                                        <div class="form-group">
                                            <label for="">Contract Sent</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="">Contract Received2</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="">Hardware Invoice Sent</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="">Hardware Sent</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="">Payment Received</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="">Onboarding Date Decided</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="">Onboarding Date / Link Sent</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="">Onboarding Date / Link Sent</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="">Travel Arrangements Made</label>
                                            <span class="multiChoice">
                                                <input type="radio" name="contractSent" id="yes" hidden>
                                                <label for="yes">
                                                    Yes
                                                </label>
                                                <input type="radio" name="contractSent" id="no" checked hidden>
                                                <label for="no">
                                                    No
                                                </label>
                                                <input type="radio" name="contractSent" id="na" hidden>
                                                <label for="na">
                                                    N/A
                                                </label>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </form>
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

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('#activateList').on('click', function(){
            if($(this).is(":checked")) {
                $('.checklist').addClass('active');
            } else {
                $('.checklist').removeClass('active');
            }
        });
    </script>
</body>
</html>
