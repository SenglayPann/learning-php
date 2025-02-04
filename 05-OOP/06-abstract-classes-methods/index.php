<?php
abstract class Shape
{
  protected $name;

  // Abstract method to calculate area
  abstract public function calculateArea();

  // Constructor
  public function __construct($name)
  {
    $this->name = $name;
  }

  // Concrete method
  public function getName()
  {
    return $this->name;
  }
}

class Circle extends Shape
{
  private $radius;

  public function __construct($name, $radius)
  {
    parent::__construct($name);
    $this->radius = $radius;
  }

  // Implement the abstract method to calculate area for a circle
  public function calculateArea()
  {
    return pi() * pow($this->radius, 2);
  }
}

class Rectangle extends Shape
{
  private $width;
  private $height;

  public function __construct($name, $width, $height)
  {
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
  }

  // Implement the abstract method to calculate area for a rectangle
  public function calculateArea()
  {
    return $this->width * $this->height;
  }
}

// Create instances of concrete classes
$circle = new Circle('Circle', 5);
$rectangle = new Rectangle('Rectangle', 4, 6);

// Call methods on objects
echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>';


abstract class Person {

  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function greet() {
    return "hello, my name is $this->name";
  }
}

class Student extends Person {
  public $grade;

  public function __construct($name,$grade) {
    $this->grade = $grade;
    parent::__construct($name);
  }

}

$student1 = new Student("lay", 1);
echo $student1->greet();