<?php

include('header5.php');
include('../config/helper_class.php');

?>
<title>Attendance</title>
<link rel="stylesheet" type="text/css" href="css/facultyDash.css">
<body>
	<table style="margin-left: 200px; margin-top:90px; border-spacing: 20px 8px;" class="table2"  border="2" width="1000">

		<tr>
			<th class="ndtable">Sl No</th>
			<th class="ndtable">Subject</th>
			<th class="ndtable">Semester</th>
			<th class="ndtable">Start Date</th>
			<th class="ndtable">End Date</th>	
			<th class="ndtable">Take Attendance</th>
			<th class="ndtable">View Percentage</th>

		</tr>
		<?php 
		$obj=new Helper_class;
		$data=array("table"=>"alloted");
		$data1=array("AFaid"=>$_SESSION['info']['fid']);
		array_push($data,$data1);
		$rs=$obj->view_data_id($data);
		$i=1;
		while($value=mysqli_fetch_array($rs)){

		?>
		<tr>
	<th height="50" style="color: white; border-radius: 10px; background-color:rgba(34,34,34,0.8);"><?php echo $i;?></th>
<th style="color: white; border-radius: 10px; background-color:rgba(34,34,34,0.8);font-family: 'Pridi', serif;"><?php echo $value['ASub'];?></th>
<th style="color: white; border-radius: 10px; background-color:rgba(34,34,34,0.8);font-family: 'Pridi', serif;"><?php echo $value['ASem'];?></th>
<th style="color: white; border-radius: 10px; background-color:rgba(34,34,34,0.8);font-family: 'Pridi', serif;"><?php echo $value['ASDate'];?></th>
<th style="color: white; border-radius: 10px; background-color:rgba(34,34,34,0.8);font-family: 'Pridi', serif;"><?php echo $value['AEDate'];?></th>	
<th style="border: hidden;" >
<a  class="take_att" href="facultyDash.php?subject=<?php echo $value['ASub'];?>&sem=<?php echo  $value['ASem'];?>&sir=<?php echo  $value['AFaid'];?>">Take Attendence</a></th>
<th style="border: hidden;" >
<a  class="take_att" href="persentage.php?subject=<?php echo $value['ASub'];?>&sem=<?php echo  $value['ASem'];?>&sir=<?php echo  $value['AFaid'];?>">View Percentage</a></th>
		</tr>
		<?php
		$i++;
		 }
		 ?>
	</table>
