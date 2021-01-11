<?php
include('../config/helper_class.php');
include('header5.php');


?>
 <title>View Persentage</title>


 <link rel="stylesheet" type="text/css" href="../css/style4.css">
 <div class="dvv">
 <table style="margin-left: 300px; margin-top:0px;border-spacing: 20px 8px;" class="table2"  border="2" width="800">
		<tr>
			<th class="ndtable"> Sl No</th>
			<th class="ndtable"> Roll</th>
			<th class="ndtable"> Name</th>
			<th class="ndtable">Subject</th>
			<th class="ndtable">Attendance</th>
			<th class="ndtable">Total Class</th>
			<th class="ndtable"> Percentage</th>
			
			
		</tr>
			
		</tr>
		<?php
       $count=0;
		//$data_array=array("table"=>"attendence");
		$obj=new Helper_class;
		$rs=$obj->view_student($_GET['sem']);
		while($data=mysqli_fetch_array($rs)){
			$count++;
?>
		<tr>
			<td  width="100" height="50" style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $count ?></td>
<td width="100"; style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[1];?></td>
<td width="400"; style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $data[2];?></td>
<td width="100"; style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $_GET['subject'];?></td>
<td width="100"; style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $obj->view_total_student_class($_GET['subject'],$_GET['sem'],$data[0]);?></td>
<td width="100"; style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo $obj->view_total_class($_GET['subject'],$_GET['sem']);?></td>
<td width="100"; style="color: white;opacity: 0.99; background-color:rgba(34,34,34,0.8) ;border-radius: 10px;"><?php echo ($obj->view_total_student_class($_GET['subject'],$_GET['sem'],$data[0])/$obj->view_total_class($_GET['subject'],$_GET['sem']))*100;?>%</td>



<?php

}
?>
</tr>
</table>
</div>
