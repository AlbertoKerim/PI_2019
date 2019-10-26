<?php

$array = array(10,14,20,30,45,5,4,34,8,90);

foreach ($array as $key => $value)
{
    $number = $value;

    if ($number%4 !== 0)
    {
        echo "A[$key] = $value, <br>";
    }
}

?>