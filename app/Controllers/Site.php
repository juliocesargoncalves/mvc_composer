<?php

namespace app\Controllers;

use app\Models\Connection;
use app\Models\Crud;

class Site extends Crud{   

    public function home(){
       require_once __DIR__ . '/../Views/home.php';
    }

    public function cadastro(){

        require_once __DIR__ . '/../Views/cadastro.php';
    }

   public function add(){

       $data = [

            $nome = filter_input(INPUT_POST, 'nome'),
            $email = filter_input(INPUT_POST, 'email'),
            $tel = filter_input(INPUT_POST, 'telefone')
        ];

       $this->create($data);
   }

    public function consulta(){
        $consulta = $this->read();
        require_once __DIR__ . '/../Views/consulta.php';
    }
}