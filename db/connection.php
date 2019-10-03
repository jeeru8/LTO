<?php

  $hostname = "localhost";
  $database = "library";
  $port     = '3306';

  $username = "root";
  $password = "";

  try 
  {

    /* set server */            
    $server = "mysql:host=$hostname;dbname=$database;port=$port";

    /* set attribute */             
    $setAttribute = array(
                           PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                         );

    $conn = new PDO($server, $username, $password, $setAttribute);

    /* set the PDO error mode to exception */
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }

  catch(PDOException $e)
  {

    echo "Connection failed: " . $e->getMessage();

  }

?>