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
    <style>
        .contentBody .scroll-wrapper {
            bottom: 60px;
        }
        .contentBody .ctas {
            position: absolute;
            left: 10px;
            bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Admin</a></li>
            </ul>
            <span class="title"><img src="https://jawa.linksdev.co.uk/images/event_reporting.png"> Event Reporting (Investigation)</span>
        </div>
    </section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
                <ul class="list-unstyled subDivisionMenu">
                    <li>
                        <a href="#">Event Reporting</a>
                    </li>
                    <li>
                        <a href="#">Initial Review</a>
                    </li>
                    <li>
                        <a href="#">RCA</a>
                    </li>
                    <li>
                        <a href="#">Review &amp; Close</a>
                    </li>
                </ul>
                <section class="subDivision clearfix">
                    <div class="informedSection">
                        <span class="title">Informed Section</span>

                        <ul class="list-unstyled">
                            <li>
                                <span class="title">Manager / Deputy Manager <i>Mandatory</i></span>

                                <div class="btnGroup">
                                    <input type="radio" name="managerInformed" id="managerInformed" hidden>
                                    <label for="managerInformed">Informed</label>
                                    <input type="radio" name="managerInformed" id="managerPending" hidden>
                                    <label for="managerPending">Pending</label>
                                    <input type="radio" name="managerInformed" id="managerNA" hidden>
                                    <label for="managerNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="managerInformedDate">
                            </li>

                            <li>
                                <span class="title">Senior Nurse / Carer <i>Mandatory</i></span>

                                <div class="btnGroup">
                                    <input type="radio" name="nurseCarerInformed" id="nurseCarerInformed" hidden>
                                    <label for="nurseCarerInformed">Informed</label>
                                    <input type="radio" name="nurseCarerInformed" id="nurseCarerPending" hidden>
                                    <label for="nurseCarerPending">Pending</label>
                                    <input type="radio" name="nurseCarerInformed" id="nurseCarerNA" hidden>
                                    <label for="nurseCarerNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="nurseCarerInformedDate">
                            </li>

                            <li>
                                <span class="title">Admin Office <i>Mandatory</i></span>

                                <div class="btnGroup">
                                    <input type="radio" name="adminInformed" id="adminInformed" hidden>
                                    <label for="adminInformed">Informed</label>
                                    <input type="radio" name="adminInformed" id="adminPending" hidden>
                                    <label for="adminPending">Pending</label>
                                    <input type="radio" name="adminInformed" id="adminNA" hidden>
                                    <label for="adminNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="adminInformedDate">
                            </li>

                            <li>
                                <span class="title">Family Informed <i>Mandatory</i></span>

                                <div class="btnGroup">
                                    <input type="radio" name="familyInformed" id="familyInformed" hidden>
                                    <label for="familyInformed">Informed</label>
                                    <input type="radio" name="familyInformed" id="familyPending" hidden>
                                    <label for="familyPending">Pending</label>
                                    <input type="radio" name="familyInformed" id="familyNA" hidden>
                                    <label for="familyNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="familyInformedDate">
                            </li>

                            <li>
                                <span class="title">Safeguarding <i>Mandatory</i></span>

                                <div class="btnGroup">
                                    <input type="radio" name="safeguardInformed" id="safeguardInformed" hidden>
                                    <label for="safeguardInformed">Informed</label>
                                    <input type="radio" name="safeguardInformed" id="safeguardPending" hidden>
                                    <label for="safeguardPending">Pending</label>
                                    <input type="radio" name="safeguardInformed" id="safeguardNA" hidden>
                                    <label for="safeguardNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="safeguardInformedDate">
                            </li>

                            <li>
                                <span class="title">Mental health Team</span>

                                <div class="btnGroup">
                                    <input type="radio" name="mentalHealthInformed" id="mentalHealthInformed" hidden>
                                    <label for="mentalHealthInformed">Informed</label>
                                    <input type="radio" name="mentalHealthInformed" id="mentalHealthPending" hidden>
                                    <label for="mentalHealthPending">Pending</label>
                                    <input type="radio" name="mentalHealthInformed" id="mentalHealthNA" hidden>
                                    <label for="mentalHealthNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="mentalHealthInformedDate">
                            </li>

                            <li>
                                <span class="title">Local Authority</span>

                                <div class="btnGroup">
                                    <input type="radio" name="localAuthInformed" id="localAuthInformed" hidden>
                                    <label for="localAuthInformed">Informed</label>
                                    <input type="radio" name="localAuthInformed" id="localAuthPending" hidden>
                                    <label for="localAuthPending">Pending</label>
                                    <input type="radio" name="localAuthInformed" id="localAuthNA" hidden>
                                    <label for="localAuthNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="localAuthInformedDate">
                            </li>

                            <li>
                                <span class="title">Statutory Notification (CIW)</span>

                                <div class="btnGroup">
                                    <input type="radio" name="CIWInformed" id="CIWInformed" hidden>
                                    <label for="CIWInformed">Informed</label>
                                    <input type="radio" name="CIWInformed" id="CIWPending" hidden>
                                    <label for="CIWPending">Pending</label>
                                    <input type="radio" name="CIWInformed" id="CIWNA" hidden>
                                    <label for="CIWNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="CIWInformedDate">
                            </li>

                            <li>
                                <span class="title">Police</span>

                                <div class="btnGroup">
                                    <input type="radio" name="policeInformed" id="policeInformed" hidden>
                                    <label for="policeInformed">Informed</label>
                                    <input type="radio" name="policeInformed" id="policePending" hidden>
                                    <label for="policePending">Pending</label>
                                    <input type="radio" name="policeInformed" id="policeNA" hidden>
                                    <label for="policeNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="policeInformedDate">
                            </li>

                            <li>
                                <span class="title">GP</span>

                                <div class="btnGroup">
                                    <input type="radio" name="GPInformed" id="GPInformed" hidden>
                                    <label for="GPInformed">Informed</label>
                                    <input type="radio" name="GPInformed" id="GPPending" hidden>
                                    <label for="GPPending">Pending</label>
                                    <input type="radio" name="GPInformed" id="GPNA" hidden>
                                    <label for="GPNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="GPInformedDate">
                            </li>

                            <li>
                                <span class="title">District Nurse</span>

                                <div class="btnGroup">
                                    <input type="radio" name="distNurseInformed" id="distNurseInformed" hidden>
                                    <label for="distNurseInformed">Informed</label>
                                    <input type="radio" name="distNurseInformed" id="distNursePending" hidden>
                                    <label for="distNursePending">Pending</label>
                                    <input type="radio" name="distNurseInformed" id="distNurseNA" hidden>
                                    <label for="distNurseNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="distNurseInformedDate">
                            </li>

                            <li>
                                <span class="title">Tissue Viability Nurse</span>

                                <div class="btnGroup">
                                    <input type="radio" name="tissueViabInformed" id="tissueViabInformed" hidden>
                                    <label for="tissueViabInformed">Informed</label>
                                    <input type="radio" name="tissueViabInformed" id="tissueViabPending" hidden>
                                    <label for="tissueViabPending">Pending</label>
                                    <input type="radio" name="tissueViabInformed" id="tissueViabNA" hidden>
                                    <label for="tissueViabNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="tissueViabInformedDate">
                            </li>

                            <li>
                                <span class="title">Ambulance</span>

                                <div class="btnGroup">
                                    <input type="radio" name="ambulanceInformed" id="ambulanceInformed" hidden>
                                    <label for="ambulanceInformed">Informed</label>
                                    <input type="radio" name="ambulanceInformed" id="ambulancePending" hidden>
                                    <label for="ambulancePending">Pending</label>
                                    <input type="radio" name="ambulanceInformed" id="ambulanceNA" hidden>
                                    <label for="ambulanceNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="ambulanceInformedDate">
                            </li>

                            <li>
                                <span class="title">Fire Brigade</span>

                                <div class="btnGroup">
                                    <input type="radio" name="fireBrigInformed" id="fireBrigInformed" hidden>
                                    <label for="fireBrigInformed">Informed</label>
                                    <input type="radio" name="fireBrigInformed" id="fireBrigPending" hidden>
                                    <label for="fireBrigPending">Pending</label>
                                    <input type="radio" name="fireBrigInformed" id="fireBrigNA" hidden>
                                    <label for="fireBrigNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="fireBrigInformedDate">
                            </li>

                            <li>
                                <span class="title">Rapid Response Team</span>

                                <div class="btnGroup">
                                    <input type="radio" name="RRTInformed" id="RRTInformed" hidden>
                                    <label for="RRTInformed">Informed</label>
                                    <input type="radio" name="RRTInformed" id="RRTPending" hidden>
                                    <label for="RRTPending">Pending</label>
                                    <input type="radio" name="RRTInformed" id="RRTNA" hidden>
                                    <label for="RRTNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="RRTInformedDate">
                            </li>

                            <li>
                                <span class="title">M-Doc</span>

                                <div class="btnGroup">
                                    <input type="radio" name="mDocInformed" id="mDocInformed" hidden>
                                    <label for="mDocInformed">Informed</label>
                                    <input type="radio" name="mDocInformed" id="mDocPending" hidden>
                                    <label for="mDocPending">Pending</label>
                                    <input type="radio" name="mDocInformed" id="mDocNA" hidden>
                                    <label for="mDocNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="mDocInformedDate">
                            </li>

                            <li>
                                <span class="title">Riddor</span>

                                <div class="btnGroup">
                                    <input type="radio" name="RiddorInformed" id="RiddorInformed" hidden>
                                    <label for="RiddorInformed">Informed</label>
                                    <input type="radio" name="RiddorInformed" id="RiddorPending" hidden>
                                    <label for="RiddorPending">Pending</label>
                                    <input type="radio" name="RiddorInformed" id="RiddorNA" hidden>
                                    <label for="RiddorNA">N/A</label>
                                </div>

                                <input type="text" name="dateRange" id="RiddorInformedDate">
                            </li>
                        </ul>
                    </div>
                    <div class="newForm">
                        <ul class="list-unstyled clearfix col2">
                            <li>
                                <span class="title">Date/time form completed</span>
                                <input type="text" name="dateRange" id="" class="autoPop">
                            </li>

                            <li>
                                <span class="title">Select Type <i>Mandatory</i></span>
                                <select name="" id="">
                                    <option disabled selected></option>
                                    <option value="accident">Accident</option>
                                    <option value="incident">Incident</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="ctas">
            <button>Back</button> <button class="green">Save</button> <button class="blue">Save &amp; Print</button>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
