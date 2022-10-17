<?php
$age_legal = 18;
$age_utilisateur = $_POST['age'];
if($age_utilisateur>=$age_legal){
  echo "<h1>Etant majeur ($age_utilisateur ans), vous pouvez ouvrir un compte en banque.</h1>";
}

else{
  echo "<h1>Désolé, mais vous êtes trop jeune pour ouvrir un compte en banque ! La majorité est fixé à $age_legal ans ! </h1>";
}
 ?>
