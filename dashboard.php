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

	<section class="dashboard">
		
		<div class="row">
			<div class="col-md-8">
				<div class="user">
					<span class="name">
						<small>Welcome Back,</small> <br>
						Thomson Edwards
					</span>
				</div>
				<a href="#">
					Tickets
					<span>Help Desk System</span>
					<img src="images/genie_icon.png" alt="">
				</a>
				<div class="clearfix">
					<span class="toDo">You have <strong>7 notification</strong>(s) and <strong>15 task</strong>(s) in
						To-Do List</span>
					<span class="lastLog pull-right">Last Login: <i>15 Jan, 2018 - 09:35am</i></span>
				</div>
				<ul class="quickLinks list-unstyled clearfix">
					<li>
						<a href="#"><img src="images/communicationbook.svg" class="svg"><span>Comm Book</span></a>
					</li>
					<li>
						<a href="#"><img src="images/alarm.svg" class="svg"><span>Alert Centre</span></a>
					</li>
					<li>
						<a href="#"><img src="images/archive.svg" class="svg"><span>Filing Cabinet</span></a>
					</li>
					<li>
						<a href="#"><img src="images/dailynotes.svg" class="svg"><span>Daily Notes</span></a>
					</li>
					<li>
						<a href="#"><img src="images/medication.svg" class="svg"><span>Medication</span></a>
					</li>
					<li>
						<a href="#"><img src="images/preview.svg" class="svg"><span>Careplan Review</span></a>
					</li>
					<li>
						<a href="#"><img src="images/business-cards-database.svg" class="svg"><span>Contacts</span></a>
					</li>
				</ul>
				<div class="row">
					<div class="col-md-6">
						<section class="chartGraphs">
							<div class="title">
								<span><img src="images/expand.svg" class="svg"></span>
								Chart
								<span><img src="images/settings.svg" class="svg"></span>
							</div>
							<button class="md-trigger">3D Slit</button>
						</section>
					</div>
					<div class="col-md-6">
						<section class="chartGraphs">
							<div class="title">
								<span><img src="images/expand.svg" class="svg"></span>
								Chart
								<span><img src="images/settings.svg" class="svg"></span>
							</div>
						</section>
					</div>
				</div>
				<section class="chartGraphs commBook dBs">
					<div class="title">
						<span><img src="images/external.svg" class="svg"></span>
						Communication Book
						<span><img src="images/settings.svg" class="svg"></span>
					</div>
					<div class="scrollArea">
						<table class="table table-condensed table-stripped">
							<thead>
								<tr>
									<th>Module</th>
									<th>Date / Time</th>
									<th>Service User</th>
									<th>Description</th>
									<th>Added By</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#"><img src="images/communicationbook.svg" class="svg"></a></td>
									<td>12-01-2018 12:49</td>
									<td>Mrs Mary Duddy</td>
									<td>Test comm Mary</td>
									<td>Suzanne Adams</td>
								</tr>
								<tr>
									<td><a href="#"><img src="images/communicationbook.svg" class="svg"></a></td>
									<td>12-01-2018 12:49</td>
									<td>Mrs Mary Duddy</td>
									<td>Test comm Mary</td>
									<td>Suzanne Adams</td>
								</tr>
								<tr>
									<td><a href="#"><img src="images/communicationbook.svg" class="svg"></a></td>
									<td>12-01-2018 12:49</td>
									<td>Mrs Mary Duddy</td>
									<td>Test comm Mary</td>
									<td>Suzanne Adams</td>
								</tr>
								<tr>
									<td><a href="#"><img src="images/communicationbook.svg" class="svg"></a></td>
									<td>12-01-2018 12:49</td>
									<td>Mrs Mary Duddy</td>
									<td>Test comm Mary</td>
									<td>Suzanne Adams</td>
								</tr>
								<tr>
									<td><a href="#"><img src="images/communicationbook.svg" class="svg"></a></td>
									<td>12-01-2018 12:49</td>
									<td>Mrs Mary Duddy</td>
									<td>Test comm Mary</td>
									<td>Suzanne Adams</td>
								</tr>
								<tr>
									<td><a href="#"><img src="images/communicationbook.svg" class="svg"></a></td>
									<td>12-01-2018 12:49</td>
									<td>Mrs Mary Duddy</td>
									<td>Test comm Mary</td>
									<td>Suzanne Adams</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>
			</div>
			<div class="col-md-4">
				<article class="quickView">
					Total Users <br><span>In-Active (5)</span> <span>06</span>
				</article>
				<article class="quickView">
					Total Users <br><span>In-Active (5)</span> <span>06</span>
				</article>
				<article class="quickView">
					Total Users <br><span>In-Active (5)</span> <span>06</span>
				</article>
				<article class="quickView">
					Total Users <br><span>In-Active (5)</span> <span>06</span>
				</article>
				<section class="chartGraphs toDoList dBsList">
					<div class="title">
						<span><img src="images/external.svg" class="svg"></span>
						To-Do List
						<span><img src="images/settings.svg" class="svg"></span>
					</div>
					<div class="scrollArea">
						<ul class="TDList list-unstyled">
							<li class="overDue">
								<span>0 min</span>
								Nam ut nibh non velit rhoncus mattis. Suspendisse tincidunt tristique tincidunt.
							</li>
							<li class="pending">
								<span>45 min</span>
								Nam ut nibh non velit rhoncus mattis. Suspendisse tincidunt tristique tincidunt.
							</li>
							<li class="normal">
								<span>1 day</span>
								Nam ut nibh non velit rhoncus mattis. Suspendisse tincidunt tristique tincidunt.
							</li>
							<li>
								<span>1 day</span>
								Nam ut nibh non velit rhoncus mattis. Suspendisse tincidunt tristique tincidunt.
							</li>
							<li>
								<span>1 day</span>
								Nam ut nibh non velit rhoncus mattis. Suspendisse tincidunt tristique tincidunt.
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</section>

	<div class="md-modal md-effect-13 red" id="modal-13">
		<div class="md-content">
			<h3>Unread Policies Reminder</h3>

			<div>
				<span class="toptext">You have the following unread policies, procedures and memorandums</span>

				<div class="scrollArea">
					<ul class="list-unstyled">
						<li>
							<img src="images/policy.jpg" class="img-before" alt="">
							<span>Policies & Procedures <i>(2)</i></span>
							<p>Care Vision, Care Vision </p>
							<img src="images/view.jpg" class="img-after" alt="">
						</li>
						<li>
							<img src="images/memorandum.jpg" class="img-before" alt="">
							<span>Memorandum <i>(3)</i></span>
							<p>Test, New memo, memo randums </p>
							<img src="images/view.jpg" class="img-after" alt="">
						</li>
						<li>
							<img src="images/meeting.jpg" class="img-before" alt="">
							<span> Staff Meeting <i>(4)</i></span>
							<p>
								<main>Application</main>- 17-09-2021 (09:16) <small>[Confirm Minutes]</small>
							</p>

							<img src="images/view.jpg" class="img-after" alt="">

							<div class="red">
								<span>Cancelled Meetings (2)</span>
							</div>

							<div class="agreement">
								<input type="checkbox" id="agree1" hidden>
								<label for="agree1"></label>
								<main class="main-again">Care Vision</main>- 17-09-2021 (09:16)
							</div>
							<div class="agreement">
								<input type="checkbox" id="agree2" hidden>
								<label for="agree2"></label>
								<main class="main-again">Meeting for Desktop</main>- 17-09-2021 (09:16)
							</div>
							<div class="agreement">
								<button class="md-dismiss">Dismiss</button>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<footer class="bottom-text">
				<button class="md-continue">Continue to Dashboard</button>
			</footer>
		</div>
	</div>
	<div class="md-overlay"></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('.md-trigger').click(function () {
			$('.md-modal').addClass('md-show');
		});
		$('.md-close').click(function () {
			$('.md-modal').removeClass('md-show');
		});
	</script>
	</script>
</body>

</html>