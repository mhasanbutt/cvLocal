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
                <li><a href="#">Care Plan</a></li>
            </ul>
            <span class="title">Review</span>
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
        <ul class="search list-unstyled clearfix" style="visibility:hidden"></ul>
        <div class="clearfix">
            <div class="pull-right clearfix">
                <ul class="diseases list-unstyled">
                    <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                    <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                </ul>
                <div class="btn-group">
                </div>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
            	<form class="inBodyForm">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group date">
								<label>Date / Time</label>
								<input type="text" name="datetimerange">
								<img src="images/calendar-icon.svg" class="svg">
							</div>
						</div>
					</div>
           		</form>
            	<section class="BulksReview">
					<article class="BulksReviewItemOuter">
						<h4>
							Care Plan
							<div class="CheckButton">
								<input type="checkbox" id="pending" name="tstatus" />
								<label for="pending"><span></span>Select All</label>
							</div>
						</h4>
						<div class="BulksReviewItem">
							<div class="scrollArea">
								<ul class="BulksReviewItemHeder">
									<li>Care Plan</li>
									<li>Status</li>
									<li>Next Review</li>
                                    <li></li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
                                    <li><a href="#"><img src="images/view.svg" class="svg" alt=""></a></li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
                                    <li></li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
                                    <li></li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
                                    <li></li>
								</ul>
							</div>
						</div>
					</article>
					<article class="BulksReviewItemOuter">
						<h4>
							Scored Asssessments
							<div class="CheckButton">
								<input type="checkbox" id="pending" name="tstatus" />
								<label for="pending"><span></span>Select All</label>
							</div>
						</h4>
						<div class="BulksReviewItem">
							<div class="scrollArea">
								<ul class="BulksReviewItemHeder">
									<li>Scored Asssessments</li>
									<li>Status</li>
									<li>Next Review</li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
							</div>
						</div>
					</article>
					<article class="BulksReviewItemOuter">
						<h4>
							Risk Asssessments
							<div class="CheckButton">
								<input type="checkbox" id="pending" name="tstatus" />
								<label for="pending"><span></span>Select All</label>
							</div>
						</h4>
						<div class="BulksReviewItem">
							<div class="scrollArea">
								<ul class="BulksReviewItemHeder">
									<li>Risk Asssessments</li>
									<li>Status</li>
									<li>Next Review</li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
							</div>
						</div>
					</article>
					<article class="BulksReviewItemOuter">
						<h4>
							MCA
							<div class="CheckButton">
								<input type="checkbox" id="pending" name="tstatus" />
								<label for="pending"><span></span>Select All</label>
							</div>
						</h4>
						<div class="BulksReviewItem">
							<div class="scrollArea">
								<ul class="BulksReviewItemHeder">
									<li>MCA</li>
									<li>Status</li>
									<li>Next Review</li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
								<ul class="BulksReviewItemBody">
									<li>
										<div class="CheckButton">
											<input type="checkbox" id="pending" name="tstatus" />
											<label for="pending"><span></span></label>
										</div>
									</li>
									<li>Behavioural Concerns</li>
									<li>Pending</li>
									<li>2017-06-21 </li>
								</ul>
							</div>
						</div>
					</article>
				</section>

            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button> <button type="button" class="save">Update</button>
            </div>
        </div>
    </section>

    <div class="modal fade" id="quickView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Behavioural Concerns</h4>
                </div>
                <div class="modal-body">
                    <div class="inBodyForm">
                        <div class="form-group">
                            <label>Identified Need</label>
                            <textarea>Suspendisse potenti. Donec hendrerit orci neque, eu sodales neque placerat ac. Vivamus scelerisque libero erat, eu finibus urna facilisis nec. Aenean at porta odio, vel laoreet felis. Pellentesque eget porta ante, ut maximus lacus. Morbi rhoncus mi in scelerisque congue. In quis ex ac lectus venenatis rutrum a at dui. </textarea>
                        </div>
                        <div class="form-group">
                            <label>Aim of Plan</label>
                            <textarea>Suspendisse potenti. Donec hendrerit orci neque, eu sodales neque placerat ac. Vivamus scelerisque libero erat, eu finibus urna facilisis nec. Aenean at porta odio, vel laoreet felis. Pellentesque eget porta ante, ut maximus lacus. Morbi rhoncus mi in scelerisque congue. In quis ex ac lectus venenatis rutrum a at dui. </textarea>
                        </div>
                        <div class="form-group">
                            <label>Plan of Action</label>
                            <textarea>Suspendisse potenti. Donec hendrerit orci neque, eu sodales neque placerat ac. Vivamus scelerisque libero erat, eu finibus urna facilisis nec. Aenean at porta odio, vel laoreet felis. Pellentesque eget porta ante, ut maximus lacus. Morbi rhoncus mi in scelerisque congue. In quis ex ac lectus venenatis rutrum a at dui. </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="js/jquery.scrollbar.min.js"></script>

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
        $('#quickView').on('show.bs.modal', function (e) {
          autosize($('textarea'));
        })
    </script>
    <script>
        $(function() {
            $('input[name="datetimerange"]').daterangepicker({
                timePicker: true,
                singleDatePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                }
            });
        });
        $('input[name="datetimerange"]').on('apply.datetimerange', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="datetimerange"]').on('cancel.datetimerange', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
