<?php

$imena = array("Tomislav Horvat", "Nino Nogic", "Patrik Vukovic", "Alberto Kerim", "Bartol Kosovic");

for ($i = 0; $i < 5; $i++)
{
    $word = $imena[$i];
    $lastSpace = strrpos($word," ");
    $lastSpace++;
    echo "$word = $word[0].$word[$lastSpace] <br>.";
}

?>