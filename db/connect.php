<?php
   // define database related variables
   $database = 'houseandpromos';
   $host = 'localhost';
   $user = 'lto';
   $pass = '12345';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$dbh){

      echo "unable to connect to database";
   }
   
?>