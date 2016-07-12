<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	

    
	if ($current_file_name == $requestUri)
        echo 'class="active"';
	
}

?>


<div>
	<nav class="navbar-default">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="<?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "active" : "");?>"><a href="/">Home</a></li>
				<li  class="dropdown">
					<a class="dropdown-toggle" href="/pages\product">Our Products
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li  ><a href="/pages\insurance">Insurance</a></li>
						<li  ><a href="#">Investment</a></li>
						<li  ><a href="#">Others</a></li> 
					</ul>
				</li>
				<li><a href="#">Careers</a></li> 
				<li><a href="#">Our Associates</a></li> 
	
			</ul>
			
			<ul class="nav navbar-nav navbar-right" id="contact-us">
				<li <?=echoActiveClassIfRequestMatches("contact")?>><a href="/pages\contact">Contact Us</a></li>
			</ul>

		</div>
	</nav>
</div>