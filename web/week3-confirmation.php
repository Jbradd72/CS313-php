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

    if(isset($addr)){
        $_SESSION['addr'] = $addr;
    }  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Confirmation Page</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="week3.css" rel="stylesheet">
    <script src="jquery-3.3.1.js"></script>

</head>
    <body>
        <?php require "week3-nav.php";  ?>
    
        <div class="container">
            <table>
                <th>
                
                </th>
                <?php 
                foreach($_SESSION["Products"] as $key=>$value) {
                    if(isset($value)){
                    echo "<tr><td> $key - $value</td><td><a href='week3-cart-remove.php?key=$key'><button class='btn btn-danger btn-sm'>Remove Item</button></a></td></tr>";
                    }
                }
            ?>
            </table>
            
            <h4> Will be sent to: </h4>
            <h6> <?php $_SESSION['name'] . " at " . $_SESSION['addr']?></h6>
        
        <a id="checkout" href="week3.php"><button class="btn-info">Submit</button></a>

        </div>
        
        <?php require "week3-footer.php";  ?>
    </body>
</html>