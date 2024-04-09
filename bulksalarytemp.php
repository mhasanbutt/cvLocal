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
        .styletop{
            margin-top: 70px;
            position: relative;
            left: 8px;
        }
        .bulktable{
            width: 100%;
            padding: 88px;
            border-radius: 6px;

        }
        .bulktable, tr, td{
            text-align: center;
            padding: 5px;
        }
        th {
            border: none;
            border-radius: 2px;
            background-color: rgb(183, 228, 248);
            border-collapse: collapse;
            padding: 4px;
            text-align: center;
        }
        .tble{
            border-radius: 10px;
        }
        .tab-head1, .tab-data1{
            text-align: left;
        }

        .listsyle{
            margin-right: 45px;
        }
        .tablediv{
            padding: 6px;
            border: 1px solid lightgrey;
            border-radius: 8px;
        }
        .select1{
            border: none;
        }
        .btn-container{
            height: 42px;
            padding-right: 20px;
            position: relative;
            top: 58px;
            left: 378px;
        }
        .btnform{
            float: right;
            height: 42px;
            border-radius: 6px;
            background-color: #3F4253;
            padding: 5px;
            margin-left: 10px;
        }
        .ulforbtns{
            height: 32px;
            margin: 0 auto;
            float: left;
            padding: 0;
        }
        .liforbtn{
            padding: 0 5px;
            float: left;
            height: 32px;
            position: relative;
            list-style-type: none;
        }
        .select3{
            border: 1px rgba(161, 173, 176, 0.8) solid ;
            border-radius: 4px;
            height: 32px;
            padding: 0 10px;
            box-shadow: 0 0 4px 0 rgba(63, 66, 83, 0.1);
            background-color: #FFF;
            position: relative;
            z-index: 1;
            float: left;
        }
        .btn1{
            padding-left: 10px;
            color: #FFF;
            background-color: #6DC679;
            height: 32px;
            border-radius: 4px;
            border: 0;
            padding: 0 10px;
            float: left;
            margin-left: 8px;
            line-height: 32px;
        }
        .btn2{
            padding-left: 10px;
            color: #FFF;
            background-color: rgb(255, 205,96);
            height: 32px;
            border-radius: 4px;
            border: 0;
            padding: 0 10px;
            float: left;
            margin-left: 8px;
            line-height: 32px;
        }
        .menudrop{
            position: relative;
            left: 10px;
        }
        .td1{
            border: 1px lightgrey solid;
            padding: 3px 20px 3px 20px;
            border-radius: 3px;
        }
        .td2{
            border: 1px lightgrey solid;
            border-radius: 3px;
            padding: 3px 23px 3px 23px;
        }
        .td3{
            border: 1px lightgrey solid;
            border-radius: 3px;
            padding: 3px 27px 3px 27px;
        }
        .td4{
            border: 1px lightgrey solid;
            border-radius: 3px;
            padding: 3px 23px 3px 23px;
        }



    </style>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Rota</a></li>
        </ul>
        <span class="title"><img src="images/salary.png">Bulk Salary Change</span>
    </div>

    <div class="filtersSearch clearfix autoWidth">
        <form>
            <div class="byStaff">
                <input type="text" name="staffname" id="staffname" placeholder="Search by service user">
                <button>search</button>
            </div>

            <span class="filters">Filters</span>

            <div class="allFilters">
                <ul class="list-unstyled">
                    <li>
                        <div class="form-group">
                            <label for="">Choose Service User</label>
                            <div class="select">
                                <select name="" id="">
                                    <option value="Floor 1">Service User 1</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>

                <button class="green">Search</button>
                <button>Reset Filters</button>
            </div>
        </form>

        <div class="dropMenu menudrop">
            <span class="openDropMenu">Action</span>
            <ul class="list-unstyled">
                <li><a href="#" class="print_all_details print">Print Full Detail</a></li>
                <li><a href="#" class="print_all_tabs print">Print</a></li>
            </ul>
        </div>
    </div>

    <div class="btn-container">
        <form class="btnform">
            <ul class="ulforbtns">
                <li class="liforbtn">
                    <select class="select3">
                        <option>Select Increase or Decrease</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </li>
                <li class="liforbtn">
                    <select class="select3">
                        <option>Increase by Amount/Percentage</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </li>
                <li class="liforbtn">
                    <select class="select3">
                        <option>Select Payrate</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </li>
                <li class="liforbtn">
                    <select class="select3">
                        <option>Percentage/Amount Value</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </li>

            </ul>
            <button class="btn1">Set Value</button>
            <button class="btn2">Apply</button>


        </form>

    </div>

    <div class="generalListing styletop">
        <section>
            <ul class="list-unstyled withCheckbox clearfix">
                <li>
                    <input type="checkbox" id="checkbox" hidden>
                    <label for="checkbox"></label>
                </li>
                <li class="listsyle">
                    <span class="title">Name</span>
                    Anna Baxter
                </li>
                <li>
                    <input type="checkbox" id="checkbox" hidden>
                    <label for="checkbox"></label>
                </li>
                <li>
                    <span class="title">DATE OF BIRTH</span>
                    12.10.1989
                </li>
                <li>
                    <span class="title">PAYROLL NUMBER</span>
                    1
                </li>
                <li>
                    <span class="title">DATE OF JOINING</span>
                    21.09.2023
                </li>
                <li>
                    <span class="title">EMPLOYED FOR</span>
                    2 years 2 months
                </li>
            </ul>
            <div class="tablediv">
                <table class="bulktable tble">
                    <tr>
                        <th class="tab-head1">Payrate/Salary</th>
                        <th>Current</th>
                        <th>Modification</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>New Value</th>
                    </tr>
                    <tr>
                        <td class="tab-data1">Salary</td>
                        <td>24.00</td>
                        <td>
                        <select class="select1">
                            <option>Increase</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                        </td>
                        <td>
                            <select class="select1">
                                <option>Percentage</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </td>
                        <td>3</td>
                        <td>
                            <span class="td1">
                                25.223
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tab-data1">Weekend Rate</td>
                        <td>12.00</td>
                        <td>
                            <select class="select1">
                                <option>Increase</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </td>
                        <td>
                            <select class="select1">
                                <option>Percentage</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </td>
                        <td>3</td>
                        <td>
                            <span class="td2">
                                12.15
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tab-data1">Overtime</td>
                        <td>11.00</td>
                        <td>
                            <select class="select1">
                                <option>Increase</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </td>
                        <td>
                            <select class="select1">
                                <option>Percentage</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </td>
                        <td>3</td>
                        <td>
                            <span class="td3">
                                9.39
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tab-data1">Holiday/Leave</td>
                        <td>9.30</td>
                        <td>
                            <select class="select1">
                                <option>Increase</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </td>
                        <td>
                            <select class="select1">
                                <option>Percentage</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </td>
                        <td>3</td>
                        <td>
                            <span class="td4">
                                15.00
                            </span>
                        </td>
                    </tr>

                </table>
            </div>
        </section>
    </div>


<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
<script>
    $(".question").on('click', function(){
        $(".question").next('ul').not($(this).next('ul')).hide();
        let offset = $(this).offset();
        $(this).next('ul').css({top: offset.top, left: offset.left}).fadeToggle();
    });
</script>
</body>
</html>
