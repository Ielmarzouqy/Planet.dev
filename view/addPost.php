<?php
include('../includes/sidebar.php');
include('../controllers/postContr.php');
$Post=new Post_controller();
$Post->savePost();
?>
  <link rel="stylesheet" href="../asset/message.css">


<div class="home_content">
    <form action="" method="POST">
            <div class=" container">
                <div class=" d-grid gap-3 justify-content-center box">
                    <h3 class="text-center" >Add Post</h3>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Title" name="title" id="title">
                    </div>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Description" name="description" id="description">
                    </div>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder ="Category" name="category" id="category">
                    </div>
                    <div class="name border-radius ">
                        <i class="fas fa-user"></i>
                        <textarea class="form-control" placeholder="Content" name="content" id="content"></textarea>
                    </div>
                    <div>
                        <label for="formFileLg" class="form-label">Cover</label>
                        <input class="form-control form-control-lg" name="cover" id="formFileLg" type="file">
                    </div>
                    <div class="button">
                        <button id="send" class="btn bg-success text-white" name="catSubmit" onclick="message()">Save</button>
                    </div>
                    <div class="message">
                        <div class="success text-success" id="success">Your Category Successfully Sent!</div>
                        <div class="danger text-danger" id="danger">Feilds Can't be Empty!</div>
                    </div>
                </div>
            </div>
    </form>
</div>