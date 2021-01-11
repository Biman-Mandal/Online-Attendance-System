<?php include('./config/helper_class.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>View Faculty</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
</head>
<?php

include('header2.php');

?>
<body>
	<div  class="divvv">
	<table style="margin-left: 300px; margin-top:0px; border-spacing: 20px 8px;" class="table2" ;  border="2" width="800" >
		<tr>
			<th class="ndtable">Name</th>
			<th class="ndtable">Email</th>
			<th class="ndtable">Phone Number</th>
			<th class="ndtable">Update</th>
			<th class="ndtable">Delete</th>
			
		</tr>
		<?php  
		$data_array=array("table"=>"faculty");
		$obj=new Helper_class;
		$rs=$obj->view_data($data_array);
		while($data=mysqli_fetch_array($rs)){
		?>
		<tr>
			<td height="50" style="color: white; background-color:rgba(34,34,34,0.8);border-radius: 10px; "><?php echo $data[1];?></td>
			<td style="color: white; border-radius: 10px; background-color:rgba(34,34,34,0.8);"><?php echo $data[2];?></td>
			<td style="color: white; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[3];?></td>
			<td class="new"><a href="Updatefaculty.php?fid=<?php echo $data[0];?>" class="update" >Update</a></td>
			<td class="new"><a href="deleteFaculty.php?fid=<?php echo $data[0];?>" class="update">Delete</a></td>

		</tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>
