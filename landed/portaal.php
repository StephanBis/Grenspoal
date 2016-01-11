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
						<li><a href="index.php" class="button special">Terug</a></li>
					</ul>
				</nav>
			</header>

			<!-- Banner -->
			<section id="banner">
				<div class="content" style="text-align: center;">
					<h2>Instellen prijzen<br></h2>
					<p>Onderstaande prijzen zijn de prijzen van deze dag.</p>
					<form method="post" action="portaal.php">
						
						<?php	
							
							$host = '127.0.0.1';
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
								$host = '127.0.0.1';
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
											background: transparent;
											border-radius: 4px;
											border: solid 1px rgba(255, 255, 255, 0.3);
											color: inherit;
											display: block;
											outline: 0;
											padding: 0 1em;
											text-decoration: none;
											width: 100%;" 
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
								<label for="datum">Datum van prijzen: </label>										
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
												background: transparent;
												border-radius: 4px;
												border: solid 1px rgba(255, 255, 255, 0.3);
												color: inherit;
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>