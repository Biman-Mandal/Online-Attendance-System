<title>Class Alloted</title>

<?php
include('./config/helper_class.php');
include('header2.php');

?>
<body>
  <link rel="stylesheet" type="text/css" href="css/style7.css">
<form method="post" action="ActionAlloted.php">
  
  <table  class="table1" border="1">
       <tr>
          <th colspan="2" align="center" class="tr2" style="color: white;">Insert Faculty</th>
        </tr>
    <tr>
      <th  class="tr1">Faculty</th>
      
    </tr>
     <tr>
      <th class="tr1">
        <select style="color: #FF9428" class="botton1" name="AFaid">
        <?php

		$data_array=array("table"=>"faculty");
		$obj=new Helper_class;
		$rs=$obj->view_data($data_array);
		while($data=mysqli_fetch_array($rs)){
		
    ?>
          <option style="font-family: 'Righteous', cursive;" value="<?php echo $data[0];?>"><?php echo $data[1];?></option>
         <?php
     	}
     	?>
        </select>
      </th>
    </tr>
    <tr>
      <th class="tr1">Semester</th>
    </tr>
    <tr>
      <th class="tr1">
        <select class="botton1" name="ASem">
          <div>
          <option style="font-family: Rockwell; font-weight: bold;" value="1">1st</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="2">2nd</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="3">3rd</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="4">4th</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="5">5th</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="6">6th</option>
        </div>
        </select>
      </th>
    </tr>
    <tr>
      <th class="tr1">Subject</th>
      
    </tr>
    <tr>
      <th class="tr1"><input style="color: #FF9428" type="text" class="input" name="ASub" placeholder="Enter Subject Name" required></th>
    </tr>
    
    <tr>
      <th class="tr1">Start Date</th>
     
    </tr>
    <tr>
       <th class="tr1"><input style="color: #FF9428;"  type="Date" name='ASDate' class="input" placeholder="Enter Date" require></th>
    </tr>
    <tr>
      <th class="tr1">End Date</th>
     
    </tr>
    <tr>
       <th class="tr1"><input style="color: #FF9428" type="Date" class="input" name="AEDate" placeholder="Enter Password" required></th>
    </tr>
    <tr>
      <th colspan="3" class="tr2"><input class="botton"  type="submit" value="Submit"></th>
    </tr>
  </table>
</form>
</body>
</html>