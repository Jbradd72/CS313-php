<?php 
session_start();

    if(isset($_POST['fname']) && isset($_POST['lname'])){
        $name = htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname']);
    }

    if(isset($_POST['addr1']) && isset($_POST['addr2']) && isset($_POST['addr3'])){
            $addr = htmlspecialchars($_POST['addr1']) . " " . htmlspecialchars($_POST['addr2']) . " " . 
                htmlspecialchars($_POST['addr3']);
        }
    if(isset($name)){
        $_SESSION['name'] = $name;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="week3.css" rel="stylesheet">
    <script src="jquery-3.3.1.js"></script>

</head>
    <body>
        <?php require "week3-nav.php";  ?>
    
        
        <?php require "week3-footer.php";  ?>
    </body>
</html>