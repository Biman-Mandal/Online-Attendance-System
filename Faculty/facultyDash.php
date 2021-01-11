<title>Attendance</title>
<body>  
  <link rel="stylesheet" type="text/css" href="css/facultyDash.css">
<?php

include('../config/helper_class.php');
include('header5.php');
$_SESSION['subject']=$_GET['subject'];
$_SESSION['sir']=$_GET['sir'];
?>
<?php
if ($_SESSION['is_login']="true") {
    
 
 ?> 
<div class="login"> 
  <h2 class="login1">Welcome </h2><h3 class="login2"><?php print_r($_SESSION['info'][1]);?></h3>
  <h4 class="lohin3">Take Attendance Here</h4>
</div>



<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>



<table class="table2">


  <tr class="td1">


      <th class="ndtable">Teacher</th>
      <th class="ndtable">Subject</th>
      <th class="ndtable">Select Student</th>
      <th class="ndtable">Attendence</th>
      <th class="ndtable">Enter Date</th>
      
      
    </tr>

<form method="post" action="facultyDashAction.php">
  


 <tr>
       
     
    <th class="box3">
        <select name="AtFid" required="required">
        <?php

    $data_array=array("table"=>"faculty");
    $obj=new Helper_class;
    $rs=$obj->view_data($data_array);
    while($data=mysqli_fetch_array($rs)){
    
    ?>
          <option class="option2" value="<?php echo $_SESSION['sir'];?>" ><?php print_r($_SESSION['info'][1]);?></option>
         <?php
      }
      ?>
        </select>
      </th>
     <th class="box4">
       <select name="AtSub" required="required" class="option3">
       <option class="option3" value="<?php echo $_SESSION['subject'];?>" ><?php echo $_SESSION['subject'];?></option>
       </select>
    </th>
     
      <th class="box2">
        <select name="AtSid" required="required">
        <?php

    $data_array=array("table"=>"student");
    $obj=new Helper_class;
    $data1=array("sSem"=>$_GET['sem']);
    array_push($data_array,$data1);
    $rs=$obj->view_data_id($data_array);
    while($data=mysqli_fetch_array($rs)){
    
    ?>
          <option class="option1" value="<?php echo $data[0];?>" ><?php echo $data[2];?></option>
         <?php
      }
      ?>
        </select>
      </th>
    
    <th class="box">
      <label>
         <input  type="radio" name="AtPA" value="Present" required="required">
         <span class="Present">Present</span>    
      </label>
      <label>
        <input required="required" type="radio" name="AtPA" value="Absent">
        <span class="Absent">Absent</span>
      </label>
      
    

    </th>
       <input type="hidden" name="AtSem" value="<?php echo $_GET['sem'];?>">
       <th class="date1"><input required="required" class="date2" value="<?php echo $today; ?>"  type="Date" name='AtDate'  placeholder="Enter Date" required></th>
    
  </table>
  <tr >
      <th colspan="3" class="bottom10"><input class="bottom" style="font-weight: bold;"  type="submit" value="Submit"></th>
  </tr>
</form>
</body>
</html>
<?php
}
?>