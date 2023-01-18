<?php
 require_once '../classes/admin.php';
 session_start();
echo "admin controller";
 class Admin_controller extends Admin{

  function signUp(){
    if(isset($_POST['SignSubmit'])){
        $this->setfirstName($_POST["firstName"]);
        $this->setlastName($_POST["lastName"]);
        $this->setemail($_POST["email"]);
        $this->setpassword($_POST["password"]);
        // $this->setpfpName($_FILES['pfp']['tmp_name']);
        // $this->setpfp($_FILES['pfp']['name']);

    //     if(empty($this->pfp)) $this->setpfpName('user.png');

    //     $this->signup();

    //     header("Location: ../view/login.php");
    }
  }

  function logIn(){
    if(isset($_POST['logSubmit'])){
       $this->setemail($_POST["logemail"]);
       $this->setpassword($_POST["logpassword"]);
       $result=$this->login();
       if($result){
          $_SESSION['Admin']=$result['id'];
          echo "hi dashboard";
         //  header("Location: ../view/dashboard.php");
       }else{
         //  $_SESSION['loginError']="incorrect inputs";
         echo "error dashbord";
       }
    }
  }

  function displayUser(){
       $this->setId($_SESSION['Admin']);
       return $this->getUser();
  }

 }


