<?php
 if (isset($_GET["page"])){
     readFile($_GET["page"]);
 } else {
  readFile("index.html");
  }


?>