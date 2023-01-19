<?php
include('../classes/Post.php');

class Post_controller extends Post{

function savePost(){
    if(isset($_POST['save'])){
        $this->setTitle($_POST['title']);
        $this->setDescription($_POST['description']);
        $this->setCover($_POST['cover']);
        $this->setContent($_POST['content']);
        $result =$this->addPost();

    }
}
   
}