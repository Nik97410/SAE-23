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
sort($cities); //mettre dans l'ordre


    foreach ($cities as $valeur) //boucle pour afficher
    {     //faire des listes 
        echo ("<lu><li>". $valeur ."</li></lu>");
    }

array_push($cities,"Paris", "Los Angeles", "Calcutta");
echo ("<br/> Ajout de ville");
    foreach ($cities as $valeur) //boucle pour afficher
    {     //faire des listes 
        echo ("<lu><li>". $valeur ."</li></lu>");
    }
?>