<?php
//spécifier que le fichier retourne du json et pas du Html
header("Content-Type:application/json");
//création du tableau associatif
$etudiant = ["nom"=> "ahmed", "age"=> 25,"salaire"=>3000 ];
//convertir le tableau associatif à un objet json
$obj_json= json_encode($etudiant);
//affichage des données json
echo $obj_json;
?>