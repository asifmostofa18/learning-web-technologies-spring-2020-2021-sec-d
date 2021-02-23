<?php


	
	if(isset($_POST['submit'])){

		$name 		= $_POST['Name'];
	

		if($name == ""){
			echo "null submission";
		}else{
			echo $name;
		}
	
	$email		= $_POST['Email'];
	

	if($email == ""){
		echo "null submission";
	}else{
		echo $email;
	}

	
	$Username 		= $_POST['UserName'];
	

		if($Username == ""){
			echo "null submission";
		}else{
			echo $Username;
		}


		$Pass		= $_POST['Password'];
	

		if($Pass== ""){
			echo "null submission";
		}else{
			echo $Pass;
		}



		$CPass		= $_POST['cPassword'];
	

		if($CPass== ""){
			echo "null submission";
		}else{
			echo $Pass;
		}



		if($Pass == $CPass)
		{
			echo "Password is secured";
		}
        else
        {
            echo "Password is not matched with previous one";
        }


		$radioVal = $_POST["gender"];

       if($radioVal == "Male")
       {
        echo"Gender: Male";
       }
      else if ($radioVal == "Female")
      {
      echo("Gender: Female");
      }
      else if ($radioVal == "Others")
     {
    echo("Gender: Other");
     }


	 $day = $_POST['date'];
	 $month = $_POST['month'];
	 $year = $_POST['year'];


	 if($day == "" ||  $month == "" ||  $year == "" ){
		 echo "null submission...";
	 }else{
		 echo $day;
		 echo $month;
		 echo $year;
	 }


		






}





?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>REGISTRATION</b></legend>
				<table>
					<tr>
						<td> Name </td>
						<td> :<input type="text" name="Name"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Email </td>
						<td> :<input type="email" name="Email"/> 
						<button class="button" title="hint: sample@example.com">i</button>
						<br/> </td>
					</tr>
					<tr>
						<td> User Name </td>
						<td> :<input type="username" name="UserName"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Password </td>
						<td> :<input type="password" name="Password"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Confirm Password </td>
						<td> :<input type="password" name="cPassword"/> 
						<br/> </td>
					</tr>
			</table>
				<fieldset>
					<legend>Gender</legend>
					    <input type='radio' name='gender' value='Male'>Male
            			<input type='radio' name='gender' value='Female'>Female
            			<input type='radio' name='gender' value='Others'>Others
				</fieldset>
				<fieldset>
					<legend>DOB</legend>
							<input type="number" name="date" size="5"> /
							<input type="number" name="month" size="5"> /
							<input type="number" name="year" size="5"> <i> (dd/mm/yyyy) </i>
				</fieldset>
			<hr>
			<input type="reset" name="reset" value="reset">
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>