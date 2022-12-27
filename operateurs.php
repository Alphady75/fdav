<?php 

$a = 10000;

$b = 20000;

$addition = $a % $b;

// Resultat au départ
$resultat = null;

if (isset($_POST['calcul'])) {

   /*extract($_POST);

   $resultat = $valeur_1 * $valeur_2;*/

   $valeur_1 = $_POST['valeur_1'];

   $valeur_2 = $_POST['valeur_2'];

   $resultat = $valeur_1 + $valeur_2;

   echo $resultat;

}

$a = 2;

$b = 3;

if ($a === $b) {
   # instruction
}

$a = 5;

$a *= 10;

$salut = 'Salut';

$salut .= ' les gens';

$bonjour = 'Bonjour';

$eleves = "Les élèves";

$salut = $bonjour . ' ' . $eleves;

$somme = 10000;

$somme2 = null;

$somme2 = &$somme;

$test = $somme ?? 'vide';

//echo $test;

//echo $somme2;

//echo $salut;

//echo $a;

$nombre_1 = 15;

$nombre_2 = '15';

if ($nombre_1 === $nombre_2) {
   echo 'Vrai';
}else{
   echo 'Faux';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Calculatrice en ligne</title>
</head>
<body>
   <br><br><br>
   <hr>
   <center>
      <form action="" method="post">
         <legend>Logiciel de calcul des sommes</legend>
         <br><br><br>
         <table>
            <tbody>
               <tr>
                  <th><label for="valeur_1">Valeur une</label></th>
                  <td><input type="number" value="0" id="valeur_1" name="valeur_1"></td>
               </tr>
               <tr>
                  <th></th>
                  <td style="text-align: center;">*</td>
               </tr>
               <tr>
                  <th><label for="valeur_2">Valeur deux</label></th>
                  <td><input type="number" value="0" id="valeur_2" name="valeur_2"></td>
               </tr>
               <tr>
                  <th>Resultat</th>
                  <td><strong><?= $resultat ? $resultat : 'Entrer des valeurs' ?></strong></td>
               </tr>
               <tr>
                  <th></th>
                  <td><button name="calcul" type="submit">Calculer</button></td>
               </tr>
            </tbody>
         </table>
      </form>
   </center>
</body>
</html>