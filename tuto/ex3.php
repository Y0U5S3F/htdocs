<?php
$tab2 = array(); //création d'un tableau vide
//création des données
$tab2[] = ["nom"=>"ali", "age"=>20, "moyenne"=>16.5];
$tab2[] = ["nom"=>"ahmed", "age"=>23, "moyenne"=>18];
$tab2[] = ["nom"=>"salma", "age"=>25, "moyenne"=>10];
//afficher les données de tous les étudiants
echo "Details des etudiants <br>";
foreach($tab2 as $e)
{
echo "nom :" .$e["nom"] . " moyenne : ". $e["moyenne"]. "<br>";
}
?>