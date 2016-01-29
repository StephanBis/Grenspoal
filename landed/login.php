<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Carwash & Fuel Grenspoal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<a href="index.php"><img class="logo" src="images/logo.png" alt="Carwash & Fuel Grenspoal" width="400px"></a>
				<nav id="nav">
					<ul>
						<li><a href="index.html" class="button special">Terug</a></li>
					</ul>
				</nav>
			</header>

			<!-- Banner -->
			<section id="banner">
				<div class="content" style="text-align: center;">
					<h2>Login</h2>
					<form action="portaal.php" method="POST">
						<input id="gebruikersnaam" name="gebruikersnaam" maxlength="50" type="text" value="" placeholder="Gebruikersnaam" required="">	
						<br>							
						<input id="wachtwoord" name="wachtwoord" maxlength="50" type="password" value="" placeholder="Wachtwoord" required="">
						<br>
						<input type="submit" value="Inloggen">
					</form>
				</div>
			</section>
			
			<!-- Footer -->
				<footer id="footer">					
					<ul class="copyright">
						<li><a target="_blank"  href="http://bisschop-software.nl/">&copy; Bisschop Software<a></li>
					</ul>
				</footer>
				
				<a href="#" id="toTop" style="display: block;"></a>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.counterup.js"></script>
			<script src="assets/js/jquery.waypoints.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script type="text/javascript" src="assets/js/move-top.js"></script>
			<script type="text/javascript" src="assets/js/easing.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>			
			<script type="text/javascript">
		
		
		
			<script>
			jQuery(document).ready(function( $ ) {
				$('.float').counterUp({
					delay: 10, // the delay time in ms
					time: 1800 // the speed time in ms
				});
				
				//dit zorgt er normaal voor dat hij scrolled.. maar werkt nog niet
				$(".scroll").on('click','a', function(event){ 
					event.preventDefault();
					var o =  $( $(this).attr("href") ).offset();   
					var sT = o.top - $(".spotlight style3 left").outerHeight(true); // get the fixedbar height
					// compute the correct offset and scroll to it.
					//window.scrollTo(0,sT);
					$('html,body').animate({scrollTop:sT},1000);

				});
				
				$().UItoTop({ easingType: 'easeOutQuad' });
			});
			</script>
	</body>
</html>