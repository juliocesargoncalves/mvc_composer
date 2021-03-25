<?php

namespace app\Models;

use Exception;
use PDO;
use PDOException;

abstract class Connection{

    private $host = "localhost";
    private $dbname = "mvc";
    private $user = "root";
    private $pass = "";

    //$pdo = new PDO('mysql:host=localhost; dbname=base_teste;', 'root', '');

    public function connect(){

        try{

            $conn = new PDO(

                "mysql:host=$this->host; dbname=$this->dbname;",
                "$this->user",
                "$this->pass"
            );

            return $conn;

        } catch(PDOException $e){

            echo '<p>'.$e->getMessage().'</p>';

        }

    }
}
?>