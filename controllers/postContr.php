<?php
include('../classes/Post.php');
class Post_controller extends Post{
function savePost(){
    if(isset($_POST['save'])){
        for ($i=0; $i <sizeof($_POST['title']) ; $i++) { 
            # code...
            $this->setTitle($_POST['title'][$i]);
            $this->setDescription($_POST['description'][$i]);
            $this->setCategory($_POST['category'][$i]);
            $this->setContent($_POST['content'][$i]);
            $this->image=$_FILES['image']['tmp_name'][$i];
            $this->imageName=$_FILES['image']['name'][$i];        
            $result =$this->addPost();
        }
       
        } 
    }
    function deletePost(){
        if(isset($_POST['deletebtn'])){
            $this->deletePosts($_POST['deletebtn']);
        }
    }
    
    public function editPost(){
        $this->setTitle($_POST['title']);
        $this->setDescription($_POST['description']);
        $this->setCategory($_POST['category']);
        $this->setContent($_POST['content']);
        $this->image=$_FILES['image']['tmp_name'];
        $this->imageName=$_FILES['image']['name']; 

        $this->update();
        header('Location: allPosts.php');

    }

    
                        
}