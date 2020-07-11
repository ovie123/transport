<?php 

$host = 'Localhost';
$user = 'root';
$pass = '';
$db_name = 'logistics';

$conn = new MYSQLi($host, $user,$pass, $db_name);

if($conn->connect_error){
  die('Database Connection Error:' . $conn->connect_error);
} 