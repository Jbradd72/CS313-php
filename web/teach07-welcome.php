<?php 
  session_start();
$username = $_SESSION['username'];
 if (!isset($username)) header("location: teach07-login.html");
 
echo "Welcome, $username"
?>