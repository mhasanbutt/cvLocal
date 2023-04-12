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

    <section class="contentHeader ReportsMedication">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Reports</a></li>
            </ul>
            <span class="title">Medication</span>
        </div>
        <ul class="search list-unstyled clearfix">
            <li>
               	<label>Home / Floor</label>
                <div class="fieldContainer select">
                   	<img src="images/house-outline.svg" class="svg fieldIcon" />
                    <select>
                        <option>Select Service User</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
               	<label>Service User(s)</label>
                <div class="fieldContainer select">
                   	<img src="images/avatar.svg" class="svg fieldIcon" />
                    <select>
                        <option>Select Service User</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
               	<label>Staff</label>
                <div class="fieldContainer select">
                   	<img src="images/staff.svg" class="svg fieldIcon" />
                    <select>
                        <option>Staff</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
               	<label>Date</label>
                <div class="fieldContainer date">
                   	<img src="images/calendr.svg" class="svg fieldIcon" />
                    <input type="text" name="dateRange" placeholder="Date">
                </div>
            </li>
            <li>
            	<button class="sortDirection"><img src="images/funnel.svg" class="svg"></button>
            </li>
        </ul>
    </section>

    <section class="contentBody noBg ReportsMediHistoryWrap">
        <div class="scrollArea">
            <div class="content">
              	<div class="ReportsMediTitle">
               		<h2>You have Selected</h2>
               		<ul class="list list-unstyled">
               			<li>Home / Floor <span>Oatland Care ltd. / Barbican / B-23</span></li>
               			<li>Service User(s) <span> Tim Sherman</span></li>
               			<li>Staff <span> Carer</span></li>
               			<li>Date <span> 05/08/2018 - 05/18/2018</span></li>
               		</ul>
				</div>
                <div class="ReportsMediWrap">
                	<ul class="list list-unstyled">
                		<li>
							<img src="images/shopping-bag.svg" class="svg">
							<span class="title">Service User Order History</span>
               				<div class="ReportsMediWrapFooter">
               					<div class="ReportsMediDetail">
               						<label>Orders Sent</label>
               						<span><a href="#">48</a></span>
               					</div>
               					<div class="ReportsMediDetail right">
               						<label>Orders Received</label>
               						<span><a href="#">48</a></span>
               					</div>
               				</div>
                		</li>
                		<li>
							<img src="images/shopping-bag.svg" class="svg">
							<span class="title">Medication Returned/Destroyed</span>
               				<div class="ReportsMediWrapFooter">
               					<div class="ReportsMediDetail">
               						<label>Wasted</label>
               						<span><a href="#">48</a></span>
               					</div>
               					<div class="ReportsMediDetail right">
               						<label>Returned</label>
               						<span><a href="#">48</a></span>
               					</div>
               				</div>
                		</li>
                		<li>
							<img src="images/shopping-bag.svg" class="svg">
							<span class="title">Medication Administration</span>
               				<div class="ReportsMediWrapFooter">
               					<div class="ReportsMediDetail">
               						<label>Not Admin.</label>
               						<span><a href="#">48</a></span>
               					</div>
               					<div class="ReportsMediDetail right">
               						<label>Over Due</label>
               						<span><a href="#">48</a></span>
               					</div>
               				</div>
                		</li>
                		<li>
							<img src="images/shopping-bag.svg" class="svg">
							<span class="title">PRN Medication</span>
               				<div class="ReportsMediWrapFooter">
               					<div class="ReportsMediDetail">
               						<label>Administered</label>
               						<span><a href="#">48</a></span>
               					</div>
               					<div class="ReportsMediDetail right">
               						<label>Orders</label>
               						<span><a href="#">48</a></span>
               					</div>
               				</div>
                		</li>
                	</ul>
                </div>
            </div>
        </div>
    </section>

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
    </script>
</body>
</html>
