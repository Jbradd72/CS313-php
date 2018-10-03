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
            switch($continents[$i]){
                case "na":
                    echo "North America";
                    break;
                case "sa":
                    echo "South America";
                    break;
                case "e":
                    echo "Europe";
                    break;
                case "as":
                    echo "Asia";
                    break;
                case "an":
                    echo "Antarctica";
                    break;
                case "au":
                    echo "Australia";
                    break;
                case "af":
                    echo "Africa";
                    break;
            }
        }
        ?></p>


</body>
</html>


