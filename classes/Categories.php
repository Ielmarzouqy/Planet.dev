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
    // public function getCategory($category){
    //     $this->category=$category;
    // }
   public function addCategory(){
        $query= "INSERT INTO category value (null,?)";
        $stmt = $this->connect()->prepare($query);
        var_dump($this);
        die;
        $res= $stmt->execute(array($this->category));
        // var_dump($res);
        return $res;

    }
    public function  getAllCategory(){
        $query = "SELECT * FROM category ";
        $stmt = $this->connect()->query($query);
        // $res = $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}