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
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<a href="index.php"><img class="logo" src="images/logo.png" alt="Carwash & Fuel Grenspoal" width="400px"></a>
				<nav id="nav">
					<ul>
						<li><a href="javascript:activateTab('page1')" class="scroll">Prijzen</a></li>
						<li><a href="javascript:activateTab('page2')" class="scroll">Mailing</a></li>
						<li><a href="javascript:activateTab('page3')" class="scroll">Nieuws</a></li>
						<li><a href="index.php" class="scroll">Terug</a></li>
					</ul>
				</nav>
			</header>

			<!-- Banner -->
			<section id="banner no-shadow">
				<div class="content drop-down" style="text-align: center;">
					<div id="tabCtrl">
						<!-- PRIJZEN TAB -->
					  <div id="page1" style="display: block;">
						<section id="banner">
							<div class="content" style="text-align: center;">
								<h2>Prijzen<br></h2>
								<p>Hieronder kunt u prijzen voor een bepaalde dag instellen.</p>
								<form method="post" action="portaal.php" class="form">
									
									<?php										
										if (isset($_POST["opslaan"])) 
										{
											include 'db.php';

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
											
											$kleuren = ['geel','groen','blauw','rood','wit','paars'];
											$i = 0;

											foreach ($_POST as $param_name => $param_val) {
												if ($param_name !== "opslaan" && $param_name !== "datum" && $param_name !== "css")
												{
													$sql = "INSERT INTO prijzen (Naam, Prijs, Datum, Css) VALUES ('" . str_replace('_', ' ', $param_name) . "','" . sprintf('%0.3f',$param_val) . "','" . $_POST['datum'] . "','" . $kleuren[$i] . "')";
													//$sql = "UPDATE prijzen SET Prijs=" . sprintf('%0.3f',$param_val) . " WHERE Naam='" . str_replace("_", " ", $param_name) . "'";
													
													//echo $param_name . " = " . $param_val . " - " . $sql . "<br>";
													
													if ($conn->query($sql) !== TRUE) {
														echo "<p style='color: red;'>Fout bij het updaten van de prijzen: " . $conn->error . "</p>";
													} 

													$i++;
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
											include 'db.php';

											$dbh = mysql_connect( $host, $username, $password );
											mysql_select_db($dbname);
											$Sql = "SELECT * FROM prijzen WHERE Datum = CURDATE()";
											$sth = mysql_query($Sql, $dbh);
											
											if (mysql_num_rows($sth) === 0)
											{
												?>
													<div class="row uniform 50%">
														<div class="6u 12u$(xsmall)">
															<label for="Diesel">Diesel: </label>										
														</div>
														<div class="6u 12u$(xsmall)">
															<input id="Diesel" class="dashboard-control" name="Diesel" maxlength="5" type="number" step="0.001" value="1.000" placeholder="Diesel prijs" required="">										
														</div>
													</div>
													<div class="row uniform 50%">
														<div class="6u 12u$(xsmall)">
															<label for="Euro 95">Euro 95: </label>										
														</div>
														<div class="6u 12u$(xsmall)">
															<input id="Euro 95" class="dashboard-control" name="Euro 95" maxlength="5" type="number" step="0.001" value="1.000" placeholder="Euro 95 prijs" required="">										
														</div>
													</div>
													<div class="row uniform 50%">
														<div class="6u 12u$(xsmall)">
															<label for="AdBlue">AdBlue: </label>										
														</div>
														<div class="6u 12u$(xsmall)">
															<input id="AdBlue" class="dashboard-control" name="AdBlue" maxlength="5" type="number" step="0.001" value="1.000" placeholder="AdBlue prijs" required="">										
														</div>
													</div>
													<div class="row uniform 50%">
														<div class="6u 12u$(xsmall)">
															<label for="Diesel rood EN590">Diesel rood EN590: </label>										
														</div>
														<div class="6u 12u$(xsmall)">
															<input id="Diesel rood EN590" class="dashboard-control" name="Diesel rood EN590" maxlength="5" type="number" step="0.001" value="1.000" placeholder="Diesel rood EN590 prijs" required="">										
														</div>
													</div>
													<div class="row uniform 50%">
														<div class="6u 12u$(xsmall)">
															<label for="Petroleum">Petroleum: </label>										
														</div>
														<div class="6u 12u$(xsmall)">
															<input id="Petroleum" class="dashboard-control" name="Petroleum" maxlength="5" type="number" step="0.001" value="1.000" placeholder="Petroleum prijs" required="">										
														</div>
													</div>
													<div class="row uniform 50%">
														<div class="6u 12u$(xsmall)">
															<label for="Euro 98">Euro 98: </label>										
														</div>
														<div class="6u 12u$(xsmall)">
															<input id="Euro 98" class="dashboard-control" name="Euro 98" maxlength="5" type="number" step="0.001" value="1.000" placeholder="Euro 98 prijs" required="">										
														</div>
													</div>
												<?php
											}
											else
											{
												while( $row = mysql_fetch_object( $sth ) )
												{
												?>
													<div class="row uniform 50%">
														<div class="6u 12u$(xsmall)">
															<label for="<?php echo $row->Naam ?>"><?php echo $row->Naam ?>: </label>										
														</div>
														<div class="6u 12u$(xsmall)">
															<input id="<?php echo $row->Naam ?>" class="dashboard-control" name="<?php echo $row->Naam ?>" maxlength="5" type="number" step="0.001" value="<?php echo $row->Prijs ?>" placeholder="<?php echo $row->Naam ?> prijs" required="">										
														</div>
													</div>
												<?php								
												}
											}
										}
									?>
									<hr>
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<label style="color:black; "for="datum">Datum van prijzen: </label>										
										</div>
										<div class="6u 12u$(xsmall)">
											<input id="datum" class="dashboard-control" name="datum" type="date" value="<?php $datetime = new DateTime('tomorrow'); echo $datetime->format('Y-m-d'); ?>">
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
									include 'db.php';
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
											<input class="textarea dashboard-control" id="titel" name="titel" type="text" maxlength="50" placeholder="Titel" required>									
										</div>
									</div>
									
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)">
											<textarea id="omschrijving" class="dashboard-control" name="omschrijving" maxlength="250" placeholder="Omschrijving" required></textarea>								
										</div>
									</div>
									
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)">
											<input id="setNieuws" name="setNieuws" type="submit" value="Opslaan">								
										</div>
									</div>
								</form>

								<h2>Aanpassen<br></h2>
								<form method="post" action="nieuws.php">	
									<input type="hidden" id="edit" name="edit" value+"edit" />

									<div class="row">
										<div class="12u 12u$(xsmall)">
											<select>
												<?php
													include 'db.php';

													$dbh = mysql_connect( $host, $username, $password );
													mysql_select_db($dbname);
													$Sql = "SELECT * FROM nieuws";
													$sth = mysql_query($Sql, $dbh);
													
													while( $row = mysql_fetch_object( $sth ) )
													{
														echo "<option value=" . $row->Titel . ">" . $row->Titel . "</option>";
													}
												?>
											</select>								
										</div>
									</div>

									<div class="row">
										<div class="6u 12u$(xsmall)">
											<input class="textarea dashboard-control" id="titel" name="titel" type="text" maxlength="50" placeholder="Titel" required>									
										</div>
										<div class="6u 12u$(xsmall)">
											<textarea id="omschrijving" class="dashboard-control" name="omschrijving" maxlength="250" placeholder="Omschrijving" required></textarea>								
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