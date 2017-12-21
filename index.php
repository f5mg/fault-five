<?php include ('php/db.php'); ?>
<html lang="en">

<!doctype html>
<!--<base href="https://localhost/fault-five" target="_blank">-->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head> 

	<title>Fault Five Media Group | One of the Best Website Companies in Wisonsin offering SEO for Wisconsin Small Businesses</title>
  <meta name="Description" content="Fault Five Media Group is a Milwaukee Website Company that Builds Profitable Websites backed by Purposeful Search Engine Optimization. Visit to Learn More!">
	<link rel="stylesheet" type="text/css" href="style.min.css">
	
</head>

	<body>
		<ul class="main-nav">
			<li><a class="main-nav main-nav__link" href="../index.php">Home</li>
		<li><a class="main-nav main-nav__link" href="#" onClick="hidePostcard()">&#9776;</a>
			</li>
		</ul>
		

		<div class="js-postcard-menu js-postcard-menu--hidden" id="postcard-menu">

		</div>

		
		<button onClick="hideSocialWidget()">X</button>
		<div class="js-social-widget js-social-widget--hidden" id="social-widget">
			
		</div>

		<script type="application/javascript">
			function hidePostcard() {
				var element = document.getElementById( "postcard-menu" );
				element.classList.toggle( "js-postcard-menu--hidden" );
			}
			
			function hideSocialWidget() {
				var element = document.getElementById( "social-widget" );
				element.classList.toggle( "js-social-widget--hidden" )
			}
		</script>

	</body>

</html>