<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location: login.php");
    die();
}
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.1.1/bootstrap-4.1.1/dist/css/bootstrap.css">
   
    <title>My Page</title>
    <style>
        .nav-link:hover {
            background-color: lightgray;
        }

    </style>



</head>
<script src="jquery-3.3.1.js"></script>

    <script>
        $(document).ready(function() {
                alert(jQuery);
            
            jQuery.("#pbutton").click(function() {
                
                $("content").empty();
                  $.ajax({
                      url: "loadFiles.php?load=photo",
                      success: function(result) {
                          alert(result);
                          $("#content").html(result);
                      }
                  });
            });

            $("#vbutton").click(function() {
    
                $("content").empty();
                $.ajax({
                    url: "loadFiles.php?load=video",
                    success: function(result) {
                        $("#content").html(result);
                    }
                });
            });

            $("#dbutton").click(function() {
    
                $("content").empty();
                $.ajax({
                    url: "loadFiles.php?load=document",
                    success: function(result) {
                        $("#content").html(result);
                    }
                });
            });
        });

    </script>

    
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
        <ul class="nav nav-tabs nav-justified">
            <li id="pbutton" class="active nav-item" data-toggle="tab"><a class="nav-link">Photos</a></li>
            <li id="vbutton" class="nav-item" data-toggle="tab"><a class="nav-link">Videos</a></li>
            <li id="dbutton" class="nav-item" data-toggle="tab"><a class="nav-link">Documents</a></li>
        </ul>
        <div id="content"></div>

    </div>
    <!-- /.container -->

    <?php require('footer.php');?>
