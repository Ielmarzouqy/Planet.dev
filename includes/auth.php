<?php
//include ('../controllers/adminContr.php');
if(!session_id())
   session_start();
    var_dump($_SESSION["Admin"]);

    if(!isset($_SESSION["Admin"])) {
        header("Location: ../view/login.php");
        exit();
    }
?> 