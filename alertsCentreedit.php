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
            <li><a href="#">Care</a></li>
            <li><a href="#">Alerts Centre</a></li>
        </ul>
        <span class="title"><img src="https://jawa.care-vision.co.uk/images/alert-centre.png"> Active / Deactive Alerts</span>
    </div>

    <ul class="diseases cleaerfix pull-right list-unstyled">
        <li><a href=""><img src="images/exclamation-mark.svg" class="svg">DNR</a></li>
        <li><a href=""><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</a></li>
        <li><a href=""><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</a></li>
    </ul>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            <ul class="alertsActiveDeact" data-note="To Activate/Deactivate an Alert, you will need a witness to verify.">
                <li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li><li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="dnacpr" id="dnacpr" hidden>
                    <label for="dnacpr">
                        <span>DNACPR</span>
                    </label>
                </li>
                <li>
                    <input type="checkbox" name="acp" id="acp" hidden>
                    <label for="acp">
                        <span>ACP (Advance Care Plan)</span>
                    </label>
                </li>
                
            </ul>
        </div>
    </div>
</section>

<div class="pop" id="witByPop">
    <div>
        <section>
            <article style="width:600px;">
                <span class="popFuse" data-close="witBy"></span>
                <span class="title">Tracheotomy Tube</span>

                <ul class="form col2 list-unstyled clearfix">
                    <li>
                        <span class="title">Tracheotomy Tube</span>
                        <input type="text" name="" id="" >
                    </li>
                    <li>
                        <span class="title">Tracheotomy Tube Size</span>
                        <input type="text" name="" id="">
                    </li>
                    <li>
                        <span class="title">Tracheotomy License in Place</span>
                        <input type="checkbox" id="license" hidden>
                        <label for="license"></label>
                    </li>
                    <li>
                        <span class="title">Tracheotomy License Date</span>
                        <input type="text" class="date">
                    </li>
                    <li>
                        <span class="title">Tracheotomy Change Date</span>
                        <input type="text" class="date">
                    </li>
                    <li>
                        <span class="title">Upload Attachment</span>
                        <input id="file" type="file" class="hidden">
                        <label for="file" class="uploadImg">Upload</label>
                    </li>
                    <li style="width:100%;">
                        <span class="title">Comments</span>
                        <textarea></textarea>
                    </li>
                </ul>

                <span class="note">A witness is required, to verify the activation / deactivation of an alert.</span>

                <ul class="form col2 list-unstyled clearfix">
                    <li>
                        <span class="title">Username</span>
                        <input type="text" name="" id="" >
                    </li>
                    <li>
                        <span class="title">Password</span>
                        <input type="password" name="" id="">
                    </li>
                </ul>

                <div class="ctas">
                    <button style="background-color:#7992B6;color:#FFF;">Save</button> <button class="popClose" data-close="witBy">Cancel</button>
                </div>
            </article>
        </section>
    </div>
</div>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/custom.js"></script>
<script>
    $('#activeAlert').click(function () {
        $('.newPopup').css('display', 'table');
    });

    $('.newPopup .close').click(function () {
        $('.newPopup').css('display', 'none');
    });

    $('.changeState').on('click', function () {
        if ($(this).is(':checked')) {
            $('.popupContainer').addClass('moveLeft');
            $('.secondary').css('display', 'inline-block');
        }
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