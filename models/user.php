<?php //require_once 'models/modelbase.php'; ?>

<?php

class User extends modelBase {

    private $id;
    private $nom;
    private $cognoms;
    private $email;
    private $pass;
    private $data;

    //no cal declarar constuctor pare (parent), si no es declara constructor a classe filla
    //ja ho hereda

    //__get genèric
    public function __get($propietat) {
        if ( property_exists($this, $propietat)) {
            return $this->$propietat;
        }
    }

    //__set genèric
    public function __set($propietat, $valor) {
        if ( property_exists($this, $propietat)) {
            $this->$propietat = $valor;
        }
    }

    /*
    // Get the value of nom
    public function getNom()
    {
        return $this->nom;
    }

    // Set the value of nom
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this->nom;
    }

    // Get the value of titol
    public function getTitol()
    {
        return $this->titol;
    }

    //Set the value of titol
    public function setTitol($titol)
    {
        $this->titol = $titol;
        return $this->titol;
    }
    */
}
?>