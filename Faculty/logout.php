<?php
session_start();
// $_SESSION['admin']='';
$_SESSION['is_login1']='';
unset($_SESSION['is_login1']);
header('location:index.php?msg=logout successfull');
?>