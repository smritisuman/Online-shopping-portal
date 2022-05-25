<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="register";
	$conn =mysqli_connect($server_name,$username,$password,$database_name);

	if(!$conn)
	{
		die("Connection Failed : ". mysqli_connect_error());
	} 

	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql_query = "INSERT INTO registration(username,email,password)
		VALUES('$username','$email','$password')";

		if (mysqli_query($conn,$sql_query))
		{
			echo "New Details Entry inserted successfully!";
		}
		else
		{
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
		
		mysqli_close($conn);

	}
?>