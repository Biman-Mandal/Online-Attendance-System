<?php
include('./config/helper_class.php');
$obj=new helper_class;
$data_array=array("table"=>"alloted");
array_push($data_array,$_POST);
$status=$obj->update_data($data_array);
if($status==1){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.location.href="viewAlloted.php";
</script>
<?php
}
else{
?>
<script type="text/javascript">
	alert("Error!");
	window.location.href="viewAlloted.php";
</script>
<?php
}

?>