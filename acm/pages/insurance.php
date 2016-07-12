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
			
			INSURANCE
			
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