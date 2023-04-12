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
                <li><a href="#">Care</a></li>
                <li><a href="#">Assessments</a></li>
            </ul>
            <span class="title">Pre-Admission Assessment and Dependency Tool</span>
        </div>
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
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="diseases list-unstyled">
                            <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                        </ul><br>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <span class="cPBuilderCount">1 of 40 <span>Questions</span></span>
                        <span class="builderNav">
                            <button><img src="images/left-arrow.svg" class="svg"> PREV</button>
                            <button>NEXT <img src="images/left-arrow.svg" class="svg"></button>
                            <button>PREVIEW</button>
                        </span>
                        <article class="careBuilder">
                            <span class="group">Personal Care</span>
                            <div>
                                <h4>Identified Need</h4>
                                <div class="title">What is Martin's level of independence? <small>(Single Choice)</small></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id1" checked>
                                            <label for="id1">Martin is independent with personal care.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id2">
                                            <label for="id2">Martin is independent with personal care, but requires assisstance at times.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id3">
                                            <label for="id3">Martin requires more assisstance at times.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id4">
                                            <label for="id4">martin requires assisstance at certain times.</label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="editText">
                                    <button><img src="images/quickview.svg" class="svg"></button>
                                    <textarea>Martin is independent with personal care.</textarea>
                                </div>
                            </div>
                            <div class="disabled">
                                <h4>Aim of Plan</h4>
                                <div class="title">What is Martin's level of independence? <small>(Single Choice)</small></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id1" checked>
                                            <label for="id1">Martin is independent with personal care.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id2">
                                            <label for="id2">Martin is independent with personal care, but requires assisstance at times.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id3">
                                            <label for="id3">Martin requires more assisstance at times.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id4">
                                            <label for="id4">martin requires assisstance at certain times.</label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="editText">
                                    <button><img src="images/quickview.svg" class="svg"></button>
                                    <textarea>Martin is independent with personal care.</textarea>
                                </div>
                            </div>
                            <div class="disabled">
                                <h4>Plan of Action</h4>
                                <div class="title">What is Martin's level of independence? <small>(Single Choice)</small></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id1" checked>
                                            <label for="id1">Martin is independent with personal care.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id2">
                                            <label for="id2">Martin is independent with personal care, but requires assisstance at times.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id3">
                                            <label for="id3">Martin requires more assisstance at times.</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="assessmentCheckBox">
                                            <input type="radio" name="id1" id="id4">
                                            <label for="id4">martin requires assisstance at certain times.</label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="editText">
                                    <button><img src="images/quickview.svg" class="svg"></button>
                                    <textarea>Martin is independent with personal care.</textarea>
                                </div>
                            </div>
                        </article>
                        <span class="builderNav">
                            <button><img src="images/left-arrow.svg" class="svg"> PREV</button>
                            <button>NEXT <img src="images/left-arrow.svg" class="svg"></button>
                            <button>PREVIEW</button>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <div class="careBuilderPreview">
                            <div class="scrollAreaChild">
                                <div class="sectionTitle">Identified Need</div>
                                <p>Nullam vehicula congue elit sed commodo. Aenean at tortor mollis, fermentum sem at, accumsan orci.</p>
                                <p>Sed convallis diam sit amet velit lobortis interdum.</p>
                                <div class="sectionTitle">Aim of Plan</div>
                                <p>Vivamus dapibus felis eu porttitor placerat. Proin molestie consectetur dui. Curabitur sit amet felis nec leo venenatis imperdiet vel et metus.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                <div class="sectionTitle">Plan of Action</div>
                                <p>Donec at ligula arcu. Etiam molestie semper auctor. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function(){
            var height = $('.contentBody').height();
            $('.careBuilderPreview').height( height - 111 );

            $('.scrollArea').scrollbar({
                "onScroll": function(y, x){
                    if(y.scroll > 0){
                        $('.careBuilderPreview').addClass('fixed');
                        $('.careBuilderPreview').css('top',y.scroll);
                    } else {
                        $('.careBuilderPreview').removeClass('fixed');
                        $('.careBuilderPreview').css('top',0);
                    }
                }
            });
            $('.scrollAreaChild').scrollbar();
        });
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
