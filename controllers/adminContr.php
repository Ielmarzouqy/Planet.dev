<?php
 require_once '../classes/admin.php';
 session_start();
 class Admin_controller extends Admin{

  function sign(){
    if(isset($_POST['SignSubmit'])){
        $this->setfirstName($_POST["firstName"]);
        $this->setlastName($_POST["lastName"]);
        $this->setemail($_POST["email"]);
        $this->setpassword($_POST["password"]);
        $res = $this->signup();        
    }
  }

  function log(){
    if(isset($_POST['logSubmit'])){
       $this->setemail($_POST["logemail"]);
       $this->setpassword($_POST["logpassword"]);
       $result=$this->login();
       if($result){
          $_SESSION['Admin']=$result['id'];
          echo "view dashboard";
          header("Location: ../view/dashboard.php");
       }else{
          $_SESSION['loginError']="incorrect inputs";
         echo "error dashbord";
       }
    }
  }

  function displayUser(){
       $this->setId($_SESSION['Admin']);
       return $this->getUser();
  }

 }


