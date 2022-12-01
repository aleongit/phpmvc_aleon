<?php

class notaController {

    // El controlador encapsula accions
    // una acció de crear usuari, mostrar usuari, ...

    //fixem-nos el nom del mètode
    // carreguem el model
    // fem un usari nou
    // a una variable li assignem el resultat del
    // mètode aconseguir tots
    // carreguem a la vista


    public function mostrarTots(){

        //require_once 'models/nota.php';
        $nota = new Nota();
        $tots = $nota->aconseguirTots('notes');
        require_once 'views/notes/mostrarTots.php';

    }

    public function crear() {

        //require_once 'models/nota.php';
        $nota = new Nota();

        /*
        $nota->setNom('Nota1');
        $nota->setTitol('Una nota qualsevol');
        $nom = $nota->getNom();
        $titol = $nota->getTitol();
        */

        $nota->__set('id_user', 2);
        //echo $nota->__get('id_user');
        $nota->__set('titol','Nota de prova!');
        $nota->__set('des',"Descripció de prova!");

        if ( $nota->desar_nota() ) {
            echo "UAU! Nota insertada!<br><br>";
        } else {
            echo "* FATAL ERROR * L'insert ha fet figa";
        }

        $this->mostrarTots();
        //require_once 'views/notes/mostrarNota.php';

    }

}
?>