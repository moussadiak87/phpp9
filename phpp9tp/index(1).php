<?php
//Nombre de jours dans le mois de Janvier 2019.
$numberDayInMonth = 31;
//Le mois de Janvier 2019 commence un mardi, donc le 2ème jour de la semaine.
$firstWeekDayOfMonth = 2;
//Nombre de cases vides avant que le mois commence.
$caseàpasser = 1;
//Nombre de lignes à créer dans le tableau.
$numberOfTr = 5;
//Nombre de cellules à créer dans le tableau.
$numberOfTd = 35;
//Variable qui va servir à l'affichage du numéro du jour.
$currentDay = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <title>TP Partie 9 PHP</title>
   </head>
   <body>
      <table>
         <thead>
            <tr>
               <th>Lundi</th>
               <th>Mardi</th>
               <th>Mercredi</th>
               <th>Jeudi</th>
               <th>Vendredi</th>
               <th>Samedi</th>
               <th>Dimanche</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <?php
               //On créé les 35 cases nécessaires
               for ($td = 1; $td <= $numberOfTd; $td++) {
                  //On commence à afficher le numéro du jour à partir du mardi de la première semaine jusqu'à ce que le numéro du jour soit 31.
                  if ($td >= $firstWeekDayOfMonth && $currentDay <= $numberDayInMonth) {
                     ?>
                     <td><?= $currentDay ?></td>
                  <?php 
                  $currentDay++;
                  //Sinon on affiche des cases vides.
                  } else {
                     ?>
                     <td>o</td>
                     <?php
                  }
                  //A chaque fois que l'on a créé 7 cases, on passe à la ligne.
                  if ($td % 7 == 0) {
                     ?>
                  </tr><tr>
                     <?php
                  }
                  
               }
               ?>
            </tr>
         </tbody>
      </table>
   </body>
</html>
