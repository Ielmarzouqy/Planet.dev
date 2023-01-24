<?php
include ('Database.php');
class Categories extends Database{
    public $category;
    public function setCategory($category){
        $this->category = $category;;
    }
     public function getCategory(){
        return $this->category;
    }
   public function addCategory(){
        $query= "INSERT INTO category value (null,?)";
        $stmt = $this->connect()->prepare($query);
        $res= $stmt->execute(array($this->category));
        return $res;
    }
    public function  getAllCategory(){
        $query = "SELECT * FROM category ";
        $stmt = $this->connect()->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}