<?php
include('../classes/Post.php');
class Post_controller extends Post{
function savePost(){
    if(isset($_POST['save'])){
        $this->setTitle($_POST['title']);
        $this->setDescription($_POST['description']);
        $this->setCategory($_POST['category']);
        $this->setContent($_POST['content']);
        $this->image=$_FILES['image']['tmp_name'];
        $this->imageName=$_FILES['image']['name'];        
        $result =$this->addPost();
        } 
    }
    function deletePost(){
        if(isset($_POST['deletebtn'])){
            $this->deletePosts($_POST['deletebtn']);
        }
    }
    function editPost(){
    }
                        
}