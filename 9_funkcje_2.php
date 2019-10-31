<?php

//zmienne statyczne !!!!!!!!!!
  function sum()
  {
    $liczba = 10;
    echo "\$liczba wynosi: $liczba";
    $liczba +=10;
  }

  sum(); echo '<br>';//
  sum(); echo '<hr>';//tyle samo

  function sum1()
  {
    static $liczba = 10;
    echo "\$liczba wynosi: $liczba";
    $liczba +=10;
  }

  sum1(); echo '<br>';
  sum1(); echo '<hr>';

//arguenty

  function Add($x, $y = 1)
  {
    return $x + $y;
  }
  $z=20;

  echo add(5),'<br>';//6
  echo add(5, 2),'<br>';//6
  echo add(5, $z),'<hr>';//6

//argumenty

  function multi(float $x, int $y)
  {
    return $x*$y;
  }

  echo multi(3,4),'<br>';
  echo multi(2.5,4),'<br>';
  echo multi(4,2.5),'<br>';

?>
