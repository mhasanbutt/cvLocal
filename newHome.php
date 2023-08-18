<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Admin</a></li>
            </ul>
            <span class="title"><img src="images/construction.png"> Care Home Builder</span>
        </div>
    </section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content" style="padding-right: 20px;">
                <section class="newHomeForm clearfix">
                    <form class="newForm">
                        <ul class="list-unstyled clearfix col4">
                            <li>
                                <span class="title">Home Name</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">Address 1</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">Address 2</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">County</span>
                                <select class="select2">
                                    <option></option>
                                </select>
                            </li>
                            <li>
                                <span class="title">City</span>
                                <select class="select2">
                                    <option></option>
                                </select>
                            </li>
                            <li>
                                <span class="title">City</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">Post Code</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">Telephone</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">Manager's Email</span>
                                <input type="email">
                            </li>
                            <li>
                                <span class="title">Deputy Manager</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">Accounts Email</span>
                                <input type="email">
                            </li>
                            <li>
                                <span class="title">Newsletter Email</span>
                                <input type="email">
                            </li>
                            <li>
                                <ul class="list-unstyled clearfix">
                                    <li class="incrDecr" style="width:auto;">
                                        <label class="title">Registered Maximum Service users</label>
                                        <button type="button" class="counterBtn plus"></button>
                                        <button type="button" class="counterBtn minus"></button>
                                        <input type="text" name="ResidentHeight" id="ResidentHeight" value="170" class="number-only">
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="title">Home Logo</span>
                                <input type="file" id="logoUpload">
                                <label for="logoUpload">Upload</label>
                            </li>
                        </ul>

                        <span class="title">Invoice Detail <small>(Detail)</small></span>

                        <ul class="list-unstyled clearfix col4">
                            <li>
                                <span class="title">Home Name on invoice</span>
                                <input type="email">
                            </li>
                            <li>
                                <span class="title">address on invoice</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">email on invoice</span>
                                <input type="email">
                            </li>
                            <li>
                                <span class="title">telephone on invoice</span>
                                <input type="email">
                            </li>
                        </ul>

                        <span class="title">Panels <i>Add</i></span>

                        <ul class="list-unstyled clearfix col4">
                            <li>
                                <span class="title">Type</span>
                                <input type="email">
                            </li>
                            <li>
                                <span class="title">name</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">identifier</span>
                                <input type="email">
                            </li>
                            <li>
                                <span class="title">status</span>
                                <input type="email">
                            </li>
                        </ul>
                    </form>

                    <aside>
                        <span class="qrCode">
                            <img src="images/00000003.png">
                        </span>

                        <img src="images/familyApp.png" class="downloadApp">

                        <img src="images/staffApp.png" class="downloadApp">
                    </aside>
                </section>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>
</html>
