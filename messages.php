<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
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
				<li><a href="#">Message Centre</a></li>
			</ul>
			<span class="title">Messages</span>
		</div>
	</section>

	<section class="contentBody noFooter">
		<section class="messages MessagesContainer">
			<div class="folder">
				<ul class="list-unstyled clearfix">
					<li class="active">
						Inbox <small>(14 Unread)</small>
					</li>
					<li>
						Sent Items
					</li>
					<li>
						Notifications <small>(2454 Unread)</small>
					</li>
					<li>
						Memo <small>(77 Unread)</small>
					</li>
				</ul>
				<div class="dropdown">
					<button type="button" class="msgButtons blue" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img src="images/folder.svg" class="svg">Folders</button>
					<section class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<form action="" method="post">
							<div class="form-group">
								<input type="text" name="newFolder" id="newFolder" placeholder="New folder name">
								<button type="button">Create</button>
							</div>
						</form>
						<ul class="list-unstyled">
							<li>
								<span class="delete"><img src="images/bin.svg" alt="Delete" class="svg"></span>
								<a href="#">Personal Messages</a>
							</li>
							<li>
								<span class="delete"><img src="images/bin.svg" alt="Delete" class="svg"></span>
								<a href="#">Aldgate</a>
							</li>
							<li>
								<span class="delete"><img src="images/bin.svg" alt="Delete" class="svg"></span>
								<a href="#">Barbican</a>
							</li>
							<li>
								<span class="delete"><img src="images/bin.svg" alt="Delete" class="svg"></span>
								<a href="#">Accidents</a>
							</li>
							<li>
								<span class="delete"><img src="images/bin.svg" alt="Delete" class="svg"></span>
								<a href="#">Deleted Items</a>
							</li>
						</ul>
					</section>
				</div>
				<div class="dropdown">
					<button type="button" class="msgButtons" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img src="images/actions.svg" class="svg">Actions</button>
					<section class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<ul class="list-unstyled">
							<li>
								<a href="#">Mark as Read</a>
							</li>
							<li>
								<a href="#">Mark as Unread</a>
							</li>
							<li>
								<a href="#">Flag</a>
							</li>
							<li>
								<a href="#">Move to Folder</a>
							</li>
							<li>
								<a href="#">Delete</a>
							</li>
							<li>
								<a href="#">Print</a>
							</li>
						</ul>
					</section>
				</div>
				<button type="button" class="msgButtons green" data-toggle="modal" data-target="#Compose"><img src="images/plus.svg" class="svg">Compose</button>
			</div>
			<aside>
				<div class="searchArea">
					<form class="search">
						<input type="text" placeholder="Search Message...">
						<img src="images/magnifier-tool.svg" class="svg">
						<button type="button">Search</button>
					</form>
					<span class="checkBox">
						<input type="checkbox" name="all" id="sAll" class="hidden">
						<label for="sAll"><img src="images/checked.svg" class="svg"></label>
						Select All
					</span>
					<div class="filters">
						<div class="form-group">
							<label>Sort By</label>
							<div class="select">
								<select>
									<option value="" selected="selected">Select</option>
									<option>Date</option>
									<option>Attachments</option>
									<option>Flag</option>
								</select>
								<img src="images/left-arrow.svg" class="svg">
							</div>
						</div>
						<div class="sort">
							<button type="button" class="active"><img src="images/atoz-sorting.svg" class="svg" alt=""></button>
							<button type="button"><img src="images/ztoa-sorting.svg" class="svg" alt=""></button>
						</div>
					</div>
				</div>
				<div class="scrollArea">
					<div class="MessagesList">
						<ul class="list-unstyled">
							<li>
								<span class="flag"><img src="images/flag.svg" alt="Flag"></span>
								<div class="checkBox">
									<input type="checkbox" name="all" id="f11" class="hidden">
									<label for="f11"><img src="images/checked.svg" class="svg"></label>
								</div>
								<div>
									<span class="attachTime">
										<img src="images/attachment-paperclip-symbol-of-interface.svg" class="svg">
										<span class="time">6:02</span>
									</span>
									<span class="from">Merry Jonson</span>
									<p>Integer mattis ut leo sit amet includes...</p>
								</div>
							</li>
							<li class="messageActive">
								<div class="checkBox">
									<input type="checkbox" name="all" id="f11" class="hidden">
									<label for="f11"><img src="images/checked.svg" class="svg"></label>
								</div>
								<div>
									<span class="attachTime">
										<img src="images/attachment-paperclip-symbol-of-interface.svg" class="svg">
										<span class="time">6:02</span>
									</span>
									<span class="from">Merry Jonson</span>
									<p>Integer mattis ut leo sit amet includes...</p>
								</div>
							</li>
							<li class="messageNew">
								<div class="checkBox">
									<input type="checkbox" name="all" id="f11" class="hidden">
									<label for="f11"><img src="images/checked.svg" class="svg"></label>
								</div>
								<div>
									<span class="attachTime">
										<img src="images/attachment-paperclip-symbol-of-interface.svg" class="svg">
										<span class="time">6:02</span>
									</span>
									<span class="from">Merry Jonson</span>
									<p>Integer mattis ut leo sit amet includes...</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</aside>
			<aside>
				<div class="MessageTopbar">
					<h2 class="messageSubject">
						<span class="starred active"><img src="images/flag.svg"></span>
						Subject line goes here <span class="dateTime">Today, 03rd November, 2017 - 03:45pm</span>
						<div class="emailActions">
							<button class="MessageFill"><img src="images/information.svg" class="svg"> Delivery Information</button>
							<button class="MessageFill orange"><img src="images/forward.svg" class="svg"> Forward</button>
							<button class="MessageFill blue"><img src="images/reply-all.svg" class="svg"> Reply All</button>
							<button class="MessageFill blue"><img src="images/reply.svg" class="svg"> Reply</button>
						</div>
					</h2>
					<div class="messageProfile">
						<img src="images/temp-picture.jpg">
						David Watson
					</div>
				</div>
				<div class="scrollArea">
					<div class="MessageContent">
						<div class="otherReceipents" data-number="( 34 )">
							<span class="toggle">
								<img src="images/left-arrow.svg" alt="Toggle" class="svg">
							</span>
							<section>
								<span>Rishi R</span>
								<span>Chef test</span>
							</section>
						</div>
						<div class="MessageBody">
							<h4>Hi Karry,</h4>
							<p>Mauris imperdiet accumsan erat vel tincidunt. Sed ullamcorper sapien in nibh rhoncus pellentesque. Fusce porta nec erat nec vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer malesuada mi vel eros vehicula, nec lacinia purus semper. Phasellus blandit arcu et elit volutpat dapibus. Duis mauris mi, placerat et pretium vitae, tincidunt maximus mauris.</p>
						</div>
						<div class="MessageAttach">
							<a href="#"><img src="images/attachment-paperclip-symbol-of-interface.svg" class="svg"> View Attachment</a>
						</div>
						<div class="MessageReply">
							<form class="inBodyForm">
								<textarea placeholder="Write your reply here..."></textarea>
							</form>
						</div>
					</div>
				</div>
			</aside>
			<!-- <div class="noMessageSelected">
				<article>
					<div>
						<p><img src="images/mail.svg" class="svg"></p><br>
						Select an item to read
					</div>
				</article>
			</div> -->
		</section>
	</section>


	<div id="Compose" class="modal fade composeMail" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Compose Message</h4>
				</div>
				<div class="modal-body">
					<form class="inBodyForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>To</label>
									<select class="js-example-basic-multiple" name="states[]" multiple="multiple">
										<option value="" selected="selected">Select</option>
										<option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</div>
								<div class="form-group">
									<label>TEMPLATE</label>
									<div class="select">
										<select>
											<option value="" selected="selected">Select</option>
											<option></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<img src="images/left-arrow.svg" class="svg">
									</div>
								</div>
								<div class="form-group">
									<label>SUBJECT</label>
									<input type="text">
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea></textarea>
									<span class="remainingChar">5000 characters remaining</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="composeTemplate">
									<label>Template Name</label>
									<div class="row">
										<div class="col-md-7">
											<div class="form-group">
												<input type="text">
											</div>
										</div>
										<div class="col-md-5">
											<button>CANCEL</button>
											<button class="save">Save</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group composeAtachFile pull-left">
								<label>
									<img src="images/attachment-paperclip-symbol-of-interface.svg" class="svg"> Attachment
									<input type="file" class="hidden">
								</label>
							</div>
						</div>
						<div class="row">
							<div class="composefooter">
								<button type="button"><img src="images/send-mail.svg" class="svg"> Send</button>
								<button type="button" class="Close" data-dismiss="modal">Close</button>
							</div>
						</div>
					</form>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(".otherReceipents .toggle").on('click', function(){
			$(this).toggleClass("rotate");
			$(".otherReceipents section").toggleClass("show");
		});
		$('.residentSelectChange .filter').click(function () {
			$('.residentSelectChange .fields').toggleClass('expand');
		});
		$(document).ready(function () {
			$('.js-example-basic-multiple').select2();
		});
		$('input[name="dateRange"]').daterangepicker({
			"opens": "left",
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		});
		$('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
		});

		$('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
			$(this).val('');
		});
	</script>
</body>

</html>