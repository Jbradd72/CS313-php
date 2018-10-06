<?php 
session_start();

require 'week3-nav.php';
?>

<html>

<head>
    <title>My Cart</title>
    <link href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="week3-nav.css" rel="stylesheet">
    
    <script src="jquery-3.3.1.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-lg-9">
            <ul>
                <?php 
                foreach($_SESSION as $key=>$value) {
                    echo "<li id='$key'> $key - $value </li><button class='btn btn-danger btn-small' onClick='removeItem($key)'>Remove Item</button>";
                }
            ?>
            </ul>

        </div>

    </div>

</body>

</html>


<?php require 'week3-footer.php' ?>
