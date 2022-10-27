<?php

/**
 * Créer une classe Veggie qui contient comme propriétés:
 * nom (string), nomrbe de calories (int)
 * 
 * Ecrivez une méthode pour lire chacune des propriétés
 */

class Veggie {
    public string $name;
    public int $nbCalories;
    
    function set_name(string $newName): void {
        $this->name=$newName;
    }
    function set_calories(int $newCalories): void {
        $this->nbCalories=$nbCalories;
    }
}
    
$poireau = new Veggie();
$poireau->set_name("Poireau");
$poireau->set_nbCalories(29);

$chouDBxl = new Veggie();
$chouDBxl->set_name("Choux de Bruxelles");
$chouDBxl->set_calories(31);

echo "<p>Légumes du panier : </p>",
     "<ul>",
     "<li>$poireau->name</li>",
     "<li>$chouDBxl->name</li>",
     "</ul>";

echo "<p>Nombre de calories : </p>",
     "<ul>",
     "<li>$poireau->name <br> $poireau->nbCalories</li>",
     "<li>$chouDBxl->name <br> $chouDBxl->nbCalories</li>",
     "</ul>";
