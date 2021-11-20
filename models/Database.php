<?php

class Database{

    private static $instance;
    private $pdo;

    public static function getInstance(): Database{
        if(!isset(self::$instance)){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    private function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=JeuSerpent;charset=utf8', 'root', '');
    }

    public function readData($req, $data){
        $req = $this->pdo->prepare($req);
        $req->execute($data);
        return $req->fetchAll();
    }

    public function insertData($req, $data){
        $req = $this->pdo->prepare($req);
        $req->execute($data);
    }

    

}

?>