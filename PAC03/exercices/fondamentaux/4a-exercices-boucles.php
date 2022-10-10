<?php

/**
 *  Exercice 1
 * 
 * Sel et Miel dispose de 10 Places numérotées de 1 à 10. 
 * A l'aide d'une boucle
 *  
 * Afficher la liste des tables :
 * - Place 1 
 * - Place 2
 * - ...
 * - Place 10 
 * 
 * 
 * Utilisez les boucles: while et for
 *  
 *   while (...) {
 *      affiche numéro 
 *    }
 * 
 *   for(...) {}

 */

$places = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count= 0;

while ($count < 10) {
    echo "Place ".$places[$count]."<br>";
    $count++;
}

// demande de faire sans liste/array

 


/**
 * Exerice 1.a 
 *  Implémenter un comptage jusqu'à 10, à l'aide d'une boucle
 *    while
 *    for 
 *
 */

$count= 1;
while ($count < 10) {
    $count++ ;
    echo "$count"."<br>";

}

for($count=1 ; $count < 11 ; $count++) {
    echo "$count"."<br>" ;
}



/**
* Exercice 1.b
*   Afficher les numéros d'étage d'un immeuble de 20 étages.
*   en utilisant une boucle 
*       - for 
*       - while 
*/

for ($floor =1; $floor < 21 ; $floor++) {
    echo "Étage "." $floor "."<br>" ;
}

$floor = 1;
while ($floor < 21) {
    echo "Étage "."$floor "."<br>";
    $floor++; //si je met cette ligne juste au dessus, il aura déjà incrémenté d'un et commencera à 2 jusque 21.
}
/*$floor = 0;
while ($floor < 20) {
    $floor++;       Si je le met ici, il faut mettre $floor=0 et < 20
    echo "Étage "."$floor "."<br>";
    */
?>