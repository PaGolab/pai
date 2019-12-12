
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      hr.style
      {
        border-top: 1px solid #0ff;
      }
    </style>
  </head>
  <body>

    <?php

      $D4 = array(
        array(
          array(
            array(1,2,3), //[][][0][x]
            array(4,5,6), //[][][1][x]
            array(7,8,9), //[][][2][x]
          ),
          array(
            array(10,11,12),
            array(13,14,15),
            array(16,17,18),
          )
        ),
        array(
          array(
            array(100,110,120),
            array(130,140,150),
            array(160,170,180),
          )
        )
      );

      foreach ($D4 as $value)
      {
        foreach ($value as $a2)
        {
          foreach ($a2 as $a3)
          {
            foreach ($a3 as $a4)
            {
              echo "$a4 ";
            }
            echo "<br>";
          }
          echo "<hr>";
        }
        echo "<hr class='style'>";
      }

    ?>

  </body>
</html>
