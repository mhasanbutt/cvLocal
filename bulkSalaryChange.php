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
            top: 52px;
        }
        .contentBody .ctas {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Rota</a></li>
            </ul>
            <span class="title"><img src="images/salary.png" alt=""> Bulk Salary Change</span>
        </div>
        <div class="filtersSearch clearfix autoWidth">
            <form autocomplete="off" method="post" id="search_box">
                <input type="hidden" name="_token" value="c0CwoBvme0fxOOP2VySm3o2dN1kgEJ6IHCLvOH3O">
                <div class="byStaff">
                    <input type="text" name="searchText" id="searchText" placeholder="Search by keyword">
                    <button class="searchCustom">search</button>
                </div>
                <span class="filters">Filters</span>
                <div class="allFilters">
                    <ul class="list-unstyled">
                        <li>
                            <div class="form-group">
                                <label for="">Choose Floor / Home</label>
                                <div class="select">
                                    <select class="com_book_unit" id="searchUnits" name="searchUnits"><option value="" selected="selected">All</option><optgroup label="3-3 Leander Lodge (Home)"><option value="3-home">All (3-3 Leander Lodge Home)</option><option value="1-floor">Floor</option><option value="2-floor">First Floor</option><option value="10-floor">Basement Floor</option><option value="294-floor">Extra Floor</option><option value="461-floor">TestFloor</option><option value="462-floor">PDS Demo</option></optgroup><optgroup label="6-6-Care Home (Home)"><option value="6-home">All (6-6-Care Home Home)</option><option value="11-floor">Floor 12</option></optgroup><optgroup label="7-7-Thornton Lodge (Home)"><option value="7-home">All (7-7-Thornton Lodge Home)</option><option value="12-floor">12-12-Basement</option><option value="13-floor">13-13-Ground Floor</option><option value="14-floor">14-14-First Floor</option></optgroup><optgroup label="Old Home (Home)"><option value="163-home">All (Old Home Home)</option><option value="306-floor">Floor 1</option><option value="307-floor">Floor2</option></optgroup><optgroup label="Test (Home)"><option value="208-home">All (Test Home)</option><option value="460-floor">Test_Floor</option></optgroup><optgroup label="Director Home (Home)"><option value="256-home">All (Director Home Home)</option><option value="438-floor">test</option></optgroup><optgroup label="Shannon Wade (Home)"><option value="267-home">All (Shannon Wade Home)</option><option value="457-floor">1</option><option value="458-floor">2</option><option value="459-floor">3</option></optgroup></select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="">Choose Service User</label>
                                <div class="select">
                                    <select class="com_book_resident" id="searchResident" name="searchResident"><option value="" selected="selected">All</option><option value="6109"> tt  </option><option value="6090">Miss Sadia  ...</option><option value="6134">Mr Jonathan  22</option><option value="6144">Mr 6  6</option><option value="6085"> ab  ac</option><option value="6122">Mr Smith  Adam</option><option value="5633">Mr ABDUL JALEEL  ALRABICI</option><option value="6082">Ms LA  BA</option><option value="5849">Miss Masha  Bear</option><option value="1127">Miss Elizabeth  Betty</option><option value="5907">Ms Fatima  Bhatt</option><option value="6104">Mr la lafffzzzzzzzzzz bi</option><option value="6142">Mr Joe  Biden</option><option value="6098"> A B C</option><option value="6147">Mr Pain  Check</option><option value="6140">Miss elif  chen</option><option value="6087">Mr dddd dddddd ddddddd</option><option value="6100">Mr links  Dev</option><option value="5766">Professor Briar Jillian Butler Dillard</option><option value="5760">Mr John R Doe</option><option value="6057">Mr MAJDIYYA  DUAL</option><option value="6148">Miss Malik Henson Oscar William Flowers</option><option value="5545">Miss Wynter Ora Pickett Foster</option><option value="1862">Mr Solus Zos Galvus</option><option value="5859">Mr Richard  Garner</option><option value="6112">Miss stylish  girl</option><option value="6113">Miss Foodie  Girl</option><option value="6110"> Tom  Hardy</option><option value="6116"> Tom  Hardy</option><option value="6055">Mr LISE  HEBRON</option><option value="5631">Mr Tony  helo</option><option value="6086">Mr Mark  Henry</option><option value="6141">Mr Graham  Henry</option><option value="5655">Miss Karleigh Melendez Autumn Compton Hernandez</option><option value="3829">Ms Noelle  Holiday</option><option value="6114">Mr Devid  Hudson</option><option value="5853">Mr Samuel C Hyde</option><option value="6095">Ms CHALICE  IENCO</option><option value="6084">Mr Blue  James</option><option value="6135">Mr Khan  K.</option><option value="6068">Mr EMMET  KHAMTORN</option><option value="6136">Mr Adam  Khan</option><option value="3389">Miss Vance Felix Weaver Knowles</option><option value="1071"> Agnes  Lord</option><option value="6059">Mr James A Mary</option><option value="251">Mr Alejandro M Mason</option><option value="6137">Mr Adam  MAteen</option><option value="5611">Mr Neil  Matthews</option><option value="1116">Miss Mary  McDougal</option><option value="6030">Mr Mike  MEAKIN</option><option value="6119">Ms Dorothy  Morrison</option><option value="6118">Miss Jerry  Mouse</option><option value="6071">Mr Robert B Patrica</option><option value="1483">Mr James Donald Paul</option><option value="6020">Mr Molly  Percocets</option><option value="6111">Mr Support 1 Person1</option><option value="5747">Mr Lara Taylor Lyle Preston Poole</option><option value="6146">Mr Interim  Prescriber</option><option value="5748">Mr Daryl  QR</option><option value="252">Miss Lab  Rat</option><option value="5425">Mr Adding  Resident</option><option value="6058">Mr Linking  Resident</option><option value="6094">Mr AD's  Resident</option><option value="6131">Ms Jeremy Lacy Holden Rich</option><option value="3048">Ms Anne  RUMBLE</option><option value="6014">Miss Sadia  Sad</option><option value="6099">Mr sad sad sadasd</option><option value="6081">Mr Sanawal  Sanawal</option><option value="5720">Mr John  Smith</option><option value="6021">Mr Jayne  Smyth</option><option value="5879">Ms Ms Alea Ray Sweeney Ray Sweeney</option><option value="5882">Mr Ex nisi eiusmod temp 2</option><option value="6132">Mr Short  Term</option><option value="5899">Mr Alejo  test</option><option value="373">Mr Nigel B TEST</option><option value="3460">Miss Rhea Gavin Farley TEST</option><option value="6041">Miss Diva  TEST</option><option value="6070">Mr Jonathan  TEST</option><option value="5822">Mr James  test</option><option value="3519">Ms Cora TESTER TEST</option><option value="3524">Mr Morgan_3  TEST</option><option value="5832">Mr Jack  Test</option><option value="6092"> Tom  TEST</option><option value="6101">Mr testing  test</option><option value="6102">Mr testing  test</option><option value="6115">Miss Sami  Test</option><option value="5873">Mr Jelly  test</option><option value="3828">Mr Tim  TEST</option><option value="6133">Mr Respite  TEST</option><option value="6138"> Jonathan  TEST</option><option value="6145">Ms Fatima  Tester</option><option value="6117">Mr SCP  Tester</option><option value="6143">Mr AF's  Tester</option><option value="370">Mr Murray  Truelove</option><option value="6103">Mr tt tt tt</option><option value="6089">Mr Reception Test User RT U</option><option value="6097">Ms Today New User</option><option value="5905">Ms Emma test Watson</option><option value="3462">Professor Byron  Wiley</option><option value="107">Mrs Letha  Wilford</option></select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="">Choose Date</label>
                                <div class="date">
                                    <input type="text" name="searchDate" class="dateRangeStartEnd search_filter searchDate" id="searchDate" placeholder="Date" readonly="readonly">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="">Choose Accident/Incident</label>
                                <div class="select">

                                    <select id="searchAccidentIncident" name="searchAccidentIncident"><option value="" selected="selected">Accident/Incident</option><option value="Accident">Accident</option><option value="Incident">Incident</option></select>
                                </div>
                            </div>
                        </li>
                        <li id="searchTypeDiv" style="display: none;">
                            <div class="form-group">
                                <label for="">Search Type</label>
                                <div class="select">
                                    <select id="searchType" name="searchType"><option value="" selected="selected">Select Type</option></select>
                                </div>
                            </div>
                        </li>
                        <li id="searchSubCategoryDiv" style="display: none;">
                            <div class="form-group">
                                <label for="">Choose SubCategory</label>
                                <div class="select">
                                    <select id="searchSubCategory" name="searchSubCategory"><option value="" selected="selected">Select Subcategory</option></select>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <input type="hidden" id="show_charts" name="show_charts" value="0">
                    <button type="submit" class="searchButton green">Search</button>
                    <button class="resetSearch">Reset Filters</button>
                </div>
            </form>

            <div class="dropMenu">
                <span class="openDropMenu">Action</span>
                <ul class="list-unstyled">
                    <li><a href="#" class="print_all_details print">Print Full Detail</a></li>
                    <li><a href="#" class="print_all_tabs print">Print</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contentBody noBg noFooter">
        <div class="pageSpecificArea">
            <form>
                <ul class="list-unstyled clearfix">
                    <li>
                        <select>
                            <option>Select Increase/Decrease</option>
                        </select>
                    </li>
                    <li>
                        <select>
                            <option>Increase by amount / percentage</option>
                        </select>
                    </li>
                    <li>
                        <select>
                            <option>Select Payrate</option>
                        </select>
                    </li>
                    <li>
                        <input type="text" placeholder="Percentage / Amount Value">
                    </li>
                </ul>
                <button class="green">Set Values</button>
                <button>Apply</button>
            </form>
        </div>
        <div class="scrollArea">
            <div class="content">
                <article class="generalListing">
                    <section>
                        <ul class="withCheckbox list-unstyled clearfix">
                            <li>
                                <input type="checkbox" id="checkbox1" hidden>
                                <label for="checkbox1"></label>
                            </li>
                            <li style="width: calc(100% - 520px);">
                                <span class="title">Name</span> Anna Baxter
                            </li>
                            <li style="width: 100px;">
                                <span class="title">date of birth</span> 12.01.1943
                            </li>
                            <li style="width:120px;">
                                <span class="title">payroll number</span> 1
                            </li>
                            <li style="width:120px;">
                                <span class="title">date of joining</span> 21.09.2023
                            </li>
                            <li style="width:180px;">
                                <span class="title">employed for</span> 2 years 2 months
                            </li>
                        </ul>
                        <table>
                            <thead>
                                <th style="width:px">Pay Rate / Salary</th>
                                <th style="width:100px">Current</th>
                                <th style="width:150px">Modification</th>
                                <th style="width:220px">Type</th>
                                <th style="width:100px">Amount</th>
                                <th style="width:120px">New Value</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Salary</td>
                                    <td>24.00</td>
                                    <td>
                                        <select>
                                            <option>Increase</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select>
                                            <option>Percentage</option>
                                        </select>
                                    </td>
                                    <td>3</td>
                                    <td>
                                        <input type="text" value="25.223">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </article>
            </div>
        </div>
        <div class="ctas">
            <button href="https://jawa.linksdev.co.uk/residentsummery/6119/dashboard" class="cancelbtn pull-left" style="margin-right:4px">Back</button>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>