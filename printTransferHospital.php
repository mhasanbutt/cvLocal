<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.webp" rel="shortcut icon">
    <title>Print Format</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/print.css" rel="stylesheet">
</head>
    <body>
        <div class="header forHospitalTransfer">
            <div class="logo">
                <img src="images/horizontalCVLogo.png">
            </div>
            <div class="title">
                <span>
                    Service Users QR Code
                    <button onclick="window.print();"></button>
                </span>
            </div>
        </div>

        <table class="printBody">
            <thead>
                <tr>
                    <td><div class="headerSpacer"></div></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <article class="userProfile">
                            <span class="title">Personal Details</span>
                            <div class="ServiceuserImg">
                                <img src="images/temp-picture.jpg">
                            </div>
                            <ul class="list-unstyled clearfix">
                                <li>
                                    <span>Full Name</span>
                                    Mr Tim Shermin
                                </li>
                                <li>
                                    <span>Likes to be known as</span>
                                    Timmy
                                </li>
                                <li>
                                    <span>Date of Birth</span>
                                    14.12.5522
                                </li>
                                <li>
                                    <span>Age</span>
                                    78
                                </li>
                                <li>
                                    <span>gender</span>
                                    -
                                </li>
                                <li>
                                    <span>NHS No.</span>
                                    25418946582
                                </li>
                                <li>
                                    <span>religion</span>
                                    -
                                </li>
                            </ul>
                        </article>
                        <article class="userProfile">
                            <span class="title">Personal Details</span>
                            <ul class="list-unstyled clearfix">
                                <li>
                                    <span>Name</span>
                                    -
                                </li>
                                <li>
                                    <span>address</span>
                                    -
                                </li>
                                <li>
                                    <span>post code</span>
                                    -
                                </li>
                                <li>
                                    <span>telephone</span>
                                    -
                                </li>
                                <li>
                                    <span>Floor</span>
                                    -
                                </li>
                                <li>
                                    <span>room</span>
                                    -
                                </li>
                                <li>
                                    <span>aware of transfer?</span>
                                    yes
                                </li>
                            </ul>
                        </article>
                        <div class="allergiesInfo">
                            <div class="statusLables">
                                <i class="title">Allergies</i>
                                <span>S.L.T     Level 3 - Liquidised. Level 2 - Mildly Thick</span>
                                <ul class="allergyList">
                                    <li>Plate Size - Medium</li>
                                </ul>
                            </div>
                        </div>
                        <span class="woundtitle">Wounds & Bruises</span>
                        <ul class="woundlists clearfix">
                            <li>
                                <span class="title">Date reported</span>
                                11.19.2021
                            </li>
                            <li>
                                <span class="title">location of wound</span>
                                right inner thigh 2
                            </li>
                            <li>
                                <span class="title">type of wound</span>
                                Bruise
                            </li>
                            <li>
                                <span class="title">status</span>
                                Active
                            </li>
                        </ul>
                        <div class="woundDetail">
                            <img class="wound-Img" src="images/Image%202.png">
                        </div>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td><div class="footerSpacer"></div></td>
                </tr>
            </tfoot>
        </table>

        <div class="footer">
            <i><?php echo date('M dS, Y - H:i');?></i>
            &copy; <?php echo date('Y');?> CareVision Management Ltd. All Rights Reserved.
        </div>

        <script src="js/jquery-1.12.4.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
