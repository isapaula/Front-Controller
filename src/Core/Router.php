<?php 

namespace Core;

use Controllers\ControllerPaciente;

class Router {

    public function direcionar(){

        $url = $_SERVER['REQUEST_URI'];

        $path = parse_url($url, PHP_URL_PATH); 

        $arrayUrl = explode('/', $path);
        
        
        if(in_array('listar', $arrayUrl)) {
            
            $controller = new ControllerPaciente();
            $controller->listar();
           
        }elseif(in_array('mostrar', $arrayUrl)){

            $controller = new ControllerPaciente();
            $controller->mostrar(); 
            
        }else{
            
              $controller = new ControllerPaciente(); 
              $controller->home();
        
    }
   }
}