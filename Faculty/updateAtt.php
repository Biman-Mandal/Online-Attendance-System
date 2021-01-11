<?php
include('../config/helper_class.php');
include('header5.php');
$obj=new Helper_class;
$data_array=array("table"=>"attendence");
array_push($data_array,$_GET);
$rs=$obj->view_data_id($data_array);

$data=mysqli_fetch_array($rs);
//print_r($data);die();
?>
<link rel="stylesheet" type="text/css" href="../css/style3.css">
<form name="f1" method="post" action="UpdateActionAtt.php">
	<input type="hidden" name="Atid" value="<?php echo $data[0];?>">
	<table  class="table5" border="3" width="500px" style="border-color: white;" >
		<tr >
			<td colspan="2" align="center " style="font-weight: bold;font-family: Rockwell;  border-radius: 30px; border: hidden; color: black;">Update Student Detail Here</td>
		</tr>
		
		<tr>
			<td align="center" class="td3">Student Name</td>
			
			
			<td class="lol4" align="center">
        <select  class="input2" name="AtSid" >
        <?php

		$data_array=array("table"=>"student");
		$rs1=$obj->view_data($data_array);
		while($data1=mysqli_fetch_array($rs1)){
		
    ?>
          <option class="input2" value="<?php echo $data1[0];?>" <?php if($data[1]==$data1[0]){ ?> selected <?php } ?>><?php echo $data1[2];?></option>
         <?php
     	}
     	?>
        </select>
      </td>
		</tr>
		<tr>
			<td align="center" class="td3">Attendance</td>
			
			
			<td align="center">
      <label class="input" >
         <input  class="input" type="radio" name="AtPA" value="<?php echo $data[4];?>" required="required">Present</label>
      <label class="input">
        <input class="input" required="required" type="radio" name="AtPA" value="<?php echo $data[4];?>">Absent</label>
      
    

    </td>
		</tr>
		<tr>
			<td align="center" class="td3">Date</td>
			
			<td align="center" class="lol4"><input style="opacity: 0.92;" class="input" type="Date" name="AtDate" value="<?php echo $data[6];?>"></td>
		</tr>
		
		
		<tr align="center" >
			<td colspan="3" align="center"  class="td1"><input type="submit" class="botton" value="UPDATE">
		</tr>
	</table>
</form>
</body>
</html>