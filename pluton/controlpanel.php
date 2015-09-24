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
		
		$gebruikersnaam = $_POST["gebruikersnaam"];
		$wachtwoord = $_POST["wachtwoord"];
		
		if ($gebruikersnaam != "admin" || $wachtwoord != "123123") 
		{
			header('Location: login.php');
		} 
		else
		{
			$host = '192.168.0.202';
			$username = 'Klantenbestand';
			$password = 'Vnd8sfdsb';
			$dbname = 'Klantenbestand';
			$emails = "";
			
			$dbh = mysql_connect( $host, $username, $password );
			mysql_select_db($dbname);
			$Sql = "SELECT * FROM klanten";
			$sth = mysql_query($Sql, $dbh);
			
			while( $row = mysql_fetch_object( $sth ) )
			{
				$emails .= $row->Email . ";";
			}
		}	
		

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
					<li class="contatct-active"><a href="login.php">Uitloggen</a></li>
				</ul>
				<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
			</nav>
			<div class="clearfix"> </div>
			
			<div id="contact" class="contact" style="margin-top:50px"> 
				<div class="contact-map">
					<div class="contact-grids">
						<div class="col-md-6 contact-left">
							<h3><span> </span> Control panel</h3>						
							<form method="post" action="excel.php">								
								<span class="submit-btn"><input id="excel" name="excel" type="submit" value="Klantenbestand downloaden"></span>
							</form>
							<form method="post" action="<?php echo "mailto:$emails?SUBJECT=Nieuwsbrief&BODY=Uw bericht..." ?>">								
								<span class="submit-btn"><input id="email" name="email" type="submit" value="E-mail versturen"></span>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<!----//End-top-nav---->
		</div>
	</div>
</body>
</html>