<?php

namespace Models; 

class Paciente {
    
    public function inserirPacientes(){

        $pacientes = array( 'Paciente1' => array('nome' => 'Joaquin', 'idade' => 20, 'Genero' => 'M'),
                            'Paciente2' => array('nome' => 'Paulo', 'idade' => 50, 'Genero' => 'M'),
                            'Paciente3' => array('nome' => 'Murilo', 'idade' => 27, 'Genero' => 'M'));
     
        return $pacientes;

    }
    
}

