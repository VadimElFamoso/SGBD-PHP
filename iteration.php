<?php
$moyennes_coef = array(20,11,2);
$coefficient = array(2,3,5);

for($i=0; $i<=sizeof($coefficient)-1; $i++){
  $resultat = $moyennes_coef[$i]*$coefficient[$i];
  echo "$resultat<br>";
}

 ?>
