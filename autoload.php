<?php


spl_autoload_register(function ($className){

        $file = __DIR__.'/src/'.str_replace('\\', '/',  $className). '.php'; 

        if (file_exists($file)) {
            include $file; 
            return $file; 
        }else{

            throw new Exception("Arquivo: {$file} não encontrado! E classe não encontrada {$className}!");
        }

}); 