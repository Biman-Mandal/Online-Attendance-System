<?php
session_start();
$_SESSION['admin']='';
$_SESSION['is_login']='';
session_destroy();
header('location:index.php?msg=logout successful');
?>