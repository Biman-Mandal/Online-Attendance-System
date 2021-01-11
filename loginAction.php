<?php
session_start();
error_reporting(0);
include('./config/helper_class.php');
$obj=new Helper_class;
$data=array("table"=>"login_tbl");
array_push($data,$_POST);
echo "<pre>";
// print_r($data);

$row=$obj->login_check($data);
$pass = $data[0]['adminpassword'];
while ($data1=mysqli_fetch_assoc($row)) {
			// print_r($data1);
	if($data[0]['adminuser']==$data1['adminuser']){
		
		$passCheck=password_verify($pass, $data1['adminpassword']);		
		// print_r($passCheck);
	}
}
// $n=mysqli_num_rows($row);
// print_r($n);
// exit();
// die();
if ($passCheck==true) {
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
?>
