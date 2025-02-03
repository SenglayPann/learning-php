<?php
// Define Constants
define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

// Define using const keyword
// const APP_NAME = 'My App 2';
// const APP_VERSION = '1.0.1';
const ex = 'Example';

echo APP_NAME, '<br>', APP_VERSION, '<br>';

// define('APP_NAME', 'My App 2'); // Throws error

// Use in a function
function getAppName() {
  return APP_NAME;
}

echo getAppName(), '<br>';

// const
class Person {
  const AVG_LIFE_SPAN = 79;

  public function getAverageLifeSpan() {
      return self::AVG_LIFE_SPAN;
  }
}

$person = new Person();
echo $person->getAverageLifeSpan(); 