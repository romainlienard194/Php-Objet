<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php 
        $db = new PDO('mysql:host=192.168.65.138;dbname=Ex5POO', 'website', 'website');
        include "personnageExo5.php";
    
        $user1= new Personnage(1, $db);
        $user2= new Personnage(2, $db);
        $user3= new Personnage(3, $db);
        $user4= new Personnage(4, $db);

        $user1->showData();
        $user2->showData();
        $user3->showData();
        $user4->showData();
    
    ?>

</body>

</html>