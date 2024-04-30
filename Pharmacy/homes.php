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
    <div class="landing-page">
        <section class="sidenav">
            <div class="logo">
                <img src="images/pharmacy%20logo.png">
            </div>

            <ul>
                <li><img src="images/orders-list.png">Orders</li>
                <li><img src="images/home-page.png"> Homes</li>
            </ul>
            <div class="bottom-items">
                <ul>
                    <li><img src="images/Ellipse%201.png"></li>
                    <li><img src="images/logout.png"> logout</li>
                </ul>
            </div>
        </section>

        <section class="contentBody">
            <div class="topBar">
                <div class="breadCrumb">
                    <ul>
                        <li><a href="#" class="activePage">Homes</a></li>
                    </ul>
                </div>
            </div>

            <div class="filters">
                <ul>
                    <li>
                        <select>
                            <option>Select Home/Floor</option><option>Option 1</option><option>option 2</option>
                        </select>
                    </li>
                    <li><input type="text" placeholder="First/Last Name"></li>
                    <li><input type="text" placeholder="Client Number"></li>
                    <li><input type="text" placeholder="NHS Number"></li>
                    <li><input type="text" placeholder="Date of Birth"></li>
                    <li><input type="text" placeholder="Date of Admission"></li>
                </ul>
                <div class="filter-btn">
                    <button type="submit">Search
                        <button type="reset" class="reset-button">Reset</button>
                    </button>
                </div>
            </div>
            <div class="stat home-statistics">
                <span class="title">3-3 Leander Lodge<span>( 3-3-Jawa Group )</span></span>
                <ul class="clearfix">
                    <li><span class="number">60</span><span class="category">Number of Total Orders</span></li>
                    <li><span class="number">439</span><span class="category">Number of Total Medications</span></li>
                    <li><span class="number">4</span><span class="category">Interim Prescriptions</span></li>
                    <li><span class="number">4</span><span class="category"><b>(Active Orders)</b>Pending Orders</span></li>
                    <li><span class="number">2</span><span class="category"><b>(Active Orders)</b>Pending Interim Orders</span></li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
