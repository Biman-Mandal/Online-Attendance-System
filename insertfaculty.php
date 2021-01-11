<title>Insert Faculty</title>

<?php
include('header2.php');
?>


<body>
  <link rel="stylesheet" type="text/css" href="css/style7.css">
<form method="post" action="ActionfacutyInsert.php">
  
  <table  class="table1" border="1">
       <tr>
          <th colspan="2" align="center" class="tr2" style="color: white;">Insert Faculty</th>
        </tr> 
    <tr>
      <th  class="tr1">Full Name</th>
      
    </tr>
    
    <tr>
      <th class="tr1"><input style="color: #FF9428"  type="name" class="input" name="fname" placeholder="Enter FullName" required ></th>
    </tr>
    <tr>
      <th class="tr1">Email Id</th>
      
    </tr>
    <tr>
      <th class="tr1"><input style="color: #FF9428"  type="Email" class="input" name="femail" placeholder="Enter Email Address" required></th>
    </tr>
    <tr>
      <th class="tr1">Phone No</th>
      
    </tr>
    <tr>
      <th class="tr1"><input style="color: #FF9428"  type="Number" class="input" name="fphone" placeholder="Enter Phone No" required></th>
    </tr>
    
    <tr>
      <th class="tr1">Password</th>
     
    </tr>
    <tr>
       <th class="tr1"><input style="color: #FF9428"  type="password" class="input" name="fpass" placeholder="Enter Password" required></th>
    </tr>
    <tr>
      <th colspan="3" class="tr2"><input class="botton"  type="submit" value="Submit"></th>
    </tr>
  </table>
</form>
</body>
</html>