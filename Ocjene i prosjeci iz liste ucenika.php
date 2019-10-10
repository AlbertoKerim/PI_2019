<?php

$imenik = array( 
    "Ivan" => array("Hrvatski" => 5, "Matematika" => 5, "Engleski" => 5),
    "Marko" => array("Hrvatski" => 5, "Matematika" => 4, "Engleski" => 5),
    "AliBaba" => array("Hrvatski" => 4, "Matematika" => 5, "Engleski" => 5),
);

foreach ($imenik as $key => $value)
{
    
    $ukupno = 0;
    $prosjek = 0;
    
    echo "<b>$key</b> <br>";
    
    $dummy = $imenik[$key];
    
    foreach ($dummy as $key2 => $value2)
    {
        echo "$key2 = $dummy[$key2] <br>";
        $ukupno += $dummy[$key2];
    }
    
    $prosjek = $ukupno / count($imenik[$key]);
    
    echo "Prosjek = $prosjek <br><br>";
    
}

?>