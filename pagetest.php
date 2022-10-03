<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name=description content="cardiff">
	<title>Essai PHP</title>
	<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
</head>
<body>
  <p>
    <?php
		$nom = 'Vadim';
		$passion_1 = 'Programmation';
		$passion_2 = 'Voyage';
		$passion_3 = 'Cyclisme';
		$calcul = 3*3*3*3*3;

    echo "<h1>Bonjour je suis $nom</h1>";
		echo "<h2>J'ai 19 ans et bientôt 20</h2>";
		echo "<p>Mes passions sont :</p>";
		echo "<ul>";
		echo "<li>$passion_1</li>";
		echo "<li>$passion_2</li>";
		echo "<li>$passion_3</li>";
		echo "</ul>";
		echo "<p>3 puissance 5, ça fait : $calcul</p>";

		$str= strtoupper($nom);
		echo "<p>$str</p>";

		$my_password='Vadim2003';

		echo password_hash("$my_password", PASSWORD_DEFAULT);

		$link = mysql_connect('webetu.iutnc.univ-lorraine.fr', 'khenfer3u', 'Vadimousse88');
		if(!$link){
			die('Connexion non-possible :'.mysql_error());
		}
		echo 'Connexion réussie !';
		mysql_close($link);

     ?>



  </p>

</body>
</html>
