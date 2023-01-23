<?php 
include('../controllers/postContr.php');
include('../includes/head.php');
include('../includes/footer.php');
include('../includes/sidebar.php');

if(isset($_GET['id']))
        {
            $id = ($_GET['id']);
            $post = new Post;
            $result = $post->edit($id);

            if($result)
            {
                ?>
                
                <form action="editPost.php" method="POST" enctype="multipart/form-data">
            <div class=" row gap-5 p-4 contailkner">
                <div class="col-lg-6 col-sm-12 d-grid gap-3 justify-content-center box">
                    <h3 class="text-center" >edite Post</h3>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Title" name="title" id="title"><?= $result['title']?>
                    </div>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="file" placeholder="image" name="image" id="image"><?= $result['image']?>
                    </div>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Description" name="description" id="description"><?= $result['description']?>
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
                        <textarea class="form-control p-4" placeholder="Content" name="content" id="content"> <?= $result['content']?></textarea>
                    </div>
                   
                    <div class="button">
                        <button id="send" class="btn bg-success text-white" name="save" onclick="message()">Upave</button>
                    </div>
                    <div class="message">
                        <div class="success text-success" id="success">Your Category Successfully Sent!</div>
                        <div class="danger text-danger" id="danger">Feilds Can't be Empty!</div>
                    </div>
            </div>
    </form>
                
                <?php
                            }
                            else
                            {
                                echo "<h4>No Record Found</h4>";
                            }
                        }
                        else
                        {
                            echo "<h4>Something Went Wront</h4>";
                        }
                    