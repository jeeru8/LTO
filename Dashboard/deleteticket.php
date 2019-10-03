<?php 
	// Create Connection
	$servername = "localhost";
	$username = "lto";
	$password = "123456789";
	$db = "lto";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$select = "DELETE FROM ticket WHERE id = '".$_GET['id']."'";
	$query = mysqli_query($conn, $select) or die ($select);
	header("location: ticket.php");

?>