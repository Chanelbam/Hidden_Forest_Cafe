<?php
    error_reporting(E_ALL);
    ini_set('display_startup_errors',1); 
    ini_set('display_errors',1);
    error_reporting(-1);

    include 'database.php';
	require_once 'validation.php';

    $pdo = db_connect();
	$valid = validate();
	handle_form_submission($valid);

	get_all_appointments();
?>

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
			<a href="form.php" class="active">Reserve</a>
			<a href="documentation.php">Documentation</a>
			<a href="sources.php">Sources</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		
		<main class="main-body-center">
			<h1>Please note that we only accept reservations a week in advance.</h1>
			<div class="container">
				<form action="form.php" method="post">
					<label for="full_name"><h3>Name</h3>
						<input type="text" name="full_name" placeholder="Your name..">
						<?php the_validation_message('full_name'); ?>
					</label>
					<label for="email"><h3>Email</h3>
						<br><input type="text" name="email" placeholder="Your email.."><br>
						<?php the_validation_message('email'); ?>
					</label>

					<label for="restaurant_day"><h3>Day</h3>
						<select name="restaurant_day">   
							<option value="Monday">Monday</option>
							<option value="Tuesday">Tuesday</option>
							<option value="Wednesday">Wednesday</option>
							<option value="Thursday">Thursday</option>
							<option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
							<option value="Sunday">Sunday</option>
						</select>
					</label>

					<label for="restaurant_time"><h3>Time</h3>
						<select name="restaurant_time">
							<option value="9:00 AM">9:00 AM</option>
							<option value="9:30 AM">9:30 AM</option>
							<option value="10:00 AM">10:00 AM</option>
							<option value="10:30 AM">10:30 AM</option>
							<option value="11:00 AM">11:00 AM</option>
							<option value="11:30 AM">11:30 AM</option>
							<option value="12:00 PM">12:00 PM</option>
							<option value="12:30 PM">12:30 PM</option>
							<option value="1:00 PM">1:00 PM</option>
							<option value="1:30 PM">1:30 PM</option>
							<option value="2:00 PM">2:00 PM</option>
							<option value="2:30 PM">2:30 PM</option>
							<option value="3:00 PM">3:00 PM</option>
							<option value="3:30 PM">3:30 PM</option>
							<option value="4:00 PM">4:00 PM</option>
						</select>
					</label>

                    <label for="occupants"><h3>Guests</h3>
					<select name="occupants">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					</label>
					<br><br>
					<button class="reserve" type="submit" value="Submit" name="Button">Submit</button>
				</form>
				<?php 
					the_reservations();

				?>
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