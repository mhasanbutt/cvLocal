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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <div class="landing-page">
        <section class="sidenav">

            <div class="logo">
                <img src="images/pharmacy%20logo.png">
            </div>
            <ul>
                <li class="menu"><img src="images/menus.png">Menu
                    <section class="dropdown-sec">
                        <div class="dropdown">
                            <ul>
                                <li>Service User Register</li>
                                <li>Service User</li>
                                <li>eMar Cycles</li>
                                <li>eMar</li>
                                <li>Service User Medication</li>
                                <li>Homely Remedy Medication</li>
                                <li>Service User Stock</li>
                                <li>Return & Destroy</li>
                                <li>Convert Medication</li>
                                <li>Medicine Room</li>
                            </ul>
                        </div>
                    </section>
                </li>
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
                        <li><a href="#">Homes</a></li>
                        <li><span class="arrow"></span><a href="#">Medication</a></li>
                        <li><span class="arrow"></span><a href="#" class="activePage">Medication Orders</a></li>
                    </ul>
                </div>
                <div class="profileInfo">
                    <ul>
                        <li>Service User Name<br><span>Ms Lab Rat</span></li>
                        <li>Date of Birth<br><span>23.09.1940</span></li>
                        <li>NHS No.<br><span>292398432</span></li>
                        <li>Company<br><span>3-3-Jawa Group</span></li>
                        <li>Home<br><span>3-3 Leander Lodge</span></li>
                        <li>Room<br><span>VIP Room</span></li>
                    </ul>
                </div>
            </div>

            <div class="filters selectors">
                <ul>
                    <li><input type="text" placeholder="Search by keyword"></li>
                    <li>
                        <select>
                            <option>All (3-3 Leander Lodg</option><option>Option 1</option><option>option 2</option>
                        </select>
                    </li>
                    <li>
                        <select>
                            <option>Miss Lab Rat</option><option>Option 1</option><option>option 2</option>
                        </select>
                    </li>
                    <li>
                        <select>
                            <option>Select Interim</option><option>Option 1</option><option>option 2</option>
                        </select>
                    </li>
                    <li>
                        <select>
                            <option>Select PRN</option><option>Option 1</option><option>option 2</option>
                        </select>
                    </li>
                    <li>
                        <select>
                            <option>Active</option><option>Option 1</option><option>option 2</option>
                        </select>
                    </li>
                    <li><input type="text" placeholder="Miss Lab Rat"></li>
                    <li><input type="text" placeholder="Select Interim"></li>

                </ul>
                <div class="filter-btn">
                    <button type="submit">Search
                        <button type="reset" class="reset-button">Reset</button>
                    </button>
                </div>
            </div>
            <div class="alertCenter">
                <ul class="user-alerts">
                    <li class="orange">Allergies</li>
                    <li>Equipment Alert</li>
                    <li>vaccination</li>
                </ul>
            </div>

            <section class="medicineProfile">
                <ul>
                    <li>Date Ordered<span>05.04.2023 09:05</span></li>
                    <li>Order Status<span>Pending</span></li>
                    <li>Source of Medicine<span>Pharmacy - Online Order</span></li>
                </ul>
            </section>

            <div class="generallisting styledlists">
                <ul>
                    <li><input type="checkbox"></li>
                    <li><span>Medicine</span><i>CLOPIXOL ACUPHASE solution for injection ampoules 50mg/1ml 5</i></li>
                    <li><span>Ingredient</span><i>PYRIDOXINE</i></li>
                    <li><span>Strength</span><i>0.125mg / 5ml</i></li>
                    <li><span>Frequency of Administration</span><i>Daily</i></li>
                    <li><span>Amount of Rounds</span><i>0</i></li>
                    <li><span>Dosage per Round</span><i>10 ml</i></li>
                    <li><span>Current Stock</span><i>150.00</i></li>
                    <li><span>QTY. Ordered</span><i>150.00</i></li>
                    <li><span>QTY. Already Added</span><i>0.00</i></li>
                    <li><span>QTY. to Send</span><input type="text" placeholder="150.00"></li>
                    <li><span>Containers</span><input type="text" placeholder="1"></li>
                    <li><a class="eye" href=""></a></li>
                </ul>
            </div>
            <section class="comments">
                <select>
                    <option>Status</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <input type="text" placeholder="Comments (optional)">
            </section>
            <footer>

                <button class="back-btn" type="button">Back</button>
                <button class="update-btn" type="submit">Update</button>
                <button type="button" class="print">Print</button>

                <ul class="pageContainer">
                    <li class="previous-btn"></li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li class="next-btn"></li>
                </ul>

                <select>
                    <option>50 per page</option>
                    <option>opt 1</option>
                    <option>opt 2</option>
                    <option>opt 3</option>
                </select>
            </footer>
        </section>
    </div>

    <script>
        $(document).ready(function() {
            var menu = $(".menu");
            var submenu = $(".dropdown-sec");

            menu.click(function() {
                if (submenu.css("visibility") === "visible") {
                    submenu.css("visibility", "hidden");
                    submenu.css("opacity", "0");
                } else {
                    submenu.css("visibility", "visible");
                    submenu.css("opacity", "1");
                }
            });
            var dropdownItems = $(".dropdown-sec li");
            dropdownItems.click(function(event) {
                event.preventDefault();
                submenu.css("visibility", "hidden");
                submenu.css("opacity", "0");
            });

            $('.pageContainer li').on('click', function() {
                $('.pageContainer li').removeClass('active');
                $(this).addClass('active');
                $(".pageContainer .previous-btn").removeClass("active");
            });
        });

    </script>
</body>
</html>
