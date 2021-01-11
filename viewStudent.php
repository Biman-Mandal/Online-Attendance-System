<?php include('./config/helper_class.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>View Student</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
</head>
<?php

include('header2.php');

?>
<body>
	<div class="divv">
	<table  style="margin-left: 0px; margin-top:0px; border-spacing: 20px 8px;" class="table2"  border="2" width="1000">

		<tr>
			<th class="ndtable">Class Roll</th>
			<th class="ndtable">Name</th>
			<th class="ndtable">Email Address</th>
			<th class="ndtable">Semister</th>
			<th class="ndtable">Phone Number</th>
			<th class="ndtable">Update</th>
			<th class="ndtable">Delete</th>
			
		</tr>
		<?php
		$data_array=array("table"=>"student");
		$obj=new Helper_class;
		$rs=$obj->view_data($data_array);
		while($data=mysqli_fetch_array($rs)){
		?>
		<tr>
		
<td height="50" style="color: white;background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[1];?></td>
<td style="color: white; border-radius: 10px;  background-color:rgba(34,34,34,0.8) ;"><?php echo $data[2];?></td>
<td style="color: white;  background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[3];?></td>
<td style="color: white;  background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[4];?></td>
<td style="color: white;  background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[5];?></td>
<td class="new" ><a href="updateStudent.php?sid=<?php echo $data[0];?>" class="update"  > Update</a></td>
<td class="new" ><a href="DeleteStudent.php?sid=<?php echo $data[0];?>" class="update" >Delete</a></td>

		</tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>