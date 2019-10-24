<html>
  <table>
    <link rel="stylesheet" href="7_.css">

    <?php
      $y=1;
        do
        {
          ?>
          <tr>
            <?php
          $x=1;
            do
            {
              ?>
              <td>
              <?php
              echo $y*$x;
              $x++;

            }
            while ($x <= 10);

          $y++;
          echo "<br>";
        }
        while ($y <= 10);


?>
