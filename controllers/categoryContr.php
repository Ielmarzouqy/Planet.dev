<?php
include('../classes/Categories.php');

class Category_contr extends Categories{

    public function add_category(){

        if (isset($_POST["catSubmit"])){
            $this->getCategory($_POST["category"]);
            $res = $this->addCategory(); 
        }
    }

}
