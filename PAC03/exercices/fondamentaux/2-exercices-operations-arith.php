<?php

/**
 * Exercice 1 
 * 
 * Sachant qu'à Interface3, il y a des formations différentes. 
 * Quelques exemples de formations avec leur nombre de stagiaires (nombre fictif) 
 *  
 *   WEB : 18
 *   WAD : 15
 *   Unity: 15
 *   ASR : 20 
 * 
 *   Calculer et afficher le total de stagiaires pour ces formations 
 */

$WEB= 18;
$WAD= 15;
$Unity= 15;
$ASR= 20;

echo "WEB"."(".$WEB.")"." + "."WAD"."(".$WAD.")"." + "."Unity"."(".$Unity.")"." + "."ASR"."(".$ASR.")"." = ".($WEB + $WAD + $Unity + $ASR)." stagiaires"."<br>";


 /**
 * Exercice 2 
 * 
 *  Vous fêtez un anniversaire. 
 *  Pour allumer les bougies du gâteau, vous utilisez 3 allumettes d'une boîte de 50. 
 *  
 *  1. Calculer et afficher le nombre qu'il reste. 
 *  
 *  2. Et si votre boîte d'allumettes en contenait 120 ?
 *     Utilisez la puissance de flexbililité des variables 
 * 
 */
 
$matchbox_quantity= 120;
$used_matches= 3;

echo "Nombres d'allumettes: ".$matchbox_quantity." - "."Nombre d'allumetes utilisés: ".$used_matches." = ".($matchbox_quantity-$used_matches)."<br>";




 /**
 * Exercice 3
 * 
 *  Interface3 dispose de 10 salles de cours. 
 *  Combien faudrait-il de stagiaires par classe, s'il y 210 stagiaires inscrites?  
 *  
 *  Calculer et afficher ce nombre
 * 
 */

 $num_classrooms= 10;
 $num_students= 210;

 echo "(Nombres de stagiaires)".": ".$num_students." / "."(Nombre de classes)".": ".$num_classrooms." = ".($num_students / $num_classrooms)."<br>" ;



 /**
 * Exercice 4
 * 
 *  Vous êtes sorties entre  copines (5 au total), avaient mangé des pizzas, pour 12,56 EUR chacune. 
 *  Combien sera l'addition ? 
 *  Calculez et afficher ce nombre 
 */


$num_friends= 5;
$bill_per_person= 12.56;
// mieux de définir la variable avec la solution arithmétique : $total= $num_friends * $bill_per_person. C'est plus lisible

echo "(Nombres d'amies)".": ".$num_friends." * "."(Addition par personne)".": ".$bill_per_person."EUR"." = ".($num_friends * $bill_per_person)."EUR"."<br>";



 /**
 * Exercice 5
 * 
 *  Calculer et afficher le reste de la division de 25 par 3. 
 *  Indice : utilisez l'opération modulo 
 * 
 * 
 * 
 */

$big_num = 25;
$smol_num = 3;
$result= $big_num % $smol_num;
//* si on veut afficher 8, il faut faire : intdiv($big_num, $smol_num)

echo $big_num." % ".$smol_num." = ".$result;
 


    

?>