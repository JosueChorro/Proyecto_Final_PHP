<?php

class ColorController{
       
    public function Index(){
        //muestra todas las partes de la vista home
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_color.php';
        require_once 'view/pages/foot_read.php';
    }
    
}

?>