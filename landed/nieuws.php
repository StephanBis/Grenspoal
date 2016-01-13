<?php
	$host = '127.0.0.1';
	$username = 'grenspoal';
	$password = 'Grenspoal123';
	$dbname = 'grenspoal';
	
	// Create connection
	$conn = new mysqli($host, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "INSERT INTO nieuws (Titel, Beschrijving, Datum) VALUES ('" . $_POST["titel"] . "', '" . $_POST["omschrijving"] . "', '" . date("Y-m-d") . "')";
											
	if ($conn->query($sql) !== TRUE) {
		echo "Error updating record: " . $conn->error;
	} 
	else
	{
		Header("Location: portaal.php");
	}
?>