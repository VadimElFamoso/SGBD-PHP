<?php
date_default_timezone_set('UTC');
$today['jour'] = date('j');
$today['mois'] = date('n');
$today['annee'] = date('Y');
$naissance['jour'] = $_POST['jour_naissance'];
$naissance['mois'] = $_POST['mois_naissance'];
$naissance['annee'] = $_POST['annee_naissance'];
$value['jour'] = $today['jour'] - $naissance['jour'];
$value['mois'] = $today['mois'] - $naissance['mois'];
$value['annee'] = $today['annee'] - $naissance['annee'];

if($value['annee'] >= 18 || $value['mois']>= 12 || $value['jour'] >= 31) {
echo "<h1>Vous êtes majeur !</h1>";
}
else {
echo "<h1>Vous n'êtes pas majeur !</h1>";
}
 ?>
