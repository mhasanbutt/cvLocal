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
    <link href="css/select2.css" rel="stylesheet">
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
                <ul class="user-alerts clearfix">
                    <li class="orange">Allergies</li>
                    <li>Equipment Alert</li>
                    <li>vaccination</li>
                </ul>
            </div>
            <section class="medicinalZone">
                <div class="scrollbar-outer scrollArea">
                    <div class="addMedicine">
                        <div class="select2-container select2-Area">
                            <select>
                                <option>PANADOL ACTIFAST tablets 500mg 8</option>
                                <option>option 1</option>
                                <option>option 2</option>
                            </select>
                        </div>
                        <button class="reset-btn">Reset</button>
                        <button>Search</button>
                    </div>
                    <div class="medicineSummary">
                        <span>Medicine Summary</span>
                        <ul>
                            <li><span>Medicine Name</span><div>PANADOL ACTIFAST tablets 500mg 8</div></li>
                            <li><span>Description</span><div>Tablets</div></li>
                            <li><span>Category</span><div>OTC</div><div>Analgesics Oral</div><div>Pain Relief</div></li>
                            <li><span>Generic Drug?</span>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li><span>Branded Name</span><div>PANADOL ACTIFAST</div></li>
                            <li class="drug-med"><span>Drug Tariff</span><i>Price</i><p>Packaging Size</p></li>
                        </ul>
                    </div>
                    <section class="medicines-area">
                        <ul class="medicine-Info">
                            <li>
                                <label>Medicine Type
                                    <i>
                                        <div class="medicineHistory" style="width: 190px; height:70px">
                                            <div class="scrollbar-inner scrollArea">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco laboris nisi ut
                                                </p>
                                            </div>
                                        </div>
                                    </i>
                                </label>
                                <select>
                                    <option>MAR</option>
                                    <option>opt1</option>
                                </select>
                            </li>

                            <li>
                                <label>Repeat / Interim</label>
                                <select>
                                    <option>Interim</option>
                                    <option>opt1</option>
                                </select>
                            </li>

                            <li>
                                <label>Duration<span>Day(s)</span>
                                    <i>
                                        <div class="medicineHistory" style="width: 190px; height:70px">
                                            <div class="scrollbar-inner scrollArea">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco laboris nisi ut
                                                </p>
                                            </div>
                                        </div>
                                    </i>
                                </label>
                                <div class="input-wrapper">
                                    <input type="text" id="textInput" placeholder="1">
                                    <span class="up-button"></span>
                                    <span class="down-button"></span>
                                </div>
                            </li>

                            <li>
                                <label>Administration Frequency
                                    <i>
                                        <div class="medicineHistory" style="width: 190px; height: 70px">
                                            <div class="scrollbar-inner scrollArea">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco laboris nisi ut
                                                </p>
                                            </div>
                                        </div>
                                    </i>
                                </label>
                                <select>
                                    <option>Scheduled</option>
                                    <option>opt1</option>
                                </select>
                            </li>
                            <li>
                                <label>Requires Dual Signature
                                    <i>
                                        <div class="medicineHistory" style="width: 190px; height:70px">
                                            <div class="scrollbar-inner scrollArea">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco laboris nisi ut
                                                </p>
                                            </div>
                                        </div>
                                    </i>
                                </label>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </li>
                        </ul>
                        <ul class="medicine-Info">
                            <li>
                                <label>Homely Remedy</label>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li>
                                <label>End Date</label>
                                <input type="date" placeholder="">
                            </li>
                            <li>
                                <label>Interim Order
                                    <i>
                                        <div class="medicineHistory" style="width: 190px; height:70px">
                                            <div class="scrollbar-inner scrollArea">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco laboris nisi ut
                                                </p>
                                            </div>
                                        </div>
                                    </i>
                                </label>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li>
                                <label>Controlled Drug</label>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li>
                                <label>Packaging Type</label>
                                <select>
                                    <option>Original</option>
                                    <option>opt1</option>
                                </select>
                            </li>
                        </ul>
                    </section>
                </div>
            </section>
            <footer>
                <button class="back-btn" type="button">Back</button>
                <button class="update-btn" type="submit">Update</button>
                <button type="button" class="print">Print</button>
                <button type="button" class="prescription-btn">Change Prescription</button>
            </footer>
        </section>
    </div>
    <script src="../js/jquery.scrollbar.min.js"></script>
    <script src="../js/select2.min.js"></script>
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
            jQuery(document).ready(function () {
                jQuery('.scrollArea').scrollbar();
            });

            jQuery(document).ready(function () {
                jQuery('.select2-Area').select2();
            });

            $(".up-button").click(function(){
                var value = parseInt($("#textInput").val(), 10);
                value = isNaN(value) ? 1 : value;
                if (value < 30) {
                    value++;
                }
                $("#textInput").val(value);
            });

            $(".down-button").click(function(){
                var value = parseInt($("#textInput").val(), 10);
                value = isNaN(value) ? 1 : value;
                if (value > 1) {
                    value--;
                }
                $("#textInput").val(value);
            });

        });

    </script>
</body>
</html>