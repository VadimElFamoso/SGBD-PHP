<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $nombre = $_POST['nombre'];
      $nombre_carre = $nombre**2;
      $nombre_cube = $nombre**3;
      echo "<p>Carré de $nombre : $nombre_carre</p>";
      echo "<p>Cube de $nombre : $nombre_cube</p>";
     ?>
  </body>
</html>
