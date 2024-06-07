<?php
session_start();
require_once 'koneksi.php';
if(!isset($_SESSION['admin_username'])){
    header("location:login.php");
}

?>