<?php

// classes

class User {

    private $email;
    private $name;

    public function __construct(){
        // $this->email = 'mario@thenetninja.co.uk';
        // $this->name = 'mario';
        $this->email = 'email';
        $this->name = 'name';
    }

    public function login(){
        // echo 'the user logged in';
        echo $this->name . 'logged in';
    }

    public function getName()[
        return $this->name;
    ]

    public function getName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return "name has been updated to $name";
        } else {
            return "not a valid name";
        }
    }
}

$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');

// echo $userTwo->getName();
// echo $userTwo->getName(50);
echo $userTwo->getName('shaun');
echo $userTwo->getName();
?>