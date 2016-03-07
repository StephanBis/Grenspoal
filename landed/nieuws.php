<?php
	if (isset($_POST["titel"]) && isset($_POST["omschrijving"]))
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
			header("Location: portaal.php");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>