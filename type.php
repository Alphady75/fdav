<?php

/**
 * Les Types en PHP
 */

// Booléan true or false
$boolean = false;

// Les entiers
$entier = 2;

// Nombre à virgule float
$float = 50.2;

// Chaine de caractere string
$string = "Bonjour à tous";

$string_2 = 'Je vas à l"école';

// Numérique string
$numeriqueString = '20 ans';

// Numérique string
$numeriqueString = 20 . 'ans';

$calcul = 2 + '1.7';

// Tableaux
$nom = 'Davina';

$age = 15 . 'ans';

$genre = 'Femme';

// Tableau numéroté
$davina = array(
   'OKO',
   15,
   'Femme',
   'Informaticienne'
);

// Date
$date = date('Y');

// tableau associatifs
$davina2 = array(
   'nom' => 'OKO',
   'age' => 15,
   'genre' => 'Femme',
   'profession' => 'Informaticienne'
);

$article = array(
   'titre' => 'Robe',
   'prix' => 10000 . ' FCFA',
   "categorie" => 'Femme',
   "description" => 'Lorem ipsum dolor sit amet.',
   'date_publication' => date('d/m/Y')
);

$eleve = [
   'photo' => 'img/fille.jpg',
   'nom' => 'OKO',
   'prenom' => 'Davina',
   'age' => 15,
   'classe' => 'CM2',
   'notes' => [
      'Maths' => 10,
      'Français' => 15,
      'Histoire' => 10,
   ]
];

$eleves = [
   [
      'photo' => 'img/fille.jpg',
      'nom' => 'OKO',
      'prenom' => 'Davina',
      'age' => 15,
      'classe' => 'CM2',
      'note' => 15
   ],
   [
      'photo' => 'img/fille.jpg',
      'nom' => 'OKO',
      'prenom' => 'Davina',
      'age' => 15,
      'classe' => 'CM2',
      'note' => 15
   ],
   [
      'photo' => 'img/fille.jpg',
      'nom' => 'OKO',
      'prenom' => 'Davina',
      'age' => 15,
      'classe' => 'CM2',
      'note' => 15
   ],
];

// Variable NULL
$argent = null;

$davina_lecture = true;

if ($davina_lecture == true) {

   $argent = 2000;

   //echo "Elle a lu je donne " . $argent . "FCFA a Davina";

}else {
   //echo "Davina n'a pas lu je donne" . $argent . " à Davina";
}

//var_dump($eleves);

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Type</title>
   <style>
      .bloc_eleve{
         width: 200px;
         padding: 10px;
         border-radius: 10px;
         background: orange;
         color: white;
         display: inline-block;
         vertical-align: top;
         margin: 10px;
      }
      .bloc_eleve img{
         width: 100%;
         border-radius: 5px;
      }
   </style>
</head>

<body>

   <?php foreach($eleves as $eleve): ?>

   <div class="bloc_eleve">

      <img src="<?= $eleve['photo'] ?>" alt="">
      <h5>Nom: <?= $eleve['nom'] ?></h5>
      <strong>Prénom: <?= $eleve['prenom'] ?></strong>
      <div>
         <h6>Notes: <?= $eleve['note'] ?></h6>
      </div>

   </div>

   <?php endforeach ?>

</body>

</html>