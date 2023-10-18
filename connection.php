<?php 
$servername = "localhost";
$username = "root";
$password ="1234";
$db_name = "database1";
$conn = new mysqli ($servername, $username, $db_name);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
echo "";


?>