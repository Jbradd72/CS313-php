<?php $radio = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering"); ?>

<html>

<head>
    <title>Teach Activity 3</title>


</head>

<body>

    <form action="ta03submit.php" method="post">
        <input type="text" name="name" placeholder="Name:"><br>
        <input type="text" name="email" placeholder="Email:"><br>
        <?php 
        
        $count = count($radio);
        
        for ($i=0; $i < $count; $i++){
            echo "<input type='radio' name='Major' value='$radio[$i]'> $radio[$i]<br>";
        }
        ?>
        <input type="radio" name="Major" value="Computer Science"> Computer Science<br>
        <input type="radio" name="Major" value="Web Design and Development"> Web Design and Development <br>
        <input type="radio" name="Major" value="Computer Information Technology"> Computer Information Technology<br>
        <input type="radio" name="Major" value="Computer Engineering"> Computer Engineering<br>
        <textarea name="comments" placeholder="Comments"></textarea><br>
        

        <input type="checkbox" name="continents[]" value="North America"> North America<br>
        <input type="checkbox" name="continents[]" value="South America"> South America<br>
        <input type="checkbox" name="continents[]" value="Europe" > Europe<br>
        <input type="checkbox" name="continents[]" value="Africa"> Africa<br>
        <input type="checkbox" name="continents[]" value="Asia"> Asia<br>
        <input type="checkbox" name="continents[]" value="Australia" > Australia<br>
        <input type="checkbox" name="continents[]" value="Antarctica" > Antarctica<br>
        <input type="submit">
    </form>


</body>

</html>
