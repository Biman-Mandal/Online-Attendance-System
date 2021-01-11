
<?php 
	include ("./config/helper_class.php");	
	$data=$_REQUEST;
	print_r($data);
	$data_array=['table'=>'login_table'];
	array_push($data_array, $data);
	$Obj=new helper_class;
	$Obj->login_Data_Insert($data_array);

 ?>