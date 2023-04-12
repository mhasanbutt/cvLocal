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

	<div class="ticket_detail">
		<section class="detail">
			<h3>
                Ticket: <strong>#324-x7f</strong> <span class="status" data-reason="Hardware Issue">Pending</span>
            </h3>
            <span>Created: <b>16-08-2020</b></span> <span>Last Updated: <b>16-08-2020</b></span>
			<form class="inBodyForm">
				<div class="form-group">
					<textarea name="new_message" id="new_message" placeholder="Write your reply here"></textarea>
				</div>
				<div class="text-right">
					<span>Change Status</span>
					<div class="select">
						<select name="status" id="status">
							<option value="">Pending</option>
						</select>
						<img src="images/left-arrow.svg" alt="" class="svg">
					</div>
					<button type="button">Submit</button>
				</div>
			</form>
		</section>

		<section class="replies">
			<ul class="list-unstyled">
				<li class="admin">
					<img src="images/ticketing-logo.png" alt="" class="admin_reply">
					<span class="date pull-right">16-08-2020 - 14:38</span>
					<span class="name">
						Rishi J. <br>
						<span class="designation">Admin</span>
					</span>
					<p>
					Hi George,<br>
					In sit amet neque vitae metus condimentum dignissim. Morbi id vestibulum mi. Mauris maximus nulla vitae lorem blandit maximus. Aenean id accumsan justo.
					</p>
				</li>
				<li>
					<span class="avatar">
						GM
					</span>
					<span class="date pull-right">16-08-2020 - 14:38</span>
					<span class="name">
						Rishi J. <br>
						<span class="designation">Admin</span>
					</span>
					<article class="subject">I am not able to understand process of adding a new resident</article>
					<p>
					Hi George,<br>
					In sit amet neque vitae metus condimentum dignissim. Morbi id vestibulum mi. Mauris maximus nulla vitae lorem blandit maximus. Aenean id accumsan justo.
					</p>
				</li>
			</ul>
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