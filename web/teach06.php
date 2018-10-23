<?php 
session_start();
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword); 
?>

<html>
<head>
    <title>Teach 05 activity</title>
</head>

<body>


    <form action="results.php" method="get">
        Book: <input type="text" name="book"><br> 
        Chapter: <input type="number" name="chapter"><br> 
        Verse: <input type="number" name="verse"><br> 
        Content: <textarea name="content"></textarea><br>
        
        <?php 
        $topics = $db->query("SELECT * FROM topics");
        
        
        while ($row = $topics->fetch(PDO::FETCH_ASSOC)){
            echo $row["name"] . ": <input name='topics[]' value='".$row['name']."' type='checkbox'><br>";
        }
        ?>
            <input type="submit">
    </form>
    
    
    

</body>

</html>