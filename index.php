<!-- connects to database used for subscribers -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!doctype html>

<head>
	<title>69 KOI - Digital Marketing Agency | Website Design & SEO Services</title>
	<meta name="Description" content="69 Koi is a web development and marketing company that Builds Profitable Websites backed by Purposeful Search Engine Optimization. Visit to Learn More!">
	<?php include ('includes/head.php'); ?>

	<!-- head tag is closed within include: head.php -->

	<body>

		<?php include ('includes/main-nav.php'); ?>

		<?php include ('includes/site-header.php'); ?>

		<div class="main">

			<div class="main__field center-text">

				<h3>Invest in immediate growth for your business.</h3>
				<h4>Here's How</h4>
				<i class="fas fa-angle-down animated bounce"></i>

			</div>
			<!-- main__field -->

			<div class="main__field">

				<div class="banner">

					<div class="banner__section mainBanner1">
						<div class="banner__header">
							<h2>1. CREATE</h2>
						</div>
						<!-- banner header -->

						<span>It’s simple. Make a good-looking website.</span>
					</div>
					<!-- banner section -->

					<div class="banner__section">
						<div class="banner__image">
							<video src="images/site-build.mp4" type="video/mp4" width="100%" height="auto" autoplay>
							</video>
						</div>
						<!-- banner image -->
					</div>
					<!-- banner section -->
				</div>
				<!-- banner -->

				<div class="banner banner--water-bg">
					<div class="banner__section mainBanner2">
						<div class="banner__header">
							<h2>2. GET FOUND</h2>
						</div>
						<!-- banner header -->

						<span>SEO & Digital marketing strategies that’ll skyrocket your profits & clients.</span>
					</div>
					<!-- banner section -->

					<div class="banner__section">
						<div class="banner__image">
							<img src="images/get_found.jpg" width="100%"/>
						</div>
						<!-- banner image -->
					</div>
					<!-- banner section -->
				</div>
				<!-- banner -->

				<div class="banner animated fadeIn">

					<div class="banner__section">
						<div class="banner__header">
							<h2>3. KEEP GROWING</h2>
						</div>
						<!-- banner header -->

						<span>Analyze. Adapt your game-plan.</span>
					</div>
					<!-- banner section -->

					<div class="banner__section banner__section--row" style="min-height: 30vw">
					<div class="graph-bar graph-bar--1"></div>
					<div class="graph-bar graph-bar--2"></div>
					<div class="graph-bar graph-bar--3"></div>
					<div class="graph-bar graph-bar--4"></div>
					<div class="graph-bar graph-bar--5"></div>
					</div>
					<!-- banner section -->

				</div>
				<!-- banner -->

			</div>
			<!-- main field -->


		</div>
		<!-- main -->


		<?php include ('includes/footer.php'); ?>
		
		<script type="text/javascript">
			document.addEventListener('scroll', function() {
  var graphBar1 = document.querySelector('.graph-bar--1');
  var graphBar2 = document.querySelector('.graph-bar--2');
  var graphBar3 = document.querySelector('.graph-bar--3');
  var graphBar4 = document.querySelector('.graph-bar--4');
  var graphBar5 = document.querySelector('.graph-bar--5');
  if(window.scrollY >= graphBar1.scrollTop) {
    graphBar1.classList.add('graph-bar--1-animate');
  }
  if(window.scrollY >= graphBar2.scrollTop) {
    graphBar2.classList.add('graph-bar--2-animate');
  }
  if(window.scrollY >= graphBar3.scrollTop) {
    graphBar3.classList.add('graph-bar--3-animate');
  }
  if(window.scrollY >= graphBar4.scrollTop) {
    graphBar4.classList.add('graph-bar--4-animate');
  }
  if(window.scrollY >= graphBar5.scrollTop) {
    graphBar5.classList.add('graph-bar--5-animate');
  }
});
		</script>
	</body>
</html>