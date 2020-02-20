<?php     
	 $conn=mysqli_connect("localhost","root", "" ,"komis");
      $sql = "select * from user";
      $result=mysqli_query($conn, $sql);
      mysqli_set_charset($conn,"utf8");
?>