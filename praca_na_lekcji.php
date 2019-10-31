<!-- napisać funkcję wyświetlająca dane z przedziału podanego przez użytkownika w formularzu
za pomocą pętli for */ //x,y,zatwierdź -> przekazanie -->

<form method="post">
  x:<input type="number" name="x"><br>
  y:<input type="number" name="y"><br>
  <input type="submit">
</form>

<?php

  function ciag($x,$y)
  {
    if($x>$y)
    {
        $zamiana=$x;
        $x=$y;
        $y=$zamiana;
    }

    if(!empty($x)&&!empty($y))
    {
      for(;$x<=$y;$x++)
      {
        echo "$x, ";
      }
    }
    else
      echo "wprowadz dane";
  }
  echo ciag($_POST['x'],$_POST['y'])
?>
