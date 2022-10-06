<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structure conditionnelles - Bonus</title>
</head>
<body>

    <h2>Structures conditionnelles - bonus</h2>
    
    <h4>C'est plein dans l'ascenseur</h4>
        <p>
            Sachant que dans un ascenseur, le maximum de personnes autorisés 
            est de 6.
            Déclarer une variable <em>$nombrePersonnes</em> qui contient une valeur entière  de votre choix. 
            Ecrivez une condition en PHP déterminant si l'ascenseur est plein ou pas.
        </p>

            <?php
                    $max_capacity= 6;
                    $num_people= 6;

                    if ($num_people >= $max_capacity) {
                        echo "<h3> Capacité maximale de l'ascenseur atteint.</h3>";
                    }
                    else {
                        echo "<h3>L'ascenseur peut encore contenir des personnes en plus.</h3>";
                    }

            ?>

    <h4>Age</h4>

        <p>
            Déclarer une variable <em>$age</em> qui contient une valeur entière  de votre choix. 
            Ecrivez une condition en PHP déterminant si la personne est mineure ou majeure.
        </p>
            
            <?php
                    $age= 17;

                    if ($age >= 18) {
                        echo "<h3> Vous êtes majeur·e.</h3>";
                    }
                    else {
                        echo "<h3> Vous êtes mineur·e.</h3>";
                    }

            ?>

            


    
    <h4>Heure</h4>

        <p>
            Déclarer une variable <em>$heure</em> avec une valeur entre 0 et 24.
            Ecrivez une condition en PHP déterminant si c'est le matin, midi ou après-midi ou soir
        </p>
        
            <?php
                    $heure=11;

                    if (18 <= $heure && $heure <= 24){ //l'opération 
                        echo $heure." : c'est le soir.";
                    }
                    elseif (13 <= $heure and $heure <= 17) {
                        echo $heure." : c'est l'après-midi.";
                    }
                    elseif ($heure == 12) {
                        echo $heure." : il est midi.";
                    }
                    else {
                        echo $heure.": c'est le matin.";
                    }
            ?>
  

</body>
</html>