<?php
// include('Database.php');
include('Categories.php');

class Post extends Database{

    public $title;
    public $description;
    
    public $content;
    public $category;
   
    public function setCategory($category){
        $this->category = $category;;
    }

     public function getCategory(){
        return $this->category;
    }


    public function setTitle($title){
        $this->title = $title;
    }
    public function setDescription($description){
        $this->description =$description;
    }
                   
    public function setContent($content){
        $this->content = $content;
    }
    public function addPost(){
        $quer = "INSERT INTO posts VALUE (null, ?, ?, ?,?)";
        $stmt = $this->connect()->prepare($quer);
        $result = $stmt->execute(array($this->title, $this->description,$this->category, $this->content));
        return $result;
    }

    public function getAllPosts(){
        $select = "SELECT * FROM posts  inner join category on category_id = id_category";
        $stmt = $this->connect()->query($select);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deletePosts($id){
        $delete = "DELETE * FROM posts WHERE id =?";
        $stmt = $this->connect()->prepare($delete);
        $stmt->execute([$id]);
    }
}