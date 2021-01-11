<?php
include('./config/helper_class.php');
$obj=new helper_class;
$data_array=array("table"=>"student");
array_push($data_array,$_POST);
$status=$obj->update_data($data_array);
if($status==1){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.location.href="viewstudent.php";
</script>
<?php
}
else{
?>
<script type="text/javascript">
	alert("Error!");
	window.location.href="viewstudent.php";
</script>
<?php
}

?>