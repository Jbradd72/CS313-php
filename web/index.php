<?php
readFile("hello.html")
 if (isset($_GET["page"])){
     echo ($_GET["page"]);
 } else {
  readFile("index.html")
  }


?>