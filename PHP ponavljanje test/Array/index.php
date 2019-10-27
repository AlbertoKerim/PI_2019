<?php

$lista_ucenika = array(
  'Ivan' => array('Hrvatski' => array(5,5,5), 'Matematika' => array(5,5,5), 'Fizika' => array(5,5,5),),
  'Marko' => array('Hrvatski' => array(5,4,5),'Matematika' => array(5,4,5), 'Fizika' => array(5,4,5),),
  'Ana' => array('Hrvatski' => array(5,4,4), 'Matematika' => array(5,4,4), 'Fizika' => array(5,4,4),),
);

$broj_ocjena = 0;
$zbroj_ocjena = 0;


foreach ($lista_ucenika as $ime_ucenika => $predmeti) {
    echo "<br><b>$ime_ucenika</b> <br>";

    foreach ($predmeti as $predmet => $ocjena) {
      echo "$predmet =";

      for ($i=0; $i < 3; $i++) {
        echo " $ocjena[$i] ";
        $broj_ocjena++;
        $zbroj_ocjena += $ocjena[$i];
      }

      echo "<br>Prosjek ocijena za $predmet je " . round($zbroj_ocjena/$broj_ocjena, 2) . "<br>";

      $zbroj_ocjena = 0;
      $broj_ocjena = 0;

    }
}

?>
