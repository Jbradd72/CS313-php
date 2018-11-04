<?php require ('dbconfig.php');
   if (!isset($_SESSION['username'])) header("location: login.php");

$table = $_POST['type'];
$filename = $_FILES['fileToUpload']['name'];
$size = $_FILES['fileToUpload']['size'];
$username = $_SESSION['username'];

$account = $db->query("SELECT accountid from accounts where username = '$username'");
$accountFetch =$account->fetch(PDO::FETCH_ASSOC);
$accountId = $accountFetch['accountid'];
echo "filename: $filename";

$register = $db->query("INSERT INTO $table (accountid, filename, size) VALUES ($accountId, '".$filename."', $size)");
  
?>
<html>

<head>
    <meta charset="utf-9">
    <title> File Upload</title>
    
    <link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.css">
</head>

<body style ="text-align: center;">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="test1.html">
            <h4>DSB</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
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
    
    <form method="post" action="" enctype="multipart/form-data">
    <input style="margin: 20% auto auto auto;" type="file" value="upload" name="fileToUpload" id="fileButton" />
    
     <p>Choose where to upload your file:</p><select style="display:inline" id="filetype" name="type" >
  <option value="video">Videos</option>
  <option value="photo">Photos</option>
  <option value="document">Documents</option>
</select>
        <br><input type='submit' value='upload'>
        </form>
    

    <script src="https://www.gstatic.com/firebasejs/5.5.6/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCppFfJSFp_J9sY2MAlfDFXETZBBJYbl60",
            authDomain: "web2-1.firebaseapp.com",
            databaseURL: "https://web2-1.firebaseio.com",
            projectId: "web2-1",
            storageBucket: "web2-1.appspot.com",
            messagingSenderId: "391760527181"
        };
        firebase.initializeApp(config);
        
        var uploader = document.getElementById("uploader");
        var fileButton = document.getElementById("fileButton");
        var type = document.getElementById("filetype").value;
    
        
        
        
   /* fileButton.addEventListener("change", function(e){
          var file = e.target.files[0];
        
        var storageRef = firebase.storage().ref('username/'+ type +'/' + file.name);
        
        var task = storageRef.put(file);
        
        task.on("state_changed", 
               function progress(snapshot){
            var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            uploader.value = percentage;
        }
               );
    });*/
        
        

    </script>

</body>

</html>
