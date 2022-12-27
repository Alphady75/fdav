<?php

session_start();

$_SESSION['nom'] = 'Paul';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inscription</title>
</head>

<body>
   <nav>
      <a href="globals.php">Globals</a>
      <a href="session.php">Sessions</a>
      <span><?= $_SESSION['age'] ?></span>
   </nav>
   <center>
      <form method="post" enctype="multipart/form-data">
         <table>
            <tbody>
               <tr>
                  <th><label for="nom">Nom</label></th>
                  <td><input type="text" id="nom" name="nom_prenom"></td>
               </tr>
               <tr>
                  <th><label for="nom">Biographie</label></th>
                  <td><textarea rows="6" cols="50" name="biographie"></textarea></td>
               </tr>
               <tr>
                  <th><label for="nom">Votre CV</label></th>
                  <td><input type="file" name="cv"></td>
               </tr>
               <tr>
                  <th></th>
                  <td>
                     <button type="submit" name="envoyer">Envoyer</button>
                  </td>
               </tr>
            </tbody>
         </table>
      </form>
   </center>
</body>

</html>