
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/6_form.css"><!--podpięcie css-->
    <title></title>
  </head>
  <body>



    <?php
      if(!empty($_POST['name']) && !empty($_POST['country'])) //sprawdzane, czy wprowadził poprawnie dane
      {
        $name = $_POST['name'];
        $country = $_POST['country'];

        //prawidłowe podane dane w formularzu
        echo "Imię: $name, Kraj: $country";

        switch ($country)
        {
          case 'p':
            $country = 'Polska'; //zamienienie p na Polska
            break;
          case 'g':
            $country = 'Niemcy'; //zamienienie g na Niemcy
            break;
          case 'u':
            $country = 'USA'; //zamienienie u na USA
            break;
        }
      }
    ?>
          <table>
            <tr>
              <th>Imię</th>
              <th>Kraj</th>
            </tr>
            <tr>
              <td><?php echo $name; ?></td>
              <td><?php echo $country; ?></td>
          </table>


    <?php
        else
        {
             ?> <!--zamyka się php-->
             <form method="POST">
               <input type="text" name="name" placeholder="name"><br><br>
               <input type="radio" name="country" value="p">Polska
               <input type="radio" name="country" value="g">Niemcy
               <input type="radio" name="country" value="u">USA<br><br>
               <input type="submit" name="button" value="Zatwierdź"><br><br>
             </form>
             <?php
        }
    ?>
</html>
