<?php  
    if (!isset($_SESSION['username'])){
        header('location: login.php');
    }
    require ('dbconfig.php');
    require ('header.php');
    echo $_SESSION['username'];
    require ('footer.php');
?>