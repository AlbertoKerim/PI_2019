<?php

function KinetickaEnergija($masa, $brzina)
{
    return ($masa * ($brzina * $brzina))/2;
}

function PitagorinPoucak($a, $b)
{
    return sqrt(($a * $a) + ($b * $b));
}

function RelativisticnaEnergija($m)
{
    return $m*(300000000*300000000);
}

function PTrokuta($a, $b)
{
    return ($a * $b) / 2;
}

?>