<?php  

    require ('dbconfig.php');
    if (!isset($_SESSION['username'])){
        header('location: login.php');
    }
    require ('header.php');
    echo $_SESSION['username'];
    require ('footer.php');
?>