<!DOCTYPE HTML>
<html>
	<head>
		<title>Carwash & Fuel Grenspoal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/jquery.bxslider.css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<a href="index.php"><img class="logo" src="images/logo.png" alt="Carwash & Fuel Grenspoal" width="400px"></a>
					<nav id="nav">
						<ul>
							<li><a href="#banner" class="scroll">Home</a></li>
							<!-- <li><a href="#eight" class="scroll">Nieuws</a></li> -->
							<li><a href="#one" class="scroll">Shop</a></li>
							<li><a href="rodediesel.php" class="scroll">Rode Diesel</a></li>
							<li><a href="#two" class="scroll">Carwash</a></li>
							<li><a href="#four" class="scroll">Waspas</a></li>
							<li><a href="#seven" class="scroll">Wasboxen</a></li>
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
								<td colspan="2"><h3>Liter prijzen</hr></td>
							</tr>
						
						<?php
							session_start();
							include 'db.php';

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
							
							if (mysql_num_rows($sth) === 0)
							{
								?>
									<tr>
										<td></td>
										<td>Er zijn geen prijzen opgegeven voor vandaag!</td>
									</tr>
								<?php
							}
							else
							{
								while($row = mysql_fetch_object( $sth ))
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
								<section class="4u 6u(large) 12u$(medium)">
									<span class="icon alt major"><a target="_blank"  href="http://www.tilmans-pouls.be/"> <img src="images/tp.png" alt="Tilmans-Pouls" height="100%" width="100%"></a></span>
									<h3>Tilmans-Pouls & Zoon NV</h3>
									<p>
									Is reeds sinds de jaren ’60 actief in de brandstoffenwereld. Vital Tilmans is de derde generatie aan het hoofd van het familiebedrijf. 
									Bij Grenspoal kan u terecht voor alle soorten kwaliteitsbrandstof gaande van diesel en benzine voor wegvoertuigen tot rode diesel voor landbouwtractoren en petroleum voor zibro kachels. 
									Wij dragen service, kwaliteit en betrouwbaarheid hoog in het vaandel en combineren dit met aantrekkelijke prijzen.
									<br>
									<i class="icon fa-long-arrow-right"></i><a target="_blank" href="http://www.tilmans-pouls.be/">  Link naar Tilmans-Pouls</a>
									</p>
									
									
								</section>
								<section class="4u 6u$(large) 12u$(medium)">
									<span class="icon alt major fa-map-marker"></span>
									<h3>Vlak aan de grens met Nederland</h3>
									<p>Omdat het station op de grens met Nederland gelegen is, hebben wij een aparte tankpiste voorzien voor land- en tuinbouwvoertuigen die vanuit Nederland rode diesel kunnen tanken aan een zeer voordelige prijs. Momenteel is er een prijsverschil van ongeveer 50 eurocent per liter tussen rode diesel en witte diesel !! Als u als Nederlandse land- of tuinbouwer kan aantonen dat u in België getankt heeft mag u immers met rode diesel in de daartoe bestemde tank van het voertuig terug naar Nederland.</p>
								</section>
								<section class="4u$ 6u(large) 12u$(medium)">
									<span class="icon alt major fa-shopping-cart"></span>
									<h3>Shop</h3>
									<p>Voor de opstelling van een factuur werken wij met een eigen tankkaart die voor u aangemaakt kan worden en de volgende dag reeds beschikbaar ligt in de shop. Hier kan u elke dag verse broodjes, koffie, gekoelde dranken en snacks nuttigen. Deze is trouwens ook voorzien van een ruim assortiment aan tabakswaren. Goedkoop tanken in Kinrooi - Molenbeersel. De service met een glimlach.</p>
								</section>
							</div>
						</div>						
					</div>
				</section>
				
			<!-- Nieuws -->
				<section id="eight" class="wrapper style1 special fade-up">
					<div class="container">
						<header>
							<h2>Nieuws</h2>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="12u 12u(large) 12u$(medium) news">
									<ul class="bxslider">
										<?php 
											include 'db.php';

											// Create connection
											$conn = new mysqli($host, $username, $password, $dbname);
											// Check connection
											if ($conn->connect_error) {
												die("Connection failed: " . $conn->connect_error);
											} 

											$dbh = mysql_connect( $host, $username, $password );
											mysql_select_db($dbname);
											$Sql = "SELECT * FROM nieuws ORDER BY Datum desc";
											$sth = mysql_query($Sql, $dbh);
											
											$index = 4;
											
											if (mysql_num_rows($sth) === 0)
											{
												?>
													<div class="row uniform">
														Er is op dit moment geen nieuws!
													</div>
												<?php
											}
											else
											{
												while($row = mysql_fetch_object( $sth ))
												{
													if ($index === 0)
													{
														break;
													}
													else
													{
														$index--;
														
														?>
														    <li>
																<span class="icon alt major"><?php $date = new DateTime($row->Datum); echo $date->format('d-m-Y'); ?></span>
																<h3><?php echo $row->Titel; ?></h3>
																<p><?php echo $row->Beschrijving; ?></p>
																<hr>
															</li>
														<?php
													}
												}
											}
										?>
									</ul>
								</section>
							</div>
						</div>						
					</div>
				</section>
			
			<!-- Shop -->
				<section id="one" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/Tanken.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>(Tabak) Shop</h2>
							<p>Hier kan u elke dag verse broodjes, koffie, gekoelde dranken en snacks nuttigen.<br>Deze is trouwens ook voorzien van een ruim assortiment aan tabakswaren.</p>
							
							<h3>Openingsuren:</h3>
								<table>
									<tr>
										<td>Maandag:</td>
										<td>7.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Dinsdag:</td>
										<td>7.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Woensdag:</td>
										<td>7.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Donderdag:</td>
										<td>7.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Vrijdag:</td>
										<td>7.00u - 20.00u</td>
									</tr>
									<tr>
										<td>Zaterdag:</td>
										<td>8.00u - 18.00u</td>
									</tr>
									<tr>
										<td>Zondag:</td>
										<td>9.00u - 18.00u</td>
									</tr>
								</table>								
								<br>
						</header>						
					</div>
				</section>
			
			<!-- Carwash -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/Carwash4.jpg" alt="" /></span>
					<div class="content">
						<header>
							<img src="images/softwash.png" alt="Softwash Express" height="100%" width="100%">
							<h2>Welkom in onze carwash</h2>
							<p>
							In enkele minuten een mooie glimmende wagen.
							<br>
							<i class="icon fa-long-arrow-right"></i><a target="_blank" href="http://www.softwashexpress.be/">  Link naar Softwash Express</a>
							</p>
							
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
								<br>
								<br>
						</header>
					</div>				
				</section>	
						<div class="programma">
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
					<span class="image fit main bottom"><img src="images/Carwash3.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Waspas</h2>
							<p>Hoe meer u herlaadt, hoe meer korting!</p>							
							<p>
							Onze waspas is beschikbaar vanaf €50. Er zijn meerdere herlaadmogelijkheden
							<br>
							<br>
							<i class="icon fa-long-arrow-right"></i><a target="_blank" href="http://www.softwashexpress.be/index/be-nl/8660/">  Waspas online bestellen</a>
							</p>
							<img src="images/waspas.png" alt="Waspas" />
							<br>
							<br>
							<h3>Herlaadmogelijkheden:</h3>
							<table>
								<tr>
									<td>Herlading van €100,-</td>
									<td><i class="icon fa-long-arrow-right"></i></td>
									<td>€ 5,00 gratis</td>
								</tr>
								<tr>
									<td>Herlading van €250,-</td>
									<td><i class="icon fa-long-arrow-right"></i></td>
									<td>€ 25,00 gratis</td>
								</tr>
								<tr>
									<td>Herlading van €500,-</td>
									<td><i class="icon fa-long-arrow-right"></i></td>
									<td>€ 75,00 gratis</td>
								</tr>
									<td>4x4, bestelwagen,... </td>
									<td><i class="icon fa-long-arrow-right"></i></td>
									<td>+ € 2,00</td>
								<tr>
								</tr>
							</table>
						</header>						
					</div>
				</section>
			
			<!-- Wasboxen -->
				<section id="seven" class="spotlight style2 right">
					<span class="image fit main"><img src="images/Station4.jpg" alt="" /></span>
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
								<div class="row breed">
									<div class="6u 12u$(medium)">
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
									</div>
									<div class="6u 12u$(medium)">
										<h3>Prijzen muntjes wasboxen:</h3>
										<table>
											<tr>
												<td>5 muntjes</td>
												<td><i class="icon fa-long-arrow-right"></i></td>
												<td>€ 5,00</td>
											</tr>
											<tr>
												<td>10 muntjes + 1 muntje gratis</td>
												<td><i class="icon fa-long-arrow-right"></i></td>
												<td>€ 10,00</td>
											</tr>
											<tr>
												<td>20 muntjes + 2 muntjes gratis</td>
												<td><i class="icon fa-long-arrow-right"></i></td>
												<td>€ 20,00</td>
											</tr>			
										</table>
									</div>							
								</div>
							</div>
						</div>						
			<!-- Contact -->
				<section id="six" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2 style="color:#fcfcfc;">Contact</h2>
						</header>
						<form method="post" action="mail.php" class="container 100%">
							<div class="row uniform 50%">
								<div class="6u 12u$(medium)">
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)"><input style="box-shadow:inset 0 0 0 1px rgba(255, 255, 255, 0.3)" type="text" maxlength="50" name="naam" id="naam" placeholder="Volledige naam" required /></div>
									</div>
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)"><input style="box-shadow:inset 0 0 0 1px rgba(255, 255, 255, 0.3)" type="email" maxlength="250" name="email" id="email" placeholder="E-mailadres" required /></div>
									</div>
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)"><textarea style="box-shadow:inset 0 0 0 1px rgba(255, 255, 255, 0.3)" name="bericht" maxlength="250" id="bericht" placeholder="Bericht" required></textarea></div>
									</div>
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)"><input type="checkbox" id="nieuwsbrief" name="nieuwsbrief" value="Nieuwsbrief" checked /> <label for="nieuwsbrief">Aanmelden voor nieuwsbrief</label></div>
									</div>
									<div class="row uniform 50%">
										<div class="12u$ 12u$(xsmall)"><input type="submit" value="Verzend bericht" class="fit" /></div>
									</div>
									<div class="row uniform 50%">
										<div class="12u$ 12u$(xsmall)">
											<?php
												if (isset($_SESSION["message"]))
												{
													?>
														<div class="alert alert-success">
															<?php echo $_SESSION["message"]; ?>
														</div>
													<?php
													unset($_SESSION["message"]);
												}
											?>
										</div>
									</div>
								</div>
								<div class="6u 12u$(medium)">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.0785208930592!2d5.724182615758003!3d51.18077567958276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0cd113493231d%3A0xce3b2dd097cf7e30!2sSoftwashexpress+Molenbeersel!5e0!3m2!1snl!2snl!4v1452529183865" width="100%" height="450" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
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
		<script src="assets/js/jquery.bxslider.min.js"></script>
		
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