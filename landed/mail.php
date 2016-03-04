<?php
	session_start();
	if (isset($_POST["naam"]) && isset($_POST["email"]) && isset($_POST["bericht"]) && isset($_POST["nieuwsbrief"]))
	{
		if ($_POST["nieuwsbrief"] === "Nieuwsbrief")
		{
			include 'db.php';

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "INSERT INTO mailing (naam, email) VALUES ('" . $_POST["naam"] . "', '" . $_POST["email"] . "')";

			if ($conn->query($sql) === TRUE) {
				$_SESSION["message"] = "Uw bericht is met succes verzonden!";
				header("Location: index.php#six");
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}
	}
	else
	{
		echo "Sommige velden zijn niet ingevult, ga aub terug en vul alles in!";
	}
?>