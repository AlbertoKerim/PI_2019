<?php

function Zadatak1($x, $y)
{
	if ($x > $y)
	{
		echo "Prvi ($x) je veci od drugog ($y)";
	}
	elseif ($x < $y)
	{
		echo "Prvi ($x) je manji od drugog ($y)";
	}
	else
	{
		echo "Brojevi su jednaki";
	}
}

function Zadatak2($broj)
{
	if ($broj < 100)
	{
		echo "Broj je manji od 100";
	}
	elseif ($broj > 99 and $broj < 201)
	{
		echo "Broj je veci od 100 a manji od 200";
	}
	else
	{
		echo "Broj je veci od 200";
	}
}

function Zadatak3($postotak)
{
	if ($postotak <= 50 and $postotak > 0)
	{
		echo "Ocjena 1";
	}
	elseif ($postotak > 50 and $postotak <= 65)
	{
		echo "Ocjena 2";
	}
	elseif ($postotak > 65 and $postotak <= 80)
	{
		echo "Ocjena 3";
	}
	elseif ($postotak > 80 and $postotak <= 95)
	{
		echo "Ocjena 4";
	}
	elseif ($postotak > 95 and $postotak <= 100)
	{
		echo "Ocjena 5";
	}
	else
	{
		echo "Nemoguci %";
	}
}

function Zadatak4()
{
	$zbroj = 0;
	for($i=0;$i<=100;$i++)
	{
		$zbroj += $i;
	}
	
	echo "Zbroj 100 brojeva je $zbroj";
}

?>