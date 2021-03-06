<?php 
  require('dbconfig.php');
    require('s3init.php');

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

if (!mkdir("/app/web/DigitalScrapBooking/$username", 0777, true)){
    die("Server failed to create directory");   
}
else{
    $file = fopen("/app/web/DigitalScrapBooking/jeffbradley/test1.txt", "w+") or die("Unable to open file!");
    if ($file === false)
{
    die('Could not open file ');
}
    fwrite($file, "testing");
    fclose($file);
}
?>
