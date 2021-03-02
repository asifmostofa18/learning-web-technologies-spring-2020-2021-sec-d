<?php
	
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$flag     = false;

		if($username == "" || $password == "")
		{
			echo "You can not submit your profile empty!!!";
		}
		else
		{
			$data = file_get_contents('user.json');
			$data= json_decode($data, true);

			foreach ($data as $user)
			{
				$name = $user["username"];  
				$passP = $user['password'];
				
				if($username == $name && $password == $passP)
				{
					$flag = true;
				}

			}

			if($flag == true)
			{
				echo "You have login our page successfully!!!!!!";
			}else{
				echo "Please do Registration ASAP!!!!";
			}

		}
	}
	else
	{
		echo "Invalid request";
	}


?>