<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>tablice - zadanie</title>
  </head>
  <body>
    <?php
      $data = array(
        "name" => "Janusz",
        "surname" => "Nowak",
        "age" => 20,
        "city" => "Poznań"
      );

      echo "<table>";
      echo "<tr><th>Klucz:</th><th>Wartość:</th><tr>";

      foreach ($data as $key => $value)
      {

        switch ($key)
        {
          case "name": $key ="Imię"; break;
          case "surname": $key ="Nazwisko"; break;
          case "age": $key ="wiek"; break;
          case "city": $key ="miasto"; break;
        }

        echo "<tr><td>$key:</td><td>$value</td></tr><br>";
      }

      echo "</table>";
    ?>
  </body>
</html>



?>
