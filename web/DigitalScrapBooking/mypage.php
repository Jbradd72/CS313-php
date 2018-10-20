
<?php 
    require('dbconfig.php');
    if (!isset($_SESSION['username'])){
        header('location: login.php');
    }


   require('header.php');
?>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      </header>
        
        <?php 
        echo $_SESSION['username'];
        $video = $db->query("SELECT accounts.username, video.filename AS filename FROM video JOIN accounts ON accounts.accountid = video.accountid AND accounts.username = '".$_SESSION['username']."'");
        
        $photo = $db->query("SELECT accounts.username, photo.filename AS filename FROM photo JOIN accounts ON accounts.accountid = photo.accountid AND accounts.username = '".$_SESSION['username']."'");
        
        $doc = $db->query("SELECT accounts.username, document.filename AS filename FROM document JOIN accounts ON accounts.accountid = document.accountid AND accounts.username = '".$_SESSION['username']."'");
        
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
        
         while($row = $document->fetch(PDO::FETCH_ASSOC)){
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
        
          
          ?>

    </div>
    <!-- /.container -->

<?php require('footer.php');?>

   
