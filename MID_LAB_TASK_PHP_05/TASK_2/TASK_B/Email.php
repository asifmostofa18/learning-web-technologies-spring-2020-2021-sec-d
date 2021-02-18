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
	<title>Email</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
            <legend>Email</legend>
			<input type="text" name="myname" value=""> 
			<button class="addMore" title="hint: sample@example.com">i</button>
			<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>
