<?php

echo '<table border="1" cellpadding="2">';

$i = 0;

while ($i < 50)
{
   if ($i % 2 == 0)
    {
        echo "<tr>";
        echo '<td bgcolor="orange">';
        echo $i;
        echo "</td>";
    }
    else
    {
        echo '<td bgcolor="#f0f8ff">';
        echo $i;
        echo "</td>";
        echo "</tr>";
    }


    $i++;
}

echo "</table>";

?>