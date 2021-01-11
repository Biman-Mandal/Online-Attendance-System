<?php
include('./config/helper_class.php');
$obj=new helper_class;
$data_array=array("table"=>"faculty");
array_push($data_array,$_POST);
// die();
$status=$obj->update_data($data_array);
if($status==1){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.location.href="viewFaculty.php";
</script>
<?php
}
else{
?>
<script type="text/javascript">
	alert("Error!");
	window.location.href="viewFaculty.php";
</script>
<?php
}

?>
