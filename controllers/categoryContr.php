<?php
include('../classes/Categories.php');
// include('../includes/head.php');
// include('../includes/footer.php');

class Category_contr extends Categories{

    public function add_category(){

        if (isset($_POST["catSubmit"])){
			echo "hhhh";die;
            $this->setCategory($_POST["category"]);
            $res = $this->addCategory(); 
            if($res > 0)
							{
								echo '<div class="alert alert-success fade in"> 
											<button type="button" class="close close-sm" data-dismiss="alert"> <i class="fa fa-times"></i> </button>
											CATEGORY IS <strong> INSERTED SUCCESSFULLY </strong>
										</div>';
							}
							else
							{
								echo '<div class="alert alert-warning fade in"> 
											<button type="button" class="close close-sm" data-dismiss="alert"> <i class="fa fa-times"></i> </button> 
											SOMETHING WENT WRONG TO INSERT DATA! <strong> PLEASE RECHECK </strong>
										</div>';
							}
        }
    }

}
