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
	// get_appointments();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hidden Forest Cafe</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
	</head>	
	<body>	
	
	<div id="wrapper">
		<div id="mainNav">
			<header>
				<a href="index.html">
				<img	src="./logo/hidden-forest-cafe-1x.png" 
						alt="Home"
						id="logo"
				/>
				</a>
			</header>
			
			<nav>
				<div>
					<ul id="nav_ul">
						<li><a class="navigation_list_item"  href="index.html">Home</a></li>
						<li><a class="navigation_list_item"  href="menu.html">Menu</a></li>
						<li><a class="navigation_list_item"  href="contactus.html">Contact us</a></li>
						<li><a class="current_page"  href="form.php">Reserve</a></li>
					</ul>
				</div>
			</nav>
		</div>
		
		<main>
			<h3>Please note that we only accept reservations a week in advance.</h3>
			<div class="container">
				<form action="form.php" method="post">
					<label for="full_name">Name
						<input type="text" name="full_name" placeholder="Your name..">
						<?php the_validation_message('full_name'); ?>
					</label>
					<label for="email">Email
						<br><input type="text" name="email" placeholder="Your email.."><br>
						<?php the_validation_message('email'); ?>
					</label>

					<label for="restaurant_day">Day
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

					<label for="restaurant_time">Time
						<select name="restaurant_time">
							<option value="1000AM">9:00 AM</option>
							<option value="1000AM">9:30 AM</option>
							<option value="1000AM">10:00 AM</option>
							<option value="1030AM">10:30 AM</option>
							<option value="1100AM">11:00 AM</option>
							<option value="1130AM">11:30 AM</option>
							<option value="1200AM">12:00 PM</option>
							<option value="1230AM">12:30 PM</option>
							<option value="0100PM">1:00 PM</option>
							<option value="0130PM">1:30 PM</option>
							<option value="0200PM">2:00 PM</option>
							<option value="0230PM">2:30 PM</option>
							<option value="0300PM">3:00 PM</option>
							<option value="0320PM">3:30 PM</option>
							<option value="0430PM">4:00 PM</option>
						</select>
					</label>

                    <label for="occupants">Occupants
					<select name="occupants">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					</label>

					<button type="submit" value="Submit" name="Button">Submit</button>
				</form>
				<?php 
					the_reservations();

				?>
			</div>
		</main>
		
		<footer>
			<p>Follow us on social media!</p>
			<div>
			</div>
			<p>©2021 Hidden Forest Cafe .copyright</p>
		</footer>
	</div>
	
	</body>	
</html>