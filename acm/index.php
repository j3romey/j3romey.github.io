<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" type="image/x-icon" href="http://acmgroup.ca/favicon.ico?" />
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=devvice-width, initial-scale=1">
		
		
		<!-- bootstrap and jquery links -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		
		<!-- default stylesheet for each page -->
		<link rel="stylesheet" href="css\template.css" type="text/css">
		<link rel="stylesheet" href="css\index.css" type="text/css">
		
		
		
	</head>
	
	<body>
	
		<!-- header & navbar -->
		<?php
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/includes/header.php";
			include_once($path);
		?>

		<!--navbar -->
		<?php
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/includes/nav.php";
			include_once($path);
		?>
		<!-- body -->
		<div id="body">
			<div>
				<h1 class="body-header">
					Our Mission
				</h1>
				<div class="row">
					<div class="col-xs-6">
						<p>
							Insurance and Investment </br>
							Planning Group INC. </br>
							is commited to provide you, our clients, </br>
							the	proper financial solutions based </br> 
							on your needs and situations.
							
						</p>
					</div>
					<div class="col-xs-6">
						<img class="img-circle" src="http://placehold.it/300x300?text=Placeholder"> 
					</div>
				</div>
			</div>
			<div>
				<h1 class="body-header">
					Our Vision
				</h1>
				<div class="row">
					<div class="col-xs-6">
						<p>
							
							Insurance and Investment </br>
							Planning Group INC. </br>
							will be the company that best understands </br>
							and provides unique financial product</br>
							solutions to our clients.
						</p>
					</div>
					<div class="col-xs-6">
						<img class="img-circle" src="http://placehold.it/300x300?text=Placeholder"> 
					</div>
				</div>
			</div>
			<div id="hello">
				<h1 class="body-header">
					Our Products
				</h1>
				<div class="product-list">
					<p> INSURANCE PRODUCTS </p>
					<ul>
						<li> Life </li>
						<li> Disability </li>
						<li> Mortgage Protection </li>
						<li> Critical Illness </li>
					</ul>
				</div>
				
				<div class="product-list">
					<p> INVESTMENT PRODUCTS </p>
					<ul>
						<li> RRSP </li>
						<li> TFSA </li>
						<li> RESP </li>
						<li> Savings Plan </li>
						<li> Seg. Funds </li>
					</ul>
				</div>
				
				<div class="product-list">
					<p> OTHERS </p>
					<ul>
						<li> Extended Health Care Plans </li>
						<li> Travel Insurance Plans </li>
						<li> Group Plans </li>
					</ul>
				</div>
				
			</div>
		<div>
		<!-- footer -->
		<div id="footer">
			<div class="footer-element">
				<h3>Contact Us</h3>
			</div>
			<div class="footer-element">
				<h3>Products & Services</h3>
			</div>
			<div class="footer-element">
				<h3>About Us</h3>
			</div>
		</div>
		
	</body>
	
	
</html>