<?php 
  require('dbconfig.php');

$name = $_POST['fname'] . ' ' . $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$joinDate = date('d-m-y');

$register = $db->prepare("INSERT INTO accounts (username, password, name, joindate, email) VALUES (:username, :password, :name, CURRENT_DATE, :email)");

$register->bindparam(':username', $username, PDO::PARAM_STR);
$register->bindparam(':password', $password, PDO::PARAM_STR);
$register->bindparam(':name', $name, PDO::PARAM_STR);
$register->bindparam(':email', $email, PDO::PARAM_STR);
  
$register->execute();

if (!mkdir("~/web/DigitalScrapBooking/$username", 0777)){
    die("Server failed to create directory");   
}
header('location: login.php');
?>
