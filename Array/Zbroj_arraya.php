<?php

$array = array(10,14,20,30,45,5,4,34,8,90);
$zbroj = 0;

foreach ($array as $key => $value)
{
    $zbroj += $value;
}

echo "Zbroj je $zbroj <br>Aritmeticka sredina je ", ($zbroj/2);

?>