<?php  
	$conn = mysql_connect('localhost', 'lto', '123456789');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("lto", $conn);
?>

