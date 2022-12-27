<?php

$i = 3;

do {
    echo $i;
} while ($i > 10);

$factor = 15;
$minimum_limit = 100;

do {
   if ($i < 5) {
       echo "i n'est pas suffisamment grand";
       break;
   }
   $i *= $factor;
   if ($i < $minimum_limit) {
       break;
   }
  echo "i est bon";

   /* ...traitement de i... */

} while (0);

?>