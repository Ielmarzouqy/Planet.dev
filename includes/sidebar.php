<?php 
include('head.php');
include('footer.php');
?>

<link rel="stylesheet" href="../asset/style.css">

<body>
<div class="sidebar ">
        <div class="logo_content">
            <div class="logo">
                <a href="../index.php" class="text-success">
                    <span><img src="../asset/image/Logo.png"style="width:30px; height:30px" alt="" height="10"></span>
                </a>
                <div class="logo_name">Planet.Dev </div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
           
            <li>
                <a href="../view/dashboard.php">
                    <i class='bx bx-grid-alt'></i>  
                    <span class="links_name">Dashboard</span>
                </a>
                    <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="../view/allPosts.php">
                    <i class='bx bx-book-open '></i>  
                    <span class="links_name">All Posts</span>
                </a>
                    <span class="tooltip">All Posts</span>
            </li>
            <li>
                <a href="../view/addPost.php">
                    <i class='bx bx-book-open '></i>  
                    <span class="links_name">Add Posts</span>
                </a>
                    <span class="tooltip">Add Posts</span>
            </li>
            <li>
                <a href="../view/addCategory.php">
                    <i class='bx bx-book-open '></i>  
                    <span class="links_name">Add Category</span>
                </a>
                    <span class="tooltip">Add Category</span>
            </li>
           
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>  
                    <span class="links_name">Settings</span>
                </a>
                    <span class="tooltip">Settings</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <div class="name_job">
                    <div class="name">  </div>
                    <div class="job">Admin</div>
                    </div>
                </div>
				<a href="#">  <i class='bx bx-log-out'id="log_out"></i></a>
              
            </div>
        </div>
    </div>

   

    <script>

        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let seachBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        seachBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }
    </script>

</body>
</html>