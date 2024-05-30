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
                <li><a href="#">Care</a></li>
            </ul>
            <span class="title"><img src="https://jawa.linksdev.co.uk/images/folder-search.png"> Assessment</span>
        </div>

        <div class="ProfileInfo">
            <span class="profileImage"><img src="images/temp-picture.jpg"></span>
            <ul class="list-unstyled">
                <li>
                    <span>Service User Name</span>
                    Terrance Edwards
                </li>
                <li>
                    <span>Date of Birth</span>
                    05-04-1974
                </li>
                <li>
                    <span>Client No.</span>
                    5921583
                </li>
                <li>
                    <span>Location</span>
                    Oxford St.
                </li>
            </ul>
        </div>

        <div class="filtersSearch clearfix">
            <form autocomplete="off" method="post" id="search_box">
                <input type="hidden" name="_token" value="R1F1uTQeh0gTfPxy6s4oymU9hnxZXOORWTOzTp8f">
                <!-- Filters Outer Text Area handler -->
                <div class="byStaff">
                    <input type="text" name="Text" id="searchText" class="search_filter" placeholder="Search by keyword" value="">
                    <button class="searchCustom">search</button>
                </div>

                <!-- Filters Dropdown handler -->
                <span class="filters">Filters</span>
                <div class="allFilters" style="display: none;">
                    <ul class="list-unstyled">
                        <li>
                            <div class="form-group">
                                <label for="">Search By Service User</label>
                                <div class="select">
                                    <select class="select2 select search_filter select2-hidden-accessible" name="searchResident" tabindex="-1" aria-hidden="true"><option value="">Select Service User</option><option value="6098"> A B C</option><option value="6085"> ab  ac</option><option value="5633">Mr ABDUL JALEEL  ALRABICI</option><option value="6136">Mr Adam  Khan</option><option value="6137">Mr Adam  MAteen</option><option value="5425">Mr Adding  Resident</option><option value="1071"> Agnes  Lord</option><option value="251">Mr Alejandro M Mason</option><option value="5899">Mr Alejo  test</option><option value="3048">Ms Anne  RUMBLE</option><option value="256">Mr Barry Baz  Brown</option><option value="6084">Mr Blue  James</option><option value="5766">Professor Briar Jillian Butler Dillard</option><option value="3462">Professor Byron  Wiley</option><option value="6095">Ms CHALICE  IENCO</option><option value="3519" selected="selected">Ms Cora TESTER TEST</option><option value="6072">Mr Counter  D</option><option value="5748">Mr Daryl  QR</option><option value="6087">Mr dddd dddddd ddddddd</option><option value="6114">Mr Devid  Hudson</option><option value="6041">Miss Diva  TEST</option><option value="6119">Ms Dorothy  Morrison</option><option value="6140">Miss elif  chen</option><option value="1127">Miss Elizabeth  Betty</option><option value="5905">Ms Emma test Watson</option><option value="6068">Mr EMMET  KHAMTORN</option><option value="5882">Mr Ex nisi eiusmod temp 2</option><option value="5907">Other Fatima Hussain Butt</option><option value="6139">Miss Fatima H Butt</option><option value="6113">Miss Foodie  Girl</option><option value="6141">Mr Graham  Henry</option><option value="5832">Mr Jack  Test</option><option value="6059">Mr James A Mary</option><option value="5822">Mr James  test</option><option value="1483">Mr James Donald Paul</option><option value="6021">Mr Jayne  Smyth</option><option value="5873">Mr Jelly  test</option><option value="6131">Ms Jeremy Lacy Holden Rich</option><option value="6118">Miss Jerry  Mouse</option><option value="5720">Mr John  Smith</option><option value="5760">Mr John R Doe</option><option value="6070">Mr Jonathan  TEST</option><option value="6134">Mr Jonathan  22</option><option value="6138"> Jonathan  TEST</option><option value="5655">Miss Karleigh Melendez Autumn Compton Hernandez</option><option value="6135">Mr Khan  K.</option><option value="6082">Ms LA  BA</option><option value="6104">Mr la lafffzzzzzzzzzz bi</option><option value="252">Miss Lab  Rat</option><option value="5747">Mr Lara Taylor Lyle Preston Poole</option><option value="107">Mrs Letha  Wilford</option><option value="6058">Mr Linking  Resident</option><option value="6100">Mr links  Dev</option><option value="6055">Mr LISE  HEBRON</option><option value="6057">Mr MAJDIYYA  DUAL</option><option value="6086">Mr Mark  Henry</option><option value="1116">Miss Mary  McDougal</option><option value="5849">Miss Masha  Bear</option><option value="6030">Mr Mike  MEAKIN</option><option value="6020">Mr Molly  Percocets</option><option value="3524">Mr Morgan_3  TEST</option><option value="5879">Ms Ms Alea Ray Sweeney Ray Sweeney</option><option value="370">Mr Murray  Truelove</option><option value="5611">Mr Neil  Matthews</option><option value="373">Mr Nigel B TEST</option><option value="3829">Ms Noelle  Holiday</option><option value="6089">Mr Reception Test User RT U</option><option value="6133">Mr Respite  TEST</option><option value="3460">Miss Rhea Gavin Farley TEST</option><option value="5859">Mr Richard  Garner</option><option value="6071">Mr Robert B Patrica</option><option value="6099">Mr sad sad sadasd</option><option value="6014">Miss Sadia  Sad</option><option value="6090">Miss Sadia  sad</option><option value="6115">Miss Sami  Test</option><option value="5853">Mr Samuel C Hyde</option><option value="6081">Mr Sanawal  Sanawal</option><option value="6117">Mr SCP  Tester</option><option value="6132">Mr Short  Term</option><option value="6122">Mr Smith  Adam</option><option value="1862">Mr Solus Zos Galvus</option><option value="6112">Miss stylish  girl</option><option value="6111">Mr Support 1 Person1</option><option value="6101">Mr testing  test</option><option value="6102">Mr testing  test</option><option value="3828">Mr Tim  TEST</option><option value="6097">Ms Today New User</option><option value="6092"> Tom  TEST</option><option value="6110"> Tom  Hardy</option><option value="6116"> Tom  Hardy</option><option value="5631">Mr Tony  helo</option><option value="6103">Mr tt tt tt</option><option value="6109"> tt  </option><option value="3389">Miss Vance Felix Weaver Knowles</option><option value="5545">Miss Wynter Ora Pickett Foster</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2--container"><span class="select2-selection__rendered" id="select2--container" title="Ms Cora TESTER TEST">Ms Cora TESTER TEST</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="">Choose Date</label>
                                <div class="date">
                                    <input type="text" name="searchDate" class="dateRangeStartEndS search_filter searchDate print_daterange" id="" placeholder="Date" "="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="">Carer</label>
                                <div class="select">
                                    <select class="select2 select search_filter select2-hidden-accessible" name="searchUser" tabindex="-1" aria-hidden="true"><option value="" selected="selected">Select Carer</option><option value="1">Rishi R_</option><option value="15">Change of Details www Employee</option><option value="75">Tyler T</option><option value="76">House Keeper</option><option value="110">Malik Waqas</option><option value="273">L. V</option><option value="1704">Jack ja Morrison</option><option value="3467">FR AN</option><option value="3875">Jean V. TEST</option><option value="4691">HR Demo</option><option value="4733">ALi TEST123</option><option value="4798">Temp Connor Connor</option><option value="5140">Asriel Dreemur</option><option value="5141">James James James</option><option value="5142">Elijah Elijah Elijah</option><option value="5146">Lucas Lucas Lucas</option><option value="5147">John Nick Scot</option><option value="5148">test asdf</option><option value="5149">AS If</option><option value="5254">Harry Parker</option><option value="6127">NEW NoKID NoKID</option><option value="6453">Creation ewf Test</option><option value="6454">Laura Order</option><option value="6455">Qualified Man</option><option value="6457">Unqualified Employee</option><option value="6458">Harry John</option><option value="6459">Sadia Sadi</option><option value="6921">SN AL</option><option value="6923">hi bye</option><option value="6925">Inspector Mode</option><option value="6927">john doe doe</option><option value="6934">permission check test</option><option value="6939">Test Employee</option><option value="6947">Permissionist Sesessionist</option><option value="6948">Nicola Fenlon</option><option value="6950">Hassan Dev Dev</option><option value="6951">Module TEST</option><option value="6952">Maintenance Man</option><option value="6953">Foldered Employee</option><option value="6957">gyn gyn gyn</option><option value="6958">HAS But</option><option value="6959">AR Bukh</option><option value="6960">Foldered Employee</option><option value="6967">asasa sasas assa</option><option value="6968">Tim horton_2</option><option value="6969">Tj Tj</option><option value="6971">Salary Tester</option><option value="6981">ALI Raza Bukhari</option><option value="6989">staffTest staffTest</option><option value="6990">Adam Distraction</option><option value="6993">Fatima Butt</option><option value="6999">Relish Test</option><option value="7003">Rish Relish AD</option><option value="7005">Oleg p</option><option value="7009">Linkdev - User</option><option value="7016">links Dev</option><option value="7019">Relish Star</option><option value="7025">Idrees Tahir Mughal</option><option value="7027">Migration Tester</option><option value="7029">Migration L. TEST</option><option value="7031">Xerox Copying</option><option value="7034">Farhan test test</option><option value="7035">Test Employee Test</option><option value="7036">k k k</option><option value="7039">Directer Dasboard Test</option><option value="7040">Relish Test User</option><option value="7043">Flamingo Dedkd</option><option value="7045">chris gayle chris</option><option value="7054">Solemn Warning</option><option value="7056">Restrictive Employee</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2--container"><span class="select2-selection__rendered" id="select2--container" title="Select Carer">Select Carer</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button type="submit" class="searchButton green">Search</button>
                    <button type="button" class="defaultButton reset_filter ">Reset Filter</button>
                </div>
            </form>

            <div class="dropMenu">
                <span class="openDropMenu">Actions</span>
                <ul class="list-unstyled">
                    <li><a href="#" class="export">Export</a></li>
                </ul>
            </div>

            <div class="dropMenu">
                <span class="openDropMenu blue">Create Assessment</span>
                <ul class="list-unstyled withOutIcon">
                    <li><a href="#">Self-Neglect</a></>
                    <li><a href="#">Risk of Flooding Service User Room</a></>
                    <li><a href="#">Risk of Becoming Unwell</a></>
                    <li><a href="#">Risk of Constipation</a></>
                    <li><a href="#">Risk of Refusing Care and Visits</a></>
                    <li><a href="#">Risk of Bed Siderails</a></>
                    <li><a href="#">Injury From Using Crash Mat</a></>
                    <li><a href="#">RISK OF WALKING WITH PURPOSE/ENTERING OTHER PEOPLE’S ROOMS</a></>
                    <li><a href="#">RISK OF ABSCONDING</a></>
                    <li><a href="#">RISK OF FALL AT NIGHT</a></>
                    <li><a href="#">RISK OF FALL</a></>
                    <li><a href="#">Risk of Injury from Wheelchair & Hoist Transfers</a></>
                    <li><a href="#">RISK OF DEVELOPING PRESSURE ULCER</a></>
                    <li><a href="#">RISK OF BRUISING</a></>
                </ul>
            </div>


        </div>
    </section>

    <section class="contentBody noBg noFooter">
        <div class="counters clearfix">
            <ul class="list-unstyled clearfix pull-right">
                <li><article><span>12</span><div class="title"><i>Staff with 100%</i></div> </article></li>
                <li><article><span>12</span><div class="title"><i>Staff with less then 75%</i></div> </article></li>
                <li><article><span>12</span><div class="title"><i> Staff with less then 50%</i></div> </article></li>
                <li><article><span>12</span><div class="title"><i>Staff with less then 25%</i></div> </article></li>
            </ul>

            <span class="title">
                Observations / Handover Notes since<br>
                23-10-2023
            </span>
        </div>

        <div class="scrollArea">
            <div class="content">
                <div class="generalListing subSections">
                    <section class="clearfix">
                        <ul class="noTitle list-unstyled clearfix">
                            <li>
                                <span class="title">Name</span>
                                Mr. Tim Shermin
                            </li>
                            <li>
                                <span class="title">Date of Joining</span>
                                12.03.2024
                            </li>
                        </ul>
                        
                        <ul class="list-unstyled clearfix">
                            <li>
                                <i>DNACPR</i>
                                <span class="title">Order Date</span>
                                14.02.2024
                            </li>
                            <li>
                                <span class="title">Review Date</span>
                                13.02.2023
                            </li>
                            <li>
                                <span class="title">Funeral Notes Present?</span>
                                May Be
                            </li>
                        </ul>
                        
                        <ul class="list-unstyled clearfix">
                            <li>
                                <span class="title">Order Date</span>
                                25.02.2024
                            </li>
                            <li>
                                <span class="title">Review Date</span>
                                25.02.2024
                            </li>
                            <li>
                                <span class="title">Funeral Notes Present?</span>
                                No
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(".question").on('click', function () {
            $(".question").next('ul').not($(this).next('ul')).hide();
            let offset = $(this).offset();
            $(this).next('ul').css({
                top: offset.top,
                left: offset.left
            }).fadeToggle();
        });
    </script>
</body>

</html>