<?php
// Start the session
session_start();
$key = $_GET['key'];
$value = $_GET['value'];
$_SESSION["Products"][$key] = $value;
?>
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

    <?php require 'week3-nav.php';?>
    <!-- Page Content -->
    <div class="container" style="margin-top: 5%;">

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://www.deseretnews.com/images/article/hires/1808816/1808816.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">French Fries</a>
                  </h4>
                  <h5>$4.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    
                    <a href="week3.php?key=French%20Fries&value=$4.99"><button class="btn btn-success">Add to Cart</button></a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://c.tribune.com.pk/2017/12/1590373-biryani-1513939158-933-640x480.gif" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Chicken and Rice</a>
                  </h4>
                  <h5>$12.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                    <a href="week3.php?key=Chicken%20and%20Rice&value=$12.99"><button class="btn btn-success">Add to Cart</button></a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://www.thespruceeats.com/thmb/gSU7cxrCTiqNHpGHVKdF-Eavo2o=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/southern-oven-fried-chicken-3058647-5_preview-5b0ec6ecba61770036491ed7.jpeg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Fried Chicken</a>
                  </h4>
                  <h5>$9.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    <a href="week3.php?key=Fried%20Chicken&value=$9.99"><button class="btn btn-success">Add to Cart</button></a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://vignette.wikia.nocookie.net/divinity2/images/3/36/Turkey_Dish_%28D2_food_item%29.png/revision/latest?cb=20150524200108" alt=""></a>
                <div class="card-body">
                  <h4 id="turkey" class="card-title">
                    <a href="#">Thanksgiving Turkey</a>
                  </h4>
                  <h5>$124.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    <a href="week3.php?key=Thanksgiving%20Turkey&value=$124.99#turkey"><button class="btn btn-success">Add to Cart</button></a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://www.seriouseats.com/2018/06/20180625-no-churn-vanilla-ice-cream-vicky-wasik-13.jpg" alt=""></a>
                <div class="card-body">
                  <h4 id="ic" class="card-title">
                    <a href="#">Ice Cream</a>
                  </h4>
                  <h5>$4.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                    <a href="week3.php?key=Ice%20Cream&value=$4.99#ic"><button class="btn btn-success">Add to Cart</button></a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsIBDgmMCNQLbiyetId_I79SkZG0vgj0SL48wBmg4pxrY0ZEi1" alt=""></a>
                <div class="card-body">
                  <h4 id="hd" class="card-title">
                    <a href="#">Heart Disease</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    <a href="week3.php?key=Heart%20Disease&value=$24.99#hd"><button class="btn btn-success">Add to Cart</button></a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    <?php require 'footer'; ?>

    

  </body>

</html>
