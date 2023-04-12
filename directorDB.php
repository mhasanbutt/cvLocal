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
        .highcharts-drilldown-axis-label {
            fill: #CCC !important;
        }

        text {
            fill: #CCC !important;
        }

        .scroll-wrapper {
            bottom: 15px;
            width: auto;
            right: 20px;
            left: 20px;
            top: 170px;
        }

        .dbComparisonHead li {
            width: 50%;
        }

        .comparisonList li {
            width: calc((100% - 150px) / 2);
        }

        #assetReqtab .scroll-wrapper {
            top: 65px;
        }
    </style>
</head>

<body>
    <div class="directorDash">
        <aside>
            <article>
                Director <span class="home">(Care Home)</span> <i><?php echo date('M d, Y'); ?></i>
            </article>
            <ul class="list-unstyled tabs">
                <li id="overview"><a href="#">Overview</a></li>
                <li id="graphs"><a href="#">Analysis</a></li>
                <li id="graphs"><a href="#">Chef Menu</a></li>
                <li id="graphs"><a href="#">Policies &amp; Procedures</a></li>
                <li id="graphs"><a href="#">Audit Builder</a></li>
                <li class="active" id="assetReq"><a href="#">Asset Requests</a></li>
                <li id="comparison"><a href="#">Comparison</a></li>
                <li id="folderStructure"><a href="#">Folder Structure</a></li>
            </ul>
            <ul class="list-unstyled menu">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Messages <i>12</i></a></li>
                <li><a href="#">Log Out</a></li>
            </ul>
        </aside>

        <div class="allStat">
            <span>
                <i>78<small>%</small></i> Occupency Of All<br>Care Homes
            </span>
            <span>
                <i>06</i> Number Of<br>Care Homes
            </span>
        </div>

        <ul class="list-unstyled links">
            <li>
                <span>Create Service User</span>
                <ul class="drop-down-list clearfix">
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                </ul>
            </li>

            <li>
                <span>Transfer Service User</span>
                <ul class="drop-down-list clearfix">
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Banksfield Nursing Home</span></a></li>
                    <li><a href="#"><span>Barnston Court Care Home</span></a></li>
                    <li><a href="#"><span>Barton Brook Care Home</span></a></li>
                    <li><a href="#"><span>Beachcroft</span></a></li>
                    <li><a href="#"><span>Berwick House</span></a></li>
                    <li><a href="#"><span>Bilton Hall</span></a></li>
                    <li><a href="#"><span>Brandon House</span></a></li>
                    <li><a href="#"><span>Broadway</span></a></li>
                    <li><a href="#"><span>Broadway Nursing</span></a></li>
                    <li><a href="#"><span>Brooklands Care home</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Banksfield Nursing Home</span></a></li>
                    <li><a href="#"><span>Barnston Court Care Home</span></a></li>
                    <li><a href="#"><span>Barton Brook Care Home</span></a></li>
                    <li><a href="#"><span>Beachcroft</span></a></li>
                    <li><a href="#"><span>Berwick House</span></a></li>
                    <li><a href="#"><span>Bilton Hall</span></a></li>
                    <li><a href="#"><span>Brandon House</span></a></li>
                    <li><a href="#"><span>Broadway</span></a></li>
                    <li><a href="#"><span>Broadway Nursing</span></a></li>
                    <li><a href="#"><span>Brooklands Care home</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Banksfield Nursing Home</span></a></li>
                    <li><a href="#"><span>Barnston Court Care Home</span></a></li>
                    <li><a href="#"><span>Barton Brook Care Home</span></a></li>
                    <li><a href="#"><span>Beachcroft</span></a></li>
                    <li><a href="#"><span>Berwick House</span></a></li>
                    <li><a href="#"><span>Bilton Hall</span></a></li>
                    <li><a href="#"><span>Brandon House</span></a></li>
                    <li><a href="#"><span>Broadway</span></a></li>
                    <li><a href="#"><span>Broadway Nursing</span></a></li>
                    <li><a href="#"><span>Brooklands Care home</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Banksfield Nursing Home</span></a></li>
                    <li><a href="#"><span>Barnston Court Care Home</span></a></li>
                    <li><a href="#"><span>Barton Brook Care Home</span></a></li>
                    <li><a href="#"><span>Beachcroft</span></a></li>
                    <li><a href="#"><span>Berwick House</span></a></li>
                    <li><a href="#"><span>Bilton Hall</span></a></li>
                    <li><a href="#"><span>Brandon House</span></a></li>
                    <li><a href="#"><span>Broadway</span></a></li>
                    <li><a href="#"><span>Broadway Nursing</span></a></li>
                    <li><a href="#"><span>Brooklands Care home</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Banksfield Nursing Home</span></a></li>
                    <li><a href="#"><span>Barnston Court Care Home</span></a></li>
                    <li><a href="#"><span>Barton Brook Care Home</span></a></li>
                    <li><a href="#"><span>Beachcroft</span></a></li>
                    <li><a href="#"><span>Berwick House</span></a></li>
                    <li><a href="#"><span>Bilton Hall</span></a></li>
                    <li><a href="#"><span>Brandon House</span></a></li>
                    <li><a href="#"><span>Broadway</span></a></li>
                    <li><a href="#"><span>Broadway Nursing</span></a></li>
                    <li><a href="#"><span>Brooklands Care home</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Banksfield Nursing Home</span></a></li>
                    <li><a href="#"><span>Barnston Court Care Home</span></a></li>
                    <li><a href="#"><span>Barton Brook Care Home</span></a></li>
                    <li><a href="#"><span>Beachcroft</span></a></li>
                    <li><a href="#"><span>Berwick House</span></a></li>
                    <li><a href="#"><span>Bilton Hall</span></a></li>
                    <li><a href="#"><span>Brandon House</span></a></li>
                    <li><a href="#"><span>Broadway</span></a></li>
                    <li><a href="#"><span>Broadway Nursing</span></a></li>
                    <li><a href="#"><span>Brooklands Care home</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Banksfield Nursing Home</span></a></li>
                    <li><a href="#"><span>Barnston Court Care Home</span></a></li>
                    <li><a href="#"><span>Barton Brook Care Home</span></a></li>
                    <li><a href="#"><span>Beachcroft</span></a></li>
                    <li><a href="#"><span>Berwick House</span></a></li>
                    <li><a href="#"><span>Bilton Hall</span></a></li>
                    <li><a href="#"><span>Brandon House</span></a></li>
                    <li><a href="#"><span>Broadway</span></a></li>
                    <li><a href="#"><span>Broadway Nursing</span></a></li>
                    <li><a href="#"><span>Brooklands Care home</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                    <li><a href="#"><span>Banksfield Nursing Home</span></a></li>
                    <li><a href="#"><span>Barnston Court Care Home</span></a></li>
                    <li><a href="#"><span>Barton Brook Care Home</span></a></li>
                    <li><a href="#"><span>Beachcroft</span></a></li>
                    <li><a href="#"><span>Berwick House</span></a></li>
                    <li><a href="#"><span>Bilton Hall</span></a></li>
                    <li><a href="#"><span>Brandon House</span></a></li>
                    <li><a href="#"><span>Broadway</span></a></li>
                    <li><a href="#"><span>Broadway Nursing</span></a></li>
                    <li><a href="#"><span>Brooklands Care home</span></a></li>
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                    <li><a href="#"><span>Anchorage</span></a></li>
                </ul>
            </li>

            <li>
                <span>Log In to Homes</span>
                <ul class="drop-down-list clearfix">
                    <li><a href="#"><span>Byron Lodge Care Home</span></a></li>
                    <li><a href="#"><span>Courtfield</span></a></li>
                    <li><a href="#"><span>Daleside</span></a></li>
                    <li><a href="#"><span>Douglas Bank</span></a></li>
                </ul>
            </li>
        </ul>

        <section id="overviewtab">
            

            <div class="homes clearfix">
                <ul class="list-unstyled homeslist">
                    <div class="scrollArea">
                        <li class="active" id="home1">
                            <span><i>&nbsp</i>Care Home 1</span>
                            <span><i>Service Users</i>58</span>
                            <span><i>No. of Beds</i>62</span>
                        </li>
                        <li id="home2">
                            <span><i>&nbsp</i>Care Home 2</span>
                            <span><i>Service Users</i>43</span>
                            <span><i>No. of Beds</i>50</span>
                        </li>
                        <li id="home3">
                            <span><i>&nbsp</i>Care Home 3</span>
                            <span><i>Service Users</i>44</span>
                            <span><i>No. of Beds</i>60</span>
                        </li>
                        <li id="home4">
                            <span><i>&nbsp</i>Care Home 4</span>
                            <span><i>Service Users</i>58</span>
                            <span><i>No. of Beds</i>70</span>
                        </li>
                        <li id="home5">
                            <span><i>&nbsp</i>Care Home 5</span>
                            <span><i>Service Users</i>51</span>
                            <span><i>No. of Beds</i>55</span>
                        </li>
                    </div>
                </ul>

                <div id="home1info" class="homesInfo active">
                    <div id="carehome1" class="graphical" style="width:400px; height:300px;"></div>


                    <div class="dashLegends">
                        <ul class="list-unstyled">
                            <li>Private: <strong>67% (39 Beds)</strong></li>
                            <li>LA: <strong>4% (4 Beds)</strong></li>
                            <li>LA (TopUp): <strong>4% (2 Beds)</strong></li>
                            <li>LA (FNC): <strong>2% (4 Bed)</strong></li>
                            <li>LA (TopUp & FNC): <strong>6% (3 Beds)</strong></li>
                            <li>NHS: <strong>4% (2 Beds)</strong></li>
                            <li>FNC: <strong>2% (4 Bed)</strong></li>
                            <li>Other: <strong>2% (1 Bed)</strong></li>
                            <li>Not Selected: <strong>0% (0 Bed)</strong></li>
                        </ul>
                    </div>
                </div>

                <div id="home2info" class="homesInfo">
                    <div id="carehome2" class="graphical" style="width:400px; height:300px;"></div>

                    <div class="dashLegends">
                        <ul class="list-unstyled">
                            <li>Private: <strong>53% (23 Beds)</strong></li>
                            <li>LA: <strong>4% (3 Beds)</strong></li>
                            <li>LA (TopUp): <strong>4% (1 Beds)</strong></li>
                            <li>LA (FNC): <strong>2% (3 Bed)</strong></li>
                            <li>LA (TopUp & FNC): <strong>1% (3 Beds)</strong></li>
                            <li>NHS: <strong>4% (2 Beds)</strong></li>
                            <li>FNC: <strong>2% (4 Bed)</strong></li>
                            <li>Other: <strong>2% (6 Bed)</strong></li>
                        </ul>
                    </div>
                </div>

                <div id="home3info" class="homesInfo">
                    <div id="carehome3" class="graphical" style="width:400px; height:300px;"></div>

                    <div class="dashLegends">
                        <ul class="list-unstyled">
                            <li>Private: <strong>80% (35 Beds)</strong></li>
                            <li>LA: <strong>4% (32 Beds)</strong></li>
                            <li>LA (TopUp): <strong>4% (1 Beds)</strong></li>
                            <li>LA (FNC): <strong>2% (1 Bed)</strong></li>
                            <li>LA (TopUp & FNC): <strong>1% (2 Beds)</strong></li>
                            <li>NHS: <strong>4% (1 Beds)</strong></li>
                            <li>FNC: <strong>2% (1 Bed)</strong></li>
                            <li>Other: <strong>0% (0 Bed)</strong></li>
                        </ul>
                    </div>
                </div>

                <div id="home4info" class="homesInfo">
                    <div id="carehome4" class="graphical" style="width:400px; height:300px;"></div>

                    <div class="dashLegends">
                        <ul class="list-unstyled">
                            <li>Private: <strong>93% (54 Beds)</strong></li>
                            <li>LA: <strong>4% (2 Beds)</strong></li>
                            <li>LA (TopUp): <strong>0% (0 Beds)</strong></li>
                            <li>LA (FNC): <strong>0% (0 Bed)</strong></li>
                            <li>LA (TopUp & FNC): <strong>0% (0 Beds)</strong></li>
                            <li>NHS: <strong>4% (2 Beds)</strong></li>
                            <li>FNC: <strong>0% (0 Bed)</strong></li>
                            <li>Other: <strong>0% (0 Bed)</strong></li>
                        </ul>
                    </div>
                </div>

                <div id="home5info" class="homesInfo">
                    <div id="carehome5" class="graphical" style="width:400px; height:300px;"></div>

                    <div class="dashLegends">
                        <ul class="list-unstyled">
                            <li>Private: <strong>92% (47 Beds)</strong></li>
                            <li>LA: <strong>1% (1 Beds)</strong></li>
                            <li>LA (TopUp): <strong>1% (1 Beds)</strong></li>
                            <li>LA (FNC): <strong>0% (0 Bed)</strong></li>
                            <li>LA (TopUp & FNC): <strong>0% (0 Beds)</strong></li>
                            <li>NHS: <strong>4% (2 Beds)</strong></li>
                            <li>FNC: <strong>0% (0 Bed)</strong></li>
                            <li>Other: <strong>0% (0 Bed)</strong></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="partition clearfix">
                <div class="portion">
                    <h2>Employees</h2>
                    <div class="scrollArea">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Overall</th>
                                    <th>Agency</th>
                                    <th>Vaccinated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total</td>
                                    <td>558</td>
                                    <td>79</td>
                                    <td>543</td>
                                </tr>
                                <tr>
                                    <td>Care Home 1</td>
                                    <td>102</td>
                                    <td>8</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>Care Home 2</td>
                                    <td>112</td>
                                    <td>12</td>
                                    <td>110</td>
                                </tr>
                                <tr>
                                    <td>Care Home 3</td>
                                    <td>98</td>
                                    <td>7</td>
                                    <td>90</td>
                                </tr>
                                <tr>
                                    <td>Care Home 4</td>
                                    <td>103</td>
                                    <td>9</td>
                                    <td>102</td>
                                </tr>
                                <tr>
                                    <td>Care home 5</td>
                                    <td>95</td>
                                    <td>10</td>
                                    <td>94</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="portion enquiries">
                    <h2>Service User Enquiries</h2>
                    <div class="enquiryTab">
                        <span class="active" id="recent">Recent</span>
                        <span id="converted">Converted</span>
                    </div>
                    <div class="scrollArea">
                        <table class="active highlightName" id="recentTab">
                            <thead>
                                <tr>
                                    <th>Recent Enquiries</th>
                                    <th>Enquiry Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mr John Smith</td>
                                    <td>19-05-2012</td>
                                    <td>Viewed</td>
                                </tr>
                                <tr>
                                    <td>Mr Tim Shermin</td>
                                    <td>23-07-2012</td>
                                    <td>Enquiry</td>
                                </tr>
                                <tr>
                                    <td>Mr George Korner</td>
                                    <td>25-12-2012</td>
                                    <td>Feedback</td>
                                </tr>
                                <tr>
                                    <td>Mrs Lara Craft</td>
                                    <td>05-03-2013</td>
                                    <td>Viewed</td>
                                </tr>
                                <tr>
                                    <td>Mrs Joyce Bidwell</td>
                                    <td>19-05-2012</td>
                                    <td>Viewed</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="highlightName" id="convertedTab">
                            <thead>
                                <tr>
                                    <th>Service User</th>
                                    <th>Conversion Date</th>
                                    <th>Residency Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mr Brooks Ali</td>
                                    <td>25-07-2020</td>
                                    <td>Permanent</td>
                                </tr>
                                <tr>
                                    <td>MrChristopher Edger</td>
                                    <td>23-09-2020</td>
                                    <td>Respite</td>
                                </tr>
                                <tr>
                                    <td>Mrs Rose Walton</td>
                                    <td>25-12-2020</td>
                                    <td>Emergency</td>
                                </tr>
                                <tr>
                                    <td>Mr Howard Henry</td>
                                    <td>05-03-2013</td>
                                    <td>Permanent</td>
                                </tr>
                                <tr>
                                    <td>Mrs Aly Moss</td>
                                    <td>19-05-2020</td>
                                    <td>Permanent</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section id="graphstab">

            <div class="partition noHeight clearfix">
                <div class="scrollArea">
                    <div class="portion">
                        <h2>Total Fees</h2>
                        <div id="column" class="column"></div>
                    </div>
                    <div class="portion">
                        <h2>A & I</h2>
                        <div id="column-container" class="column"></div>
                    </div>

                    <div class="portion">
                        <h2>Missed Medication</h2>
                        <div id="container-careplan"></div>
                    </div>

                    <div class="portion">
                        <h2>Support Care Plan Analysis</h2>
                        <div id="container" class="pie"></div>
                    </div>

                    <div class="portion">
                        <h2>Expired Training</h2>
                        <div id="column-2" class="column"></div>
                    </div>

                    <div class="portion">
                        <h2>Outstanding Audits</h2>
                        <div id="bar" class="bar"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="assetReqtab" class="show">
            <div class="scrollArea">
                <ul class="list-unstyled clearfix assetList">
                    <li class="clearfix">
                        <span>3-3 Leander Lodge</span>
                        <span><i>Asset Requests</i>5</span>
                        <span><i>Active</i>3</span>
                        <span><i>Request</i>2</span>
                    </li>
                </ul>
            </div>
        </section>

        <section id="comparisontab">
            <div class="row">
                <div class="col-md-3 col-md-offset-9">
                    <form>
                        <select name="" id="">
                            <option value="">Choose Category</option>
                            <option value="">Choose Category</option>
                            <option value="">Choose Category</option>
                            <option value="">Choose Category</option>
                            <option value="">Choose Category</option>
                            <option value="">Choose Category</option>
                        </select>
                    </form>
                </div>
            </div>

            <ul class="list-unstyled clearfix dbComparisonHead">
                <li>Aarandale Manor</li>
                <li>Applecroft</li>
            </ul>

            <div class="scrollArea">
                <ul class="list-unstyled comparisonList">
                    <li>Onboarding Date</li>
                    <li>25-May</li>
                    <li>27-Apr</li>
                </ul>
            </div>
        </section>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.drop-down-list').each(function(){
            var liwidth = $(this).children('li').length;

            var ulwidth = $(this).width();

            if (liwidth > 75) {
                $(this).css('width',ulwidth * 5);
            } else if (liwidth > 49 && liwidth < 76) {
                $(this).css('width',ulwidth * 3);
            } else if (liwidth > 25 && liwidth < 51) {
                $(this).css('width',ulwidth * 2);
            } else if (liwidth > 19 && liwidth < 26) {
                $(this).css('width',ulwidth * 1);
            }
            });
    </script>
    <script>
        var pieColors = (function () {
            var colors = [],
                base = Highcharts.getOptions().colors[0],
                i;

            for (i = 0; i < 10; i += 1) {
                colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
            }
            return colors;
        }());

        Highcharts.chart('carehome1', {
            chart: {
                type: 'pie',
                backgroundColor: 'rgb(0,0,0,0)'
            },


            title: {
                text: '',

            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        color: 'white'
                    }
                }
            },
            series: [{
                name: 'Funding Type',
                data: [{
                        name: 'Private ',
                        y: 67,
                        color: '#4780b7'
                    },
                    {
                        name: 'LA',
                        y: 4,
                        color: '#cebd3e'
                    },
                    {
                        name: 'LA (TopUp)',
                        y: 4,
                        color: '#da4569'
                    },
                    {
                        name: 'LA (FNC)',
                        y: 2,
                        color: '#6267cb'
                    },
                    {
                        name: 'LA (TopUp & FNC)',
                        y: 6,
                        color: '#d17d36'
                    },
                    {
                        name: 'NHS',
                        y: 4,
                        color: '#6ac757'
                    },
                    {
                        name: 'FNC',
                        y: 2,
                        color: '#1c1c1e'
                    },
                    {
                        name: 'Other',
                        y: 2,
                        color: '#999999'
                    },
                ]
            }]
        });


        Highcharts.chart('carehome2', {
            chart: {
                type: 'pie',
                backgroundColor: 'rgb(0,0,0,0)'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        color: 'white'
                    }
                }
            },
            series: [{
                name: 'Funding Type',
                data: [{
                        name: 'Private ',
                        y: 53,
                        color: '#4780b7'
                    },
                    {
                        name: 'LA',
                        y: 4,
                        color: '#cebd3e'
                    },
                    {
                        name: 'LA (TopUp)',
                        y: 4,
                        color: '#da4569'
                    },
                    {
                        name: 'LA (FNC)',
                        y: 2,
                        color: '#6267cb'
                    },
                    {
                        name: 'LA (TopUp & FNC)',
                        y: 1,
                        color: '#d17d36'
                    },
                    {
                        name: 'NHS',
                        y: 4,
                        color: '#6ac757'
                    },
                    {
                        name: 'FNC',
                        y: 2,
                        color: '#1c1c1e'
                    },
                    {
                        name: 'Other',
                        y: 2,
                        color: '#999999'
                    },
                ]
            }]
        });

        Highcharts.chart('carehome3', {
            chart: {
                type: 'pie',
                backgroundColor: 'rgb(0,0,0,0)'
            },
            title: {
                text: '',
                enabled: false
            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        color: 'white'
                    }
                }
            },
            series: [{
                name: 'Funding Type',
                data: [{
                        name: 'Private ',
                        y: 80,
                        color: '#4780b7'
                    },
                    {
                        name: 'LA',
                        y: 4,
                        color: '#cebd3e'
                    },
                    {
                        name: 'LA (TopUp)',
                        y: 4,
                        color: '#da4569'
                    },
                    {
                        name: 'LA (FNC)',
                        y: 2,
                        color: '#6267cb'
                    },
                    {
                        name: 'LA (TopUp & FNC)',
                        y: 1,
                        color: '#d17d36'
                    },
                    {
                        name: 'NHS',
                        y: 4,
                        color: '#6ac757'
                    },
                    {
                        name: 'FNC',
                        y: 2,
                        color: '#1c1c1e'
                    },
                    {
                        name: 'Other',
                        y: 0,
                        color: '#999999'
                    },
                ]
            }]
        });

        Highcharts.chart('carehome4', {
            chart: {
                type: 'pie',
                backgroundColor: 'rgb(0,0,0,0)'
            },
            title: {
                text: '',
                enabled: false
            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        color: 'white'
                    }
                }
            },
            series: [{
                name: 'Funding Type',
                data: [{
                        name: 'Private ',
                        y: 93,
                        color: '#4780b7'
                    },
                    {
                        name: 'LA',
                        y: 4,
                        color: '#cebd3e'
                    },
                    {
                        name: 'LA (TopUp)',
                        y: 0,
                        color: '#da4569'
                    },
                    {
                        name: 'LA (FNC)',
                        y: 0,
                        color: '#6267cb'
                    },
                    {
                        name: 'LA (TopUp & FNC)',
                        y: 0,
                        color: '#d17d36'
                    },
                    {
                        name: 'NHS',
                        y: 4,
                        color: '#6ac757'
                    },
                    {
                        name: 'FNC',
                        y: 0,
                        color: '#1c1c1e'
                    },
                    {
                        name: 'Other',
                        y: 0,
                        color: '#999999'
                    },
                ]
            }]
        });

        Highcharts.chart('carehome5', {
            chart: {
                type: 'pie',
                backgroundColor: 'rgb(0,0,0,0)'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        color: 'white'
                    }
                }
            },
            series: [{
                name: 'Funding Type',
                data: [{
                        name: 'Private ',
                        y: 92,
                        color: '#4780b7'
                    },
                    {
                        name: 'LA',
                        y: 1,
                        color: '#cebd3e'
                    },
                    {
                        name: 'LA (TopUp)',
                        y: 1,
                        color: '#da4569'
                    },
                    {
                        name: 'LA (FNC)',
                        y: 0,
                        color: '#6267cb'
                    },
                    {
                        name: 'LA (TopUp & FNC)',
                        y: 0,
                        color: '#d17d36'
                    },
                    {
                        name: 'NHS',
                        y: 4,
                        color: '#6ac757'
                    },
                    {
                        name: 'FNC',
                        y: 0,
                        color: '#1c1c1e'
                    },
                    {
                        name: 'Other',
                        y: 0,
                        color: '#999999'
                    },
                ]
            }]
        });

        $('.tabs li').on('click', function () {
            var t = $(this).attr('id');
            $('.tabs li').removeClass('active');
            $(this).addClass('active');

            $('.directorDash section').removeClass('show');
            $('#' + t + 'tab').addClass('show');
        });

        $('.homeslist li').on('click', function () {
            var t = $(this).attr('id');
            $('.homes li').removeClass('active');
            $(this).addClass('active');

            $('.homesInfo').removeClass('active');
            $('#' + t + 'info').addClass('active');
        });

        $('.enquiryTab span').on('click', function () {
            var t = $(this).attr('id');
            $('.enquiryTab span').removeClass('active');
            $(this).addClass('active');

            $('.enquiries table').removeClass('active');
            $('#' + t + 'Tab').addClass('active');
        });

        $('#su').on('click', function () {
            $('.drop-down-list').toggleClass('show')
        });

        Highcharts.chart('column', {
            chart: {
                type: 'column',
                align: 'center',
                backgroundColor: 'rgb(0,0,0,0)'
            },
            title: {
                text: '',
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: ' £ {point.y} ',
                clusterFormat: 'Clustered points: {point.clusterPointsAmount}',
                backgroundColor: 'rgba(0, 0, 0, .7);',
                color: '#000',

            },
            xAxis: {
                type: 'category',
                tickPosition: 'inside',
                tickwidth: 4,
            },
            yAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: ''
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                itemStyle: {
                    color: '#fff',
                    fontWeight: 'bold'
                }
            },

            series: [{
                    color: '#c5d86d',
                    dataLabels: {
                        enabled: false,
                        format: '{point.y:.f} Time Asleep:',
                    },
                    name: 'Recieved',

                    data: [{
                            name: 'Last Month',
                            drilldown: 'tnc',
                            y: 40,
                        },
                        {
                            name: 'This Month',
                            drilldown: 'tnc',
                            y: 59,
                        },
                    ]
                },
                {
                    color: '#1b998b',
                    dataLabels: {
                        enabled: false,
                        format: '{point.y:.f} Time Asleep:',
                    },
                    name: 'Outstanding',

                    data: [{
                            name: 'Last Month',
                            drilldown: 'tnc',
                            y: 70,
                        },
                        {
                            name: 'This Month',
                            drilldown: 'tnc',
                            y: 65,
                        },
                    ]
                },
            ],
            drilldown: {
                series: [{
                    id: 'tnc',
                    type: 'column',
                    name: 'Total Fees',
                    data: [{
                            name: 'Care Home_1',
                            y: 80,
                        },

                        {
                            name: 'Care_Home_2"',
                            y: 70,
                        },

                        {
                            name: 'Care Home_3"',
                            y: 54,
                        },
                        {
                            name: 'Care Home_3"',
                            y: 69,
                        },
                        {
                            name: 'Care Home_3"',
                            y: 94,
                        },
                    ]
                }, ]
            },
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });

        Highcharts.chart('column-container', {
            chart: {
                type: 'column',
                backgroundColor: 'rgb(0,0,0,0)',
                events: {
                    drilldown: function (e) {
                        this.options.legend["enabled"] = true;
                    },
                    drillup: function (e) {
                        this.options.legend["enabled"] = true;
                    },
                }
            },
            title: {
                text: '',
            },
            tooltip: {

                backgroundColor: 'rgba(0, 0, 0, .7);',
                color: '#000',
            },

            yAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: ''
                }
            },

            xAxis: {
                type: 'category',
            },

            legend: {
                enabled: false,
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                itemStyle: {
                    color: '#fff',
                    fontWeight: 'bold'
                }
            },

            series: [{
                name: 'Falls',
                dataLabels: {
                    enabled: false,
                    format: '{point.y:.f}:',
                    distance: 5
                },

                data: [{
                        name: 'Care Home_1',
                        y: 6,
                        drilldown: 'tnc1',
                        color: '#ae759f'
                    },
                    {
                        name: 'Care Home_2',
                        y: 7,
                        drilldown: 'tnc2',
                        color: '#d8b4e2'

                    },
                    {
                        name: 'Care Home_3',
                        y: 2,
                        drilldown: 'tnc2',
                        color: '#bc96e6'

                    },
                    {
                        name: 'Care Home_4',
                        y: 5,
                        drilldown: 'tnc3',
                        color: '#55286f'

                    },
                    {
                        name: 'Care Home_5',
                        y: 2,
                        drilldown: 'tnc4',
                        color: '#aa3e98'
                    },
                ]
            }],
            drilldown: {
                id: 'NOK',
                type: 'column',
                name: 'Service User',
                events: {
                    drilldown: function (e) {
                        this.options.legend["enabled"] = true;
                    },
                },


                series: [{
                        id: 'tnc',
                        name: 'No of Fall',
                        data: [{
                                name: 'Omer',
                                y: 5,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Usman',
                                y: 3,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Ali',
                                y: 2,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Daniyal',
                                y: 3,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Sana',
                                y: 7,
                                drilldown: 'NOK',
                            },
                        ]
                    }, {
                        id: 'tnc1',
                        name: 'No of Fall',
                        data: [{
                                name: 'Omer',
                                y: 1,
                                drilldown: 'NOK1',
                            },
                            {
                                name: 'Usman',
                                y: 2,
                                drilldown: 'NOK1',
                            },
                            {
                                name: 'Ali',
                                y: 1,
                                drilldown: 'NOK1',
                            },
                            {
                                name: 'Daniyal',
                                y: 1,
                                drilldown: 'NOK1',
                            },
                            {
                                name: 'Sana',
                                y: 1,
                                drilldown: 'NOK1',
                            },
                        ]
                    }, {
                        id: 'tnc2',
                        name: 'No Of Fall',
                        data: [{
                                name: 'Omer',
                                y: 14,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Usman',
                                y: 10,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Ali',
                                y: 14,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Daniyal',
                                y: 14,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Sana',
                                y: 18,
                                drilldown: 'NOK',
                            },
                        ]
                    }, {
                        id: 'tnc3',
                        data: [{
                                name: 'Omer',
                                y: 2.85,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Usman',
                                y: 5,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Ali',
                                y: 2.85,
                                drilldown: 'NOK',
                            },
                            {
                                name: ' Daniyal',
                                y: 2.85,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Sana',
                                y: 0.45,
                                drilldown: 'NOK',
                            },
                        ]

                    }, {
                        id: 'tnc4',
                        data: [{
                                name: 'Omer',
                                y: 11,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Usman',
                                y: 11.5,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Ali',
                                y: 10.09,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Daniyal',
                                y: 14.09,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Sana',
                                y: 10.46,
                                drilldown: 'NOK',
                            },
                        ]
                    },
                    {
                        id: 'tnc5',
                        data: [{
                                name: 'Omer',
                                y: 14.8,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Usman',
                                y: 10,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Ali',
                                y: 14.8,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Daniyal',
                                y: 12.8,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Sana',
                                y: 21.6,
                                drilldown: 'NOK',
                            },
                        ]
                    },
                    {
                        id: '',
                        name: 'Health Stat Entry of provided Service User w.r.t Selected Date',
                        type: 'bar',

                        data: [{
                                name: '14-12-2020',
                                y: 100,
                                color: '#909497',
                                drilldown: 'NOK'
                            },
                            {
                                name: '15-12-2020',
                                y: 90,
                                color: '#34495E',
                                drilldown: 'NOK'
                            },
                            {
                                name: '16-12-2020',
                                y: 98,
                                color: '#85929E',
                                drilldown: 'NOK'
                            },
                            {
                                name: '17-12-2020',
                                y: 87,
                                color: '#95A5A6',
                                drilldown: 'NOK'
                            },
                            {
                                name: '18-12-2020',
                                y: 95,
                                color: '#BDC3C7',
                                drilldown: 'NOK'
                            },
                            {
                                name: '20-12-2020',
                                y: 97,
                                color: '#ECF0F1',
                                drilldown: 'NOK'
                            },
                        ]
                    },
                ]
            },
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });


        var pieColors = (function () {
            var colors = [],
                base = Highcharts.getOptions().colors[0],
                i;

            for (i = 0; i < 10; i += 1) {
                colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
            }
            return colors;
        }());

        Highcharts.chart('container-careplan', {
            chart: {
                type: 'pie',
                backgroundColor: 'rgb(0,0,0,0)'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y:.f}</b>',
                backgroundColor: 'rgba(0, 0, 0, .7);',
                color: '#000',
            },
            xAxis: {
                type: 'category',
                tickPosition: 'inside',
                tickwidth: 4,
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,

                }
            },
            series: [{
                name: 'Total',
                data: [{
                        name: 'Administrated ',
                        y: 13,
                        color: '#5aa9e6',
                        drilldown: 'tnc',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>[{point.y:.f}]',
                            color: '#fff',
                            shadow: false
                        },
                    },
                    {
                        name: 'Missed Medication',
                        y: 6,
                        color: '#7fc8f8',
                        drilldown: 'tnc1',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>[{point.y:.f}]',
                            color: '#fff',
                            shadow: false
                        },
                    }
                ]
            }],

            drilldown: {
                id: 'tnc',
                type: 'column',
                name: 'Care Homes',
                events: {
                    drilldown: function (e) {
                        this.options.legend["enabled"] = true;
                    },
                },

                series: [{
                        id: 'tnc',
                        name: 'Total',

                    }, {
                        id: 'tnc',
                        name: 'Administrated',


                        data: [{
                                name: 'Care Home_1',
                                y: 4,
                                drilldown: 'NOK1',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                            {
                                name: 'Care Home _2',
                                y: 2,
                                drilldown: 'NOK1',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                            {
                                name: 'Care Home_3',
                                y: 1,
                                drilldown: 'NOK1',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                            {
                                name: 'Care Home_4',
                                y: 4,
                                drilldown: 'NOK1',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                            {
                                name: 'Care home_5',
                                y: 2,
                                drilldown: 'NOK1',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                        ]
                    }, {
                        id: 'tnc1',
                        name: 'Missied Medication',
                        data: [{
                                name: 'Care Home_1',
                                y: 1,
                                drilldown: 'NOK',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                            {
                                name: 'Care Home_2',
                                y: 1,
                                drilldown: 'NOK',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                            {
                                name: 'Care Home_3',
                                y: 1,
                                drilldown: 'NOK',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                            {
                                name: 'Care Home_4',
                                y: 2,
                                drilldown: 'NOK',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                            {
                                name: 'Care Home_5',
                                y: 1,
                                drilldown: 'NOK',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b><br>[{point.y:.f}]',
                                    color: '#fff',
                                    shadow: false
                                },
                            },
                        ]
                    }, {
                        id: '',
                        data: [{
                                name: 'Omer',
                                y: 2.85,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Usman',
                                y: 5,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Ali',
                                y: 2.85,
                                drilldown: 'NOK',
                            },
                            {
                                name: ' Daniyal',
                                y: 2.85,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Sana',
                                y: 0.45,
                                drilldown: 'NOK',
                            },
                        ]
                    }, {
                        id: '',
                        data: [{
                                name: 'Omer',
                                y: 11,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Usman',
                                y: 11.5,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Ali',
                                y: 10.09,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Daniyal',
                                y: 14.09,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Sana',
                                y: 10.46,
                                drilldown: 'NOK',
                            },
                        ]
                    },
                    {
                        id: '',
                        data: [{
                                name: 'Omer',
                                y: 14.8,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Usman',
                                y: 10,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Ali',
                                y: 14.8,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Daniyal',
                                y: 12.8,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Sana',
                                y: 21.6,
                                drilldown: 'NOK',
                            },
                        ]
                    },
                    {
                        id: '',
                        name: 'Health Stat Entry of provided Service User w.r.t Selected Date',
                        type: 'bar',

                        data: [{
                                name: '14-12-2020',
                                y: 100,
                                color: '#909497',
                                drilldown: 'NOK'
                            },
                            {
                                name: '15-12-2020',
                                y: 90,
                                color: '#34495E',
                                drilldown: 'NOK'
                            },
                            {
                                name: '16-12-2020',
                                y: 98,
                                color: '#85929E',
                                drilldown: 'NOK'
                            },
                            {
                                name: '17-12-2020',
                                y: 87,
                                color: '#95A5A6',
                                drilldown: 'NOK'
                            },
                            {
                                name: '18-12-2020',
                                y: 95,
                                color: '#BDC3C7',
                                drilldown: 'NOK'
                            },
                            {
                                name: '20-12-2020',
                                y: 97,
                                color: '#ECF0F1',
                                drilldown: 'NOK'
                            },
                        ]
                    },
                ]
            },
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });


        Highcharts.chart('container', {

            chart: {
                type: 'column',
                backgroundColor: 'rgb(0,0,0,0)'
            },

            title: {
                text: ''
            },

            xAxis: {
                labels: {
                    enabled: true
                },
                title: {
                    text: ''
                },
                type: 'category'
            },



            yAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: ''
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                itemStyle: {
                    color: '#fff',
                    fontWeight: 'bold'
                }
            },

            tooltip: {

                backgroundColor: 'rgba(0, 0, 0, .7);',
                color: '#000',
            },

            series: [{
                name: 'Care Plans',
                drilldown: 'tnc',
                data: [{
                        name: 'Reviewed ',
                        y: 13,
                        color: '#d0e9c6',
                        drilldown: 'tnc',
                        dataLabels: {
                            enabled: false,
                            format: '<b>{point.name}</b><br>[{point.y:.f}]',
                            color: '#fff',
                            shadow: false
                        },
                    },
                    {
                        name: 'Due for Review',
                        y: 6,
                        color: '#f3c89c',
                        drilldown: 'tnc1',
                        dataLabels: {
                            enabled: false,
                            format: '<b>{point.name}</b><br>[{point.y:.f}]',
                            color: '#fff',
                            shadow: false
                        },
                    },
                    {
                        name: 'No Enough Detail',
                        y: 9,
                        color: '#f7ea00',
                        drilldown: 'tnc2',
                        dataLabels: {
                            enabled: false,
                            format: '<b>{point.name}</b><br>[{point.y:.f}]',
                            color: '#fff',
                            shadow: false
                        },
                    }
                ]
            }, ],
            drilldown: {
                type: 'column',
                id: 'tnc',
                series: [{
                        id: 'tnc',
                        name: 'Reviewed',
                        dataLabels: {
                            enabled: false,
                            format: '{point.:.f}[Employees]',
                            distance: 5
                        },
                        data: [{
                                name: 'CARE HOME_1',
                                y: 3,
                                drilldown: 'NOK',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_2',
                                y: 4,
                                drilldown: 'NOK1',
                                color: '#7B241C'
                            },
                            {
                                name: 'CARE HOME_3',
                                y: 2,
                                drilldown: 'NOK2',
                                color: '#7B241C'
                            },
                            {
                                name: 'CARE HOME_4',
                                y: 2,
                                drilldown: 'NOK3',
                                color: '#7B241C'
                            },
                            {
                                name: 'CARE HOME_5',
                                y: 2,
                                drilldown: 'NOK4',
                                color: '#7B241C'
                            }
                        ]
                    }, {
                        id: 'tnc1',
                        name: 'Due for Review',
                        data: [{
                                name: 'CARE HOME_1',
                                y: 2,
                                drilldown: 'NOK5',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_2',
                                y: 1,
                                drilldown: 'NOK6',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_3',
                                y: 1,
                                drilldown: 'NOK7',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_4',
                                y: 1,
                                drilldown: 'NOK8',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_5',
                                y: 1,
                                drilldown: 'NOK9',
                                color: '#641E16'
                            }
                        ],
                    }, {
                        id: 'tnc2',
                        name: 'Not Enough Detail',
                        data: [{
                                name: 'CARE HOME_1',
                                y: 1,
                                drilldown: 'NOK10',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_2',
                                y: 3,
                                drilldown: 'NOK11',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_3',
                                y: 1,
                                drilldown: 'NOK12',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_4',
                                y: 3,
                                drilldown: 'NOK13',
                                color: '#641E16'
                            },
                            {
                                name: 'CARE HOME_5',
                                y: 1,
                                drilldown: 'NOK14',
                                color: '#641E16'
                            },
                        ]
                    }, {
                        id: '',
                        name: 'Depts',
                        data: [{
                                name: 'Maintenance',
                                y: 2,
                                drilldown: 'NOK_4',
                            },
                            {
                                name: 'Deputy Manager',
                                y: 1,
                                drilldown: 'NOK_5',
                            },
                            {
                                name: 'Accounts',
                                y: 1,
                                drilldown: 'NOK_6',
                            },
                        ]
                    }, {
                        id: '',
                        name: 'Dept_s',
                        data: [{
                                name: 'Admistrator',
                                y: 1,
                                drilldown: 'NOK',
                            },
                            {
                                name: 'Team Leader',
                                y: 1,
                                drilldown: 'NOK1',
                            },
                        ]
                    },
                    {
                        id: 'NOK',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                            {
                                name: 'Service User_3',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK1',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                            {
                                name: 'Service User_3',
                                y: 1,
                            },
                            {
                                name: 'Service User_4',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK2',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                           
                        ]
                    },
                    {
                        id: 'NOK3',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                           
                        ]
                    },
                    {
                        id: 'NOK4',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                           
                        ]
                    },
                    {
                        id: 'NOK2',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                           
                        ]
                    },
                    {
                        id: 'NOK5',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                           
                        ]
                    },
                    {
                        id: 'NOK6',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK7',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK8',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK9',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK10',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK11',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                            {
                                name: 'Service User_3',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK12',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK13',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                            {
                                name: 'Service User_2',
                                y: 1,
                            },
                            {
                                name: 'Service User_3',
                                y: 1,
                            },
                        ]
                    },
                    {
                        id: 'NOK14',
                        type: 'bar',
                        name: 'Service User',
                        data: [{
                                name: 'Service User_1',
                                y: 1,
                            },
                        ]
                    },
                ],
            },
        });


        Highcharts.chart('column-2', {
            chart: {
                type: 'column',
                backgroundColor: 'rgb(0,0,0,0)'
            },
            title: {
                text: '',
            },
            tooltip: {
                pointFormat: 'Total: {point.y}',
                backgroundColor: 'rgba(0, 0, 0, .7);',
                color: '#000',
            },

            dataLabels: {
                enabled: true,
                format: '{point.name}'
            },
            yAxis: {
                labels: {
                    enabled: false
                },
                title: '',
            },
            crosshair: {
                color: '#000',
                trigger: 'selection'
            },
            xAxis: {
                type: 'category',
            },

            legend: {
                enabled: false,
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                itemStyle: {
                    color: '#fff',
                    fontWeight: 'bold'
                }
            },

            series: [{
                name: 'Total Trainings',
                dataLabels: {
                    enabled: false,
                    format: '{point.y:.f}[Employees]',
                    distance: 5
                },

                data: [{
                        name: 'Missing Training',
                        y: 6,
                        drilldown: 'tnc',
                        color: '#bad7f2',
                    },
                    {
                        name: 'Expired Training',
                        y: 2,
                        drilldown: 'tnc',
                        color: '#baf2d8'
                    },
                    {
                        name: 'Training due to Expire',
                        y: 4,
                        drilldown: 'tnc',
                        color: '#538d22'
                    },
                    {
                        name: 'Training in Process',
                        y: 8,
                        drilldown: 'tnc',
                        color: '#f2e2ba'
                    },
                ]
            }],
            drilldown: {
                type: 'column',
                series: [{
                        id: 'tnc',
                        name: 'Care Homes',
                        dataLabels: {
                            enabled: false,
                            format: '{point.:.f}[Employees]',
                            distance: 5
                        },
                        data: [{
                                name: 'Care Homes_1',
                                y: 1,
                                drilldown: 'NIK',
                                color: '#641E16'
                            },
                            {
                                name: 'Care Homes_2',
                                y: 1,
                                drilldown: 'NIK1',
                                color: '#7B241C'
                            },
                            {
                                name: 'Care Home_3',
                                y: 1,
                                drilldown: 'NIK2',
                                color: '#7B241C'
                            },
                            {
                                name: 'Care Home_4',
                                y: 1,
                                drilldown: 'NIK3',
                                color: '#7B241C'
                            },
                            {
                                name: 'Care Home_5',
                                y: 1,
                                drilldown: 'NIK4',
                                color: '#7B241C'
                            },
                        ]
                    }, {
                        id: 'NIK1',
                        name: 'Dept_s',
                        data: [{
                                name: 'Registered Nurse',
                                y: 1,
                                drilldown: 'NOK_1',
                            },
                           
                        ],
                    }, {
                        id: 'NIK',
                        name: 'Depts',
                        data: [{
                            name: 'Driver',
                            y: 1,
                            drilldown: 'NOK_3',
                        }, ]
                    }, {
                        id: 'NIK2',
                        name: 'Depts',
                        data: [{
                                name: 'Maintenance',
                                y: 2,
                                drilldown: 'NOK_4',
                            },
                           
                        ]
                    }, {
                        id: 'NIK3',
                        name: 'Dept_s',
                        data: [{
                                name: 'Admistrator',
                                y: 1,
                                drilldown: 'NOK',
                            },
                           
                        ]
                    },
                    {
                        id: 'NIK4',
                        type: 'bar',
                        name: 'Staff_(s)',
                        data: [{
                                name: 'Nurse',
                                y: 1,
                            },
                           
                        ]
                    },
                ],
            },
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });


        Highcharts.chart('bar', {
            chart: {
                type: 'bar',
                backgroundColor: 'rgb(0,0,0,0)'
            },
            title: {
                text: '',
            },

            tooltip: {
                crosshairs: [true, true],
                backgroundColor: 'rgba(0, 0, 0, .7);',
                color: '#000',
            },
            yAxis: {
                labels: {
                    enabled: false
                },
                title: '',
            },
            xAxis: {
                type: 'category',
            },
            legends: {
                enabled: false,
                layout: 'horizantal',
                verticalAlign: 'center'
            },
            series: [{
                name: 'Total',
                data: [{
                    name: 'Outstanding Audits',
                    drilldown: 'tnc',
                    color: '#ffc43d',
                    y: 24,
                }, ]
            }],
            drilldown: {
                type: 'column',
                series: [{

                        id: 'tnc',
                        name: 'Total Audits',
                        data: [{
                                name: 'Care Home_1',
                                y: 6,
                                id: 'tnc',
                                color: '#1B4F72',
                            },
                            {
                                name: 'Care Home_2',
                                y: 2,
                                id: 'tnc',
                                color: '#1B4F72',
                            },
                            {
                                name: 'Care Home_3',
                                y: 4,
                                id: 'tnc',
                                color: '#1B4F72',
                            },
                            {
                                name: 'Care Home_4',
                                y: 3,
                                id: 'tnc',
                                color: '#1B4F72',
                            },
                            {
                                name: 'Care Home_5',
                                y: 9,
                                id: 'tnc',
                                color: '#1B4F72',
                            },
                        ]
                    },
                    {

                        id: '',
                        name: 'Date',
                        borderWidth: 25,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name:.f}:{point.y:.f}%:',
                        },
                        data: [{
                                name: '(QR)',
                                y: 85,
                                id: 'tnc',
                                lable: 'With QR',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }

                            },
                            {
                                name: '(QR)',
                                y: 15,
                                id: 'tnc',
                                lable: 'Without QR',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 75,
                                id: 'tnc',
                                lable: '2 Hours',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 25,
                                id: 'tnc',
                                lable: '1.5Hours',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 92,
                                id: 'tnc',
                                lable: 'Sleep',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 8,
                                id: 'tnc',
                                lable: 'Awake',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },

                        ]

                    },
                    {
                        id: '',
                        name: 'Date',
                        borderWidth: 25,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name:.f}:{point.y:.f}%:',
                        },
                        data: [{
                                name: '(QR)',
                                y: 8,
                                id: 'tnc2',
                                lable: 'With QR',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }

                            },
                            {
                                name: '(QR)',
                                y: 2,
                                id: 'tnc2',
                                lable: 'Without QR',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 4,
                                id: 'tnc',
                                lable: '2 Hours',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 3,
                                id: 'tnc2',
                                lable: '1.5 Hours',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 2,
                                id: 'tnc',
                                lable: 'Sleep',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 1,
                                id: 'tnc',
                                lable: 'Awake',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },

                        ]

                    },
                    {
                        id: '',
                        name: 'Date',
                        borderWidth: 25,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name:.f}:{point.y:.f}%:',
                        },
                        data: [{
                                name: '(QR)',
                                y: 8,
                                id: 'tnc',
                                lable: 'With QR',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }

                            },
                            {
                                name: '(QR)',
                                y: 2,
                                id: 'tnc',
                                lable: 'Without QR',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 6,
                                id: 'tnc',
                                lable: '2 Hours',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 4,
                                id: 'tnc',
                                lable: '1.5 Hours',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 7,
                                id: 'tnc',
                                lable: 'Sleep',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 3,
                                id: 'tnc',
                                lable: 'Awake',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },

                        ]

                    },
                    {
                        id: '',
                        name: 'Date',
                        borderWidth: 25,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name:.f}:{point.y:.f}%:',
                        },
                        data: [{
                                name: '(QR)',
                                y: 3,
                                id: 'tnc',
                                lable: 'With QR',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }

                            },
                            {
                                name: '(QR)',
                                y: 1,
                                id: 'tnc',
                                lable: 'Without QR',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 2.29,
                                id: 'tnc',
                                lable: '2 Hours',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 2,
                                id: 'tnc',
                                lable: '1.5 Hours',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 3,
                                id: 'tnc',
                                lable: 'Sleep',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 1,
                                id: 'tnc',
                                lable: 'Awake',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },

                        ]

                    },
                    {
                        id: '',
                        name: 'Date',
                        borderWidth: 25,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name:.f}:{point.y:.f}%:',
                        },
                        data: [{
                                name: '(QR)',
                                y: 15.04,
                                id: 'tnc2',
                                lable: 'With QR',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }

                            },
                            {
                                name: '(QR)',
                                y: 3.95,
                                id: 'tnc2',
                                lable: 'Without QR',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 10.,
                                id: 'tnc',
                                lable: '2 Hours',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 9.04,
                                id: 'tnc2',
                                lable: '1.5 Hours',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 16,
                                id: 'tnc',
                                lable: 'Sleep',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 3.04,
                                id: 'tnc',
                                lable: 'Awake',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },

                        ]

                    },
                    {
                        id: '',
                        name: 'Date',
                        borderWidth: 25,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name:.f}:{point.y:.f}%:',
                        },
                        data: [{
                                name: '(QR)',
                                y: 3,
                                id: 'tnc2',
                                lable: 'With QR',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }

                            },
                            {
                                name: '(QR)',
                                y: 1,
                                id: 'tnc2',
                                lable: 'Without QR',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 2.29,
                                id: 'tnc',
                                lable: '2 Hours',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Gaps With Checks)',
                                y: 2,
                                id: 'tnc2',
                                lable: '1.5 Hours',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 2,
                                id: 'tnc',
                                lable: 'Sleep',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:'
                                }
                            },
                            {
                                name: '(Asleep/Awake)',
                                y: 1,
                                id: 'tnc',
                                lable: 'Awake',
                                color: '#CACFD2',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.lable:.f}:{point.y:.f}%:',
                                },
                            },

                        ]

                    },
                ]
            },
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'vertical',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        })
    </script>
</body>

</html>