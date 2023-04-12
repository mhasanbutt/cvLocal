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

	<div class="ticket_list">
		<section class="list">
			<h3>Tickets</h3>
			<p>
				If you can't find a solution to your problem in our knowledgebase, you can submit a ticket.
			</p>
			<ul class="list-unstyled">
				<li>
					<span>
						<small>Ticket Id</small> #324-x7f
					</span>
					<span>
						<small>Last Update</small> 18-08-2020
					</span>
					<span>
						<small>Last Replier</small> George Michael
					</span>
					<span>
						<small>Status</small> <span class="status">Pending</span>
					</span>
					<span>
						<small>Created</small> 18-08-2020
					</span>
					<a href=""><img src="images/eye.png" alt=""></a>
				</li>
				<li>
					<span>
						<small>Ticket Id</small> #324-x7f
					</span>
					<span>
						<small>Last Update</small> 18-08-2020
					</span>
					<span>
						<small>Last Replier</small> George Michael
					</span>
					<span>
						<small>Status</small> <span class="status green">Replied</span>
					</span>
					<span>
						<small>Created</small> 18-08-2020
					</span>
					<a href=""><img src="images/eye.png" alt=""></a>
				</li>
			</ul>
		</section>
		<section class="form">
			<h3>Create New Ticket</h3>
			<p>
				Please describe your complete question regarding the issue you facing using Care VIsion, and we will try our best to guide you through it.
			</p>
			<br clear="all">
			<form action="" class="inBodyForm">
				<div class="form-group">
					<label for="for">Creating Ticket For</label>
					<div class="select">
						<select name="" id="">
							<option value="">Hardware Issue</option>
						</select>
						<img src="images/left-arrow.svg" alt="" class="svg">
					</div>
				</div>
				<div class="form-group">
					<label for="for">Subject</label>
					<input type="text" name="subject" id="subject">
				</div>
				<div class="form-group">
					<label for="for">Problem/Comment/Suggestion</label>
					<textarea name="comments" id="comments"></textarea>
				</div>
				<div class="form-group">
					<label for="">Priority</label>
					<ul class="list-unstyled radio_group">
						<li>
							<input type="radio" name="priority" id="low">
							<label for="low">Low</label>
						</li>
						<li>
							<input type="radio" name="priority" id="normal">
							<label for="normal">Normal</label>
						</li>
						<li>
							<input type="radio" name="priority" id="high">
							<label for="high">High</label>
						</li>
					</ul>
				</div>
				<button type="button">Submit</button>
			</form>
		</section>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>