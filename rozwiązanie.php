<html>
<form method="post">
  <input type="text" name="name" placeholder="imie">
  <input type="number" name="ilosc" placeholder="jakiej długości ma pozostać imie">
  <input type="submit" name="button" value="OK">
</form>
</html>
<?php
  if(!empty($_POST['name']))
  {
    $name=$_POST['name'];
    $len=strlen($name);
    echo "Imię:$name, długość imienia: $len<br>";

    $nameN=ucfirst(strtolower(trim($name)));
    $lenN=strlen($nameN);
    echo "Imię: $nameN, długość imienia: $lenN (bez białcyh znaków)<br>";


    $ilosc=$_POST['ilosc'];
    $nameN2=substr($nameN,0,10); //ucina (skąd,od którego miejsca, ile znaków pozostać)
    $lenN2=strlen($nameN2);
    echo "Imię: $nameN2, długość imienia: $lenN2 (skrócone o odpowienią ilość znaków)";
  }
?>
