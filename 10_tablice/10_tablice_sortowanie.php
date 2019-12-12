<?php

  //DLA TABLICY INDEXOWANYCH
  $tab = array(1, 1, 0, 7, 9, 10);

    function ShowTab($x)
    {
      foreach ($x as $value)
      {
        echo "$value ";
      }
    }

  ShowTab($tab);
  echo "<br>";

  sort($tab);
  ShowTab($tab);
  echo "<br>";

  rsort($tab);
  ShowTab($tab);
  echo "<hr>";

  //DLA TABLICY ASOCJACYJNEJ
  $tabAssoc = array(
    "name" => "Janusz",
    "city" => "Poznań",
    "street" => "Polna",
    "age" => 20
  );

  ShowTab($tabAssoc);
  echo "<br><br>";

  asort($tabAssoc);//sortowanie niemalejące (wg. kodu ASCII)
  ShowTab($tabAssoc);
  echo "<br>";

  arsort($tabAssoc);//sortowanie nierosnące
  ShowTab($tabAssoc);
  echo "<br>";

  ksort($tabAssoc);//sortowanie po kluczu niemalejące
  ShowTab($tabAssoc);
  echo "<br>";

  krsort($tabAssoc);//sortowanie po kluczu nierosnące
  ShowTab($tabAssoc);
  echo "<hr>";

  print_r($tabAssoc);//pokazanie tablicy

  echo "<pre>";
    print_r($tabAssoc);//pokazanie tablicy tak jak w kodzie (po formatowaniu)
  echo "</pre>";
?>
