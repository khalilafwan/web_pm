<?php 
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="db_pm"; // Ubah nama database menjadi db_pm

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn){
    die("conn Gagal");
}
?>