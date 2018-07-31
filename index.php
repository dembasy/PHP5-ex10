<?php
// definition de l'array region qui contient différents département
$region = array(
  '59' => 'Nord',
  '62' => 'Pas de Calais',
  '02'=> 'Aisne',
  '60' => 'Oise',
  '80' => 'Somme');
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title> exercice 1</title>
  </head>
  <body>
    <p>
      <?php
      // defintion de la for each, on echo la phrase qu'on veut afficher avec les value et les key
      foreach ($region as $key => $value) {
          echo 'le departement '. $value. ' a le numero  '.$key. '. ';
      }
        ?>
    </p>
  </body>
</html>
