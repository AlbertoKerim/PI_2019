<?php

include ("functions.php");

$m = 2;
$v = 10;

echo "E<sub>k</sub> = ", KinetickaEnergija($m, $v), " J <br>";


$a = 3;
$b = 4;

echo "c = ", PitagorinPoucak($a, $b);

echo "<br> E = ", RelativisticnaEnergija($m), " J <br>";

echo "Povrsina trokuta = ", PTrokuta($a, $b);

?>