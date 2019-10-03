<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:/LTO/index.php"); // Redirecting To Home Page
}
?>