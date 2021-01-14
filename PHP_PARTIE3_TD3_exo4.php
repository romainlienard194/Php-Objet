<?php
    include "personnageExo4.php";
    $perso1 = new Personnage(100,"Vincent",30);
    $perso2 = new Personnage(100,"Romain",50);
    
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <?php
        $perso1->affiche();
        $perso2->affiche();

        $perso2->attaque($perso1);
        $perso2->défense($perso1);
        $perso1->attaque($perso2);
     

        $perso1->affichePV();
        $perso2->affichePV();
    ?>
</body>
</html>