<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $nombre = 5;
      $nombre_carre = $nombre**2;
      $nombre_cube = $nombre**3;
      echo "<p>Carré de $nombre : $nombre_carre</p>";
      echo "<p>Cube de $nombre : $nombre_cube</p>";

      $moyennes = array(10,15,20);
      $dividende = array_sum($moyennes);
      echo $dividende;
      $diviseur = count($moyennes);
      echo $diviseur;
      $resultat = $dividende/$diviseur;
      echo "<p>La moyenne est : $resultat</p>";

     ?>



  </body>
</html>
