<?php
include('./config/helper_class.php');
$obj=new Helper_class;
include('header2.php');
$data_array=array("table"=>"faculty");
array_push($data_array,$_GET);
$rs=$obj->view_data_id($data_array);
$data=mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Faculty Update</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
<form name="f1" method="post" action="UpdateActionfaculty.php">
	<input type="hidden" name="fid" value="<?php echo $data[0];?>">
	<table class="table5" border="3" width="500px" style="border-color: white;">
		<tr>
			<td  colspan="2" align="center " style="font-weight: bold;font-family: Rockwell;  border-radius: 30px; border: hidden; color: black;">Update Faculty Detail Here</td>
		</tr>
		<tr >
			<td align="center" class="td3">Full Name</td>
			
			<td align="center" class="lol4" ><input style="opacity: 0.92;" class="input" type="text" name="fname" value="<?php echo $data[1];?>"></td>
		</tr>
		<tr>
			<td align="center" class="td3">Email Id</td>
			
			<td align="center" class="lol4"  ><input style="opacity: 0.92;" class="input" type="email" name="femail" value="<?php echo $data[2];?>"></td>
		</tr>
		<tr>
			<td align="center" class="td3"> Phone No</td>
			
			<td align="center" class="lol4" ><input style="opacity: 0.92;" class="input" type="number" name="fphone" value="<?php echo $data[3];?>"></td>
		</tr>
		<tr align="center" >
			<td style="border: hidden;" colspan="3" align="center"  class="td1"><input type="submit" class="botton" value="UPDATE">
		</tr>
	</table>
</form>
</body>
</html>