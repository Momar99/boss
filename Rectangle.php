<?php
$longueur= 10;
$largeur=6;
$perimetre=(($longueur+$largeur)*2);
echo "Le périmètre est de $perimetre <br/>";

$demi_perimetre=($longueur+$largeur);
echo "Le demi-périmètre est de $demi_perimetre <br/>";

$surface_du_rectagle=($largeur*$longueur);
echo "La surface du carré est de $surface <br/>";

$diagonale=sqrt($longueur**2+$largeur**2);
echo "La diagonale du carré est de $diagonale <br/>";
?>