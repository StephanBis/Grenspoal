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
					<h1 id="logo"><a href="index.html">Carwash & Fuel Grenspoal</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="#banner" class="scroll">Home</a></li>
							<li><a href="#one" class="scroll">Shop</a></li>
							<li><a href="#two" class="scroll">Carwash</a></li>
							<li><a href="#four" class="scroll">Waspas</a></li>
							<li><a href="#six" class="scroll">Contact</a></li>
						</ul>
					</nav>
				</header>
				
			<!-- Home -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Welkom bij de Grenspoal</h2>
							<p>Tankstation Grenspoal is eigendom van brandstoffen <br> Tilmans-Pouls & Zoon NV uit Maaseik.</p>
						</header>
						
						<table class="image">
							<tr>
								<td colspan="2"><strong>Liter prijzen</strong></td>
							</tr>
						
						<?php	
							$host = '127.0.0.1';
							$username = 'root';
							$password = 'pxl';
							$dbname = 'grenspoal';
							
							// Create connection
							$conn = new mysqli($host, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 

							$dbh = mysql_connect( $host, $username, $password );
							mysql_select_db($dbname);
							$Sql = "SELECT * FROM prijzen WHERE Datum = CURDATE()";
							$sth = mysql_query($Sql, $dbh);
							
							while( $row = mysql_fetch_object( $sth ) )
							{
								if ($row->Naam !== "AdBlue")
								{
							?>
								<tr class="<?php echo $row->Css ?>">
									<td><?php echo $row->Naam ?></td>
									<td>€ <span class="float"><?php echo $row->Prijs ?></span></td>
								</tr>

							<?php								
								}
								else
								{
							?>
								<tr class="<?php echo $row->Css ?>">
									<td><?php echo $row->Naam ?> ®</td>
									<td>€ <span class="float"><?php echo $row->Prijs ?></span></td>
								</tr>
							<?php		
								}
							}
						?>

						</table>
					</div>
				</section>
				
			<!-- Informatie Grenspoal -->
				<section id="five" class="wrapper style1 special fade-up">
					<div class="container">
						<!-- <header class="major">
							<h2>Grenspoal</h2>
							<p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
						</header> -->
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major"><img src="images/tp.png" alt="Tilmans-Pouls" height="100%" width="100%"></span>
									<h3>Tilmans-Pouls & Zoon NV</h3>
									<p>Is reeds sinds de jaren ’60 actief in de brandstoffenwereld. Vital Tilmans is de derde generatie aan het hoofd van het familiebedrijf. Bij Grenspoal kan u terecht voor alle soorten kwaliteitsbrandstof gaande van diesel en benzine voor wegvoertuigen tot rode diesel voor landbouwtractoren en petroleum voor zibro kachels. Wij dragen service, kwaliteit en betrouwbaarheid hoog in het vaandel en combineren dit met aantrekkelijke prijzen.</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-map-marker"></span>
									<h3>Vlak aan de grens met Nederland</h3>
									<p>Omdat het station op de grens met Nederland gelegen is, hebben wij een aparte tankpiste voorzien voor land- en tuinbouwvoertuigen die vanuit Nederland rode diesel kunnen tanken aan een zeer voordelige prijs. Momenteel is er een prijsverschil van ongeveer 50 eurocent per liter tussen rode diesel en witte diesel !! Als u als Nederlandse land- of tuinbouwer kan aantonen dat u in België getankt heeft mag u immers met rode diesel in de daartoe bestemde tank van het voertuig terug naar Nederland.</p>
								</section>
								<section class="4u$ 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-shopping-cart"></span>
									<h3>Shop</h3>
									<p>Voor de opstelling van een factuur werken wij met een eigen tankkaart die voor u aangemaakt kan worden en de volgende dag reeds beschikbaar ligt in de shop. Hier kan u elke dag verse broodjes, koffie, gekoelde dranken en snacks nuttigen. Deze is trouwens ook voorzien van een ruim assortiment aan tabakswaren. Goedkoop tanken in Kinrooi - Molenbeersel. De service met een glimlach.</p>
								</section>
							</div>
						</div>						
					</div>
				</section>
			
			<!-- Shop -->
				<section id="one" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>(Tabak) Shop</h2>
							<p>Hier kan u elke dag verse broodjes, koffie, gekoelde dranken en snacks nuttigen.<br>Deze is trouwens ook voorzien van een ruim assortiment aan tabakswaren.</p>
							
							<h3>Openingsuren:</h3>
								<table>
									<tr>
										<td>Maandag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Dinsdag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Woensdag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Donderdag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Vrijdag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Zaterdag:</td>
										<td>9.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Zondag:</td>
										<td>9.00u - 20.00u</td>
									</tr>
								</table>
								<br>
						</header>						
					</div>
				</section>
			
			<!-- Carwash -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<img src="images/softwash.png" alt="Softwash Express" height="100%" width="100%">
							<h2>Welkom in onze carwash</h2>
							<p>In enkele minuten een mooie glimmende wagen.</p>
							
							<h3>Openingsuren:</h3>
								<table>
									<tr>
										<td>Maandag:</td>
										<td>Gesloten</td>
									</tr>
									<tr>
										<td>Dinsdag:</td>
										<td>9.00u - 18.00u</td>
									</tr>
									<tr>
										<td>Woensdag:</td>
										<td>9.00u - 18.00u</td>
									</tr>
									<tr>
										<td>Donderdag:</td>
										<td>9.00u - 18.00u</td>
									</tr>
									<tr>
										<td>Vrijdag:</td>
										<td>9.00u - 18.00u</td>
									</tr>
									<tr>
										<td>Zaterdag:</td>
										<td>9.00u - 17.00u</td>
									</tr>
									<tr>
										<td>Zondag:</td>
										<td>9.00u - 12.00u</td>
									</tr>
								</table>
						</header>
					</div>				
				</section>	
						<div class="content">
							<div class="container">
								<div class="row">
									<div class="3u 12u$(medium)">
										<h3>Programma 1<br>BASIC</h3>
										<table>
											<tr>
												<td>Innevelen velgen</td>
											</tr>
											<tr>
												<td>Voorwas</td>
											</tr>
											<tr>
												<td>Brilliant Polish</td>
											</tr>
											<tr>
												<td>-</td>
											</tr>
											<tr>
												<td>-</td>
											</tr>
											<tr>
												<td>Drogen</td>
											</tr>
										</table>
										<br>
										<table>
											<tr>
												<td>Zonder waspas</td>
												<td>€9</td>
											</tr>
											<tr>
												<td>Met waspas</td>
												<td>€8</td>
											</tr>
										</table>
									</div>
									<div class="3u 12u$(medium)">
										<h3>Programma 2<br>VIP</h3>
										<table>
											<tr>
												<td>Innevelen velgen</td>
											</tr>
											<tr>
												<td>Voorwas</td>
											</tr>
											<tr>
												<td>+ Bodemwas HD</td>
											</tr>
											<tr>
												<td>Brilliant Polish</td>
											</tr>
											<tr>
												<td>-</td>
											</tr>
											<tr>
												<td>Drogen</td>
											</tr>
										</table>
										<br>
										<table>
											<tr>
												<td>Zonder waspas</td>
												<td>€11</td>
											</tr>
											<tr>
												<td>Met waspas</td>
												<td>€10</td>
											</tr>
										</table>
									</div>
									<div class="3u 12u$(medium)">
										<h3>Programma 3<br>NANO</h3>
										<table>
											<tr>
												<td>Innevelen velgen</td>
											</tr>
											<tr>
												<td>Voorwas</td>
											</tr>
											<tr>
												<td>Nano wax</td>
											</tr>
											<tr>
												<td>-</td>
											</tr>
											<tr>
												<td>-</td>
											</tr>
											<tr>
												<td>Drogen</td>
											</tr>
										</table>
										<br>
										<table>
											<tr>
												<td>Zonder waspas</td>
												<td>€12</td>
											</tr>
											<tr>
												<td>Met waspas</td>
												<td>€10,50</td>
											</tr>
										</table>
									</div>
									<div class="3u 12u$(medium)">
										<h3>Programma 4<br>NANO PLUS</h3>
										<table>
											<tr>
												<td>Innevelen velgen</td>
											</tr>
											<tr>
												<td>+ Wassen velgen</td>
											</tr>
											<tr>
												<td>Voorwas</td>
											</tr>
											<tr>
												<td>+ Bodemwas HD</td>
											</tr>
											<tr>
												<td>Nano wax</td>
											</tr>
											<tr>
												<td>Drogen</td>
											</tr>
										</table>
										<br>
										<table>
											<tr>
												<td>Zonder waspas</td>
												<td>€14</td>
											</tr>
											<tr>
												<td>Met waspas</td>
												<td>€12,50</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
				
			<!-- Prijslijst Carwash -->
				<!-- <section id="three" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
						
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>	 -->		
			
			<!-- Waspas -->
			<section id="four" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Waspas</h2>
							<p>Hier kan u elke dag verse broodjes, koffie, gekoelde dranken en snacks nuttigen.<br>Deze is trouwens ook voorzien van een ruim assortiment aan tabakswaren.</p>
							<br>
							<h3>Openingsuren:</h3>
								<table>
									<tr>
										<td>Maandag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Dinsdag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Woensdag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Donderdag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Vrijdag:</td>
										<td>6.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Zaterdag:</td>
										<td>9.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Zondag:</td>
										<td>9.00u - 20.00u</td>
									</tr>
								</table>						
						</header>						
					</div>
				</section>
			
			

			<!-- Contact -->
				<section id="six" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Contact</h2>
						</header>
						<form method="post" action="#" class="container 50%">
							<div class="row uniform 100%">
								<div class="6u 12u$(xsmall)"><span class="icon alt fa-map-marker"></span> Heikempweg 1003<br>3640 Molenbeersel - Kinrooi</div>
							</div>
							<div class="row uniform 100%">
								<div class="6u 12u$(xsmall)"><span class="icon alt fa-phone"></span> +32 89 46 10 45</div>
							</div>
							<div class="row uniform 100%">
								<div class="6u 12u$(xsmall)"><span class="icon alt fa-envelope-o"></span> <a href="mailto:EMAIL"></a> EMAIL</div>
							</div>
							<div class="row uniform 100%">
								<div class="6u 12u$(xsmall)"><span class="icon alt fa-facebook-official"></span> <a href="http://www.facebook.com"></a> Facebook pagina</div>
							</div>
							<div class="row uniform 100%">
								<div class="6u 12u$(xsmall)"><input type="text" name="naam" id="naam" placeholder="Naam..." required /></div>
							</div>
							<div class="row uniform 100%">
								<div class="6u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="E-mail..." required /></div>
							</div>
							<div class="row uniform 100%">
								<div class="6u 12u$(xsmall)"><textarea style="max-width: 100%;" name="bericht" id="bericht" placeholder="Bericht..." required></textarea></div>	
							</div>
							<div class="row uniform 100%">
								<div class="6u 12u$(xsmall)"><input type="submit" value="Stuur bericht" class="fit special" /></div>
							</div>
						</form>
						<div class="container 50%">
							
						</div>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					</ul>
					<ul class="copyright">
						<li>Website gemaakt door Bisschop Software - Design door Landed</li>
					</ul>
				</footer>
				
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				
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
			<script type="text/javascript" src="assets/js/jquery.scrollTo.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			
			<script>
				jQuery(document).ready(function( $ ) {
					$('.float').counterUp({
						delay: 10, // the delay time in ms
						time: 1800 // the speed time in ms
					});
					
					$( ".scroll" ).click(function() {
						event.preventDefault();
						var o =  $( $(this).attr("href") ).offset();   
						var sT = o.top - $(".header").outerHeight(true);
						
						$('html, body').animate({
							scrollTop: sT
						}, 1000);
						
					});

					$().UItoTop({ easingType: 'easeOutQuad' });
				});
			</script>
	</body>
</html>