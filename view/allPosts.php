<?php
include('../includes/sidebar.php');
// include_once('../classes/Post.php');
include_once('../controllers/postContr.php');

$post = new Post_controller;
$post->deletePost();
$posts = $post->getAllPosts();

?>
<body style="background-color: #c0b0fa;">
<div class="home_content " >
<div class=" p-4 container-fluid">
	<div class="p-4 row">
		<div class="p-4 col-sm-12">
			<div id="inam" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
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
						 					<!-- <button type="button" class="btn btn-outline-info">update</button> -->
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
				<a href="#inam" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#inam" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>
</div>

</body>