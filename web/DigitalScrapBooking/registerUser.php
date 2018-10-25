<?php 
  require('dbconfig.php');

$name = $_POST['fname'] . ' ' . $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$joinDate = date('d-m-y');

$register = $db->prepare("INSERT INTO accounts (username, password, name, joindate, email) VALUES (:username, :password, :name, :joindate, :email)");

$register->bindparam(':username', $username, PDO::PARAM_STR);
$register->bindparam(':password', $password, PDO::PARAM_STR);
$register->bindparam(':name', $name, PDO::PARAM_STR);
$register->bindparam(':joindate', $joindate, PDO::PARAM_STR);
$register->bindparam(':email', $username, PDO::PARAM_STR);
$register->bindparam(':username', $username, PDO::PARAM_STR);
  
$register->execute();
header('location: login.php')
?>