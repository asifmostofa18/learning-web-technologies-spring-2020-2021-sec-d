<?php
	
	session_start();

	if(isset($_POST['Submit']))
	{
		$flag = true;

		if($_POST["Name"] === "")
		{
			echo "Name field is empty! \r\n";
			$flag = false;
		}
		elseif($_POST['Email'] === "")
		{
			echo "Email field is empty! \r\n";
			$flag = false;
		}
		elseif($_POST['UserName'] === "")
		{
			echo "UserName field is empty! \r\n";
			$flag = false;
		}
		elseif(strlen($_POST['UserName'])<2)
		{
			echo "User Name must contain at least two (2) characters \r\n";
			$flag = false;
		}
		elseif(strlen($_POST['Password'])<8)
		{
			echo "Password must not be less than eight (8) characters \r\n";
			$flag = false;
		}
		elseif($_POST['Password'] !== $_POST['cPassword'])
		{
			echo "Password and Confirm Password do not match! \r\n";
			$flag = false;
		}
		else
		{

			$flag = false;
			for ($i=0; $i < strlen($_POST['Password']); $i++) { 
				if($_POST['Password'][$i] === '@' || $_POST['Password'][$i] === '#' || $_POST['Password'][$i] === '$' || $_POST['Password'][$i] === '%')
				{
					$flag = true;
					break;
				}
			}

			if($flag === false)
			{
				echo "Please insert (@/#/$/%) special charecter in Password field \r\n";
				$flag = false;
			}
		}

		if($flag === true)
		{
			$_SESSION['userName'] = $_POST['UserName'];
			$_SESSION['password'] = $_POST['Password'];
			$_SESSION['email'] = $_POST['Email'];
			header('location: login.php');
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
				<a href="publichome.html"> <img src="logo.png" align="left"> </a> 
				<a href="publichome.html"> Home </a> 
				&nbsp | &nbsp
				<a href="login.php"> Login </a>
				&nbsp | &nbsp
				<a href="registration.php"> Registration </a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<br>
				<form method="POST" action="">
				<fieldset>
					<legend> <b>REGISTRATION</b></legend>
						<table>
							<tr>
								<td> Name </td>
								<td> :<input type="text" name="Name"/> 
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> Email </td>
								<td> :<input type="email" name="Email"/> 
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> User Name </td>
								<td> :<input type="username" name="UserName"/> 
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> Password </td>
								<td> :<input type="password" name="Password"/> 
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> Confirm Password </td>
								<td> :<input type="password" name="cPassword"/> 
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
					</table>
						<fieldset>
							<legend>Gender</legend>
							    <input type='radio' name='gender' value='Male'>Male
		            			<input type='radio' name='gender' value='Female'>Female
		            			<input type='radio' name='gender' value='Others'>Others
						</fieldset>

						<fieldset>
							<legend>Date of Birth</legend>
									<input type="number" name="date" min="1" max = "31" size="4"> /
									<input type="number" name="month" min="1" max = "12" size="4"> /
									<input type="number" name="year" min="1900" max = "2500" size="4"> <i> (dd/mm/yyyy) </i>
						</fieldset>
					<hr>
					<input type="reset" name="Reset" value="Reset">
					<input type="submit" name="Submit" value="Submit">
				</fieldset>
				</form>
			<br>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center> Copyright &copy 2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>