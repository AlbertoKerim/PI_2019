<?php

function KamenPapirSkare($izbor1, $izbor2)
{
    $kamen1 = 0;
    $papir1 = 0;
    $skare1 = 0;

    $kamen2 = 0;
    $papir2 = 0;
    $skare2 = 0;

    if (strtolower($izbor1) == "kamen")
    {
        $kamen1 = 1;
		$papir1 = 0;
    	$skare1 = 0;
    }
    else if (strtolower($izbor1) == "papir")
    {
        $kamen1 = 0;
		$papir1 = 1;
    	$skare1 = 0;
    }
    else if (strtolower($izbor1) == "skare")
    {
        $kamen1 = 0;
		$papir1 = 0;
    	$skare1 = 1;
    }

    if (strtolower($izbor2) == "kamen")
    {
        $kamen2 = 1;
		$papir2 = 0;
   		$skare2 = 0;
    }
    else if (strtolower($izbor2) == "papir")
    {
        $kamen2 = 0;
		$papir2 = 1;
   		$skare2 = 0;
    }
    else if (strtolower($izbor2) == "skare")
    {
        $kamen2 = 0;
		$papir2 = 0;
   		$skare2 = 1;
    }

    if ($kamen1 && $skare2 || $papir1 && $kamen2 || $skare1 && $papir2)
    {
        echo "Prvi je pobijednik";
    }

    else if($kamen2 && $skare1 || $papir2 && $kamen1 || $skare2 && $papir1)
    {
        echo "Drugi je pobijednik";
    }
	
	else if ($kamen1 == $kamen2 || $skare1 == $skare2 || $papir1 == $papir2)
    {
        echo "Isti su odgovori. Nema pobijednika";
    }


}

KamenPapirSkare("pAPIR", "pAPIR");

?>