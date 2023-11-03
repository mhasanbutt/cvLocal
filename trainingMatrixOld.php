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
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li>
                <a href="#">HR</a>
            </li>
        </ul>
        <span class="title"><img src="images/trainingMatrix.png" alt="Training Matrix"> Training Matrix <small>( 2019 - 2020 )</small></span>
    </div>
    <ul class="trainingStats clearfix list-unstyled">
        <li>
            <span>1</span> Missing Training
        </li>
        <li>
            <span>1</span> Expired Training
        </li>
        <li>
            <span>1</span> Training due to Expire
        </li>
        <li>
            <span>1</span> Training in Process
        </li>
    </ul>
    <ul class="search list-unstyled clearfix">
        <li>
            <div class="fieldContainer searchField">
                <input type="text" placeholder="Search employee">
                <img src="images/magnifier-tool.svg" class="searchIcon svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Floor/Home</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Department</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Qualification Name</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Employee</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Position</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Status</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
        <li>
            <div class="fieldContainer select">
                <select>
                    <option>Select Year</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </li>
    </ul>
    <div class="clearfix">
        <button type="button" class="searchButton">Search</button>
        <button type="button" class="defaultButton">Reset Filter</button>
        <div class="pull-right clearfix">
            <div class="noAlergy btn-group">
                <button type="button" class="btn orange">
                    <img src="images/printing-tool.svg" class="svg">Print
                </button>
            </div>
        </div>
    </div>

    <div class="searchFilterDetails">
        <div class="selection" id="ShowFilterSelection">
            <span>Home/Floor <strong>All (3-3 Leander Lodge Home)</strong></span>
            <span>Date <strong>02-08-2023 - 02-08-2023</strong></span>
            <span>Service User <strong>Mr Admitted  Resident</strong></span>
            <span>Carer <strong>Rishi RR R</strong></span>
            <span>Event Type <strong>Adverse Clinical Event</strong></span>
            <span>Classification <strong>Therapeutic Process / Procedures</strong></span>
            <span>Event Grading <strong>No Harm</strong></span>
            <span>Stage <strong>Reported</strong></span>
            <span>Status <strong>Active</strong></span>
        </div>
    </div>
</section>

<section class="contentBody">
    <div class="scrollArea">
        <div class="content trainingTable">
            <ul class="list-unstyled auditLegends">
                <li></li>
                <li></li>
                <li></li>
                <li style="color:orange;">Orange Text - Pending</li>
                <li style="color:#71C7A6;">Green Text - Completed</li>
                <li style="color:#E3706B;">Red Text - Overdue</li>
                <li style="color:#648DAC;">Blue Text - In Progress</li>
            </ul>
            <p>&nbsp;</p>
            <table class="table training table-bordered tableData fixed"><thead>
                <tr>
                    <th>Supervisions /Appraisal<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" class="svg replaced-svg">
<g>
    <g>
        <path d="M484.14,226.886L306.46,49.202c-5.072-5.072-11.832-7.856-19.04-7.856c-7.216,0-13.972,2.788-19.044,7.856l-16.132,16.136    c-5.068,5.064-7.86,11.828-7.86,19.04c0,7.208,2.792,14.2,7.86,19.264L355.9,207.526H26.58C11.732,207.526,0,219.15,0,234.002    v22.812c0,14.852,11.732,27.648,26.58,27.648h330.496L252.248,388.926c-5.068,5.072-7.86,11.652-7.86,18.864    c0,7.204,2.792,13.88,7.86,18.948l16.132,16.084c5.072,5.072,11.828,7.836,19.044,7.836c7.208,0,13.968-2.8,19.04-7.872    l177.68-177.68c5.084-5.088,7.88-11.88,7.86-19.1C492.02,238.762,489.228,231.966,484.14,226.886z"></path>
    </g>
</g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
                <tr>
                    <th>Employee <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" class="svg replaced-svg">
<g>
    <g>
        <path d="M484.14,226.886L306.46,49.202c-5.072-5.072-11.832-7.856-19.04-7.856c-7.216,0-13.972,2.788-19.044,7.856l-16.132,16.136    c-5.068,5.064-7.86,11.828-7.86,19.04c0,7.208,2.792,14.2,7.86,19.264L355.9,207.526H26.58C11.732,207.526,0,219.15,0,234.002    v22.812c0,14.852,11.732,27.648,26.58,27.648h330.496L252.248,388.926c-5.068,5.072-7.86,11.652-7.86,18.864    c0,7.204,2.792,13.88,7.86,18.948l16.132,16.084c5.072,5.072,11.828,7.836,19.044,7.836c7.208,0,13.968-2.8,19.04-7.872    l177.68-177.68c5.084-5.088,7.88-11.88,7.86-19.1C492.02,238.762,489.228,231.966,484.14,226.886z"></path>
    </g>
</g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg></th>

                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Aug</th>
                    <th>Sep</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                    <th>Appraisal 1</th>
                    <th>Appraisal 2</th>
                    <th>Appraisal 3</th>
                    <th>Appraisal 4</th>

                </tr>
                </thead>
                <tbody class="tableData">

                <tr>
                    <th>Migration TEST <span>Trainee</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9977?isMatrix=Yes" class="helpTip forTable" data-id="9977">
                            <span style="color:#71C7A6 !important">
                                16-11-2023
                            </span>
                            <div class="tTText" style="width:300px;height:80px;">
                                <div class="scrollArea">
                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                </div>
                            </div>
                        </a>
                    </td>

                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9978" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 16-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9978" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 16-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9978" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 16-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9978?isMatrix=Yes" class="helpTip forTable right" data-id="9978">
                            <span style="color:orange !important">16-11-2023</span>
                            <div id="pop-up-9978" class="tTText" style="width:300px;height:80px;">
                                <div class="scrollArea">
                                    <p>
                                        Type: Appraisal<br>
                                        Status: Pending<br>
                                        Date Completed: 16-08-2023<br>
                                        Added By: System<br>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>john wick <span>Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>first  user <span>Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Maintenance Man <span>Maintenance</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9019?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9019"><span style="color:#71C7A6 !important">01-03-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9649?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9649"><span style="color:#71C7A6 !important">08-04-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9650?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9650"><span style="color:#71C7A6 !important">01-07-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9651?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9651"><span style="color:#E3706B !important">01-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9029" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9030" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9031" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9029?isMatrix=Yes" class="triggerPopup" data-id="9029"><span style="color:orange !important">01-04-2023</span></a><br><br>



                        <div id="pop-up-9029" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9030" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9031" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9029" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9030?isMatrix=Yes" class="triggerPopup" data-id="9030"><span style="color:orange !important">01-07-2023</span></a><br><br>



                        <div id="pop-up-9030" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9031" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9029" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9030" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9031?isMatrix=Yes" class="triggerPopup" data-id="9031"><span style="color:orange !important">01-10-2023</span></a><br><br>



                        <div id="pop-up-9031" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Foldered Employee <span>Support Worker</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9665?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9665"><span style="color:#71C7A6 !important">01-05-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9666?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9666"><span style="color:#E3706B !important">01-08-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9667?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9667"><span style="color:orange !important">01-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9668" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9669" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9670" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9668?isMatrix=Yes" class="triggerPopup" data-id="9668"><span style="color:orange !important">01-05-2023</span></a><br><br>



                        <div id="pop-up-9668" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9669" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9670" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9668" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9669?isMatrix=Yes" class="triggerPopup" data-id="9669"><span style="color:orange !important">01-08-2023</span></a><br><br>



                        <div id="pop-up-9669" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9670" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9668" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9669" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9670?isMatrix=Yes" class="triggerPopup" data-id="9670"><span style="color:orange !important">01-11-2023</span></a><br><br>



                        <div id="pop-up-9670" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 15-02-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>HAS But <span>Support</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Farhan test <span>Admin Assistant</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9984?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9984"><span style="color:#E3706B !important">14-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9985" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 22-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9985" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 22-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9985" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 22-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9985?isMatrix=Yes" class="triggerPopup" data-id="9985"><span style="color:orange !important">14-10-2023</span></a><br><br>



                        <div id="pop-up-9985" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 22-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Test Employee Test <span>Business Approvals</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>k k <span>kk</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Directer Test <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Relish User <span>Chef</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Flamingo Dedkd <span>test position 22</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Susan Bringan <span>Chef</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Salary Tester <span>Bossman</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Tj Tj <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Tim horton_2 <span>Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Foldered Employee <span>Deputy Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>AR Bukh <span>Driver</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9842?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9842"><span style="color:orange !important">26-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9843" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 06-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9843" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 06-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9843" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 06-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9843?isMatrix=Yes" class="triggerPopup" data-id="9843"><span style="color:orange !important">26-10-2023</span></a><br><br>



                        <div id="pop-up-9843" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 06-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Caroline Kaiser <span>Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Susan Johnson <span>Deputy Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Qualified Man <span>Laundry</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Harry John <span>Reception</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Sadia Sadi <span>Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10026?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10026"><span style="color:#E3706B !important">11-09-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9903?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9903"><span style="color:#71C7A6 !important">02-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>

                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9901?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9901"><span style="color:#71C7A6 !important">03-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10037?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10037"><span style="color:orange !important">13-12-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>

                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10034?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10034"><span style="color:#648DAC !important">13-12-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>

                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10032?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10032"><span style="color:#71C7A6 !important">13-12-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>

                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10028?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10028"><span style="color:#71C7A6 !important">11-12-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>

                    <td>



                        <div id="pop-up-10027" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 31-08-2024<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9902" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 02-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10030" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 11-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-10033" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 13-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-10035" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: In Progress<br>
                                Date Completed: 13-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-10027" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 31-08-2024<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9902" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 02-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10030" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 11-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-10033" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 13-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-10035" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: In Progress<br>
                                Date Completed: 13-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/10027?isMatrix=Yes" class="triggerPopup" data-id="10027"><span style="color:#71C7A6 !important">11-09-2023</span></a><br><br>



                        <div id="pop-up-10027" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 31-08-2024<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9902" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 02-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10030" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 11-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-10033" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 13-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-10035" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: In Progress<br>
                                Date Completed: 13-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-10027" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 31-08-2024<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9902?isMatrix=Yes" class="triggerPopup" data-id="9902"><span style="color:#71C7A6 !important">03-11-2023</span></a><br><br>



                        <div id="pop-up-9902" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 02-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/10030?isMatrix=Yes" class="triggerPopup" data-id="10030"><span style="color:orange !important">11-12-2023</span></a><br><br>



                        <div id="pop-up-10030" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 11-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/10033?isMatrix=Yes" class="triggerPopup" data-id="10033"><span style="color:#71C7A6 !important">13-12-2023</span></a><br><br>



                        <div id="pop-up-10033" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 13-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/10035?isMatrix=Yes" class="triggerPopup" data-id="10035"><span style="color:#648DAC !important">13-12-2023</span></a><br><br>



                        <div id="pop-up-10035" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: In Progress<br>
                                Date Completed: 13-09-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>permission test <span>Reception</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Test Employee <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Permissionist Sesessionist <span>Registered Nurse</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Hassan Dev <span>singh</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9806?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9806"><span style="color:#71C7A6 !important">01-07-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10031?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10031"><span style="color:#E3706B !important">01-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9970?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9970"><span style="color:#71C7A6 !important">14-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9808" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 30-06-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9854" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 19-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9808" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 30-06-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9854" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 19-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9808?isMatrix=Yes" class="triggerPopup" data-id="9808"><span style="color:#71C7A6 !important">01-07-2023</span></a><br><br>



                        <div id="pop-up-9808" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 30-06-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9854" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 19-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9808" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 30-06-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9854?isMatrix=Yes" class="triggerPopup" data-id="9854"><span style="color:#71C7A6 !important">01-10-2023</span></a><br><br>



                        <div id="pop-up-9854" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 19-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>azure AD <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>ALI Bukhari <span>Admin Assistant</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>staffTestup staffTestup <span>Driver</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>chris chris <span>Admin Assistant</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Fatima Butt <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10052?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10052"><span style="color:orange !important">24-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>

                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9976?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9976"><span style="color:#71C7A6 !important">16-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10022?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10022"><span style="color:#71C7A6 !important">08-12-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>

                    <td>



                        <div id="pop-up-10016" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 29-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-10016" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 29-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-10016" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 29-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/10016?isMatrix=Yes" class="triggerPopup" data-id="10016"><span style="color:#71C7A6 !important">24-11-2023</span></a><br><br>



                        <div id="pop-up-10016" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 29-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Relish Test <span>Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Oleg p <span></span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Linkdev User <span></span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>links Dev <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Relish Star <span></span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Idrees Mughal <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9960?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9960"><span style="color:#71C7A6 !important">08-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9961" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 15-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9961" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 15-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9961" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 15-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9961?isMatrix=Yes" class="triggerPopup" data-id="9961"><span style="color:#71C7A6 !important">08-11-2023</span></a><br><br>



                        <div id="pop-up-9961" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 15-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Solemn Warning <span>Business Approvals</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Restrictive Employee <span>Driver</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Jean TEST <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9607?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9607"><span style="color:#E3706B !important">25-04-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9608?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9608"><span style="color:#E3706B !important">25-07-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9609?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9609"><span style="color:orange !important">25-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-2895" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-2896" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-2897" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/2895?isMatrix=Yes" class="triggerPopup" data-id="2895"><span style="color:orange !important">25-04-2023</span></a><br><br>



                        <div id="pop-up-2895" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-2896" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-2897" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-2895" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/2896?isMatrix=Yes" class="triggerPopup" data-id="2896"><span style="color:orange !important">25-07-2023</span></a><br><br>



                        <div id="pop-up-2896" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-2897" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-2895" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-2896" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/2897?isMatrix=Yes" class="triggerPopup" data-id="2897"><span style="color:orange !important">25-10-2023</span></a><br><br>



                        <div id="pop-up-2897" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Harry Parker <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9634?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9634"><span style="color:#E3706B !important">20-05-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9635?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9635"><span style="color:#E3706B !important">20-08-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9636?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9636"><span style="color:orange !important">20-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9320?isMatrix=Yes" class="triggerPopup" data-id="9320"><span style="color:orange !important">20-02-2023</span></a><br><br>




                        <div id="pop-up-9320" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9321" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9322" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9323" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9320" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9321?isMatrix=Yes" class="triggerPopup" data-id="9321"><span style="color:orange !important">20-05-2023</span></a><br><br>



                        <div id="pop-up-9321" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9322" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9323" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9320" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9321" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9322?isMatrix=Yes" class="triggerPopup" data-id="9322"><span style="color:orange !important">20-08-2023</span></a><br><br>



                        <div id="pop-up-9322" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9323" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9320" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9321" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9322" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9323?isMatrix=Yes" class="triggerPopup" data-id="9323"><span style="color:orange !important">20-11-2023</span></a><br><br>



                        <div id="pop-up-9323" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 20-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>AS If <span>Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>L. V <span>Director of Care</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/2870?isMatrix=Yes" class="triggerPopup info helpTip" data-id="2870"><span style="color:#71C7A6 !important">15-03-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10024?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10024"><span style="color:orange !important">15-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-2882" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10025" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-2882" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10025" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/2882?isMatrix=Yes" class="triggerPopup" data-id="2882"><span style="color:#71C7A6 !important">15-08-2023</span></a><br><br>



                        <div id="pop-up-2882" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10025" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-2882" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/10025?isMatrix=Yes" class="triggerPopup" data-id="10025"><span style="color:orange !important">15-11-2023</span></a><br><br>



                        <div id="pop-up-10025" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Inspector Mode <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>SN AL <span>Welcome New</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Rish Relish AD <span>Accounts</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/10050?isMatrix=Yes" class="triggerPopup info helpTip" data-id="10050"><span style="color:orange !important">22-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Laura Order <span>Registered Nurse</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>john doe <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Nicola Fenlon <span>Housekeeper</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Xerox Copying <span>test position 22</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Lucas Lucas <span>test position 22</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9996?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9996"><span style="color:#E3706B !important">06-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9997" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 25-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9997" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 25-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9997" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 25-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9997?isMatrix=Yes" class="triggerPopup" data-id="9997"><span style="color:orange !important">06-10-2023</span></a><br><br>



                        <div id="pop-up-9997" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 25-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>NEW NoKID <span>Reception</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>James James <span>Reception</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9622?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9622"><span style="color:#E3706B !important">18-05-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9623?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9623"><span style="color:#E3706B !important">18-08-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9624?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9624"><span style="color:orange !important">18-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/4700?isMatrix=Yes" class="triggerPopup" data-id="4700"><span style="color:#71C7A6 !important">18-02-2023</span></a><br><br>




                        <div id="pop-up-4700" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 16-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4701" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4702" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4703" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-4700" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 16-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/4701?isMatrix=Yes" class="triggerPopup" data-id="4701"><span style="color:orange !important">18-05-2023</span></a><br><br>



                        <div id="pop-up-4701" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4702" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4703" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-4700" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 16-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4701" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/4702?isMatrix=Yes" class="triggerPopup" data-id="4702"><span style="color:orange !important">18-08-2023</span></a><br><br>



                        <div id="pop-up-4702" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4703" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-4700" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 16-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4701" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-4702" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/4703?isMatrix=Yes" class="triggerPopup" data-id="4703"><span style="color:orange !important">18-11-2023</span></a><br><br>



                        <div id="pop-up-4703" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>gyn gyn <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9652?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9652"><span style="color:#71C7A6 !important">01-04-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9653?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9653"><span style="color:#E3706B !important">01-07-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9654?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9654"><span style="color:#71C7A6 !important">01-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9043" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9044" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9045" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9043?isMatrix=Yes" class="triggerPopup" data-id="9043"><span style="color:orange !important">01-04-2023</span></a><br><br>



                        <div id="pop-up-9043" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9044" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9045" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9043" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9044?isMatrix=Yes" class="triggerPopup" data-id="9044"><span style="color:orange !important">01-07-2023</span></a><br><br>



                        <div id="pop-up-9044" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9045" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9043" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-9044" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9045?isMatrix=Yes" class="triggerPopup" data-id="9045"><span style="color:orange !important">01-10-2023</span></a><br><br>



                        <div id="pop-up-9045" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 01-01-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Adam Distraction <span>Manager</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9840?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9840"><span style="color:#71C7A6 !important">16-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9841" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 06-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9841" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 06-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9841" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 06-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9841?isMatrix=Yes" class="triggerPopup" data-id="9841"><span style="color:#71C7A6 !important">16-10-2023</span></a><br><br>



                        <div id="pop-up-9841" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 06-07-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Unqualified Employee <span>Accounts</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Change of Details Employee <span>Laundry</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9769?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9769"><span style="color:#71C7A6 !important">05-06-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9975?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9975"><span style="color:#71C7A6 !important">15-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>

                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9968?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9968"><span style="color:#71C7A6 !important">14-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9993?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9993"><span style="color:#71C7A6 !important">05-12-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>

                    <td>



                        <div id="pop-up-9994" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10023" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9994" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10023" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9994?isMatrix=Yes" class="triggerPopup" data-id="9994"><span style="color:#71C7A6 !important">05-09-2023</span></a><br><br>



                        <div id="pop-up-9994" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>




                        <div id="pop-up-10023" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9994" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/10023?isMatrix=Yes" class="triggerPopup" data-id="10023"><span style="color:orange !important">05-12-2023</span></a><br><br>



                        <div id="pop-up-10023" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 08-09-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>test asdf <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9980?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9980"><span style="color:#E3706B !important">01-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9981" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 21-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9981" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 21-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9981" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 21-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9981?isMatrix=Yes" class="triggerPopup" data-id="9981"><span style="color:orange !important">01-10-2023</span></a><br><br>



                        <div id="pop-up-9981" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 21-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Asriel Dreemur <span>Registered Nurse</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9972?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9972"><span style="color:#71C7A6 !important">26-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9973" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 15-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9973" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 15-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9973" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 15-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9973?isMatrix=Yes" class="triggerPopup" data-id="9973"><span style="color:#71C7A6 !important">26-10-2023</span></a><br><br>



                        <div id="pop-up-9973" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 15-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                <tr>
                    <th>Creation Test <span>Administrator</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                <tr>
                    <th>hi bye <span>Test New position 23/6</span></th>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>


                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9816?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9816"><span style="color:#71C7A6 !important">23-09-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>

                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9812?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9812"><span style="color:#71C7A6 !important">19-09-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9964?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9964"><span style="color:#71C7A6 !important">05-10-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>
                        <a href="https://jawa.linksdev.co.uk/supervision/edit/9974?isMatrix=Yes" class="triggerPopup info helpTip" data-id="9974"><span style="color:#71C7A6 !important">15-11-2023</span></a><br><br>


                        <span class="info helpTip">
                                            <div class="tTText" style="width:300px;height:80px;display: none">
                                                <div class="scroll-wrapper scrollArea" style="position: absolute;"><div class="scrollArea scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                                    Turn Fluid Restriction slider to YES if a resident should not consume more fluid than the fluid Target. Reason for Restricted Fluid Intake: i.e. poor kidney function/renal failure/heart failure.
                                                </div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div></div>
                                            </div>
                                        </span>



                    </td>
                    <td>


                    </td>

                    <td>



                        <div id="pop-up-9811" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 20-06-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9815" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 21-06-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9965" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 10-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9811" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 20-06-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9815" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 21-06-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9965" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 10-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>
                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9811?isMatrix=Yes" class="triggerPopup" data-id="9811"><span style="color:#71C7A6 !important">19-09-2023</span></a><br><br>



                        <div id="pop-up-9811" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 20-06-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9815?isMatrix=Yes" class="triggerPopup" data-id="9815"><span style="color:#71C7A6 !important">22-09-2023</span></a><br><br>



                        <div id="pop-up-9815" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 21-06-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9965" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 10-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>

                    <td>



                        <div id="pop-up-9811" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 20-06-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>




                        <div id="pop-up-9815" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Completed<br>
                                Date Completed: 21-06-2023<br>
                                Added By: Rishi R_<br>
                            </p>

                        </div>

                        <a href="https://jawa.linksdev.co.uk/appraisal/edit/9965?isMatrix=Yes" class="triggerPopup" data-id="9965"><span style="color:orange !important">05-10-2023</span></a><br><br>



                        <div id="pop-up-9965" class="pop-up" style="display: none">
                            <p>
                                Type: Appraisal<br>
                                Status: Pending<br>
                                Date Completed: 10-08-2023<br>
                                Added By: System<br>
                            </p>

                        </div>

                    </td>
                </tr>
                </tbody>

                <input type="hidden" id="super_overdue_h" value="14">
                <input type="hidden" id="super_pending_h" value="51">
                <input type="hidden" id="super_inprogress_h" value="2">
            </table>
        </div>
    </div>
</section>

<section class="contentFooter">
    <div class="row">
        <div class="col-md-4">
            <div class="listCount">
                <select>
                    <option>50</option>
                    <option>100</option>
                    <option>150</option>
                </select>
                <img src="images/left-arrow.svg" class="svg">
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="records">

                <div class="counter">
                    <span>Page</span>
                    <span class="field"><input type="text" value="1"></span>
                    <span>of 15</span>
                </div>
                <span class="next"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
            </div>
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
<script src="js/custom.js"></script>
</body>
</html>
