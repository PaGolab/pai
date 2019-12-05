<?php
  //tablice wielowymiarowe

  $student = array(
    array("Julia","Nowak",20),
    array("Anna","Kowalska",20),
    array("Tomasz","Nowak"),
  );

  //echo $student[1][2] //19

  for ($i=0; $i < count($student); $i++)
  {
    for ($j=0; $j < count($student[$i]); $j++)
    {
      echo $student[$i][$j], " ";
    }
    echo "<br><br>";
  }


  foreach ($student as $value)
  {
    foreach ($value as $x)
    {
      echo $x;
    }
    echo "<br>";
  }

?>
