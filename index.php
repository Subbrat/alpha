<?php
session_start();
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="./s6css.css">
	<link rel="stylesheet" type="text/css" href="./check.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="s6-red">
	<!--x-->
	<!-- Sidebar/menu -->
	<nav class=" s6-sidebar s6-bar-block s6-white s6-animate-left s6-text-grey s6-collapse s6-top s6-center"
		style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
		<p>Hello
			<?php echo $_SESSION['username']; ?>
		</p>
		<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<h3 class="s6-padding-64 s6-center">demo shop</h3>
		<a href="javascript:void(0)" onclick="s6_close()"
			class="s6-bar-item s6-button s6-padding s6-hide-large">CLOSE</a>

		<a href="#tshirt" onclick="s6_close()" class="s6-bar-item s6-button">t - Shirts </a>
		<a href="#hoodies" onclick="s6_close()" class="s6-bar-item s6-button">Hoodies</a>
		<a href="#stationary" onclick="s6_close()" class="s6-bar-item s6-button"> Stationary </a>
	</nav>
	<!-- Top menu on small screens -->
	<header class="s6-container s6-top s6-hide-large s6-white s6-xlarge s6-padding-16">
		<span class="s6-left s6-padding">demo shop</span>
		<a href="javascript:void(0)" class="s6-right s6-button s6-white" onclick="s6_open()">☰</a>
	</header>
	<!-- Overlay effect when opening sidebar on small screens -->
	<div class="s6-overlay s6-hide-large s6-animate-opacity" onclick="s6_close()" style="cursor:pointer"
		title="close side menu" id="myOverlay"></div>
	<!-- !PAGE CONTENT! -->
	<div class="s6-main s6-red " style="margin-left:300px">
		<!-- Push down content on small screens -->
		<div class="s6-red s6-hide-large" style="margin-top:83px"></div>
		<!--x-->
		<header class="s6-container s6-xlarge">
			<p class="s6-left">The Merchandise</p>
			<p class="s6-right">
				<i class="fa fa-shopping-cart s6-margin-right"></i>
				<i class="fa fa-search"></i>
			</p>
		</header>

		<div class="s6-display-container s6-container">
			<img src="./imges/head.jpg" alt="Jeans" style="width:100%">
			<div class="s6-display-topleft s6-text-white" style="padding:24px 48px">
				<h1 class="s6-jumbo s6-hide-small">New arrivals</h1>
				<h1 class="s6-hide-large s6-hide-medium">New arrivals</h1>
				<h1 class="s6-hide-small">COLLECTION 2016</h1>
				<p><a href="#jeans" class="s6-button s6-black s6-padding-large s6-large">SHOP NOW</a></p>
			</div>
		</div>

		<div class="s6-container s6-text-grey" id="jeans">
			<p>8 items</p>
		</div>







		<!-- Product grid -->
		<div class="s6-row s6-grayscale" id="tshirt">
			<div class="s6-col l3 s6">
				<div class="s6-container">
					<img src="./imges/prodimg/1.jpg" style="width:100%">
					<p>Ripped Skinny Jeans<br><b>$24.99</b></p>
				</div>
				<div class="s6-container">
					<img src="./imges/prodimg/2.jpg" style="width:100%">
					<p>Mega Ripped Jeans<br><b>$19.99</b></p>
				</div>
			</div>

			<div class="s6-col l3 s6">
				<div class="s6-container">
					<div class="s6-display-container">
						<img src="./imges/prodimg/3.jpg" style="width:100%">
						<span class="s6-tag s6-display-topleft">New</span>
						<div class="s6-display-middle s6-display-hover">
							<button class="s6-button s6-black">Buy now <i class="fa fa-shopping-cart"></i></button>
						</div>
					</div>
					<p>Mega Ripped Jeans<br><b>$19.99</b></p>
				</div>
				<div class="s6-container">
					<img src="./imges/prodimg/4.jpg" style="width:100%">
					<p>Washed Skinny Jeans<br><b>$20.50</b></p>
				</div>
			</div>

			<div class="s6-col l3 s6">
				<div class="s6-container">
					<img src="./imges/prodimg/5.jpg" style="width:100%">
					<p>Washed Skinny Jeans<br><b>$20.50</b></p>
				</div>
				<div class="s6-container">
					<div class="s6-display-container">
						<img src="./imges/prodimg/6.jpg" style="width:100%">
						<span class="s6-tag s6-display-topleft">Sale</span>
						<div class="s6-display-middle s6-display-hover">
							<button class="s6-button s6-black">Buy now <i class="fa fa-shopping-cart"></i></button>
						</div>
					</div>
					<p>Vintage Skinny Jeans<br><b class="s6-text-red">$14.99</b></p>
				</div>
			</div>

			<div class="s6-col l3 s6">
				<div class="s6-container">
					<img src="./imges/prodimg/7.jpg" style="width:100%">
					<p>Vintage Skinny Jeans<br><b>$14.99</b></p>
				</div>
				<div class="s6-container">
					<img src="./imges/prodimg/8.jpg" style="width:100%">
					<p>Ripped Skinny Jeans<br><b>$24.99</b></p>
				</div>
			</div>
		</div>
		<!--x-->
	</div>
	<script>
		// Script to open and close sidebar
		function s6_open() {
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("myOverlay").style.display = "block";
		}
		function s6_close() {
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("myOverlay").style.display = "none";
		}

	</script>
	<!--x-->
</body>

</html>