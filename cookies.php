<?php

setcookie('DAVINA', "Elle n'a pas terminer ses achets sur notre boutique", time() + (60 * 60 * 24 * 30));

//echo $_COOKIE['DAVINA'];

if (isset($_POST['envoyer'])) {

   extract($_POST);

   if (isset($remember_me) and $remember_me == 'on') {
      setcookie('Blog_auth', $nom, strtotime('+30 days'));
   }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Connexion</title>
</head>

<body>
   <br><br><br>
   <center>

      <?php if (isset($_COOKIE['Blog_auth'])) : ?>
      <h1>Salut <?= $_COOKIE['Blog_auth'] ?>! vous êtes déjà connecté et pendant 30 jours on est le <?= date('d/m/Y') ?>
      </h1>
      <?php else : ?>

      <form action="" method="post">
         <legend>Veuillez vous identifiez</legend>
         <table>
            <tbody>
               <tr>
                  <th><label for="nom">Nom</label></th>
                  <td><input type="text" name="nom" placeholder="Nom..."></td>
               </tr>
               <tr>
                  <th><label for="email">Mot de passe</label></th>
                  <td><input type="password" name="password" placeholder="Mot de passe..."></td>
               </tr>
               <tr>
                  <th></th>
                  <td>
                     <input type="checkbox" id="remember_me" name="remember_me">
                     <label for="remember_me">Restez connecter</label>
                  </td>
               </tr>
               <tr>
                  <th></th>
                  <td><button type="submit" name="envoyer">Connexion</button></td>
               </tr>
            </tbody>
         </table>
      </form>
      <?php endif; ?>
   </center>

</body>

</html>