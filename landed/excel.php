<?php	
	$host = '85.10.205.173:3306';
	$username = 'grenspoal';
	$password = 'Grenspoal123';
	$dbname = 'grenspoal';

	header("Content-Type: application/vnd.ms-excel");
	header('Content-type: application/x-msexcel');
	header('Content-type: application/msexcel');
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Content-disposition: attachment;filename=Klantenbestand.xls");

	$dbh = mysql_connect( $host, $username, $password );
	mysql_select_db($dbname);
	$Sql = "SELECT * FROM mailing";
	$sth = mysql_query($Sql, $dbh);

	echo "<table>";
	echo "<tr>";
	echo "<th>Naam</th>";
	echo "<th>E-mail</th>";
	echo "</tr>";

	while( $row = mysql_fetch_object( $sth ) )
	{
		echo "<tr>";
		echo "<td>" . $row->Naam . "</td>";
		echo "<td>" . $row->Email . "</td>";
		echo "</tr>";
	}

	echo "</table>";
?>