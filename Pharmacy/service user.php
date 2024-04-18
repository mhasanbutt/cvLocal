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
                <strong>Homes > <span>Service Users</span></strong>
                <div class="home-section serviceusers">
                    <ul>
                        <li>
                            <div class="homes-fields">
                                <select>
                                    <option>All (3-3 Leander Lodge)</option><option>Option 1</option><option>option 2</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="homes-fields"><input type="text" placeholder="Search by keyword"></div>
                        </li>

                    </ul>

                    <div class="search-button">
                        <button type="submit">Search<button type="reset" class="reset-button">Reset</button></button>
                    </div>
                </div>
            </div>
        </section>

        <div class="ContainerList">
            <ul class="serviceUser">
                <li>
                    <article>

                        <div class="userInfo">
                            <span class="picture"><a href="#"><img src="images/Rectangle%2019.png"></a></span>
                            <ul>
                                <li>Mr Tim Shermin</li>
                                <li><strong>Timmy</strong>(78)</li>
                                <li><strong>17.07.2019</strong>(5876)</li>
                                <li>Floor 1 / Room 1</li>
                            </ul>
                        </div>

                        <div class="userContainer">
                            <span class="newScore">NEWS2 Score:2</span>
                            <span class="dnacpr">dnacpr</span>
                            <div class="notifyUser"><img src="images/warning.png"><img src="images/butterfly.png"></div>
                        </div>

                    </article>
                </li>
            </ul>
        </div>
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
        });
    </script>
</body>
</html>
