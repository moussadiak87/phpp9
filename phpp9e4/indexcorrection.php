<?php
// Permet d'obtenir le nombre de secondes écoulées depuis le 1er Janvier 1970.
$timestampToday = time();
/* Permet d'obtenir le nombre de secondes écoulées du 1er Janvier 1970 au 02 Août 2016 à 15H. 
 mktime(heure, minute, seconde, mois, jour, année) */
$timestamp2016 = mktime(15, 0, 0, 8, 2, 2016)
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <p><?= $timestampToday ?></p>
        <p><?= $timestamp2016 ?></p>
    </body>
</html>