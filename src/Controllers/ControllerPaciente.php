<?php

namespace Controllers;

use Models\Paciente;
use Views\Home;
use Views\TableHTML;

class ControllerPaciente {

    public function listar(){

        $pacientes = new Paciente(); 

        $dados = $pacientes->inserirPacientes();
        
        $view = new TableHTML('Listar'); 
        $view->render($dados);

    }

    public function mostrar(){

        $pacientes = new Paciente(); 

        $dados = $pacientes->inserirPacientes();
        
        $view = new TableHTML('Mostrar'); 
        $view->render($dados);

    }

    public function home(){

        $home = new Home();
        $home->entrada();

    }
    
}


