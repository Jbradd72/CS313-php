<html>

<head>
    <title>Teach 05</title>
</head>

<body>
    <h2>Scripture References</h2>
    <?php try
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
    
    foreach ($db->query('SELECT * FROM scriptures') as $row)
    {
        echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ' : ' . $row['verse'] . ' - </b>' . $row['content'];
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
