<?php

class User{

    public $username;
    protected $email;
    public $role = 'member';

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function __destruct(){
        echo "user $this->username was removed <br>";
    }
    
    public function __clone(){
        $this->username = $this->username . 'cloned <br>';
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

    public function message(){
        return "$this->email sent a message";
    }
}

    class AdminUser extends User{
        public $level;
        public $role = "admin";

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent::__construct($username, $email);
        }
        public function message(){
            return "$this->email, admin sent a message";
        }
    }


    $userOne = new User('bigwave', 'bigwave@gmail.com');
    $userTwo = new User('trey', 'trey@gmail.com');
    $userThree = new AdminUser('Hirwa', 'Hirwa@gmail.com', 6);
    $userFour = clone $userOne;

    echo $userFour -> username;

    // unset($userOne);

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