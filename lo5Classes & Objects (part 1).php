<?php

// classes

class User {

    public $email;
    public $name;

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
}

$userOne = new User();

$userOne->login();
echo $userOne->name;

$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');
// echo $userTwo->name;
// echo $userTwo->email;
$userTwo->login();
?>