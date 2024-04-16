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

        <section>
            <div class="homes-page">
                <div class="profileInfo">
                    <strong>Homes > <i>Service User > </i><span>Medication</span></strong>
                    <ul>
                        <li><span>Service User Name</span><div>Ms Lab Rat</div></li>
                        <li><span>Date of Birth</span><div>23.09.1940</div></li>
                        <li><span>NHS No.</span><div>292398432</div></li>
                        <li><span>Company</span><div>3-3-Jawa Group</div></li>
                        <li><span>Home</span><div>3-3 Leander Lodge</div></li>
                        <li><span>Room</span><div>VIP Room</div></li>
                    </ul>
                </div>

                <div class="user-medicine">
                    <ul>
                        <li>
                            <div class="homes-fields"><input type="text" placeholder="Search by keyword"></div>
                        </li>
                        <li>
                            <div class="homes-fields">
                                <select>
                                    <option>All (3-3 Leander Lodge)</option><option>Option 1</option><option>option 2</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="homes-fields">
                                <select>
                                    <option>Miss Lab Rat</option><option>Option 1</option><option>option 2</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="homes-fields">
                                <select>
                                    <option>Select Interim</option><option>Option 1</option><option>option 2</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                    <div class="search-button">
                        <button type="submit">Search
                            <button type="reset" class="reset-button">Reset</button>
                        </button>
                    </div>
                    <br><br>
                    <ul>
                        <li>
                            <div class="homes-fields">
                                <select>
                                    <option>Select PRN</option><option>Option 1</option><option>option 2</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="homes-fields">
                                <select>
                                    <option>Active</option><option>Option 1</option><option>option 2</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="homes-fields"><input type="text" placeholder="Miss Lab Rat"></div>
                        </li>
                        <li>
                            <div class="homes-fields"><input type="text" placeholder="Select Interim"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="alerts-sec">
            <div class="user-alerts">
                <button type="submit">Allergies</button>
                <button type="button">Equipment Alert</button>
                <button type="submit">vaccination</button>
            </div>
            <div class="action-sec">
                <span>NEW</span>
                <i>Action</i>
            </div>
        </section><br>
        <div class="generallisting">

            <section>
                <ul>
                    <li><input type="checkbox"><label></label></li>
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

            </section>
        </div>
    </div>
    <footer>
        <div class="pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
        </div>
        <select>
            <option>50 per page</option>
            <option>opt 1</option>
            <option>opt 2</option>
            <option>opt 3</option>
        </select>
    </footer>

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
