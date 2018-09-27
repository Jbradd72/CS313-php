<?php

  $file = $_GET["page"];

  if ($file === NULL){
      
  readFile("index.html")
  }
  else{
      echo($file);
  }


?>