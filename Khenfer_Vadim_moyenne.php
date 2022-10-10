<?php
echo "<h1>Moyenne normale : </h1>";
  $moyennes = array(10,15,20);
  $dividende = array_sum($moyennes);
  $diviseur = count($moyennes);
  $resultat = $dividende/$diviseur;
  echo "La moyenne de : $moyennes[0],$moyennes[1],$moyennes[2] est : $resultat<br>";

echo "<h1>Moyenne coefficientée : </h1>";
  $coefficient = array(2,3,5);
  $moyennes_coef = array(10,15,20);
  $resultat = ($moyennes_coef[0]*$coefficient[0] + $moyennes_coef[1]*$coefficient[1] + $moyennes_coef[2]*$coefficient[2]) / array_sum($coefficient);
  echo "En détail :<br> Coefficient $coefficient[0] pour $moyennes_coef[0]<br> Coefficient $coefficient[1] pour $moyennes_coef[1]<br> Coefficient $coefficient[2] pour $moyennes_coef[2]<br>";
  echo "<br>Les coefficients choisis sont : $coefficient[0],$coefficient[1],$coefficient[2]<br>";
  echo "La moyenne coefficientée est : $resultat";
 ?>
