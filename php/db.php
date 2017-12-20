<?php $user = 'root';
$password = 'root';
$db = 'fault5_users';
$host = 'localhost';
$port = 22;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
?>