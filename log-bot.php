<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("d-m-y");
$time = date("H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$hrefa=$_SERVER['HTTP_REFERER'];
$sql = "INSERT INTO logx (ser_no,ip,href,time,date,browser) VALUES (NULL,'$ip','$hrefa','$time','$date','$browser')";

$conn->close();
echo $ip;
echo $date;
echo $time
echo $browser
echo $hrefa;
?>
