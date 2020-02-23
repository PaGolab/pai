<?php


  if(isset($_GET['id']))
  {
    $id = $_GET['id'];

  
	require_once('./connect.php');
	$sql = "DELETE FROM `user` WHERE `user`.`Id` = $id"; //przy stringu trzeba by było '$id'
	//if(mysqli_query($conn,$sql))
	//{
	//	echo "ok";
	//}
	//else
	//{
	//	echo "ERROR!"
	//}
	
	mysqli_query($conn,$sql);
  }
	header('location: ../')
?>
