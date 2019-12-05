<?php

$ime_osobe = $_GET["ime"];
$prezime_osobe = $_GET["prezime"];
$godina_rod = $_GET["godRod"];
$skola = $_GET["sk"];
$spol = $_GET["spol"];
$adresa = $_GET["adresa"];
$grad = $_GET["grad"];
$hobiji = $_GET["hobiji"];
$napomena = $_GET["napomena"];

echo "<b>Ime i prezime:</b> $ime_osobe $prezime_osobe<br>";
echo "<b>Godina rodenja:</b> $godina_rod";
echo "<br><b>Spol:</b> $spol";
echo "<br><b>Zavrsena skola:</b> $skola";
echo "<br><b>Adresa:</b> $adresa $grad";

echo "<br><b>Vasi hobiji su:</b> ";

foreach ($hobiji as $hobi)
{
    echo "$hobi, ";
}

echo "<br><b>Napomena:</b> $napomena";

if($skola == "Gimnazija" and count($hobiji) == 3)
{
    echo "<br><br><b>Super!</b>";
}
elseif($skola == "Strukovna" and count($hobiji) == 2)
{
    echo "<br><br><b>Bravo!!!</b>";
}

?>