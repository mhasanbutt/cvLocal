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
		.contentBody .scroll-wrapper {
			top:100px;
		}
	</style>
</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Audits</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/media/images/audit_dashboard_icon.png" alt=""> Create New Audit</span>
		</div>
	</section>

	<section class="contentBody">
		<div class="col-md-6 inBodyForm" style="padding-top:10px;">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label for="">Name of Audit</label>
						<input type="text" name="" id="">
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="">Minimum Review Date</label>
						<div class="select">
							<select name="" id="">
								<option value="">12 Months</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6" style="padding-top:10px;">
			<article class="auditCTA" data-title="Select at least one category to remove it">
				<input type="text" name="" id=""> <button type="button">Add Category</button> <button type="button">Remove Category</button>
			</article>
		</div>
		
		<div class="scrollArea">
			<div class="content">
				<div class="categorySet">
					<span class="categoryTitle">
						<input type="checkbox" name="" id="categoryname1" hidden>
						<label for="categoryname1"></label>
						Category Name
					</span>

					<div class="row">
						<div class="col-md-6 inBodyForm">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="padding-top:10px;">
										<label for="">Criteria Title</label>
										<input type="text" name="" id="" placeholder="Example: Are allergies being recorded?">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Comments</label>
										<textarea name="" id="" placeholder="You will be able to complete this section when you complete a new audit"></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<article class="optionalFields inBodyForm">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="">
												Actioned
												<i title="Possible Options:&#013;Yes&#013;No&#013;Pending&#013;N/A"></i>
												<input type="checkbox" name="" id="actioned" hidden>
												<label for="actioned"></label>
											</label>
											<div class="select">
												<select name="" id="" disabled>
													<option value="">Choose Option</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="">
												Due Date
												<input type="checkbox" name="" id="dueDate" hidden>
												<label for="dueDate"></label>
											</label>
											<input type="text" name="" id="" placeholder="Auto Date Picker" disabled>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<label for="">
												Explanation
												<input type="checkbox" name="" id="explanation" hidden>
												<label for="explanation"></label>
											</label>
											<textarea name="" disabled id=""placeholder="Example: This includes food allergies, medication allergies and any other substances the service user might be allergic to"></textarea>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>

					<hr>

					<span class="addCriteria"><i>+</i></span>
				</div>

				<h4><span>Assign Employee</span></h4>

				<div class="row inBodyForm">
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Select Employee(s)</label>
							<div class="select">
								<select name="" id="">
									<option value=""></option>
								</select>
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
				<button type="button">Back</button> <button type="button" class="save">Save</button>
			</div>
		</div>
	</section>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="js/datepicker-2.1.25.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('input[name="dateRange"]').daterangepicker({
			"opens": "left",
			"singleDatePicker": true,
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		});

		$('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY'));
		});

		$('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
			$(this).val('');
		});
	</script>
</body>

</html>