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
    <?php include("header.php");?>
    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Care</a></li>
            </ul>
            <span class="title"><img src="images/groupActivity.png"> Group Activities</span>
        </div>
    </section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
                <div class="groupActivity clearfix">
                    <article class="formSide">
                        <div class="scrollArea">
                            <div class="form">
                                <ul class="list-unstyled clearfix">
                                    <li>
                                        <label for="">Activity Title</label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Location</label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Associate Other Staff</label>
                                        <select name="" id="" class="select2" multiple="multiple">
                                            <option value="">Test User</option>
                                            <option value="">Test User</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label for="">Arts &amp; Crafts</label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Activities</label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li hidden>
                                        <label for="">Other <small>(Activities)</small></label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Games</label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Exercise</label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Pet Visit</label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Engagement Needs</label>
                                        <input type="text" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Attachment</label>
                                        <input type="file" name="" id="">
                                    </li>
                                    <li>
                                        <label for="">Added By</label>
                                        <span class="data">Rishi R.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="ctas">
                            <button>Back</button> <button class="green">Save</button>
                        </div>
                    </article>

                    <article class="chooseServiceUsers">
                        <span class="activateUsers">
                            <input type="checkbox" name="" id="assocUsers" hidden>
                            <label for="assocUsers">Associate Service User(s)</label>
                        </span>

                        <div class="scrollArea">
                            <ul class="list-unstyled">
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="clearfix">
                                    <div class="profile">
                                        <span class="img"></span> <span class="name">Mr Tim Shermin</span>
                                    </div>

                                    <span class="remove">Remove</span>

                                    <ul class="list-unstyled form">
                                        <li>
                                            <label>Consent(Status)</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Expressed Via</label>
                                            <select name="" id="">
                                                <option value="">Some Option</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label>Note</label>
                                            <input type="text" name="" id=" ">
                                        </li>

                                        <li>
                                            <label>Mood</label>
                                            
                                            <ul class="list-unstyled moods clearfix">
                                                <li>
                                                    <input type="radio" name="mood" id="mood1" hidden>
                                                    <label for="mood1"><img src="images/happy.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood2" hidden>
                                                    <label for="mood2"><img src="images/sad.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood3" hidden>
                                                    <label for="mood3"><img src="images/surprised.png"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="mood" id="mood4" hidden>
                                                    <label for="mood4"><img src="images/angry.png"></label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function(){
            if($('.activateUsers #assocUsers').is(":checked")) {
                $('.chooseServiceUsers ul').css('pointer-events', 'all');
            } else {
                $('.chooseServiceUsers ul').css('pointer-events', 'none');
            }

            $('.select2').select2();
        });

        $('.activateUsers #assocUsers').on('change', function(){
            if($(this).is(":checked")) {
                $('.chooseServiceUsers ul').css('pointer-events', 'all');
            } else {
                $('.chooseServiceUsers ul').css('pointer-events', 'none');
            }
        });

        $('.chooseServiceUsers .profile').click(function(){
            $(this).parent().addClass('open');
            $(this).siblings('.remove, .form').addClass('active');
        });

        $('.chooseServiceUsers .remove').click(function(){
            $(this).parent().removeClass('open');
            $(this).siblings('.form').removeClass('active');
            $(this).removeClass('active');
        });
    </script>
</body>
</html>
