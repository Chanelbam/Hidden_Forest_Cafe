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
	
	<div id="wrapper" width="90%">
		
		<div class="topnav" id="myTopnav">
			
			<a href="index.php">Home</a>
			<a href="menu.php" class="active">Menu</a>
			<a href="contactus.php">Contact Us</a>
			<a href="form.php">Reserve</a>
			<a href="documentation.php">Documentation</a>
			<a href="sources.php">Sources</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		
		<main>
			<div class="row">
				<section class="main-body-center">
					<h1 class="head" style="margin-top: 60px;">Menu</h1>
						<p class="head">Lunch begins at 11:30AM up until 2:00PM</p><br><br>
						<div id="content">
						<!--Lunch-->
						<div id="menu" class="column">
							<h2 style="font-style: italic;">Lunch</h2>
							<dl>		
								<h4><dt><strong>Soups</strong></dt></h4>
								<dt style="font-style: italic;"><strong>Tomato soup</strong></dt>
								<dd>- Creamy Tomato soup with a sprinkle of parsley served with a hard boiled egg</dd>
								<dt style="font-style: italic;"><strong>Potato soup</strong></dt>
								<dd>- Potato and leek soup served with naan bread</dd>
							</dl>
							<dl>
								<h4><dt><strong>Salads</strong></dt></h4>
								<dt style="font-style: italic;"><strong>Dragon Crisp</strong></dt>
								<dd>- A caeser salad with charred crutons mixed in</dd>
								<dt style="font-style: italic;"><strong>Spider Cobb</strong></dt>
								<dd>- a fresh bed of cobb lettus with scrambled mundane chicken eggs and a sprinkle of chopped ham</dd>
							</dl>
							<dl>
								<h4><dt><strong>Speciality sandwiches</strong></dt></h4>
								<dt style="font-style: italic;"><strong>The Great One</strong></dt>
								<dd>- Quarter pound of beef on top off leafy greens with 7 different cheeses melted on top of the sesame bun</dd>
								<dt style="font-style: italic;"><strong>Chimera</strong></dt>
								<dd>- Mystery meat: choose A B or C and wait to surprised</dd>
							</dl>
						</div>
						<div class="column">
							<h2 style="font-style: italic;">Desserts</h2>
							<dl>
								
								<dt style="font-style: italic;"><strong>Goldie Locks</strong></dt>
								<dd>- Knotted breadsticks with a sugar plum butter glaze</dd>
								
								
								<dt style="font-style: italic;"><strong>Little Red Riding Hood Combo</strong></dt>
								<dd>- An assortment of muffins with a complementary jug of juice, grapes and a fruit salad</dd>

								
								<dt style="font-style: italic;"><strong>Snow Pie</strong></dt>
								<dd>- A red apple pie with a heap of powdered sugar on top</dd>

								
								<dt style="font-style: italic;"><strong>Aurora Borealis Waffles</strong></dt>
								<dd>- 2 or 3 Rainbow waffles with a raspberry glaze and a mixed berry jam on the side</dd>

								
								<dt style="font-style: italic;"><strong>Eat Me Cookies</strong></dt>
								<dd>- A platter of shortbread cookies </dd>		
								
							</dl>
						</div>
						<div class="column">
							<h2 style="font-style: italic;">Drinks</h2>
							<dl>
								<h4><dt><strong>Breakfast Drinks</strong></dt></h4>
								<p> Coffee and tea will be served throughout the day</p>
								<dt style="font-style: italic;"><strong>Orange juice</strong></dt>
								<dt style="font-style: italic;"><strong>Apple juice</strong></dt>
								<dt style="font-style: italic;"><strong>Mixed Berry juice</strong></dt>
								<dt style="font-style: italic;"><strong>Smoothies</strong></dt>
								<dd>- Tropical</dd>
								<dd>- Veggie</dd>
								<dd>- Strawberry</dd>
								<dt style="font-style: italic;"><strong>Honey milk with a touch of cinnamon</strong></dt>
								<h4><dt><strong>Midday Drinks</strong></dt></h4>
								<dt style="font-style: italic;"><strong>Cool Drinks</strong></dt>
								<dd>- Coke-cola</dd>
								<dd>- Fanta</dd>
								<dd>- Iced Tea</dd>
							</dl>
						</div>
					</div>
				</div>
				</section>
			</div>
		</main>
	</div>

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