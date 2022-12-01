<?php

class userController {

    public function mostrarTots(){

        //require_once 'models/nota.php';
        $user = new User();
        $tots = $user->aconseguirTots('usuaris');
        require_once 'views/users/mostrarTots.php';

    }
}
?>