<?php

 require 'Database.php';

 class Admin extends Database{

    public $firstName;
    public $lastName;
    public $email;
    public $password;
    // public $pfp;
    // public $pfpName;
    public $id;

    // __setters___//

    public function setfirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setlastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setpassword($password)
    {
        $this->password = $password;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    // __functions__//

    function signup(){
      $que = "INSERT INTO admin VALUES(null,?,?,?,?,?) ";
      $stmt= $this->connect()->prepare($que);
      $stmt->execute([$this->firstName,$this->lastName,$this->email,$this->password]);
    //   move_uploaded_file($this->pfpName, '../assets/users pfp/' . $this->pfp);
    }

    function login(){
      $que = "SELECT * FROM admin where email=? && password=?";
      $stmt= $this->connect()->prepare($que);
      $stmt->execute([$this->email,$this->password]);
      return $stmt->fetch();
    }

    function getUser(){
        $que = "SELECT * FROM admin where id=?";
        $stmt= $this->connect()->prepare($que);
        $stmt->execute([$this->id]);
        return $stmt->fetch();
    }
 }

?>