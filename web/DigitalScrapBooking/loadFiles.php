<?php  

require("dbconfig.php");

        
$type = $_GET['load'];
echo $type;
        
if ($type == 'video'){
$video = $db->query("SELECT accounts.username, video.filename AS filename FROM video JOIN accounts ON accounts.accountid = video.accountid AND accounts.username = '".$_SESSION['username']."'");
        while($row = $video->fetch(PDO::FETCH_ASSOC)){
            echo " <div class='row text-center'>

        <div class='col-lg'>
          <div class='card'>
              <video controls class='card-img-top' src='".$row["username"]."/".$row["filename"]."' alt=''></video>
            <div class='card-body'>
              <h4 class='card-title'>".$row["filename"]."</h4>
              <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class='card-footer'>
            </div>
          </div>
        </div>
        </div>";
        }
}

if ($type == "photo"){
    echo "in mate";
$photo = $db->query("SELECT accounts.username, photo.filename AS filename FROM photo JOIN accounts ON accounts.accountid = photo.accountid AND accounts.username = '".$_SESSION['username']."'");
        
        
        while($row = $photo->fetch(PDO::FETCH_ASSOC)){
            echo " <div class='row text-center'>

        <div class='col-lg'>
          <div class='card'>
              <img  class='card-img-top' src='".$row["username"]."/".$row["filename"]."' alt=''></img>
            <div class='card-body'>
              <h4 class='card-title'>".$row["filename"]."</h4>
              <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class='card-footer'>
            </div>
          </div>
        </div>
        </div>";
        }
}

 if ($type == 'document'){       
$doc = $db->query("SELECT accounts.username, document.filename AS filename FROM document JOIN accounts ON accounts.accountid = document.accountid AND accounts.username = '".$_SESSION['username']."'");


         while($row = $doc->fetch(PDO::FETCH_ASSOC)){
            echo " <div class='row text-center'>

        <div class='col-lg'>
          <div class='card'>
              <img  class='card-img-top' src='
        https://image.freepik.com/free-icon/text-document_318-48568.jpg' alt=''></img>
            <div class='card-body'>
              <a href='".$row["username"]."/".$row["filename"]."'><h4 class='card-title'>".$row["filename"]."</h4></a>
              <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class='card-footer'>
            </div>
          </div>
        </div>
        </div>";
        }
 }
?>