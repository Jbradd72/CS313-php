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