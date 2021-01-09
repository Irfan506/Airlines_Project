<!DOCTYPE html>
<html>
	<head>
		<title>Air bangla</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, intial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		
	</head>
	<body>
		<header class="header-area">
		    <div class="blank"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-3">
						<a href="project.html">
							<img src="Image/qatar-airways-logo.png" alt="logo">
						</a>
					</div>
				<div class="col-md-10 col-9">
					<div class="menu-icon">
						<i class="fas fa-bars"></i>
					</div>
				<nav class="menu">
					<ul>
						<li><a href="index.html">HOME</a></li>
						<li><a href="#">OUR AIRCRAFT</a>
							<ul class="charter">
							<li><a href="#">Airbus A320</a></li>
							<li><a href="#">Boeing 737</a></li>
							<li><a href="#">Douglas DC-3</a></li>
							</ul>
						</li>
						<li><a href="#">SAFETY</a>
							<p class="dialogue">Qatar Airways' onboard safety measures for passengers and<br>cabin crew include the provision of Personal Protective Equipment<br>(PPE) for cabin crew and a complimentary protective kit and disposable<br>face shields for passengers.</p>
						</li>
						<li><a href="#">CHARTERS</a>
							<ul class="charter">
							<li><a href="#">Boeing 757–$10000/hour</a></li>
							<li><a href="#">Boeing 787-8 BBJ-$30000/hour</a></li>
							<li><a href="#">Boeing 747-8 VIP-$30500/hour</a></li>
							<li><a href="#">Airbus 380 – $45000/hour</a></li>
							</ul>
						</li>
						<li><a href="#footer">HELP</a></li>
					</ul>
				</nav>
			</div>
			</div>
			</div>
		</header>
		<div class="booking">
			<div class="row1">
				<h3>Booking</h3>
			</div>
			<div class="row2">
				<div class="col-md-12">
					<ul>
					<li>
						<input type="checkbox" id="cb1">
						<label for="cb1">Round Trip</label>
					</li>
					<li>
						<input type="checkbox" id="cb2">
						<label for="cb2">One way</label>
					</li>
					<li>
						<input type="checkbox" id="cb3">
						<label for="cb3">Multi destination</label>
					</li>
					</ul>
				</div>
			</div>
			<div class="row3">
				<ul>
					<li><input type="from" placeholder="From"></li>
					<li><input type="to" placeholder="To"></li>
					<li>
						<label for="start">Departure</label>
							<input type="date" id="start" min="2020-12-30">
					</li>
					<li>
						<label for="end">Return</label>
							<input type="date" id="end" min="2020-12-31">
					</li>
				</ul>
			</div>
			<div class="row4">
				<ul>
					<li><input type="passengers" placeholder="Passengers"></li>
					<li><input type="checkbox" id="cb1">
						<label for="cb1">Economy</label>
					</li>
					<li><input type="checkbox" id="cb2">
						<label for="cb2">Business</label>
					</li>
					<li><button type="button">Show Status</button></li>
				</ul>
			</div>
		</div>
		<div class="screenshot">
			<button type="button" class="btn btn-warning">Learn more</button>
		</div>
		<div class="photo">
			<h4>Amazing fares to some of our most popular destinations</h4>
			<div class="pic1">
				<img src="image/atlanta.png">
			</div>
			<div class="pic1">
				<img src="image/dallas.png">
			</div>
			<div class="pic1">
				<img src="image/los_angeles.png">
			</div>
			<div class="pic1">
				<img src="image/ny.png">
			</div>
			<div class="more_fares">
				<button type="button" class="btn btn-outline-secondary">More  fares</button>
			</div>
		</div>
		<div class="top">
			<i class="fas fa-angle-double-up"></i>
		</div>
		<div>
			<form action="" method="POST">
				<input type="email" name="email">
				<input type="text" name="message">
			</form>
		</div>
		<footer class="footer_area" id="footer">
			<div class="col-md-12 col-3">
				<div class="foot_div">
				<ul>	
						<li><h3>Contact us</h3></li>
						<li><a href="#"><i class="far fa-question-circle"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="far fa-envelope"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				</ul>
				</div>
			</div>
			<div class="rights">
				<p>&copy; All Rights Reserved by <a href="#">Qatar Airways</a></p>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script src="https://kit.fontawesome.com/1b886c9977.js" crossorigin="anonymous"></script>
		<?php
  			if((isset($_POST["message"]) && trim($_POST["message"]) != "")&& ((isset($_POST["email"]) && trim($_POST["email"]) != "" &&(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)))){
  				$mail=$_REQUEST["email"];
  				$msg=$_REQUEST["message"];
  				$host="localhost";
  				$user="root";
  				$password="";
 			    $database="info";
  				$connect=mysqli_connect($host, $user,$password, $database);
  				if($connect==true)
  				{
	 				 $insert="INSERT INTO users_info values('$mail','$msg')";
	  				$runquery=mysqli_query($connect,$insert);
  				}
	 
  				}

		?>
	</body>
</html>