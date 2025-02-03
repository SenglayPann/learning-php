<?php

class User
{
  // Properties
  public $name;
  public $email;
  protected $status = 'active';
  private $salary = 1000;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  // Getter
  public function getStatus()
  {
    echo $this->status;
  }

  // Setter
  public function setStatus($status)
  {
    $this->status = $status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

$user2->setStatus('inactive');
$user2->getStatus();

// $user2.salary = 2000; // This will not work because salary is a private property

// var_dump($user2);
