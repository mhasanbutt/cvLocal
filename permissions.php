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
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Setup</a></li>
            <li><a href="#">Permissions</a></li>
        </ul>
        <span class="title"><img src="images/permissions.png"> Permission Groups</span>
    </div>

    <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
        <samp class="stats" style="width:130px;"><span>01</span>Staff without Permission Group</samp>
        <samp class="stats" style="width:160px;"><span>01</span>Staff with Full  Employee Detail Access</samp>
        <samp class="stats showNewPermissions" style="width:90px;"><span>08</span>New Modules</samp>

        <form class="search" style="margin-left:10px;">
            <div class="byStaff">
                <input type="text" name="staffname" id="staffname" placeholder="Search by keyword">
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

        <a href="#" style="color:#FFF;background-color:#7DA7D9;background-image:url('images/groupPermission.png');margin-left:10px;">Assign Module Permissions</a>
        <a href="#" class="addServiceUser" style="color:#1f262a;background-color:#6DC77A;background-image:url('images/createNew.png');margin-left:10px;">New</a>
    </div>
</section>

<section class="contentBody noFooter">
    <section class="aniListing">
        <div class="scrollArea">
            <div class="content">
                <article>
                    <ul class="list-unstyled clearfix">
                        <li style="width:500px;">
                            <i>Title</i>
                            <span>Pharmacy</span>
                        </li>
                        <li style="width:calc(100% - 650px);">
                            <i>Date</i>
                            <span>04-03-2022</span>
                        </li>
                        <li style="width:50px;">
                            <a href="#" class="view" style="margin-top:10px;"></a>
                        </li>
                        <li style="width: 50px;">
                            <a href="jawascript:void();" class="gear" style="margin-top:10px;"></a>
                        </li>
                        <li style="width:50px;">
                            <a href="jawascript:void();" class="delete" style="margin-top:10px;"></a>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <div class="pagingSorting">
        <ul class="list-unstyled paging">
            <li><a href="#">Prev</a></li>
            <li class="current"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next</a></li>
        </ul>

        <div class="sorting">
            <div class="select">
                <select name="" id="">
                    <option value="">Sort By</option>
                </select>
            </div>

            <button type="button" style="background-color:#6B7884">A-Z</button>
            <button type="button"
                    style="margin-right:20px;background-color:#6B7884">Z-A
            </button>

            <div class="select">
                <select name="" id="">
                    <option value="">50 per page</option>
                </select>
            </div>

            <button type="button" style="background-color:#3DA492;">Apply</button>
            <button type="button">Reset
                Sorting
            </button>
        </div>
    </div>
</section>

<div class="pop" id="assignEmployeePop">
    <div>
        <section>
            <article style="width:1200px;">
                <span class="popFuse" data-close="assignEmployee"></span>
                <span class="title">Assign to Employee <strong>(Pharmacy)</strong></span>

                <ul class="list-unstyled clearfix form">
                    <li>
                        <span class="title">select position</span>
                        <select id="RefinePosition" name="RefinePosition">
                            <option value="" selected="selected">Select Department/Position</option>
                            <optgroup label="Administration">
                                <option value="1">Administrator</option>
                                <option value="2">Reception</option>
                                <option value="3">Accounts</option>
                                <option value="4">Manager</option>
                                <option value="5">Deputy Manager</option>
                                <option value="21">Practice Supervisor</option>
                                <option value="27">PA to the Directors</option>
                                <option value="28">Admin Assistant</option>
                                <option value="29">Admin Assistant &amp; Activities Coordinator</option>
                                <option value="30">Office Manager</option>
                                <option value="31">Registered Manager</option>
                                <option value="34">Director</option>
                                <option value="35">Director of Care</option>
                                <option value="36">specificRole</option>
                            </optgroup>
                            <optgroup label="Housekeeping">
                                <option value="6">Housekeeper</option>
                                <option value="7">Laundry</option>
                                <option value="8">Maintenance</option>
                            </optgroup>
                            <optgroup label="Care">
                                <option value="9">Healthcare Assistant</option>
                                <option value="10">Team Leader</option>
                                <option value="11">Registered Nurse</option>
                                <option value="12">Activities Coordinator</option>
                                <option value="16">CM</option>
                                <option value="17">HSM</option>
                                <option value="19">Lead Carer</option>
                                <option value="20">Support Worker</option>
                                <option value="23">Senior Care Assistant</option>
                                <option value="24">Assistant Senior Carer</option>
                                <option value="25">Nursing Associate</option>
                                <option value="26">Senior Registered</option>
                                <option value="33">Rota sequence test</option>
                            </optgroup>
                            <optgroup label="Auxiliary">
                                <option value="13">Driver</option>
                                <option value="14">Other</option>
                            </optgroup>
                            <optgroup label="Chef">
                                <option value="15">Chef</option>
                                <option value="18">Kitchen Helper</option>
                            </optgroup>
                            <optgroup label="Support">
                                <option value="37">Support</option>
                            </optgroup>
                        </select>
                    </li>
                </ul>
                <p>&nbsp;</p>
                <a href="jawascript:void();">Select All</a> | <a href="jawascript:void();">Deselect All</a>

                <ul class="list-unstyled clearfix profileSelection">
                    <li>
                        <input type="checkbox" id="employeeID1" hidden>
                        <label for="employeeID1">
                            <img src="images/emp-profile.jpg">
                        </label>
                        <span>George</span>
                    </li>
                </ul>

                <div class="ctas">
                    <button style="background-color:#7992B6;color:#FFF;">Update</button>
                    <button class="popClose" data-close="assignEmployee">Close</button>
                </div>
            </article>
        </section>
    </div>
</div>

<div class="pop" id="newPermissionsPop">
    <div>
        <section>
            <article style="width:450px;">
                <span class="popFuse" data-close="newPermissions"></span>
                <span class="title">New Permissions</span>

                Please make sure to update permissions.

                <div class="choices clearfix">
                    <span class="choice">
                        <label for="serviceUserSummary">Service User Summary</label>
                    </span>

                    <div class="options">
                        <input type="checkbox" name="serviceUserSummary" id="serviceUserSummaryDismissWarning" hidden>
                        <label for="serviceUserSummaryDismissWarning" class="dismiss">Dismiss Warning</label>
                    </div>
                </div>

                <div class="choices clearfix">
                    <span class="choice">
                        <label for="serviceUserSummary">Service User Summary</label>
                    </span>

                    <div class="options">
                        <input type="checkbox" name="serviceUserSummary" id="serviceUserSummaryAdd" hidden>
                        <label for="serviceUserSummaryAdd" class="add">Add</label>
                    </div>
                </div>

                <div class="ctas">
                    <button class="popClose" data-close="newPermissions">Close</button>
                </div>
            </article>
        </section>
    </div>
</div>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
<script>
    $('.gear').on('click', function () {
        $('#assignEmployeePop').css('display', 'table');
    });

    $('.showNewPermissions').on('click', function () {
        $('#newPermissionsPop').css('display', 'table');
    });

    $('.popFuse, .popClose').click(function () {
        var popID = $(this).attr('data-close');
        $('#' + popID + 'Pop').css('display', 'none');
        $('#' + popID).prop("checked", false);
    });

    $('.assocMap').on('click', function () {
        $(this).next('div').addClass('show');
    });

    $('.mapChoice i').on('click', function () {
        $(this).parent().removeClass('show');
    });

    $('input[name="dateRange"]').daterangepicker({
        "opens": "left",
        "singleDatePicker": true,
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });
    $('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY'));
    });

    $('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });
</script>
</body>
</html>
