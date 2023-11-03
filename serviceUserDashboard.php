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

    <section class="newsudashboard">
        <aside class="selectedUser">
            <section class="profile">
                <span class="img">
                    <span class="nickName">Timmy</span>
                </span>
                <ul class="list-unstyled">
                    <li>
                        <span class="title">Date of Admission</span>
                        27-12-2017
                    </li>
                    <li>
                        <span class="title">Date of Birth</span>
                        32-08-1956
                    </li>
                    <li>
                        <span class="title">Client No.</span>
                        4486
                    </li>
                    <li>
                        <span class="title">Location</span>
                        Floor12
                    </li>
                    <li>
                        <span class="title">Location</span>
                        Floor12
                    </li>
                </ul>
            </section>

            <section>
                <span class="title"><a href="#"></a> Alert Centre</span>

                <div class="scrollArea">
                    <ul class="list-unstyled">
                        <li>
                            <a id="sova" href="#">
                                SOVA <img src="images/sova-icon.png">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Blood Pressure <img src="images/bloodPressure-icon.png">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Bowel Movement <img src="images/bowelMovement-icon.png">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Pressure Score <img src="images/pressureSore-icon.png">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Pulse <img src="images/pulse-icon.png">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Absconding
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Palliative Care
                            </a>
                        </li>
                        <li>
                            <a href="">Fluid</a>
                        </li>
                    </ul>
                </div>
            </section>
        </aside>

        <div class="middlePart">
            <span class="name">Mr Tim Shermin</span> <a href="#" class="detail">Detail</a> <span class="alertBox">NEWS Scrore: 10</span> <span class="alertBox">DNACPR</span> <span class="alertIcon"><img src="images/palliative-icon.png" alt=""></span>
            <br clear="all">

            <aside>
                <section class="tabs">
                    <ul class="buttons list-unstyled">
                        <li data-link="quickLinks" class="selected"><span>Details</span></li>
                        <li data-link="careplanning"><span>Care<br>Planning</span></li>
                        <li data-link="care"><span>Care</span></li>
                        <li data-link="healthstats"><span>Health<br>Stats</span></li>
                        <li data-link="careRoutines"><span>Care<br>Routines</span></li>
                    </ul>
                    <div class="tabContent">
                        <form id="sortTiles">
                            <div class="sort_alphabetically">
                                <span>Sort</span>
                                <label class="switch">
                                    <input type="checkbox" name="sortAlphabetically" id="sortAlphabetically" value="1" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <input type="hidden" id="tokenField" value="Z1CpA8Njb0odvxgnRhZldUWx1FI4mC4Gp9kmUCUX">
                        </form>

                        <div class="scrollArea">
                            <article id="quickLinkstab" class="show">
                                <ul class="quickLinks list-unstyled clearfix">
                                    <li data-title="alert">

                                    <a href="https://jawa.care-vision.co.uk/alertcenter">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/alert-centre.png"></span>

                                        <span class="module">Alert Centre</span>

                                    </a>

                                    </li>

                                    <li data-title="summary">

                                    <a class="percent" href="https://jawa.care-vision.co.uk/residentsummery/7950/edit">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/serviceUserSummary.png"></span>

                                        <span class="module">Summary</span>

                                    </a>

                                    </li>

                                    <li class="special text-center" data-title="medical">

                                    <a target="_blank" href="https://jawa.care-vision.co.uk/residentsummery/7950/medical_records_vital">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/medical-records.png"></span>

                                        <span class="module">Medical History and Vitals</span>

                                    </a>

                                    </li>

                                    <li class="special text-center" data-title="news">

                                    <a href="https://jawa.care-vision.co.uk/news">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/news.png"></span>

                                        <span class="module">NEWS 2</span>

                                    </a>

                                    </li>

                                    <li class="special text-center" data-title="restore">

                                    <a href="https://jawa.care-vision.co.uk/restore2">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/restore2-icon.png"></span>

                                        <span class="module">Restore 2</span>

                                    </a>

                                    </li>

                                    <li data-title="admission">

                                    <a class="percent" href="https://jawa.care-vision.co.uk/reception/resident-conversion-summary/7950">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/admissionRequirements.png"></span>

                                        <span class="module">Admission Requirements</span>

                                    </a>

                                    </li>

                                    <li data-title="handover">

                                    <a href="https://jawa.care-vision.co.uk/handoverhistory">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/communication-book.png"></span>

                                        <span class="module">Handover Notes</span>

                                    </a>

                                    </li>

                                    <li data-title="dailyNotes">

                                    <a href="https://jawa.care-vision.co.uk/dailynotes">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/daily-notes.png"></span>

                                        <span class="module">Daily Notes</span></a>

                                    </li>

                                    <li data-title="followUp">

                                    <a href="#" onclick="sendFollowUp()">

                                        <span class="counter">30</span>

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/followUp.png"></span>

                                        <span class="module">Follow up actions</span></a>

                                    </li>

                                    <li data-title="filingCabinet">

                                    <a href="https://jawa.care-vision.co.uk/residentfilingcabinet">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/file-cabinet-multi.png"></span>

                                        <span class="module">Filing Cabinet</span>

                                    </a>

                                    </li>

                                    <li data-title="diagnosis">

                                    <a href="https://jawa.care-vision.co.uk/diagnosis">

                                        <span class="img">

                                            <img src="https://jawa.care-vision.co.uk/images/diagnosis.png">
                                        </span>
                                        <span class="module">Diagnosis</span>
                                    </a>
                                    </li>





                                    <li data-title="A&amp;I">

                                    <a href="https://jawa.care-vision.co.uk/accidentandincident">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/slipping-multi.png"></span>

                                        <span class="module">A &amp; I</span>

                                    </a>

                                    </li>

                                    <li data-title="professionalNotes">

                                    <a href="https://jawa.care-vision.co.uk/professionalnotes/7950">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/professional-notes.png"></span>

                                        <span class="module">Professional Notes</span>

                                    </a>

                                    </li>

                                    <li data-title="hospitalTransfer">

                                    <a class="hospital_alert" href="https://jawa.care-vision.co.uk/hospitaltransfer/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/hospital-transfer.png"></span>

                                        <span class="module">Hospital Transfer</span>

                                    </a>

                                    </li>

                                    <li data-title="careRoutines">

                                    <a href="https://jawa.care-vision.co.uk/careroutines/">

                                        <span class="counter">10</span>

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/care-routine.png"></span>

                                        <span class="module">Care Routines</span>

                                    </a>

                                    </li>

                                    <li data-title="life">

                                    <a href="https://jawa.care-vision.co.uk/lifestory/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/life-stories.png"></span>

                                        <span class="module">Life Story</span>

                                    </a>

                                    </li>

                                    <li data-title="likes">

                                    <a href="https://jawa.care-vision.co.uk/likesdislikes/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/like-dislike.png"></span>

                                        <span class="module">Likes/Dislikes</span>

                                    </a>

                                    </li>

                                    <li data-title="viewMedication">

                                    <a href="https://jawa.care-vision.co.uk/mar/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/pill.png"></span>

                                        <span class="module">View Medications</span>

                                    </a>

                                    </li>

                                    <li data-title="album">

                                    <a href="https://jawa.care-vision.co.uk/residentsummery/7950/gallery">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/photo-camera.png"></span>

                                        <span class="module">Album</span>

                                    </a>

                                    </li>

                                    <li data-title="feedBack">

                                    <a href="https://jawa.care-vision.co.uk/residentsummery/7950/feedback">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/pencil-feedback.png"></span>

                                        <span class="module">Feedback</span>

                                    </a>

                                    </li>

                                    <li data-title="viewActiveInjuries">

                                    <a href="https://jawa.care-vision.co.uk/woundmanagement/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/plaster.png"></span>

                                        <span class="module">View Active Injuries</span>

                                    </a>

                                    </li>



                                    <li data-title="vaccination">

                                    <a href="https://jawa.care-vision.co.uk/vaccination/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/interaction_icon_administered_injection.png"></span>

                                        <span class="module">Vaccination</span>

                                    </a>

                                    </li>

                                    <li data-title="food">

                                    <a href="https://jawa.care-vision.co.uk/menu/7950/food_order/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/food-plate.png"></span>

                                        <span class="module">Food Orders</span>

                                    </a>

                                    </li>

                                    <!-- <li data-title="generalPhysician">

                                    <a href="https://jawa.care-vision.co.uk/gp">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/general-physician.png"></span>

                                        <span class="module">General Physician</span>

                                    </a>

                                    </li>-->

                                    <li data-title="contacts">

                                    <a href="#" onclick="sendNoKContacts()">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/contacts.png"></span>

                                        <span class="module">Contacts</span>

                                    </a>

                                    </li>

                                    <li data-title="religion">

                                    <a href="https://jawa.care-vision.co.uk/religions/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/religiousCultural.png"></span>

                                        
                                        
                                        <span class="module">Pastoral </span>

                                    </a>

                                    </li>

                                    <li data-title="activities">

                                    <a href="https://jawa.care-vision.co.uk/activities/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/activities.png"></span>

                                        <span class="module">Activities</span>

                                    </a>

                                    </li>

                                    <li data-title="observation">

                                    <a href="https://jawa.care-vision.co.uk/observations/">

                                        <span class="counter">0</span>

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/observations.png"></span>

                                        <span class="module">Observations</span>

                                    </a>

                                    </li>

                                    <li data-title="1:1">

                                    <a href="https://jawa.care-vision.co.uk/1to1observations/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/observation_new.png"></span>

                                        <span class="module">1:1 Observations</span>

                                    </a>

                                    </li>

                                    <li data-title="family">

                                    <a href="https://jawa.care-vision.co.uk/familysocial/">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/family-multi.png"></span>

                                        <span class="module">Family / Social Interactions</span>

                                    </a>

                                    </li>

                                    <li data-title="status">

                                    <a href="#" onclick="sendFreezeHistory()">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/freeze_history.png"></span>

                                        <span class="module">Status History</span>

                                    </a>

                                    </li>



                                    <li>

                                    <a href="https://jawa.care-vision.co.uk/eventreporting">

                                        <span class="img">

                                            <img src="https://jawa.care-vision.co.uk/images/event_reporting.png">

                                        </span>

                                        <span class="module">Event Reporting</span>

                                    </a>

                                    </li>





                                    <li data-title="gpConnect">

                                        <a href="https://jawa.care-vision.co.uk/residentsummery/9434765917/getGpDetails">

                                            <span class="img"><img src="https://jawa.care-vision.co.uk/images/care-builder.png"></span>

                                            <span class="module">Gp Connect</span>

                                        </a>

                                    </li>














                                    <li data-title="belongings">

                                    <a class="" href="https://jawa.care-vision.co.uk/belongings">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/interaction_icons/interaction_icon_social_leave.png"></span>

                                        <span class="module">Belongings List</span>

                                    </a>

                                    </li>

                                    <li data-title="resident">

                                    <a href="https://jawa.care-vision.co.uk/resident/history/index">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/ServiceUserServiceLog.png"></span>

                                        <span class="module">Resident History Log</span>

                                    </a>

                                    </li>

                                    <li data-title="nurse">

                                    <a href="https://jawa.care-vision.co.uk/nursecall?resident_id=7950">

                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/nurse-call.png"></span>

                                        <span class="module">Nurse Call Response</span>

                                    </a>

                                    </li>

                                    <li class="companyLogo">
                                        <a href="#" style="background-color:#074d65;">
                                            <img class="logo" src="images/OneLondon_LCR%20logo_White.png">
                                        </a>
                                    </li>
                                </ul>
                            </article>
                            <article id="careplanningtab">
                                <ul class="quickLinks sortPlanning list-unstyled clearfix">
                                    <li data-title="monthlyReview">
                                    <a href="https://jawa.care-vision.co.uk/reviewsearches">
                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/monthlyReview.png"></span>
                                        <span class="module">Monthly Review</span>
                                    </a>
                                </li>
                                <li data-title="printDownloadScp">
                                    <a href="https://jawa.care-vision.co.uk/review_scp">
                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/print.png"></span>
                                        <span class="module">Print/Download Support Care Plan</span>
                                    </a>
                                </li>
                                <li data-title="printDownloadRisk">
                                    <a href="https://jawa.care-vision.co.uk/riskassesmentsreview">
                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/print.png"></span>
                                        <span class="module">Print/Download Risk Assessment</span>
                                    </a>
                                </li>
                                <li data-title="printDownloadAssessment">
                                    <a href="https://jawa.care-vision.co.uk/assesmentsreview">
                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/print.png"></span>
                                        <span class="module">Print/Download Assessment</span>
                                    </a>
                                </li>

                                                                    <li data-title="printDownloadMca">
                                        <a href="https://jawa.care-vision.co.uk/mentalcapacityassessmentsreview">
                                            <span class="img"><img src="https://jawa.care-vision.co.uk/images/print.png"></span>
                                            <span class="module">Print/Download MCA</span>
                                        </a>
                                    </li>
                                

                                                                    <li data-title="printDownloadCarePlan">
                                        <a href="https://jawa.care-vision.co.uk/review">
                                            <span class="img"><img src="https://jawa.care-vision.co.uk/images/print.png"></span>
                                            <span class="module">Print/Download Care Plan (Old Version)</span>
                                        </a>
                                    </li>
                                                                                                <li data-title="supportCarePlan">
                                                                        <a href="https://jawa.care-vision.co.uk/residentinitialcareplan/13127/edit">
                                        <span class="img"><img src="https://jawa.care-vision.co.uk/images/development.png"></span>
                                        <span class="module">Support Care Plan</span>
                                    </a>
                                </li>
                                <li data-title="addNewRisk">
                                    <a href="https://jawa.care-vision.co.uk/riskassessments"><img src="https://jawa.care-vision.co.uk/images/riskAssessment.png" alt="Risk Assessments"> Add New Risk Assessments</a>
                                </li>
                                <li data-title="addNewAssessment">
                                    <a href="https://jawa.care-vision.co.uk/assessments"><img src="https://jawa.care-vision.co.uk/images/new.png" alt="Assessments"> Add New Assessments</a>
                                </li>
                                                                    <li data-title="addNewMca">
                                        <a href="https://jawa.care-vision.co.uk/mentalcapacityassessments"><img src="https://jawa.care-vision.co.uk/images/mental-health.png" alt="MCA"> Add New MCA</a>
                                    </li>
                                                                                                    <li data-title="careBuilder">
                                        <a href="https://jawa.care-vision.co.uk/careplanbuilder">
                                            <span class="img"><img src="https://jawa.care-vision.co.uk/images/careBuilder.png"></span>
                                            <span class="module">Care Builder (Old Version)</span>
                                        </a>
                                    </li>
                                </ul>
                            </article>
                            <article id="caretab">
                                <ul class="quickLinks list-unstyled clearfix">
                                    <li>
                                        <a href="#"><span class="counter">24</span><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/alert-centre-icon.png" alt="Alert Centre"> Alert Centre</a>
                                    </li>
                                </ul>
                            </article>
                            <article id="healthstatstab">
                            </article>
                            <article id="careRoutinestab">
                                <ul class="list-unstyled dashCareRoutines" data-title="Missed">
                                    <div class="scrollArea">
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                    </div>
                                </ul>
                                <ul class="list-unstyled dashCareRoutines" data-title="Outstanding">
                                    <div class="scrollArea">
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                    </div>
                                </ul>
                                <ul class="list-unstyled dashCareRoutines" data-title="Completed">
                                    <div class="scrollArea">
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                    </div>
                                </ul>
                                <ul class="list-unstyled dashCareRoutines" data-title="CompletedLate">
                                    <div class="scrollArea">
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Start Date</i>
                                                (00:00) 00-00-0000
                                            </span>
                                            <span>
                                                <i>Added By</i>
                                                Rishi R.
                                            </span>
                                            <span>
                                                <i>Task</i>
                                                Vestibulum mollis orci a dictum imperdiet. Cras id massa ut ipsum volutpat pulvinar vel eget lectus.
                                            </span>
                                        </li>
                                    </div>
                                </ul>
                            </article>
                        </div>
                    </div>
                </section>
            </aside>

            <aside>
                <section class="tabs whiteTheme">
                    <ul class="buttons list-unstyled">
                        <li data-link="warnings" class="selected"><span>Warnings</span></li>
                        <li data-link="residentNotes"><span>Resident<br>Notes</span></li>
                    </ul>
                    <div class="tabContent">
                        <div class="scrollArea">
                            <article id="warningstab" class="show halfSplit">
                                <div class="warningsCountWrapper"><span>Warnings</span> <span>0</span></div>

                                <div class="scrollArea">
                                    <div class="warningsTab">
                                        <ul class="quickLinks list-unstyled clearfix">
                                            <li>
                                                <a href="#" style="background-color: rgba(203,0,0,0.4);"><img src="images/missing_room.png"> Missing Room</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: rgba(255,192,0,0.4);"><img src="https://jawa.linksdev.co.uk/images/slipping-multi.png" alt="Alert Centre"> Accidents and Falls this Month</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="https://jawa.linksdev.co.uk/images/slipping-multi.png" alt="Alert Centre"> Incidents This month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="scrollArea">
                                    <div class="keyDetails">
                                        <h4>Key Details <span class="nok">Click to View NoK(s)</span></h4>
                                        <ul class="list-unstyled keyDetails clearfix">
                                            <li><span>Weight <i>69</i></span></li>
                                            <li><span>BMI <i>24</i></span></li>
                                            <li><span>MUST <i>3</i></span></li>
                                        </ul>

                                        <h4>Allergies And Dietary Preferences</h4>
                                        <ul class="diseases list-unstyled">
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Abelcet
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Pancakes
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Some other allergy test
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Peanuts
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Test
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Test Other
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Celiac disease diet
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    dummy data
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Vegetarian diet
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Religious Diet
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    Lactose-intolerant diet
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <img
                                                        src="https://jawa.linksdev.co.uk/images/alerticon/allergy-icon.png">
                                                    food
                                                </span>
                                            </li>
                                        </ul>

                                        <h4>Diagnosis</h4>
                                        <ul class="list-unstyled keyDetails diagnoses clearfix">
                                            <li><span>test</span></li>
                                            <li><span>test 1</span></li>
                                            <li><span>Allergic rhinitis</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article id="residentNotestab">
                                <span class="add showData">Add Notes</span>
                                <ul class="dailyNotes list-unstyled">
                                    <li>
                                        <a href="#">Please, let Gillian know of any visitors Else receives other than her daughter and son.</a>
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                    <li>
                                        Please, let Gillian know of any visitors Else receives other than her daughter and son.
                                        <span class="nameDate">Rishi Jawaheer - (12:11) 18-07-2019</span>
                                    </li>
                                </ul>
                                <p>&nbsp;</p>

                                <span class="title">Key Workers</span>
                                <ul class="workers list-unstyled clearfix">
                                    <li>
                                        <span class="img"><img src="images/temp-img2.jpg" alt=""></span>
                                        <span class="name">Cristine J. Smith</span>
                                        <span class="designation">Support Assistant</span>
                                    </li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </section>
            </aside>
        </div>

        <div class="right">
            <article class="completion">
                Summary <div class="percent"><span style="width:35%">35%</span></div>
            </article>
            <article class="completion">
                Admission Requirements <div class="percent"><span style="width:75%">75%</span></div>
            </article>

            <section class="tabs lightTheme">
                <ul class="buttons list-unstyled">
                    <li data-link="supportcarePlans" class="selected"><span>Support<br>Care Plan</span></li>
                    <li data-link="carePlans"><span>Care<br>Plans</span></li>
                    <li data-link="riskManagement"><span>Risk<br>Management</span></li>
                    <li data-link="Assessment"><span>Assessment</span></li>
                    <li data-link="mca"><span>MCA</span></li>
                </ul>
                <div class="tabContent">
                    <div class="scrollArea">
                        <article id="carePlanstab" class="show">
                            <div ss-container>
                                <ul class="plansAssessments list-unstyled">
                                    <li>
                                        <a href="#">
                                            <img src="images/healthcareVisits-icon.png" alt="Healthcare Visits"> <span class="planTitle">Healthcare Visits</span> <span class="date">13-08-2020</span>
                                        </a>
                                    </li>
                                    <li class="reviewed">
                                        <a href="#">
                                            <img src="images/healthcareVisits-icon.png" alt="Healthcare Visits"> <span class="planTitle">Healthcare Visits</span> <span class="date">13-08-2020</span>
                                        </a>
                                    </li>
                                    <li class="duetoreview">
                                        <a href="#">
                                            <img src="images/healthcareVisits-icon.png" alt="Healthcare Visits"> <span class="planTitle">Healthcare Visits</span> <span class="date">13-08-2020</span>
                                        </a>
                                    </li>
                                    <li class="notenoughdetail">
                                        <a href="#">
                                            <img src="images/healthcareVisits-icon.png" alt="Healthcare Visits"> <span class="planTitle">Healthcare Visits</span> <span class="date">13-08-2020</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/healthcareVisits-icon.png" alt="Healthcare Visits"> <span class="planTitle">Healthcare Visits</span> <span class="date">13-08-2020</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/healthcareVisits-icon.png" alt="Healthcare Visits"> <span class="planTitle">Healthcare Visits</span> <span class="date">13-08-2020</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <article id="carePlanstab">
                            
                        </article>
                        <article id="riskManagementtab">
                            
                        </article>
                        <article id="assessmentab">
                            
                        </article>
                        <article id="mcatab">
                            
                        </article>
                    </div>

                    <ul class="legends list-unstyled clearfix">
                        <li>Reviewed</li>
                        <li>Due to review</li>
                        <li>Not enough detail</li>
                    </ul>
                </div>
            </section>
        </div>
    </section>

    <div class="pop" id="individualAlerts">
        <div>
            <section>
                <article style="width:580px;">
                    <span class="popFuse"></span>
                    <span class="title">Infection</span>

                    <li class="alertDetail active">
                        <ul class="list-unstyled clearfix" style="margin-bottom:0;">
                            <li style="width:80px;">
                                <i>Date Added</i> 13-12-2022
                            </li>

                            <li style="width:180px;">
                                <i>Added By</i> John Smith
                            </li>

                            <li style="width:180px;">
                                <i>Witness</i> -
                            </li>

                            <li style="width:100px;">
                                <i>Status</i> Active
                            </li>

                            <li style="width:100%;">
                                <i>Type of Infection</i> PVL (PVL-positive Staphylococcus aureus)
                            </li>

                            <li style="width:50%;">
                                <i>Service User Required to Self-Isolate?</i> No
                            </li>

                            <li style="width:50%;">
                                <i>Risk Assessment Completed?</i> No
                            </li>

                            <li style="width:100%;">
                                <i>Comments</i> -
                            </li>
                        </ul>
                    </li>
                </article>
            </section>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
    <script>

        $('#sova').click(function(){
            $('#individualAlerts').css('display', 'table');
        });

        $('.popFuse, .popClose').click(function(){
            $('.pop').css('display', 'none');
        });

        $('.tabs .buttons li').click(function () {
			var t = $(this).attr('data-link');

			if (!$(this).hasClass('selected')) {
				$(this).siblings('li').removeClass('selected');
				$(this).addClass('selected');
				$(this).parent().siblings('.tabContent').find('article').removeClass('show');
				$('#' + t + 'tab').addClass('show');
			}
		});
    </script>
</body>
</html>
