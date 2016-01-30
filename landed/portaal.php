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
						<li><a href="javascript:activateTab('page1')" class="button special">Prijzen</a></li>
						<li><a href="javascript:activateTab('page2')" class="button special">Mailing</a></li>
						<li><a href="javascript:activateTab('page3')" class="button special">Nieuws</a></li>
						<li><a href="index.php" class="button special">Terug</a></li>
					</ul>
				</nav>
			</header>

			<!-- Banner -->
			<section id="banner">
				<div class="content" style="text-align: center;">
					<div id="tabCtrl">
						<!-- PRIJZEN TAB -->
					  <div id="page1" style="display: block;">
						<section id="banner">
							<div class="content" style="text-align: center;">
								<h2>Prijzen<br></h2>
								<p>Hieronder kunt u prijzen voor een bepaalde dag instellen.</p>
								<form method="post" action="portaal.php">
									
									<?php	
										
										$host = '85.10.205.173:3306';
										$username = 'grenspoal';
										$password = 'Grenspoal123';
										$dbname = 'grenspoal';
										
										if (isset($_POST["opslaan"])) 
										{
											// Create connection
											$conn = new mysqli($host, $username, $password, $dbname);
											// Check connection
											if ($conn->connect_error) {
												die("Connection failed: " . $conn->connect_error);
											} 

											$sql = "DELETE FROM prijzen WHERE Datum = '" . $_POST['datum'] . "'";
											
											if ($conn->query($sql) !== TRUE) {
												echo "Error updating record: " . $conn->error;
											} 
											
											foreach ($_POST as $param_name => $param_val) {
												if ($param_name !== "opslaan"  && $param_name !== "datum")
												{
													$sql = "INSERT INTO prijzen (Naam, Prijs, Datum) VALUES ('" . str_replace('_', ' ', $param_name) . "','" . sprintf('%0.3f',$param_val) . "','" . $_POST['datum'] . "')";
													//$sql = "UPDATE prijzen SET Prijs=" . sprintf('%0.3f',$param_val) . " WHERE Naam='" . str_replace("_", " ", $param_name) . "'";
													
													//echo $param_name . " = " . $param_val . " - " . $sql . "<br>";
													
													if ($conn->query($sql) !== TRUE) {
														echo "<p style='color: red;'>Fout bij het updaten van de prijzen: " . $conn->error . "</p>";
													} 
												}
											}
											
											$conn->close();
											
											echo "<p style='color: green;'>De prijzen voor " . $_POST['datum'] . " zijn opgeslagen!</p>";
											
											getPrijzen();
										}
										else
										{
											$gebruikersnaam = $_POST["gebruikersnaam"];
											$wachtwoord = $_POST["wachtwoord"];
											
											if ($gebruikersnaam != "admin" || $wachtwoord != "admin") 
											{
												header('Location: login.php');
											} 
											else
											{
												getPrijzen();
											}	
										}
										
										function getPrijzen()
										{
											$host = '85.10.205.173:3306';
											$username = 'grenspoal';
											$password = 'Grenspoal123';
											$dbname = 'grenspoal';
											
											$dbh = mysql_connect( $host, $username, $password );
											mysql_select_db($dbname);
											$Sql = "SELECT * FROM prijzen WHERE Datum = CURDATE()";
											$sth = mysql_query($Sql, $dbh);
											
											while( $row = mysql_fetch_object( $sth ) )
											{
											?>
											
											<div class="row uniform 50%">
												<div class="6u 12u$(xsmall)">
													<label for="<?php echo $row->Naam ?>"><?php echo $row->Naam ?>: </label>										
												</div>
												<div class="6u 12u$(xsmall)">
													
														<input id="<?php echo $row->Naam ?>" style="
														-moz-appearance: none;
														-webkit-appearance: none;
														-ms-appearance: none;
														appearance: none;
														-moz-transition: border-color 0.2s ease-in-out;
														-webkit-transition: border-color 0.2s ease-in-out;
														-ms-transition: border-color 0.2s ease-in-out;
														transition: border-color 0.2s ease-in-out;
														background: #fcfcfc;
														border-radius: 4px;
														border: solid 1px #C4280B;
														color: inherit;
														display: block;
														outline: 0;
														padding: 0 1em;
														text-decoration: none;
														width: 100%; 
														height: 1.75em;
														line-height: 1.75em;"
														name="<?php echo $row->Naam ?>" maxlength="5" type="number" step="0.001" value="<?php echo $row->Prijs ?>" placeholder="<?php echo $row->Naam ?> prijs" required="">										
													
														
												</div>
											</div>
											<?php								
											}
										}

									?>
									<hr>
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<label style="color:black; "for="datum">Datum van prijzen: </label>										
										</div>
										<div class="6u 12u$(xsmall)">
											<input id="datum" style="
															-moz-appearance: none;
															-webkit-appearance: none;
															-ms-appearance: none;
															appearance: none;
															-moz-transition: border-color 0.2s ease-in-out;
															-webkit-transition: border-color 0.2s ease-in-out;
															-ms-transition: border-color 0.2s ease-in-out;
															transition: border-color 0.2s ease-in-out;
															background: #fcfcfc;
															border-radius: 4px;
															border: solid 1px rgba(196, 40, 11, 0.7);
															color: #1C1D26;
															display: block;
															outline: 0;
															padding: 0 1em;
															text-decoration: none;
															width: 100%;" 
												name="datum" type="date" value="<?php $datetime = new DateTime('tomorrow'); echo $datetime->format('Y-m-d'); ?>">
										</div>
									</div>
									<br><input id="opslaan" name="opslaan" type="submit" value="Opslaan">
								</form>
							</div>
						</section>
				      </div>
					  
					  <!-- MAILING TAB -->
					  <div id="page2" style="display: none;">
						<section id="banner">
							<div class="content" style="text-align: center;">
								<h2>Mailing</h2>
								<p>Hieronder kunt u het klantenbestand downloaden of een mail versturen.</p>
								<form method="post" action="excel.php">								
									<input id="excel" name="excel" type="submit" value="Klantenbestand downloaden">
								</form>
								
								<?php
									$host = '85.10.205.173:3306';
									$username = 'grenspoal';
									$password = 'Grenspoal123';
									$dbname = 'grenspoal';
									$emails = "";
									
									$dbh = mysql_connect( $host, $username, $password );
									mysql_select_db($dbname);
									$Sql = "SELECT * FROM mailing";
									$sth = mysql_query($Sql, $dbh);
									
									while( $row = mysql_fetch_object( $sth ) )
									{
										$emails .= $row->Email . ";";
									}
								?>
								
								<form method="post" action="<?php echo "mailto:$emails?SUBJECT=Nieuwsbrief&BODY=Uw bericht..." ?>">								
									<input id="email" name="email" type="submit" value="E-mail versturen">
								</form>
							</div>
						</section>
					  </div>
					  
					  <!-- NIEUWS TAB -->
					  <div id="page3" style="display: none;">
						<section id="banner">
							<div class="content" style="text-align: center;">
								<h2>Nieuws<br></h2>
								<p>Hieronder kunt u een nieuwtje aanmaken.</p>
								<form method="post" action="nieuws.php">	
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)">
											<input class="textarea" id="titel" style="
															-moz-appearance: none;
															-webkit-appearance: none;
															-ms-appearance: none;
															appearance: none;
															-moz-transition: border-color 0.2s ease-in-out;
															-webkit-transition: border-color 0.2s ease-in-out;
															-ms-transition: border-color 0.2s ease-in-out;
															transition: border-color 0.2s ease-in-out;
															background: #fcfcfc;
															border-radius: 4px;
															border: solid 1px rgba(196, 40, 11, 0.7);
															color: #1C1D26;
															display: block;
															outline: 0;
															padding: 0 1em;
															text-decoration: none;
															width: 100%;"
											
											
											name="titel" type="text" maxlength="50" placeholder="Titel" required>									
										</div>
									</div>
									
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)">
											<textarea id="omschrijving" style="
															-moz-appearance: none;
															-webkit-appearance: none;
															-ms-appearance: none;
															appearance: none;
															-moz-transition: border-color 0.2s ease-in-out;
															-webkit-transition: border-color 0.2s ease-in-out;
															-ms-transition: border-color 0.2s ease-in-out;
															transition: border-color 0.2s ease-in-out;
															background: #fcfcfc;
															border-radius: 4px;
															border: solid 1px rgba(196, 40, 11, 0.7);
															color: #1C1D26;
															display: block;
															outline: 0;
															padding: 0 1em;
															text-decoration: none;
															width: 100%;"
											
											name="omschrijving" maxlength="250" placeholder="Omschrijving" required></textarea>								
										</div>
									</div>
									
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)">
											<input id="setNieuws" name="setNieuws" type="submit" value="Opslaan">								
										</div>
									</div>
								</form>
							</div>
						</section>
					  </div>
					</div>
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

			  function activateTab(pageId) {
				  var tabCtrl = document.getElementById('tabCtrl');
				  var pageToActivate = document.getElementById(pageId);
				  for (var i = 0; i < tabCtrl.childNodes.length; i++) {
					  var node = tabCtrl.childNodes[i];
					  if (node.nodeType == 1) { /* Element */
						  node.style.display = (node == pageToActivate) ? 'block' : 'none';
					  }
				  }
			  }

			</script>
			
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