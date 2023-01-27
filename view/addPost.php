<?php
include('../includes/sidebar.php');
include('../controllers/postContr.php');
$Post=new Post_controller();
$Post->savePost();

$category = new Categories();
$categories = $category->getAllCategory();
?>
  <link rel="stylesheet" href="../asset/message.css">
<div class="home_content ms-5">
<button onclick="addForm()" class="btn btn-primary d-flex m-4 me-auto"> add more</button>

    <form  method="POST" enctype="multipart/form-data">
            <div class=" row  p-4">
                <div  class="row">
                    <h3 class="text-start " >Add Post</h3>
                    <div class="d-flex gap-2 flex-column">
                        <!-- <div class="d-flex gap-5 flex-row"> -->
                            <div class="d-flex align-content-stretch gap-5 flex-wrap">
                            <!-- <div class=" p-4 col-md-6 col-sm-12 col-lg-4 bg-info"> -->
                                
                            <div class="grid gap-0 bg-white row-gap-3">
                                <div class=" name p-2  ">
                                    <i class="fas fa-user"></i>
                                    <input type="text" class=" " placeholder="Title" name="title[]" id="title">
                                </div>
                                <div class="name">
                                    <i class="fas fa-user"></i>
                                    <input type="file" placeholder="image" name="image[]" id="image">
                                </div>
                                <div class="name">
                                    <i class="fas fa-user"></i>
                                    <input type="text" placeholder="Description" name="description[]" id="description">
                                </div>
                                <div class="name "  >
                                    <select name="category[]" id="category" class=" p-4 form-select form-select-lg rounded-pill mb-3" aria-label=".form-select-lg example">
                                        <option selected>Choose a category</option>
                                        <?php foreach($categories as $category)  :?>      
                                        <option value=<?= $category['id_category']?>><?=$category['name'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            
                                <div class="name border-radius ">
                                    <i class="fas fa-user"></i>
                                    <textarea class="form-control p-4" placeholder="Content" name="content[]" id="content"></textarea>
                                </div>
                            </div>
                            <!-- add more -->
                            <div id="divForm" class="bg-white d-none grid gap-0 row-gap-3  ">
                                
                                <div  class="p-4 ">
                                    <div class="name">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Title" name="title[]" id="title">
                                    </div>
                                    <div class="name">
                                        <i class="fas fa-user"></i>
                                        <input type="file" placeholder="image" name="image[]" id="image">
                                    </div>
                                    <div class="name">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Description" name="description[]" id="description">
                                    </div>
                                    <div class="name "  >
                                        <select name="category[]" id="category" class=" p-4 form-select form-select-lg rounded-pill mb-3" aria-label=".form-select-lg example">
                                            <option selected>Choose a category</option>
                                            <?php foreach($categories as $category)  :?>      
                                            <option value=<?= $category['id_category']?>><?=$category['name']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                
                                    <div class="name border-radius ">
                                        <i class="fas fa-user"></i>
                                        <textarea class="form-control p-4" placeholder="Content" name="content[]" id="content"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            <button id="send" type="submit" class="btn g-col-12 bg-success text-white my-4" name="save" onclick="message()">Save</button>
                        </div>
                    </div>
                    <div class="message">
                        <div class="success text-success" id="success">Your Category Successfully Sent!</div>
                        <div class="danger text-danger" id="danger">Feilds Can't be Empty!</div>
                    </div>
                </div>

            </div>
    </form>
</div>
<script src="../asset//javascript/main.js"></script>