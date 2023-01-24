<?php
include('../classes/Categories.php');
// include('../includes/head.php');
// include('../includes/footer.php');

class Category_contr extends Categories{

    public function add_category(){
        if (isset($_POST["catSubmit"])){
            $this->setCategory($_POST["category"]);
             $this->addCategory(); 
             header('Location: addCategory.php' );
        }
    }
}
