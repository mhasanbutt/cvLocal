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
            </ul>
            <span class="title"><img src="images/enquiries.png"> Enquiries</span>
        </div>
        <ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer searchField">
                    <input type="text" placeholder="Search by keyword">
                    <img src="images/magnifier-tool.svg" class="searchIcon svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Status</option>
                        <option value="">Pre Rishi Intro call</option>
                        <option value="">Rishi Intro Call done</option>
                        <option value="">Pre Demo</option>
                        <option value="">Demo Done</option>
                        <option value="">Pre Quotation</option>
                        <option value="">Quote Sent</option>
                        <option value="">Migration files sent</option>
                        <option value="">Migration Files Received</option>
                        <option value="">Cloud Uploaded</option>
                        <option value="">HARDWARE SENT FOR DELIVERY</option>
                        <option value="">Onboarding Date decided</option>
                        <option value="">Cloud Link emailed</option>
                        <option value="">Onboarded</option>
                        <option value="">Dead Lead</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
        </ul>
        <div class="clearfix">
            <button type="button" class="searchButton">Search</button>
            <div class="pull-right clearfix">
                <div class="btn-group noAlergy">
                    <button type="button" class="btn orange"><img src="images/plus.svg" class="svg">Add Enquiry</button>
                </div>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Care Home Name</th>
                            <th>Contact Person</th>
                            <th>Enquiry Source</th>
                            <th>Last Updated</th>
                            <th>Updated By</th>
                            <th>Pending Tasks</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="warning">
                            <td>ABC</td>
                            <td>XYZ</td>
                            <td>Peter P.</td>
                            <td>Friend</td>
                            <td>10/11/2021</td>
                            <td>Rishi R.</td>
                            <td>Yes</td>
                            <td>Demo Done</td>
                            <td class="text-center"><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>ABC</td>
                            <td>XYZ</td>
                            <td>Peter P.</td>
                            <td>Friend</td>
                            <td>10/11/2021</td>
                            <td>Rishi R.</td>
                            <td>No</td>
                            <td>Demo Done</td>
                            <td class="text-center"><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <button>Back</button>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
