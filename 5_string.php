<?php //heredoc
  $text= <<< T
    zsl - Zespół
    szkół
    łączności

T;

  echo "Przed wywyołaniem funkcji nl2br: <br> $text";
  echo "<br>Po wywyołaniu funkcji nl2br: <br>";
  echo nl2br($text),"<br>";


  $test = 'JaNuSz';
  //zamiana na małe
  echo strtolower($test);

  //zamiana na duże litery
  $duzeLitery = strtoupper($test);
  echo $duzeLitery,"<br>"; //JANUSZ

  $text = 'anna tomasz jacek';
  //zamiana pierwszej litery na duże
  echo ucfirst($text),"<br>"; //UpperCaseFirst - Pierwsza na dużą

  //zamiana wszystkich pierwszych liter na dużecho
  echo ucwords($text),"<hr>"; //UpperCaseWords - każde słowo z dużej

  ##############################################################################################################################################
  $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  echo $lorem,"<br><br>";

  $col = wordwrap($lorem, 40, '<br>'); //(co chcemy podzielić, ile znaków, co się dzieje)
  echo $col,"<hr>";

  ##############################################################################################################################################
  //czyszczenie zawartości bufora
  ob_clean(); //*object

  //usuwanie białych znaków
  $name = 'Anna';
  $name1 = '   Anna     ';

  echo 'Długość zmiennej $name', strlen($name),"<br>"; //4
  echo 'Długość zmiennej $name', strlen($name1),"<br>"; //7

  echo strlen(ltrim($name1)); //długość, po wyczyszczeniu spacji po lewej stronie
  echo strlen(rtrim($name1)); //długość, po wyczyszczeniu spacji po prawej stronie
  echo strlen(trim($name1)),"<hr>";

  //przeszukiwanie ciągów znaków
  $address = 'Poznań, ul. Przełajowa 4, tel. (61) 123-45-67';
  $search = strstr($address, 'tel', false); //STRSTR(z czego, co szukamy). Dodanie: true-wszystko przed, false-znajduje i wyświetla to co znalazł i resztę(jest domyślne)
  echo $search,"<br>";

  $search = stristr($address, 'Tel'); //bez znaczenia na wielkość liter (Tel zamiast tel)
  echo $search,'<br>';

  $mail = strstr('zsl@gmail.com','@');
  echo $mail,"<br>";
  $mail = strstr('zsl@gmail.com',64); //@ w Ascii ma wartość 64
  echo $mail,"<br><br>";

  $pos = strpos('abcdefg','cde'); //strpos ZNAJDUJE POZYCJE na jakiej znajduje się dany znak/ciąg
  echo $pos,"<hr>"; //2. LICZY OD 0!!!

      /*
        Zad. 1
        Sprawdź czy ciąg text2 zpstał znaleziony w ciągu text1
      */
      $text1 = 'abcdabcd';
      $text2 = 'ab';
      if (strpos($text1,$text2) === false) //wyświetliła by się glupota gdybyśmy napisali ==, ponieważ, ab występuje na pozycji 0, a 0==false
      {
        echo "Ciąg $text2 nie został znaleziony w ciągu $text1<br>";
      }
      else
      {
        echo "Ciąg $text2 został znaleziony w ciągu $text1<br>";
      }

  //przetwarzanie ciągów znajków
  $replace = str_replace('%name%','Janusz','Mam na imię %name%');//(szukamy %name% i zmaieniamy na Janusz)
  echo $replace,'<br>';
 ?>
