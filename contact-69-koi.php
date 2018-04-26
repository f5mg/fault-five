<!-- connects to database used for subscribers -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!doctype html>

<head>
	<title>Contact 69 KOI | Milwaukee SEO Company | Website Design Company</title>
	<meta name="Description" content="Contact 69 KOI Digital Marketing Agency to learn how you can start winning with our SEO Services and Website Design. Click to Find Out!">
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
	
	<?php include ('includes/footer.php'); ?>
		
	</body>
</html>