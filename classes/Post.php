<?php
include('Database.php');

class Post extends Database{

    public $title;
    public $description;
    public $cover;
    public $content;

    public function setTitle($title){
        $this->title = $title;
    }
    public function setDescription($description){
        $this->description =$description;
    }
     public function setCover($cover){
        $this->cover = $cover;
    }                   
    public function setContent($content){
        $this->content = $content;
    }
    public function addPost(){

        $quer = "INSERT INTO posts VALUE (null, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($quer);
        $result = $stmt->execute(array($this->title, $this->description, $this->cover, $this->content));
        return $result;
    }
}