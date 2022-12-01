<?php

//funció autoloader, amb paràmetre classe a carregar

function autoloader($classe) {
    //echo "autoloader___" . var_dump($classe);
    //die();
    require_once 'models/'. strtolower($classe).'.php';
}

//funció spl_autoload_register
//passar com a paràmetre la funció anterior
//busca les classes a la carpeta i carrega

spl_autoload_register('autoloader');

?>