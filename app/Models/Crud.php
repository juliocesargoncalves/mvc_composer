<?php

namespace app\Models;

class Crud extends Connection{

    public function create(Array $data){

        if(is_array($data)){

            $conn = $this->connect();
            $sql = "INSERT INTO person (name, email,telefone) VALUES (:nome, :email, :telefone)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":nome", $data[0]);
            $stmt->bindParam(":email", $data[1]);
            $stmt->bindParam(":telefone", $data[2]);
            $stmt->execute();

            header('Location:?router=Site/cadastro/');
        }
    }

    public function read(){

        $conn = $this->connect();
        $sql = "SELECT * FROM person";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

        
    }

    public function update(){

    }

    public function delete(){

    }
}