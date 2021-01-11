<?php
session_start();
if($_SESSION['is_login1']=='' || empty($_SESSION['is_login1'])){
header('location:index.php');
}
?>