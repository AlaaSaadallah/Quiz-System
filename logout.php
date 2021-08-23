<?php
session_start();

unset($_SESSION['login_user']); 
unset($_SESSION['role']);
header("Location:login.php");
?>