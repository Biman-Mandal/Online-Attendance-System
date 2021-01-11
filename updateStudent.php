<?php
include('./config/helper_class.php');
include('header2.php');
$obj=new Helper_class;
$data_array=array("table"=>"student");
array_push($data_array,$_GET);
$rs=$obj->view_data_id($data_array);
$data=mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html>
<head>

	<title>Update Student</title>

</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
<form name="f1" method="post" action="UpdateActionstudent.php">
	<input type="hidden" name="sid" value="<?php echo $data[0];?>">
	<table  class="table5" border="3" width="500px" style="border-color: white;" >
		<tr>
			<td colspan="2" align="center " style="font-weight: bold;font-family: Rockwell;  border-radius: 30px; border: hidden; color: black;">Update Student Detail Here</td>
		</tr>
		<tr>
			<td align="center" class="td3">Full Name</td>
			<td align="center" class="lol4"><input style="opacity: 0.92;" class="input" type="name" name="sname" value="<?php echo $data[2];?>"></td>
		</tr>
		<tr>
			<td align="center" class="td3">Roll Number</td>
			
			<td align="center" class="lol4"><input style="opacity: 0.92;" class="input" type="number" name="sroll" value="<?php echo $data[1];?>"></td>
		</tr>
		
		<tr>
			<td align="center" class="td3">Email Address</td>
			
			<td align="center" class="lol4"><input style="opacity: 0.92;" class="input" type="Email" name="semail" value="<?php echo $data[3];?>"></td>
		</tr>
		<tr>
			<td align="center" class="td3">Semister</td>
			
			<td align="center" class="lol4"><input style="opacity: 0.92;" class="input" type="number" name="sSem" value="<?php echo $data[4];?>"></td>
		</tr>
		<tr>
			<td align="center" class="td3">Phone Number</td>
			
			<td align="center" class="lol4"><input style="opacity: 0.92;" class="input" type="number" name="sphone" value="<?php echo $data[5];?>"></td>
		</tr>
		<tr align="center" >
			<td colspan="3" align="center"  class="td3"><input type="submit" class="botton" value="UPDATE">
		</tr>
	</table>
</form>
</body>
</html>