<?php

$var = $_SERVER['REQUEST_METHOD'];
require 'connexion.php';
header("Content-type:application/json");

switch ($var) {
    case 'GET':
        if(isset($_GET["id"]) && ($_GET['id'] != null))
            {$id = $_GET["id"];
            unProduit($id);
        }
        else
        tousProduit();
        break;
    }

function unProduit($id) {
    global $connexion;
    if(property_exists($id){
        $requeste = "SELECT * FROM product WHERE id=:x";//requete
        $stmt->bindPaint(":x", $id);//liaison des donnes avec la requete
        $stmt = $connexion->prepare($requeste);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($resultat);
    })
    else
    echo "id non existant";
}

function tousProduit(){
    global $connexion;//connection
    $requeste= "SELECT * FROM product";//requete sql
    $stmt = $connexion->prepare($requeste);//??
    $stmt->execute();
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);//sauvgarder le resultat en $resultat
    echo json_encode($resultat);//convertir le tab php en json

}

?>