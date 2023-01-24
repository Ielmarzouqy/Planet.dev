<?php
include('../includes/sidebar.php');
include('../controllers/postContr.php');
if(isset($_POST['update'])){
$Post=new Post_controller();
$Post->editPost();
}

$data = new Post();
$aricle = $data->edit($_GET['post_edit_id']);

$category = new Categories();
$categories = $category->getAllCategory();
?>
  <link rel="stylesheet" href="../asset/message.css">
<div class="home_content ms-5">
    <form action="" method="POST" enctype="multipart/form-data">
            <div class=" row gap-5 p-4 contailkner">
                <div class="col-lg-6 col-sm-12 d-grid gap-3 justify-content-center box">
                    <h3 class="text-center" >Edit Post</h3>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Title" name="title" id="title" value="<?=$aricle['title'] ?>">
                    </div>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="file" placeholder="image" name="image" id="image">
                    </div>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Description" name="description" id="description" value="<?=$aricle['description'] ?>">
                    </div>
                    <div class="name "  >
                        <select name="category" id="category" class=" p-4 form-select form-select-lg rounded-pill mb-3" aria-label=".form-select-lg example">
                            <option selected>Choose a category</option>
                            <?php foreach($categories as $category)  :
                            $select = "";
                                if($category['name'] === $aricle['name'])
                                    $select = "selected";
                                ?>      
                            <option value=<?= $category['id_category']?> <?=$select?> ><?=$category['name'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="name border-radius ">
                        <i class="fas fa-user"></i>
                        <textarea class="form-control p-4" placeholder="Content" name="content" id="content">
                        <?=$aricle['content'] ?>
                        </textarea>
                    </div>
                    <div class="button">
                        <button id="send" class="btn bg-success text-white" name="update" onclick="message()">Up Date</button>
                    </div>
                    <div class="message">
                        <div class="success text-success" id="success">Your Category Successfully Sent!</div>
                        <div class="danger text-danger" id="danger">Feilds Can't be Empty!</div>
                    </div>
            </div>
    </form>
</div>