<?php
  function value($a):string //konwertuje na string
  {
    if($a<0)
      return 'ujemna';
    elseif($a==0)
      return 'zero';
    else
      return 'dodatnia';
  }

  echo value(5),"<br>";
  echo gettype(value(5));

  function getValue():int
  {
    return 10.55;
  }
  echo getValue(),'<br>';

  //zasieg zmiennych
  $x=10;
  function show()
  {
    echo "Wartość zmiennej \$x wynosi: ";
    echo $GLOBALS['x'];
  }

  /*function show()
  {
    echo "Wartość zmiennej \$x wynosi:  $GLOBALS[x]";
  }
  echo show();*/


  function show1()
  {
    global $y=10;
    echo "Wartość zmiennej \$y wynosi: ";
  }
  echo show1();

?>
  <form method="post">
    <input type="number" name="x">
    <input type="submit" value="xd">
  </form>
