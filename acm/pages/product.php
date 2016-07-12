<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=devvice-width, initial-scale=1">
		
		<!-- bootstrap and jquery links -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		
		<!-- default stylesheet for each page -->
		<link rel="stylesheet" href="../css\template.css" type="text/css">
		<link rel="stylesheet" href="../css\product.css" type="text/css">
		
		
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
			
			<div class="header-photo">
				<img src="http://placehold.it/1210x400?text=Placeholder"> 
			</div>
			<div class="product-services">
				<h1> Products & Services </h1>
			</div>
			
			<div class="row">
				<div class="col-xs-4">
					<img class="img-circle center-image" src="http://placehold.it/300x300?text=Placeholder"> 
					<p>Insurance</p>
					<ul>
						<li> Life </li>
						<li> Disability </li>
						<li> Mortgage Protection </li>
						<li> Critical Illness </li>
					</ul>
				</div>
				<div class="col-xs-4">
					<img class="img-circle center-image" src="http://placehold.it/300x300?text=Placeholder"> 
					<p>Investment<p>
					<ul>
						<li> RRSP </li>
						<li> TFSA </li>
						<li> RESP </li>
						<li> Savings Plan </li>
						<li> Seg. Funds </li>
					</ul>
				</div>
				<div class="col-xs-4">
					<img class="img-circle center-image" src="http://placehold.it/300x300?text=Placeholder"> 
					<p>Other</p>
					<ul>
						<li> Extended Health </br>Care Plans </li>
						<li> Travel Insurance Plans </li>
						<li> Group Plans </li>
					</ul>
				</div>
			</div>
			
		</div>
		
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