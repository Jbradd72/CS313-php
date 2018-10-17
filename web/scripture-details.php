<html>
<head><title>Scripture Details</title></head>
    
    <body>
    
    <h2>Details</h2>
        <?php
        $id = $_GET['id'];
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
  
      foreach ($db->query("SELECT * FROM scriptures where id = $id") as $row)
    {
        echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ' : ' . $row['verse'] . ' - ' . $row['content'] . '</b>' . '<br>';
    }
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>
    </body>
</html>
