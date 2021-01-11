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
	<div class="divvvv">
<table style="margin-left: 260px; margin-top:0px;border-spacing: 20px 8px;" class="table2"  border="2" width="800">
		<tr>
			<th class="ndtable"> Faculty</th>
			<th class="ndtable"> Semister</th>
			<th class="ndtable"> Subject</th>
			<th class="ndtable"> Start Date</th>
			<th class="ndtable"> End Date</th>
			<th class="ndtable"> Update</th>
			<th class="ndtable"> Delete</th>
		</tr>
		<?php
		//$data_array=array("table"=>"alloted");
		$obj=new Helper_class;
		$rs=$obj->view_alloted_data();
		while($data=mysqli_fetch_array($rs)){
		//	print_r($data);die();
		?>
		<tr>
		<td height="50" style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[0];?></td>
		<td style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[3];?></td>
		<td style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[4];?></td>
		<td style="color: white;opacity: 0.99;background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[5];?></td>
		<td style="color: white;opacity: 0.99;background-color:rgba(34,34,34,0.8) ;border-radius: 10px;;"><?php echo $data[6];?></td>
		<td class="new"><a href="updateAlloted.php?Aid=<?php echo $data[1];?>" class="update" >Update</a></td>
			<td class="new"><a href="DeleteAlloted.php?Aid=<?php echo $data[1];?>" class="update" >Delete</a></td>

		</tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>