<?php
session_start();
include('../config/helper_class.php');
$obj=new Helper_class;
$dataa=array("table"=>"faculty");
array_push($dataa,$_POST);
$pass = $dataa[0]['fpass'];
$row=$obj->login_checkk($dataa);
// $n=mysqli_num_rows($row);
// print_r($n);
while ($data=mysqli_fetch_assoc($row)) {
			
	if($dataa[0]['femail']==$data['femail']){
		// print_r($data);
		$passCheck=password_verify($pass, $data['fpass']);		
		// print_r($passCheck);
	}
}
// exit();
if ($passCheck==true) {

	$row=$obj->login_checkk($dataa);
	$data=mysqli_fetch_array($row);
	$_SESSION['info']=$data;
	// print_r($data);
	// print_r($_SESSION['info']);
	// die();
	if ($_SESSION['is_login1']="true") {
		# code...
		?>
		<script type="text/javascript">
			alert("Login Success");
			window.location.href='Profile.php';
		</script>
		<?php
	// header('location:Profile.php');
	//print_r($_SESSION['info'][0]);die();
	
}
}
else{
	?>
	<script type="text/javascript">
		 alert("Invalid Username or Password");
		 window.location.href='index.php';
	</script>
<?php
}
?>