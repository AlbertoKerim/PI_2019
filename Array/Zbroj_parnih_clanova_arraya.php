<?php

$array = array(10,14,20,30,45,5,4,34,8,90);
$zbroj = 0;
$clan = 1;

foreach ($array as $key => $value)
{
    if($clan%2 == 0)
    {
        $zbroj += $value;
    }

    $clan += 1;
}

echo "Zbroj parnih clanova je $zbroj";

?>

