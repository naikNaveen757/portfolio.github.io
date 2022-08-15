<?php
session_start();
unset($_SESSION['user_login']);
unset($_SESSION['name']);
header('location:admin.php');
die();
?>