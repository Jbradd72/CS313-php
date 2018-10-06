<?php
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="week3.css" rel="stylesheet">
    <script src="jquery-3.3.1.js"></script>

</head>

<body>
    <?php require 'week3-nav.php'; ?>
    <form class="form-signup" action="week3-confirmation.php" method="get">

        <div class="row">
            <div class="col">
                <input type="text" name="fname" class="form-control" placeholder="First name" required>
            </div>
            <div class="col">
                <input type="text" name="lname" class="form-control" placeholder="Last name" required>
            </div>
        </div><br>
        <input type="text" name="addr1" class="form-control" placeholder="Address Line 1" required><br>
        <input type="text" name="addr2" class="form-control" placeholder="Address Line 2" required><br>
        <input type="text" name="addr3" class="form-control" placeholder="Zip Code" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Confirm Address</button>
    </form>


    <?php require 'week3-footer.php'; ?>
</body>
