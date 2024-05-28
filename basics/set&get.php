<?php

class User{

    public $username;
    private $email;

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
        return "$this->username added new friend";
    }

    //getters

    public function getEmail(){
       return $this->email;
    }

    //setters
    
    public function setEmail($email){
        if (strpos($email, '@') > -1) {
           $this->email = $email;
        }
    }
}

    $userOne = new User("bigwave", "bigwave@gmail.com");
    $userTwo = new User("tresor", "tresor@gmail.com");

    $userOne->setEmail('treygmail.com');

    echo $userOne->getEmail()."<br>"; 
    echo $userTwo->getEmail(); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

