<?php

$conn = new mysqli('localhost', 'lto', '123456789', 'lto');


if($conn->connect_errno){
	echo $db->connect_error;
	//die( '<br />Sorry we are having some problems');

}

?>