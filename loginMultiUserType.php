<?php
require('config.php');
session_start();
if(isset($_POST["login-submit"])){
$UserType = $_POST['usertype'];
$Email = $_POST["email"];
$PassWord = $_POST["password"];
//check if user exist in database or not
$query = "SELECT * FROM users WHERE user_type='$UserType' and user_email='$Email' and user_password='".md5($PassWord)."'";
$result = mysqli_query($db,$query);

//checking the user in every row of the database
$rows = mysqli_num_rows($result);

//if a single person will be match in database record
if($rows==1){
$_SESSION['email'] = $Email;
$_SESSION['usertype'] = $UserType;

if($_SESSION['email']==$Email && $_SESSION['usertype']=='Admin'){
header("Location: admin/index.php");
}elseif($_SESSION['email']==$Email && $_SESSION['usertype']=='User'){
header("Location: user/index.php");
}elseif($_SESSION['email']==$Email && $_SESSION['usertype']=='Rider'){
header("Location: rider/index.php");
}
}else{
echo "<div class='alert alert-danger' role='alert'>
Incorrect user, email or password!
</div>";
}
}
?>
