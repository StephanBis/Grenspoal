<?php
	session_start();
	if (isset($_POST["naam"]) && isset($_POST["email"]) && isset($_POST["bericht"]))
	{
		if (isset($_POST["nieuwsbrief"]))
		{
			if ($_POST["nieuwsbrief"] === "Nieuwsbrief")
			{
				include 'db.php';

				// Create connection
				$conn = new mysqli($host, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO mailing (naam, email) VALUES ('" . $_POST["naam"] . "', '" . $_POST["email"] . "')";

				if ($conn->query($sql) !== TRUE) {
					echo "Error: " . $sql . "<br>" . $conn->error;
				} 

				$conn->close();
			}
		}

		$to = 'grenspoal@telenet.be';
		$subject = 'Bericht van website';

		$message = '
		<html>
		<head>
		  <title>Bericht van website</title>
		</head>
		<body>
		  <p><strong>Naam: </strong> ' . $_POST["naam"] . '</p>
		  <p><strong>Email: </strong> ' . $_POST["email"] . '</p>
		  <p><strong>Bericht: </strong> ' . $_POST["bericht"] . '</p>
		</body>
		</html>
		';

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'To: Grenspoal <grenspoal@telenet.be>' . "\r\n";
		$headers .= 'From: ' . $_POST["email"] . ' <bericht@grenspoal.be>' . "\r\n";


		mail($to, $subject, $message, $headers);

		$_SESSION["message"] = "Uw bericht is met succes verzonden!";
		header("Location: index.php#six");
	}
	else
	{
		$_SESSION["message"] = "U heeft niet alle velden ingevuld!";
		header("Location: index.php#six");
	}
?>