<?php
$bizname="Sel & Miel";
$welcome="Bienvenue";
$at="chez";

echo "<h3>".$welcome." ".$at." ".$bizname."</h3>"; // ou "<h3> $welcome $bizname $at </h3>"

$dish0="Crêpe aux fraises";
$dish1="Crêpe au sucre";
$dish2="Crêpe aux œufs";
$base_price0=9 ;
$base_price1=10;
$base_price2=20;
$TVA_rate=1.06 ;

echo "<h4> $dish0"." ".($base_price0*$TVA_rate)." "."EUR </h4>"; /** ou on pourrait mettre l'opération mathématiques dans une variable et l'appeler, sans devoir mettre de parenthèses.
 * exemple: $TVAc_dish0 = $base_price0 + ($base_price0 * $TVA_rate)

 * Le % en informatique est utilisé pour savoir si un nombre est divisible sans reste autrement c'est un nombre impair */

echo "<h4> $dish1"." "."....".($base_price1*$TVA_rate)." "."EUR </h4>";

echo "<h4> $dish2"." "."...".($base_price2*$TVA_rate)." "."EUR </h4>";
// on peut faire echo "<br>; si on veut pas utiliser de header ou paragraphe, entre les exercices
