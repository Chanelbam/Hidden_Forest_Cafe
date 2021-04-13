<?php?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hidden Forest Cafe</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@100&display=swap" rel="stylesheet">


		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		
		<link 	rel="shortcut icon" 
				type="image/x-icon"
				href="logo/hidden-forest-cafe-1x.png" >
	</head>
	<script src="./app/app.js"></script>
	<body>

	<div id="wrapper">
		
		<div class="topnav" id="myTopnav">
			
			<a href="index.php">Home</a>
			<a href="menu.php">Menu</a>
			<a href="contactus.php">Contact Us</a>
			<a href="form.php">Reserve</a>
			<a href="documentation.php" class="active">Documentation</a>
			<a href="sources.php">Sources</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		
		<main>
			
				<div>
					<div class="welcome"> 
					<h1><img src = "./logo/hidden-forest-cafe-1x.png" alt="Home" id="logo">Documentation</h1>
						<div>
							<h2>How to use the site:</h2>
							<h3>Home Page</h3>
							<ul>
								<li>The home page is mobile-responsive and allows the user to navigate throughout the website.</li>
								<li>You can use the top navigation bar in order to navigate the site.</li>
								<li>Alternatively, the home page also has a reserve button that links to a form to make a reservation.</li>
								<li>The hero landing page area features a looping video with muted sound and an image beneath to showcase the ambience of our cafe.
								<li><i>Note</i>: The logo has an animation that uses both CSS Transition (logo grows bigger) and @keyframes (logo wiggles), and it is also part of our 3 pages mark. The webpage uses flex throughout the whole website while the hamburger menu requires a simple JavaScript function in order to work properly.</li>
							</ul>
							<h3>Menu</h3>
							<ul>
								<li>The menu showcases all of the delicious delicacies that is available at the cafe.</li>
								<li>The items are seperated as a dl style list which allows for a more descriptive style of list.</li>
								<li><i>Note</i>: This page is part of our 3 pages mark.</li>
							</ul>
							<h3>Contact Us</h3>
							<ul>
								<li>This part of the website displays a static map of an area in Switzerland where our cafe is "located".</li>
								<li>It also offers a little information about the cafe.</li>
								<li>Lastly, we have a mini profile for Kya and Linda as a fun aside.</li>
								<li><i>Note</i>: This page is part of our 3 pages mark.</li>
							</ul>
							<h3>Reserve (Form)</h3>
							<ul>
								<li>The user can make a reservation on this page.
								<li>The user will be promoted to supply their full name and email (which are validated) and the day of the week, time, and amount of guests for their visit.
								<li>This cafe only allows for users to book a week in advance because the location makes it difficult to have constant supply of resources to keep it operational beyond the timeframe of a week.
								<li><i>Note</i>: This fulfills the criteria for a form that offers validation. A user can enter their full name and email. The full name is validated by allowing only characters from a to z or A to Z while allowing for spaces. The email field also has form validation by requiring a valid email. Security measures have also been added to prevent SQL injection. A successful reservation will prompt a success message with the confirmation details, and the user can see all current reservations at the bottom of the page.This page is also part of our 3 pages mark.</li>
							</ul>
						</div>
					</div>
				</div>
			
		</main>
		
		<div class="footer-basic">
		<footer>
			<ul class="list-inline">
				<li class="list-inline-item"><a href="index.php">Home</a></li>
				<li class="list-inline-item"><a href="menu.php">Menu</a></li>
				<li class="list-inline-item"><a href="contactus.php">Contact Us</a></li>
				<li class="list-inline-item"><a href="form.php">Reserve</a></li>
				<li class="list-inline-item"><a href="documentation.php">Documentation</a></li>
				<li class="list-inline-item"><a href="sources.php">Sources</a></li>
			</ul>
			<p class="copyright">The Hidden Forest Cafe © 2021</p>
		</footer>
	</div>
</body>
</html>