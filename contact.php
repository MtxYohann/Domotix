<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Domotix - Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="images/icon.png" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body>
	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.html"><span>.</span>Contact<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="index.html">Accueil</a></li>
							<li><a href="services.html">Nos services</a></li>
							<li><a href="app.html">Application</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>

			</div>
			<!-- </div> -->
		</nav>

		<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
			style="background-image: url(images/Fond.png);height: 940px;" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
								<h1>Il ne faut pas être timide</h1>
								<h2>Posé nous vos questions si dessous</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<div id="fh5co-contact" class="fh5co-section animate-box">
			<div class="row">
				<div class="contact">
					<form action="#" id="form-wrap" method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Nom :</label>
								<input type="text" name="nom" placeholder="Votre nom" required class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Prénom :</label>
								<input type="text" name="prenom" placeholder="Votre prénom" required
									class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email :</label>
								<input type="email" name="email" placeholder="Votre email" required
									class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="sujet">Sujet :</label>
								<input type="text" name="sujet" placeholder="Votre sujet" required class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message :</label>
								<textarea name="message" placeholder="Votre message" required
									class="form-control"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Envoyer">
								<?php
								if (isset($_POST["message"])) {
									$message = "Ce message a été envoyé via la page contact de domotix-may.fr
									Nom : " . $_POST["nom"] . "
									Prénom : " . $_POST["prenom"] . "
									Email : " . $_POST["email"] . "
									Message : " . $_POST["message"] . "";
									$retour = mail("contact@domotix-may.fr", $_POST["sujet"], $message, "Reply-to:" . $_POST["email"]);
									if ($retour) {
										echo "<p>L'email a bien été envoyé.</p>";
									}
								}
								?>
							</div>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Lien</h4>
					<ul class="fh5co-footer-links">
						<li><a href="index.html">Accueil</a></li>
						<li><a href="services.html">Nos services</a></li>
						<li><a href="app.html">Application</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li><a>+33 7 68 42 29 69</a></li>
						<li><a>info@domotix.com</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Légal</h4>
					<ul class="fh5co-footer-links">
						<li><a href="vente.html">Condition général de vente</a></li>

					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2024 Domotix. All Rights Reserved.</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>