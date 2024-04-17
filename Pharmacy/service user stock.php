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
                    <strong>Homes > <i>Medication > </i><span>Medication Orders</span></strong>
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
                        <li><div class="homes-fields"><input type="text" placeholder="Miss Lab Rat"></div></li>
                        <li><div class="homes-fields"><input type="text" placeholder="Select Interim"></div></li>
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
            <section class="medicineAlert">
                <p>Not all medication "Counts Down" as it is given. So the "Consumed"
                    column will not always reflect the administrations. Only the following units count down;
                    Tablets / Capsules / Sachets / Units / Patches / Suppositories / Supplements or ml (if
                    the received unit is set to ml as well)
                </p>
            </section>

        </section>

        <div class="generallisting med-lists">

            <section>
                <ul>
                    <li><input type="checkbox"><label></label></li>
                    <li><span>Medicine</span><i>CLOPIXOL ACUPHASE solution for injection ampoules 50mg/1ml 5</i></li>
                    <li><span>Ingredient</span><i>PYRIDOXINE</i></li>
                    <li><span>Strength</span><i>0.125mg / 5ml</i></li>
                    <li><span>Stock Remaining (previous)</span><i>-</i></li>
                    <li><span>Stock Carried Forward</span><i>0</i></li>
                    <li><span>QTY. Ordered</span><i>150.00</i></li>
                    <li><span>QTY. Received (not from orders)</span><i>150.00</i></li>
                    <li><a class="eye" href=""></a></li>
                    <li><span>Returned / Destroyed</span><i>0.00</i></li>
                    <li><span>QTY. Adjusted</span><i>0.00</i></li>
                    <li><span>Consumed</span><i>0.00</i></li>
                    <li><span>Current Stock</span><i>0.00</i></li>
                </ul>
            </section>
        </div>
        <div class="active-prescription">
            <div class="med-form">
                <label>Requires Dual Signature</label>
                <div class="select">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
        <footer>
            <button type="button">Back</button>
            <button class="update-btn" type="submit">Update</button>
            <button type="button" class="print">Print</button>
            <div class="pages-count">
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
