<?php

class Database {

    //define('ERROR_CON', '* FATAL ERROR BD * system down :(');
    const ERROR_CON = '* FATAL ERROR BD * system down :(';

    //mètode estàtic
    public static function connectar() {

    $host = "localhost";
    $user = "phpmvc";
    $pass = "1234";
    $db = "phpmvc";
    $port = "3307";

    @$con = new mysqli($host, $user, $pass, $db, $port);
    
    // Check connection
    if ($con->connect_error) {
        //die(ERROR_CON . $con->connect_error);
        echo "<h2>". ERROR_CON. "</h2>";
        //echo $con->connect_errno;
        //echo $con->connect_error;
        die();
    
    } else {
        //echo "<br> CONNEXIÓ MYSQL OK :) <br>";
        $con->query("SET NAMES 'utf8'");
        return $con;
    }

    }

    
}
?>