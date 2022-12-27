<?php

$moyenne = 3;

// Structure conditionnellle en if simple sans accolades
if ($moyenne < 10)
   //echo 'Echouer';

   // Structure conditionnellle en if simple avec accolades
   if ($moyenne < 10) {
      //echo 'Echouer';
   }

// Structure conditionnellle en if et else
if ($moyenne < 10) {
   //echo 'Echouer';
} else {
   //echo 'Admis';
}

/* Structure conditionnelle en if, elseif
if ($moyenne <= 5) {
   echo 'Idiot';
}elseif ($moyenne == 5) {
   echo 'Negligeant';
}elseif ($moyenne == 7) {
   echo 'Passable';
}elseif ($moyenne == 10) {
   echo 'Moyen';
}elseif ($moyenne > 12) {
   echo 'Excéllent';
}*/

// Moyenne et appréciation avant calcul
$moyenne = null;
$appreciation = 'Saisissez vos informations';

if (isset($_POST['calcul'])) {

   extract($_POST);

   $calcul = $math + $svt + $histoire_geo + $francais + $physique;

   $moyenne  = $calcul / 5;

   if ($moyenne < 10) {
      $appreciation = "Vous êtes echoué";
   } elseif ($moyenne == 10) {
      $appreciation = "Vous êtes admis avec menssion passable";
   } elseif ($moyenne > 10) {
      $appreciation = "Vous êtes admis avec menssion bien";
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Application de calcul et d'appréciation de moyenne</title>
   <style>
      table {
         width: 100%;
      }

      form input {
         height: 30px;
         line-height: 30px;
         width: 100%;
         border-radius: 20px;
         text-align: center;
         border: 1px solid #ededed;
      }

      table th {
         text-align: left;
      }

      form {
         background: #ededed;
         width: 500px;
         margin: auto;
         padding: 30px;
         border-radius: 15px;
      }

      button {
         display: inline-block;
         width: 100%;
         padding: 15px 10px;
         margin: 10px 0;
         cursor: pointer;
      }

      .bloc_result {
         background: #ededed;
         width: 500px;
         margin: 30px auto;
         padding: 30px;
         border-radius: 15px;
      }

      .danger {
         color: red;
         font-weight: bold;
      }

      .success {
         color: green;
         font-weight: bold;
      }
   </style>
</head>

<body>
   <center>
      <h4>Application de calcul et d'appréciation de moyenne</h4>

      <?php if ($moyenne != null) : ?>

      <div class="bloc_result">
         <table>
            <tbody>
               <tr>
                  <th>Moyenne</th>
                  <td>
                     <h3><?= $moyenne ?></h3>
                  </td>
               </tr>
               <tr>
                  <th>Appréciation</th>
                  <td>
                     <p class="<?= $moyenne < 10 ? 'danger' : 'success'  ?>"><?= $appreciation ?></p>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
      <?php endif; ?>

      <?php if ($moyenne == null) : ?>

      <form method="post">
         <table>
            <tbody>
               <tr>
                  <th><label for="math">Math</label></th>
                  <td><input value="0" type="number" name="math" max="20" min="0"></td>
               </tr>
               <tr>
                  <th><label for="svt">SVT</label></th>
                  <td><input value="0" type="number" name="svt" max="20" min="0"></td>
               </tr>
               <tr>
                  <th><label for="histoire_geo">Histoire Géo</label></th>
                  <td><input value="0" type="number" name="histoire_geo" max="20" min="0"></td>
               </tr>
               <tr>
                  <th><label for="francais">Français</label></th>
                  <td><input value="0" type="number" name="francais" max="20" min="0"></td>
               </tr>
               <tr>
                  <th><label for="physique">Physique</label></th>
                  <td><input value="0" type="number" name="physique" max="20" min="0"></td>
               </tr>
               <tr>
                  <th></th>
                  <td><button type="submit" name="calcul">Calculer</button></td>
               </tr>
            </tbody>
         </table>
      </form>

      <?php endif; ?>

   </center>
</body>

</html>