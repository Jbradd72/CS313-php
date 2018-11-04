<?php session_start();
$username = $_POST['username'];
$pass1 = $_POST['password'];
$pass2 =$_POST['passwordConfirm'];
    if($_POST)
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.css">

    <title>Bootstrap test</title>
    

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
                    <a class="nav-link" href="politics-test.html">Politics <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
<h1 class="h1 mb-1 font-weight-normal" style="text-align: center">Sign Up!</h1>
    <hr>

    <form class="form-signup" action="" method="post" style="width:50%; margin: auto;">
        <input type="text" name="username" id="inputText" class="form-control" placeholder="User Name" required><br>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
        <input type="password" name="passwordConfirm" id="inputPasswordConfirm" class="form-control" placeholder="Confirm Password" required><br>
        <button class="btn btn-lg btn-primary btn-block" style="width:25%; margin:auto;" type="submit">Sign Up</button>
    </form>

    <footer id="footer" class="fixed-bottom">
        <p style="text-align: center;">&copy; Verse 2017-2018</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/bootstrap-4.1.1/bootstrap-4.1.1/dist/js/bootstrap.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>
