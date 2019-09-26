<?php
  echo PHP_VERSION,"<hr>";

  $potega = 2**10;
  echo $potega,'<hr>';

  //zapis systemów liczbowych
  $hex = 0xA;   //0x
  $oct = 021;   //0
  $bin = 0b1010;//0b
  echo "zapis systemów liczbowych<br>$hex<br>$oct<br>$bin<hr>";

  //operatory bitowe
  //and &   or |    not ~    xor ^    <<  >>
  $bin = 0b1010;
  $bin = $bin >> 1; //"ucina" ostanie zero
  echo $bin,"<br>";
  $bin = $bin << 2;
  echo $bin,"<hr>";

  //identycznosc
  $a = 1;
  $b = 1.0;
  if($a==$b)
    echo 'Równe<br>';
  if($a===$b)
  {
    echo 'Identyczne<br>';
  }
  else
  {
    echo 'Różne<br>';
  }

  echo "<hr>";
  echo gettype($a),"<br>";
  echo gettype($b),"<br>";
#########################################################

  $x =0;
  $y =1;
  $result = $x <=> $y; // jeżeli x jest mniejsze to wypisuje -1, jeżeli większe +1, jeżeli równe 0
  echo $result,"<hr>";



  $x =2;
  echo $x++;  //post-inkrementacja
  echo ++$x;  //pre-inkrementacja
  echo $x;    //
  $y = $x++;
  echo $y;    //
  $y = ++$x;
  echo $y;    //
  echo ++$y;  //
?>
