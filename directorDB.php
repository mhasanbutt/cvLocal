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

        #comparisontab .scroll-wrapper {
            bottom: 15px;
            width: auto;
            right: 20px;
            left: 20px;
            top: 170px;
        }

        #andiReporttab .scroll-wrapper {
            top: 120px;
            width: auto;
            left: 15px;
            right: 15px;
            bottom: 10px;
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
            <div class="scrollArea">
                <ul class="list-unstyled tabs">
                    <li id="overview"><a href="#">Overview</a></li>
                    <li id="graphs"><a href="#">Analysis</a></li>
                    <li id="graphs"><a href="#">Chef Menu</a></li>
                    <li id="graphs"><a href="#">Policies &amp; Procedures</a></li>
                    <li id="graphs"><a href="#">Audit Builder</a></li>
                    <li class="active" id="assetReq"><a href="#">Asset Requests</a></li>
                    <li id="comparison"><a href="#">Comparison</a></li>
                    <li id="folderStructure"><a href="#">Folder Structure</a></li>
                    <li id="andiReport"><a href="#">A &amp; I Report</a></li>
                </ul>
            </div>
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

        <section id="andiReporttab">
            <form>
                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" class="date">
                            </div>
                            <div class="col-md-4 text-right">
                                <button>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="scrollArea">
                <div class="content clearfix" style="padding-right:20px;">
                    <div class="andireport" id="appendReportDataHere" style="width: 100%;">
                        <aside class="occurance">
                            <ul class="list-unstyled">
                                <li>Date</li>
                                <li>Nursing: General</li>
                                <li>Nursing: EMI</li>
                                <li>Residential: General</li>
                                <li>Residential: EMI</li>
                                <li>Other</li>
                                <li>Time: 0800 – 1400</li>
                                <li>Time: 1400 – 2000</li>
                                <li>Time: 2000 – 0800</li>
                                <li>Witnessed</li>
                                <li>Un witnessed</li>
                                <li>Fall from Bed</li>
                                <li>Fall From above 2m</li>
                                <li>Fall from standing</li>
                                <li>Fall from Chair</li>
                                <li>Fall from Stairs</li>
                                <li>Unexplained Injury</li>
                                <li>No Injury</li>
                                <li>Bruising</li>
                                <li>Pressure Ulcer</li>
                                <li>Redness</li>
                                <li>Verbally Challenging</li>
                                <li>Physically Challenging</li>
                                <li>Absconding</li>
                                <li>Leaving without support</li>
                                <li>Environmental</li>
                                <li>Near Miss</li>
                                <li>Self-injurious</li>
                                <li>Minor Injury</li>
                                <li>Major Injury</li>
                                <li>Admitted to Hospital</li>
                                <li>Follow-up</li>
                                <li>Statutory Notification</li>
                                <li>RIDDOR</li>
                                <li>SOVA</li>
                                <li>24 Hour observations carried out</li>
                                <li>Mild Severity</li>
                                <li>Moderate Severity</li>
                                <li>Severe Severity</li>
                                <li>Safe Hold</li>
                                <li>Staff Involved</li>
                                <li>Visitors Involved</li>
                                <li>Medication Error</li>
                            </ul>
                        </aside>
                        <section class="dates">
                            <style>
                                .andireport .dates ul {width: calc(100% / 5);}
                            </style>
                            <ul class="list-unstyled">
                                <li class="data"><span>3-3 Leander Lodge</span></li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Nursing: General" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:29) 07-09-2023&quot;,&quot;time&quot;:&quot;10:29&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(13:18) 08-09-2023&quot;,&quot;time&quot;:&quot;13:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(09:35) 18-09-2023&quot;,&quot;time&quot;:&quot;09:35&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;18\/9&quot;,&quot;date_added&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:55) 18-09-2023&quot;,&quot;time&quot;:&quot;11:55&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;kk&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:21) 18-09-2023&quot;,&quot;time&quot;:&quot;12:21&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Hospital&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;Yes&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;\\&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:25) 18-09-2023&quot;,&quot;time&quot;:&quot;12:25&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;1,6993&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:14) 19-09-2023&quot;,&quot;time&quot;:&quot;10:14&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Transport&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:18) 19-09-2023&quot;,&quot;time&quot;:&quot;10:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:17) 20-09-2023&quot;,&quot;time&quot;:&quot;12:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(14:06) 20-09-2023&quot;,&quot;time&quot;:&quot;14:06&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:53) 21-09-2023&quot;,&quot;time&quot;:&quot;10:53&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:05) 21-09-2023&quot;,&quot;time&quot;:&quot;11:05&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:&quot;No&quot;,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;No&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;a&quot;,&quot;date_added&quot;:&quot;2023-09-21 11:04:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 11:05:00&quot;,&quot;incidentType&quot;:&quot;&quot;,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:0}]
                                    ">
                        12
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Residential: General" data-details="[{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(12:34) 08-09-2023&quot;,&quot;time&quot;:&quot;12:34&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Corridor&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;w rsertwerter ter y trtyu trutyiu tuiutity&quot;,&quot;date_added&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(08:41) 13-09-2023&quot;,&quot;time&quot;:&quot;08:41&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;test&quot;,&quot;date_added&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;Minor Injury&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(15:45) 20-09-2023&quot;,&quot;time&quot;:&quot;15:45&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null}]
                                    ">
                        3
                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Residential: EMI" data-details="[{&quot;residentName&quot;:&quot;Mr REYNARD  PADDON&quot;,&quot;dateAdded&quot;:&quot;(15:17) 14-09-2023&quot;,&quot;time&quot;:&quot;15:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-15 15:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6093,&quot;dateOccurred&quot;:&quot;2023-09-14 15:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(11:50) 18-09-2023&quot;,&quot;time&quot;:&quot;11:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:50) 18-09-2023&quot;,&quot;time&quot;:&quot;12:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:56) 18-09-2023&quot;,&quot;time&quot;:&quot;12:56&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:13) 18-09-2023&quot;,&quot;time&quot;:&quot;13:13&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:36) 18-09-2023&quot;,&quot;time&quot;:&quot;13:36&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:42) 18-09-2023&quot;,&quot;time&quot;:&quot;13:42&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Toilet&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null}]
                                    ">
                        22
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Witnessed" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:29) 07-09-2023&quot;,&quot;time&quot;:&quot;10:29&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(12:34) 08-09-2023&quot;,&quot;time&quot;:&quot;12:34&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Corridor&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;w rsertwerter ter y trtyu trutyiu tuiutity&quot;,&quot;date_added&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(13:18) 08-09-2023&quot;,&quot;time&quot;:&quot;13:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(08:41) 13-09-2023&quot;,&quot;time&quot;:&quot;08:41&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;test&quot;,&quot;date_added&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;Minor Injury&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr REYNARD  PADDON&quot;,&quot;dateAdded&quot;:&quot;(15:17) 14-09-2023&quot;,&quot;time&quot;:&quot;15:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-15 15:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6093,&quot;dateOccurred&quot;:&quot;2023-09-14 15:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(09:35) 18-09-2023&quot;,&quot;time&quot;:&quot;09:35&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;18\/9&quot;,&quot;date_added&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(11:50) 18-09-2023&quot;,&quot;time&quot;:&quot;11:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:55) 18-09-2023&quot;,&quot;time&quot;:&quot;11:55&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;kk&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:21) 18-09-2023&quot;,&quot;time&quot;:&quot;12:21&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Hospital&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;Yes&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;\\&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:25) 18-09-2023&quot;,&quot;time&quot;:&quot;12:25&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;1,6993&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:50) 18-09-2023&quot;,&quot;time&quot;:&quot;12:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:56) 18-09-2023&quot;,&quot;time&quot;:&quot;12:56&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:13) 18-09-2023&quot;,&quot;time&quot;:&quot;13:13&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:36) 18-09-2023&quot;,&quot;time&quot;:&quot;13:36&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:42) 18-09-2023&quot;,&quot;time&quot;:&quot;13:42&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Toilet&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:14) 19-09-2023&quot;,&quot;time&quot;:&quot;10:14&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Transport&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:18) 19-09-2023&quot;,&quot;time&quot;:&quot;10:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:17) 20-09-2023&quot;,&quot;time&quot;:&quot;12:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(14:06) 20-09-2023&quot;,&quot;time&quot;:&quot;14:06&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(15:45) 20-09-2023&quot;,&quot;time&quot;:&quot;15:45&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:53) 21-09-2023&quot;,&quot;time&quot;:&quot;10:53&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:05) 21-09-2023&quot;,&quot;time&quot;:&quot;11:05&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:&quot;No&quot;,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;No&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;a&quot;,&quot;date_added&quot;:&quot;2023-09-21 11:04:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 11:05:00&quot;,&quot;incidentType&quot;:&quot;&quot;,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:0}]
                                    ">
                        37
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Fall from Bed" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:29) 07-09-2023&quot;,&quot;time&quot;:&quot;10:29&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr REYNARD  PADDON&quot;,&quot;dateAdded&quot;:&quot;(15:17) 14-09-2023&quot;,&quot;time&quot;:&quot;15:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-15 15:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6093,&quot;dateOccurred&quot;:&quot;2023-09-14 15:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:50) 18-09-2023&quot;,&quot;time&quot;:&quot;12:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:56) 18-09-2023&quot;,&quot;time&quot;:&quot;12:56&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null}]
                                    ">
                        4
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="No Injury" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:29) 07-09-2023&quot;,&quot;time&quot;:&quot;10:29&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(12:34) 08-09-2023&quot;,&quot;time&quot;:&quot;12:34&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Corridor&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;w rsertwerter ter y trtyu trutyiu tuiutity&quot;,&quot;date_added&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(13:18) 08-09-2023&quot;,&quot;time&quot;:&quot;13:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(08:41) 13-09-2023&quot;,&quot;time&quot;:&quot;08:41&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;test&quot;,&quot;date_added&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;Minor Injury&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr REYNARD  PADDON&quot;,&quot;dateAdded&quot;:&quot;(15:17) 14-09-2023&quot;,&quot;time&quot;:&quot;15:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-15 15:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6093,&quot;dateOccurred&quot;:&quot;2023-09-14 15:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(09:35) 18-09-2023&quot;,&quot;time&quot;:&quot;09:35&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;18\/9&quot;,&quot;date_added&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(11:50) 18-09-2023&quot;,&quot;time&quot;:&quot;11:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:55) 18-09-2023&quot;,&quot;time&quot;:&quot;11:55&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;kk&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:21) 18-09-2023&quot;,&quot;time&quot;:&quot;12:21&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Hospital&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;Yes&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;\\&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:25) 18-09-2023&quot;,&quot;time&quot;:&quot;12:25&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;1,6993&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:50) 18-09-2023&quot;,&quot;time&quot;:&quot;12:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:56) 18-09-2023&quot;,&quot;time&quot;:&quot;12:56&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:13) 18-09-2023&quot;,&quot;time&quot;:&quot;13:13&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:36) 18-09-2023&quot;,&quot;time&quot;:&quot;13:36&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:42) 18-09-2023&quot;,&quot;time&quot;:&quot;13:42&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Toilet&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:14) 19-09-2023&quot;,&quot;time&quot;:&quot;10:14&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Transport&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:18) 19-09-2023&quot;,&quot;time&quot;:&quot;10:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:17) 20-09-2023&quot;,&quot;time&quot;:&quot;12:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(14:06) 20-09-2023&quot;,&quot;time&quot;:&quot;14:06&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(15:45) 20-09-2023&quot;,&quot;time&quot;:&quot;15:45&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:53) 21-09-2023&quot;,&quot;time&quot;:&quot;10:53&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:05) 21-09-2023&quot;,&quot;time&quot;:&quot;11:05&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:&quot;No&quot;,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;No&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;a&quot;,&quot;date_added&quot;:&quot;2023-09-21 11:04:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 11:05:00&quot;,&quot;incidentType&quot;:&quot;&quot;,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:0}]
                                    ">
                        37
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Near Miss" data-details="[{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(12:34) 08-09-2023&quot;,&quot;time&quot;:&quot;12:34&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Corridor&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;w rsertwerter ter y trtyu trutyiu tuiutity&quot;,&quot;date_added&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(13:18) 08-09-2023&quot;,&quot;time&quot;:&quot;13:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(08:41) 13-09-2023&quot;,&quot;time&quot;:&quot;08:41&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;test&quot;,&quot;date_added&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;Minor Injury&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(09:35) 18-09-2023&quot;,&quot;time&quot;:&quot;09:35&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;18\/9&quot;,&quot;date_added&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(11:50) 18-09-2023&quot;,&quot;time&quot;:&quot;11:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:13) 18-09-2023&quot;,&quot;time&quot;:&quot;13:13&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:36) 18-09-2023&quot;,&quot;time&quot;:&quot;13:36&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:42) 18-09-2023&quot;,&quot;time&quot;:&quot;13:42&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Toilet&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(15:45) 20-09-2023&quot;,&quot;time&quot;:&quot;15:45&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:53) 21-09-2023&quot;,&quot;time&quot;:&quot;10:53&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:05) 21-09-2023&quot;,&quot;time&quot;:&quot;11:05&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:&quot;No&quot;,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;No&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;a&quot;,&quot;date_added&quot;:&quot;2023-09-21 11:04:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 11:05:00&quot;,&quot;incidentType&quot;:&quot;&quot;,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:0}]
                                    ">
                        18
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Minor Injury" data-details="[{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(08:41) 13-09-2023&quot;,&quot;time&quot;:&quot;08:41&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;test&quot;,&quot;date_added&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;Minor Injury&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null}]
                                    ">
                        1
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Follow-up" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:29) 07-09-2023&quot;,&quot;time&quot;:&quot;10:29&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(11:50) 18-09-2023&quot;,&quot;time&quot;:&quot;11:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:56) 18-09-2023&quot;,&quot;time&quot;:&quot;12:56&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:13) 18-09-2023&quot;,&quot;time&quot;:&quot;13:13&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(15:45) 20-09-2023&quot;,&quot;time&quot;:&quot;15:45&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-20 15:45:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:05) 21-09-2023&quot;,&quot;time&quot;:&quot;11:05&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:&quot;No&quot;,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;No&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;a&quot;,&quot;date_added&quot;:&quot;2023-09-21 11:04:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 11:05:00&quot;,&quot;incidentType&quot;:&quot;&quot;,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:0}]
                                    ">
                        10
                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Statutory Notification" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:21) 18-09-2023&quot;,&quot;time&quot;:&quot;12:21&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Hospital&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;Yes&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;\\&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null}]
                                    ">
                        1
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="SOVA" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:29) 07-09-2023&quot;,&quot;time&quot;:&quot;10:29&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-07 10:29:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(12:34) 08-09-2023&quot;,&quot;time&quot;:&quot;12:34&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Corridor&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;w rsertwerter ter y trtyu trutyiu tuiutity&quot;,&quot;date_added&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-08 12:34:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(13:18) 08-09-2023&quot;,&quot;time&quot;:&quot;13:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-08 13:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;dateAdded&quot;:&quot;(08:41) 13-09-2023&quot;,&quot;time&quot;:&quot;08:41&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;test&quot;,&quot;date_added&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;Minor Injury&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentID&quot;:5849,&quot;dateOccurred&quot;:&quot;2023-09-13 08:41:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:null,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(09:35) 18-09-2023&quot;,&quot;time&quot;:&quot;09:35&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;18\/9&quot;,&quot;date_added&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:55) 18-09-2023&quot;,&quot;time&quot;:&quot;11:55&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;kk&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:21) 18-09-2023&quot;,&quot;time&quot;:&quot;12:21&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Hospital&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;Yes&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;\\&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:25) 18-09-2023&quot;,&quot;time&quot;:&quot;12:25&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;1,6993&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:14) 19-09-2023&quot;,&quot;time&quot;:&quot;10:14&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Transport&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:18) 19-09-2023&quot;,&quot;time&quot;:&quot;10:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:17) 20-09-2023&quot;,&quot;time&quot;:&quot;12:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(14:06) 20-09-2023&quot;,&quot;time&quot;:&quot;14:06&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:53) 21-09-2023&quot;,&quot;time&quot;:&quot;10:53&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:05) 21-09-2023&quot;,&quot;time&quot;:&quot;11:05&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:&quot;No&quot;,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;No&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;a&quot;,&quot;date_added&quot;:&quot;2023-09-21 11:04:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 11:05:00&quot;,&quot;incidentType&quot;:&quot;&quot;,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:0}]
                                    ">
                        14
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Mild Severity" data-details="[{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:50) 18-09-2023&quot;,&quot;time&quot;:&quot;12:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:05) 21-09-2023&quot;,&quot;time&quot;:&quot;11:05&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:&quot;No&quot;,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;No&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;a&quot;,&quot;date_added&quot;:&quot;2023-09-21 11:04:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 11:05:00&quot;,&quot;incidentType&quot;:&quot;&quot;,&quot;severity&quot;:&quot;Mild&quot;,&quot;proact_scipr&quot;:0}]
                                    ">
                        2
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Severe Severity" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(09:35) 18-09-2023&quot;,&quot;time&quot;:&quot;09:35&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;18\/9&quot;,&quot;date_added&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 09:35:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(11:50) 18-09-2023&quot;,&quot;time&quot;:&quot;11:50&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Service User's Bedroom&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 11:50:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(11:55) 18-09-2023&quot;,&quot;time&quot;:&quot;11:55&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;kk&quot;,&quot;date_added&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 11:55:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:21) 18-09-2023&quot;,&quot;time&quot;:&quot;12:21&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Hospital&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:&quot;Yes&quot;,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;\\&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:21:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:25) 18-09-2023&quot;,&quot;time&quot;:&quot;12:25&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;1,6993&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(12:56) 18-09-2023&quot;,&quot;time&quot;:&quot;12:56&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Fall&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;Fall from bed&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 12:56:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:02) 18-09-2023&quot;,&quot;time&quot;:&quot;13:02&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:02:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:13) 18-09-2023&quot;,&quot;time&quot;:&quot;13:13&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Office&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:13:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;Yes&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:20) 18-09-2023&quot;,&quot;time&quot;:&quot;13:20&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Lift&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:20:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:36) 18-09-2023&quot;,&quot;time&quot;:&quot;13:36&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:36:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:42) 18-09-2023&quot;,&quot;time&quot;:&quot;13:42&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Toilet&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:42:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;dateAdded&quot;:&quot;(13:52) 18-09-2023&quot;,&quot;time&quot;:&quot;13:52&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;No&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentID&quot;:6094,&quot;dateOccurred&quot;:&quot;2023-09-18 13:52:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:14) 19-09-2023&quot;,&quot;time&quot;:&quot;10:14&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Transport&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:14:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:18) 19-09-2023&quot;,&quot;time&quot;:&quot;10:18&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-19 10:18:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:17) 20-09-2023&quot;,&quot;time&quot;:&quot;12:17&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 12:17:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(14:06) 20-09-2023&quot;,&quot;time&quot;:&quot;14:06&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Cut&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-20 14:06:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null},{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(10:53) 21-09-2023&quot;,&quot;time&quot;:&quot;10:53&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Accident&quot;,&quot;location&quot;:&quot;Dining Area&quot;,&quot;typeOccurred&quot;:&quot;Near Miss&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:null,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-21 10:53:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null}]
                                    ">
                        29
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Staff Involved" data-details="[{&quot;residentName&quot;:&quot;Other Fatima Hussain Butt&quot;,&quot;dateAdded&quot;:&quot;(12:25) 18-09-2023&quot;,&quot;time&quot;:&quot;12:25&quot;,&quot;homeID&quot;:3,&quot;accidentIncidentType&quot;:&quot;Incident&quot;,&quot;location&quot;:&quot;Bathroom&quot;,&quot;typeOccurred&quot;:&quot;Abrasion&quot;,&quot;associatedType&quot;:null,&quot;action_text&quot;:&quot;No&quot;,&quot;riddor&quot;:null,&quot;safeguarding&quot;:&quot;Yes&quot;,&quot;cqc&quot;:null,&quot;admittedHospital&quot;:&quot;No&quot;,&quot;description&quot;:&quot;&quot;,&quot;date_added&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;other&quot;:&quot;&quot;,&quot;typeoffall&quot;:&quot;&quot;,&quot;typeofinjury&quot;:&quot;&quot;,&quot;unexplainedinjury&quot;:0,&quot;addCareRoutine&quot;:0,&quot;staffuser&quot;:&quot;1,6993&quot;,&quot;visitorinvolved&quot;:&quot;&quot;,&quot;fallWitness&quot;:1,&quot;associatedWound&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential Nursing&quot;,&quot;residentID&quot;:5907,&quot;dateOccurred&quot;:&quot;2023-09-18 12:25:00&quot;,&quot;incidentType&quot;:null,&quot;severity&quot;:&quot;Severe&quot;,&quot;proact_scipr&quot;:null}]
                                    ">
                        1
                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                    <span class="renderPopup" data-toggle="modal" data-target="#showPop" data-statisticname="Medication Error" data-details="[{&quot;residentID&quot;:6094,&quot;homeID&quot;:3,&quot;companyID&quot;:3,&quot;residentPercentage&quot;:63,&quot;residentNumber&quot;:&quot;95&quot;,&quot;residentHouseNumber&quot;:null,&quot;residentName&quot;:&quot;Mr Austin  3:16&quot;,&quot;residentMiddleName&quot;:&quot;&quot;,&quot;residentLastName&quot;:&quot;3:16&quot;,&quot;residentFloorID&quot;:1,&quot;groupAllocation&quot;:0,&quot;residentAge&quot;:56,&quot;residentTitle&quot;:&quot;Mr&quot;,&quot;residentKnownAs&quot;:&quot;Stone Cold&quot;,&quot;residentDateOfAdmission&quot;:&quot;1970-01-01 00:00:00&quot;,&quot;residentDateOfBirth&quot;:&quot;1967-01-01&quot;,&quot;residentMartialStatus&quot;:&quot;Married&quot;,&quot;residentGender&quot;:&quot;Male&quot;,&quot;residentEthnicOrigin&quot;:&quot;Select&quot;,&quot;residentReligion&quot;:&quot;Select&quot;,&quot;residentHeight&quot;:150,&quot;residentHeightUnit&quot;:&quot;cm&quot;,&quot;residentulnalength&quot;:null,&quot;residentWeight&quot;:50,&quot;residentWeightUnit&quot;:&quot;kg&quot;,&quot;bmiChangePercentage&quot;:22.199999999999999289457264239899814128875732421875,&quot;residentRoom&quot;:&quot;7199&quot;,&quot;residentNI&quot;:&quot;&quot;,&quot;residentNhsNumber&quot;:&quot;&quot;,&quot;residentAddress2&quot;:&quot;&quot;,&quot;residentAddress3&quot;:&quot;&quot;,&quot;residentAddress4&quot;:&quot;&quot;,&quot;residentAddress5&quot;:&quot;&quot;,&quot;residentEmail&quot;:&quot;&quot;,&quot;nhsVerification&quot;:null,&quot;nameOfCCG&quot;:&quot;&quot;,&quot;residentResidencyType&quot;:&quot;&quot;,&quot;residentPatientType&quot;:null,&quot;residentStatus&quot;:&quot;Resident&quot;,&quot;residentImage&quot;:&quot;\/getattachmentdata?path=UHJvZmlsZUltYWdlcy9yZXNpZGVudF82MDk0XzE2OTQxNzQ5NTIucG5n&quot;,&quot;residentAddressStreet&quot;:null,&quot;residentAddressCity&quot;:null,&quot;residentAddressCounty&quot;:null,&quot;residentAddressPostalCode&quot;:null,&quot;residentAddressCountry&quot;:null,&quot;residentDols&quot;:null,&quot;residentDnar&quot;:null,&quot;residentEndofService&quot;:null,&quot;addedFrom&quot;:&quot;web&quot;,&quot;created_at&quot;:null,&quot;updated_at&quot;:null,&quot;updated_by&quot;:null,&quot;deleted_by&quot;:null,&quot;created_by&quot;:&quot;1&quot;,&quot;residentMedicationCycle&quot;:null,&quot;residentEthnicOriginOther&quot;:&quot;&quot;,&quot;residentReligionOther&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;&quot;,&quot;residentPlacementCategoryOther&quot;:&quot;&quot;,&quot;careProvided&quot;:&quot;&quot;,&quot;residentFunding&quot;:&quot;&quot;,&quot;residentFundingOther&quot;:&quot;&quot;,&quot;fundingAuthorityName&quot;:&quot;&quot;,&quot;fundingAuthorityPhone&quot;:&quot;&quot;,&quot;fundingAuthorityMobile&quot;:&quot;&quot;,&quot;fundingAuthorityEmail&quot;:&quot;&quot;,&quot;fundingAuthorityContact&quot;:&quot;&quot;,&quot;dateOfLeaving&quot;:null,&quot;dateOfDeath&quot;:null,&quot;updateSummary&quot;:0,&quot;gpName&quot;:&quot;&quot;,&quot;gpAddress&quot;:&quot;&quot;,&quot;gpPhone&quot;:&quot;&quot;,&quot;gpFax&quot;:&quot;&quot;,&quot;gpEmail&quot;:&quot;&quot;,&quot;gpSurgery&quot;:&quot;&quot;,&quot;gpPostCode&quot;:&quot;&quot;,&quot;residentTitleOther&quot;:&quot;&quot;,&quot;residentGenderOther&quot;:&quot;&quot;,&quot;residentFluidTargeted&quot;:500,&quot;residentNoFluidTargeted&quot;:1,&quot;ResidentFluidRestriction&quot;:0,&quot;relish_uuid&quot;:null,&quot;reason_for_admission&quot;:null,&quot;testd&quot;:null,&quot;residentDiabetic&quot;:0,&quot;residentDiabetesType&quot;:&quot;&quot;,&quot;residentMobilityLevel&quot;:&quot;&quot;,&quot;residentMobilityAids&quot;:&quot;&quot;,&quot;residentQrCode&quot;:&quot;\/getattachmentdata?path=UmVzaWRlbnRRUkNvZGVzL1Jlc2lkZW50XzYwOTQucG5n&quot;,&quot;QRCodeRegeneratedAt&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;freezeReasonOther&quot;:null,&quot;isReadmit&quot;:0,&quot;isContract&quot;:&quot;No&quot;,&quot;keyWorkers&quot;:&quot;&quot;,&quot;news_score&quot;:0,&quot;is_news_three&quot;:0,&quot;requireHandoverNotes&quot;:0,&quot;testServiceUser&quot;:0,&quot;supportRequired&quot;:null,&quot;periodStartObservation&quot;:null,&quot;periodEndObservation&quot;:null,&quot;isWarning&quot;:1,&quot;fluidWarningMessage&quot;:&quot;Fluid target has been set at 500 ml. Since 10 AM Austin has only consumed 0 ml. You can go to Service User dashboard to offer fluid or Press dismiss to remove the warning.&quot;,&quot;dismissBy&quot;:null,&quot;pastoral_priority_level&quot;:null,&quot;bowelMovementsMonitoringRequired&quot;:1,&quot;med_e_care_id&quot;:null,&quot;pain_check_id&quot;:null,&quot;catheter_placement&quot;:null,&quot;catheter_type&quot;:null,&quot;catheter_size&quot;:null,&quot;catheter_size_other&quot;:null,&quot;turning_chart_required&quot;:1,&quot;food_chart_required&quot;:1,&quot;hygieneMonitoringRequired&quot;:1,&quot;profile_image_update_date&quot;:&quot;2023-09-08 13:09:12&quot;,&quot;enteralFeedingDevice&quot;:null,&quot;enteralFeedingCloseTime&quot;:null,&quot;enteralFeedingRegime&quot;:1,&quot;enteralInfusion&quot;:125,&quot;viewingDate&quot;:null,&quot;viewingNotes&quot;:null,&quot;additonalNotes&quot;:null,&quot;currentlyIn&quot;:null,&quot;currentlyInOther&quot;:null,&quot;residencyTypeOther&quot;:null,&quot;martialStatusOther&quot;:null,&quot;matressSizeTo&quot;:null,&quot;matressSizeFrom&quot;:null,&quot;matressSize&quot;:null,&quot;temperatureMonitoringRequired&quot;:1,&quot;oralMonitoringRequired&quot;:1,&quot;isSplintingToleranceChartRequired&quot;:0,&quot;residentSplintingTolerance&quot;:null,&quot;isStittingToleranceChartRequired&quot;:0,&quot;residentSittingTolerence&quot;:null,&quot;residentSittingTolerance&quot;:null,&quot;rod_date&quot;:null,&quot;unfreezeDate&quot;:null,&quot;bmiReporting&quot;:1,&quot;admittedFrom&quot;:&quot;&quot;,&quot;admittedFromOther&quot;:&quot;&quot;,&quot;api_token&quot;:null,&quot;dailynotesAlert&quot;:1,&quot;lastDailyNotesDatetime&quot;:null,&quot;residentOFDayAlert&quot;:0,&quot;postFallObservationAlert&quot;:0,&quot;bowelMomentAlert&quot;:1,&quot;serviceuserAlert&quot;:null,&quot;is_missingAddress&quot;:0,&quot;missing_home&quot;:&quot;&quot;,&quot;missing_address&quot;:&quot;Test_ address_1&quot;,&quot;missing_postcode&quot;:&quot;&quot;,&quot;missing_telephone&quot;:&quot;111-000-111_1&quot;,&quot;has_equipment&quot;:0,&quot;weight_monitoring&quot;:1,&quot;equipment_weight&quot;:null,&quot;proteinTarget&quot;:null,&quot;vitaminCTarget&quot;:null,&quot;id&quot;:null,&quot;description&quot;:&quot;test&quot;,&quot;error_type&quot;:&quot;Missing Signature&quot;,&quot;error_type_other&quot;:&quot;&quot;,&quot;error_stage&quot;:&quot;Dispensing&quot;,&quot;medication_detail&quot;:&quot;CALCIMAX syrup 0.125mg \/ 5ml\/0.125mg \/ 5ml\/0.125mg \/ 5ml\/0.5mg \/ 5ml 150ml&quot;,&quot;evidence1&quot;:null,&quot;evidence2&quot;:null,&quot;emergency_contacted&quot;:&quot;&quot;,&quot;advice_given&quot;:&quot;&quot;,&quot;error_caused&quot;:&quot;test&quot;,&quot;future_prevention&quot;:&quot;&quot;,&quot;reported_to&quot;:&quot;&quot;,&quot;error_impact&quot;:&quot;&quot;,&quot;treatment&quot;:&quot;&quot;,&quot;reportable_to_health&quot;:&quot;&quot;,&quot;reportable_to_regulatory&quot;:&quot;NULL&quot;,&quot;candour_required&quot;:&quot;&quot;,&quot;internal_investigation&quot;:&quot;&quot;,&quot;reportable_to_LocalAuthority&quot;:&quot;&quot;,&quot;result_actions&quot;:&quot;&quot;,&quot;document1&quot;:null,&quot;document2&quot;:null,&quot;learning_outcomes&quot;:&quot;NULL&quot;,&quot;incident_status&quot;:&quot;&quot;,&quot;daily_note&quot;:&quot;&quot;,&quot;addedBy&quot;:1,&quot;dateAdded&quot;:&quot;2023-09-08 14:33:38&quot;,&quot;lessonlearned&quot;:null,&quot;managerfollowup&quot;:0,&quot;managerfollowup_action&quot;:null,&quot;signoff&quot;:null,&quot;signoffBy&quot;:null,&quot;lastUpdatedBy&quot;:null,&quot;resident_id&quot;:null,&quot;action_text&quot;:null,&quot;home_id&quot;:null,&quot;action_taken_text&quot;:null,&quot;allocateTo&quot;:null,&quot;module&quot;:null,&quot;moduleID&quot;:null,&quot;overdue_at&quot;:null,&quot;added_by&quot;:null,&quot;completed_by&quot;:null,&quot;dismiss_by&quot;:null,&quot;status&quot;:null,&quot;company_id&quot;:null,&quot;screenNotification&quot;:null,&quot;screenView&quot;:null,&quot;forManager&quot;:null,&quot;requirementsModule&quot;:null,&quot;typeOccurred&quot;:&quot;Missing Signature&quot;,&quot;location&quot;:&quot;Dispensing&quot;,&quot;associatedType&quot;:&quot;-&quot;,&quot;riddor&quot;:&quot;-&quot;,&quot;safeguarding&quot;:&quot;-&quot;,&quot;cqc&quot;:&quot;-&quot;,&quot;admittedHospital&quot;:&quot;-&quot;},{&quot;residentID&quot;:5849,&quot;homeID&quot;:3,&quot;companyID&quot;:3,&quot;residentPercentage&quot;:90,&quot;residentNumber&quot;:&quot;315&quot;,&quot;residentHouseNumber&quot;:null,&quot;residentName&quot;:&quot;Miss Masha  Bear&quot;,&quot;residentMiddleName&quot;:null,&quot;residentLastName&quot;:&quot;Bear&quot;,&quot;residentFloorID&quot;:294,&quot;groupAllocation&quot;:0,&quot;residentAge&quot;:3,&quot;residentTitle&quot;:&quot;Miss&quot;,&quot;residentKnownAs&quot;:&quot;Tasha&quot;,&quot;residentDateOfAdmission&quot;:&quot;2022-12-13 00:00:00&quot;,&quot;residentDateOfBirth&quot;:&quot;2020-03-11&quot;,&quot;residentMartialStatus&quot;:&quot;Married&quot;,&quot;residentGender&quot;:&quot;Female&quot;,&quot;residentEthnicOrigin&quot;:&quot;Select&quot;,&quot;residentReligion&quot;:&quot;Select&quot;,&quot;residentHeight&quot;:152,&quot;residentHeightUnit&quot;:&quot;cm&quot;,&quot;residentulnalength&quot;:23,&quot;residentWeight&quot;:50,&quot;residentWeightUnit&quot;:&quot;kg&quot;,&quot;bmiChangePercentage&quot;:21.60000000000000142108547152020037174224853515625,&quot;residentRoom&quot;:&quot;7170&quot;,&quot;residentNI&quot;:&quot;&quot;,&quot;residentNhsNumber&quot;:&quot;111 111 1111&quot;,&quot;residentAddress2&quot;:&quot;&quot;,&quot;residentAddress3&quot;:&quot;&quot;,&quot;residentAddress4&quot;:&quot;&quot;,&quot;residentAddress5&quot;:&quot;&quot;,&quot;residentEmail&quot;:&quot;&quot;,&quot;nhsVerification&quot;:&quot;Stop PDS Synchronisation(No sync with PDS and no warning)&quot;,&quot;nameOfCCG&quot;:&quot;&quot;,&quot;residentResidencyType&quot;:null,&quot;residentPatientType&quot;:null,&quot;residentStatus&quot;:&quot;Resident&quot;,&quot;residentImage&quot;:&quot;\/getattachmentdata?path=UHJvZmlsZUltYWdlcy9yZXNpZGVudF81ODQ5XzE2OTQ1ODkyOTcucG5n&quot;,&quot;residentAddressStreet&quot;:&quot;xyz&quot;,&quot;residentAddressCity&quot;:null,&quot;residentAddressCounty&quot;:null,&quot;residentAddressPostalCode&quot;:&quot;jungle&quot;,&quot;residentAddressCountry&quot;:null,&quot;residentDols&quot;:null,&quot;residentDnar&quot;:null,&quot;residentEndofService&quot;:null,&quot;addedFrom&quot;:&quot;web&quot;,&quot;created_at&quot;:null,&quot;updated_at&quot;:null,&quot;updated_by&quot;:null,&quot;deleted_by&quot;:null,&quot;created_by&quot;:&quot;1&quot;,&quot;residentMedicationCycle&quot;:null,&quot;residentEthnicOriginOther&quot;:&quot;&quot;,&quot;residentReligionOther&quot;:&quot;&quot;,&quot;residentPlacementCategory&quot;:&quot;Residential&quot;,&quot;residentPlacementCategoryOther&quot;:&quot;&quot;,&quot;careProvided&quot;:&quot;&quot;,&quot;residentFunding&quot;:&quot;Local Authority&quot;,&quot;residentFundingOther&quot;:&quot;&quot;,&quot;fundingAuthorityName&quot;:&quot;&quot;,&quot;fundingAuthorityPhone&quot;:&quot;&quot;,&quot;fundingAuthorityMobile&quot;:&quot;&quot;,&quot;fundingAuthorityEmail&quot;:&quot;&quot;,&quot;fundingAuthorityContact&quot;:&quot;&quot;,&quot;dateOfLeaving&quot;:null,&quot;dateOfDeath&quot;:null,&quot;updateSummary&quot;:0,&quot;gpName&quot;:&quot;sadi&quot;,&quot;gpAddress&quot;:&quot;testers.company&quot;,&quot;gpPhone&quot;:&quot;12358964&quot;,&quot;gpFax&quot;:&quot;&quot;,&quot;gpEmail&quot;:&quot;&quot;,&quot;gpSurgery&quot;:&quot;abc&quot;,&quot;gpPostCode&quot;:&quot;56789&quot;,&quot;residentTitleOther&quot;:&quot;Miss&quot;,&quot;residentGenderOther&quot;:null,&quot;residentFluidTargeted&quot;:500,&quot;residentNoFluidTargeted&quot;:1,&quot;ResidentFluidRestriction&quot;:0,&quot;relish_uuid&quot;:null,&quot;reason_for_admission&quot;:null,&quot;testd&quot;:null,&quot;residentDiabetic&quot;:0,&quot;residentDiabetesType&quot;:&quot;&quot;,&quot;residentMobilityLevel&quot;:&quot;&quot;,&quot;residentMobilityAids&quot;:&quot;&quot;,&quot;residentQrCode&quot;:&quot;\/getattachmentdata?path=UmVzaWRlbnRRUkNvZGVzL1Jlc2lkZW50XzU4NDkucG5n&quot;,&quot;QRCodeRegeneratedAt&quot;:null,&quot;isFreeze&quot;:0,&quot;freezeReason&quot;:&quot;&quot;,&quot;freezeReasonOther&quot;:null,&quot;isReadmit&quot;:0,&quot;isContract&quot;:&quot;No&quot;,&quot;keyWorkers&quot;:&quot;&quot;,&quot;news_score&quot;:null,&quot;is_news_three&quot;:null,&quot;requireHandoverNotes&quot;:0,&quot;testServiceUser&quot;:0,&quot;supportRequired&quot;:null,&quot;periodStartObservation&quot;:null,&quot;periodEndObservation&quot;:null,&quot;isWarning&quot;:1,&quot;fluidWarningMessage&quot;:&quot;Fluid target has been set at 500 ml. Since 10 AM Masha has only consumed 0 ml. You can go to Service User dashboard to offer fluid or Press dismiss to remove the warning.&quot;,&quot;dismissBy&quot;:null,&quot;pastoral_priority_level&quot;:null,&quot;bowelMovementsMonitoringRequired&quot;:1,&quot;med_e_care_id&quot;:null,&quot;pain_check_id&quot;:null,&quot;catheter_placement&quot;:null,&quot;catheter_type&quot;:null,&quot;catheter_size&quot;:null,&quot;catheter_size_other&quot;:null,&quot;turning_chart_required&quot;:1,&quot;food_chart_required&quot;:1,&quot;hygieneMonitoringRequired&quot;:1,&quot;profile_image_update_date&quot;:&quot;2023-09-13 08:14:57&quot;,&quot;enteralFeedingDevice&quot;:&quot;BGT&quot;,&quot;enteralFeedingCloseTime&quot;:null,&quot;enteralFeedingRegime&quot;:0,&quot;enteralInfusion&quot;:0,&quot;viewingDate&quot;:&quot;0000-00-00&quot;,&quot;viewingNotes&quot;:&quot;&quot;,&quot;additonalNotes&quot;:&quot;&quot;,&quot;currentlyIn&quot;:&quot;&quot;,&quot;currentlyInOther&quot;:&quot;&quot;,&quot;residencyTypeOther&quot;:&quot;&quot;,&quot;martialStatusOther&quot;:&quot;&quot;,&quot;matressSizeTo&quot;:null,&quot;matressSizeFrom&quot;:null,&quot;matressSize&quot;:null,&quot;temperatureMonitoringRequired&quot;:1,&quot;oralMonitoringRequired&quot;:1,&quot;isSplintingToleranceChartRequired&quot;:0,&quot;residentSplintingTolerance&quot;:null,&quot;isStittingToleranceChartRequired&quot;:0,&quot;residentSittingTolerence&quot;:null,&quot;residentSittingTolerance&quot;:null,&quot;rod_date&quot;:null,&quot;unfreezeDate&quot;:&quot;2023-08-14&quot;,&quot;bmiReporting&quot;:1,&quot;admittedFrom&quot;:&quot;&quot;,&quot;admittedFromOther&quot;:&quot;&quot;,&quot;api_token&quot;:null,&quot;dailynotesAlert&quot;:1,&quot;lastDailyNotesDatetime&quot;:null,&quot;residentOFDayAlert&quot;:0,&quot;postFallObservationAlert&quot;:0,&quot;bowelMomentAlert&quot;:1,&quot;serviceuserAlert&quot;:&quot;Tracheostomy Tube%~%~ACP%~%~SMOKING%~%~Safe Holding%~%~No Known Allergies%~%~DOLS%~%~Blood Sugar&quot;,&quot;is_missingAddress&quot;:0,&quot;missing_home&quot;:&quot;&quot;,&quot;missing_address&quot;:&quot;&quot;,&quot;missing_postcode&quot;:&quot;&quot;,&quot;missing_telephone&quot;:&quot;&quot;,&quot;has_equipment&quot;:0,&quot;weight_monitoring&quot;:1,&quot;equipment_weight&quot;:null,&quot;proteinTarget&quot;:null,&quot;vitaminCTarget&quot;:null,&quot;id&quot;:null,&quot;description&quot;:&quot;rtrr&quot;,&quot;error_type&quot;:&quot;Omission (Missed dose)&quot;,&quot;error_type_other&quot;:&quot;&quot;,&quot;error_stage&quot;:&quot;Prescribing&quot;,&quot;medication_detail&quot;:&quot;rrerere&quot;,&quot;evidence1&quot;:&quot;\/getattachmentdata?path=RXZpZGVuY2UxLzE2OTQ2MDM4ODFfMTY5NDUyODcwNl8wMTIuanBn&quot;,&quot;evidence2&quot;:&quot;\/getattachmentdata?path=RXZpZGVuY2UyLzE2OTQ2MDM4ODFfMTY5NDUyMjkzNF9pbWFnZV8yMDIzXzA2XzA3VDA5XzM1XzE5XzEyNFoucG5n&quot;,&quot;emergency_contacted&quot;:&quot;Yes&quot;,&quot;advice_given&quot;:&quot;erwr&quot;,&quot;error_caused&quot;:&quot;rerr&quot;,&quot;future_prevention&quot;:&quot;wrewr&quot;,&quot;reported_to&quot;:&quot;rrrwe&quot;,&quot;error_impact&quot;:&quot;B: NO HARM- An error occoured but the error did not reach the person.&quot;,&quot;treatment&quot;:&quot;rwerwer&quot;,&quot;reportable_to_health&quot;:&quot;Yes&quot;,&quot;reportable_to_regulatory&quot;:&quot;NULL&quot;,&quot;candour_required&quot;:&quot;No&quot;,&quot;internal_investigation&quot;:&quot;Yes&quot;,&quot;reportable_to_LocalAuthority&quot;:&quot;No&quot;,&quot;result_actions&quot;:&quot;rewrwer&quot;,&quot;document1&quot;:&quot;\/getattachmentdata?path=ZG9jdW1lbnQxLzE2OTQ2MDM4ODFfMTY5NDU5OTMxMF8xNjk0NDMyMDMxXzIyMi5qcGc=&quot;,&quot;document2&quot;:&quot;\/getattachmentdata?path=ZG9jdW1lbnQyLzE2OTQ2MDM4ODFfQk1JIDIwMjMtMDktMTEgMTVfMDdfMzUuY3N2&quot;,&quot;learning_outcomes&quot;:&quot;NULL&quot;,&quot;incident_status&quot;:&quot;Incident recorded (open)&quot;,&quot;daily_note&quot;:&quot;wrwerwer&quot;,&quot;addedBy&quot;:1,&quot;dateAdded&quot;:&quot;2023-09-13 12:18:01&quot;,&quot;lessonlearned&quot;:null,&quot;managerfollowup&quot;:0,&quot;managerfollowup_action&quot;:null,&quot;signoff&quot;:null,&quot;signoffBy&quot;:null,&quot;lastUpdatedBy&quot;:null,&quot;resident_id&quot;:null,&quot;action_text&quot;:null,&quot;home_id&quot;:null,&quot;action_taken_text&quot;:null,&quot;allocateTo&quot;:null,&quot;module&quot;:null,&quot;moduleID&quot;:null,&quot;overdue_at&quot;:null,&quot;added_by&quot;:null,&quot;completed_by&quot;:null,&quot;dismiss_by&quot;:null,&quot;status&quot;:null,&quot;company_id&quot;:null,&quot;screenNotification&quot;:null,&quot;screenView&quot;:null,&quot;forManager&quot;:null,&quot;requirementsModule&quot;:null,&quot;typeOccurred&quot;:&quot;Omission (Missed dose)&quot;,&quot;location&quot;:&quot;Prescribing&quot;,&quot;associatedType&quot;:&quot;-&quot;,&quot;riddor&quot;:&quot;-&quot;,&quot;safeguarding&quot;:&quot;-&quot;,&quot;cqc&quot;:&quot;-&quot;,&quot;admittedHospital&quot;:&quot;-&quot;}]
                                    ">
                        2
                    </span>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="data"><span>Director Home</span></li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="data"><span>8-8-Test Home</span></li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="data"><span>New Comany</span></li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="data"><span>Relish Test</span></li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                                <li>
                                    <span "="">

                                    </span>
                                </li>
                            </ul>

                        </section>
                        <aside class="total">
                            <ul class="list-unstyled">
                                <li>Total</li>
                                <li>12</li>
                                <li>0</li>
                                <li>3</li>
                                <li>22</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>37</li>
                                <li>0</li>
                                <li>4</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>37</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>0</li>
                                <li>18</li>
                                <li>0</li>
                                <li>1</li>
                                <li>0</li>
                                <li>0</li>
                                <li>10</li>
                                <li>1</li>
                                <li>0</li>
                                <li>14</li>
                                <li>0</li>
                                <li>2</li>
                                <li>0</li>
                                <li>29</li>
                                <li>0</li>
                                <li>1</li>
                                <li>0</li>
                                <li>2</li>
                            </ul>
                        </aside>
                    </div>
                </div>
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