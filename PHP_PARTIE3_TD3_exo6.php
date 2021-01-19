<?php
    Class Personnage
    {
        //Propriété
        private $_Pseudo;
        private $_Vie;
        private $_Attaque;
        private $_Soin;
    
        //Méthode
        public function __construct($Vie, $Pseudo, $Attaque)
        {
            $this->_Vie=$Vie;
            $this->_Pseudo=$Pseudo;
            $this->_Attaque=$Attaque;
        }
    
        public function getAttaque(){
            return  $this->_Attaque;
        }
    
        public function affiche()
        {
            echo "<p>Vous avez ".$this->_Vie." PV et votre pseudo est ".$this->_Pseudo;
            
        }
    
        public function getPseudo()
        {
            return  $this->_Pseudo;
            
        }
    
        public function attaque($persoAttaquant)
        {
            echo "<p>".$persoAttaquant->getPseudo()." attaque et ".$this->_Pseudo." perdez ".$persoAttaquant->getAttaque()."PV ";
            $this->_Vie=$this->_Vie-$persoAttaquant->getAttaque();
        }
    
        public function défense($persoDefend)
        {
            echo "<p>".$persoDefend->getPseudo().", se défend et ne prend pas de dégâts ! :O ";
            $this->_Vie=$this->_Vie+10;
        }
    
        public function affichePV()
        {
            echo "Il vous reste ".$this->_Vie." PV à ".$this->_Pseudo;
        }
        
        public function soin()
        {
            echo $persoDefend."Se redonne des points de vie !".$persoAttaquant." va devoir faire mieux que ça";
            $this->_Soin = $this->_Soin + 100;
        }
    }
    ?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>

<body>

</body>

</html>