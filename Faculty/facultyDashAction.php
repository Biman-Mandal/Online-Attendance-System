
<?php
include('session_config.php');
include('../config/helper_class.php');
$data_array=array("table"=>"Attendence");
array_push($data_array,$_POST);
$obj=new Helper_class;
$i=$obj->insert_data($data_array);
if($i==1){
	?>
	<script type="text/javascript">
	alert("Data Inserted Successfully");
	
	
</script>
<?php
// print_r($_POST);
//die();
header('location:facultyDash.php?subject='.$_POST['AtSub'].'&sem='.$_POST['AtSem'].'&sir='.$_POST['AtFid']);
}else{
	?>
	<script type="text/javascript">
	alert("Error In Data Save");
	window.open('facultyDash.php','_self');
	
</script>
<?php

}

?>