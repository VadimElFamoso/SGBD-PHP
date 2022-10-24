<?php
$emprunt_value = $_POST['emprunt_value'];
$remboursement_value = $_POST['remboursement_value'];

$i=1;
while($emprunt_value>=0){
  echo "Mois $i, ce mois-ci vous deviez $emprunt_value, vous avez remboursé $remboursement_value ce mois-ci !<br>";
  $emprunt_value = $emprunt_value - $remboursement_value;
  $i++;
}
 ?>
