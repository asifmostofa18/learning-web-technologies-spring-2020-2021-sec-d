<?php
	session_start();

	if(isset($_POST['Submit']))
	{
		$flag = true;

		if($_POST['name'] === "")
		{
			echo "UserName field is empty! \r\n";
			$flag = false;
		}
		elseif($_POST['Password'] === "")
		{
			echo "Password field is empty! \r\n";
			$flag = false;
		}
		elseif(strlen($_POST["name"])<2)
		{
			echo "User Name must contain at least two (2) characters";
			$flag = false;
		}
		elseif(strlen($_POST['Password'])<8)
		{
			echo "Password must not be less than eight (8) characters";
			$flag = false;
		}

		$check = false;
		for ($i=0; $i < strlen($_POST['Password']); $i++) { 
			if($_POST['Password'][$i] === '@' || $_POST['Password'][$i] === '#' || $_POST['Password'][$i] === '$' || $_POST['Password'][$i] === '%')
			{
				$flag = true;
				break;
			}
		}

		if($flag === false)
		{
			echo "Please insert a special charecter";
			$flag = false;
		}

		if($flag)
		{
			if($_POST['name'] === $_SESSION['userName'] && $_POST['Password'] === $_SESSION['password'])
			{
				header('location: home.php');
			}
		}
	} 
?>


<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
				<a href="#"> <img src="logo.png" align="left"> </a>
				<a href="publichome.php"> Home </a> 
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
						<legend> <b>Login</b></legend>
							<table>
							<tr>
								<td>UserName: </td>
								<td> <input type="text" name="name"/> 
								<br/> </td>
							</tr>

							<tr>
								<td> Password: </td>
								<td> <input type="password" name="Password"/> <br/></td>
							</tr>
						</table>
						<hr>
						<input type="checkbox" name="checkbox"> Remember Me
						<br> <br>
						<input type="submit" name="Submit" value="Submit"> <a href="forgotPassword.php"> Forgot Password? </a>
					</fieldset>
				</form>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="2">
				<center> Copyright &copy 2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>