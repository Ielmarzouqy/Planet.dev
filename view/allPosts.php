<?php
include('../includes/sidebar.php');
// include_once('../classes/Post.php');
include_once('../controllers/postContr.php');

$post = new Post_controller;
$post->deletePost();
if(isset($_POST['search']))
	$posts = $post->searchPost($_POST['title-search']);
else
	$posts = $post->getAllPosts();

?>
<body style="background-color: #c0b0fa;">
<div class="home_content " >
<div class="searchBar">
                    
	<nav class="navbar bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand text text-primary">News Technologies</a>
			<form class="d-flex" action="./allPosts.php" method="post" role="search">
				<input class="form-control me-2" type="search" name="title-search" placeholder="Search" aria-label="Search">
				<input class="btn btn-outline-success" name="search" value="Search" type="submit">
			</form>
		</div>
	</nav>
<div class=" p-4 container-fluid">
	<div class="p-4 row">
		<div class="p-4 col-sm-12">
			<div class="container">
			<form action="" method="POST">
			<div class="row p-2">
				<?php foreach($posts as $post)  :?>
				<div class="col-sm-12 col-lg-4 gap-2">
					<div class="card" >
						<img src="../asset/image/<?= $post['image']?>"  class="card-img-top">
						<div class="card-body">
							<h4 class=" text-center card-title"><?= $post['title']?></h4>
							<p class="card-text"><?= $post['description']?></p>
							<p class="card-text text-info"><?= $post['name']?></p>
							<p class="card-text"><?= $post['content']?></p>
								<a href="editPost.php?post_edit_id=<?=$post['id'];?>" class="btn btn-outline-info">Edit</a>
							<button   value=<?= $post['id']; ?> type="submit" name ="deletebtn" class="btn btn-outline-danger">delete</button>
						</div>
					</div>
				</div>
					<?php endforeach;?>
				</div>
					</form>
			</div>				
			</div>
		</div>
	</div>
</div>
</div>
</body>