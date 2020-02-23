<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="komis.css">
    <title>KOMIS</title>
  </head>
  <body>
    <h3> Dane z tabeli user</h3>
    <?php
      $conn=mysqli_connect("localhost","root", "" ,"komis");
      $sql = "select * from `user` inner join `kolor` on `user`.`ColorId`=`kolor`.`Id`";
      $result=mysqli_query($conn, $sql);
      mysqli_set_charset($conn,"utf8");


    //   echo "<ol>";
    //
    // while ($row=mysqli_fetch_assoc($result))
    // {
    //   echo $row["name"]," ", $row["surname"],"<br>";
    //
    //   echo "<li>$row[name] $row[surname]</li>";
    //
    //  }
    //  echo "</ol>";

    echo "<hr>";
    $result1=mysqli_query($conn, $sql);
    echo "<table>";
      echo "<th>ID</th> <th>Imie</th> <th>Nazwisko</th> <th>Data urodzenia</th> <th>Kolor</th>";

      while ($row=mysqli_fetch_assoc($result1))
      {
        echo <<<ROW
        <tr>
          <td>$row[Id]</td>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birthday]</td>
          <td>$row[Kolor]</td>
          <td><a href='./scripts/del_user.php?id=$row[Id]'>Usuń</a></td>
        </tr>
ROW;
      }
      echo "</table>";
	  
	  echo "<a href=\"?addUser\">Dodaj uzytkownika</a>";
	  if(isset($_GET['addUser']))
	  {
		echo <<<FORMADDUSER
			<hr>
			<h3> Dodanie nowego użytkownika </h3>
			<form action="./scripts/add_user.php" method="post">
				<input type="text" name="name" placeholder="imie"></input>
				<input type="text" name="surname" placeholder="nazwisko"></input>
				<input type="date" name="birthday"></input>
				<input type="checkbox" name="color"></input>
				<input type="submit" name="button" value="Dodaj użytkownika"></input>
			</form>
FORMADDUSER;
	  }
	  
      mysqli_close($conn);
    ?>

  </body>
</html>
