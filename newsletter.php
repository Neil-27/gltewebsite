<?php

if($_POST["submit"]) {
    $recipient="GLakesTreeExperts@gmail.com";
    $subject="Newsletter Signup";
    $senderEmail=$_POST["senderEmail"];


    $mailBody="Email: $senderEmail\n";

    mail($recipient, $subject, $mailBody, "From: <$senderEmail>");

    $thankYou="<p>Thank you! You have signed up for our newsletter.</p>";
}

?><!DOCTYPE html>

<html>
<head>
		<title>Signup</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/TMForm.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
		})
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body id="top">

<header>

			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<!--<img src="photos/logo.png" alt="Your Happy Family">-->
						</a>
						<div class="slogan"></div>
					</h1>
				</div>
			</div>
			<div class="clear"></div>
			<div class="menu_block">
				<div class="container_12">
					<div class="grid_12">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="index-1.html">Services</a></li>
								<li><a href="index-2.html">Gallery</a></li>
								<li><a href="index-4.html">Contacts</a></li>
								<li class="current"><a href="contact.php">Newsletter</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
	<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_8">
	
    				<?=$thankYou ?>
    			</div>
    		</div>
    </div>

   
</body>

</html>