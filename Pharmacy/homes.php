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
        <section>
            <div class="homes-page">
                <aside>Homes</aside>
                <div class="home-section">
                        <ul>
                            <li>
                                <div class="homes-fields">
                                    <select>
                                        <option>Select Home/Floor</option><option>Option 1</option><option>option 2</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="homes-fields"><input type="text" placeholder="First/Last Name"></div>
                            </li>
                            <li>
                                <div class="homes-fields info"><input type="text" placeholder="Client Number"></div>
                            </li>
                            <li>
                                <div class="homes-fields"><input type="text" placeholder="NHS Number"></div>
                            </li>
                            <li>
                                <div class="homes-fields"><input type="text" placeholder="Date of Birth"></div>
                            </li>
                            <li>
                                <div class="homes-fields"><input type="text" placeholder="Date of Admission"></div>
                            </li>
                        </ul>
                    <div class="search-button">
                        <button type="submit">Search
                            <button type="reset" class="reset-button">Reset</button>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="home-page">
                <div class="stats-section statistics">
                    <div class="stat order-stat">
                        <span class="title">Order Statistics</span>
                        <ul>
                            <li><span>60</span><i>Number of Total Orders</i></li>
                            <li><span>439</span><i>Number of Total Medications</i></li>
                            <li><span>4</span><i>Interim Prescriptions</i></li>
                            <li><span>4</span><b>(Active Orders)</b><br><i>Pending Orders</i></li>
                            <li><span>2</span><b>(Active Orders)</b><br><i>Pending Interim Orders</i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>
</html>
