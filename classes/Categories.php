<?php
include ('Database.php');
class Categories extends Database{
    public $category;

    public function getCategory($category){
        $this->category=$category;
    }
    function addCategory(){
        $query= "INSERT INTO category value (null,?)";
        $stmt = $this->connect()->prepare($query);
        $res= $stmt->execute(array($this->category));
        var_dump($res);
        return $res;

    }
}