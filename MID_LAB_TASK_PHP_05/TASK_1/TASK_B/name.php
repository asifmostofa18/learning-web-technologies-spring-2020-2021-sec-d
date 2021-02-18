<?php


	
	if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];

		if($name == ""){
			echo "null submission...";
		}else{
			echo $name;

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
		    <input type="text" name="myname" value=""> 
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>
