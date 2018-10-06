<?php 
session_start();


?>

<html>

<head>
    <title>My Cart</title>
    <link href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="week3-nav.css" rel="stylesheet">
    <link href="week3.css" rel="stylesheet">
    
    <script src="jquery-3.3.1.js"></script>
    <script src="week3-cart.js"></script>
</head>

<body>
    <?php require 'week3-nav.php'?>;
    <div class="container">
            <table>
                <th>
                
                </th>
                <?php 
                foreach($_SESSION["Products"] as $key=>$value) {
                    if(isset($value)){
                    echo "<tr><td> $key</td> <td> $value</td><td><a href='week3-cart-remove.php?key=$key'><button class='btn btn-danger btn-sm'>Remove Item</button></a></td></tr>";
                    }
                }
            ?>
            </table>
        
        <a id="checkout" href="week3-checkout.php"><button class="btn-info">Checkout</button></a>

        </div>


</body>

</html>


<?php require 'week3-footer.php' ?>