<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp9e6</title>
  </head>
  <body>
    <?php
    $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
    echo "Il y a {$number} jours en février de l'année 2016";
    ?>
  </body>
</html>
