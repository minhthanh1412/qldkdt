<?php
//Kết nối
$servername = "localhost";
$username = "root";
$password = "";
$database="qldaotao";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit;
} 
 mysqli_set_charset($conn,"utf8");
?>