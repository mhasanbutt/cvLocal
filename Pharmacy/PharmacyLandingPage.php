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
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            box-sizing: border-box;

        }
        .sidenav{
            width: 115px;
            height: 100vh;
            background-color: #fff;
            box-shadow: inset -6px 0 5px rgba(0, 0, 0, 0.1);
            position: absolute;
            float: left;
            overflow: hidden;
        }
        .sidenav ul{
            list-style-type: none;
            padding: 10px 15px 0 15px;
            height: 100%;
        }
        .sidenav ul li{
            align-items: center;
            text-align: center;
        }

        .sidenav ul li a{
            text-decoration: none;
            color: #748CAB;
            text-align: center;
            font-size: 12px;
            position: relative;
            bottom: 5px;
            font-weight: 500;
        }
        .sidenav ul li:first-child a{
            color: #55A716;
            font-weight: 500;
            font-size: 12px;
            padding-left: 3px;
        }
        .sidenav ul li:first-child{
            padding: 10px 15px 30px 3px;
        }
        .sidenav ul li .logo{
            width: 70px;
            height: 60px;
        }
        .sidenav ul li img{
            width: 32px;
            height: 32px;
        }
        .sidenav ul li:nth-child(2), .sidenav ul li:nth-child(3), .sidenav ul li:last-child{
            padding: 0px 20px 30px 15px;
        }
        .sidenav ul li:nth-child(4) img{
            height: 62px;
            width: 62px;
        }
        .sidenav ul li:nth-child(4){
            padding: 440px 15px 15px 12px;
        }
        .homestats-sec{
            width: calc(100% - 125px);
            float: right;
            position: relative;
            top: 200px;
        }
        .home-stats{
            background-color: #F5F5F5;
            height: 175px;
            width: 512px;
            border-radius: 12px;
            padding: 15px 0 15px 15px;
        }

        .home-stats span{
            font-size: 20px;
            height: 25px;
            color: #748CAB;
        }
        .counthomes{
            background-color: #94A7B5;
            width: 238px;
            height: 107px;
            border-radius: 8px;
            padding: 15px 0 0 15px;
        }
        .countresident{
            background-color: #94A7B5;
            width: 238px;
            height: 107px;
            border-radius: 8px;
            padding: 15px 0 0 15px;
        }
        .counthomes span, .countresident span{
            font-weight: 600;
            color: #fff;
            font-size: 32px;
        }
        .countresident i{
            font-style: normal;
            color: #fff;
            font-size: 15px;
            float: right;
            font-weight: 300;
            position: relative;
            top: 4px;
            right: 15px;
        }
        .countresident b{
            font-style: normal;
            color: #F7D59A;
            font-size: 10px;
            float: right;
            font-weight: 300;
            position: relative;
            top: 37px;
            right: 15px;
        }
        .counthomes i{
            font-style: normal;
            color: #fff;
            font-size: 15px;
            float: right;
            font-weight: 300;
            position: relative;
            top: 50px;
            right: 15px;
        }
        .home-area{
            display: flex;
            margin-top: 10px;
        }
        .home-area .countresident{
            margin-left: 7px;
        }

        .order-stats{
            background-color: #F5F5F5;
            height: 175px;
            width: 69.5%;
            border-radius: 12px;
            padding: 15px 0 15px 15px;
        }
        .order-stats span{
            font-size: 20px;
            height: 25px;
            color: #748CAB;
        }
        .order-area{
            display: flex;
            margin-top: 10px;
        }
        .orderstats-sec{
            width: calc(100% - 125px);
            float: right;
            position: relative;
            top: 215px;
        }
        .countorders{
            background-color: #94A7B5;
            width: 238px;
            height: 107px;
            border-radius: 8px;
            padding: 15px 0 0 15px;
            margin-left: 7px;
        }
        .countorders span{
            font-weight: 600;
            color: #fff;
            font-size: 32px;
        }
        .countorders i{
            font-style: normal;
            color: #fff;
            font-size: 15px;
            float: right;
            font-weight: 300;
            position: relative;
            top: 50px;
            right: 15px;
        }
        .countorders b{
            font-style: normal;
            color: #F7D59A;
            font-size: 10px;
        }
        .order-area .countorders:nth-child(2) i, .order-area .countorders:last-child b {
            position: relative;
            top: 4px;
            float: right;
            font-size: 15px;
        }
        .order-area .countorders:last-child b, .order-area .countorders:nth-child(4) b{
            font-style: normal;
            color: #F7D59A;
            font-size: 10px;
            float: right;
            font-weight: 300;
            position: relative;
            top: 37px;
            right: 15px;
        }
        .order-area .countorders:nth-child(4) i{
            left: 54px;
        }
        .order-area .countorders:last-child i{
            top: 4px;
        }

    </style>
</head>

<body>
    <section class="sidenav">
        <ul>
            <li>
                <img class="logo" src="../Pharmacy/images/pharmacy%20logo.png">
                <a href="#">PHARMACY</a>
            </li>
            <li>
                <img src="../Pharmacy/images/orders-list.png"><br>
                <a href="#">Orders</a>
            </li>
            <li>
                <img src="../Pharmacy/images/home-page.png"><br>
                <a href="#">Homes</a>
            </li>
            <li>
                <img src="../Pharmacy/images/Ellipse%201.png"><br>
                <a href="#"></a>
            </li>
            <li>
                <img src="../Pharmacy/images/logout.png"><br>
                <a href="#">Logout</a>
            </li>
        </ul>
    </section>

    <section class="homestats-sec">
        <div class="home-stats">
            <span>Home Statistics</span>
            <div class="home-area">
                <div class="counthomes">
                    <span>11</span><i>Number of Homes</i>
                </div>
                <div class="countresident">
                    <span>175</span><b>(Active Orders)</b><i>Number of Residents</i>
                </div>
            </div>
        </div>
    </section>

    <section class="orderstats-sec">
        <div class="order-stats">
            <span>Order Statistics</span>
            <div class="order-area">
                <div class="countorders" style="margin-left: 0">
                    <span>60</span><i>Number of Total Orders</i>
                </div>
                <div class="countorders">
                    <span>439</span><i>Number of Total Medications</i>
                </div>
                <div class="countorders">
                    <span>4</span><i>Interim Prescriptions</i>
                </div>
                <div class="countorders">
                    <span>4</span><b>(Since 5 Days)</b><i>Pending Orders</i>
                </div>
                <div class="countorders">
                    <span>2</span><b>(Since 5 Days)</b><i>Pending Interim Orders</i>
                </div>
            </div>
        </div>
    </section>
</body>
</html>