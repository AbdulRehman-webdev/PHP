<?php 
$SERVER = "localhost";
$USERNAME = "database_username";
$PASSWORD = "database_password";
$DBNAME = "database_name";
$db = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);
#Check
if(!$db){
echo "The connection is not set!";
}
?>
