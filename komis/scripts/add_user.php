<?php

	session_start();

	if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday']) && !empty($_POST['color']))
	{
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$birthday = $_POST['birthday'];
		$color = $_POST['color'];
		//echo $name,$surname,$birthday;
		
		require_once('./connect.php');
		$sql="INSERT INTO `user`(`name`, `surname`, `birthday`, `colorId`) VALUES ('$name','$surname','$birthday','$color')";
	
		if(mysqli_query($conn,$sql))
		{
			echo "ok";
		}
		else
		{
			echo "!ok";
		}
	}
	else
	{
		$_SESSION['error'] = "Podaj wszystkie dane!";
	}
?>