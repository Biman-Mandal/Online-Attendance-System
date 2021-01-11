
<?php
include('session_config.php');
include('./config/helper_class.php');
$data_array=array("table"=>"faculty");
array_push($data_array,$_POST);
$obj=new Helper_class;
$Fpass=$data_array[0]['fpass'];
$pass=password_hash($Fpass, PASSWORD_BCRYPT);
$data_array[0]['fpass']=$pass;

// print_r($pass);
echo "<pre>";
print_r($data_array);

$i=$obj->insert_data($data_array);
// print_r($i);
// die();
if($i==1){
	?>
	<script type="text/javascript">
	alert("Data Inserted Successfully");
	window.open('insertfaculty.php','_self');
	
</script>
<?php
}else{
	?>
	<script type="text/javascript">
	alert("Error In Data Save");
	window.open('viewFaculty.php');
	
</script>
<?php

}

?>