<?php 
    require header.php;
?>
<h1 class="h1 mb-1 font-weight-normal" style="text-align: center">Sign Up!</h1>
    <hr>

    <form class="form-signup" action="" method="get" style="width:75%; margin: auto;">
        
        <div class="row">
            <div class="col">
                <input type="text" name="fname" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" name="lname" class="form-control" placeholder="Last name">
            </div>
        </div><br>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
        <input type="tel" name="phone"class="form-control" placeholder="Phone Number"><br>
        <input type="text" name="username" id="inputText" class="form-control" placeholder="User Name" required><br>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
        <input type="password" id="inputPasswordConfirm" class="form-control" placeholder="Confirm Password" required><br>
        <button class="btn btn-lg btn-primary btn-block" style="width:25%; margin:auto;" type="submit">Sign Up</button>
    </form>

<?php require footer.php; ?>
