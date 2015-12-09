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
					<h1 id="logo"><a href="index.php">Carwash & Fuel Grenspoal</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="#banner" class="scroll">Home</a></li>
							<li><a href="#one" class="scroll">Shop</a></li>
							<li><a href="rodediesel.html" class="scroll">Rode Diesel</a></li>
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
						
						<table class="prijzen">
							<tr>
								<td colspan="2"><strong>Liter prijzen</strong></td>
							</tr>
						
						<?php	
							$host = '127.0.0.1';
							$username = 'grenspoal';
							$password = 'Grenspoal123';
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

						<tr>
							<td colspan="2"><a href="assets/Productspecificaties Grenspoal.zip">Download productspecificaties</a></td>
						</tr>
						
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
								<div class="row breed">
									<div class="3u 12u$(medium)">
										<h3>Programma 1<br>BASIC</h3>
										<table>
											<tr class="base">
												<td>Innevelen velgen</td>
											</tr>
											<tr>
												<td>Voorwas</td>
											</tr>
											<tr>
												<td>Brilliant Polish</td>
											</tr>
											<tr class="filler">
												<td></td>
											</tr>
											<tr class="filler">
												<td></td>
											</tr>
											<tr>
												<td>Drogen</td>
											</tr>
										</table>
										<br>
										<table>
											<tr>
												<td>Zonder waspas</td>
												<td><strong>€ 9,00</strong></td>
											</tr>
											<tr>
												<td>Met waspas</td>
												<td><strong>€ 8,00</strong></td>
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
											<tr class="filler">
												<td></td>
											</tr>
											<tr>
												<td>Drogen</td>
											</tr>
										</table>
										<br>
										<table>
											<tr>
												<td>Zonder waspas</td>
												<td><strong>€ 11,00</strong></td>
											</tr>
											<tr>
												<td>Met waspas</td>
												<td><strong>€ 10,00</strong></td>
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
											<tr class="filler">
												<td></td>
											</tr>
											<tr class="filler">
												<td></td>
											</tr>
											<tr>
												<td>Drogen</td>
											</tr>
										</table>
										<br>
										<table>
											<tr>
												<td>Zonder waspas</td>
												<td><strong>€ 12,00</strong></td>
											</tr>
											<tr>
												<td>Met waspas</td>
												<td><strong>€ 10,50</strong></td>
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
												<td><strong>€ 14,00</strong></td>
											</tr>
											<tr>
												<td>Met waspas</td>
												<td><strong>€ 12,50</strong></td>
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
							<p>Hoe meer u herlaadt, hoe meer korting!</p>							
							<p>Onze waspas is beschikbaar vanaf €50.</p>
							<img src="images/waspas.png" alt="Waspas" />
							<br>
							<br>
							<h3>Herlaadmogelijkheden:</h3>
							<table>
								<tr>
									<td>Herlading van €100,-</td>
									<td class="pijl"><img src="images/rodepijl.png" alt="Waspas"/></td>
									<td>€5,- gratis</td>
								</tr>
								<tr>
									<td>Herlading van €250,-</td>
									<td class="pijl"><img src="images/rodepijl.png" alt="Waspas"/></td>
									<td>€25,- gratis</td>
								</tr>
								<tr>
									<td>Herlading van €500,-</td>
									<td class="pijl"><img src="images/rodepijl.png" alt="Waspas"/></td>
									<td>€75,- gratis</td>
								</tr>
									<td>4x4, bestelwagen,... </td>
									<td class="pijl"><img src="images/rodepijl.png" alt="Waspas"/></td>
									<td>+ €2,-</td>
								<tr>
								</tr>
							</table>
						</header>						
					</div>
				</section>
			
			<!-- Wasboxen -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>							
							<h2>Welkom in onze wasboxen</h2>
							<p>In enkele minuten een mooie glimmende wagen.</p>
							<p>U kunt gebruik maken van de wasboxen door middel van de muntjes die u kunt verkrijgen aan de automaat buiten aan de shop. 
							Elk van deze muntjes geeft een bepaalde tijd de mogelijkheid om gebruik te maken van de wasbox. Hoe meer muntjes u tegelijkertijd ingooit, hoe langer u kunt spoelen/wassen.
							Het wasprogramma is terug te vinden in de wasboxen of is overzichtelijk terug te vinden in het volgende deel van de website.<br>Wasboxen zijn altijd volledig beschikbaar.</p>																
						</header>
					</div>				
				</section>	
						<div class="content">
							<div class="container">
								<div class="row">
									<div class="4u 12u$(medium)">
										<h3>Wasprogramma wasboxen</h3>
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
									</div>
									<div class="4u 12u$(medium)">
										<h3>Prijzen muntjes wasboxen:</h3>
										<table>
											<tr>
												<td>5 muntjes</td>
												<td class="pijl"><img src="images/rodepijl.png" alt="Waspas"/></td>
												<td>€5,-</td>
											</tr>
											<tr>
												<td>10 muntjes + 1 muntje gratis</td>
												<td class="pijl"><img src="images/rodepijl.png" alt="Waspas"/></td>
												<td>€10,-</td>
											</tr>
											<tr>
												<td>20 muntjes + 2 muntjes gratis</td>
												<td class="pijl"><img src="images/rodepijl.png" alt="Waspas"/></td>
												<td>€20,-</td>
											</tr>			
										</table>
									</div>
									<div class="4u 12u$(medium)">
										<h3>Programma 3<br>NANO</h3>										
									</div>									
								</div>
							</div>
						</div>						
			<!-- Contact -->
				<section id="six" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Contact</h2>
							<p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
						</header>
						<form method="post" action="#" class="container 50%">
							<div class="row uniform 50%">
								<div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="4u$ 12u$(xsmall)"><input type="submit" value="Get Started" class="fit special" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Bisschop Software</li>
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