<?php
 if (isset($_GET["page"])){
     echo ($_GET["page"]);
 } else {
  readFile("index.html");
  }


?>