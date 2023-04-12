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
        .scroll-wrapper {
            bottom: 60px;
        }

        .ctas {
            position: absolute;
            bottom: 10px;
            left: 10px;
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Subscription</a></li>
        </ul>
        <span class="title"><img src="images/subscriptionsRestriction.png">Subscription Restriction</span>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content" style="padding:10px;">
            <div class="subscriptionsRestriction">
                <article class="clearfix">
                    <span class="companyName"><i>Care Vision</i></span>

                    <ul class="list-unstyled clearfix">
                        <li class="active"><span>Accounts</span></li>
                        <li class="active"><span>Archive mode</span></li>
                        <li class="active"><span>care</span></li>
                        <li class="active"><span>chef</span></li>
                        <li class="active"><span>housekeeping & maintenance</span></li>
                        <li class="active"><span>hr training</span></li>
                        <li class="active"><span>medication</span></li>
                        <li class="active"><span>mobile / tablet protection license</span></li>
                        <li class="active"><span>nurse call</span></li>
                        <li class="active"><span>reception / senior staff module</span></li>
                        <li><span>rota - staff schedule</span></li>
                        <li><span>time & attendance / clocking</span></li>
                        <li><span>visitor book</span></li>
                    </ul>
                </article>
            </div>
        </div>
    </div>

    <div class="ctas" style="right:10px;">
        <button>Back</button>
    </div>
</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>
<script src="js/custom.js"></script>
<script>
    $('textarea#tiny').tinymce({ height: 300, });

    $(".select2").select2();

    $('[type=checkbox]').on('click', function(){
        let chkID = $(this).attr('id');
        if($(this).is(':checked')){
            $(this).parent().next('ul').css('display', 'block');
            $(this).parent().next('ul').find('label').css('pointer-events', 'all');
        } else {
            $(this).parent().next('ul').css('display', 'none');
            $(this).parent().next('ul').find('[type=checkbox]').prop("checked", false);
            $(this).parent().next('ul').find('label').css('pointer-events', 'none');
        }
    });

    $('[name*=All]').on('click', function(){
        let buttonName = $(this).attr('data-module');
        let permitInput = $(this).attr('name').replace('All','');
        $('.' +buttonName+ '').find('[id*=' +permitInput+ ']').prop("checked", true);
    });

    $('.collapseIt').click(function(){
        $(this).parent().toggleClass('collapsed');
    });
    </script>
</body>
</html>
