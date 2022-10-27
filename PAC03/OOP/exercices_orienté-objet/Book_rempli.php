<?php

/**
 * Créer une classe Book avec les propriétés
 * 
 * - name
 * - nbPages 
 * - author (Person)
 * 
 * Ecrivez une méthode pour chacune des propriétes 
 * 
 */

class Book {
    // Properties
    public string $name;
    public int $nbPages;
    public string $author;
    
    
    // Methods
    // on utilise le void ici car on fait une assignation, on ne renvoie pas de valeur. C'est durant le get_ qu'on fait un return d'une valeur
    function set_name(string $newName): void {
            $this->name= $newName;
        }
  
    function set_nbPages(int $newNbPages): void {
            $this->nbPages= $newNbPages;
        }
    
    function set_author(string $newAuthor): void {
            $this->author= $newAuthor;
        }
    function get_name(): string {
            return $this->name;
        }
    function get_nbPages(): int {
            return $this->nbPages;
        }
    function get_author(): string{
            return $this->author;
        }
} 

// il faut déclarer le constructeur avec __construct() pour pouvoir faire ça :      $CatcherInTheRye = new Book("CatcherInTheRye", 234, "Jerome David Salinger");

$CatcherInTheRye= new Book();  // important ! crée un objet, une instance de type Book. Comme dans python

$CatcherInTheRye->set_name("Catcher In The Rye "); 
echo $CatcherInTheRye->get_name()."<br>"; // obliger de concaténer le <br>
$CatcherInTheRye->set_nbPages(243);
echo $CatcherInTheRye->get_nbPages()."<br>";
$CatcherInTheRye->set_author("Jerome David Salinger");
echo $CatcherInTheRye->get_author()."<br>";

 ?>