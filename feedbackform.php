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
                <li><a href="#">Admin</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
            <span class="title"><img src="images/feedback.png" alt="">New Feedback</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <form action="" class="inBodyForm form-horizontal">
                    <div class="form-group date">
                        <label for="date" class="control-label col-md-3">Date</label>
                        <div class="col-md-3">
                            <input type="text" name="date" id="date" class="datepicker">
                            <img src="images/calendar-multi.png" alt="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="control-label col-md-3">Feedback Left By</label>
                        <div class="col-md-3">
                            <div class="select">
                                <select name="" id="">
                                    <option value="">Service User</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="select">
                                <select name="" id="">
                                    <option value="">Mr Tim Shermin</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="control-label col-md-3">Feedback Left For</label>
                        <div class="col-md-3">
                            <div class="select">
                                <select name="" id="">
                                    <option value="">Staff</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="select">
                                <select name="" id="">
                                    <option value="">Mrs Kristine Bagherbilli</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="control-label col-md-3">Feedback</label>
                        <div class="col-md-3">
                            <fieldset class="rate">
                                <input type="radio" id="rating5" name="rating" value="5" /><label for="rating5" title="5 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="4 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label for="rating3" title="3 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="2 stars"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label for="rating1" title="1 star"></label>
                            </fieldset>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Comments</label>
                        <div class="col-md-6">
                            <textarea name="" id=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Feedback Saved By</label>
                        <div class="col-md-6">
                            <span class="formInfo">Rishi R.</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button class="btn default">Close</button>
                <button class="btn save">Save</button>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>