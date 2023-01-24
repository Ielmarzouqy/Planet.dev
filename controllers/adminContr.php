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
        if($res){
            echo `
            <script>
          alert("success");
            </script>
            `;
        }       
    }
  }

  function log(){
    if(isset($_POST['logSubmit'])){
       $this->setemail($_POST["logemail"]);
       $this->setpassword($_POST["logpassword"]);
       $result=$this->login();
       if($result){
          $_SESSION['Admin']=$result['id'];
          header("Location: ../view/dashboard.php");
       }else{
          $_SESSION['loginError']="incorrect inputs";
       }
    }
  }

  function showUser(){
       $this->setId($_SESSION['Admin']);
       return $this->getAdmin();
  }
 }


