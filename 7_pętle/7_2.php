<html>
  <table>
    <link rel="stylesheet" href="7_.css">

    <?php
      $y=1;$suma=0;
          do
          {
            ?>
            <tr>
              <?php
            $x=1;
              do
              {
                if($x!=$y) //można także nie zamykac w ogole php: "<td class=\"same\">"
                {
                  ?>
                  <td>
                  <?php
                  echo $y*$x;
                }

                else
                  {
                    ?>
                    <td id="same">
                    <?php

                    echo $y*$x;
                    $suma+=$x*$y;

                  }
                  $x++;
                }
            while ($x <= 10);

          $y++;
          echo "<br>";
        }
        while ($y <= 10);
        ?>
      </table>
        <?php
          echo "suma wynosi: $suma";
?>
