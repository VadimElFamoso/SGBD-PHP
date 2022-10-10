<?php
  $montant_tva = 20/100;

  $prix_produit_ht = array(50,40,10);
  $calcul_tva = array_sum($prix_produit_ht) * $montant_tva;
  $resultat = array_sum($prix_produit_ht) + $calcul_tva;
  echo "Le prix TTC des produits respectivement à :<br> $prix_produit_ht[0]€<br>$prix_produit_ht[1]€<br> $prix_produit_ht[2]€<br> est : $resultat €";


 ?>
