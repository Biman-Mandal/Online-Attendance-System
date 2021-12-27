<?php
session_start();
include('./config/helper_class.php');
$obj=new Helper_class;
$data=array("table"=>"login_tbl");
array_push($data,$_POST);
$run=$obj->login_check($data);
while ($row=mysqli_fetch_assoc($run)) {
		if (password_verify($data[0]['adminpassword'], $row['adminpassword']))
        {
            $_SESSION['admin']=$_POST['adminuser'];
            $_SESSION['is_login']="true";
            ?>
            <script type="text/javascript">
                alert("Login Successful");
                window.location.href='profile.php';
            </script>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
                alert("Invalid Username OR Password");
                window.location.href='index.php';
            </script>
            <?php
        }
}