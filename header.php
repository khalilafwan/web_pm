<?php
session_start();
include 'koneksi.php';
if(!isset($_SESSION['admin_username'])){
    header("location:login.php");
}

?>