<?php

	function insertProduct($productDetails)
	{
		$conn = getConnection();
		$sql = "insert into rare values('', '{$productDetails['myname']}', '{$productDetails['category']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getAllProduct()
	{
		$conn = getConnection();
		$sql = "select * from rare";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users;
	}

	function getProductById($id)
	{

		$conn = getConnection();
		$sql = "select * from rare where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	/*function updateProduct($id, $productDetails)
	{

		$conn = getConnection();
		$sql = "update products set name = '{$productDetails['name']}', buyingPrice='{$productDetails['buyingPrice']}', sellingPrice='{$productDetails['sellingPrice']}', displayable='{$productDetails['displayable']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function deleteProduct($id)
	{
		$conn = getConnection();
		$sql = "delete from products where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}*/
?>