<?php

Class Personnage
{
    //Propriété
    private $_Pseudo;
    private $_Vie;
    private $_Attaque;

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
        echo "<p>".$this->_Pseudo.", il vous reste ".$this->_Vie." PV ";
    }

}
?>