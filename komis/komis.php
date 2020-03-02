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
      $sql = "select * from user";
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
      echo "<th>ID</th> <th>Imie</th> <th>Nazwisko</th> <th>Miasto</th>";

      while ($row=mysqli_fetch_assoc($result1))
      {
        echo <<<ROW
        <tr>
          <td>$row[id]</td>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[city]</td>
          <td><a href='../scripts/del_user.php?id=$row[id]'>Usuń</a></td>
        </tr>
ROW;
      }
      echo "</table>";
      mysqli_close($conn);
    ?>

  </body>
</html>
