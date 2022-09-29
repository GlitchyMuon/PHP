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
   


   if ($dish_sugar % 2 == 1) {
      echo "Crêpe au sucre: ".$dish_sugar." eur"."(réduction)";
      
   } 
   else {
      echo "Crêpe au sucre: ".$dish_sugar." eur";
   }

   echo "<p> </p>";

   $dish_mikado = 15;

   if ($dish_mikado % 2 == 1) {
      echo "Crêpe au mikado: ".$dish_mikado." eur"."(réduction)";
   
   } 
   else {
      echo "Crêpe au mikado: ".$dish_mikado." eur";
   }

   echo "<p> </p>";

   $dish_chocolate= 21;

   if ($dish_chocolate % 2 == 1) {
      echo "Crêpe au chocolat: ".$dish_chocolate." eur"."(réduction)";
   }
   else {
      echo "Crêpe au mikado: ".$dish_chocolate." eur";
   }


?>