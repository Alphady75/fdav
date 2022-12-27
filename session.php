<?php

session_start();

$_SESSION['age'] = 15;

$paul = 'paul';

var_dump($_ENV);
var_dump($GLOBALS);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sessions</title>
</head>

<body>
   <nav>
      <a href="globals.php">Globals</a>
      <a href="session.php">Sessions</a>
      <span><?= $_SESSION['age'] ?></span>
   </nav>

</body>

</html>