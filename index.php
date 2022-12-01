<?php require_once 'includes/helpers.php'; ?>
<?php $titol="Vista Model Controlador MVC - aleon"; ?>
<?php require_once 'includes/header.php'; ?>

<!-- 
-->
<div class= 'main'>

  <?php

  //controladors
  require_once 'controllers/notaController.php';
  require_once 'controllers/userController.php';

  //index.php?controller=nota&action=mostrarTots
  //index.php?controller=nota&action=crear
  
  $error = false;
  //var_dump(class_exists($_GET['controller'].'Controller'));

  if ( isset($_GET['controller']) ) {

        // Convertim l'índex en un controlador frontal
        // mirem si existeix el controlador
        if (class_exists($_GET['controller'].'Controller')) {
            
            //si existeix controlador, càrrega de classes
            require_once 'includes/autoload.php';
            $nom_controlador = $_GET['controller'].'Controller';
            //echo $nom_controlador;
            $controlador = new $nom_controlador;

            // en aquest cas mirem que existeixi el mètode
            if (isset($_GET['action']) && method_exists($nom_controlador, $_GET['action'])) {
                $action = $_GET['action'];
                $controlador->$action();
            } else {
                $error = true;
            }
            
        //error
        } else {
            $error =true;
        }
    } else {
    
        echo "Pàgina home neta :)";
      }

  if ($error) {
      echo "Error: Aquesta pàgina no existeix";
    } 

  ?>

<!-- fi main -->
</div>

<?php require_once 'includes/footer.php';?>
