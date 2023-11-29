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
    <div class="header">
        <div class="logo">
            <img src="images/horizontalCVLogo.webp">
        </div>
        <div class="title">
            <span>
                Invoice
                <button class="downloadPDF">Download PDF</button>
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
                    <div class="invoice">
                        <div class="addressTo">
                            <span class="title">London Borough of Bromley</span>
                            <ul>
                                <li>Head Office<br>
                                    Bromley Road<br>
                                    London -<br>
                                    BR1 9EA
                                </li>
                                <li>
                                    01498498487
                                </li>
                                <li>
                                    mzulqarnain786@gmail.com
                                </li>
                            </ul>
                        </div>

                        <ul class="invoiceInfo clearfix">
                            <li>
                                <span class="title">Invoice No.</span>
                                31.01.2023
                            </li>
                            <li>
                                <span class="title">Invoice No.</span>
                                31.01.2023
                            </li>
                            <li>
                                <span class="title">Invoice No.</span>
                                31.01.2023
                            </li>
                            <li>
                                <span class="title">Invoice No.</span>
                                31.01.2023
                            </li>
                        </ul>

                        <div class="addressFrom">
                            <span class="title">London Borough of Bromley</span>
                            <ul class="clearfix">
                                <li>Head Office<br>
                                    Bromley Road<br>
                                    London -<br>
                                    BR1 9EA
                                </li>
                                <li>
                                    mzulqarnain786@gmail.com
                                </li>
                                <li>
                                    01498498487
                                </li>
                            </ul>
                        </div>

                        <br clear="all">

                        <div class="table secondaryTable">
                            <ul>
                                <li>
                                    <span>Payee</span>
                                    <span>Credit Per Week</span>
                                    <span>Total Credit Due</span>
                                </li>
                                <li>
                                    <span>London Borough of Bromley</span>
                                    <span>£1.00</span>
                                    <span>£8.71</span>
                                </li>
                                <li>
                                    <span>Total</span>
                                    <span>£1.00</span>
                                    <span>£8.71</span>
                                </li>
                            </ul>
                        </div>

                        <div class="table">
                            <ul>
                                <li>
                                    <span>Period</span>
                                    <span>Service User</span>
                                    <span>Method</span>
                                    <span>Credit Per Week</span>
                                    <span>Total Credit Due</span>
                                </li>
                                <li>
                                    <span>01-10-2023 To 30-11-2023</span>
                                    <span>Ms Noelle Holiday</span>
                                    <span>Credit Note</span>
                                    <span>£1.00</span>
                                    <span>£8.71</span>
                                </li>
                                <li>
                                    <span>Total Amount Credited</span>
                                    <span>£8.71</span>
                                </li>
                            </ul>
                        </div>

                        <ul class="bankInfo clearfix">
                            <li>
                                <span class="title">Bank</span>
                                NatWest Bank Plc
                            </li>
                            <li>
                                <span class="title">Account Name</span>
                                Oatleight Care Ltd.
                            </li>
                            <li>
                                <span class="title">Account No.</span>
                                87 23 84 39
                            </li>
                            <li>
                                <span class="title">Sort Code</span>
                                34 34 34
                            </li>
                            <li>
                                <span class="title">Company Name</span>
                                -
                            </li>
                            <li>
                                <span class="title">VAT Reg. Code</span>
                                11
                            </li>
                        </ul>
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
