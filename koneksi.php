<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "db_lucky";
$connection = mysqli_connect($host, $user, $password, $dbName);
if(!$connection){
die("Koneksi gagal : ".mysqli_connect_error());
}
?>