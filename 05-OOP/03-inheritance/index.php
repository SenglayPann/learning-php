<?php

class User {

  public $name;
  public $email;
  protected $status = 'active';
  private $salary;

  public function __construct($name, $email, $status = 'active', $salary = 0) {
    $this->name = $name;
    $this->email = $email;
    $this->status = $status;  // No need for null coalescing operator
    $this->salary = $salary;
  }

  public function login() {
    echo $this->name . ' logged in <br>';
  }

  public function getStatus() {
    return $this->status; // Return the value instead of echoing
  }

  public function getSalary() {
    return $this->salary; // Return the value instead of echoing
  }

  public function setSalary($salary) {
    $this->salary = $salary;
  }
}

class Admin extends User {

  private $level;

  public function __construct($name, $email, $status, $salary, $level) {
    parent::__construct($name, $email, $status, $salary);
    $this->level = $level;
  }

  public function login() {
    echo 'Admin ' . $this->name . ' logged in <br>';
  }

  public function getLevel() {
    return $this->level;
  }

  public function setAdminSalary($salary) {
    // Indirectly update salary using parent class's method
    $this->setSalary($salary);
  }
}

// Create User instance
$user1 = new User('John Doe', 'john@gmail.com', 'active', 1000);
$user1->login();
echo $user1->getStatus() . "<br>";
$user1->setSalary(2000);
echo $user1->getSalary() . "<br>";

echo "<br>";

// Create Admin instance
$admin1 = new Admin('Tom Smith', 'tom@gmail.com', 'active', 3000, 5);
$admin1->login();
echo $admin1->getStatus() . "<br>"; // Works because status is protected
$admin1->setAdminSalary(5000); // Works via setter method
echo $admin1->getSalary() . "<br>"; // Works via getter method
echo $admin1->getLevel() . "<br>";

?>
