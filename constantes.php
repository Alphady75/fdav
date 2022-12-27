<?php 

define('NOM_APPLICATION', 'Zoom Application de vente en ligne');

define('MTN_MOMO', 'BD5rEMduqmk');

$a = 5;

$b = 10;

// Opérateur d'addition
$addition = $a + $b;

// Opérateur de soustraction
$soustraction = $a - $b;

// Operateur tainaire
$ternaire = $addition ? $addition : $soustraction;


echo "La somme de $a et $b = " . $addition; 

echo '<br>';


echo "Soustraction de $a et $b = " . $soustraction; 

echo '<br>';


echo "Ternaire :" . $ternaire; 


?>

<br>