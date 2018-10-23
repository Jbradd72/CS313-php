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
$chapter = $_GET['chapter'];
$verse = $_GET['verse'];
$content = $_GET['content'];
$topics[] = $_GET['topics'];

$scriptureID = $db->query("INSERT INTO scripture (book, chapter, verse, content) VALUES ($book, $chapter, $verse, $content) RETURNING id");


foreach($topics as $topic){
    $topicId = $db->query("select topicId from topics where topics.name = '$topic'");
    $insert = $db->query("INSERT INTO scripturestopics VALUES ($scriptureID, $topicID)");
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