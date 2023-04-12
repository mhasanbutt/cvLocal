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
                <li><a href="#">Survey</a></li>
            </ul>
            <span class="title"><img src="images/survey.png" alt="">New survey</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <form action="" class="inBodyForm form-horizontal">
                    <div class="form-group">
                        <label for="title" class="control-label col-md-3">Survey Heading</label>
                        <div class="col-md-3">
                            <input type="text" name="title" id="title" placeholder="Example: Visitor Satisfaction Survey">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="control-label col-md-3">Survey Sub-heading</label>
                        <div class="col-md-6">
                            <textarea placeholder="Example: Your responses will help us provide the best service possible"></textarea>
                        </div>
                    </div>

                    <div class="well">
                        <div class="form-group">
                            <label for="date" class="control-label col-md-3">Question 1</label>
                            <div class="col-md-4">
                                <input type="text" name="" id="">
                            </div>
                            <div class="col-md-3">
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">Star Rating</option>
                                        <option value="">Multi Choise</option>
                                    </select>
                                    <img src="images/left-arrow.svg" class="svg">
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <button type="button" class="btn icon red"><img src="images/removeit.png" alt=""></button>
                            </div>
                        </div>
                    </div>

                    <div class="well">
                        <div class="form-group">
                            <label for="date" class="control-label col-md-3">Question 2</label>
                            <div class="col-md-4">
                                <input type="text" name="" id="">
                            </div>
                            <div class="col-md-3">
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">Star Rating</option>
                                        <option value="">Multi Choise</option>
                                    </select>
                                    <img src="images/left-arrow.svg" class="svg">
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <button type="button" class="btn icon blue"><img src="images/add.png" alt=""></button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Survey Conducted by</label>
                        <div class="col-md-6">
                            <span class="formInfo">Rishi R.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Heading Above Comments Box</label>
                        <div class="col-md-3">
                            <input type="text" name="" id="">
                        </div>
                    </div>

                    <hr class="show">

                    <div class="form-group">
                        <label for="" class="control-label col-md-3">&nbsp;</label>
                        <div class="col-md-3">
                            <button type="button" class="btn orange preview">Preview Survey</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Publish</label>
                        <div class="col-md-3">
                            <span class="toggles fixed">
                                <input type="checkbox" name="physicalCopy" id="physicalCopy" class="ios-toggle">
                                <label for="physicalCopy" class="checkbox-label" data-off="NO" data-on="YES"></label>
                            </span>
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

    <div class="modal fade" id="preview" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Survey Preview</h4>
                </div>
                <div class="modal-body">
                    <h2 class="text-center">Visitor Satisfaction Survey</h2>
                    <legend>Your responses will help us provide the best service possible</legend>
                    <form class="inBodyForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Are you satisfied?</label>
                                    <ul class="radioList list-unstyled">
                                        <li>
                                            <input type="radio" name="satisfied" id="yes">
                                            <label for="yes">
                                                Yes
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" name="satisfied" id="no">
                                            <label for="no">
                                                No
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" name="satisfied" id="na">
                                            <label for="na">
                                                N/A
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>How much satisfied are you?</label>
                                    <fieldset class="rate large">
                                        <input type="radio" id="rating5" name="rating" value="5" /><label for="rating5" title="5 stars"></label>
                                        <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="4 stars"></label>
                                        <input type="radio" id="rating3" name="rating" value="3" /><label for="rating3" title="3 stars"></label>
                                        <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="2 stars"></label>
                                        <input type="radio" id="rating1" name="rating" value="1" /><label for="rating1" title="1 star"></label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Feel free to express your experience</label>
                                    <textarea name="" id=""></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(".preview").click(function() {
            $('#preview').modal();
        });
    </script>
</body>
</html>