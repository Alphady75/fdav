<?php

$produits = [
   [
      'nom' => 'Basket a vendre',
      'prix'   => 5000,
      'description' => 'Meilleur Basket que vous ne trouverez null part'
   ],
   [
      'nom' => 'T Short a vendre',
      'prix'   => 3000,
      'description' => 'Meilleur T Short que vous ne trouverez null part'
   ],
   [
      'nom' => 'Robe',
      'prix'   => 15000,
      'description' => 'Meilleur Robe que vous ne trouverez null part'
   ],
   [
      'nom' => 'Robe',
      'prix'   => 15000,
      'description' => 'Meilleur Robe que vous ne trouverez null part'
   ],
   [
      'nom' => 'Robe',
      'prix'   => 15000,
      'description' => 'Meilleur Robe que vous ne trouverez null part'
   ],
   [
      'nom' => 'Robe',
      'prix'   => 15000,
      'description' => 'Meilleur Robe que vous ne trouverez null part'
   ],
   [
      'nom' => 'Robe',
      'prix'   => 15000,
      'description' => 'Meilleur Robe que vous ne trouverez null part'
   ],
   [
      'nom' => 'Robe',
      'prix'   => 15000,
      'description' => 'Meilleur Robe que vous ne trouverez null part'
   ],
   [
      'nom' => 'Robe',
      'prix'   => 15000,
      'description' => 'Meilleur Robe que vous ne trouverez null part'
   ]
];

$totalProduits = count($produits);

// Structure de controle avec la boucle For en php
/*foreach($produits as $produit){

   echo $produit['nom'] . '<br>';

}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mes produits</title>
   <style>
      section{
         width: 900px;
         background: #ededed;
         margin: 100px auto;
         padding: 30px;
      }
      section div{
         display: inline-block;
         width: 25%;
         background: white;
         padding: 15px;
         margin: 20px;
      }
   </style>
</head>
<body>
   <section>

      <?php foreach($produits as $produit): ?>
      <div>
         <h4><?= $produit['nom'] ?></h4>
         <strong><?= $produit['prix'] ?></strong>
         <p><?= $produit['description'] ?></p>
      </div>
      <?php endforeach ?>

   </section>
</body>
</html>