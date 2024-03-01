<?php
$var1 = "Moyenne";//variable chaine de caractere
$var2 = 12.5; //variable numerique
echo "$var1 = $var2"; //affichage avec interprétation des valeurs de variables
echo "<br>"; //toute balise HTML doit être placée entre '' ou ""
echo '$var1 = $var2'; //sans interprétation
echo '<br>';
//autre méthode d'affichage
echo $var1 . "= ". $var2; //affichage avec interprétation des valeurs de variables
?>