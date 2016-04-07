<?php
	session_start();
	if (isset($_POST["titel"]) && isset($_POST["omschrijving"]) && !isset($_POST["opslaan2"]))
	{
		include 'db.php';
		// Create connection
		$conn = new mysqli($host, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO nieuws (Titel, Beschrijving, Datum) VALUES ('" . $_POST["titel"] . "', '" . $_POST["omschrijving"] . "', '" . $_POST["datum"] . "')";
												
		if ($conn->query($sql) !== TRUE) {
			echo "Error updating record: " . $conn->error;
		} 
		else
		{
			$conn->close();
			$_SESSION["message"] = "Het nieuwsbericht is toegevoegd!";
			Header("Location: portaal.php");
		}
	}
	else if (isset($_POST["nieuwsLijst"]) && isset($_POST["deleteNieuws"]))
	{
		include 'db.php';

		// Create connection
		$conn = new mysqli($host, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "DELETE FROM nieuws WHERE Id=" . $_POST["nieuwsLijst"];

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			$_SESSION["message"] = "Het nieuwsbericht is verwijderd!";
			header("Location: portaal.php");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	else if (isset($_POST["opslaan2"])) 
	{
		include 'db.php';
		// Create connection
		$conn = new mysqli($host, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "UPDATE nieuws SET Titel='" . $_POST["titel"] . "', Beschrijving='" . $_POST["omschrijving"] . "', Datum='" . $_POST["datum"] . "' WHERE Id=" . $_POST["id"];
												
		if ($conn->query($sql) !== TRUE) {
			echo "Error updating record: " . $conn->error;
		} 
		else
		{
			$conn->close();
			$_SESSION["message"] = "Het nieuwsbericht is aangepast!";
			Header("Location: portaal.php");
		}
	}
	else if (isset($_POST["nieuwsLijst"]) && isset($_POST["editNieuws"]))
	{
		include 'db.php';

		// Create connection
		$conn = new mysqli($host, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		//$sql = "SELECT FROM nieuws WHERE Id=" . $_POST["nieuwsLijst"];
		$dbh = mysql_connect( $host, $username, $password );
		mysql_select_db($dbname);
		$result = mysql_query("SELECT * FROM nieuws WHERE Id=" . $_POST["nieuwsLijst"], $dbh); 
		$row = mysql_fetch_assoc($result);
?>
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
			<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
		</head>
		<body class="landing">
			<div id="page-wrapper">

				<!-- Header -->
				<header id="header">
					<a href="index.php"><img class="logo" src="images/logo.png" alt="Carwash & Fuel Grenspoal" width="400px"></a>
					<nav id="nav">
						<ul>
							<li><a href="portaal.php" class="scroll">Terug</a></li>					
						</ul>
					</nav>
				</header>

				<!-- Banner -->
				<section id="banner no-shadow">
					<div class="content drop-down" style="text-align: center;">
						<section id="banner">
							<div class="content" style="text-align: center;">
								<h2>Nieuwsbericht aanpassen<br></h2>
								<form method="post" action="nieuws.php">	
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)">
											<input id="id" name="id" value="<?php echo $row['Id'] ?>" type="hidden">
											<input class="textarea dashboard-control" id="titel" name="titel" type="text" value="<?php echo $row['Titel'] ?>" maxlength="50" placeholder="Titel" required>		
										</div>
									</div>
									
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)">
											<textarea id="omschrijving" class="dashboard-control" name="omschrijving" maxlength="250" placeholder="Omschrijving" required><?php echo $row['Beschrijving'] ?></textarea>							
										</div>
									</div>

									<hr>
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<label style="color:black; "for="datum">Datum van nieuwsbericht: </label>										
										</div>
										<div class="6u 12u$(xsmall)">
											<input id="datum" class="dashboard-control" name="datum" type="date" value="<?php $datetime = new DateTime($row['Datum']); echo $datetime->format('Y-m-d'); ?>">
										</div>
									</div>
									
									<div class="row uniform 50%">
										<div class="12u 12u$(xsmall)">
											<input id="opslaan2" name="opslaan2" type="submit" value="Opslaan">								
										</div>
									</div>
								</form>
							</div>
						</section>
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
				<script src="assets/js/main_small.js"></script>			
				
				<script>
				jQuery(document).ready(function( $ ) {
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
<?php
	}
?>