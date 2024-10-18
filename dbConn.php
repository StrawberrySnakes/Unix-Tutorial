<?php   
    $servername = "localhost";
	$username = "iste240t10";
	$password = "Adrenosterone5^sensations";
	$dbname = "iste240t10";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>