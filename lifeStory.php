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
            <li><a href="#">Care</a></li>
            <li><a href="#">Life Story</a></li>
        </ul>
        <span class="title"><img src="https://jawa.linksdev.co.uk/images/life-stories.png">Childhood Life Story</span>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content" style="padding:10px;">
            <div class="lifeStory">
                <div class="newForm">
                    <textarea id="tiny"></textarea>

                    <ul class="list-unstyled clearfix col3">
                        <li>
                            <span class="title">Completed By</span>
                            <select>
                                <option></option>
                            </select>
                        </li>
                    </ul>

                    <ul class="list-unstyled clearfix col3">
                        <li>
                            <span class="title">Upload images / videos related to life story</span>
                            <button>upload</button>
                        </li>
                    </ul>

                    <div class="attachments">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <span class="fileName image">123.jpg</span>
                                <input type="text" placeholder="Caption">
                                <i class="delete"></i>
                            </li>
                            <li>
                                <span class="fileName video">xyz.mov</span>
                                <input type="text" placeholder="Caption">
                                <i class="delete"></i>
                            </li>
                        </ul>
                    </div>
                </div>

                <aside>
                    <div class="questionsProgress" data-progress="1 of 11 Sections">
                        <span style="width:40%"></span>
                    </div>

                    <center>
                        <button class="prev">Previous<i></i></button> <button class="next">Next<i></i></button>
                    </center>

                    Life Story about Childhood may involve some question like;

                    <ul class="list-unstyled possibleQuestions">
                        <li>What does Batu prefer to be called?</li>
                        <li>Where Batu was born?</li>
                        <li>Where did Batu grow up?</li>
                    </ul>

                </aside>
            </div>
        </div>
    </div>

    <div class="ctas" style="right:10px;">
        <button>Back</button> <button class="blue">Save as draft</button>
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
