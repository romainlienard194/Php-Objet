<?php

//exo4
class PersonnageExo4
{
    //propriété
    private $_Pseudo;
    private $_attaque;
    private $_defense;
    private $_Vie;

    public function __construct($_Pseudo)
    {
        $this->_Pseudo = $_Pseudo;
        $this->_attaque = 50;
        $this->_defense = 6;
        $this->_Vie = 100;
    }

    public function attaque($Ennemi)
    {   
        echo "$this->_Pseudo attaque $Ennemi avec un bloc de terre";

    }
}
?>