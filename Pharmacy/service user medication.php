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
                        <li><span class="arrow"></span><a href="#">Service Users</a></li>
                        <li><span class="arrow"></span><a href="#" class="activePage">Medication</a></li>
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
                <div class="alertAction">
                    <span>NEW</span>
                    <div class="dropdownToggle">
                        <i class="action-btn">Action</i>
                        <div class="dropdownContent">
                            <a href="#">option 1</a>
                            <a href="#">option 2</a>
                            <a href="#">option 3</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="generallisting">
                <ul>
                    <li><input type="checkbox"></li>
                    <li><span>Service User Name</span><i>Miss Lab Rat</i></li>
                    <li><span>Medicine</span><i>CLOPIXOL ACUPHASE solution for injection ampoules 50mg/1ml 5</i></li>
                    <li><span>Source Of Medicine</span><i>Local Pharmacy</i></li>
                    <li><span>Date Received</span><i>25.10.2022</i></li>
                    <li><span>Expiry Date</span><i>25.11.2022</i></li>
                    <li><span>Packaging Type</span><i>Original</i></li>
                    <li><span>Date</span><i>(14:05) 22.12.2022</i></li>
                    <li><span>Updated By</span><i>-</i></li>
                    <li><span>Status</span><i>Active</i></li>
                    <li><a class="eye" href=""></a></li>
                </ul>
            </div>
            <footer>
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

            $(".action-btn").click(function(){
                $(".dropdownContent").toggleClass("show");
            });

            $(document).click(function(event){
                if (!$(event.target).closest('.dropdownToggle').length) {
                    $(".dropdown-content").removeClass('show');
                }
            });
        });
    </script>


</body>
</html>
