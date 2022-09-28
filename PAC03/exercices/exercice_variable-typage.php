<?php
$bizname="Sel & Miel";
$welcome="Bienvenue";
$at="chez";

echo "<h3>".$welcome." ".$at." ".$bizname."</h3>"; // ou "<h3> $welcome $bizname $at </h3>"

$dish0="Crêpe aux Fraises";
$dish1="Crêpe au Sucre";
$dish2="Crêpe aux œufs";
$base_price0=9 ;
$base_price1=10;
$base_price2=20;
$TVA_rate=0.06 ;

echo "<h4> $dish0".($base_price0*$TVA)."EUR.</h4>"; // ou on pourrait mettre l'opération mathématiques dans une variable et l'appeler, sans devoir mettre de parenthèses.
