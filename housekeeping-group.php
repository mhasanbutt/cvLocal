<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet"/>
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
                <li><a href="#">Maintenanace</a></li>
            </ul>
            <span class="title">House Keeping</span>
        </div>
        <ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer searchField">
                    <input type="text" placeholder="Search by keyword">
                    <img src="images/magnifier-tool.svg" class="searchIcon svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Select Service User</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Floors</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Rooms</option>
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
            <div class="pull-right clearfix">
                <div class="btn-group noAlergy">
                    <button type="button" class="btn orange"><img src="images/plus.svg" class="svg">Add Property</button>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content specialHR">
                <div class="row">
                    <div class="col-md-12">
<style>
	.KeepingGroups {
		float: left;
		width: 100%;
		position: relative;
		margin-bottom: 15px;
	}
	.KeepingGroups ul{
		margin: 25px 0px 0px 0px;
		list-style: none;
		padding: 15px 15px 0px 15px;
		float: left;
		width: 100%;
		background: #f6f6f6;
		border-radius: 4px;
		border: solid 1px #F8931D;
	}
	.KeepingGroups span{
		position: absolute;
		background: #f6f6f6;
		padding: 5px 15px;
		top: 0;
		border-radius: 4px;
		left: 15px;
	}
	.KeepingGroups span:before{
		content: "";
		position: absolute;
		left: -1px;
		right:-1px;
		top: -1px;
		bottom: 0;
		z-index: -1;
		border-radius: 4px;
		border: solid 1px #F8931D;
	}
	.KeepingGroups ul li{
		width: 32%;
		margin-right: 2%;
		padding: 8px 12px;
		display: inline-block;
		color: #666;
		font-size: 16px;
		margin-bottom: 15px;
		border-radius: 4px;
		background: #fff;
		float: left;
	}
	.KeepingGroups ul li:nth-child(3n+3){
		margin-right: 0;
	}
	.KeepingGroups ul li small{
		font-size: 12px;
		text-transform: uppercase;
		color: #F8931D;
		font-weight: 400;
		display: block;
	}
</style>
                        <div class="KeepingGroups">
                        	<span>Group A</span>
                        	<ul>
                        		<li>
                        			<small>DATE ADDED</small>
                        			02-02-2018
								</li>
                        		<li>
                        			<small>TYPE OF TASK</small>
                        			deep
                        		</li>
                        		<li>
                        			<small>Task NAME</small>
                        			task 2
                        		</li>
                        		<li>
                        			<small>RECURRENCE</small>
                        			daily
                        		</li>
                        		<li>
                        			<small>Added By</small>
                        			Rishi Local
                        		</li>
                        	</ul>
                        </div>
                        
                        <div class="KeepingGroups">
                        	<span>Group A</span>
                        	<ul>
                        		<li>
                        			<small>DATE ADDED</small>
                        			02-02-2018
								</li>
                        		<li>
                        			<small>TYPE OF TASK</small>
                        			deep
                        		</li>
                        		<li>
                        			<small>Task NAME</small>
                        			task 2
                        		</li>
                        		<li>
                        			<small>RECURRENCE</small>
                        			daily
                        		</li>
                        		<li>
                        			<small>Added By</small>
                        			Rishi Local
                        		</li>
                        	</ul>
                        </div>
                        
                        <div class="KeepingGroups">
                        	<span>Group A</span>
                        	<ul>
                        		<li>
                        			<small>DATE ADDED</small>
                        			02-02-2018
								</li>
                        		<li>
                        			<small>TYPE OF TASK</small>
                        			deep
                        		</li>
                        		<li>
                        			<small>Task NAME</small>
                        			task 2
                        		</li>
                        		<li>
                        			<small>RECURRENCE</small>
                        			daily
                        		</li>
                        		<li>
                        			<small>Added By</small>
                        			Rishi Local
                        		</li>
                        	</ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-6">
                <button type="button">Back</button> <button type="button" class="save">Save</button>
            </div>
            <div class="col-md-6 text-right">
                <div class="form-inline">
                    <label>Service User</label>
                    <div class="select">
                        <select>
                            <option>Terrance Edwards</option>
                            <option>John Smith</option>
                            <option>Tony Anderson</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
                <div class="form-inline">
                    <label>By Floor</label>
                    <div class="select">
                        <select>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

<div id="relationship" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Joint power of attorney (POA)</h4>
			</div>
			<div class="modal-body">
				<form class="inBodyForm">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Name</label>
									<input type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label>Relationship</label>
									<input type="text">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-primary">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="http://linksdev.co.uk/careVision/web/public/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>

    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/jquery.maphilight.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
		$('input[name="date"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });

		$(".select2").select2();
		$(".select2_multi").select2({ closeOnSelect: false});

        $('input[name="date"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="date"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
