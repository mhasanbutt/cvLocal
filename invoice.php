<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/invoice.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <section class="invoiceHeader">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <img src="images/logo.png" alt="Care Vision" height="60">
                </div>
                <div class="col-xs-6 invoiceTitle">
                    Invoice
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <ul class="ownInfo list-unstyled">
                        <li>
                            210 Anerley Road, Anerley, London SE20 8TJ <span><img src="images/home.png" alt="Home"></span>
                        </li>
                        <li>
                            info@care-vision.co.uk <span><img src="images/email.png" alt="Home"></span>
                        </li>
                        <li>
                            www.care-vision.co.uk <span><img src="images/web.png" alt="Home"></span>
                        </li>
                        <li>
                            020 8778 8545 <span><img src="images/phone.png" alt="Home"></span>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 col-xs-offset-2">
                    <div class="row">
                        <div class="col-xs-8 pull-down">
                            <article class="invoicee">
                                <img src="images/tempLogo.png" alt="Temporary Logo" height="60"><br clear="all">
                                <strong>Michael Kors</strong>
                                <p>Mr. john Smith <span>(Director Finance)</span></p>
                                210 Anerley Road, Anerley, London SE20 8TJ
                            </article>
                        </div>
                        <div class="col-xs-4 pull-down">
                            <span class="invoiceInfo">
                                <p><strong>Invoice No.</strong>12578</p>
                                <p><strong>Invoice Date</strong>19 April, 2018</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p>&nbsp;</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Subscription</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                            <tr>
                                <td>Mobile / Tablet Protection License</td>
                                <td>5</td>
                                <td>&pound; 15</td>
                                <td>&pound; 75</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>&pound; 1925</td>
                            </tr>
                            <tr>
                                <td>Tax, Vat 10%</td>
                                <td>&pound; 192.5</td>
                            </tr>
                            <tr>
                                <td>Discount 0%</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>&pound; 2117.5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-right">
                    <hr>
                    <img src="images/logo.png" alt="Care Vision" height="40">
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.jst"></script>
    <script>
    $('.pull-down').each(function() {
        var $this = $(this);
        $this.css('margin-top', $this.parent().height() - $this.height())
        });
    </script>
</body>
</html>
