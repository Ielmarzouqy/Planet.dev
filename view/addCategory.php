<?php
include('../includes/sidebar.php');
// echo"add hh";
include_once('../controllers/categoryContr.php');
$Category = new Category_contr();
 $Category->add_category();

?>
    <link rel="stylesheet" href="../asset/message.css">


<div class="home_content">
    <form action="" method="POST">
            <div class=" container">
                <div class=" d-grid gap-3 justify-content-center box">
                    <h3>Add Category</h3>
                    <div class="name">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="category" name="category" id="category" required>
                    </div>
                    <div class="button">
                        <button id="send" class="btn bg-success text-white" name="catSubmit" onclick="message(event)">Save</button>
                    </div>
                    <div class="message">
                        <div class="success text-success" id="success">Your Category Successfully Sent!</div>
                        <div class="danger text-danger" id="danger">Feilds Can't be Empty!</div>
                    </div>
                </div>
            </div>
    </form>
</div>
<script src="../asset/javascript/main.js"></script>