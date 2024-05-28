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

}
    $userOne = new User("bigwave", "bigwave@gmail.com");
    $userTwo = new User("tresor", "tresor@gmail.com");

    echo $userTwo->addFriend();

    # echo $userOne->username. "<br>";
    # echo $userOne->email. "<br>";
    // echo $userOne->addFriend(). "<br>";

    // $userTwo->username = "Tresor";
    // $userTwo->email = "tresor@gmail.com";

    // echo $userTwo->username. "<br>";
    // echo $userTwo->email. "<br>";
    // echo $userTwo->addFriend(). "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
       <!-- <h1>hello world</h1> -->
    </div>
</body>
</html>