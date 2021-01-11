

<title>Insert Student</title>
<?php
include('header2.php');
?>


<body>
  <link rel="stylesheet" type="text/css" href="css/style7.css">
<form method="post" action="ActionstudentInsert.php">
  
  <table  class="table1" border="1">
       <tr>
          <th colspan="2" align="center" class="tr2" style="color: white;">Insert Student</th>
        </tr>
        
    <tr>
      <th  class="tr1">FullName</th>
      
    </tr>
    <tr>
      <th class="tr1"><input style="color: #FF9428" type="name" class="input" name="sname" placeholder="Enter Full Name" required ></th>
    </tr>
    <tr>
      <th class="tr1">Roll Number</th>
    </tr>
    <tr>
      <th class="tr1"><input style="color: #FF9428" type="Number" class="input" name="sroll" placeholder="Enter Class Roll Number" required></th>
    </tr>
    <tr>
      <th class="tr1">Email</th>
      
    </tr>
    <tr>
      <th class="tr1"><input style="color: #FF9428" type="Email" class="input" name="semail" placeholder="Enter Email" required></th>
    </tr>
    <tr>
      <th class="tr1">Choose Semester</th>
    </tr>
    <tr>
      <th class="tr1" >
        <select style="color: #FF9428" class="botton1" name="sSEm">
          <option style="font-family: Rockwell; font-weight: bold;" value="1">1st</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="2">2nd</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="3">3rd</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="4">4th</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="5">5th</option>
          <option style="font-family: Rockwell; font-weight: bold;" value="6">6th</option>
        </select>
      </th>
    </tr>
    
    <tr>
      <th class="tr1">Phone Number</th>
     
    </tr>
    <tr>
       <th class="tr1"><input style="color: #FF9428" type="Number" class="input" name="sphone" placeholder="Enter Phone Number" required></th>
    </tr>
    <tr>
      <th colspan="3" class="tr2"><input class="botton"  type="submit" value="Submit"></th>
    </tr>
  </table>
</form>
</body>
</html>