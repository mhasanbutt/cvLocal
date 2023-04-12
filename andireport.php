<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Reports</a></li>
			</ul>
			<span class="title"><img src="https://jawa.care-vision.co.uk/images/slipping-multi.png" alt="A & I"> A &amp; I <small>(Falls)</small></span>
		</div>
		<ul class="search col4 list-unstyled clearfix">
			<li>
				<div class="fieldContainer select">
					<select>
						<option>All Homes / Floors</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>All Service Users</option>
					</select>
					<img src="images/left-arrow.svg" class="svg">
				</div>
			</li>
			<li>
				<div class="fieldContainer select">
					<select>
						<option>All Staff</option>
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
					<button type="button" class="btn orange"><img src="images/printing-tool.svg" class="svg">Print</button>
				</div>
			</div>
		</div>
	</section>

	<section class="contentBody noFooter">
		<div class="scrollArea">
			<div class="content">
				<div class="andireport">
					<aside class="occurance">
						<ul class="list-unstyled">
							<li>Date</li>
							<li>
								Nursing: General
							</li>
							<li>
								Nursing: EMI
							</li>
							<li>
								Residential: General
							</li>
							<li>
								Residential: EMI
							</li>
							<li>
								Other
							</li>
							<li>
								Time: 0800 - 1400
							</li>
							<li>
								Time: 1400 - 2000
							</li>
							<li>
								Time: 2000 - 0800
							</li>
							<li>
								Witnessed
							</li>
							<li>
								Un Witnessed
							</li>
							<li>
								Fall from Bed
							</li>
							<li>
								Fall from above 2m
							</li>
							<li>
								Fall from Standing
							</li>
						</ul>
					</aside>
					<section class="dates">
						<ul class="list-unstyled">
							<li class="data"><span>1</span></li>
							<li><span>5</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li class="data"><span>2</span></li>
							<li></li>
							<li><span data-toggle="modal" data-target="#showPop">24</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>3</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>4</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>5</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>6</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>7</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>8</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>9</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>10</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>11</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>12</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>13</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>14</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>15</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>16</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>17</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>18</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>19</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>20</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>21</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>22</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>23</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>24</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>25</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>26</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>27</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>28</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>29</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>30</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<ul class="list-unstyled">
							<li><span>31</span></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</section>
					<aside class="total">
						<ul class="list-unstyled">
							<li>Total</li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" id="showPop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="width:90%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nursing: EMI</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Service User</th>
                                <th>Time / Date</th>
								<th>Location</th>
								<th>Fall</th>
								<th>Injury</th>
								<th>Injury Type</th>
								<th>Followed Up</th>
								<th>RIDDOR</th>
								<th>Safeguarding</th>
								<th>Stat Notification</th>
								<th>A/E Visit or Admission</th>
								<th>Comments</th>
                            </tr>
                        </thead>
						<tbody>
							<tr>
								<td>Tim Shermin</td>
								<td>08:35pm<br>03-08-2020</td>
								<td>Floor 1</td>
								<td>No</td>
								<td>-</td>
								<td>Yes</td>
								<td>Yes</td>
								<td>No</td>
								<td>Yes</td>
								<td>No</td>
								<td>No</td>
								<td>Vivamus sit amet dolor eleifend, rhoncus nibh vel, consectetur nisi. Integer ut leo urna. Quisque sed venenatis ligula. Donec id euismod est, nec pretium diam.</td>
							</tr>
						</tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>

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
