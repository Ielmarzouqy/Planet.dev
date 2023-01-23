<?php

class Database{
    private $localHost = 'localhost';
    private $user = "root";
    private $dbName = "planet.dev";
    private $pwd = "";

    public function connect(){
        $dsn = 'mysql:host='.$this->localHost.';dbname='.$this->dbName;
        try{
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "connection seccess";
            return $pdo;
        }catch(Exception $e){
            echo "404";
        }
    }

}
