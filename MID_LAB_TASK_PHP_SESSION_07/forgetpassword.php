<?php
	session_start();

	if(isset($_POST['Submit']) && isset($_POST['Email']))
	{
		if($_POST['Email'] === "")
		{
			echo "Email field is empty!";
		}
		elseif($_SESSION['email'] === $_POST['Email'])
		{
			echo "You will get a mail!!!!!!! \r\n";
		}
		else
		{
			echo "Please check your Email!";
		}
	} 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
				<a href="publicHome.html"> <img src="logo.png" align="left"> </a>
				<a href="publicHome.html"> Home </a> 
				&nbsp | &nbsp
				<a href="login.php"> Login </a>
				&nbsp | &nbsp
				<a href="registration.php"> Registration </a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<form method="POST" action="">
					<fieldset>
						<legend> <b>FORGOT PASSWORD</b></legend>
							<table>
							<tr>
								<td> Enter Email: </td>
								<td> <input type="email" name="Email"/> <br/></td>
							</tr>
						</table>
						<hr>
						<input type="checkbox" name="checkbox"> Remember Me
						<br> <br>
						<input type="submit" name="Submit" value="Submit">
					</fieldset>
				</form>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="2">
           <center>Copyright © 2017</center>

			</td>
		</tr>
	</table>
</body>
</html>