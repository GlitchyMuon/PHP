<?php

/**
 * Ecrivez Classe Client avec propriétés: 
 * 
 * - nom 
 * - prenom
 * - adresse
 * - telephone 
 * 
 *  Utiliser constructeur pour nom et prénom 
 * 
 *  Ecrivez methode pour ajouter l'adresse 
 * 
 * Ecrivez une méthode pour lire chacune des propriétés 
 *  
 */

class Client {
    public string $client_name;
    public string $adress;
    public string $telephoneNum;
    
    function __construct(string $name, string $firstname)
    
    {
        $this->client_name = $name." ".$firstname;
    }
    
    function get_ContactInfo(): string {
        return $this->adress;
        $this->telephoneNum;
    }
    
    function set_adress(string $adress): void {
        $this->adress = $adress;
    }
    
    function set_telephoneNum(string $num): void {
        $this->telephoneNum = $num;
    }
}

$AbigailHargreaves = new Client("Hargreeaves", "Abigail");

$AbigailHargreaves->set_adress("Udon Warland Avenue, 5616 1989 New Orleans");

$AbigailHargreaves->set_telephoneNum("+446546553");

echo $AbigailHargreaves->
echo $AbigailHargreaves->get_ContactInfo();

 ?>