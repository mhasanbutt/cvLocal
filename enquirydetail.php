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
                <li><a href="#">Enquiry Management</a></li>
            </ul>
            <span class="title">
                <img src="images/flyer.png" alt=""> Service User Enquiry
            </span>
        </div>
    </section>

    <section class="contentBody noFooter noBg">
        <div class="detailenquiry">

            <div class="prospect">
                <div class="prospectdetail">
                    <div class="scrollArea">
                        <section>
                            <article>
                                <small>Service User Detail</small>
                                Mr Bryan Forbes [73]
                            </article>

                            <ul class="list-unstyled">
                                <li>
                                    <small>Residency Type</small>
                                    Permanent
                                </li>
                                <li>
                                    <small>Placement Category</small>
                                    Residential Dementia
                                </li>
                                <li>
                                    <small>Currently In</small>
                                    Hospital
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>

                <ul class="status list-unstyled">
                    <li>Active</li>
                    <li>Enquiry</li>
                    <li>Viewed</li>
                    <li>FeedBack</li>
                </ul>

                <button type="button">Back</button>
            </div>

            <div class="detail">
                <ul class="tabs list-unstyled clearfix">
                    <li id="enquiry" class="link show">Enquiry <a href="#" class="detailpage"></a></li>
                    <li id="viewed">Viewing</li>
                    <li id="feedback">Feedback</li>
                    <li id="admission" class="link">Pre-admission <a href="#" class="detailpage"></a></li>
                </ul>

                <div id="enquirybox" class="tabContent show">
                    <div class="scrollArea">
                        <section>
                            <div class="accordion">
                                <span class="sectionTitle">Service User Detail</span>
                                <ul class="list-unstyled clearfix hideField">
                                    <li>
                                        <label for="">Complete Name</label>
                                        <input type="text" placeholder="Mr Frank Alan Law">
                                    </li>
                                    <li>
                                        <label for="">Known As</label>
                                        <input type="text" placeholder="Franky">
                                    </li>
                                    <li>
                                        <label for="">Date of Birth</label>
                                        <input type="text" placeholder="02-03-1954">
                                    </li>
                                    <li>
                                        <label for="">Gender</label>
                                        <input type="text" placeholder="Male">
                                    </li>

                                </ul>
                            </div>

                            <div class="accordion">
                                <span class="sectionTitle">Contact Person’s Detail</span>
                                <ul class="list-unstyled clearfix hideField">
                                    <li>
                                        <label for="">Complete Name copy</label>
                                        <input type="text" placeholder="Mrs Trinity Mecy">
                                    </li>
                                    <li>
                                        <label for="">Relationship</label>
                                        <input type="text" placeholder="Daughter">
                                    </li>
                                    <li>
                                        <label for="">Next of kin (nok)</label>
                                        <div class="togglegroup">
                                            <input type="checkbox" id="followup1">
                                            <label for="followup1"></label>
                                        </div>

                                    </li>
                                    <li>
                                        <label for="">Telephone</label>
                                        <input type="text" placeholder="-">
                                    </li>
                                    <li>
                                        <label for="">Email address</label>
                                        <input type="text" placeholder="abc@xyz.com">
                                    </li>
                                    <li>
                                        <label for="">Address</label>
                                        <input type="text" placeholder="-">
                                    </li>
                                    <li>
                                        <label for="">Post code</label>
                                        <input type="text" placeholder="-">
                                    </li>
                                    <li>
                                        <label for="">Funding</label>
                                        <input type="text" placeholder="Private">
                                    </li>
                                    <li>
                                        <label for="">Fee Quote (agreed / week)</label>
                                        <input type="text" placeholder="£ 355">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div id="viewedbox" class="tabContent">
                    <div class="scrollArea">
                        <section>
                            <article class="accordion">
                                <span class="sectionTitle">Service User Detail</span>
                                <ul class="list-unstyled clearfix">
                                    <li>
                                        <label for="">Viewing person</label>
                                        <input type="text" placeholder="Mr Frank Alan Law">
                                    </li>
                                    <li>
                                        <label for="">relationship</label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="son">Son</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <label for="">time / Date of viewing</label>
                                        <input type="text" placeholder="15:45 / 02-03-1954" class="viewcalender">
                                    </li>
                                    <li>
                                        <label for="">Viewing person contact</label>
                                        <input type="text" placeholder="02345815462">
                                    </li>
                                    <li>
                                        <label for="">Assisted By <small>(Staff Name)</small></label>
                                        <div class="select">
                                            <select name="" id="">
                                                <option value="staff">Staff</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <label for="">Viewing Time duration</label>
                                        <input type="text" placeholder="00:38" class="viewclock">
                                    </li>
                                    <li style="width:100%;">
                                        <label for="">Comments</label>
                                        <textarea name="" id=""></textarea>
                                    </li>
                                </ul>
                            </article>

                            <button type="button">Save</button>
                        </section>
                    </div>
                </div>
                <div id="feedbackbox" class="tabContent">
                    <div class="scrollArea">
                        <section>
                            <span class="sectionTitle">Impression of Viewing Person</span>
                            <div class="subSection">
                                <h4>Warmth of Welcome</h4>
                                <ul class="emojies list-unstyled clearfix">
                                    <li>
                                        <input type="radio" name="welcome" id="welcome1">
                                        <label for="welcome1">Very Dissatisfied</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="welcome" id="welcome2">
                                        <label for="welcome2">Dissatisfied</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="welcome" id="welcome3">
                                        <label for="welcome3">Neutral</label>
                                    </li>
                                    <li class='selected'>
                                        <input type="radio" name="welcome" id="welcome4">
                                        <label for="welcome4">Satisfied</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="welcome" id="welcome5">
                                        <label for="welcome5">Very Satisfied</label>
                                    </li>

                                </ul>
                            </div>

                            <button type="button">Save</button>
                        </section>
                    </div>
                </div>
                <div id="admissionbox" class="tabContent">
                    <div class="scrollArea">
                        <section>
                            Pre-Admission Status:<br>
                            <button style="background-color:#666;">No Pre-admission Assessment Created</button>
                            <button style="background-color:#8560A8;">In-Progress <small>(Click to continue)</small></button>
                            <button>Mark As Complete</button>
                            <p>&nbsp;</p>

                            <div class="accordion">
                                <span class="sectionTitle">Summary</span>
                                <ul class="list-unstyled clearfix">
                                    <li>
                                        <label for="">NHS Number</label>
                                        <input type="text" placeholder="254158492">
                                    </li>
                                    <li>
                                        <label for="">GP Name</label>
                                        <input type="text" placeholder="Franky">
                                    </li>
                                    <li>
                                        <label for="">Surgery Name</label>
                                        <input type="text" placeholder="Lorem Ipsum">
                                    </li>
                                    <li>
                                        <label for="">DOLS in Place</label>
                                        <input type="text" placeholder="No">
                                    </li>
                                    <li>
                                        <label for="">DNACPR in Place</label>
                                        <input type="text" placeholder="No">
                                    </li>
                                    <li>
                                        <label for="">Safeguarding in place</label>
                                        <input type="text" placeholder="No">
                                    </li>

                                </ul>
                            </div>

                            <div class="accordion">
                                <span class="sectionTitle">Assessment History</span>
                                <ul class="list-unstyled clearfix">
                                    <li>
                                        <label for="">Accessed by</label>
                                        <input type="text" placeholder="Mr George Falcon">
                                    </li>
                                    <li>
                                        <label for="">Time / Date</label>
                                        <input type="text" placeholder="15:38 14-07-2021">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="log">
                <ul class="tabs tabs2 list-unstyled clearfix">
                    <li id="enquirylog" class="show">Enquiry Log</li>
                    <li id="comments">Comments</li>
                </ul>
                <div id="enquirylogbox" class="tabContent tabContent2 show">
                    <div class="enquirytitle clearfix">
                        <div class="select">
                            <select name="sortBy" id="sortBy">
                                <option value="sortBy">Export</option>
                            </select>
                        </div>
                    </div>
                    <ul class="logdetail">
                        <div class="scrollArea">
                            <li>
                                <span class="focus">Initial enquiry</span>
                                was added by
                                <span class="focus">Ian Smith</span>
                                on
                                <span class="focus"> 15-06-2019</span>
                                at
                                <span class="focus">14:45.</span>
                            </li>
                            <li>
                                A
                                <span class="focus">brochure</span>
                                was
                                <span class="focus">handed over</span>
                                to the
                                <span class="focus">family</span>
                                on
                                <span class="focus">17-06-2019.</span>

                            </li>
                        </div>
                    </ul>
                </div>
                <div id="commentsbox" class="tabContent tabContent2">
                    <p>&nbsp;</p>
                    <ul class="logdetail" >
                        <div class="scrollArea">
                            <li>
                                <span class="focus">Initial enquiry</span>
                                was added by
                                <span class="focus">Ian Smith</span>
                                on
                                <span class="focus"> 15-06-2019</span>
                                at
                                <span class="focus">14:45.</span>
                            </li>
                            <li>
                                A
                                <span class="focus">brochure</span>
                                was
                                <span class="focus">handed over</span>
                                to the
                                <span class="focus">family</span>
                                on
                                <span class="focus">17-06-2019.</span>

                            </li>
                        </div>
                    </ul>
                    <article class="commentBox">
                        <label for="">Comments</label>
                        <textarea name="" id=""></textarea>
                        <button type="button">Save</button>
                    </article>
                    
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.detail .tabs li').click(function () {
            var t = $(this).attr('id');

            if (!$(this).hasClass('show')) {
                $('.detail .tabs li').removeClass('show');
                $(this).addClass('show');

                $('.detail .tabContent').removeClass('show');
                $('#' + t + 'box').addClass('show');
            }
        });

        $('.log .tabs li').click(function () {
            var t = $(this).attr('id');

            if (!$(this).hasClass('show')) {
                $('.log .tabs li').removeClass('show');
                $(this).addClass('show');

                $('.log .tabContent').removeClass('show');
                $('#' + t + 'box').addClass('show');
            }
        });
    </script>
</body>

</html>