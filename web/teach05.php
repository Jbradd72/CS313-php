<html>

<head>
    <title>Teach 05</title>
</head>

<body>
    <h2>Scripture Resources</h2>
    <?php
    if (isset($_POST['book'])){
    $book = ucfirst($_POST['book']);
    str_replace($book, 'And', 'and');
    echo $book;
    }
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
        
  if (isset($book)){
      foreach ($db->query('SELECT id,book,chapter,verse FROM scriptures where book =' . $book) as $row)
    {
        echo '<a href="scripture-details.php?id=' . $row['id'] . '"<b>' . $row['book'] . ' ' . $row['chapter'] . ' : ' . $row['verse'] . '</b>' . '</a><br>';
    }
  }
  else{
    foreach ($db->query('SELECT id,book,chapter,verse FROM scriptures') as $row)
    {
     echo '<a href="scripture-details.php?id=' . $row['id'] . '"><b>' . $row['book'] . ' ' . $row['chapter'] . ' : ' . $row['verse'] . '</b>' . '</a><br>';   
        
    }
  }
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>
   <br> <h2> Scripture Search:</h2>
    
<form action="/teach05.php" method="post">
  Book:<br>
  <input type="text" name="book" value="">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form>    
    
</body>


</html>
