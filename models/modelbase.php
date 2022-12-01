<?php

class modelBase {
    //private  $var;
    
    public $con;

    //per connexió base dades i per totes les classes filles
    public function __construct() {
        $this->con = Database::connectar();
    }

    //mètodes
    public function aconseguirTots($taula) {
        
        $files = [];
        $consulta = "SELECT * from $taula order by id desc";
        
        $resultat = $this->con->query($consulta);

        if ($resultat) {
            /* obtenir un array associatiu */
            while ($fila = $resultat->fetch_assoc()) {  
                //afegim element al array
                array_push($files, $fila );
            }
            /* lliberar resultats */
            $resultat->free();
        }
        /* tancar connexió */
        //$con->close();
    
    return $files;
    }
}
?>