
<?php 
    require('dbconfig.php');
    if (!isset($_SESSION['username'])){
        header('location: login.php');
    }  
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.css">

    <title>Bootstrap test</title>
    <style>
        onfocus {}
    </style>

</head>

<body style="padding-top: 65px">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="test1.html">
            <h4>DSB</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="mypage.php">My Page <span class="sr-only">(current)</span></a>
                </li>
                <li>
                   <?php if (isset($_SESSION['username'])) 
                    echo "<a class='nav-link' href='mypage.php'>My Page <span class='sr-only'></span></a>";
                    else
                    echo "<a class='nav-link' href='login.php'>Login <span class='sr-only'></span></a>"; ?>
                </li>
                <li>
                    <a class="nav-link" href="fileUpload.php">Save files <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

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
        
          
          ?>

    </div>
    <!-- /.container -->

<?php require('footer.php');?>

   
