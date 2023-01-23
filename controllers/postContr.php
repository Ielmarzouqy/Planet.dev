<?php
include('../classes/Post.php');
class Post_controller extends Post{
function savePost(){
    if(isset($_POST['save'])){
        $this->setTitle($_POST['title']);
        $this->setDescription($_POST['description']);
        $this->setCategory($_POST['category']);
        $this->setContent($_POST['content']);
        $result =$this->addPost();
        } 
    }
    function deletePost(){
        if(isset($_POST['deletebtn']))
         {
            echo $_POST['deletebtn'];
        }
    }
}