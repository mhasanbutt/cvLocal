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
        .landing-page{
            height: 100%;
            width: 100%;
        }
        .sidenav{
            width: 100px;
            height: 100vh;
            background-color: #fff;
            box-shadow: inset -6px 0 5px rgba(0, 0, 0, 0.1);
            float: left;
            position: fixed;

        }
        .sidenav ul{
            width: 100%;
            height: 100%;
        }
        .sidenav ul{
            list-style-type: none;
            padding: 10px 15px 0 15px;
            height: 100%;
        }
        .sidenav ul li img{
            width: 32px;
            height: 32px;
        }
        .sidenav ul li{
            align-items: center;
            text-align: center;
            text-decoration: none;
            padding: 0 12px 30px 10px;
            font-size: 14px;
            color: #748CAB;
        }
        .logo{
            width: 100px;
            height: 100px;
            position: relative;
            padding: 10px 15px 30px 15px;

        }
        .logo img{
            width: 70px;
            height: 59px;
        }
        .logo:after {
            position: absolute;
            content: "Pharmacy";
            left: 48%;
            top: 75%;
            padding: 0;
            transform: translateX(-32px);
            color: #55A716;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            text-transform: uppercase;
        }
        .sidenav ul li:nth-child(3) img{
            width: 50px;
            height: 50px;
        }
        .home-page{
            width: calc(100% - 100px);
            height: 100%;
            float: right;
        }
        .stat{
            background-color: #F5F5F5;
            width: 98.5%;
            padding:15px 10px 15px 15px;
            border-radius: 8px;
            border: 0;
            margin: 0 15px 0 15px;
        }
        .stat ul{
            display: flex;
            list-style-type: none;
            text-decoration: none;
        }
        .stat ul li{
            background-color: #94A7B5;
            width: calc((100% - 35px) / 5);
            height: 107px;
            margin-left: 7px;
            border: none;
            border-radius: 8px;
            margin-top: 12px;
        }
        .home-stat{
            width: 40%;
        }
        .home-stat ul li{
            width: calc((100% - 12px) / 2);
        }
        .stat ul li:first-child{
            margin-left: 0;
        }
        .stat ul li span{
            color: #fff;

            margin-left: 15px;
            font-weight: 600;
            color: #fff;
            font-size: 32px;
            font-style: normal;
            position: relative;
            top: 15px;
        }
        .stat ul li b{
            font-style: normal;
            color: #F7D59A;
            font-size: 10px;
            font-weight: 600;
            float: right;
            position: relative;
            top: 50px;
            right: 15px;
        }
        .stat ul li i{
            font-style: normal;
            float: right;
            right: 15px;
            position: relative;
            top: 17px;
            color: #fff;
            font-size: 13px;
        }

         .stat ul li:nth-child(1) i, .order-stat ul li:nth-child(2) i, .order-stat ul li:nth-child(3) i{
            position: relative;
            top: 65px;
        }
        .home-stat{
            margin-bottom: 15px;

        }
        .home-page .stats-section{
            position: relative;
            height: 100vh;
            padding-top: 15%;
        }

        .home-stat .title, .order-stat .title{
            color: #7E8E9D;
            font-size: 18px;
            font-style: normal;
            font-weight: 300;
            text-transform: uppercase;
        }
        .bottom-items{
            bottom: 0;
            position: absolute;
        }
        .bottom-items ul li{
            margin-left: 0;
            padding: 0 12px 30px 0px;
        }
        .bottom-items ul li:first-child{
            padding: 0 18px 20px 0px;
        }
        .bottom-items ul li:first-child img{
            width: 70px;
            height: 70px;
        }

        @media screen and (min-width: 1366px) {
            .order-stat ul li:nth-child(2) i{
                font-size: 13px;
                position: relative;
                bottom: 30px;
            }
            .stat{
                position: relative;
                right: 5px;
            }
        }


    </style>
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
            <div class="home-page">
                <div class="stats-section">
                    <div class="stat home-stat">
                        <span class="title">Home Statistics</span>
                        <ul>
                            <li><span>11</span><i>Number of Total Orders</i></li>
                            <li class="nth-resident"><span>11</span><b>(Active Orders)</b><br><i>Pending Interim Orders</i></li>
                        </ul>
                    </div>
                    <div class="stat order-stat">
                        <span class="title">Order Statistics</span>
                        <ul>
                            <li><span>11</span><i>Number of Total Orders</i></li>
                            <li class="num-medication"><span>11</span><i>Number of Total Medications</i></li>
                            <li><span>11</span><i>Interim Prescriptions</i></li>
                            <li><span>11</span><b>(Active Orders)</b><br><i>Pending Orders</i></li>
                            <li><span>11</span><b>(Active Orders)</b><br><i>Pending Interim Orders</i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
