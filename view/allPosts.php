<?php
include('../includes/sidebar.php');
// include_once('../classes/Post.php');
include_once('../controllers/postContr.php');

$post = new Post_controller;
$posts = $post->getAllPosts();

$post->deletePost();
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
						 	<div class="row">
							 <?php foreach($posts as $post)  :?>
						 		<div class="col-sm-12 col-lg-4">
						 			<div class="card" >
						 				<!-- <img src="../asset/image/post1.jpg"  style="width: 300px;height:300px;"class="card-img-top"> -->
										<div class="card-body">
						 					<h4 class="card-title"><?= $post['title']?></h4>
						 					<p class="card-text"><?= $post['description']?></p>
						 					<p class="card-text"><?= $post['name']?></p>
						 					<p class="card-text"><?= $post['content']?></p>
						 					<button type="button" class="btn btn-outline-info">update</button>
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