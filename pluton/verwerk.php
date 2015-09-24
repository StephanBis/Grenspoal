<!DOCTYPE html>
<html>
<head>
<title>Theatercafe het Fort</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="images/favicon.jpg">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<!---- start-smoth-scrolling---->
<!-- Custom Theme files -->
<link href="css/theme-style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!----start-top-nav-script---->
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function(){
				var w = $(window).width();
				if(w > 320 && menu.is(':hidden')) {
					menu.removeAttr('style');
				}
			});
		});
	</script>
<!----//End-top-nav-script---->
</head>
<body>

	<?php
	$naam = $_POST["naam"];
	$email = $_POST["email"];
	$bericht = $_POST["bericht"];
	$nieuws = $_POST["nieuws"];
	$inhoud = "";

	if ($nieuws == true) {
		$servername = "192.168.0.202";
		$username = "Klantenbestand";
		$password = "Vnd8sfdsb";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = $conn->prepare("INSERT INTO klanten (Naam, Email) VALUES ('$naam', '$email')");
			$sql->execute();
			
			$inhoud = "U bent nu ingeschreven voor de nieuwsbrief!</br></br>";
			}
		catch(PDOException $e)
		{
			echo "Er is een fout opgetreden: " . $e->getMessage();
		}
	} 

	$to = 'info@theatercafehetfort.be';
	$subject = 'Bericht klant';
	$message = "$naam stuurde u: \r\n$bericht";
	$headers = 'From: ' . $email;

	mail($to, $subject, $message, $headers);

	$inhoud = $inhoud . "Uw bericht is verstuurd!";
	?>

	<div class="header scroll">
		<div class="container">
			<!---- start-logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="Home" /></a>
			</div>
			<!---- //End-logo---->
			<!----start-top-nav---->
			 <nav class="top-nav">
				<ul class="top-nav">
					<li class="contatct-active"><a href="http://theatercafehetfort.be">Terug</a></li>
				</ul>
				<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
			</nav>
			<div class="clearfix"> </div>
			<div id="home" class="slide-text text-center">
				<h1><?php echo $inhoud ?></h1>
			</div>
			<!----//End-top-nav---->
		</div>
	</div>
</body>
</html>