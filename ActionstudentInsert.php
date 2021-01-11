
<?php
include('session_config.php');
include('./config/helper_class.php');
$data_array=array("table"=>"student");
array_push($data_array,$_POST);
$obj=new Helper_class;
$i=$obj->insert_data($data_array);
if($i==1){
	?>
	<script type="text/javascript">
	alert("Data Inserted Successfully");
	window.open('insertstudent.php','_self');
	
</script>
<?php
}else{
	?>
	<script type="text/javascript">
	alert("Error In Data Save");
	window.open('viewStudent.php');
	
</script>
<?php

}

?>