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
                <li><a href="#">Setup</a></li>
            </ul>
            <span class="title"><img src="images/forms.png" alt=""> Custom Forms</span>
        </div>
    </section>

    <section class="contentBody noBg noFooter">
        <div class="scrollArea">
            <div class="content">
                <form class="createForm newForm">
                    <section>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <span class="title">Form Title</span>
                                <input type="text">
                            </li>
                            <li>
                                <span class="title">Form Description</span>
                                <input type="text">
                            </li>
                        </ul>
                    </section>

                    <section class="columnSelection">
                        <ul class="list-unstyled clearfix">
                            <li>
                                <input type="radio" name="columns" id="oneColumn">
                                <label for="oneColumn">
                                    <ul class="list-unstyled clearfix"><li></li></ul>
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="columns" id="twoColumn">
                                <label for="twoColumn">
                                    <ul class="list-unstyled clearfix"><li></li><li></li></ul>
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="columns" id="threeColumn">
                                <label for="threeColumn">
                                    <ul class="list-unstyled clearfix"><li></li><li></li><li></li></ul>
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="columns" id="fourColumn">
                                <label for="fourColumn">
                                    <ul class="list-unstyled clearfix"><li></li><li></li><li></li><li></li></ul>
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="columns" id="fiveColumn">
                                <label for="fiveColumn">
                                    <ul class="list-unstyled clearfix"><li></li><li></li><li></li><li></li><li></li></ul>
                                </label>
                            </li>
                        </ul>
                    </section>

                    <section>
                        <div class="sortButtons">
                            <div class="sortOrder">
                                <input type="number" value="1">
                            </div>
                            <div class="buttons">
                                <button class="addSectionTitle"></button>
                                <button class="addSection"></button>
                            </div>
                        </div>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <span class="title">Section Title</span>
                                <input type="text">
                            </li>
                        </ul>
                        <div class="controls clearfix">
                            <span class="delete"></span>
                        </div>
                    </section>

                    <section>
                        <ul class="list-unstyled clearfix">
                            <li class="elementSelector">
                                <span class="title">Select form element type</span>
                                <select>
                                    <option>Drop-down</option>
                                </select>
                            </li>
                            <li>
                                <span class="title">Question / Title</span>
                                <input type="text">
                            </li>
                        </ul>

                        <div class="options">
                            <ul class="list-unstyled clearfix">
                                <li data-number="1.">
                                    <input type="radio" name="default" id="default1"> <label for="default1">Default</label>
                                    <input type="text" placeholder="Option 1"> <i class="remove"></i>
                                </li>
                                <li data-number="2.">
                                    <input type="radio" name="default" id="default2"> <label for="default2">Default</label>
                                    <input type="text" placeholder="Option 1"> <i class="remove"></i>
                                </li>
                            </ul>

                            <button>Add Option</button>
                        </div>

                        <div class="controls clearfix">
                            <input type="text" placeholder="Description (optional)">

                            <input type="checkbox" id="required" hidden>
                            <label for="required">Required</label>

                            <span class="delete"></span>

                            <span class="duplicate"></span>
                        </div>
                    </section>

                    <section>
                        <ul class="list-unstyled clearfix">
                            <li class="elementSelector">
                                <span class="title">Select form element type</span>
                                <select>
                                    <option>Text Box</option>
                                </select>
                            </li>
                            <li>
                                <span class="title">Question / Title</span>
                                <input type="text">
                            </li>
                        </ul>

                        <div class="controls clearfix">
                            <input type="text" placeholder="Description (optional)" class="setDefaultValue">
                            <input type="text" placeholder="Set Default Value (optional)">

                            <input type="checkbox" id="required" hidden>
                            <label for="required">Required</label>

                            <span class="delete"></span>

                            <span class="duplicate"></span>
                        </div>
                    </section>

                    <div class="ctas">
                        <button>Back</button> <button class="green">Save</button> <button class="blue">Save &amp; Reload</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>