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
        .contentBody>.scroll-wrapper {
            bottom: 60px;
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Reports</a></li>
        </ul>
        <span class="title"><img src="images/surveyIcon.png"> Activities</span>
    </div>

    <div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
        <form class="search" style="margin-left:10px;">
            <div class="byStaff">
                <input type="text" name="staffname" id="staffname" placeholder="Search by service user">
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

        <a href="#" style="background-color:#4477A4;background-image:url('images/exportToFile.png');margin-left:10px;">Export</a>
    </div>
</section>

<section class="contentBody noFooter">
    <div class="scrollArea">
        <div class="content">
            Recreation & well-being encounters for selected period ( <strong>March 2023</strong> )

            <div class="generalListing">
                <section class="withTitle">
                    <span class="title">Service User name 1</span>

                    <ul class="list-unstyled clearfix activities">
                        <li style="width:50px;">
                            <a href="#" class="eye"></a>
                        </li>
                        <li class="helpTip">
                            <span class="title">Pet</span>
                            80
                            <div class="tTText" style="height:130px;left:auto;right:80%;">
                                <div class="scrollArea">
                                    <span class="subCat">Pet Name <i>00</i></span>
                                    <span class="subCat">Petted <i>00</i></span>
                                    <span class="subCat">Animal care <i>00</i></span>
                                    <span class="subCat">Animal Therapy <i>00</i></span>
                                    <span class="subCat">Watched <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Moments</span>
                            80
                            <div class="tTText" style="height:70px;left:auto;right:80%;">
                                <div class="scrollArea">
                                    <span class="subCat">Moments That Matter <i>00</i></span>
                                    <span class="subCat">Meaningful Conversation <i>00</i></span>
                                    <span class="subCat">Topics Discussed <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Write</span>
                            80
                            <div class="tTText" style="height:110px;">
                                <div class="scrollArea">
                                    <span class="subCat">Book <i>00</i></span>
                                    <span class="subCat">Email <i>00</i></span>
                                    <span class="subCat">Letter <i>00</i></span>
                                    <span class="subCat">Tablet <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Wellness</span>
                            80
                            <div class="tTText" style="height:70px;">
                                <div class="scrollArea">
                                    <span class="subCat">Pamper Session <i>00</i></span>
                                    <span class="subCat">Hand Massage <i>00</i></span>
                                    <span class="subCat">Hair Wash / Hairdressing <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Read</span>
                            80
                            <div class="tTText" style="height:190px;">
                                <div class="scrollArea">
                                    <span class="subCat">Newspaper <i>00</i></span>
                                    <span class="subCat">Email <i>00</i></span>
                                    <span class="subCat">Letter <i>00</i></span>
                                    <span class="subCat">Tablet <i>00</i></span>
                                    <span class="subCat">Book <i>00</i></span>
                                    <span class="subCat">Magazine <i>00</i></span>
                                    <span class="subCat">Catalogue <i>00</i></span>
                                    <span class="subCat">Brochure <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Physio</span>
                            80
                            <div class="tTText" style="height:290px;">
                                <div class="scrollArea">
                                    <span class="subCat">Attended <i>00</i></span>
                                    <span class="subCat">Exercise <i>00</i></span>
                                    <span class="subCat">Massage <i>00</i></span>
                                    <span class="subCat">Walker <i>00</i></span>
                                    <span class="subCat">Stander <i>00</i></span>
                                    <span class="subCat">Acheeva Bed <i>00</i></span>
                                    <span class="subCat">Side Lyer <i>00</i></span>
                                    <span class="subCat">Arm Splints <i>00</i></span>
                                    <span class="subCat">Leg Splints <i>00</i></span>
                                    <span class="subCat">Leg Gaiters <i>00</i></span>
                                    <span class="subCat">Stretches <i>00</i></span>
                                    <span class="subCat">Physio Ball <i>00</i></span>
                                    <span class="subCat">Physio Wedge <i>00</i></span>
                                    <span class="subCat">Physio Mat <i>00</i></span>
                                    <span class="subCat">Chest Percussion <i>00</i></span>
                                    <span class="subCat">Peapod <i>00</i></span>
                                    <span class="subCat">Comfy chair <i>00</i></span>
                                    <span class="subCat">Beanbag <i>00</i></span>
                                    <span class="subCat">Adapted Bike <i>00</i></span>
                                    <span class="subCat">Motomed Bike <i>00</i></span>
                                    <span class="subCat">Trike Bike <i>00</i></span>
                                    <span class="subCat">Cycling <i>00</i></span>
                                    <span class="subCat">Rebound Therapy <i>00</i></span>
                                    <span class="subCat">Hydrotherapy Pool <i>00</i></span>
                                    <span class="subCat">Massage Therapy <i>00</i></span>
                                    <span class="subCat">Reflexology <i>00</i></span>
                                    <span class="subCat">Oro Motor Tools <i>00</i></span>
                                    <span class="subCat">Oro Motor ( facial exercises ) <i>00</i></span>
                                    <span class="subCat">Resistance Band <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Communication</span>
                            80
                            <div class="tTText" style="height:210px;">
                                <div class="scrollArea">
                                    <span class="subCat">Starfish Therapy <i>00</i></span>
                                    <span class="subCat">My World Toys <i>00</i></span>
                                    <span class="subCat">Eye Gaze <i>00</i></span>
                                    <span class="subCat">Switches <i>00</i></span>
                                    <span class="subCat">Communication Book <i>00</i></span>
                                    <span class="subCat">PECS <i>00</i></span>
                                    <span class="subCat">TEACCH Board <i>00</i></span>
                                    <span class="subCat">Objects Of Reference <i>00</i></span>
                                    <span class="subCat">Oro Motor ( facial exercises ) <i>00</i></span>
                                    <span class="subCat">Oro Motor Tools <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Exercise</span>
                            Yes
                            <div class="tTText" style="height:290px;">
                                <div class="scrollArea">
                                    <span class="subCat">Arm Exercise <i>00</i></span>
                                    <span class="subCat">Ball Exercise <i>00</i></span>
                                    <span class="subCat">Knee Flexions <i>00</i></span>
                                    <span class="subCat">Chair Exercise <i>00</i></span>
                                    <span class="subCat">Stretching <i>00</i></span>
                                    <span class="subCat">Balance <i>00</i></span>
                                    <span class="subCat">Hand Squeeze <i>00</i></span>
                                    <span class="subCat">Back Mobilization <i>00</i></span>
                                    <span class="subCat">Yoga <i>00</i></span>
                                    <span class="subCat">Chi Activity <i>00</i></span>
                                    <span class="subCat">Swimming Exercise <i>00</i></span>
                                    <span class="subCat">Cycling <i>00</i></span>
                                    <span class="subCat">Resistance Band <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Games</span>
                            10
                            <div class="tTText" style="height:150px;">
                                <div class="scrollArea">
                                    <span class="subCat">Board Game <i>00</i></span>
                                    <span class="subCat">Card Games <i>00</i></span>
                                    <span class="subCat">Domino <i>00</i></span>
                                    <span class="subCat">Video Games <i>00</i></span>
                                    <span class="subCat">Jigsaw <i>00</i></span>
                                    <span class="subCat">Scrabble <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Activities</span>
                            20
                            <div class="tTText" style="height:290px;">
                                <div class="scrollArea">
                                    <span class="subCat">TV <i>00</i></span>
                                    <span class="subCat">Film <i>00</i></span>
                                    <span class="subCat">Knitting <i>00</i></span>
                                    <span class="subCat">Crossword <i>00</i></span>
                                    <span class="subCat">Word Search <i>00</i></span>
                                    <span class="subCat">Listen To Music <i>00</i></span>
                                    <span class="subCat">Singing <i>00</i></span>
                                    <span class="subCat">Dancing Activity <i>00</i></span>
                                    <span class="subCat">Flower Arrangement <i>00</i></span>
                                    <span class="subCat">Entertainment <i>00</i></span>
                                    <span class="subCat">Cooking <i>00</i></span>
                                    <span class="subCat">Baking <i>00</i></span>
                                    <span class="subCat">Namaste <i>00</i></span>
                                    <span class="subCat">Oomph Activity <i>00</i></span>
                                    <span class="subCat">Virtual Tips <i>00</i></span>
                                    <span class="subCat">Pool Table <i>00</i></span>
                                    <span class="subCat">Balloon Tennis <i>00</i></span>
                                    <span class="subCat">Bingo <i>00</i></span>
                                    <span class="subCat">Bean Bag <i>00</i></span>
                                    <span class="subCat">Doll Therapy <i>00</i></span>
                                    <span class="subCat">Poetry Activity <i>00</i></span>
                                    <span class="subCat">Sweet Shop <i>00</i></span>
                                    <span class="subCat">Biozoon <i>00</i></span>
                                    <span class="subCat">Tasters <i>00</i></span>
                                    <span class="subCat">Ice Hockey <i>00</i></span>
                                    <span class="subCat">Online Shopping <i>00</i></span>
                                    <span class="subCat">Care Vision Interactive <i>00</i></span>
                                    <span class="subCat">Cigarette <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                    <span class="subCat">Vape <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Arts &amp; Craft</span>
                            24
                            <div class="tTText" style="height:90px;">
                                <div class="scrollArea">
                                    <span class="subCat">Arts & Crafts <i>00</i></span>
                                    <span class="subCat">Drawing <i>00</i></span>
                                    <span class="subCat">Painting <i>00</i></span>
                                    <span class="subCat">Colouring <i>00</i></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="withTitle">
                    <span class="title">Service User name 1</span>

                    <ul class="list-unstyled clearfix activities">
                        <li style="width:50px;">
                            <a href="#" class="eye"></a>
                        </li>
                        <li class="helpTip">
                            <span class="title">Pet</span>
                            80
                            <div class="tTText" style="height:130px;left:auto;right:80%;">
                                <div class="scrollArea">
                                    <span class="subCat">Pet Name <i>00</i></span>
                                    <span class="subCat">Petted <i>00</i></span>
                                    <span class="subCat">Animal care <i>00</i></span>
                                    <span class="subCat">Animal Therapy <i>00</i></span>
                                    <span class="subCat">Watched <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Moments</span>
                            80
                            <div class="tTText" style="height:70px;left:auto;right:80%;">
                                <div class="scrollArea">
                                    <span class="subCat">Moments That Matter <i>00</i></span>
                                    <span class="subCat">Meaningful Conversation <i>00</i></span>
                                    <span class="subCat">Topics Discussed <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Write</span>
                            80
                            <div class="tTText" style="height:110px;">
                                <div class="scrollArea">
                                    <span class="subCat">Book <i>00</i></span>
                                    <span class="subCat">Email <i>00</i></span>
                                    <span class="subCat">Letter <i>00</i></span>
                                    <span class="subCat">Tablet <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Wellness</span>
                            80
                            <div class="tTText" style="height:70px;">
                                <div class="scrollArea">
                                    <span class="subCat">Pamper Session <i>00</i></span>
                                    <span class="subCat">Hand Massage <i>00</i></span>
                                    <span class="subCat">Hair Wash / Hairdressing <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Read</span>
                            80
                            <div class="tTText" style="height:190px;">
                                <div class="scrollArea">
                                    <span class="subCat">Newspaper <i>00</i></span>
                                    <span class="subCat">Email <i>00</i></span>
                                    <span class="subCat">Letter <i>00</i></span>
                                    <span class="subCat">Tablet <i>00</i></span>
                                    <span class="subCat">Book <i>00</i></span>
                                    <span class="subCat">Magazine <i>00</i></span>
                                    <span class="subCat">Catalogue <i>00</i></span>
                                    <span class="subCat">Brochure <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Physio</span>
                            80
                            <div class="tTText" style="height:290px;">
                                <div class="scrollArea">
                                    <span class="subCat">Attended <i>00</i></span>
                                    <span class="subCat">Exercise <i>00</i></span>
                                    <span class="subCat">Massage <i>00</i></span>
                                    <span class="subCat">Walker <i>00</i></span>
                                    <span class="subCat">Stander <i>00</i></span>
                                    <span class="subCat">Acheeva Bed <i>00</i></span>
                                    <span class="subCat">Side Lyer <i>00</i></span>
                                    <span class="subCat">Arm Splints <i>00</i></span>
                                    <span class="subCat">Leg Splints <i>00</i></span>
                                    <span class="subCat">Leg Gaiters <i>00</i></span>
                                    <span class="subCat">Stretches <i>00</i></span>
                                    <span class="subCat">Physio Ball <i>00</i></span>
                                    <span class="subCat">Physio Wedge <i>00</i></span>
                                    <span class="subCat">Physio Mat <i>00</i></span>
                                    <span class="subCat">Chest Percussion <i>00</i></span>
                                    <span class="subCat">Peapod <i>00</i></span>
                                    <span class="subCat">Comfy chair <i>00</i></span>
                                    <span class="subCat">Beanbag <i>00</i></span>
                                    <span class="subCat">Adapted Bike <i>00</i></span>
                                    <span class="subCat">Motomed Bike <i>00</i></span>
                                    <span class="subCat">Trike Bike <i>00</i></span>
                                    <span class="subCat">Cycling <i>00</i></span>
                                    <span class="subCat">Rebound Therapy <i>00</i></span>
                                    <span class="subCat">Hydrotherapy Pool <i>00</i></span>
                                    <span class="subCat">Massage Therapy <i>00</i></span>
                                    <span class="subCat">Reflexology <i>00</i></span>
                                    <span class="subCat">Oro Motor Tools <i>00</i></span>
                                    <span class="subCat">Oro Motor ( facial exercises ) <i>00</i></span>
                                    <span class="subCat">Resistance Band <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Communication</span>
                            80
                            <div class="tTText" style="height:210px;">
                                <div class="scrollArea">
                                    <span class="subCat">Starfish Therapy <i>00</i></span>
                                    <span class="subCat">My World Toys <i>00</i></span>
                                    <span class="subCat">Eye Gaze <i>00</i></span>
                                    <span class="subCat">Switches <i>00</i></span>
                                    <span class="subCat">Communication Book <i>00</i></span>
                                    <span class="subCat">PECS <i>00</i></span>
                                    <span class="subCat">TEACCH Board <i>00</i></span>
                                    <span class="subCat">Objects Of Reference <i>00</i></span>
                                    <span class="subCat">Oro Motor ( facial exercises ) <i>00</i></span>
                                    <span class="subCat">Oro Motor Tools <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Exercise</span>
                            Yes
                            <div class="tTText" style="height:290px;">
                                <div class="scrollArea">
                                    <span class="subCat">Arm Exercise <i>00</i></span>
                                    <span class="subCat">Ball Exercise <i>00</i></span>
                                    <span class="subCat">Knee Flexions <i>00</i></span>
                                    <span class="subCat">Chair Exercise <i>00</i></span>
                                    <span class="subCat">Stretching <i>00</i></span>
                                    <span class="subCat">Balance <i>00</i></span>
                                    <span class="subCat">Hand Squeeze <i>00</i></span>
                                    <span class="subCat">Back Mobilization <i>00</i></span>
                                    <span class="subCat">Yoga <i>00</i></span>
                                    <span class="subCat">Chi Activity <i>00</i></span>
                                    <span class="subCat">Swimming Exercise <i>00</i></span>
                                    <span class="subCat">Cycling <i>00</i></span>
                                    <span class="subCat">Resistance Band <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Games</span>
                            10
                            <div class="tTText" style="height:150px;">
                                <div class="scrollArea">
                                    <span class="subCat">Board Game <i>00</i></span>
                                    <span class="subCat">Card Games <i>00</i></span>
                                    <span class="subCat">Domino <i>00</i></span>
                                    <span class="subCat">Video Games <i>00</i></span>
                                    <span class="subCat">Jigsaw <i>00</i></span>
                                    <span class="subCat">Scrabble <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Activities</span>
                            20
                            <div class="tTText" style="height:290px;">
                                <div class="scrollArea">
                                    <span class="subCat">TV <i>00</i></span>
                                    <span class="subCat">Film <i>00</i></span>
                                    <span class="subCat">Knitting <i>00</i></span>
                                    <span class="subCat">Crossword <i>00</i></span>
                                    <span class="subCat">Word Search <i>00</i></span>
                                    <span class="subCat">Listen To Music <i>00</i></span>
                                    <span class="subCat">Singing <i>00</i></span>
                                    <span class="subCat">Dancing Activity <i>00</i></span>
                                    <span class="subCat">Flower Arrangement <i>00</i></span>
                                    <span class="subCat">Entertainment <i>00</i></span>
                                    <span class="subCat">Cooking <i>00</i></span>
                                    <span class="subCat">Baking <i>00</i></span>
                                    <span class="subCat">Namaste <i>00</i></span>
                                    <span class="subCat">Oomph Activity <i>00</i></span>
                                    <span class="subCat">Virtual Tips <i>00</i></span>
                                    <span class="subCat">Pool Table <i>00</i></span>
                                    <span class="subCat">Balloon Tennis <i>00</i></span>
                                    <span class="subCat">Bingo <i>00</i></span>
                                    <span class="subCat">Bean Bag <i>00</i></span>
                                    <span class="subCat">Doll Therapy <i>00</i></span>
                                    <span class="subCat">Poetry Activity <i>00</i></span>
                                    <span class="subCat">Sweet Shop <i>00</i></span>
                                    <span class="subCat">Biozoon <i>00</i></span>
                                    <span class="subCat">Tasters <i>00</i></span>
                                    <span class="subCat">Ice Hockey <i>00</i></span>
                                    <span class="subCat">Online Shopping <i>00</i></span>
                                    <span class="subCat">Care Vision Interactive <i>00</i></span>
                                    <span class="subCat">Cigarette <i>00</i></span>
                                    <span class="subCat">Other <i>00</i></span>
                                    <span class="subCat">Vape <i>00</i></span>
                                </div>
                            </div>
                        </li>
                        <li class="helpTip">
                            <span class="title">Arts &amp; Craft</span>
                            24
                            <div class="tTText" style="height:90px;">
                                <div class="scrollArea">
                                    <span class="subCat">Arts & Crafts <i>00</i></span>
                                    <span class="subCat">Drawing <i>00</i></span>
                                    <span class="subCat">Painting <i>00</i></span>
                                    <span class="subCat">Colouring <i>00</i></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <div class="pagingSorting">
        <ul class="list-unstyled paging">
            <li><a href="#">Prev</a></li>
            <li class="current"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next</a></li>
        </ul>

        <div class="sorting">
            <div class="select">
                <select name="" id="">
                    <option value="">Sort By</option>
                </select>
            </div>

            <button type="button" style="background-color:#6B7884">A-Z</button><button type="button" style="margin-right:20px;background-color:#6B7884">Z-A</button>

            <div class="select">
                <select name="" id="">
                    <option value="">50 per page</option>
                </select>
            </div>

            <button type="button" style="background-color:#3DA492;">Apply</button><button type="button">Reset
                Sorting</button>
        </div>
    </div>
</section>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
