<?php
include('../includes/sidebar.php');
include('../controllers/postContr.php');
$Post=new Post_controller();
$Post->savePost();

$category = new Categories();
$categories = $category->getAllCategory();
// var_dump($categories);
?>
  <link rel="stylesheet" href="../asset/message.css">


<div class="home_content ms-5">
    <form action="" method="POST">
            <div class=" row gap-5 p-4 contailkner">
                <div class="col-lg-6 col-sm-12 d-grid gap-3 justify-content-center box">
                    <h3 class="text-center" >Add Post</h3>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Title" name="title" id="title">
                    </div>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Description" name="description" id="description">
                    </div>
                    <div class="name "  >
                        <select name="category" id="category" class=" p-4 form-select form-select-lg rounded-pill mb-3" aria-label=".form-select-lg example">
                            <option selected>Choose a category</option>
                            <?php foreach($categories as $category)  :?>      
                            <option value=<?= $category['id_category']?>><?=$category['name'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                
                    <div class="name border-radius ">
                        <i class="fas fa-user"></i>
                        <textarea class="form-control p-4" placeholder="Content" name="content" id="content"></textarea>
                    </div>
                   
                    <div class="button">
                        <button id="send" class="btn bg-success text-white" name="save" onclick="message()">Save</button>
                    </div>
                    <div class="message">
                        <div class="success text-success" id="success">Your Category Successfully Sent!</div>
                        <div class="danger text-danger" id="danger">Feilds Can't be Empty!</div>
                    </div>
                <!-- <div class=" col-lg-6 col-sm-12 d-grid gap-3 justify-content-center  box " id="second" >
                    <h3 class="text-center " >Add Post</h3>
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
                   
                    <div class="message">
                        <div class="success text-success" id="success">Your Category Successfully Sent!</div>
                        <div class="danger text-danger" id="danger">Feilds Can't be Empty!</div>
                    </div>
                </div> -->
            </div>
    </form>
    <button class="btn btn-primary m-2 rounded-pill" id="second">Add more post</button>
</div>