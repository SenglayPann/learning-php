<?php

class User {
  public $name;
  public $email;

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  public function login() {
    echo $this->name . ' logged in';
  }

};

$userOne = new User('Mario', 'mario@gmail');
$userOne->login();

echo "</br>";

$userTwo = new User('Luigi', 'luigi@gmail');
echo $userTwo->name . ' - ' . $userTwo->email;