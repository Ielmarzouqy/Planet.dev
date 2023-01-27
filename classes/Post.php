<?php
// include('Database.php');
include('Categories.php');

 class Post extends Database{

    public $title;
    public $description;
    
    public $content;
    public $category;

    public $image;
    public $imageName;
   
    public function  setCategory($category){
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
        $quer = "INSERT INTO posts (`title`, `description`, `category_id`, `content`,`image`)  VALUE ( ?, ?, ?,?,?)";
        $stmt = $this->connect()->prepare($quer);
        $result = $stmt->execute(array($this->title, $this->description,$this->category, $this->content, $this->imageName));
        move_uploaded_file($this->image, '../asset/image/' . $this->imageName);
        return $result;
    }

     public function getAllPosts(){
        $select = "SELECT * FROM posts  inner join category on category_id = id_category";
        $stmt = $this->connect()->query($select);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletePosts($id){
        $delete = "DELETE FROM posts WHERE id=$id";
        $stmt = $this->connect()->prepare($delete);
        $stmt->execute();
    }
    public function edit($id){

        $edit = "SELECT * FROM posts p INNER JOIN category c ON p.category_id = c.id_category WHERE p.id=$id";
        $result = $this->connect()->prepare($edit);
        $res = $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        if($res){
            return $data;
        }else{
            return false;
        }
    }

    public function update(){
        $update = "UPDATE posts SET title=?,description=?,category_id=?,content=? ,image=? WHERE id =?";
        $result = $this->connect()->prepare($update);
        $res = $result->execute(array($this->title, $this->description, $this->category, $this->content, $this->imageName, $_GET['post_edit_id']));
        move_uploaded_file($this->image, '../asset/image/' . $this->imageName);

        return $res;
    }

    public function searchPost($search){
        return $this->connect()
            ->query("SELECT * FROM posts p INNER JOIN category c ON p.category_id = c.id_category WHERE title LIKE '%$search%'")
                ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function statistics($table){
        return $this->connect()
        ->query("SELECT count(*) as statistics FROM $table")
            ->fetch();
    }
}