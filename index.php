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
			
			<a href="index.php" class="active">Home</a>
			<a href="menu.php">Menu</a>
			<a href="contactus.php">Contact Us</a>
			<a href="form.php">Reserve</a>
			<a href="documentation.php">Documentation</a>
			<a href="sources.php">Sources</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		
		<main>
			<div class="welcome"> 
				<h1><img src = "./logo/hidden-forest-cafe-1x.png" alt="Home" id="logo" alt="A hidden cafe in the forest."></a> WELCOME TO THE HIDDEN FOREST CAFE</h1>
				<p>Here at the Hidden Forest Cafe we have all the deserts and beverages from your favorite childhood movies! Come on in and join us for a cup of tea from Belles tea selection.</p>
				<button class="reserve" type="submit" value="Submit" name="Button"><a href="form.php">Reserve now!</a></button>
				<section class="video">
					<video autoplay muted loop id="servicesVideo">
						<source src="./video/forest.mp4" type="video/mp4">
					</video>
				</section>
			</div>
				
			<div class="container">
				<img src="./images/home-banner.jpg" alt="logo">
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