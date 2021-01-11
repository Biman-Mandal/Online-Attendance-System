<?php
session_start();
if($_SESSION['is_login']=='' || empty($_SESSION['is_login'])){
header('location:index.php');
}
?>