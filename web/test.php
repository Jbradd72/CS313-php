<?php require ('dbconfig.php');
$account = $db->query("SELECT accountid from accounts where username = 'jeffbradley'");
$accountId =$account->fetch(PDO::FETCH_ASSOC);

echo $accountId['accountid'];
?>