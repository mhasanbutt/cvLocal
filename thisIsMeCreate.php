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
                <li><a href="#">Service Users</a></li>
            </ul>
            <span class="title"><img src="https://jawa.linksdev.co.uk/images/aboutme.png"> About Me</span>
        </div>
    </section>

    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
                <section class="aniSection thisisme clearfix">
                    <aside>
                        <ul class="list-unstyled clearfix col2">
                            <li>
                                <span class="title">Observation <small>(Date Taken)</small></span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Mobility</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Continence</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Nutrition</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Hydration</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Skin integrity</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Cognition / Memory and capacity</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Personal hygiene</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Let me introduce myself</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">What is most important to me</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">People important to me</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">How I communicate and how to communicate with me</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">My wellness</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Please do and please don't</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">How and When to Support Me</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Also worth knowing about me</span>
                                <textarea></textarea>
                            </li>
                            <li>
                                <span class="title">Review Date</span>
                                <input type="text" name="dateRange">
                            </li>
                        </ul>

                        <span class="title">eConsent</span>
                        <ul class="list-unstyled clearix" style="margin-bottom: 20px;">
                            <li>
                                <span class="title">Status</span>
                                <select>
                                    <option>Choose Status</option>
                                    <option>Pending</option>
                                    <option>Active</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="list-unstyled clearix col4">
                            <li>
                                <span class="title">Date Requested</span>
                                <input type="text" name="dateRange">
                            </li>
                            <li>
                                <span class="title">Consent Status</span>
                                <select>
                                    <option>Choose Status</option>
                                </select>
                            </li>
                            <li>
                                <span class="title">Decision Made By</span>
                                <select>
                                    <option>Select</option>
                                </select>
                            </li>
                            <li>
                                <span class="title">Approved Date</span>
                                <input type="text" name="dateRange">
                            </li>
                            <li>
                                <span class="title">Upload</span>
                                <input type="file">
                            </li>
                            <li>
                                <span class="title">Create Followup</span>
                                <input type="checkbox" id="createFollowup" hidden>
                                <label for="createFollowup"></label>
                            </li>
                        </ul>
                    </aside>
                </section>

                <div class="ctas">
                    <button>Back</button> <button class="green">Save</button> <button class="blue">Save &amp; Print</button> <button class="orange">Review</button> <button class="print">Print</button>
                </div>
            </div>
        </div>
    </section>

    <div class="pop" id="witByPop">
        <div>
            <section>
                <article style="width:380px;">
                    <span class="popFuse" data-close="witBy"></span>
                    <span class="title">Witnessed By</span>
                    
                    <ul class="form list-unstyled clearfix">
                        <li>
                            <span class="title">Username</span>
                            <input type="text" name="" id="" >
                        </li>

                        <li>
                            <span class="title">Password</span>
                            <input type="password" name="" id="">
                        </li>
                    </ul>

                    <div class="ctas">
                        <button style="background-color:#7992B6;color:#FFF;">Verify</button> <button class="popClose" data-close="witBy">Close</button>
                    </div>
                </article>
            </section>
        </div>
    </div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.scrollbar.min.js"></script>

    <script src="js/moment.min.js"></script>
    <script src="js/datepicker-2.1.25.js"></script>

    <script src="js/autosize.min.js"></script>

    <script src="js/select2.min.js"></script>

    <script src="js/custom.js"></script>
    <script>
        $('.assocMap').on('click',function(){
            $(this).next('div').addClass('show');
        });

        $('.mapChoice i').on('click', function(){
            $(this).parent().removeClass('show');
        });

        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });

        $('.autoPop').daterangepicker({
            "singleDatePicker": true,
            autoUpdateInput: true
        });

        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        $('.select2').select2();

        $('[type=checkbox]').on('change', function(){
            var checkID = $(this).attr('id');

            if($(this).is(':checked')){
                $('.' + checkID + 'Hidden').show();
            } else {
                $('.' + checkID + 'Hidden').hide();
            }
        });

        $('[type=checkbox]').on('change', function(){
            var checkID = $(this).attr('id');
            $('#' + checkID + 'Pop').css('display', 'table');
        });

        $('.popFuse, .popClose').click(function(){
            var popID = $(this).attr('data-close');
            $('#' + popID + 'Pop').css('display', 'none');
            $('#' + popID).prop("checked", false);
        });

        $('.informedSection .btnGroup input[type=radio]').on('change', function(){
            var informedID = $(this).attr('id');
            var informedName = $(this).attr('name');

            if($(this).attr('name') == informedID){
                $('#' + informedName + 'Date').show();
            } else {
                $('#' + informedName + 'Date').hide();
            }
        });

        $('input[name=associateChoice]').on('change', function(){
            if($(this).is(':checked') && $(this).attr('id') == "assInj"){
                $('.or').hide();
                $('.associate:nth-of-type(2)').hide();
            } else if($(this).is(':checked') && $(this).attr('id') == "assPUlcer") {
                $('.or').hide();
                $('.associate:nth-of-type(1)').hide();
            } else {
                $('.or').show();
                $('.associate').show();
            }
        });
    </script>
</body>
</html>
