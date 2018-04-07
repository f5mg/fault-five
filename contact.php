
 <!-- connects to database used for subscribers -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!doctype html><head>
	<title>Contact 69 Koi - The Best Website Company Offering Purposeful Search Engine Optimization</title>
	<meta name="Description" content="69 Koi is a web development and marketing company that Builds Profitable Websites backed by Purposeful Search Engine Optimization. Visit to Learn More!">
	<link href="style.min.css" rel="stylesheet" type="text/css">
	<?php include ('includes/head.php'); ?>

	<!-- head tag is closed within include: head.php -->

	<body>
	<?php include ('includes/main-nav.php'); ?>
	
	<?php include ('includes/site-header.php'); ?>
	
	<div class="main">
		<div class="main__field">
			<form class="form" method="post" action="php/send-mail.php">
				<h3>We want to hear from you.</h3>
				<p>Please fill out the form below and our team will reach out to you within 24 hours. If you have any questions in the meantime we can be reached by phone at 262-422-2059.</p>
				<div class="form__functions form__functions--footer">
				<input class="form__input" name="name" placeholder="name" value="name"/>
				<input class="form__input" name="email" placeholder="email" value="email"/>
				<input class="form__input" type="submit" name="submit"/>
				</div>
				</form>
		</div><!-- main field -->
	</div><!-- main -->
	
	
	<div class="footer__nav">
		<span>69 KOI  &#169; Copyright 2018</span>
		
		<ul class="list">
		<li><a href="#">Privacy Policy</a></li>
		<li><a href="#">Terms & Conditions</a></li>
		</ul>
	</div><!-- footer nav -->
	
			<script type="application/javascript">
function openMenu() {
document.getElementById("fullpage-menu").classList.toggle("fullpage-menu--hidden");
document.getElementById("menu-btn").classList.add("fullpage-menu--hidden");
}

function closeMenu() {
document.getElementById("fullpage-menu").classList.toggle("fullpage-menu--hidden");
document.getElementById("menu-btn").classList.remove("fullpage-menu--hidden");
}
</script>
	</body>
</html>