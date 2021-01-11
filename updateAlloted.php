<?php
include('./config/helper_class.php');
include('header2.php');
$obj=new Helper_class;
$data_array=array("table"=>"alloted");
array_push($data_array,$_GET);
$rs=$obj->view_data_id($data_array);

$data=mysqli_fetch_array($rs);
//print_r($data);die();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Student</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
 <form name="f1" method="post" action="UpdateActionAlloted.php">
	<input type="hidden" name="Aid" value="<?php echo $data[0];?>">
	<table  class="table5" border="3" width="500px" style="border-color: white;" >
		<tr >
			<td colspan="2" align="center " style="font-weight: bold;font-family: Rockwell;  border-radius: 30px; border: hidden; color: black;">Update Student Detail Here</td>
		</tr>
		<tr>
			<td align="center" class="td3">Faculty</td>
			
			
			<td class="lol4" align="center">
        <select  class="input2" name="AFaid">
        <?php

		$data_array=array("table"=>"faculty");
		$rs1=$obj->view_data($data_array);
		while($data1=mysqli_fetch_array($rs1)){
		
    ?>
          <option class="input2" value="<?php echo $data1[0];?>" <?php if($data[1]==$data1[0]){ ?> selected <?php } ?>><?php echo $data1[1];?></option>
         <?php
     	}
     	?>
        </select>
      </td>
		</tr>
		<tr>
      <td class="td3" align="center">Semester</td>
    
      <td class="lol4" align="center">
        <select class="input1" name="ASem">
          <div>
<option class="input1" style="font-family: Rockwell; font-weight: bold;" value="1" <?php if($data[2]==1){?> selected <?php } ?>>1st</option>
<option class="input1" style="font-family: Rockwell; font-weight: bold;" value="2" <?php if($data[2]==2){?> selected <?php } ?>>2nd</option>
<option class="input1" style="font-family: Rockwell; font-weight: bold;" value="3" <?php if($data[2]==3){?> selected <?php } ?>>3rd</option>
<option class="input1" style="font-family: Rockwell; font-weight: bold;" value="4" <?php if($data[2]==4){?> selected <?php } ?>>4th</option>
<option class="input1" style="font-family: Rockwell; font-weight: bold;" value="5" <?php if($data[2]==5){?> selected <?php } ?>>5th</option>
<option class="input1" style="font-family: Rockwel l; font-weight: bold;" value="6" <?php if($data[2]==6){?> selected <?php } ?>>6th</option>
        </div>
        </select>
      </td>
    </tr>
		
		<tr>
			<td align="center" class="td3">Subject</td>
			
			<td class="input">
 <input type="text" name="ASub" class="input" value="<?php echo $data[3];?>"></td>
</select>
</td>

		</tr>
		<tr>
			<td align="center" class="td3">Start Date</td>
			
			<td align="center" class="lol4"><input style="opacity: 0.92;" class="input" type="Date" name="ASDate" value="<?php echo $data[4];?>"></td>
		</tr>
		<tr>
			<td align="center" class="td3">End Date</td>
			
			<td align="center" class="lol4"><input style="opacity: 0.92;" class="input" type="Date" name="AEDate" value="<?php echo $data[5];?>"></td>
		</tr>
		<tr align="center" >
			<td colspan="3" align="center"  class="td3"><input type="submit" class="botton" value="UPDATE">
		</tr>
	</table>
</form>
</body>
</html>