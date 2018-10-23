<?php
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword); 

$book = $_GET['book'];

echo "<h1>$book</h1>";
$chapter = $_GET['chapter'];
$verse = $_GET['verse'];
$content = $_GET['content'];
$topics[] = $_GET['topics'];

$scripture = $db->query("INSERT INTO scripture (book, chapter, verse, content) VALUES ('$book', $chapter, $verse, '$content') RETURNING id");
$scriptureId = $scripture->fetch(PDO::FETCH_ASSOC);



foreach($topics as $topic){
    $topicId = $db->query("select topicId from topics where topics.name = '$topic'");
    $topicIdf = $topicId->fetch(PDO::FETCH_ASSOC);
    $insert = $db->prepare("INSERT INTO scripturestopics VALUES (".$scriptureID['id']."," . $topicIdf['topicID'] .")");
    $insert->execute();
}

$showScriptures = $db->query("select * from scripture");

while ($row = $showScriptures->fetch(PDO::FETCH_ASSOC)){
    echo $row['book']. " " . $row['chapter']. " " . $row['verse']. "<br>" . $row['content'];
    
    $showTopics = $db->query("select name from topics INNER JOIN scripturestopics ON topics.topicID = scripturestopics.topicID WHERE scripturestopics.scriptureID =" . $row['id']);
    
    while ($newRow = $showTopics->fetch(PDO::FETCH_ASSOC)){
        echo $newRow['name'];
    }
}



?>