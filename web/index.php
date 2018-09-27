<?php

  $file = $_GET["page"];

  if ($file === NULL){
      
  readFile("index.html")
  }
  else{
      readFile($file);
  }


?>