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
        <span class="title"><img src="images/subscriptionsRestriction.png"> All Subscriptions</span>
    </div>

    <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
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

        <a href="#" class="addServiceUser" style="color:#1f262a;background-color:#6DC77A;background-image:url('images/paper-plane.png');margin-left:10px;">Email</a>
        <a href="#" class="addServiceUser" style="background-image:url('images/exportToFile.png');margin-left:10px;">Export</a>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content" style="padding:10px;">
            <div class="allSubscriptions newForm">
                <div class="title">Jawa Group <span>jawa.care-vision.co.uk</span></div>

                <div class="misc">
                    <span class="add">Add</span>

                    <ul class="list-unstyled clearfix col5">
                        <li>
                            <span class="title">Director Name</span>
                            <input type="text">
                        </li>
                        <li>
                            <span class="title">Address</span>
                            <input type="text">
                        </li>
                        <li>
                            <span class="title">Mobile</span>
                            <input type="text">
                        </li>
                        <li>
                            <span class="title">Telephone</span>
                            <input type="text">
                        </li>
                        <li>
                            <span class="title">Email</span>
                            <input type="text">
                        </li>
                        <li style="width:100%;">
                            <textarea placeholder="Write your comments here"></textarea>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="subscriptionsRestriction all">
                <article class="clearfix">
                    <span class="companyName"><i><samp>Home</samp> <strong>1</strong> <br>Oatleight</i></span>

                    <article>
                        <span style="width:200px;">
                            <i>Manager</i>
                            Sherine Jawaheer
                        </span>
                        <span style="width:250px;">
                            <i>Manager's Email</i>
                            Sherine@jawagroup.co.uk
                        </span>
                        <span style="width:200px;">
                            <i>Deputy Manager</i>
                            -
                        </span>
                        <span style="width:calc(100% - 800px);">
                            <i>Address</i>
                            212 Anerley Road
                        </span>
                        <span style="width:150px;">
                            <i>Telephone</i>
                            234 34532 234523
                        </span>
                    </article>

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

                <article class="clearfix">
                    <span class="companyName"><i><samp>Home</samp> <strong>2</strong> <br>Oat ley</i></span>

                    <article>
                        <span style="width:200px;">
                            <i>Manager</i>
                            Sherine Jawaheer
                        </span>
                        <span style="width:250px;">
                            <i>Manager's Email</i>
                            Sherine@jawagroup.co.uk
                        </span>
                        <span style="width:200px;">
                            <i>Deputy Manager</i>
                            -
                        </span>
                        <span style="width:calc(100% - 800px);">
                            <i>Address</i>
                            212 Anerley Road
                        </span>
                        <span style="width:150px;">
                            <i>Telephone</i>
                            234 34532 234523
                        </span>
                    </article>

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
        <button>Back</button> <button class="green">save</button>
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
