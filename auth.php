<?php 
session_start();
if(!isset($_SESSION["email"])){
header("Location: 404.php");
}
?>
