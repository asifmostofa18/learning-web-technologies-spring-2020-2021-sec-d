<?php
   		if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$CPass=$_POST['confirmPassword'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];

   		if($name == "" || $email == "" || $username == ""||$password == "" ||$CPass == "" || $day == "" ||$month =="" || $year == "")
		{
			echo "You can not fill something empty here!!!!";
		}
		else if ($password != $CPass){
			echo "Please put your write password once again.....";
		}
		else
		{
   			$info = [];
		
  			$formdata = [
	      					'name'     => $_POST['name'],
							'email'    =>$_POST['email'],
							'username' => $_POST['username'],
							'password' => $_POST['password'],
							'CPass'  => $_POST['confirmPassword'],
							'gender'   =>$_POST['gender'],
							'day'      => $_POST['day'],
							'month'    => $_POST['month'],
							'year'     => $_POST['year']
	  					];

	   		$jsondata = file_get_contents('user.json');
			$info = json_decode($jsondata, true);
			array_push($info,$formdata);
			$jsondata = json_encode($info, JSON_PRETTY_PRINT);
		   

		   if(file_put_contents('user.json', $jsondata)) {
		        header('location: login.html');

		    }
		   else {
		        echo "Something went wrong..............";
		   }
	}
}

?>