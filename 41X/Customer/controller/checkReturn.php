<?php

/*require_once('../model/db.php');
require_once('../model/rare.php');

if(isset($_POST['select'])){
$selected_item = $_POST['select'];
echo "Dear Sir you your category is :" .$selected_item;
echo "<br>";

}

if(isset($_POST['submit'])){

    $name 		= $_POST['myname'];
    $proCategory = $_POST['category'];


    if($name == ""){
        echo "null submission";
    }else{
        echo "Your desired product is: " .$name;
    }
    echo "<br>";

    if($proCategory == ""){
        echo "null submission";
    }else{
        echo "Your desired category is : " .$proCategory;
    }


}else{
    echo "invalid request";
}*/


	
	#require_once('../model/ReturnProductDB.php');
	require_once('../model/webtech.php');

	require_once('../model/return.php');
	if($_POST['submit'])
	{
		$name = $_POST['myname'];
		$proCategory = $_POST['category'];
		#$sPrice = $_POST['sellingPrice'];

		if($name == '' || $proCategory == '')
		{
			echo "Null Submission";
		}
		else
		{
			/*$displayable = "No";
			if(isset($_POST['check']))
			{
				global $displayable;
				$displayable = "Yes";
			}	*/
			$productDetails = array('myname' => $name, 'category' => $proCategory);
			$connection = getConnection();
			$check = insertProduct($productDetails);
			if($check)
			{
				echo "Your request will be taken care!!!";
			}
			else
			{
				echo "Error occured!";
			}

		}
	}
?>



