<?php 
session_start();

require 'week3-nav.php'
?>

<html>
    <head>
<title>My Cart</title>
        </head>
    <body>
    <div class="container">
    <div class="col-lg-9">
        <ul>
        <?php 
            $vars = get_object_vars ( $_SESSION );
foreach($vars as $key=>$value) {
  echo "<li> $key - $value </li>";
}
            ?>
        </ul>
        
        </div>    
        
    </div>
    
    </body>

</html>


<?php require 'week3-footer.php'