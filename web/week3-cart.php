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
    <link href="week3.css" rel="stylesheet">
    
    <script src="jquery-3.3.1.js"></script>
    <script src="week3-cart.js"></script>
</head>

<body>
    <div class="container">
            <table>
                <th>
                
                </th>
                <?php 
                foreach($_SESSION as $key=>$value) {
                    if(isset($value)){
                        $id = str_replace(' ', '', $key);
                    echo "<tr id='$id'><td> $key - $value</td><td> <button class='btn btn-danger btn-sm' onclick=\"removeItem($id)\">Remove Item</button></td></tr>";
                    }
                }
            ?>
            </table>

        </div>


</body>

</html>


<?php require 'week3-footer.php' ?>