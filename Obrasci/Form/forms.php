<?php

$ime_osobe = $_GET["ime"];
$prezime_osobe = $_GET["prezime"];

$skola = $_GET["sk"];

$oib = $_GET["oib"];

$predmeti = $_GET["predmeti"];

$boja = $_GET["boja"];



echo "<b>Ime:</b> $ime_osobe " . "$prezime_osobe <br>";

if ($skola == "DA")
{
  echo "Vi pohadate skolu";
}
else
{
  echo "Vi ne pohadate skolu";
}

echo "<br><b>OIB:</b> $oib";

echo "<br><b>Volite predmet:</b> ";


foreach ($predmeti as $predmet)
{
  echo $predmet . ", ";
}

echo "<br><b>Najdraza boja:</b> $boja"

?>
