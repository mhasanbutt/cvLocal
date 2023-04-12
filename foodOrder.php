<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php include("header.php");?>

    <?php include("sideNav.php");?>

    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Chef</a></li>
            </ul>
            <span class="title">Food Order</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="ProfileInfo">
                    <img src="images/temp-picture.jpg" class="picture">
                    <span class="profileImg"><img src="images/photo-camera.svg" class="svg"></span>
                    <ul class="list-unstyled">
                        <li>
                            <span>Service User Name</span><br>
                            Terrance Edwards
                        </li>
                        <li>
                            <span>Date of Birth</span><br>
                            05-04-1974
                        </li>
                        <li>
                            <span>Client No.</span><br>
                            5921583
                        </li>
                        <li>
                            <span>Location</span><br>
                            Oxford St.
                        </li>
                    </ul>
                </div>
                <form class="inBodyForm form-horizontal">
                    <div class="form-group date">
                        <label class="col-sm-4 control-label">Meal Date</label>
                        <div class="col-md-3">
                            <input type="text" name="dateRange">
                            <img src="images/calendar-icon.svg" class="svg">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Meal Time</label>
                        <div class="col-md-3">
                            <div class="select">
                                <select>
                                    <option>Breakfast</option>
                                    <option>Lunch</option>
                                    <option>Dinner</option>
                                    <option>Snack</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Select Meal</label>
                        <div class="col-md-3">
                            <button type="button" class="selectFood btn">Click Here</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Select Desert</label>
                        <div class="col-md-3">
                            <button type="button" class="selectFood btn">Click Here</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Select Drink</label>
                        <div class="col-md-3">
                            <button type="button" class="selectFood btn">Click Here</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Additional Comments</label>
                        <div class="col-md-6">
                            <textarea></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Add to Chef's To-Do-List</label>
                        <div class="col-md-3">
                            <span class="toggles fixed">
                                <input type="checkbox" name="toDoList" id="toDoList" class="ios-toggle">
                                <label for="toDoList" class="checkbox-label" data-off="NO" data-on="YES"></label>
                            </span>
                        </div>
                    </div>
                </form>
                <article class="note text-center">
                    THIS DECISION WAS TAKEN WITH THE SERVICE USER
                </article>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-4">
                <button>Back</button>
                <button class="save">Save</button>
            </div>
            <div class="col-md-4 col-md-offset-4 text-right">
                <div class="form-inline">
                    <label>Service Users</label>
                    <div class="select">
                        <select>
                            <option>Mrs. Bertha</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="largeImgOverlay"></div>
    <div class="foodLargeImg"><span><img src="images/close.svg" class="svg"></span></div>
    <div class="foodSelection">
        <h4>Food Menu</h4>
        <span class="closeFoodSelection"><img src="images/close.svg" class="svg"></span>
        <div class="scrollArea">
            <ul class="list-unstyled">
                <li>
                    <span class="FoodName">Food Name</span>
                    <input id="food1" type="checkbox" class="hidden">
                    <label for="food1"><img src="images/tick.svg" class="svg"></label>
                    <span class="expand"><img src="images/fullscreen.svg" class="svg"></span>
                    <img src="images/foodImg.jpg">
                </li>
                <li>
                    <span class="FoodName">Food Name</span>
                    <input id="food2" type="checkbox" class="hidden">
                    <label for="food2"><img src="images/tick.svg" class="svg"></label>
                    <span class="expand"><img src="images/fullscreen.svg" class="svg"></span>
                    <img src="images/foodImg2.jpg">
                </li>
                <li>
                    <span class="FoodName">Food Name</span>
                    <input id="food3" type="checkbox" class="hidden">
                    <label for="food3"><img src="images/tick.svg" class="svg"></label>
                    <span class="expand"><img src="images/fullscreen.svg" class="svg"></span>
                    <img src="images/foodImg3.jpg">
                </li>
                <li>
                    <span class="FoodName">Food Name</span>
                    <input id="food4" type="checkbox" class="hidden">
                    <label for="food4"><img src="images/tick.svg" class="svg"></label>
                    <span class="expand"><img src="images/fullscreen.svg" class="svg"></span>
                    <img src="images/foodImg4.jpg">
                </li>
                <li>
                    <span class="FoodName">Food Name</span>
                    <input id="food5" type="checkbox" class="hidden">
                    <label for="food5"><img src="images/tick.svg" class="svg"></label>
                    <span class="expand"><img src="images/fullscreen.svg" class="svg"></span>
                    <img src="images/foodImg5.jpg">
                </li>
                <li>
                    <span class="FoodName">Food Name</span>
                    <input id="food6" type="checkbox" class="hidden">
                    <label for="food6"><img src="images/tick.svg" class="svg"></label>
                    <span class="expand"><img src="images/fullscreen.svg" class="svg"></span>
                    <img src="images/foodImg6.jpg">
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="foot text-right">
            <button>Save</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    $('.selectFood').click(function(){
        $('.overlay').addClass('active');
        $('.foodSelection').addClass('show');
    });
    $(document).on('click','.foodLargeImg span',function(){
        $(this).parent().removeClass('show');
        $('.largeImgOverlay').removeClass('active');
        $(this).parent().html('<span><img src="images/close.svg" class="svg"></span>');
        ShowSvgImage();
    });
    $('.expand').click(function(){
        $('.largeImgOverlay').addClass('active')
        $(this).next('img').clone().appendTo('.foodLargeImg');
        $('.foodLargeImg').addClass('show');
    });
    $('.closeFoodSelection').click(function(){
        $(this).parent().removeClass('show');
        $('.overlay').removeClass('active');
    });
    </script>
</body>
</html>
