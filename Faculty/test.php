<?php 
include('../config/helper_class.php');
include('session_config.php');

		$obj=new Helper_class;
		$data=array("table"=>"alloted");
		$data1=array("AFaid"=>$_SESSION['info']['fid']);
		print_r($data1);
		array_push($data,$data1);
		$rs=$obj->view_data_id($data);
		$i=1;
		while($value=mysqli_fetch_array($rs)){
			print_r($value);
		}

 ?>