<?php
  //TABLICA INDEKSOWANA NUMERYCZNIE

  $colors = array("red","green","blue","magenta");
  //echo $colors[1]; //zielony

  for ($i=0; $i < count($colors); $i++) //count zlicza ilość komurek
  {
    echo $colors[$i];
  }

  $colors[2] = "cyan";

  //funkcja wykonująca pętle wyżej + lista
  function show($x)
  {
    echo "<ul>"
    for ($i=0; $i < count($x); $i++)
    {
      echo "<li>",$x[$i],"</li>";
    }
    echo "</ul>"
  }

  echo show($colors);

//TABLICA ASOCJACYJNA

  $data = array(
    "name" => "Janusz",
    "surname" => "Nowak",
    "age" => 20,
    "city" => "Poznań"
  );

  echo "Imię: $data[name] <br>"; // LUB: echo "Imię: ",$data['name'];
                            // inaczej NIE MOŻNA

  foreach ($data as $value) //(skąd, zapisz komurkę w zmiennej value (po kolei))
  {
    echo "$value ";
  }

  echo "<br>";

  foreach ($data as $key => $value) //(skąd, zapisz każdy klucz jako zmienna key, zapisz każdą komurkę jako zmienna value (po kolei))
  {
    //zamienia nazwę klucza (zamiast zadeklarowanej nazwy angielskiej będzie polska)
    switch ($key)
    {
      case "name": $key ="Imię"; break;
      case "surname": $key ="Nazwisko"; break;
      case "age": $key ="wiek"; break;
      case "city": $key ="miasto"; break;
    }

    echo "$key: $value <br>";
  }



?>
