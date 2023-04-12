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
                <li><a href="#">Care</a></li>
            </ul>
            <span class="title"><img src="https://jawa.linksdev.co.uk/images/slipping-multi.png"> A &amp; I (Falls)</span>
        </div>
    </section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
                <section class="aniSection clearfix">
                    <aside>
                        <ul class="list-unstyled clearfix col3">
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
                        <hr>

                        <section class="accident">
                            <ul class="list-unstyled clearfix col3">
                                <li>
                                    <span class="title">Accident Type</span>
                                    <span class="info helpTip">
                                        <div class="tTText" style="width: 300px; height: 100px;">
                                            <div class="scrollArea">
                                                <article>
                                                Due to Mr Lab B Rat having a fall, an automatic 24 hour post-fall observation check will be created upon saving this Accident and Incident form to monitor Fink. Care Vision has automatically generated care routines for post-fall observations. 4 Checks during the first hour. A 30 minute check. 2 hourly checks followed by 5 checks every 4 hours. 
                                                </article>
                                            </div>
                                        </div>
                                    </span>
                                    <select name="" id="">
                                        <option value="">Fall</option>
                                        <option value="other">Other</option>
                                    </select>
                                </li>

                                <li>
                                    <span class="title">Fall Type</span>
                                    <select name="" id="">
                                        <option selected disabled></option><option value="Fall from bed">Fall from bed</option><option value="Fall from bathroom">Fall from bathroom</option><option value="Fall from standing">Fall from standing</option><option value="Fall from chair">Fall from chair</option><option value="Fall from stairs">Fall from stairs</option><option value="Fall From above 2m">Fall From above 2m</option><option value="Other">Other</option>
                                    </select>
                                </li>

                                <li>
                                    <span class="title">Witnessed Accident</span>
                                    <input type="checkbox" name="" id="witAcc" hidden>
                                    <label for="witAcc"></label>
                                </li>

                                <li>
                                    <span class="title">GP Name</span>
                                    <input type="text" name="" id="">
                                </li>

                                <li>
                                    <span class="title">Location  <i>Mandatory</i></span>
                                    <select name="" id="">
                                    <option selected disabled></option><option value="Service User's Bedroom">Service User's Bedroom</option><option value="Bathroom">Bathroom</option><option value="Toilet">Toilet</option><option value="Corridor">Corridor</option><option value="Lounge">Lounge</option><option value="Dining Area">Dining Area</option><option value="Lift">Lift</option><option value="Office">Office</option><option value="Stairs">Stairs</option><option value="Garden">Garden</option><option value="Other service user's bedroom">Other service user's bedroom</option><option value="Hospital">Hospital</option><option value="Transport">Transport</option><option value="Outside">Outside</option><option value="Other">Other</option>
                                    </select>
                                </li>

                                <li>
                                    <span class="title">Date/time of Accident  <i>Mandatory</i></span>
                                    <input type="text" name="dateRange" id="" class="autoPop">
                                </li>
                            </ul>

                            <div class="injUlcer">
                                <span style="background-image:url('images/pressureUlcer.png')">Injury <i>0</i></span> <span style="background-image:url('images/bandage-single.png')">Ulcer <i>0</i></span>
                            </div>

                            <ul class="list-unstyled clearfix col2">
                                <li>
                                    <span class="title">Description of Accident</span>
                                    <textarea>Vestibulum facilisis enim vel rhoncus tincidunt. Cras nibh felis, porta quis fringilla sit amet, sodales ut lorem. Sed ut ipsum sit amet velit fermentum finibus. Morbi sed vulputate sem, vitae fringilla justo. Ut a ultrices justo. </textarea>
                                </li>
                                <li>
                                    <span class="title">Circumstances Prior to Accident</span>
                                    <textarea></textarea>
                                </li>
                                <li>
                                    <span class="title">Triggering Factors</span>
                                    <textarea></textarea>
                                </li>
                                <li>
                                    <span class="title">Actions taken to prevent reocurrence</span>
                                    <textarea>Vestibulum facilisis enim vel rhoncus tincidunt. Cras nibh felis, porta quis fringilla sit amet, sodales ut lorem. Sed ut ipsum sit amet velit fermentum finibus. Morbi sed vulputate sem, vitae fringilla justo. Ut a ultrices justo. </textarea>
                                </li>
                                <li>
                                    <span class="title">Describe injuries</span>
                                    <textarea>Vestibulum facilisis enim vel rhoncus tincidunt. Cras nibh felis, porta quis fringilla sit amet, sodales ut lorem. Sed ut ipsum sit amet velit fermentum finibus. Morbi sed vulputate sem, vitae fringilla justo. Ut a ultrices justo. </textarea>
                                </li>
                            </ul>

                            <ul class="list-unstyled clearfix col4">
                                <li>
                                    <span class="title">Injury Sustained?</span>
                                    <input type="checkbox" name="" id="injSus" hidden>
                                    <label for="injSus"></label>
                                </li>

                                <li>
                                    <span class="title">Other Service Users Involved?</span>
                                    <input type="checkbox" name="" id="otherSUin" hidden>
                                    <label for="otherSUin"></label>
                                </li>

                                <li class="otherSUinHidden" hidden>
                                    <span class="title">Service Users</span>
                                    <select name="" id="" class="select2" multiple>
                                        <option value="107">Mrs Letha  Wilford</option><option value="110">Mr Tyrones_4  TEST</option><option value="251">Mr Alejandro M Mason</option><option value="252">Mr Lab B Rat</option><option value="256">Mr Barry Baz  Brown</option><option value="370">Mr Murray  Truelove</option><option value="373">Mr Nigel B Bloomberg</option><option value="529">Mr David  Jackson</option><option value="914">Miss Moiras  Moiras</option><option value="1071"> Agnes  Lord</option><option value="1116">Miss Mary  McDougal</option><option value="1127">Miss Elizabeth Betty medecare TEST</option><option value="1483">Mr James Donald Paul</option><option value="1862">Other Solus Zos Galvus</option><option value="1863">Mr Steven m TEST</option><option value="3048">Mr John  Wayne</option><option value="3389">Miss Vance Felix Weaver Knowles</option><option value="3416">Professor Quintessa Hamilton Burt Marquez</option><option value="3418">Miss Kaseem Adele Joyner Clemons</option><option value="3420">Mr Darren  Boden</option><option value="3445">Mr Mike  MEAKIN</option><option value="3453">Mrs Stone test Cruz</option><option value="3454">Ms Byron Glenna Massey James</option><option value="3455">Professor Carlos Hillary Middleton Mullen</option><option value="3460">Miss Rhea Gavin Farley Bowman</option><option value="3462">Professor Byron Alexis Reese Wiley</option><option value="3519"> Grier  Eutychus</option><option value="3520">Mr Joan N Bradburn</option><option value="3524">Mr Morgan_3  TEST</option><option value="3529">Mr Jack  Morrison</option><option value="3531">Miss Janice D. Nigel Advert</option><option value="3721">Miss Teagan Hamish Richards Riggs</option><option value="3829">Ms Noelle  Holiday</option><option value="3831">Mrs Shirley  Cowie</option><option value="4993">Ms Catherine  Morton</option><option value="4995">Mr Thomas  SMALLRIDGE</option><option value="5023">Miss Carla Dennis Kelly Maddox</option><option value="5024">Mr Ady Jhon jhon</option><option value="5036"> Norman  Smith</option><option value="5045"> Daniel  Cohen</option><option value="5047">Mr Group  Inou</option><option value="5048"> Herbert  Ortan</option><option value="5049">Mr Theodore  Forcythe</option><option value="5288">Professor Allen  Head</option><option value="5293">Mr Milton  Keynes</option><option value="5308">Mr Chris John TEST</option><option value="5425">Mr Adding  Resident</option><option value="5545">Miss Wynter Ora Pickett Foster</option><option value="5609">Ms Keith Nicole David Travis</option><option value="5611">Mr test12345  yonus</option><option value="5626"> humza khan toi</option><option value="5631">Mr Tony  TEST</option><option value="5633">Mr Test User 6 TEst Tweser</option><option value="5634"> Test User 6  bbb</option><option value="5635"> Test User 5 weqw qweqwewq</option><option value="5648">Mr asasas asasas asasas</option><option value="5650">Mr Julie  Evans</option><option value="5655">Miss Karleigh Melendez Autumn Compton Hernandez</option><option value="5662">Mr Creationist  Warning</option><option value="5670"> qweqwe  vjjnn</option><option value="5671"> wwww  eee</option><option value="5675"> sss  sss</option><option value="5679">Mr John  Smith</option><option value="5680">Mr Tom  TEST</option><option value="5685">Mr Johan  Johan</option><option value="5687"> Tom  Hanks</option><option value="5688">Mr abc  xyz</option><option value="5694"> Emma  Watson11</option><option value="5696"> Tom  Hardy11</option><option value="5698">Mr Test James Checklist</option><option value="5699"> Jonathan  TEST</option><option value="5701">Miss Amy  K</option><option value="5702"> ggg  ggg</option><option value="5711"> JJJ  566</option><option value="5713">Mr Tiger  Show</option><option value="5714">Mr abc  abc</option><option value="5716">Mr Tom  TEST</option><option value="5717"> Joshan  test</option><option value="5719"> Tom  Hanks</option><option value="5720">Mr John  Smith</option><option value="5721">Mr John  Abdi</option><option value="5722"> Emma  Watson</option><option value="5723"> Tom  Hardy11</option><option value="5725">Mr Test test Checklist</option><option value="5727"> Tom  Hanks12</option><option value="5729"> vvv  bbb</option><option value="5730"> Fred  Jones</option><option value="5731"> www  eeee</option><option value="5736"> Johshan  test</option><option value="5737"> Tom  Hardy55</option><option value="5738"> Emma  Watson</option><option value="5739"> Tom  Hardy33</option><option value="5740">Mr aaaa  bbb</option><option value="5741"> Emma  Watson</option><option value="5747">Mr Lara Taylor Lyle Preston Poole</option><option value="5748">Mr Daryl  QR</option><option value="5749"> bbbb  bbbb</option><option value="5750">Ms affafa affafa affafa</option><option value="5753">Miss Converter  Resident</option><option value="5760">Mr John R Doe</option><option value="5761"> Short  Term</option><option value="5762">Mr Admission  Test</option><option value="5763">Mr Converstion  Person</option><option value="5764"> Tom  Hardy44</option><option value="5766">Professor Briar Jillian Butler Dillard</option><option value="5773">Mr Tom  Hardy</option><option value="5774"> zxczxczxc  </option><option value="5775"> Breather  wef</option>
                                    </select>
                                </li>

                                <li>
                                    <span class="title">Staff Involved?</span>
                                    <input type="checkbox" name="" id="staffInv" hidden>
                                    <label for="staffInv"></label>
                                </li>

                                <li>
                                    <span class="title">Visitor Involved?</span>
                                    <input type="checkbox" name="" id="visitorInv" hidden>
                                    <label for="visitorInv"></label>
                                </li>

                                <li>
                                    <span class="title">Admitted to Hospital?</span>
                                    <input type="checkbox" name="" id="AdmittedHosp" hidden>
                                    <label for="AdmittedHosp"></label>
                                </li>

                                <li>
                                    <span class="title">Witnessed By</span>
                                    <input type="checkbox" name="" id="witBy" hidden>
                                    <label for="witBy"></label>
                                </li>

                                <li>
                                    <span class="title">Create Follow Up</span>
                                    <input type="checkbox" name="" id="createFUp" hidden>
                                    <label for="createFUp"></label>
                                </li>
                            </ul>
                        </section>
                    </aside>

                    <div class="informed">
                        <div class="scrollArea">
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
                        </div>
                    </div>
                </section>

                <article class="associate clearfix">
                    <input type="checkbox" name="associateChoice" id="assInj" hidden>
                    <label for="assInj">Associate Injury</label>

                    <div class="injuryUlcerMgmt clearfix">
                        <div class="formSide">
                            <ul class="list-unstyled clearfix col2">
                                <li>
                                    <span class="title">Location</span>
                                    <input type="text" name="" id="">
                                </li>

                                <li>
                                    <span class="title">Custom Location</span>
                                    <input type="text" name="" id="">
                                </li>

                                <li>
                                    <span class="title">Upload Wound Image</span>
                                    <input type="file" name="" id="uploadImg" style="display:none !important;">
                                    <label for="uploadImg" class="uploadImg">Click Here</label>
                                </li>

                                <li>
                                    <span class="title">Caption</span>
                                    <input type="text" name="" id="">
                                </li>

                                <li>
                                    <span class="title">Type of Wound</span>
                                    <select name="" id="">
                                        <option value=""></option>
                                    </select>
                                </li>

                                <li>
                                    <ul class="list-unstyled clearfix col3">
                                        <li>
                                            <span class="title">Length(CM)</span>
                                            <input type="text" name="" id="">
                                        </li>
                                        <li>
                                            <span class="title">Width(CM)</span>
                                            <input type="text" name="" id="">
                                        </li>
                                        <li>
                                            <span class="title">Depth(CM)</span>
                                            <input type="text" name="" id="">
                                        </li>
                                    </ul>
                                </li>

                                <li style="width:100%;">
                                    <span class="title">Mark as "Observation / Healed wound / miscelaneous Wound"</span>
                                    <input type="checkbox" name="" id="markAs" hidden>
                                    <label for="markAs"></label>
                                </li>
                            </ul>
                        </div>
                        <section class="bodyMap">
                            <img src="images/bodyMapMale.png" class="map" usemap="#bodyMap">

                            <map name="bodyMap">
                                <area position="lla1" data="Left Dorsal Thoracic Area" shape="rect"
                                    coords="433,213,479,252" href="#">
                                <area position="lla2" data="Left Dorsal Thoracic Area 1" shape="rect"
                                    coords="433,254,479,293" href="#">
                                <area position="lla3" data="Left Lumbar Area" shape="rect" coords="433,295,479,334"
                                    href="#">
                                <area position="rsc2" data="Right Scapula 2" shape="rect" coords="495,172,541,211"
                                    href="#">
                                <area position="sa" data="Lumbar Area" shape="rect" coords="481,295,493,335"
                                    href="#">
                                <area position="lva" data="Central Dorsal Thoracic Area 3" shape="rect"
                                    coords="481,254,493,293" href="#">
                                <area position="dta2" data="Central Dorsal Thoracic Area 2" shape="rect"
                                    coords="481,213,493,253" href="#">
                                <area position="dta" data="Central Dorsal Thoracic Area 1" shape="rect"
                                    coords="481,172,493,211" href="#">
                                <area position="lia" data="Left Inguinal Area" shape="rect" coords="180,361,210,389"
                                    href="#">
                                <area position="ria" data="Right Inguinal Area" shape="rect" coords="66,360,98,389"
                                    href="#">
                                <area position="le" data="Left Eye" shape="rect" coords="139,50,172,72" href="#">
                                <area position="re" data="Right Eye" shape="rect" coords="102,49,137,72" href="#">
                                <area position="nose" data="Nose" shape="rect" coords="126,74,149,86" href="#">
                                <area position="lips" data="Lips" shape="rect" coords="125,87,148,99" href="#">
                                <area position="ana" data="Anterior Neck Area" shape="poly"
                                    coords="117,107,137,115,159,105,162,126,116,127" href="#">
                                <area position="mandible" data="Mandible" shape="rect" coords="125,101,148,111"
                                    href="#">
                                <area position="ls" data="Left Shoulder" shape="poly"
                                    coords="205,140,219,146,230,155,235,168,239,193,204,193" href="#">
                                <area position="lap" data="Left Armpit" shape="poly"
                                    coords="213,196,214,229,207,229,204,196" href="#">
                                <area position="rap" data="Right Armpit" shape="poly"
                                    coords="63,196,63,229,70,229,72,195" href="#">
                                <area position="rs" data="Right Shoulder" shape="poly"
                                    coords="72,139,66,140,53,148,47,153,41,164,37,193,71,194,71,171,71,153"
                                    href="#">
                                <area position="rc" data="Right Clavicle" shape="poly"
                                    coords="139,127,138,150,73,150,74,138,110,129" href="#">
                                <area position="scrotum" data="Scrotum / Penis" shape="poly"
                                    coords="118,391,118,424,155,424,155,391" href="#">
                                <area position="lw" data="Left Wrist" shape="poly"
                                    coords="238,366,258,365,259,395,235,394" href="#">
                                <area position="rw" data="Right Wrist" shape="poly"
                                    coords="40,366,19,366,16,394,40,394" href="#">
                                <area position="lank" data="Left Ankle" shape="poly"
                                    coords="153,704,180,704,178,736,149,736" href="#">
                                <area position="rank" data="Right Ankle" shape="poly"
                                    coords="122,704,126,737,97,737,95,704" href="#">
                                <area position="rpof" data="Right Foot" shape="poly"
                                    coords="98,739,130,739,126,787,78,785" href="#">
                                <area position="lpof" data="Left Foot" shape="poly"
                                    coords="146,738,178,739,195,786,148,785" href="#">
                                <area position="lsc2" data="Left Scapula 2" shape="rect" coords="433,172,480,211"
                                    href="#">
                                <area position="pna" data="Posterior neck Area" shape="poly"
                                    coords="463,112,511,112,511,127,463,127" href="#">
                                <area position="cva" data="Cervical Vertebrae Area" shape="rect"
                                    coords="481,130,494,170" href="#">
                                <area position="lpsa" data="Left Posterior Shoulder Area" shape="poly"
                                    coords="430,135,407,142,394,156,388,170,415,170,432,170" href="#">
                                <area position="rla1" data="Right Dorsal Thoracic Area" shape="rect"
                                    coords="495,213,541,252" href="#">
                                <area position="rla2" data="Right Dorsal Thoracic Area 1" shape="rect"
                                    coords="494,254,541,294" href="#">
                                <area position="rla3" data="Right Lumbar Area" shape="rect" coords="494,295,541,334"
                                    href="#">
                                <area position="rpsa" data="Right Posterior Shoulder Area" shape="poly"
                                    coords="543,134,556,138,576,149,586,170,566,169,543,170" href="#">
                                <area position="lra" data="Left Rear Arm" shape="poly"
                                    coords="379,225,410,224,416,260,410,272,371,272,373,242" href="#">
                                <area position="rra" data="Right Rear Arm" shape="poly"
                                    coords="595,225,601,244,602,272,563,272,558,251,565,225" href="#">
                                <area position="reb" data="Right Elbow" shape="poly"
                                    coords="602,273,563,274,568,317,610,316" href="#">
                                <area position="leb" data="Left Elbow" shape="poly"
                                    coords="374,274,409,274,406,316,364,316" href="#">
                                <area position="rrfa" data="Right Rear Forearm" shape="poly"
                                    coords="571,319,608,319,607,363,586,363" href="#">
                                <area position="lrfa" data="Left Rear Forearm" shape="poly"
                                    coords="364,319,402,319,388,363,368,364" href="#">
                                <area position="rb1" data="Right Buttocks 1" shape="poly"
                                    coords="495,377,540,377,540,415,495,415" href="#">
                                <area position="rb2" data="Right Buttocks 2" shape="poly"
                                    coords="495,418,540,418,540,456,495,456" href="#">
                                <area position="rb4" data="Right Hip 1" shape="poly"
                                    coords="543,388,560,389,561,420,543,420" href="#">
                                <area position="rb3" data="Right Hip 2" shape="poly"
                                    coords="543,423,560,422,561,453,542,454" href="#">
                                <area position="lboh" data="Left back of Hand" shape="poly"
                                    coords="233,396,260,397,264,424,246,449,240,418,234,434" href="#">
                                <area position="rboh" data="Right Back of Hand" shape="poly"
                                    coords="16,396,42,396,43,435,35,414,29,446,12,423" href="#">
                                <area position="lpoh" data="Left Palm" shape="poly"
                                    coords="368,389,389,390,392,437,379,411,381,446,363,439,360,417" href="#">
                                <area position="rpoh" data="Right Palm" shape="poly"
                                    coords="583,390,608,390,614,419,603,445,594,446,591,416,583,436" href="#">
                                <area position="rreart1" data="Right Rear Thigh 1" shape="poly"
                                    coords="495,458,497,484,559,485,560,466,560,456,543,456,543,458" href="#">
                                <area position="rreart2" data="Right Rear Thigh 2" shape="poly"
                                    coords="498,487,498,526,552,527,559,486" href="#">
                                <area position="rpopa" data="Right Popliteal Area" shape="poly"
                                    coords="497,529,547,529,545,569,546,587,500,589" href="#">
                                <area position="rcalf1" data="Right Calf 1" shape="poly"
                                    coords="500,590,497,611,497,627,550,627,550,621,549,603,547,590" href="#">
                                <area position="rcalf2" data="Right Calf 2" shape="poly"
                                    coords="497,630,495,647,497,663,541,663,542,657,545,639,549,629" href="#">
                                <area position="rcalf3" data="Right Calf 3" shape="poly"
                                    coords="499,666,500,683,502,711,530,711,533,694,536,685,539,666" href="#">
                                <area position="lcalf1" data="Left Calf 1" shape="poly"
                                    coords="426,589,474,589,478,627,426,627,425,616,426,600" href="#">
                                <area position="lcalf2" data="Left Calf 2" shape="poly"
                                    coords="426,629,479,630,476,664,435,663,434,654,426,640" href="#">
                                <area position="lcalf3" data="Left Calf 3" shape="poly"
                                    coords="437,666,475,666,472,712,444,712,443,697,439,685" href="#">
                                <area position="lfof" data="Left Toes" shape="poly"
                                    coords="323,582,323,568,324,558,328,549,338,541,348,544,352,561,352,579,359,553,361,547,373,552,390,571,400,584,403,600,325,598"
                                    href="#">
                                <area position="rfof" data="Right Toes" shape="poly"
                                    coords="300,598,300,580,301,561,295,545,282,540,275,551,274,578,268,546,250,554,222,584,221,599"
                                    href="#">
                                <area position="lpopa" data="Left Popliteal Area" shape="rect"
                                    coords="426,528,476,588" href="#">
                                <area position="rk" data="Right Knee" shape="poly"
                                    coords="76,524,79,542,80,576,124,575,128,550,127,524" href="#">
                                <area position="lk" data="Left Knee" shape="poly"
                                    coords="150,525,199,524,196,547,195,575,151,575,148,548" href="#">
                                <area position="rheel" data="Right Heel" shape="poly"
                                    coords="234,733,249,769,282,767,294,733" href="#">
                                <area position="lheel" data="Left Heel" shape="poly"
                                    coords="333,734,345,770,379,768,391,734" href="#">
                                <area position="lreart1" data="Left Rear Thigh 1" shape="poly"
                                    coords="457,458,479,457,476,484,416,485,415,456,428,455,433,459" href="#">
                                <area position="lreart2" data="Left Rear Thigh 2" shape="poly"
                                    coords="415,487,478,487,474,527,424,526" href="#">
                                <area position="lb1" data="Left Hip 1" shape="poly"
                                    coords="415,388,430,387,431,420,413,421" href="#">
                                <area position="lb2" data="Left Hip 2" shape="poly"
                                    coords="414,423,431,422,430,453,414,454" href="#">
                                <area position="lb3" data="Left Buttocks 2" shape="poly"
                                    coords="433,418,478,418,478,456,433,456" href="#">
                                <area position="lb4" data="Left Buttocks 1" shape="poly"
                                    coords="433,377,478,377,478,415,433,415" href="#">
                                <area position="ref" data="Right Ear" shape="poly" coords="103,84,98,57,89,61,93,80"
                                    href="#">
                                <area position="lef" data="Left Ear" shape="poly" coords="175,56,185,67,174,85"
                                    href="#">
                                <area position="rboheel" data="Right Back of Heel" shape="poly"
                                    coords="496,755,495,765,498,788,514,789,527,787,548,788,539,772,532,755"
                                    href="#">
                                <area position="lboheel" data="Left Back of Heel" shape="poly"
                                    coords="443,755,479,755,480,775,473,789,458,789,444,787,427,787,436,770"
                                    href="#">
                                <area position="apex1" data="Apex 1" shape="poly"
                                    coords="109,18,105,29,137,30,136,11" href="#">
                                <area position="apex2" data="Apex 2" shape="poly"
                                    coords="137,12,138,30,168,30,161,15" href="#">
                                <area position="fh1" data="Forehead 1" shape="poly"
                                    coords="104,32,101,47,137,48,136,31" href="#">
                                <area position="fh2" data="Forehead 2" shape="poly"
                                    coords="139,32,139,47,172,48,170,32" href="#">
                                <area position="rct1" data="Right Chest 1" shape="poly"
                                    coords="137,189,137,239,73,239,74,189" href="#">
                                <area position="rct2" data="Right Chest 2" shape="poly"
                                    coords="74,152,74,187,138,187,139,152" href="#">
                                <area position="lct1" data="Left Chest 1" shape="poly"
                                    coords="140,190,203,190,203,238,140,239" href="#">
                                <area position="lct2" data="Left Chest 2" shape="poly"
                                    coords="140,153,140,187,202,188,202,153" href="#">
                                <area position="ra1" data="Right Arm 1" shape="poly"
                                    coords="29,232,26,241,24,258,62,258,68,231" href="#">
                                <area position="ra2" data="Right Arm 2" shape="poly"
                                    coords="36,195,32,214,28,229,62,230,62,208,62,195" href="#">
                                <area position="la1" data="Left Arm" shape="poly"
                                    coords="216,195,216,229,248,229,242,196" href="#">
                                <area position="la2" data="Left Arm 1" shape="poly"
                                    coords="207,232,214,259,251,258,249,232" href="#">
                                <area position="rfa1" data="Right Forearm 1" shape="poly"
                                    coords="22,294,17,309,16,327,53,327,57,308,60,294" href="#">
                                <area position="rfa2" data="Right Forearm 2" shape="poly"
                                    coords="16,328,19,363,38,365,53,329" href="#">
                                <area position="lfa1" data="Left Forearm 1" shape="poly"
                                    coords="224,330,238,363,257,363,258,344,259,330" href="#">
                                <area position="lfa2" data="Left Forearm 2" shape="poly"
                                    coords="216,294,223,327,259,327,257,308,253,292" href="#">
                                <area position="rhc1" data="Right hypochondrium 1" shape="rect"
                                    coords="73,271,98,299" href="#">
                                <area position="rhc2" data="Right hypochondrium 2" shape="rect"
                                    coords="72,241,99,269" href="#">
                                <area position="lhc1" data="Left hypochondrium 1" shape="rect"
                                    coords="179,271,204,299" href="#">
                                <area position="lhc2" data="Left hypochondrium 2" shape="rect"
                                    coords="180,241,204,271" href="#">
                                <area position="eg1" data="Epigastrium 1" shape="rect" coords="140,271,178,299"
                                    href="#">
                                <area position="eg2" data="Epigastrium 2" shape="rect" coords="99,271,138,299"
                                    href="#">
                                <area position="eg3" data="Epigastrium 3" shape="rect" coords="140,241,178,269"
                                    href="#">
                                <area position="eg4" data="Epigastrium 4" shape="rect" coords="100,241,138,269"
                                    href="#">
                                <area position="rv1" data="Right Vacio 1" shape="rect" coords="73,301,98,329"
                                    href="#">
                                <area position="rv2" data="Right Vacio 2" shape="rect" coords="71,330,99,359"
                                    href="#">
                                <area position="ur1" data="Umbilical Region 1" shape="rect" coords="139,330,179,359"
                                    href="#">
                                <area position="ur2" data="Umbilical Region 2" shape="rect" coords="100,330,138,359"
                                    href="#">
                                <area position="ur3" data="Umbilical Region 3" shape="rect" coords="140,300,178,329"
                                    href="#">
                                <area position="ur4" data="Umbilical Region 4" shape="rect" coords="99,300,138,329"
                                    href="#">
                                <area position="lv1" data="Left Vacio 1" shape="rect" coords="180,331,205,359"
                                    href="#">
                                <area position="lv2" data="Left Vacio 2" shape="rect" coords="179,300,204,329"
                                    href="#">
                                <area position="rit1" data="Right Inner Thigh 1" shape="poly"
                                    coords="116,424,64,424,64,415,63,408,66,391,116,391,117,417" href="#">
                                <area position="lit2" data="Left Inner Thigh 2" shape="poly"
                                    coords="145,427,145,457,210,457,212,426" href="#">
                                <area position="lit3" data="Left Inner Thigh 3" shape="poly"
                                    coords="146,458,148,489,208,490,210,460" href="#">
                                <area position="lit4" data="Left Inner Thigh 4" shape="poly"
                                    coords="149,492,150,522,201,522,208,492" href="#">
                                <area position="lit1" data="Left Inner Thigh 1" shape="poly"
                                    coords="210,391,212,402,211,411,213,424,158,425,157,411,157,391" href="#">
                                <area position="rit2" data="Right Inner Thigh 2" shape="poly"
                                    coords="64,426,65,457,131,457,132,426" href="#">
                                <area position="rit3" data="Right Inner Thigh 3" shape="poly"
                                    coords="65,459,68,489,127,489,129,460" href="#">
                                <area position="rit4" data="Right Inner Thigh 4" shape="poly"
                                    coords="68,492,75,522,126,522,126,492" href="#">
                                <area position="lab1" data="Lower Abdomen 1" shape="rect" coords="140,360,178,389"
                                    href="#">
                                <area position="lab2" data="Lower Abdomen 2" shape="rect" coords="100,361,138,389"
                                    href="#">
                                <area position="rfol" data="Right Shin 1" shape="poly"
                                    coords="123,578,80,578,77,591,77,602,76,607,129,606,126,592" href="#">
                                <area position="rfo2" data="Right Shin 2" shape="poly"
                                    coords="129,609,77,609,77,624,77,632,79,638,129,638,129,621" href="#">
                                <area position="rfo3" data="Right Shin 3" shape="poly"
                                    coords="129,641,80,640,84,650,87,659,88,668,126,668,127,657" href="#">
                                <area position="rfo4" data="Right Shin 4" shape="poly"
                                    coords="125,671,89,670,91,679,92,689,96,702,124,701,124,686" href="#">
                                <area position="lfol1" data="Left Shin 1" shape="poly"
                                    coords="151,578,150,586,148,596,148,606,199,606,200,598,199,588,196,578"
                                    href="#">
                                <area position="lfol2" data="Left Shin 2" shape="poly"
                                    coords="146,609,147,620,147,626,146,638,197,638,199,621,199,629,200,609"
                                    href="#">
                                <area position="lfol3" data="Left Shin 3" shape="poly"
                                    coords="146,640,149,653,149,659,147,668,188,668,190,661,192,654,194,641"
                                    href="#">
                                <area position="lfol4" data="Left Shin 4" shape="poly"
                                    coords="150,670,152,680,153,690,152,701,182,701,183,686,184,679,187,670"
                                    href="#">
                                <area position="rsof1" data="Right Sole of Foot 1" shape="rect"
                                    coords="221,601,262,642" href="#">
                                <area position="rsof2" data="Right Sole of Foot 2" shape="rect"
                                    coords="223,643,262,688" href="#">
                                <area position="rsof3" data="Right Sole of Foot 3" shape="rect"
                                    coords="264,644,302,687" href="#">
                                <area position="rsof4" data="Right Sole of Foot 4" shape="rect"
                                    coords="263,601,301,644" href="#">
                                <area position="lsof1" data="Left Sole of Foot 1" shape="rect"
                                    coords="324,600,365,642" href="#">
                                <area position="lsof2" data="Left Sole of Foot 2" shape="rect"
                                    coords="325,643,365,687" href="#">
                                <area position="lsof3" data="Left Sole of Foot 3" shape="rect"
                                    coords="367,644,405,687" href="#">
                                <area position="lsof4" data="Left Sole of Foot 4" shape="rect"
                                    coords="367,601,407,642" href="#">
                                <area position="boh1" data="Back of Head 1" shape="poly"
                                    coords="457,20,473,14,486,12,486,35,451,34" href="#">
                                <area position="boh2" data="Back of Head 2" shape="poly"
                                    coords="488,12,511,16,520,24,523,34,488,34" href="#">
                                <area position="oa1" data="Occipital Area 1" shape="poly"
                                    coords="447,36,486,36,486,62,448,63" href="#">
                                <area position="oa2" data="Occipital Area 2" shape="poly"
                                    coords="450,64,486,65,487,90,452,91" href="#">
                                <area position="oa3" data="Occipital Area 3" shape="poly"
                                    coords="489,65,524,65,524,90,489,90" href="#">
                                <area position="oa4" data="Occipital Area 4" shape="poly"
                                    coords="487,36,527,36,526,62,489,62" href="#">
                                <area position="chl" data="Left Cheek" shape="poly"
                                    coords="150,74,150,108,168,92,171,73" href="#">
                                <area position="chr" data="Right Cheek" shape="poly"
                                    coords="102,74,109,97,124,106,123,74" href="#">
                                <area position="lc" data="Left Clavicle" shape="poly"
                                    coords="140,128,173,128,203,138,204,150,140,150" href="#">
                                <area position="learb" data="Left Ear" shape="poly"
                                    coords="450,64,436,65,436,88,450,93" href="#">
                                <area position="rearb" data="Right Ear" shape="poly"
                                    coords="525,64,537,65,540,80,534,90,525,90" href="#">
                                <area position="lsc1" data="Left Scapula 1" shape="poly"
                                    coords="433,136,459,129,479,129,479,170,433,169" href="#">
                                <area position="rsc1" data="Right Scapula 1" shape="poly"
                                    coords="495,129,514,129,540,135,541,169,495,169" href="#">
                                <area position="rfoe" data="Right Front of Elbow" shape="poly"
                                    coords="25,261,62,261,60,276,60,291,22,292" href="#">
                                <area position="lfoe" data="Left Front of Elbow" shape="poly"
                                    coords="214,261,217,279,218,292,253,291,251,277,251,261" href="#">
                                <area position="lboa" data="Left Back of Ankle" shape="poly"
                                    coords="445,714,448,737,445,753,478,753,473,735,471,714" href="#">
                                <area position="rboa" data="Right Back of Ankle" shape="poly"
                                    coords="503,714,499,739,497,753,530,753,527,737,529,714" href="#">
                                <area position="lsa3" data="Left Sacral Area 3" shape="rect"
                                    coords="433,336,479,375" href="#">
                                <area position="rsa4" data="Right Sacral Area 4" shape="rect"
                                    coords="495,335,541,375" href="#">
                                <area position="csa5" data="Centre Sacral Area" shape="rect"
                                    coords="481,336,493,375" href="#">
                                <area position="lcb1" data="Lower Centre of Buttocks 1" shape="rect"
                                    coords="481,418,493,456" href="#">
                                <area position="ucb2" data="Sacral Area" shape="rect" coords="481,376,493,416"
                                    href="#">
                                <area position="LRF3" data="Left Rear Forearm 3" shape="poly"
                                    coords="367,366,366,387,390,387,388,378,389,366" href="#">
                                <area position="RRF3" data="Right Rear Forearm 3" shape="poly"
                                    coords="586,366,586,377,586,387,608,388,606,376,606,365" href="#">
                                <area shape="poly" coords="595,224,587,170,565,170,565,196,562,225,593,224" href="#">
                                <area shape="poly" coords="413,225,379,225,388,170,410,170" href="#">
                            </map>
                        </section>
                    </div>
                </article>

                <span class="or">or</span>

                <article class="associate clearfix">
                    <input type="checkbox" name="associateChoice" id="assPUlcer" hidden>
                    <label for="assPUlcer">Associate Pressure Ulcer</label>
                </article>

                <div class="ctas">
                    <button>Back</button> <button class="green">Save</button> <button class="blue">Save &amp; Print</button>
                </div>
            </div>
        </div>
    </section>

    <div class="pop" id="witByPop">
        <div>
            <section>
                <article style="width:380px;">
                    <span class="popFuse" data-close="witBy"></span>
                    <span class="title">Witnessed By</span>
                    
                    <ul class="form list-unstyled clearfix">
                        <li>
                            <span class="title">Username</span>
                            <input type="text" name="" id="" >
                        </li>

                        <li>
                            <span class="title">Password</span>
                            <input type="password" name="" id="">
                        </li>
                    </ul>

                    <div class="ctas">
                        <button style="background-color:#7992B6;color:#FFF;">Verify</button> <button class="popClose" data-close="witBy">Close</button>
                    </div>
                </article>
            </section>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.scrollbar.min.js"></script>

    <script src="js/moment.min.js"></script>
    <script src="js/datepicker-2.1.25.js"></script>

    <script src="js/autosize.min.js"></script>

    <script src="js/select2.min.js"></script>

    <script src="js/custom.js"></script>
    <script>
        $('.assocMap').on('click',function(){
            $(this).next('div').addClass('show');
        });

        $('.mapChoice i').on('click', function(){
            $(this).parent().removeClass('show');
        });

        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });

        $('.autoPop').daterangepicker({
            "singleDatePicker": true,
            autoUpdateInput: true
        });

        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        $('.select2').select2();

        $('[type=checkbox]').on('change', function(){
            var checkID = $(this).attr('id');

            if($(this).is(':checked')){
                $('.' + checkID + 'Hidden').show();
            } else {
                $('.' + checkID + 'Hidden').hide();
            }
        });

        $('[type=checkbox]').on('change', function(){
            var checkID = $(this).attr('id');
            $('#' + checkID + 'Pop').css('display', 'table');
        });

        $('.popFuse, .popClose').click(function(){
            var popID = $(this).attr('data-close');
            $('#' + popID + 'Pop').css('display', 'none');
            $('#' + popID).prop("checked", false);
        });

        $('.informedSection .btnGroup input[type=radio]').on('change', function(){
            var informedID = $(this).attr('id');
            var informedName = $(this).attr('name');

            if($(this).attr('name') == informedID){
                $('#' + informedName + 'Date').show();
            } else {
                $('#' + informedName + 'Date').hide();
            }
        });

        $('input[name=associateChoice]').on('change', function(){
            if($(this).is(':checked') && $(this).attr('id') == "assInj"){
                $('.or').hide();
                $('.associate:nth-of-type(2)').hide();
            } else if($(this).is(':checked') && $(this).attr('id') == "assPUlcer") {
                $('.or').hide();
                $('.associate:nth-of-type(1)').hide();
            } else {
                $('.or').show();
                $('.associate').show();
            }
        });
    </script>
</body>
</html>
