<!DOCTYPE>
<?php


include("functions/functions.php");


?>
<html>
	<head>
		<title>corposhop.mx</title>
		
		
		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
<body>
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
	<!--Header starts here-->
	<div class="header_wrapper">
	<img id="logo" src="images/Geeko_logo.png"/>
	<img id="banner" src="images/logo.gif"/>
	</div>
	<!--Header ends here-->
	
	<!--Navigation Bar starts here-->
	<div class="menubar">
		
		<ul id="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">All Products</a></li>
			<li><a href="#">My Account</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Shopping Cart</a></li>
			<li><a href="#">Contact Us</a></li>
			
		</ul>
		
		
		<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="Search a Product"/ >
				<input type="submit" name="search" value="Search" />
			</form>
			
		</div>
			
		</div>
		<!--Navigation Bar ends here-->	
	
	<!--Content wrapper starts here-->
	<div class="content_wrapper">
		
		<div id="sidebar">
		
			<div id="sidebar_title">Categories</div>
			
			<ul id="cats">
			
				<?php getCats(); ?>
			
		
			<div id="sidebar_title">Brands</div>
			
			<ul id="cats">
			
				<?php getBrands(); ?>
			
			<ul>
		
		</div>
			
		<div id="content_area">This is content area</div>
	</div>
	<!--Content wrapper ends here-->
		
	<div id="footer">
	
	<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by corposhop.mx</h2>
	
	</div>
	
	
	
	
	
	
	
	
	
	</div>
<!--Main Container ends here-->
	



</body>
</html>

