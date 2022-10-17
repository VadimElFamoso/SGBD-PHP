<?php
  $montant_tva = 20/100;

  $prix_produit_ht = array($_POST['produit_1'],$_POST['produit_2'],$_POST['produit_3']);
  $calcul_tva = array_sum($prix_produit_ht) * $montant_tva;
  $resultat = array_sum($prix_produit_ht) + $calcul_tva;
  echo "Le prix TTC des produits respectivement à :<br> $prix_produit_ht[0]€<br>$prix_produit_ht[1]€<br> $prix_produit_ht[2]€<br> est : $resultat € ($calcul_tva € de TVA)";

  if($resultat>=200){
    $reduction = $resultat*0.1;
    $resultat_reduction = $resultat - $reduction;
    echo "<h2>Pour avoir dépensé plus de 200 euros, vous bénéficiez d'une réduction de 10% :)</h2>";
    echo "<h3>Le nouveau prix TTC est de : $resultat_reduction € ($reduction € économisés)</h3>";
  }

  else{
    echo "<h2>Le prix TTC étant inférieur à 200€ ($resultat €), vous ne bénéficiez pas de la réduction de 10%.</h2>";
  }


 ?>
