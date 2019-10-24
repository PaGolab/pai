<form method="post">
  Podaj wysokość:
  <input type="number" name="h">
  <input type="submit" value="Zatwierdź"><br>
</form>

<?php
if(!empty($_POST['h']))
  {
    $h=$_POST['h'];
    for($y=1;$y<=$h;$y++)
    {
      for($linia=1;$linia<=$y;$linia++)
        echo "*";
      echo "<br>";
    }
  }
else
  echo "nie podano wysokości";
