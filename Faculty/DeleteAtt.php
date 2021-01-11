<?php
include('../config/helper_class.php');
$obj=new Helper_class;
$data_array=array("table"=>"attendence");
array_push($data_array,$_GET);
$status=$obj->delete_data($data_array);
if($status==1){
?>
<script type="text/javascript">
	alert("Data Deleted Successfully");
	window.location.href="viewAttendance.php";
</script>
<?php
}
else{
?>
<script type="text/javascript">
	alert("Error!");
	window.location.href="viewAttendance.php";
</script>
<?php
}

?>