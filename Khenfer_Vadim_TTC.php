<?php
  $montant_tva = 20/100;

  $prix_produit_ht = array(50,400,10);
  $calcul_tva = array_sum($prix_produit_ht) * $montant_tva;
  $resultat = array_sum($prix_produit_ht) + $calcul_tva;
  echo "Le prix TTC des produits respectivement à :<br> $prix_produit_ht[0]€<br>$prix_produit_ht[1]€<br> $prix_produit_ht[2]€<br> est : $resultat € ($calcul_tva € de TVA)";

  if($resultat>=200){
    $reduction = $resultat*0.1;
    $resultat_reduction = $resultat - $reduction;
    echo "<p>Pour avoir dépensé plus de 200 euros, vous bénéficiez d'une réduction de 10% :)</p>";
    echo "<p>Le nouveau prix TTC est de : $resultat_reduction € ($reduction € économisés)</p>";
  }

  else{
    echo "<p>Le prix TTC étant inférieur à 200€ ($resultat €), vous ne bénéficiez pas de la réduction de 10%.</p>";
  }


 ?>
