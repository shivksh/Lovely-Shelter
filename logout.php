<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index1.php"); // Redirecting To Home Page
}
?>