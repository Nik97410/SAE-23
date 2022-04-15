<?php

$cities=array
(
    "Tokyo",
    "Mexico",
    "New York",
    "Bombay",
    "Séoul",
    "Shanghai",
    "Lagos",
    "Buenos Aires",
    "Caire",
    "Londre"
);

array_push($cities, "Paris", "Los Angeles", "Calcutta");
sort($cities);

//AFFICHAGE EN MODE TABLEAU 

    echo "<table>";
    echo "<tr>";
    echo "<th >Capitales </th>";
    echo "</tr>";
    foreach ($cities as $valeur) 
    {
        echo ("<tr><td>" . $valeur . "</td></tr>");
    }
    echo "</table>";
?>

<style>
    table,td 
    {
        border: 1px solid #333;
    }

    thead, tfoot {
        background-color: #333;
        color: #fff;
    }
</style>