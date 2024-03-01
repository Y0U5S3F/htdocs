<?php
//création d’une chaîne de caractères contenant des données en format json
$jsonobj = '{"nom":"ahmed","age":37,"salaire":2500}';
//décodage de json vers tableau associatif php
$obj = json_decode($jsonobj, true);
//affichage
echo "nom : ". $obj["nom"];
echo "<br>";
echo "salaire : ". $obj["salaire"];
?>