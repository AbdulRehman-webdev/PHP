<?php require"config.php";
if(isset($_POST['submit'])){
$username = $_POST['username'];
$email= $_POST['email'];
$password= md5($_POST['password']);
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$query = "INSERT INTO table_name (user_name, email, password, $phone, $gender) VALUES('$username''$email', '$password', '$phone', '$gender')";
$execute = mysqli_query($db, $query);
if($execute){
echo"The record is submitted";
}else{
echo"The record is not submitted!";
}
}
?>
