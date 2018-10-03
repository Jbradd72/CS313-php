<?php $name = $_POST["name"]; ?>
<html>

<head>
    <title>Teach Activity 3</title>
    

</head>

<body>
    <h1>Your Info</h1>
    <p>  Name: <?php echo $_POST["name"]; ?> <br>
         Email: <?php echo $_POST["email"]; ?> <br>
    Major: <?php echo $_POST["Major"]; ?> <br>
    Comments: <?php echo $_POST["comments"]; ?> <br>
    You have visited: <br>
    <?php 
        $continents = $_POST["continents"];
        $count = count($continents);
        
        for ($i=0; $i < $count; $i++){
            echo "$continents[$i] <br>";
        }
        ?></p>


</body>
</html>


