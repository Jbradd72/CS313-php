<?php require ('DigitalScrapBooking/dbconfig.php');
$username = "jeffbradley"
$account = $db->query("SELECT accountid from accounts where username = '$username'");
$accountId =$account->fetch(PDO::FETCH_ASSOC);

echo $accountId['accountid'];
?>