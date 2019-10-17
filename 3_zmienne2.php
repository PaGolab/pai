<?php
  //operatory rzutowania
  //bool, int, float, string, array, object, umset
  $text = '123abc';
  $text1 = 10;
  $text2= 20;

  $x = (int)$text; //zamiana na int
  echo "string 123abc -> int:",$x,"<br>";

  $x1 = (bool)$text1;
  echo "int 10 -> bool:",$x1,"<br>";

  $x2 = (unset)$text2;
  echo "int 20 -> unset:",$x2,"<br>";
  echo gettype($x2),"<hr>";

  //rozmiar int
  echo PHP_INT_SIZE,"<hr>";  //4

  //KONTROLA TYPU ZMIENNYCH
  $w;
  echo $w; //nie ma wartości
  echo @gettype($w),"<hr>"; //@ to operator ignorowania błędów

  //ZMIENNA SUPERGLOBALNE
  //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSEION, $_SERVER
  echo $_SERVER['SERVER_PORT'],"<br>";
  echo $_SERVER['SERVER_NAME'],"<br>";
  echo $_SERVER['SCRIPT_NAME'],"<br>";
  echo $_SERVER['SERVER_PROTOCOL'],"<br>";
  echo $_SERVER['DOCUMENT_ROOT'],"<hr>";

  //konkatenacja
  $localFile = $_SERVER['DOCUMENT_ROOT']; //przypisujemy
  $localFile.=$_SERVER['SCRIPT_NAME']; //przypisz do tego, co już jest
  echo $localFile,"<hr>";

  //stałe
  //nazwy stałych z dużych liter
  define('NAME', 'Kowal'); //tak się przyjęło
  echo NAME;

  define('surname', 'Kowalska');
  echo surname;

  define('NAME1','Nowak', true);//do wersji 8 PHP
  echo NAME1,"<hr>";

  ##############################################################################

  //stałe predefiniowane
  echo PHP_VERSION; //7.3.1
  echo gettype(PHP_VERSION),"<br>"; //string

  if(PHP_VERSION > 7.1)
  {echo "nowa wersja PHP","<hr>";}
  else{echo "stara wersja PHP","<hr>";}

  echo PHP_OS,"<br>";//aktualny system
  echo __LINE__,"<br>"; //w której jestem linii?
  echo __DIR__; //cała ścieżka bez nazwy


?>
