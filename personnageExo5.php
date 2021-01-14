<?php
    class Personnage{

        private $_id;
        private $_db;
        private $_user;

        public function __construct($id, $db){
            $this->_id = $id;
            $this->_db = $db;

            $this->_user = $this->_db->query("SELECT * FROM personnage WHERE idPersonnage = '".$id."'")->fetch();
            
        }

        public function showData() {
            echo "Je suis ".$this->_user["nom"]." ".$this->_user["prenom"]." et j'ai ".$this->_user["vie"]." PV";
        }

    }
?>