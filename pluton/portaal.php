<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pluton Theme by BraphBerry.com</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>
    
    <body>
		<div class="container topHeader">
			<a href="#">
				<img src="img/logo.png" alt="Logo" />
				<!-- This is website logo -->
			</a>
		</div>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="index.html">Home</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Service section start -->
        <div class="section primary-section" id="login">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Portaal</h1>
                </div>
				<div class="row-fluid">
					<h3>Instellen prijzen. <br>Deze zullen ingaan om middernacht.</h3>
					<div class="span12">
						<form method="post" action="portaal.php">
						
						<?php	
							
							$host = '127.0.0.1';
							$username = 'root';
							$password = 'pxl';
							$dbname = 'grenspoal';
							
							if (isset($_POST["opslaan"])) 
							{
								// Create connection
								$conn = new mysqli($host, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								} 

								foreach ($_POST as $param_name => $param_val) {
									$sql = "UPDATE Prijzen SET Prijs='" . $param_val . "' WHERE Naam='" . sprintf('%0.3f', $param_name) . "'";

									if ($conn->query($sql) === TRUE) {
										echo "Record updated successfully";
									} else {
										echo "Error updating record: " . $conn->error;
									}
								}
								
								$conn->close();
								
								echo "<p style='color: green;'>De prijzen zijn geupdate!</p>";
								
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
								$username = 'root';
								$password = 'pxl';
								$dbname = 'grenspoal';
								
								$dbh = mysql_connect( $host, $username, $password );
								mysql_select_db($dbname);
								$Sql = "SELECT * FROM prijzen";
								$sth = mysql_query($Sql, $dbh);
								
								while( $row = mysql_fetch_object( $sth ) )
								{
								?>
								
								<label for="<?php echo $row->Naam ?>"><?php echo $row->Naam ?>: </label>
								<input id="<?php echo $row->Naam ?>" name="<?php echo $row->Naam ?>" maxlength="5" type="number" step="0.001" value="<?php echo $row->Prijs ?>" placeholder="<?php echo $row->Naam ?> prijs" required="">	
								
								<?php								
								}
							}

						?>
						
							<br><input id="opslaan" name="opslaan" class="message-btn" type="submit" value="Opslaan">
						</form>
					</div>
				</div>
            </div>
        </div>
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2015 website gemaakt door <a href="http://www.bisschop-software.nl">Bisschop Software</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
		<script type="text/javascript" src="js/jquery.waypoints.js"></script>
		<script type="text/javascript" src="js/jquery.counterup.js"></script>
		
		<script>
			jQuery(document).ready(function( $ ) {
				$('.float').counterUp({
					delay: 10, // the delay time in ms
					time: 1000 // the speed time in ms
				});
			});
		</script>
		
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>