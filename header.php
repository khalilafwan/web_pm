<?php
session_start(); // Start session in fungsi.php
require_once 'fungsi.php'; // Use require_once instead of require
if(!isset($_SESSION['admin_username'])){
    header("location:login.php");
    exit(); // Ensure script execution stops after redirection
}

?>