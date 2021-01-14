<?php

//exo3
class Personnage
{
    //propiété
    private $_Pseudo;
    private $_Vie;

    //méthode
    public function __construct($_Pseudo)
    {
        $this->_Pseudo = $_Pseudo;
        $this->_Vie = 100;
    }

    public function stat()
    {
        echo $this->_Pseudo.' a actuellement ';
        echo $this->_Vie.' points de vies';

    }
}
?>