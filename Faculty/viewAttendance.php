<?php 

include('header5.php');

//print_r($_SESSION);
 ?>
 <title>View Attendance</title>
 <li style="list-style-type: none;"><a href="#"><button class="home4">Search</button></a></li>


 <link rel="stylesheet" type="text/css" href="../css/style4.css">
 <div class="divvvvv">
 <table style="margin-left: 300px; margin-top:0px;border-spacing: 20px 8px;" class="table2"  border="2" width="800">
		<tr>
			<th class="ndtable"> Teacher</th>
			<th class="ndtable"> Student</th>
			<th class="ndtable">Attendence</th>
			<th class="ndtable"> Date</th>
			<th class="ndtable"> Update</th>
			<th class="ndtable"> Delete</th>
		</tr>
 <?php
       include('../config/helper_class.php');
		//$data_array=array("table"=>"attendence");
		$obj=new Helper_class;
		$rs=$obj->view_attendance_data($_SESSION['info'][0]);
		while($data=mysqli_fetch_array($rs)){
?>
<tr>
		<td height="50" style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[0];?></td>
		<td style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[1];?></td>
		
		<td style="color: white;opacity: 0.99;background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[6];?></td>
		<td style="color: white;opacity: 0.99;background-color:rgba(34,34,34,0.8) ;border-radius: 10px;;"><?php echo $data[8];?></td>
		<td class="new"><a href="updateAtt.php?Atid=<?php echo $data[2];?>" class="update" >Update</a></td>
			<td class="new"><a href="DeleteAtt.php?Atid=<?php echo $data[2];?>" class="update" >Delete</a></td>

		</tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>