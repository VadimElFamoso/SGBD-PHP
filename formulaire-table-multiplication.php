<?php
$number = $_POST['number'];
$multiplier = $_POST['multiplier'];
echo "<h1>Table du $number</h1>";
echo "<h2>$multiplier lignes affichées.</h2>";

$i = 1;
while ($i<=$multiplier){
  $resultat = $i * $number;
  echo "$i * $number = $resultat</br>";
  $i++;
}

 ?>
