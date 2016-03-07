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
							<li><a href="index.php" class="scroll">Terug</a></li>							
						</ul>
					</nav>
				</header>
				
			<!-- Home -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Rode Diesel tanken in Belgi&#235;</h2>
							<p>Tankstation Grenspoal is eigendom van brandstoffen <br> Tilmans-Pouls & Zoon NV uit Maaseik.</p>
						</header>						
					</div>
				</section>	
				
			<!-- Informatie Rode Diesel -->
				<section id="five" class="wrapper style1 special fade-up">
					<div class="container">
						<!-- <header class="major">
							<h2>Grenspoal</h2>
							<p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
						</header> -->
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(large) 12u$(medium)">
									<span class="icon alt major fa-map-marker"></span>
									<h3>Nederlanders tanken in Belgie</h3>
									<p>
										Nederlandse klanten mogen rode diesel enkel tanken met een landbouwvoertuig (speciaal kenteken) of met een speciaal gemachtig voertuig dat een kenteken voor het buitenland heeft.											 
										<br>Aan het tanken van rode diesel in het buitenland hangen eveneens verschillende voorwaarden vast.
										
										<h3>Voorwaarden:</h3>
										<table style="text-align:left;">
											<tr>
												<td>- Het landbouwvoertuig is zelf in Belgi&#235; geweest om te tanken.</td>
											</tr>
											<tr>
												<td>- De rode diesel is in Belgi&#235 getankt in het betreffende landbouwvoertuig.</td>
											</tr>
											<tr>
												<td>- De rode diesel zit in het normale brandstofreservoir van het betreffende werktuig/tractor.</td>
											</tr>
											<tr>
												<td>- Als wij u controleren, moet u aantonen aan de hand van een ticket dat de rode diesel in Belgi&#235 is getankt.</td>
											</tr>
											<tr>
											<td><i class="icon fa-long-arrow-right"></i><a target="_blank" href="http://download.belastingdienst.nl/douane/docs/nieuwsbrief_rode_diesel_acc1121z5fd.pdf">  Link naar douane</a></td>
											</tr>
										</table>										
										 
									</p>
								</section>
								<section class="4u 6u$(large) 12u$(medium)">
									<span class="icon alt major fa fa-car"></span>
									<h3>Mobiele tank vullen</h3>
									<p>
									Alleen de vaste tank van het betreffende voertuig mag gevuld worden, dit betekent dat er geen mobiele tanks afgetankt mogen worden om er bijvoorbeeld andere machines in Nederland mee te vullen.
									<br>
									Als u getankt heeft in Belgi&#235; moet u dit altijd kunnen aantonen aan de hand van een kassaticket.								
									</p>
								</section>
								<section class="4u$ 6u(large) 12u$(medium)">
									<span class="icon alt major fa fa-university"></span>
									<h3>BTW recupereren</h3>
									<p>
									Een veelgestelde vraag is of de betaalde BTW terug te recuperen is. Dit is mogelijk via de volgende link.
									<br>
									<i class="icon fa-long-arrow-right"></i><a target="_blank" href="http://ccff02.minfin.fgov.be/KMWeb/document.do?method=view&id=68fc07cc-81d3-44a9-a36f-f390ec7cb23b#findHighlighted">  Link naar Federale Overheid</a>
									<br>
									<i class="icon fa-long-arrow-right"></i><a target="_blank" href="http://www.ondernemersplein.nl/regel/teruggaaf-btw-buitenland/">  Link naar handleiding recuperatie BTW</a>
									
									
									</p>
									</section>
							</div>
						</div>						
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Bisschop Software</li>
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