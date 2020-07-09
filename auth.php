<?php 
session_start();
if(!isset($_SESSION["email"])){
header("Location: includes/404.php");
}
?>
