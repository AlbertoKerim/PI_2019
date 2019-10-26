<?php

$array = array(10,14,20,30,45,5,4,34,8,90);
$zbroj = 0;

foreach ($array as $key => $value)
{
    $number = $value;

    if ($number%2 == 0)
    {
        $zbroj += $number;
    }
}

echo "Zbroj je $zbroj";

?>