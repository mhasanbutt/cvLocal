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
    <link href="css/jquery.scrollbar.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <div class="landing-page">
        <section class="sidenav">

            <div class="logo"><img src="images/pharmacy%20logo.png"></div>

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
                        <li><a href="#">Service Users</a></li>
                        <li><span class="arrow"></span><a href="#">Medication</a></li>
                        <li><span class="arrow"></span><a href="#" class="activePage">Add</a></li>
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
            <div class="alertCenter">
                <ul class="user-alerts">
                    <li class="orange">Allergies</li>
                    <li>Equipment Alert</li>
                    <li>vaccination</li>
                </ul>
            </div>
            <section class="medicinalZone">
                <div class="scrollbar-outer scrollArea">
                    <div class="addMedicine">
                        <select>
                            <option>Select Medicine</option>
                            <option>option 1</option>
                            <option>option 2</option>
                        </select><br>
                        <button class="reset-btn">Reset</button>
                        <button>Search</button>
                    </div>
                    <div class="removeMedicine">
                        <span>This list remembers 100 medications that you use in the home</span>
                        <ul>
                            <li>
                                <span>Medicine Name</span>
                                <span class="delete-btn"></span>
                                <span class="fillUp-btn"></span>
                                <div>TROSYL nail solution 28% w/w 12ml</div>
                            </li>
                        </ul>
                    </div>
                </div>

            </section>
            <footer>
                <button class="back-btn" type="button">Back</button>
                <button type="submit" class="save">Save</button>
            </footer>
        </section>
    </div>

    <script src="../js/jquery.scrollbar.min.js"></script>
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

            $('.pagination a').on('click', function() {
                $('.pagination a').removeClass('active');
                $(this).addClass('active');
            });
            jQuery(document).ready(function () {
                jQuery('.scrollArea').scrollbar();
            });
        });

    </script>
</body>
</html>
