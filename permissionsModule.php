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
            <li><a href="#">Setup</a></li>
            <li><a href="#">Permissions</a></li>
        </ul>
        <span class="title"><img src="images/permissions.png">Assign Module Permissions</span>
    </div>

    <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
        <samp class="stats" style="width:90px;"><span>08</span>New Modules</samp>

        <div class="searchContainer">
            <form>
                <select class="select2 select2GlobalSearch">
                    <option value="" disabled selected>Search Module</option>
                </select>
            </form>
        </div>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            <div class="aniSection">
                <aside style="width:100%;">
                    <section class="permissions modules">
                        <article>
                            <span class="title" style="margin-bottom:50px;">Service User Summary</span>

                            <div class="choices clearfix">
                                <ul class="list-unstyled clearfix serviceUserSummary" hidden>
                                    <li>
                                        <div class="title">4121333</div>
                                        <div class="options">
                                            <ul class="list-unstyled clearfix">
                                                <li>
                                                    <button type="button" name="ViewAll" data-module="serviceUserSummary">select all</button>
                                                    <input type="checkbox" name="4121333" id="4121333View" hidden>
                                                    <label for="4121333View" class="view">View</label>
                                                </li>
                                                <li>
                                                    <button type="button" name="AddAll" data-module="serviceUserSummary">select all</button>
                                                    <input type="checkbox" name="4121333" id="4121333Add" hidden>
                                                    <label for="4121333Add" class="add">Add</label>
                                                </li>
                                                <li>
                                                    <button type="button" name="EditAll" data-module="serviceUserSummary">select all</button>
                                                    <input type="checkbox" name="4121333" id="4121333Edit" hidden>
                                                    <label for="4121333Edit" class="edit">Edit</label>
                                                </li>
                                                <li>
                                                    <button type="button" name="DeleteNotesAll" data-module="serviceUserSummary">select all</button>
                                                    <input type="checkbox" name="4121333" id="4121333DeleteNotes" hidden>
                                                    <label for="4121333DeleteNotes" class="delete">Delete Note</label>
                                                </li>
                                                <li>
                                                    <button type="button" name="DismissWarningAll" data-module="serviceUserSummary">select all</button>
                                                    <input type="checkbox" name="4121333" id="4121333DismissWarning" hidden>
                                                    <label for="4121333DismissWarning" class="dismiss">Dismiss Warning</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </section>
                </aside>
            </div>
        </div>
    </div>

    <div class="ctas" style="right:10px;">
        <button>Back</button> <button class="green">Update &amp; Save All</button>  <button class="blue">Apply Current Permissions</button>
    </div>
</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/custom.js"></script>
<script>
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
