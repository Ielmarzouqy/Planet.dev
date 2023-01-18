<?php 
    // include "include/autoload.php";
    include ("../classes/Database.php");
$con = (new Database())->connect();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style.css">
    <title>planet dev</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body>
<div class="sidebar ">
        <div class="logo_content">
            <div class="logo">
                <a href="../index.php" class="text-success">
                    <span><img src="../asset/img/Logo.png"style="width:30px; height:30px" alt="" height="10"></span>
                </a>
                <div class="logo_name">Planet.Dev </div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
           
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>  
                    <span class="links_name">Dashboard</span>
                </a>
                    <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="../view/viewPost.php">
                    <i class='bx bx-book-open '></i>  
                    <span class="links_name">All Posts</span>
                </a>
                    <span class="tooltip">All Posts</span>
            </li>
            <li>
                <a href="../view/addPost.php">
                    <i class='bx bx-book-open '></i>  
                    <span class="links_name">Add Post</span>
                </a>
                    <span class="tooltip">Add Post</span>
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
                    <!-- <img src="" alt=""> -->
                    <div class="name_job">
                    <div class="name">  </div>
                    <div class="job">Admin</div>
                    </div>
                </div>
				<a href="#">  <i class='bx bx-log-out'id="log_out"></i></a>
              
            </div>
        </div>
    </div>

    <div class="home_content">
        <div class="row d-block px-4 ti">
            <div class="text ">News Technologies</div>
            <label for="exampleDataList" class="form-label">Datalist example</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
    </datalist>
    <div>
        articles
        <!-- <img src="../asset/img/6166898.jpg" style ="width:324px; height:218px;"alt=""> -->
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