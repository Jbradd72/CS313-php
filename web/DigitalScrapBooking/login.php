<?php 
    require ('dbconfig.php');

     if($_SERVER["REQUEST_METHOD"] == "POST") { 

        $username = $_POST['username'];
        $password = $_POST['password'];

         $count = $db->query("SELECT COUNT(accountid) AS total FROM accounts WHERE username = '$username' AND password = '$password'"); 
         $results = $count->fetch(PDO::FETCH_ASSOC);


        if($results['total'] == 1){
            $_SESSION['username'] = $username;


        }
        else{
            $error = "You entered an incorrect username or password.";
        }
        if (isset($_SESSION['username'])){
            header('location: mypage.php');
        }
     }

        require ('header.php');


?>
    <hr>

    <form class="form-signin"style="width:25%; margin:auto;" method="post" action="">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;">Please sign in</h1>
        <label for="inputEmail" class="sr-only">UserName</label>
        <input type="username" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br>
        <label for="inputPassword"  class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required><br>
        <div class="checkbox mb-3">
            <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" style="" type="submit" value="Sign in">
        <p style="color:red"><?php echo $error?></p>
    </form>
<?php require ('footer.php'); ?>
