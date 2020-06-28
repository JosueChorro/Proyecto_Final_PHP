<?php

class ClienteController{
       
    public function Index(){
        //muestra todas las partes de la vista homes
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_customer.php';
        require_once 'view/pages/foot_read.php';
    }
    
}

?>