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
            <li><a href="#">Setup</a></li>
            <li><a href="#">Permissions</a></li>
        </ul>
        <span class="title"><img src="images/permissions.png">Select Permission Module</span>
    </div>

    <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
        <samp class="stats" style="width:90px;"><span>08</span>New Modules</samp>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            <div class="aniSection">
                <aside style="width:100%;">
                    <section class="permissions selectModule">
                        <article>
                            <span class="title collapseIt">General</span>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="serviceUserSummary">Select</button>
                                    <label for="serviceUserSummary">Service User Summary</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="serviceUserSummary" id="serviceUserSummaryview" hidden>
                                    <label for="serviceUserSummaryview" class="view">View</label>
                                    <input type="checkbox" name="serviceUserSummary" id="serviceUserSummaryAdd" hidden>
                                    <label for="serviceUserSummaryAdd" class="add">Add</label>
                                    <input type="checkbox" name="serviceUserSummary" id="serviceUserSummaryEdit" hidden>
                                    <label for="serviceUserSummaryEdit" class="edit">Edit</label>
                                    <input type="checkbox" name="serviceUserSummary" id="serviceUserSummaryDeleteNote" hidden>
                                    <label for="serviceUserSummaryDeleteNote" class="delete">Delete Note</label>
                                    <input type="checkbox" name="serviceUserSummary" id="serviceUserSummaryDismissWarning" hidden>
                                    <label for="serviceUserSummaryDismissWarning" class="dismiss">Dismiss Warning</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalFilingCabinet">Select</button>
                                    <label for="generalFilingCabinet">Service User Filing Cabinet</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalFilingCabinet" id="generalFilingCabinetview" hidden>
                                    <label for="generalFilingCabinetview" class="view">View</label>
                                    <input type="checkbox" name="generalFilingCabinet" id="generalFilingCabinetEdit" hidden>
                                    <label for="generalFilingCabinetEdit" class="edit">Edit</label>
                                    <input type="checkbox" name="generalFilingCabinet" id="generalFilingCabinetDelete" hidden>
                                    <label for="generalFilingCabinetDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalHandover">Select</button>
                                    <label for="generalHandover">Handover Notes</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalHandover" id="generalHandoverview" hidden>
                                    <label for="generalHandoverview" class="view">View</label>
                                    <input type="checkbox" name="generalHandover" id="generalHandoverAdd" hidden>
                                    <label for="generalHandoverAdd" class="add">Add</label>
                                    <input type="checkbox" name="generalHandover" id="generalHandoverDelete" hidden>
                                    <label for="generalHandoverDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalDailyNotes">Select</button>
                                    <label for="generalDailyNotes">Daily Notes</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalDailyNotes" id="generalDailyNotesview" hidden>
                                    <label for="generalDailyNotesview" class="view">View</label>
                                    <input type="checkbox" name="generalDailyNotes" id="generalDailyNotesAdd" hidden>
                                    <label for="generalDailyNotesAdd" class="add">Add</label>
                                    <input type="checkbox" name="generalDailyNotes" id="generalDailyNotesDelete" hidden>
                                    <label for="generalDailyNotes" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalToDoList">Select</button>
                                    <label for="generalToDoList">To Do List</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalToDoList" id="generalToDoListview" hidden>
                                    <label for="generalToDoListview" class="view">View</label>
                                    <input type="checkbox" name="generalToDoList" id="generalToDoListAdd" hidden>
                                    <label for="generalToDoListAdd" class="add">Add</label>
                                    <input type="checkbox" name="generalToDoList" id="generalToDoListEdit" hidden>
                                    <label for="generalToDoListEdit" class="edit">Edit</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalCareRoutines">Select</button>
                                    <label for="generalCareRoutines">Care Routines</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalCareRoutines" id="generalCareRoutinesview" hidden>
                                    <label for="generalCareRoutinesview" class="view">View</label>
                                    <input type="checkbox" name="generalCareRoutines" id="generalCareRoutinesAdd" hidden>
                                    <label for="generalCareRoutinesAdd" class="add">Add</label>
                                    <input type="checkbox" name="generalCareRoutines" id="generalCareRoutinesEdit" hidden>
                                    <label for="generalCareRoutinesEdit" class="edit">Edit</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalTutorials">Select</button>
                                    <label for="generalTutorials">Video Tutorials</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalTutorials" id="generalTutorialsview" hidden>
                                    <label for="generalTutorialsview" class="view">View</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalGroupAlloc">Select</button>
                                    <label for="generalGroupAlloc">Group Allocation</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalGroupAlloc" id="generalGroupAllocview" hidden>
                                    <label for="generalGroupAllocview" class="view">View</label>
                                    <input type="checkbox" name="generalGroupAlloc" id="generalGroupAllocAdd" hidden>
                                    <label for="generalGroupAllocAdd" class="add">Add</label>
                                    <input type="checkbox" name="generalGroupAlloc" id="generalGroupAllocEdit" hidden>
                                    <label for="generalGroupAllocEdit" class="edit">Edit</label>
                                    <input type="checkbox" name="generalGroupAlloc" id="generalGroupAllocDelete" hidden>
                                    <label for="generalGroupAllocDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalViewPrint">Select</button>
                                    <label for="generalViewPrint">View All / Print QR</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalViewPrint" id="generalViewPrintview" hidden>
                                    <label for="generalViewPrintview" class="view">View</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="generalResidentoftheDay">Select</button>
                                    <label for="generalResidentoftheDay">Resident of The Day</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="generalResidentoftheDay" id="generalResidentoftheDayview" hidden>
                                    <label for="generalResidentoftheDayview" class="view">View</label>
                                    <input type="checkbox" name="generalResidentoftheDay" id="generalResidentoftheDayEdit" hidden>
                                    <label for="generalResidentoftheDayEdit" class="edit">Edit</label>
                                </div>
                            </div>
                        </article>

                        <article>
                            <span class="title collapseIt">Consent</span>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="consentE">Select</button>
                                    <label for="consentE">eConsent</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="consentE" id="consentEview" hidden>
                                    <label for="consentEview" class="view">View</label>
                                    <input type="checkbox" name="consentE" id="consentEAdd" hidden>
                                    <label for="consentEAdd" class="add">Add</label>
                                    <input type="checkbox" name="consentE" id="consentEDeleteNote" hidden>
                                    <label for="consentEDeleteNote" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="consentForms">Select</button>
                                    <label for="consentForms">Consent Forms</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="consentForms" id="consentFormsview" hidden>
                                    <label for="consentFormsview" class="view">View</label>
                                    <input type="checkbox" name="consentForms" id="consentFormsAdd" hidden>
                                    <label for="consentFormsAdd" class="add">Add</label>
                                    <input type="checkbox" name="consentForms" id="consentFormsEdit" hidden>
                                    <label for="consentFormsEdit" class="edit">Edit</label>
                                    <input type="checkbox" name="consentForms" id="consentFormsDelete" hidden>
                                    <label for="consentFormsDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="consentReview">Select</button>
                                    <label for="consentReview">Consent Review</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="consentReview" id="consentReviewview" hidden>
                                    <label for="consentReviewview" class="view">View</label>
                                    <input type="checkbox" name="consentReview" id="consentReviewAdd" hidden>
                                    <label for="consentReviewAdd" class="add">Add</label>
                                    <input type="checkbox" name="consentReview" id="consentReviewEdit" hidden>
                                    <label for="consentReviewEdit" class="edit">Edit</label>
                                    <input type="checkbox" name="consentReview" id="consentReviewDeactive" hidden>
                                    <label for="consentReviewDeactive" class="deactive">Deactivate</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="consentFormTemplates">Select</button>
                                    <label for="consentFormTemplates">Consent Form Templates</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="consentFormTemplates" id="consentFormTemplatesview" hidden>
                                    <label for="consentFormTemplatesview" class="view">View</label>
                                    <input type="checkbox" name="consentFormTemplates" id="consentFormTemplatesAdd" hidden>
                                    <label for="consentFormTemplatesAdd" class="add">Add</label>
                                    <input type="checkbox" name="consentFormTemplates" id="consentFormTemplatesEdit" hidden>
                                    <label for="consentFormTemplatesEdit" class="edit">Edit</label>
                                </div>
                            </div>
                        </article>

                        <article>
                            <span class="title collapseIt">Care</span>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careVaccination">Select</button>
                                    <label for="careVaccination">Vaccination</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careVaccination" id="careVaccinationview" hidden>
                                    <label for="careVaccinationview" class="view">View</label>
                                    <input type="checkbox" name="careVaccination" id="careVaccinationAdd" hidden>
                                    <label for="careVaccinationAdd" class="add">Add</label>
                                    <input type="checkbox" name="careVaccination" id="careVaccinationDelete" hidden>
                                    <label for="careVaccinationDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careLifeStory">Select</button>
                                    <label for="careLifeStory">Life Story</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careLifeStory" id="careLifeStoryview" hidden>
                                    <label for="careLifeStoryview" class="view">View</label>
                                    <input type="checkbox" name="careLifeStory" id="careLifeStoryAdd" hidden>
                                    <label for="careLifeStoryAdd" class="add">Add</label>
                                    <input type="checkbox" name="careLifeStory" id="careLifeStoryEdit" hidden>
                                    <label for="careLifeStoryEdit" class="edit">Edit</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careLikes">Select</button>
                                    <label for="careLikes">Likes & Dislikes</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careLikes" id="careLikesview" hidden>
                                    <label for="careLikesview" class="view">View</label>
                                    <input type="checkbox" name="careLikes" id="careLikesAdd" hidden>
                                    <label for="careLikesAdd" class="add">Add</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careAccidentIncident">Select</button>
                                    <label for="careAccidentIncident">Accident & Incident</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careAccidentIncident" id="careAccidentIncidentview" hidden>
                                    <label for="careAccidentIncidentview" class="view">View</label>
                                    <input type="checkbox" name="careAccidentIncident" id="careAccidentIncidentAdd" hidden>
                                    <label for="careAccidentIncidentAdd" class="add">Add</label>
                                    <input type="checkbox" name="careAccidentIncident" id="careAccidentIncidentEdit" hidden>
                                    <label for="careAccidentIncidentEdit" class="edit">Edit</label>
                                    <input type="checkbox" name="careAccidentIncident" id="careAccidentIncidentDelete" hidden>
                                    <label for="careAccidentIncidentDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="carePersonalCareHyg">Select</button>
                                    <label for="carePersonalCareHyg">Personal Care (Hygiene)</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="carePersonalCareHyg" id="carePersonalCareHygview" hidden>
                                    <label for="carePersonalCareHygview" class="view">View</label>
                                    <input type="checkbox" name="carePersonalCareHyg" id="carePersonalCareHygAdd" hidden>
                                    <label for="carePersonalCareHygAdd" class="add">Add</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="carePersonalCare">Select</button>
                                    <label for="carePersonalCare">Personal Care (Glasses / Hearing Aid / Denture Check)</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="carePersonalCare" id="carePersonalCareview" hidden>
                                    <label for="carePersonalCareview" class="view">View</label>
                                    <input type="checkbox" name="carePersonalCare" id="carePersonalCareAdd" hidden>
                                    <label for="carePersonalCareAdd" class="add">Add</label>
                                    <input type="checkbox" name="carePersonalCare" id="carePersonalCareEdit" hidden>
                                    <label for="carePersonalCareEdit" class="edit">Edit</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careReviewCarePlan">Select</button>
                                    <label for="careReviewCarePlan">Review Care Plan</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careReviewCarePlan" id="careReviewCarePlanview" hidden>
                                    <label for="careReviewCarePlanview" class="view">View</label>
                                    <input type="checkbox" name="careReviewCarePlan" id="careReviewCarePlanEdit" hidden>
                                    <label for="careReviewCarePlanEdit" class="edit">Edit</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careSearch">Select</button>
                                    <label for="careSearch">Care Search</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careSearch" id="careSearchview" hidden>
                                    <label for="careSearchview" class="view">View</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="carePlan">Select</button>
                                    <label for="carePlan">Care Plan</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="carePlan" id="carePlanview" hidden>
                                    <label for="carePlanview" class="view">View</label>
                                    <input type="checkbox" name="carePersonalCare" id="carePersonalCareAdd" hidden>
                                    <label for="carePersonalCareAdd" class="add">Add</label>
                                    <input type="checkbox" name="carePersonalCare" id="carePersonalCareDeactive" hidden>
                                    <label for="carePersonalCareDeactive" class="deactive">Deactivate</label>
                                    <input type="checkbox" name="carePersonalCare" id="carePersonalCareDelete" hidden>
                                    <label for="carePersonalCareDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="supportCarePlan">Select</button>
                                    <label for="supportCarePlan">Support Care Plan</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="supportCarePlan" id="supportCarePlanview" hidden>
                                    <label for="supportCarePlanview" class="view">View</label>
                                    <input type="checkbox" name="supportCarePlan" id="supportCarePlanAdd" hidden>
                                    <label for="supportCarePlanAdd" class="add">Add</label>
                                    <input type="checkbox" name="supportCarePlan" id="supportCarePlanDeactive" hidden>
                                    <label for="supportCarePlanDeactive" class="deactive">Deactivate</label>
                                    <input type="checkbox" name="supportCarePlan" id="supportCarePlanDelete" hidden>
                                    <label for="supportCarePlanDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="shortTermCarePlan">Select</button>
                                    <label for="shortTermCarePlan">Short Term Care Plan</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="shortTermCarePlan" id="shortTermCarePlanview" hidden>
                                    <label for="shortTermCarePlanview" class="view">View</label>
                                    <input type="checkbox" name="shortTermCarePlan" id="shortTermCarePlanAdd" hidden>
                                    <label for="shortTermCarePlanAdd" class="add">Add</label>
                                    <input type="checkbox" name="shortTermCarePlan" id="shortTermCarePlanDeactive" hidden>
                                    <label for="shortTermCarePlanDeactive" class="deactive">Deactivate</label>
                                    <input type="checkbox" name="shortTermCarePlan" id="shortTermCarePlanDelete" hidden>
                                    <label for="shortTermCarePlanDelete" class="delete">Delete</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careEventReporting">Select</button>
                                    <label for="careEventReporting">Event Reporting</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careEventReporting" id="careEventReportingview" hidden>
                                    <label for="careEventReportingview" class="view">View</label>
                                    <input type="checkbox" name="careEventReporting" id="careEventReportingAdd" hidden>
                                    <label for="careEventReportingAdd" class="add">Add</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careObservation">Select</button>
                                    <label for="careObservation">1:1 Observation</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careObservation" id="careObservationview" hidden>
                                    <label for="careObservationview" class="view">View</label>
                                    <input type="checkbox" name="careObservation" id="careObservationEdit" hidden>
                                    <label for="careObservationEdit" class="edit">Edit</label>
                                </div>
                            </div>

                            <div class="choices clearfix">
                                <span class="choice">
                                    <button type="button" id="careBelongingList">Select</button>
                                    <label for="careBelongingList">Belonging List</label>
                                </span>

                                <div class="options">
                                    <input type="checkbox" name="careBelongingList" id="careBelongingListview" hidden>
                                    <label for="careBelongingListview" class="view">View</label>
                                    <input type="checkbox" name="careBelongingList" id="careBelongingListAdd" hidden>
                                    <label for="careBelongingListAdd" class="add">Add</label>
                                    <input type="checkbox" name="careBelongingList" id="careBelongingListEdit" hidden>
                                    <label for="careBelongingListEdit" class="edit">Edit</label>
                                    <input type="checkbox" name="careBelongingList" id="careBelongingListDelete" hidden>
                                    <label for="careBelongingListDelete" class="delete">Delete</label>
                                </div>
                            </div>
                        </article>
                    </section>
                </aside>
            </div>
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
    $('[type=checkbox]').on('click', function(){
        let chkID = $(this).attr('id');
        if($(this).is(':checked')){
            $('input[name=' +chkID+ ']+label').css('pointer-events', 'all');
        } else {
            $('input[name=' +chkID+ ']').prop("checked", false);
            $('input[name=' +chkID+ ']+label').css('pointer-events', 'none');
        }
    });

    $('.collapseIt').click(function(){
        $(this).parent().toggleClass('collapsed');
    });

    $('.expandAll').click(function(){
        $('.collapseIt').parent().removeClass('collapsed');
    });

    $('.collapseAll').click(function(){
        $('.collapseIt').parent().addClass('collapsed');
    });

    $('.selectAllView').click(function(){
        $('.choice input[type=checkbox]').prop("checked", true);
        $('input[id$="view"]').prop("checked", true);
    });

    $('.selectAll').click(function(){
        $('.permissions input[type=checkbox], .inspectorMenu input[type=checkbox]').prop("checked", true);
    });

    $('.deSelectAll').click(function(){
        $('.permissions input[type=checkbox], .inspectorMenu input[type=checkbox]').prop("checked", false);
    });
    </script>
</body>
</html>
