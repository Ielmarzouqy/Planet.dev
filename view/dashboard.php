<?php
    include('../includes/sidebar.php');
include_once('../classes/Post.php');

$post = new Post();
$post->getAllPosts();
?>
<body style="min-height: 100vh; background: url(../asset/image/6166898.jpg) no-repeat fixed; background-size: 70vh; background-position: right bottom;">
 
    <div class="home_content">
        <div class="row d-block px-4 ti">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid ">
                    <img src="../asset//image/Logo.png" style="width:50px; height:50px;" alt="logo">
                    <a class="navbar-brand text text-primary">News Technologies</a>
                </div>
            </nav>
        </div>
        <div class="text-primary p-4 gap-4 row">
            <div class="d-flex justify-content-between  m-6 col-md-6 col-sm-12 col-lg-6" style=" padding: 60px 54px;width: 26rem;border-radius: 5px;background: #f39fec;">
                <div>
                    <h4 class="ms-3 text-white">Articles</h4>
                    <a href="allPosts.php"><?= COUNT($post->getAllPosts())?></a>
                </div>
            </div>
            <div class="d-flex justify-content-between m-6 text-white col-md-6 col-lg-6 col-sm-12" style=" padding: 60px 54px;width: 26rem;border-radius: 5px;background: #b796ed;">
                <div>
                    <h4 class="ms-3 ">Users</h4>
                    <a href="">8</a>
                </div>
            </div>
        </div>
    </div>

       
    </body>