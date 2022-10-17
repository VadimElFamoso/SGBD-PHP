<?php
echo "<h1>Moyenne normale : </h1>";
  $moyennes = array($_POST['moyenne_1'],$_POST['moyenne_2'],$_POST['moyenne_3']);
  $dividende = array_sum($moyennes);
  $diviseur = count($moyennes);
  $resultat = $dividende/$diviseur;
  echo "La moyenne de : $moyennes[0],$moyennes[1],$moyennes[2] est : $resultat<br>";

echo "<h1>Moyenne coefficientée : </h1>";
  $coefficient = array($_POST['coefficient_1'],$_POST['coefficient_2'],$_POST['coefficient_3']);
  $moyennes_coef = array(10,11,2);
  $resultat = ($moyennes[0]*$coefficient[0] + $moyennes[1]*$coefficient[1] + $moyennes[2]*$coefficient[2]) / array_sum($coefficient);
  echo "En détail :<br> Coefficient $coefficient[0] pour $moyennes[0]<br> Coefficient $coefficient[1] pour $moyennes[1]<br> Coefficient $coefficient[2] pour $moyennes[2]<br>";
  echo "<br>Les coefficients choisis sont : $coefficient[0],$coefficient[1],$coefficient[2]<br>";
  echo "La moyenne coefficientée de $moyennes[0],$moyennes[1],$moyennes[2] est : $resultat";

  if($resultat>=10){
    echo "<br><h1>Bravo vous avez réussi à décrocher votre année !</h1>";
  }
  else{
    echo "<br><h1>Désolé, vous n'avez pas réussi votre année...</h1>";
  }

    ?>
