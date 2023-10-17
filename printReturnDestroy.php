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
            <img src="images/printLogo.png">
        </div>
        <div class="title">
            <span>
                Return &amp; Destroy
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
                    <article class="profile">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <img src="https://jawa.linksdev.co.uk/getattachmentdata?path=UHJvZmlsZUltYWdlcy9yZXNpZGVudF8zNTE5XzE2OTM5MTI5MTQucG5n" onerror="imgError(this);">
                            </li>
                            <li style="width:calc(100% - 270pt);">
                                <span class="title">Service User</span>
                                Ms Cora TESTER TEST <strong>(coraASDADSADAD)</strong>
                            </li>
                            <li style="width:100pt">
                                <span class="title">Service User ID</span>
                                46
                            </li>
                            <li style="width:100pt">
                                <span class="title">Date of Birth</span>
                                25-12-1900
                            </li>
                            <li style="width: 200pt;">
                                <span class="title">Location</span>
                                Basement Floor
                            </li>
                            <li style="width: 100pt">
                                <span class="title">NHS Number</span>
                                123 454 3211
                            </li>
                        </ul>
                    </article>

                    <div class="homeInformation">
                        <ul class="list-unstyled clearfix">
                            <li><i>Home</i> Oxford Care Home</li>
                            <li><i>Address</i> 34 Oxford Care Street</li>
                            <li><i>Doctor</i> Dr. Will Smith</li>
                        </ul>
                    </div>

                    <div class="generalListing">
                        <section>
                            <ul class="list-unstyled clearfix">
                                <li style="width:calc(100% - 460px);">
                                    <span class="title">Added By</span>
                                    Adam Gill
                                </li>

                                <li style="width:80px;">
                                    <span class="title">Date</span>
                                    23.12.2023
                                </li>

                                <li style="width:80px;">
                                    <span class="title">Status</span>
                                    Completed
                                </li>

                                <li style="width:80px;">
                                    <span class="title">Type</span>
                                    Returned
                                </li>

                                <li style="width:220px;">
                                    <span class="title">Countersigned By</span>
                                    John Corner
                                </li>
                            </ul>
                        </section>
                    </div>

                    <table class="data">
                        <thead>
                            <tr>
                                <th>Medicine Name</th>
                                <th>Medicine Type</th>
                                <th>Strength</th>
                                <th>Current Stock</th>
                                <th>QTY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Paracetamol</td>
                                <td></td>
                                <td>500ml</td>
                                <td>5</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
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
