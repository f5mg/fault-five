
 <!-- connects to database used for subscribers -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!doctype html>

<head>
	<title>Fault Five Media Group | One of the Best Website Companies in Wisconsin offering SEO for Wisconsin Small Businesses</title>
	<meta name="Description" content="Fault Five Media Group is a Milwaukee Website Company that Builds Profitable Websites backed by Purposeful Search Engine Optimization. Visit to Learn More!">
	<link href="style.min.css" rel="stylesheet" type="text/css">
	<?php include ('includes/head.php'); ?>

	<!-- head tag is closed within include: head.php -->

	<body>
		<div class="header">
			<div class="header__stripe"></div>
			<span class="header__title">Fault Five Media Group</span>
			
			<!-- move full main nav into PHP include for global modifications -->
			<div class="js-main-nav">
				<ul class="list">
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Affiliates</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div><!--main-nav-->
		</div><!--header-->

		<div class="main parallax">
			<div class="overlay">
			<h2 class="main__header">The Time to Grow Your Online Business is NOW</h2>
				<div class="box">

					<div class="flexed__item">
					<h3 class="box__header">Invest in Your Online Presence</h3>
					</div>

					<div class="flexed__item">
					<h3 class="box__header">Draw Customers to Your Website</h3>
					</div>
			
				</div><!--box-->
			</div><!--overlay-->
		</div><!--main-->

		<form class="form" action="subscribe.php" method="post">
			<h4>Stay in The Loop</h4>
			<p>We will continue to send out our monthly emails providing tips and tricks on how to enhance your website's value.</p>
			<div class="form__functions">
				<input class="form__input" name="name" placeholder="Name"/>
				<input class="form__input" name="email" placeholder="Email"/>
				<button class="form__input btn" type="submit" name="" value="send"><span>Send </span></button>
			</div><!--form__funtions-->
		</form>



		<div class="footer">
			<div class="flexed__item">
				<ul class="list">
					<li><a href="#"></a></li>
				</ul>
			</div>
			
			<div class="flexed__item"></div>
		</div><!-- div.footer -->

		<div class="banner banner--footer"></div>
	</body>
</html>