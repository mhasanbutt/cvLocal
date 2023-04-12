<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Rota</a></li>
            </ul>
            <span class="title"><img src="images/handshake.png" alt=""> Reconciliation</span>
        </div>
        <ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer searchField">
                    <input type="text" placeholder="Search by keyword">
                    <img src="images/magnifier-tool.svg" class="searchIcon svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Department</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Position</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer date">
                    <input type="text" name="dateRange" placeholder="Date">
                    <img src="images/calendar-icon.svg" class="calendar svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Floor</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer searchField">
                    <input type="text" placeholder="Search by payroll number">
                    <img src="images/magnifier-tool.svg" class="searchIcon svg">
                </div>
            </li>
        </ul>
        <div class="clearfix">
            <button type="button" class="searchButton">Search</button>
            <button type="button" class="defaultButton">Reset</button>
            <div class="pull-right applyCent">
                <label for="">Apply pay change to selected<br>employees in Percentage</label>
                <input type="text" name="" id="">
                <button>Apply</button>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="all" class="hidden">
                                    <label for="all"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </th>
                            <th>Payroll ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Current Payrate</th>
                            <th>New Payrate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt1" class="hidden">
                                    <label for="opt1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>106H</td>
                            <td>Selam Woldeab</td>
                            <td>Care</td>
                            <td>Team Leader</td>
                            <td>£15</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt12" class="hidden">
                                    <label for="opt12"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>11</td>
                            <td>Cati Barbu</td>
                            <td>Housekeeping</td>
                            <td>Housekeeper</td>
                            <td>£8</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt3" class="hidden">
                                    <label for="opt3"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>112</td>
                            <td>Rolca Kanyiki</td>
                            <td>Care</td>
                            <td>Night Care</td>
                            <td>£10</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt4" class="hidden">
                                    <label for="opt4"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>15</td>
                            <td>Maria Teresa Frias Ruiz</td>
                            <td>Care</td>
                            <td>Senior Care Assistant</td>
                            <td>£10</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt5" class="hidden">
                                    <label for="opt5"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>14H</td>
                            <td>Jennifer Bromfield</td>
                            <td>Care</td>
                            <td>Healthcare Assistant</td>
                            <td>£8</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt6" class="hidden">
                                    <label for="opt6"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>156</td>
                            <td>Arsema Simon</td>
                            <td>Care</td>
                            <td>Night Carer</td>
                            <td>£8</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt7" class="hidden">
                                    <label for="opt7"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>106H</td>
                            <td>Edita Vilckova</td>
                            <td>Administration</td>
                            <td>Reception</td>
                            <td>£8</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt8" class="hidden">
                                    <label for="opt8"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>213</td>
                            <td>Nilda Cuevas </td>
                            <td>Chef</td>
                            <td>Chef</td>
                            <td>£10</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt9" class="hidden">
                                    <label for="opt9"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>29KL</td>
                            <td>Mirian Maria </td>
                            <td>Housekeeping</td>
                            <td>Laundry</td>
                            <td>£6</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt10" class="hidden">
                                    <label for="opt10"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>100OL</td>
                            <td>Ivy Joy Monk</td>
                            <td>Housekeeping</td>
                            <td>Housekeeper</td>
                            <td>£8</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt11" class="hidden">
                                    <label for="opt11"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>254G</td>
                            <td>Saraswathi Bharathi</td>
                            <td>Chef</td>
                            <td>Chef</td>
                            <td>£10</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="opt12" class="hidden">
                                    <label for="opt12"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>219</td>
                            <td>Luwam Leake</td>
                            <td>Care</td>
                            <td>Night Carer</td>
                            <td>£8</td>
                            <td width="50"><input type="text" name="" id=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <button>Back</button>
        <button class="news_scores">Apply</button>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });

        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
