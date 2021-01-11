<title>Admin Login</title>
<?php
include('header1.php')

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style3.css">
<body>
	<form name="f1" action="loginAction.php" method="post">
		<table class="table2" border="1" style="margin-left: 500px; width: 260px;" >
      <tr>
          <th colspan="2" align="center" class="tr2" style="color: white;">Admin Login</th>
        </tr>
			<tr>
				<th class="tr1">UserName</th>
				
			</tr>
      <tr>
        <th class="tr1"><input style="color: #FF9428" class="input" type="name" name="adminuser" placeholder="Enter Username" required></th>
      </tr>
			<tr>
				<th class="tr1">PASSWORD</th>
				
			</tr>
      <tr>
        <th class="tr1"><input style="color: #FF9428"  class="input" type="password" name="adminpassword" placeholder="Enter Password" required></th>
      </tr>
			<tr>
				<th colspan="2" class="tr2"><input class="botton" type="submit" value="Done"></th>
			</tr>
		</table>
	</form>

</body>
<body>

          