<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este recibe peticiones 
    - Manda la información al modelo para procesarla
    - Carga las vistas como respuesta al usuario
*/

class UsuarioController{
    // home usuario  
    public function Index(){
        //muestra todas las partes de la vista home
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_user.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // crear un usuario
    public function CrearUsuario(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_user.php';
        require_once 'view/pages/foot.php';
    }
    
}

?>