<?php 

namespace Views;

class TableHTML {

    private string $tagname; 
    private array $theader;
    private string $titulo; 

    public function __construct(string $titulo){

        $this->titulo = $titulo;
        $this->tagname = 'table'; 
        $this->theader = ['nome', 'idade', 'genero']; 
    }

    public function render(array $dados){

        echo "<h1>{$this->titulo}</h1>";

        echo "<{$this->tagname}>";

        echo "<tr>";

        foreach ($this->theader as $key ) {
            echo "<th>{$key}</th>";
        }

        echo "</tr>"; 
        
        foreach ($dados as $pacientes => $paciente) {
            echo "<tr>"; 
            foreach ($paciente as $caracteristica => $value) {
                echo "<td>{$value}</td>";
            }
            echo "</tr>"; 
        }
        
        echo "</{$this->tagname}>";

    }
}