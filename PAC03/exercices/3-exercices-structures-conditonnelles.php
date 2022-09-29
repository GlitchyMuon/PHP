<?php




   /**
      * Exercice 6
      * 
      *  Crêpe Sucre: 10 eur
      *  Crêpe Mikado : 15 eur (réduction)
      *  Crêpe Chocolat: 21 eur (réduction)
      *  
      *  Afficher un message de "Réduction" à côté 
      * des crêpes de prix impair
      */
    
   //mon com : pour réussir à savoir si c'est impair, il faut utiliser le modulo

   /** Il faut des accolades dans PHP pour délimiter des zones d'instructions dans des conditions
    */

   $dish_sugar= 10;
   $dish_mikado= 15;
   $dish_chocolate= 21;

   if ($dish_chocolate % 2 == 1) {
      echo "Crêpe au sucre: ".$dish_sugar." eur"."(réduction)";
      
   } 
   else {
      echo "Crêpe au sucre: ".$dish_sugar." eur".";
   }


     


/**
  * Un nombre impair est un nombre dont le reste de la division entière est égale à 1.
  *  X est impair si X = (y*2) + 1. Exemple: 5/2 = (2*2) + 1
  * Le modulo % est une opération qui va renvoyer le reste.
  *  Ici,dans l'exemple, avec 5/2, il renverrait 1.
  
  */

    



  /**
       *  Soit l'assocation suivante: 
       *  
       *  
       *  A -> Table 1
       *  B -> Table 2 
       *  C -> Table 3
       *  D -> Table 4
       *  E -> Table 5
       * 
       * A l'aide d'une instruction "Switch",
       *  construisez
       * les associations ci-dessus de sorte que: 
       * 
       *  Exemple: 
       * $lettre='A';
       * switch($lettre){
       *    case 'A' : echo "Table 1"; 
       *                break ;
       * 
       * }
       * 
       * 
       * 
       
       */
   
?>