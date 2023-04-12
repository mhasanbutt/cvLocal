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
                <li><a href="#">Account</a></li>
            </ul>
            <span class="title"><img src="images/communicationbook.svg" class="svg"> Service User</span>
        </div>
        <ul class="search list-unstyled clearfix col4">
           	<li>
                <div class="fieldContainer select">
                    <select>
                        <option>Home</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Floor</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Service User</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer date">
                    <input type="text" name="dateRange" placeholder="Date">
                    <img src="images/calendar-icon.svg" class="calendar svg">
                </div>
            </li>
        </ul>
        <div class="clearfix">
            <button type="button" class="searchButton">Search</button>
			<div class="historySorting">
				<span class="selection">
					<a href="#">Select All</a>  |  <a href="#">Remove Selection</a>
				</span>
            </div>
            <div class="historySorting accountSorting">
				<span>Total Rooms: 20</span> <span>Empty Rooms: 5</span>
            </div>
            <div class="pull-right clearfix">
               <div class="btn-group">
                    <button type="button" class="btn blue"><img src="images/export-file.svg" class="svg">Export</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn orange"><img src="images/printing-tool.svg" class="svg">Print</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn" data-toggle="modal" data-target="#changeFee"><img src="images/great-britain-pound.svg" class="svg">Change Fee</button>
                </div>
            </div>
        </div>
    </section>

    <section class="contentBody noBg">
        <div class="scrollArea">
            <ul class="historyListing list-unstyled accountListing">
                <li>
                    <span class="checkBox">
                        <input type="checkbox" id="id8" hidden>
                        <label for="id8"><img src="images/checked.svg" class="svg"></label>
                    </span>
                    <article>
                        <ul class="clearfix list-unstyled">
                           	<li>
                                <span class="suserimg"><img src="images/temp-picture.jpg"></span>
                            </li>
                            <li>
                                <small>Service User</small>
                                <span>Mr. Tim Sherman</span>
                            </li>
                            <li>
                                <small>SU No.</small>
                                <span>59215</span>
                            </li>
                            <li>
                                <small>Floor</small>
                                <span>12</span>
                            </li>
                            <li>
                                <small>Room No.</small>
                                <span>58</span>
                            </li>
                            <li>
                                <small>Weekly Rate</small>
                                <span>585</span>
                            </li>
                            <li>
                                <small>Invoice Amount Due</small>
                                <span>£ 350</span>
                            </li>
                        </ul>
                        <div class="accountListingTools">
                        	<ul>
                        		<li>
                        			<a href="#"><img src="images/printing-tool.svg" class="svg">
                        			<span>Print</span></a>
                        		</li>
                        		<li>
                        			<a href="#"><img src="images/pencil-edit-button.svg" class="svg">
                        			<span>update</span></a>
                        		</li>
                        	</ul>
                        </div>
                    </article>
                </li>
                <li>
                    <span class="checkBox">
                        <input type="checkbox" id="id9" hidden>
                        <label for="id9"><img src="images/checked.svg" class="svg"></label>
                    </span>
                    <article>
                        <ul class="clearfix list-unstyled">
                           	<li>
                                <span class="suserimg"><img src="images/temp-picture.jpg"></span>
                            </li>
                            <li>
                                <small>Service User</small>
                                <span>Mr. Tim Sherman</span>
                            </li>
                            <li>
                                <small>SU No.</small>
                                <span>59215</span>
                            </li>
                            <li>
                                <small>Floor</small>
                                <span>12</span>
                            </li>
                            <li>
                                <small>Room No.</small>
                                <span>58</span>
                            </li>
                            <li>
                                <small>Weekly Rate</small>
                                <span>585</span>
                            </li>
                            <li>
                                <small>Invoice Amount Due</small>
                                <span>£ 350</span>
                            </li>
                        </ul>
                        <div class="accountListingTools">
                        	<ul>
                        		<li>
                        			<a href="#"><img src="images/printing-tool.svg" class="svg">
                        			<span>Print</span></a>
                        		</li>
                        		<li>
                        			<a href="#"><img src="images/pencil-edit-button.svg" class="svg">
                        			<span>update</span></a>
                        		</li>
                        	</ul>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-4">
                <div class="listCount">
                    <select>
                        <option>50</option>
                        <option>100</option>
                        <option>150</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="records">
                    <span class="previous"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
                    <div class="counter">
                        <span>Page</span>
                        <span class="field"><input type="text" value="1"></span>
                        <span>of 15</span>
                    </div>
                    <span class="next"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <div class="form-inline">
                    <label>Sort by</label>
                    <div class="select">
                        <select>
                            <option>Identified Needs</option>
                            <option>Care Plan</option>
                            <option selected>Service User</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

<div id="changeFee" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Change Fee</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="changeFee-item">
							<a href="#"><img src="images/close.svg" class="svg" /></a>
							<img src="images/temp-picture.jpg">
							<div class="changeFee-item-content">
								<span>Service User</span>
								<h2>Mr. Tim Sherman</h2>
								<small>£ 9500</small>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="changeFee-item">
							<a href="#"><img src="images/close.svg" class="svg" /></a>
							<img src="images/temp-picture.jpg">
							<div class="changeFee-item-content">
								<span>Service User</span>
								<h2>Mr. Tim Sherman</h2>
								<small>£ 9500</small>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="changeFee-item">
							<a href="#"><img src="images/close.svg" class="svg" /></a>
							<img src="images/temp-picture.jpg">
							<div class="changeFee-item-content">
								<span>Service User</span>
								<h2>Mr. Tim Sherman</h2>
								<small>£ 9500</small>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="changeFee-item">
							<a href="#"><img src="images/close.svg" class="svg" /></a>
							<img src="images/temp-picture.jpg">
							<div class="changeFee-item-content">
								<span>Service User</span>
								<h2>Mr. Tim Sherman</h2>
								<small>£ 9500</small>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="changeFee-item">
							<a href="#"><img src="images/close.svg" class="svg" /></a>
							<img src="images/temp-picture.jpg">
							<div class="changeFee-item-content">
								<span>Service User</span>
								<h2>Mr. Tim Sherman</h2>
								<small>£ 9500</small>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="changeFee-item">
							<a href="#"><img src="images/close.svg" class="svg" /></a>
							<img src="images/temp-picture.jpg">
							<div class="changeFee-item-content">
								<span>Service User</span>
								<h2>Mr. Tim Sherman</h2>
								<small>£ 9500</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<form class="inBodyForm changeFee-footer">
					 <div class="form-group">
                        <label class="control-label">Amount in</label>
                            <div class="select">
                                <select>
                                    <option>Percentage</option>
                                    <option>Amount</option>
                                </select>
                                <img src="images/left-arrow.svg" class="svg">
                            </div>

                        	<input type="text">
                   			<button type="button" class="btn btn-default btn-primary">Change</button>

                    </div>
				</form>
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
        $('.historyListing .listingHandle').click(function(){
            $(this).toggleClass('move');
            $(this).parent().children('article').toggleClass('shrink');
        });

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
    </script>
</body>
</html>
