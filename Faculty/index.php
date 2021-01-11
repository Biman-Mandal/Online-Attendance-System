<link rel="stylesheet" type="text/css" href="../css/style2.css">
<title>Faculty Login Page</title>
<?php
include('header1.php')

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/style3.css">
<body>
  <form name="f1" action="ActionLoginfaculty.php" method="post">
    <table class="table2" border="1" style="margin-left: 500px; width: 260px;" >
      <tr>
          <th colspan="2" align="center" class="tr2" style="color: white;">Faculty Login</th>
        </tr>
      <tr>
        <th class="tr1">Email</th>
        
      </tr>
      <tr>
        <th class="tr1"><input style="color: #FD4F54" class="input" type="Email" name="femail" placeholder="Enter Email Address" required></th>
      </tr>
      <tr>
        <th class="tr1">Password</th>
        
      </tr>
      <tr>
        <th class="tr1"><input style="color: #FD4F54" class="input" type="password" name="fpass" placeholder="Enter Password" required></th>
      </tr>
      <tr>
        <th colspan="2" class="tr2"><input class="botton" type="submit" value="Done"></th>
      </tr>
    </table>
  </form>
  <p style="margin-left: 500px; width: 320px; margin-top: 400px; color: #0095ff;#00ff33"> Not have an Account?<a style="color: #00ff33; text-decoration: none;list-style-type: none; " href="../insertFaculty.php">Create a new Account</a></p>

</body>
<body>
