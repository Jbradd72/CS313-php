<?php
session_start();
$key = $_GET['key'];
unset($_SESSION[$key]);

include 'week3-cart.php';

?>