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

        <section>
            <div class="homes-page">
                <div class="profileInfo">
                    <strong>Service Users > <span>Medication > </span><i>Add</i></strong>
                    <ul>
                        <li><span>Service User Name</span><div>Ms Lab Rat</div></li>
                        <li><span>Date of Birth</span><div>23.09.1940</div></li>
                        <li><span>NHS No.</span><div>292398432</div></li>
                        <li><span>Company</span><div>3-3-Jawa Group</div></li>
                        <li><span>Home</span><div>3-3 Leander Lodge</div></li>
                        <li><span>Room</span><div>VIP Room</div></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="alerts-sec">
            <div class="user-alerts">
                <button type="submit">Allergies</button>
                <button type="button">Equipment Alert</button>
                <button type="submit">vaccination</button>
            </div><br><br>
            <section class="MedicationSec">
                <div class="addMedicine">
                    <select>
                        <option>PANADOL ACTIFAST tablets 500mg 8</option>
                        <option>option 1</option>
                        <option>option 2</option>
                    </select><br>
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
            </section>
        </section>
        <section class="medicines-area">
            <div class="medicine-Info">
                <div class="med-form">
                    <label>Medicine Type<i></i></label>
                    <div class="select">
                        <select>
                            <option>MAR</option>
                            <option>opt1</option>
                            <option>opt2</option>
                            <option>opt3</option>
                        </select>
                    </div>
                </div>

                <div class="med-form">
                    <label>Repeat / Interim</label>
                    <div class="select">
                        <select>
                            <option>Interim</option>
                            <option>opt1</option>
                            <option>opt2</option>
                            <option>opt3</option>
                        </select>
                    </div>
                </div>

                <div class="med-form">
                    <label>Duration<span>Day(s)</span><i></i></label>
                    <div class="input-wrapper">
                        <input type="text" id="textInput" placeholder="7">
                        <button class="up-button" onclick="moveUp()"></button>
                        <button class="down-button" onclick="moveDown()"></button>
                    </div>
                </div>
                <div class="med-form">
                    <label>Administration Frequency<i></i></label>
                    <div class="select">
                        <select>
                            <option>Scheduled</option>
                            <option>opt1</option>
                            <option>opt2</option>
                            <option>opt3</option>
                        </select>
                    </div>
                </div>
                <div class="med-form">
                    <label>Requires Dual Signature<i></i></label>
                    <div class="select">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="medicine-Info">
                <div class="med-form">
                    <label>Homely Remedy</label>
                    <div class="select">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="med-form">
                    <label>End Date</label>
                    <div class="select">
                        <input type="text" placeholder="18.11.2023">
                    </div>
                </div>
                <div class="med-form">
                    <label>Interim Order<i></i></label>

                    <div class="select">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="med-form">
                    <label>Controlled Drug</label>

                    <div class="select">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="med-form">
                    <label>Packaging Type</label>
                    <div class="select">
                        <select>
                            <option>Original</option>
                            <option>opt1</option>
                            <option>opt2</option>
                            <option>opt3</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <button type="button">Back</button>
            <button type="submit" class="save">Save</button>
            <button type="button" class="print">Print</button>
            <button type="button" class="prescription-btn">Change Prescription</button>
        </footer>
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

            $('.pagination a').on('click', function() {
                $('.pagination a').removeClass('active');
                $(this).addClass('active');
            });
        });

    </script>
</body>
</html>